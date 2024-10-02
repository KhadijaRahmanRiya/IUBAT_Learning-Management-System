@extends('backend.master')
@section('content')






<form action="{{route('course.list')}}">


    <div class="row" style="padding-top: 40px;padding-bottom: 20px;">
        <div class="col-md-4">
            <label for="">From Date</label>
            <input type="date" name="from_date" class="form-control" value="{{request()->from_date}}">
        </div>
        <div class="col-md-4">
            <label for="">To Date</label>
            <input type="date" name="to_date" class="form-control" value="{{request()->to_date}}">
        </div>
        <div class="col-md-4">

            <button class="btn btn-success" type="submit">Search</button>
            <button class="btn btn-primary" onclick="printDiv('printArea')" type="button">Print</button>
        </div>
    </div>

    </form>
    <div id="printArea">

    <a href="{{route('course.create')}}" class= "btn btn-danger">Create new Course</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Course Name</th>
            <th scope="col">Category name</th>
            <th scope="col">Teacher Name</th>
            <th scope="col">Price</th>
            <th scope="col">Duration</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($coures as $key=>$course)
        <tr>

            <th scope="row">{{$key+1}}</th>
            <td>{{$course->course_Name}}</td>
            <td>{{$course->category?->category_name}}</td>
            <td>{{$course->userRelation->name}}</td>
            <td>{{$course->course_price}}</td>
            <td>{{$course->course_duration}}</td>
            <td>{{$course->course_description}}</td>
            <td>
                <a href="{{route('course.view',$course->id)}}" class="btn btn-info">View</a>
                <a href="{{route('delete',$course->id)}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

</div>
{{ $coures->links() }}



<script>

    function printDiv(divID){
        var printContents = document.getElementById(divID).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
@endsection
