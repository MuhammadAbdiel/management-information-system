<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\ItemType;
use App\Models\ItemUnit;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use RealRashid\SweetAlert\Facades\Alert;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Delete Item!';
        $text = 'Are you sure you want to delete this item?';
        confirmDelete($title, $text);

        return view('contents.items.index', [
            'items' => Item::with(['item_type', 'item_unit'])->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $itemTypes = ItemType::latest()->get();
        // foreach ($itemTypes as $itemType) {
        //     dd($itemType->id);
        // }
        return view('contents.items.create', [
            'itemTypes' => ItemType::latest()->get(),
            'itemUnits' => ItemUnit::latest()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreItemRequest $request)
    {
        Item::create($request->validated());
        Alert::success('Success', 'Item created successfully');

        return redirect('/items');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('contents.items.edit', [
            'item' => $item,
            'itemTypes' => ItemType::latest()->get(),
            'itemUnits' => ItemUnit::latest()->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateItemRequest  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        $item->update($request->validated());
        Alert::success('Success', 'Item updated successfully');

        return redirect('/items');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        Item::destroy($item->id);
        Alert::success('Success!', 'Item has been deleted.');

        return redirect('/items');
    }
}
