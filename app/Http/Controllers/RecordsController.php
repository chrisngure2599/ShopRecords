<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SalesRecords;
use App\ShopItem;
use App\Salesrecord;

class RecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sales.index') ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //First collecting shopItems
        $si=new Shopitem;
        if ($si->count()) {
            $si=$si->all();
            return view('sales.add')->with('shopitems',$si);
        }else{
            return '<div>Soory please add shopItems first';
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validating
        $request->validate([
            'shop_item_id'=>'required',
            'quantity'=>'required|integer|min:1',
            'price'=>'required|integer'
        ]);
        $sl=new SalesRecords;
        $sl=$sl->create($request->all());
        return redirect($to = 'sales');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
