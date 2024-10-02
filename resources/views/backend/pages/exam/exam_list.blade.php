@extends('backend.master')
@section('content')

    <a href="{{route('exam.create')}}"  class="btn btn-success">Take Exam</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>

            <th scope="col">Folder</th>
            {{-- <th scope="col">email</th>
            <th scope="col">contact</th>
            --}}
        </tr>
        </thead>
        <tbody>

     @foreach($exams as $data)
        <tr>
        <th scope="row">{{ $data->id}}</th>
        

            <td>{{ $data->filename}}</td>
           {{-- <td>{{ $data->courselist->course_Name }}</td> --}}
            {{-- <td>{{ $data->email}}</td>
            <td>{{ $data->contact}}</td>

            {{-- <td>
                <a href="{{route('teacher.view',$data->id)}}" class="btn btn-info">view</a>
                <a href="{{route('teacher.delete',$data->id)}}" class="btn btn-danger">Delete</a>
            </td> --}}
        </tr>

      @endforeach
        </tbody>
    </table>

@endsection
