@extends('backend.master')
@section('content')
<div class="container">
    <h2>Role Index</h2>
    <a href="{{ route('role.create') }}">
        <button type="button">
            Add + 
        </button>
    </a>
    <table class="table">
        <thead>
        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Description</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($roles as $key=>$data)
        <tr>
            <td>{{ ++$key }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->description }}</td>
            <td> 
                {{ $data->status == 1 ? 'Active':'InActive' }}</td>
            <td>
                <a href=""><i class="fa-light fa-eye"></i></a>
                <a href="{{ route('role.edit',$data->id) }}"><i class="fa-light fa-pen-to-square"></i></a>
                <form action="{{ route('role.destroy',$data->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete it ?')">
                        <i class="fa-light fa-eye"></i>
                      </button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection

