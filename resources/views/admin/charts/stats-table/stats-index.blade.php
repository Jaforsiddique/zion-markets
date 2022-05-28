@extends('admin.index')
@section('title', 'Pie Data')
@section('content')

<style>
  .create {
display: block;
margin-bottom: 20px;

}

.create a button {
padding: 10px 20px;
font-size: 16px;
border: 0px;
background: #36ccba !important;
text-align: center;
}

</style>

<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Base Controls
        </h3>
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="form-group mb-10">
            <div class="alert alert-custom alert-default" role="alert">
                <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
                <div class="alert-text">
                    The example form below demonstrates common HTML form elements that receive updated styles from
                    Bootstrap with additional classes.
                </div>
            </div>
        </div>
        <div class="col-xl-12">
          <div class="create">
              <a href="{{route('stats.create')}}">
                  <button type="button" class="btn btn-info btn-sm">Add Data</button>
              
              </a>
          </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Table Head</th>
                    <th scope="col">Table Data</th>

                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach(App\QuantumStat::all() as $cat)
                <tr class="table-success">

                    <td scope="row">{{$cat->table_head}}</td>
                    <td>{{$cat->table_data}}</td>
                    <td>

                        <a href="{{route('stats.edit',[$cat->id])}}">
                            <button type="button" class="btn btn-info btn-sm">Edit</button>
                        </a>
                        
                        <!-- Button trigger modal -->
                  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal{{$cat->id}}">
                    Delete
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal{{$cat->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          </button>
                        </div>
                        <div class="modal-body">
                          Do you want to delete?
                        </div>
                        <form action="{{route('stats.destroy')}}" method="POST">@csrf
                          <div class="modal-footer">
                            <input type="hidden" name="id" value="{{$cat->id}}">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>


                        

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</div>

@endsection
