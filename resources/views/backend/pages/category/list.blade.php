@extends('backend.master')
@section('content')
<a href="{{route('category.form')}}" class="btn btn-primary my-3">Add category</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="Category Name">Category Name</th>

      <th scope="Description">Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>



        @foreach ($categories as $key=>$data)
    <th scope="row">{{$key+1}}</th>
        <td>{{ $data->category_name }}</td>

        <td>{{ $data->category_description }}</td>

        <td>
            <a href="{{route('category.view',$data->id)}}" class="btn btn-info">View</a>
            <a href="{{route('delete',$data->id)}}" class="btn btn-danger">Delete</a>
        </td>

    </tr>
    @endforeach
</tbody>

</table>


@endsection




