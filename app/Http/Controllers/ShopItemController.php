<?php

namespace App\Http\Controllers;

use App\ShopItem;
use Illuminate\Http\Request;

class ShopItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $shopitems=ShopItem::all();
     return view('shopitems')->with('shopitems',$shopitems);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newshopitem');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shopitem=new ShopItem;
        $shopitem=$shopitem->create($request->all());
        return redirect('/shopitems');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ShopItem  $shopItem
     * @return \Illuminate\Http\Response
     */
    public function show(ShopItem $shopItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ShopItem  $shopItem
     * @return \Illuminate\Http\Response
     */
    public function edit(ShopItem $shopItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ShopItem  $shopItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShopItem $shopItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ShopItem  $shopItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShopItem $shopItem)
    {
        //
    }
}
