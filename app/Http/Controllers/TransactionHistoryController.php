<?php

namespace App\Http\Controllers;

use Yajra\DataTables\Facades\DataTables;
use App\Models\TransactionHistory;
use App\Http\Requests\StoreTransactionHistoryRequest;
use App\Http\Requests\UpdateTransactionHistoryRequest;
use Illuminate\Http\Request;

class TransactionHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = TransactionHistory::with('transaction')->latest()->get();
        if ($request->ajax()) {
            return Datatables::of($data)
                ->addColumn('condition', function (TransactionHistory $transactionHistory) {
                    $condition = $transactionHistory->condition == 'In' ? '<span class="badge badge-success">Money In</span>' : '<span class="badge badge-danger">Money Out</span>';
                    return $condition;
                })
                ->addColumn('amount', function (TransactionHistory $transactionHistory) {
                    return 'Rp. ' . number_format($transactionHistory->amount, 0, ',', '.');
                })
                ->addColumn('updated_at', function (TransactionHistory $transactionHistory) {
                    return $transactionHistory->updated_at->format('d-m-Y H:i:s');
                })
                ->rawColumns(['updated_at', 'amount', 'condition'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('contents.histories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTransactionHistoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTransactionHistoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TransactionHistory  $transactionHistory
     * @return \Illuminate\Http\Response
     */
    public function show(TransactionHistory $transactionHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TransactionHistory  $transactionHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(TransactionHistory $transactionHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransactionHistoryRequest  $request
     * @param  \App\Models\TransactionHistory  $transactionHistory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransactionHistoryRequest $request, TransactionHistory $transactionHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TransactionHistory  $transactionHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(TransactionHistory $transactionHistory)
    {
        //
    }
}
