@extends('backend.master')
@section('content')

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
<label for="course_Name">Course Name:</label>
<input type="text" value="{{$course->course_Name}}" readonly class="form-control">
<label for="course_Id">Course id</label>
<input type="number" value="{{$course->course_Id}}" readonly class="form-control">
<label for="course_price">Course Price:</label>
<input type="number" value="{{$course->course_price}}" readonly class="form-control">
<label for="text">course_duration:</label>
<input type="course_duration" value="{{$course->course_duration}}" readonly class="form-control">


<a href="{{route('course.list')}}" class="btn btn-success">Back</a>
<div class="col-md-3"></div>


@endsection


