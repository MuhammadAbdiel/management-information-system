<?php

namespace App\Http\Controllers;

use App\Models\ItemUnit;
use App\Http\Requests\StoreItemUnitRequest;
use App\Http\Requests\UpdateItemUnitRequest;
use RealRashid\SweetAlert\Facades\Alert;

class ItemUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Delete Item Unit!';
        $text = 'Are you sure you want to delete this item unit?';
        confirmDelete($title, $text);

        return view('contents.item_units.index', [
            'itemUnits' => ItemUnit::with(['items'])->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.item_units.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreItemUnitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreItemUnitRequest $request)
    {
        ItemUnit::create($request->validated());
        Alert::success('Success!', 'Item unit has been added.');

        return redirect('/item-units');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ItemUnit  $itemUnit
     * @return \Illuminate\Http\Response
     */
    public function show(ItemUnit $itemUnit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ItemUnit  $itemUnit
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemUnit $itemUnit)
    {
        return view('contents.item_units.edit', [
            'itemUnit' => $itemUnit,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateItemUnitRequest  $request
     * @param  \App\Models\ItemUnit  $itemUnit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateItemUnitRequest $request, ItemUnit $itemUnit)
    {
        $itemUnit->update($request->validated());
        Alert::success('Success!', 'Item unit has been updated.');

        return redirect('/item-units');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ItemUnit  $itemUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemUnit $itemUnit)
    {
        ItemUnit::destroy($itemUnit->id);
        Alert::success('Success!', 'Item unit has been deleted.');

        return redirect('/item-units');
    }
}
