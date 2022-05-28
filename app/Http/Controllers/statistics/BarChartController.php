<?php

namespace App\Http\Controllers\statistics;

use App\BarChart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BarChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.charts.bar-chart.bar-index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.charts.bar-chart.bar-create');
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

        BarChart::create([
            'labels_1' => request('labels_1'),
            'label_1' => request('label_1'),
            'data_1' => request('data_1'),
            'labels_2' => request('labels_2'),
            'label_2' => request('label_2'),
            'data_2' => request('data_2'),
            'labels_3' => request('labels_3'),
            'label_3' => request('label_3'),
            'data_3' => request('data_3')
        ]);

        return redirect('/barchart')->with('message', 'Data created successfully');
    }

    public function barjson()
    {
        $result = \DB::table('bar_charts')
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
        $barchart = BarChart::find($id);
        return view('admin.charts.bar-chart.bar-edit', compact('barchart'));
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
        $barchart = BarChart::find($id);
        $barchart->update($request->all());
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
        $barchart = BarChart::find($id);
        $barchart->delete();
        return redirect()->back()->with('message', 'Data deleted successfully');
    }
}
