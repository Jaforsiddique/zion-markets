@extends('admin.index')
@section('title', 'Stats Update')
@section('content')

<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Edit Stats
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
    <form action="{{route('brochure.update',[$brochure->id])}}" method="POST">
        @csrf
        <div class="card-body">

            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                    value="{{ $brochure->title }}" placeholder="Title" />
                @if ($errors->has('title'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label>Data</label>
                <input type="file" name="brochure_file" class="form-control{{ $errors->has('brochure_file') ? ' is-invalid' : '' }}"
                value="{{ $brochure->brochure_file }}"/>
                @if ($errors->has('brochure_file'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('brochure_file') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                    value="{{ $brochure->description }}" placeholder="Description" />
                @if ($errors->has('description'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('description') }}</strong>
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
