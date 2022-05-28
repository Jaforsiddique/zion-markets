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
    <form action="{{route('monthly.store')}}" method="POST">
        @csrf
        <div class="card-body">

            <div class="form-group">
                <label>Year</label>
                <input type="text" name="year"
                    class="form-control{{ $errors->has('year') ? ' is-invalid' : '' }}"
                    value="{{ old('year') }}" placeholder="year" />
                @if ($errors->has('year'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('year') }}</strong>
                </span>
                @endif
            </div>
            <div class="row">
                <div class="col-xl-2">
                    <div class="form-group">
                        <label>Jan</label>
                        <input type="text" name="jan"
                            class="form-control{{ $errors->has('jan') ? ' is-invalid' : '' }}"
                            value="{{ old('jan') }}" placeholder="jan" />
                        @if ($errors->has('jan'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('jan') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="form-group">
                        <label>Feb</label>
                        <input type="text" name="feb"
                            class="form-control{{ $errors->has('feb') ? ' is-invalid' : '' }}"
                            value="{{ old('feb') }}" placeholder="feb" />
                        @if ($errors->has('feb'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('feb') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="form-group">
                        <label>Mar</label>
                        <input type="text" name="mar"
                            class="form-control{{ $errors->has('mar') ? ' is-invalid' : '' }}"
                            value="{{ old('mar') }}" placeholder="march" />
                        @if ($errors->has('mar'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('mar') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="form-group">
                        <label>Apr</label>
                        <input type="text" name="apr"
                            class="form-control{{ $errors->has('apr') ? ' is-invalid' : '' }}"
                            value="{{ old('apr') }}" placeholder="april" />
                        @if ($errors->has('apr'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('apr') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="form-group">
                        <label>May</label>
                        <input type="text" name="may"
                            class="form-control{{ $errors->has('may') ? ' is-invalid' : '' }}"
                            value="{{ old('may') }}" placeholder="May" />
                        @if ($errors->has('may'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('may') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="form-group">
                        <label>Jun</label>
                        <input type="text" name="jun"
                            class="form-control{{ $errors->has('jun') ? ' is-invalid' : '' }}"
                            value="{{ old('jun') }}" placeholder="June" />
                        @if ($errors->has('jun'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('jun') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="form-group">
                        <label>Jul</label>
                        <input type="text" name="jul"
                            class="form-control{{ $errors->has('jul') ? ' is-invalid' : '' }}"
                            value="{{ old('jul') }}" placeholder="July" />
                        @if ($errors->has('jul'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('jul') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="form-group">
                        <label>Aug</label>
                        <input type="text" name="aug"
                            class="form-control{{ $errors->has('aug') ? ' is-invalid' : '' }}"
                            value="{{ old('aug') }}" placeholder="August" />
                        @if ($errors->has('aug'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('aug') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="form-group">
                        <label>Sep</label>
                        <input type="text" name="sep"
                            class="form-control{{ $errors->has('sep') ? ' is-invalid' : '' }}"
                            value="{{ old('sep') }}" placeholder="September" />
                        @if ($errors->has('sep'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('sep') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="form-group">
                        <label>Oct</label>
                        <input type="text" name="oct"
                            class="form-control{{ $errors->has('oct') ? ' is-invalid' : '' }}"
                            value="{{ old('oct') }}" placeholder="October" />
                        @if ($errors->has('oct'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('oct') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="form-group">
                        <label>Nov</label>
                        <input type="text" name="nov"
                            class="form-control{{ $errors->has('nov') ? ' is-invalid' : '' }}"
                            value="{{ old('nov') }}" placeholder="November" />
                        @if ($errors->has('nov'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nov') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="form-group">
                        <label>Dec</label>
                        <input type="text" name="dec"
                            class="form-control{{ $errors->has('dec') ? ' is-invalid' : '' }}"
                            value="{{ old('dec') }}" placeholder="December" />
                        @if ($errors->has('dec'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('dec') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
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
