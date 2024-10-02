@extends('backend.master')
@section('content')
<div class="container">

    <table class="table">
        <thead>
        <tr>
            <th>SL</th>
            <th>Student Name</th>
            {{-- <th>Description</th>
            <th>Action</th> --}}
        </tr>
        </thead>
        <tbody>
            @foreach ($student_list as $key=>$data)
        <tr>
            <td>{{ ++$key }}</td>
            <td> <a href="{{ route('student.progress',$data->student->id) }}">{{ $data->student->name }}</a></td>
            <td></td>
            {{-- <td>
                <a href=""><i class="fa-light fa-eye"></i></a>
                <a href=""><i class="fa-light fa-pen-to-square"></i></a>
                <a href=""><i class="fa-light fa-pen-to-square"></i></a>
            </td> --}}
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
