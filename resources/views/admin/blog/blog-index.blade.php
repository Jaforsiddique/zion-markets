@extends('admin.index')
@section('title', 'Blogs')
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
        <a href="{{action('admin\BlogController@create_blog')}}" enctype="multipart/form-data">
            <button type="button" class="btn btn-info btn-sm">Add Blog</button>
        
        </a>
    </div>
    


<table class="table" style="text-align: center;">
    <thead >
      <tr>
        <th class="line" scope="col">Blog Image</th>
        <th class="line" scope="col">Title</th>
        <th class="line" scope="col">Description</th>
        <th class="line" scope="col">Action</th>
      </tr>
    </thead>
    <tbody class="table-success">
    
        @foreach ($blog as $row)
        <tr>
            <td> 
              @if($row->blogimageName=='default.jpg')
                  <img width="80" height="40" src="{{asset('image/default.jpg')}}">
                  @else
                  <img width="50" height="40" src="{{asset('uploads/Blog/'.$row->blogimageName)}}" width="40" height="30" alt="">
                  @endif
            
            </td>
            <td>{{str_limit($row->blog_title,30)}}</td>
            <td>{{str_limit($row->blog_description,30)}}</td>
            <td>
            <a class=" btn-bg-dark" href="{{action('admin\BlogController@updatepage_blog',['id'=> $row->id])}}">  <button type="button" class="btn btn-info btn-sm">Edit</button>  </a>
            <a href="{{action('admin\BlogController@delete',['delete'=> $row->id])}}">
                <button type="button" class="btn btn-danger btn-sm">
                    Delete
                  </button>
            </a>
            </td>
          </tr>
        @endforeach  
    </tbody>
  </table>
  {{$blog->links()}}
</div>
    
@endsection