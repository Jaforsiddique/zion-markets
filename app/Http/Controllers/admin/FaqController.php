<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Faq;
use Illuminate\Support\facades\DB;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faq = Faq::latest()->paginate(15);
        return view('admin.faq.faq-index',compact('faq'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faq.faq-create');
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
            'answer' => 'required',
            'answer' => 'required',
            
        ]);
        Faq::create([
            'answer' => request('answer'),
            'question' => request('answer')
        ]);

        return redirect('/faq-list')->with('message', 'Data created successfully');
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
        $faq = Faq::find($id);
        return view('admin.faq.faq-edit',compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $edit)
    {
        //dd($edit->all());
        $faq = Faq::find($edit->id);
        $faq->question = $edit->question;
        $faq->answer = $edit->answer;
        $faq->save();
        return redirect('/faq-list');
    }
    // public function update($id, Request $request)
    // {
    //     $this->validate($request, [
    //         'question' => 'required',
    //         'answer' => 'required'
    //     ]);
    //     $faq = Faq::find($id);
    //     $faq->update($request->all());
    //     return redirect('/faq-list')->with('message', 'Data updated successfully');
    // }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($delete)
    {
          
        $faq = Faq::find($delete);
        DB::table('faqs')->where('id',$faq)->delete();
        $faq->delete();
         return back();
    }
}
