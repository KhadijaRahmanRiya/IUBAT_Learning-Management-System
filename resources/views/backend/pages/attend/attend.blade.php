@extends('backend.master')

@section('content')

<div class="row">
    <div class='col-md-3'></div>
    <div class='col-md-6'>
 <table class="table table-striped">
    <a href="{{route('attendence.create')}}" class="btn btn-primary my-2">Add new</a>
   <thead>
   <div class="row">


     </div>
    </div>


    <tr>
        <th scope="col">ID</th>

       <th scope="col">Date</th>
       <th scope="col">Status</th>
       
      </tr>
    </thead>

    <tbody>
     @foreach($attendences as $data)

     <tr>
       <th scope="row">{{$data->id}}</th>

       <td>{{$data->date}}</td>

       <td>{{$data->status}}</td>
       <td>
        <a href="{{route('attendence.present',$data->id)}}" class="btn btn-primary my-2,">Check In</a>
        <a href="{{route('attendence.absent',$data->id)}}" class="btn btn-success my-2">Check Out</a>

       </td>
       <div>
        <button type="submit" class="btn btn-success">Create</button>
    </div>
    </div>
     </tr>
    @endforeach
   </tbody>
 </table>




@endsection
