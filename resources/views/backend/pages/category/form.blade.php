@extends('backend.master')

@section('content')

    <form action="{{route('category.store')}}" method='post'>
    @csrf
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-6">
                <div>
                    <label for="">Category Name:</label>
                    <input name="Name" placeholder="Enter Category name" type="text" class="form-control">
                </div>


                <div>
                    <label for=""> Description</label>
                    <input name="Description" placeholder="Enter Description" type="text" class="form-control">
                </div>

                <div>
                    <button type="submit" class="btn btn-success">Create</button>
                </div>

            </div>
            <div class="col-md-4"></div>

        </div>
    </form>
@endsection

