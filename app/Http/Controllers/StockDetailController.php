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
        // $stockData = StockDetail::with('modelGetStockList')->get()->toArray();
        
        // $stockData2 = StockDetail::with('modelLocations')->get()->toArray();
        // foreach ($stockData as $data){
            
        //    echo  $data["id"];

        // };

        // $stockData = StockDetail::query()->with(['modelGetStockList'=>function(MorphTo $morphTo){
        //     $morphTo->morphWith([
        //         Product::class =>['product_id'],
        //         Location::class =>['location_id'],
        //         User::class=>['user_id'],
        //         InputSource::class=>['input_source_id']
        //     ]);
        // }])->get();
        /* dd([$stockData,$stockData2]); */
        // dd($stockData);
        // $stockData = DB::table('stock_details')->join('products','products.id','=','stock_details.product_id')
        // ->join('locations','locations.id','=','stock_details.location_id')
        // ->join('input_sources','input_sources.id','=','stock_details.input_source_id')
        // ->get();

        // $stockData = DB::table('stock_details')->join('input_sources','input_sources.id','=','stock_details.input_source_id')->join('products','products.id','=','stock_details.product_id')->join('locations','locations.id','=','stock_details.location_id')
        
        // ->select('stock_details.*','products.name as product_name','locations.name as location_name'; 'input_source')
        // ->get();
        $stockData = StockDetail::with('modelProducts','modelLocations','modelUsers','modelInputSources')->get()->toArray();

        return view('stock')->with(['stockData'=> $stockData]);
        

        
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
