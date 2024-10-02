@extends('backend.master')
@section('content')

    <a href="{{route('teacher.form')}}" class="btn btn-success">Create new Faculty</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">Contact</th>
            <th scope="col">address</th>
            <th scope="col">Designation</th>
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
            {{-- <td>{{ $data->phone}}</td>
            <td>{{ $data->role}}</td> --}}
            <td>
                <a href="{{route('teacher.view',$data->id)}}" class="btn btn-info">view</a>
                <a href="{{route('teacher.delete',$data->id)}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

@endsection
