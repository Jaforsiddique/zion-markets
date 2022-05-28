<?php

namespace App\Http\Controllers\brochure;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Brochure;

class BrochureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.brochure.brochure-index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brochure.brochure-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $blog)
    {
        $this->validate($blog, [
           
             'brochure_file' => 'required|mimes:pdf,doc,docx,pptx|max:20000',
             
         ]);
        $mainblog = new Brochure();

        //img upload
        if ($blog->hasFile('brochure_file')) {
            $extension = $blog->brochure_file->extension();
            $fileName = time() . '.' . $extension;
            $mainblog->brochure_file = $fileName;
            $blog->brochure_file->move('uploads/brochure', $fileName);
        }
        $mainblog->save();
        return redirect('/brochure')->with('message', 'File Uploaded Sucessfully');
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
    public function destroy(Request $request)
    {
        $id = $request->get('id');
        $brochure = Brochure::find($id);
        $brochure->delete();
        return redirect()->back()->with('message', 'Data deleted successfully');
    }
}
