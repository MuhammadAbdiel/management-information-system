<?php

namespace App\Http\Controllers;

use Yajra\DataTables\Facades\DataTables;
use App\Models\Supplier;
use App\Http\Requests\StoreSupplierRequest;
use App\Http\Requests\UpdateSupplierRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Supplier::with(['transactions'])->latest()->get();
        if ($request->ajax()) {
            return Datatables::of($data)
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="/suppliers/ ' . $row->id . '/edit" class="btn btn-warning"><i
                                    class="mdi mdi-pencil"></i>
                                Edit</a>
                                <a href="/suppliers/' . $row->id . '" class="btn btn-danger" data-confirm-delete="true"><i
                                    class="mdi mdi-delete"></i>
                                Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        $title = 'Delete Supplier!';
        $text = 'Are you sure you want to delete this supplier?';
        confirmDelete($title, $text);

        return view(
            'contents.suppliers.index',
            // [
            //     'suppliers' => Supplier::with(['transactions'])->latest()->get(),
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
        return view('contents.suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSupplierRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSupplierRequest $request)
    {
        Supplier::create($request->validated());
        Alert::success('Success!', 'Supplier has been added.');

        return redirect('/suppliers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        return view('contents.suppliers.edit', [
            'supplier' => $supplier,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSupplierRequest  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSupplierRequest $request, Supplier $supplier)
    {
        $supplier->update($request->validated());
        Alert::success('Success!', 'Supplier has been updated.');

        return redirect('/suppliers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        Supplier::destroy($supplier->id);
        Alert::success('Success!', 'Supplier has been deleted.');

        return redirect('/suppliers');
    }
}
