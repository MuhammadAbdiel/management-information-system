<?php

namespace App\Http\Controllers;

use App\Models\ItemType;
use App\Http\Requests\StoreItemTypeRequest;
use App\Http\Requests\UpdateItemTypeRequest;
use RealRashid\SweetAlert\Facades\Alert;

class ItemTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Delete Item Type!';
        $text = 'Are you sure you want to delete this item type?';
        confirmDelete($title, $text);

        return view('contents.item_types.index', [
            'itemTypes' => ItemType::with(['items'])->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.item_types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreItemTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreItemTypeRequest $request)
    {
        ItemType::create($request->validated());
        Alert::success('Success!', 'Item type has been added.');

        return redirect('/item-types');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ItemType  $itemType
     * @return \Illuminate\Http\Response
     */
    public function show(ItemType $itemType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ItemType  $itemType
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemType $itemType)
    {
        return view('contents.item_types.edit', [
            'itemType' => $itemType,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateItemTypeRequest  $request
     * @param  \App\Models\ItemType  $itemType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateItemTypeRequest $request, ItemType $itemType)
    {
        $itemType->update($request->validated());
        Alert::success('Success!', 'Item unit has been updated.');

        return redirect('/item-types');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ItemType  $itemType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemType $itemType)
    {
        ItemType::destroy($itemType->id);
        Alert::success('Success!', 'Item unit has been deleted.');

        return redirect('/item-types');
    }
}
