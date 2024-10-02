@extends('backend.master')
@section('content')

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
<label for="">Teacher Name:</label>
<input type="text" value="{{$teachers->name}}" readonly class="form-control">
<label for="">Teacher Email:</label>
<input type="email" value="{{$teachers->email}}" readonly class="form-control">
<label for="">Contact</label>
<input type="text" value="{{$teachers->contact}}" readonly class="form-control">
<label for="">Teacher address:</label>
<input type="text" value="{{$teachers->address}}" readonly class="form-control">
<label for="">Teacher Designation:</label>
<input type="text" value="{{$teachers->designation}}" readonly class="form-control">




@endsection
