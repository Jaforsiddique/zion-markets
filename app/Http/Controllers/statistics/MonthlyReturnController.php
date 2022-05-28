<?php

namespace App\Http\Controllers\statistics;

use Illuminate\Http\Request;
use App\MonthlyReturn;
use App\Http\Controllers\Controller;

class MonthlyReturnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.charts.monthly-return.mon-index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.charts.monthly-return.mon-create');
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
            'year' => 'string|nullable',
            'jan' => 'string|nullable',
            'jan' => 'string|nullable',
            'jan' => 'string|nullable',
            'jan' => 'string|nullable',
            'jan' => 'string|nullable',
            'jan' => 'string|nullable',
            'jan' => 'string|nullable',
            'jan' => 'string|nullable',
            'jan' => 'string|nullable',
            'jan' => 'string|nullable',
            'jan' => 'string|nullable',
            'jan' => 'string|nullable',
        ]);

        MonthlyReturn::create([
            'year' => request('year'),
            'jan' => request('jan'),
            'feb' => request('feb'),
            'mar' => request('mar'),
            'apr' => request('apr'),
            'may' => request('may'),
            'jun' => request('jun'),
            'jul' => request('jul'),
            'aug' => request('aug'),
            'sep' => request('sep'),
            'oct' => request('oct'),
            'nov' => request('nov'),
            'dec' => request('dec')
        ]);

        return redirect()->back()->with('message', 'Data created successfully');
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
        $monthlyreturn = MonthlyReturn::find($id);
        return view('admin.charts.monthly-return.mon-edit', compact('monthlyreturn'));
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
            'year' => 'string|nullable',
            'jan' => 'string|nullable',
            'jan' => 'string|nullable',
            'jan' => 'string|nullable',
            'jan' => 'string|nullable',
            'jan' => 'string|nullable',
            'jan' => 'string|nullable',
            'jan' => 'string|nullable',
            'jan' => 'string|nullable',
            'jan' => 'string|nullable',
            'jan' => 'string|nullable',
            'jan' => 'string|nullable',
            'jan' => 'string|nullable',
        ]);
        
        $monthlyreturn = MonthlyReturn::find($id);
        $monthlyreturn->update($request->all());
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
        $monthlyreturn = MonthlyReturn::find($id);
        $monthlyreturn->delete();
        return redirect()->back()->with('message', 'Data deleted successfully');
    }
}
