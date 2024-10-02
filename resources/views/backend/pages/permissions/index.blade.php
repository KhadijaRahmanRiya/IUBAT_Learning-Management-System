@extends('backend.master')
@section('content')
<a href="{{route('permission.create')}}" class="btn btn-primary my-3">Add Permission</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="Category Name">Permission Name</th>

      <th scope="Description">Permission Description</th>
      <th scope="Description">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>



        @foreach ($data as $key=>$item)
    <th scope="row">{{$key+1}}</th>
        <td>{{ $item->name }}</td>

        <td>{{ $item->description }}</td>

        <td>
            <a href="{{route('permission.edit',$item->id)}}" class="btn btn-info">Edit</a>
            <form action="{{ route('permission.destroy',$item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete it ?')">
                    Delete
                  </button>
            </form>
        </td>

    </tr>
    @endforeach
</tbody>

</table>


@endsection
