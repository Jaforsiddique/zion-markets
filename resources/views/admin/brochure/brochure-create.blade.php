@extends('admin.index')
@section('title', 'Table Create')
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
            Upload Brochure
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
    <form action="{{route('brochure.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">

           
            <div class="form-group">
                <label>Data</label>
                <input type="file" name="brochure_file" class="blogupimage form-control{{ $errors->has('brochure_file') ? ' is-invalid' : '' }}"
                />
                @if ($errors->has('brochure_file'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('brochure_file') }}</strong>
                </span>
                @endif
            </div>
            
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
        </div>
    </form>
    <!--end::Form-->
</div>
@endsection
