<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;
use Str;
use Illuminate\Support\facades\DB;

class BlogController extends Controller
{
    public function listblog(){
        $blog = Blog::latest()->paginate(15);
        return view('admin.blog.blog-index',compact('blog'));
    }
    public function create_blog(){
        return view('admin.blog.blog-create');
    }
    public function store(Request $blog){
        $this->validate($blog, [
            'blog_title' => 'required',
            'blog_description' => 'required',
            'blogimageName' => 'required',
            
        ]);
        $mainblog = new Blog();
        $mainblog->blog_title = $blog->blog_title;
        $mainblog->blog_description = $blog->blog_description;
        
        //img upload
        if($blog->hasFile('blogimageName')){
            $extension = $blog->blogimageName->extension();
            $fileName = str_slug($blog->name,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $mainblog->blogimageName = $fileName;
            $blog->blogimageName->move('uploads/Blog',$fileName);
    
        } 
        $mainblog->save();
        return redirect('/blog-list');
 
     }


     //Delete
     public function delete($delete){
         
        $blog = Blog::find($delete);
        DB::table('blogs')->where('id',$blog)->delete();
        $blog->delete();
         return back();
      }

    //UpdatePage
    public function updatepage_blog($id){
        
        $blog = Blog::find($id);
         return view('admin.blog.blog-edit',compact('blog'));
     }
      //EditBlog
    public function update(Request $edit){
        //dd($edit->all());
        $blog = Blog::find($edit->id);
        $blog->blog_title = $edit->blog_title;
        $blog->blog_description = $edit->blog_description;

        if($edit->hasFile('blogimageName')){

            $path = public_path('uploads/Blog'.$blog->blogimageName);
            if(file_exists($path)){
                unlink($path);
            }
            $extension = $edit->blogimageName->extension();
            $fileName = Str::slug($edit->title,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $blog->blogimageName = $fileName;
            $edit->blogimageName->move('uploads/Blog/',$fileName);
        }

        $blog->save();
        return redirect('/blog-list');
        

    }
}
