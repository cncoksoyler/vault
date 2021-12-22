<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\StockDetail;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StockDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $stock = StockDetail::with('modelProducts','modelLocations','modelUsers','modelInputSources')->get()->toArray();
        /* $stock->with('modelProducts','modelLocations','modelUsers','modelInputSources')->get()->toArray(); */
  
      /*  dd($stock); */

        return view('stockdetail')->with([
            'stock'=>$stock,
        ]);
         
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StockDetail  $stockDetail
     * @return \Illuminate\Http\Response
     */
    public function show(StockDetail $stockDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StockDetail  $stockDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(StockDetail $stockDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StockDetail  $stockDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StockDetail $stockDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StockDetail  $stockDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(StockDetail $stockDetail)
    {
        //
    }
}
