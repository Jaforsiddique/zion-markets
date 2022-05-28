@extends('admin.index')
@section('title', 'Blog Create')
@section('content')

<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Add New Blog
        </h3>
        @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
            @endif
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form action="{{action('admin\BlogController@update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$blog->id}}">
        <div class="card-body">

            <div class="form-group">
                <label>Blog Title</label>
                <input type="text" name="blog_title" value="{{$blog->blog_title}}" class="form-control{{ $errors->has('blog_title') ? ' is-invalid' : '' }}"
                    value="{{ old('blog_title') }}" placeholder="Title" />
                @if ($errors->has('blog_title'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('blog_title') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group mb-1">
                <label for="content">Blog Content<span class="text-danger">*</span></label>
                <textarea name="blog_description" class="form-control{{ $errors->has('blog_description') ? ' is-invalid' : '' }}"
                     rows="10"> {{$blog->blog_description}}</textarea>
                @if ($errors->has('blog_description'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('blog_description') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group mb-1">
                <label for="content">Blog image &nbsp;<span class="text-danger">(image size = 768 x 432 )</span></label>
                <div class="image-up">
                    <input style="
          padding: 20px 20px;" type="file" name="blogimageName" class="" onchange="document.getElementById('updateimage').src = window.URL.createObjectURL(this.files[0])">
                </div>
                
            </div>
            <div class="form-group ">
                <div class="image-up">
                  
                @if ($blog->blogimageName == 'default.jpg')
                <img id="updateimage" width="100" height="100" src="{{asset('image/default.jpg')}}">
                @else
                <img id="updateimage" src="{{asset('uploads/Blog/'.$blog->blogimageName)}}" alt="" width="100" height="100">
                @endif
                </div>
               
              </div>
            
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </div>
    </form>
    <!--end::Form-->
</div>
@endsection
