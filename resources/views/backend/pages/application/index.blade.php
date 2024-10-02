@extends('backend.master')
@section('content')
<div class="container">
    <h2>Teachers Application</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">Contact</th>
            <th scope="col">address</th>
            <th scope="col">Designation</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
            {{-- <th scope="col">Phone</th>
            <th scope="col">role</th> --}}

        </tr>
        </thead>
        <tbody>

     @foreach($teachers as $key=>$data)
        <tr>
        <th scope="row">{{ $key+1}}</th>
            <td>{{ $data->name}}</td>
            {{-- <td>{{ $data->courselist->course_Name }}</td> --}}
            <td>{{ $data->email}}</td>
            <td>{{ $data->contact}}</td>
            <td>{{ $data->address}}</td>
            <td>{{ $data->designation}}</td>
            <td>{{ $data->status == 0 ? 'Pending':'Approved'}}</td>
            <td>
                <a href="{{route('teacher.view',$data->id)}}" class="btn btn-info">view</a>
                <a href="{{ route('backend.application.edit',$data->id) }}" class="btn btn-success">Approve</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection

