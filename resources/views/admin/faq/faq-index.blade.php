@extends('admin.index')
@section('title', 'FAQ')
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
<div class="col-xl-12">
    <div class="create">
        <a href="{{action('admin\FaqController@create')}}">
            <button type="button" class="btn btn-info btn-sm">Add FAQ</button>
        
        </a>
    </div>
    


<table class="table" style="text-align: center;">
    <thead >
      <tr>
        
        <th class="line" scope="col">Question</th>
        <th class="line" scope="col">Answer</th>
        <th class="line" scope="col">Action</th>
      </tr>
    </thead>
    <tbody class="table-success">
    
     @foreach ($faq as $row)
     <tr>
          <td>{{str_limit($row->question,30)}}</td>
          <td>{{str_limit($row->answer,30)}}</td>
          <td>
          <a class=" btn-bg-dark" href="{{action('admin\FaqController@edit',['id'=> $row->id])}}">  <button type="button" class="btn btn-info btn-sm">Edit</button>  </a>
          <a href="{{action('admin\FaqController@destroy',['delete'=> $row->id])}}">
              <button type="button" class="btn btn-danger btn-sm">
                  Delete
                </button>
          </a>
          </td>
        </tr>
     @endforeach  
    </tbody>
  </table>
  {{$faq->links()}}
</div>
    
@endsection