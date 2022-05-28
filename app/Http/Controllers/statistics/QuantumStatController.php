<?php

namespace App\Http\Controllers\statistics;

use App\QuantumStat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuantumStatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.charts.stats-table.stats-index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.charts.stats-table.stats-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'table_head' => 'required',
            'table_data' => 'required',
        ]);

        QuantumStat::create([
            'table_head' => request('table_head'),
            'table_data' => request('table_data')
        ]);

        return redirect('/quantum-stats')->with('message', 'Data created successfully');
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
        $quantumstats = QuantumStat::find($id);
        return view('admin.charts.stats-table.stats-edit', compact('quantumstats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'table_head' => 'required',
            'table_data' => 'required',
        ]);
        $quantumstats = QuantumStat::find($id);
        $quantumstats->update($request->all());
        return redirect()->back()->with('message', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->get('id');
        $quantumstats = QuantumStat::find($id);
        $quantumstats->delete();
        return redirect()->back()->with('message', 'Data deleted successfully');
    }
}
