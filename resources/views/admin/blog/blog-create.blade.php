@extends('admin.index')
@section('title', 'Blog Create')
@section('content')
<style>
    input.blogupimage.form-control {
	padding: 22px 15px;
	background: #36ccba;
	height: 70px;
	cursor: pointer;
}
</style>
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
    <form action="{{action('admin\BlogController@store')}}" enctype="multipart/form-data"  method="POST">
        @csrf
        <div class="card-body">

            <div class="form-group">
                <label>Blog Title</label>
                <input type="text" name="blog_title" class="form-control{{ $errors->has('blog_title') ? ' is-invalid' : '' }}"
                    value="{{ old('blog_title') }}" placeholder="blog_title" />
                @if ($errors->has('blog_title'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('blog_title') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label for="content">Blog Content<span class="text-danger">*</span></label>
                <textarea name="blog_description" class="form-control{{ $errors->has('blog_description') ? ' is-invalid' : '' }}" value="{{ old('blog_description') }}"
                     rows="10"></textarea>
                @if ($errors->has('blog_description'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('blog_description') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group mb-1">
                <label for="content">Blog image &nbsp;<span class="text-danger">(image size = 1536 x 864 &nbsp;or &nbsp; 1920 x 1080 )</span></label>
                <input type="file" title="click to image upload" name="blogimageName" class="blogupimage form-control{{ $errors->has('blogimageName') ? ' is-invalid' : '' }}"
                    value="{{ old('blogimageName') }}" />
                @if ($errors->has('blogimageName'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('blogimageName') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </div>
    </form>
    <!--end::Form-->
</div>
@endsection
