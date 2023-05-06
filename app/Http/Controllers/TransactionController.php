<?php

namespace App\Http\Controllers;

use App\Models\Fund;
use App\Models\Item;
use App\Models\Customer;
use App\Models\Supplier;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\TransactionHistory;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Transaction::with('item', 'supplier', 'customer')->latest()->get();
        if ($request->ajax()) {
            return Datatables::of($data)
                ->addColumn('supplier', function (Transaction $transaction) {
                    return $transaction->supplier_id != null ? $transaction->supplier->name : '-';
                })
                ->addColumn('customer', function (Transaction $transaction) {
                    return $transaction->customer_id != null ? $transaction->customer->name : '-';
                })
                ->addColumn('item', function (Transaction $transaction) {
                    return $transaction->item->name;
                })
                ->addColumn('updated_at', function (Transaction $transaction) {
                    return $transaction->updated_at->format('d-m-Y H:i:s');
                })
                ->addColumn('price_total', function (Transaction $transaction) {
                    return 'Rp. ' . number_format($transaction->price_total, 0, ',', '.');
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="/transactions/ ' . $row->id . '/edit" class="btn btn-warning"><i
                                    class="mdi mdi-pencil"></i>
                                Edit</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action', 'item', 'updated_at', 'price_total', 'supplier', 'customer'])
                ->addIndexColumn()
                ->make(true);
        }

        return view(
            'contents.transactions.index',
            // [
            //     'transactions' => Transaction::with(['item', 'supplier', 'customer'])->latest()->get(),
            // ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.transactions.create', [
            'suppliers' => Supplier::all(),
            'customers' => Customer::all(),
            'items' => Item::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTransactionRequest  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(StoreTransactionRequest $request)
    // {
    //     //
    // }
    public function store(Request $request)
    {
        $request->validate([
            'supplier_id' => ['nullable'],
            'customer_id' => ['nullable'],
            'item_id' => ['required'],
            'quantity' => ['required', 'numeric', 'min:1'],
            'transaction_status' => ['required'],
        ]);

        $item = Item::find($request->item_id);
        $fund = Fund::find(1);

        if ($request->customer_id != null) {
            if ($item->quantity == 0) {
                Alert::error('Error', 'Item is out of stock');

                return redirect('/transactions/create');
            }

            Transaction::create([
                'supplier_id' => $request->supplier_id,
                'customer_id' => $request->customer_id,
                'item_id' => $request->item_id,
                'quantity' => $request->quantity > $item->quantity ? $item->quantity : $request->quantity,
                'price_total' => $request->quantity * $item->price,
                'transaction_status' => $request->transaction_status,
            ]);

            if ($request->quantity > $item->quantity) {
                $item->update([
                    'quantity' => 0,
                ]);
            } else {
                $item->update([
                    'quantity' => $item->quantity - $request->quantity,
                ]);
            }

            TransactionHistory::create([
                'transaction_id' => Transaction::latest()->first()->id,
                'condition' => 'In',
                'amount' => Transaction::latest()->first()->price_total
            ]);

            $fund->update([
                'amount' => $fund->amount + Transaction::latest()->first()->price_total,
            ]);
        } else {
            Transaction::create([
                'supplier_id' => $request->supplier_id,
                'customer_id' => $request->customer_id,
                'item_id' => $request->item_id,
                'quantity' => $request->quantity,
                'price_total' => $request->quantity * $item->price,
                'transaction_status' => $request->transaction_status,
            ]);

            $item->update([
                'quantity' => $item->quantity + $request->quantity,
            ]);

            TransactionHistory::create([
                'transaction_id' => Transaction::latest()->first()->id,
                'condition' => 'Out',
                'amount' => Transaction::latest()->first()->price_total
            ]);

            $fund->update([
                'amount' => $fund->amount - Transaction::latest()->first()->price_total,
            ]);
        }

        Alert::success('Success', 'Transaction has been added');

        return redirect('/transactions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        return view('contents.transactions.edit', [
            'transaction' => $transaction,
            'suppliers' => Supplier::all(),
            'customers' => Customer::all(),
            'items' => Item::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransactionRequest  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    // public function update(UpdateTransactionRequest $request, Transaction $transaction)
    // {
    //     //
    // }
    public function update(Request $request, Transaction $transaction)
    {
        $request->validate([
            'transaction_status' => ['required'],
        ]);

        $item = Item::find($request->item_id);

        if ($request->customer_id != null) {
            if ($item->quantity == 0) {
                Alert::error('Error', 'Item is out of stock');

                return redirect('/transactions/' . $transaction->id . '/edit');
            }
        }

        $transaction->update([
            'transaction_status' => $request->transaction_status,
        ]);

        Alert::success('Success', 'Transaction has been updated');

        return redirect('/transactions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
