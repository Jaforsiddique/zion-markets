@extends('admin.index')
@section('title', 'Faq Create')
@section('content')

<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Add FAQ
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
    <form action="{{action('admin\FaqController@store')}}" method="POST">
        @csrf
        <div class="card-body">

          <div class="form-group">
               <label>Question</label>
               <input type="text" name="question" class="form-control{{ $errors->has('question') ? ' is-invalid' : '' }}"
                   value="{{ old('question') }}" placeholder="Question" />
               @if ($errors->has('question'))
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $errors->first('question') }}</strong>
               </span>
               @endif
           </div>
            <div class="form-group mb-1">
                <label for="content">Answer<span class="text-danger">*</span></label>
                <textarea name="answer" class="form-control{{ $errors->has('answer') ? ' is-invalid' : '' }}"
                    value="{{ old('answer') }}" rows="10"></textarea>
                @if ($errors->has('answer'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('answer') }}</strong>
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
