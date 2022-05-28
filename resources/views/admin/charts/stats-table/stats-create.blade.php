@extends('admin.index')
@section('title', 'Table Create')
@section('content')

<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Add New Table Data
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
    <form action="{{route('stats.store')}}" method="POST">
        @csrf
        <div class="card-body">

            <div class="form-group">
                <label>Table Head</label>
                <input type="text" name="table_head" class="form-control{{ $errors->has('table_head') ? ' is-invalid' : '' }}"
                    value="{{ old('table_head') }}" placeholder="Title" />
                @if ($errors->has('table_head'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('table_head') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label>Data</label>
                <input type="text" name="table_data" class="form-control{{ $errors->has('table_data') ? ' is-invalid' : '' }}"
                    value="{{ old('table_data') }}" placeholder="Title" />
                @if ($errors->has('table_data'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('table_data') }}</strong>
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
