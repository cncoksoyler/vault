<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use Illuminate\Http\Request;

class MachineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return 'index';
        $machines = Machine::all();
        // dd($machines);
        return view('machines',compact('machines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $machineData = Machine::all();
        $amgData = Machine::distinct()->get('AMG');
        $areaData = Machine::distinct()->get('area');
        return view('machines.machine_add', compact('machineData','amgData','areaData'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //buraya validateCategory tarzı bir fonkisyon alınabilir
        $validated = $request->validate([
            'name'=>'required|max:20',
            'AMG'=>'required',
            'area'=>'required'

        ]);
    // dd($request);
        Machine::create([
            'name'=>$request->name,
            'AMG'=> $request->AMG,
            'area'=>$request->area

        ]);


        return redirect()->route('machines.index')
        ->with([
            'message' =>"Ürününüz başarıyla eklendi",
            'message_type' =>'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Machine  $machine
     * @return \Illuminate\Http\Response
     */
    public function show(Machine $machine)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Machine  $machine
     * @return \Illuminate\Http\Response
     */
    public function edit(Machine $machine)
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Machine  $machine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Machine $machine)
    {
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Machine  $machine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Machine $machine)
    {
        return 'destroy';
    }
}
