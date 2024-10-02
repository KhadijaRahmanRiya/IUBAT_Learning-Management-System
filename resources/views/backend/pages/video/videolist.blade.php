@extends('backend.master')
@section('content')
    <a href="{{ route('upload.create') }}" class="btn btn-success">Create new Video</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Course Name</th>
                <th scope="col">Teacher Name</th>
                <th scope="col">Video</th>
                <th scope="col">Description</th>



            </tr>
        </thead>
        <tbody>

            @foreach ($video as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->title }}</td>
                    <td>{{ $data->courselist->course_Name }}</td>
                    <td>{{ optional($data->teacher)->name }}</td>
                    <td>{{ $data->filename }}</td>
                    <td>{{ $data->description }}</td>


                    {{-- <td>
                <a href="{{route('teacher.view',$data->id)}}" class="btn btn-info">view</a>
                <a href="{{route('teacher.delete',$data->id)}}" class="btn btn-danger">Delete</a>
            </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
