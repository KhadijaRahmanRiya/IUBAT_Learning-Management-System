@extends('backend.master')
@section('content')


<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">

<form action="{{ route('backend.application.update',$teacher->id) }}" method="post" enctype="multipart/form-data">
    @method('put')
    @csrf
    <label for="">Teacher Name:</label>
    <input type="text" value="{{$teacher->name}}"  class="form-control">
    <label for="">Teacher Email:</label>
    <input type="email" value="{{$teacher->email}}"  class="form-control">
    <label for="">Contact</label>
    <input type="text" value="{{$teacher->contact}}"  class="form-control">
    <label for="">Teacher address:</label>
    <input type="text" value="{{$teacher->address}}"  class="form-control">
    <label for="">Teacher Designation:</label>
    <input type="text" value="{{$teacher->designation}}"  class="form-control">
    <label for="">Application Status:</label>
    <select name="status" id="">
    <option value="0">Pending</option>
    <option value="1">Approved</option>
</select>
    <button type="submit" class="btn btn-success">Submit</button>
</form>




@endsection
