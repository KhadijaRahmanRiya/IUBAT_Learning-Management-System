@extends('backend.master')
@section('content')

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
<label for="course_Name">Category Name:</label>
<input type="text" value="{{$data->category_name}}" readonly class="form-control">
<label for="course_Id">Description</label>
<input type="number" value="{{$data->category_description}}" readonly class="form-control">


<a href="{{route('category.list')}}" class="btn btn-success">Back</a>
<div class="col-md-3"></div>


@endsection
