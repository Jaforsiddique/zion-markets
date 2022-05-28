<?php

namespace App\Http\Controllers\statistics;

use App\PieChart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PieChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.charts.pie-chart.pie-index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.charts.pie-chart.pie-create');
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
            'labels_1' => 'required',
            'data_1' => 'required',
        ]);

        PieChart::create([
            'labels_1' => request('labels_1'),
            'label_1' => request('label_1'),
            'data_1' => request('data_1'),
            'labels_2' => request('labels_2'),
            'label_2' => request('label_2'),
            'data_2' => request('data_2')
        ]);

       
        return redirect('/piechart')->with('message', 'Data created successfully');
    }


    public function piejson()
    {
        $result = \DB::table('pie_charts')
        ->select('labels_1', 'data_1')
        ->orderBy('id', 'ASC')
            ->get();
        return response()->json($result);
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
        $piechart = PieChart::find($id);
        return view('admin.charts.pie-chart.pie-edit', compact('piechart'));
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
            'labels_1' => 'required',
            'data_1' => 'required'
        ]);
        $piechart = PieChart::find($id);
        $piechart->update($request->all());
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
        $piechart = PieChart::find($id);
        $piechart->delete();
        return redirect()->back()->with('message', 'Data deleted successfully');
    }
}
