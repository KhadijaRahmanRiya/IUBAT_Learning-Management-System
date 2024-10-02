@extends('backend.master')
@section('content')

<form action="{{route('permission.update',$permission->id)}}" method='post'>
    @method('put')
    @csrf
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-6">
                <div>
                    <label for="">Permission Name:</label>
                    <input name="name" placeholder="Enter Permission name" type="text" value="{{$permission ->name }}" class="form-control">
                </div>


                <div>
                    <label for=""> Description</label>
                    <input name="description" placeholder="Enter Description" type="text" value="{{$permission ->description }}"  class="form-control">
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>

            </div>
            <div class="col-md-4"></div>

        </div>
    </form>


@endsection
