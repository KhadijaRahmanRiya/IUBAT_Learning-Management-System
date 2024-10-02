@extends('backend.master')

@section('content')

    <form action="{{ route('role.update',$role->id) }}" method='post'>
        @method('put')
    @csrf
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-6">
                <div>
                    <label for=""> Name:</label>
                    <input name="name" placeholder="Enter Category name" value="{{ $role->name }}" type="text" class="form-control">
                </div>
                <div>
                    <label for=""> Description:</label>
                    <input name="description" placeholder="Enter Category name" value="{{ $role->description }}" type="text" class="form-control">
                </div>
                <div>
                    <label for=""> Status:</label>
                    <select name="status" id="">
                        <option value="1">Active</option>
                        <option value="0"> In Active</option>
                    </select>
                </div>


                <div>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>

            </div>
            <div class="col-md-4"></div>

        </div>
    </form>
@endsection

