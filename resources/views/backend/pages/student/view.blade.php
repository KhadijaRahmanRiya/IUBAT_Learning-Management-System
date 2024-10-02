@extends('backend.master')
@section('content')

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
<label for="course_Name">Student Name:</label>
<input type="text" value="{{$student->student_name}}" readonly class="form-control">
<label for="course_Id">Student Email</label>
<input type="email" value="{{$student->student_email}}" readonly class="form-control">
<label for="course_price">Student Mobile:</label>
<input type="number" value="{{$student->student_emai}}" readonly class="form-control">
<label for="text">Gender:</label>
<input type="course_duration" value="{{$student->student_gender }}" readonly class="form-control">


<a href="{{route('course.list')}}" class="btn btn-success">Back</a>
<div class="col-md-3"></div>


@endsection
