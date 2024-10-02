@extends('backend.master')

@section('content')

    <form action="{{route('course.store')}}"  method = 'post'>
    @csrf
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-6">
                <div>
                    <label for="">Course Name:</label>
                    <input name="course_Name" placeholder="Enter Course Name" type="text" class="form-control">
                </div>

                <div>
                    <label for="">Category List:</label>
                    <select name="category_id" id="" class="form-control">

                        @foreach($categories as $data)

                        <option value="{{$data->id }}">{{ $data->category_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="">Teacher Name:</label>
                    <select name="teacher_id" id="" class="form-control">

                        @foreach($teacher as $data)

                        <option value="{{$data->id }}">{{ $data->name }}</option>
                        @endforeach

                    </select>
                </div>

                <div>
                    <label for=""> Course Price:</label>
                    <input name="price"  min="0" required placeholder="Enter Price" type="number" class="form-control">
                </div>

                <div>
                    <label for=""> Course Duration</label>
                    <input name="duration" min="1" required placeholder="Enter Duration " type="text" class="form-control">
                </div>


                <div>
                    <label for="">Course Status</label>
                    <select name="status" id="" class="form-control">
                        <option value="active">Active</option>
                        {{-- <option value="inactive">InActive</option> --}}
                    </select>
                </div>

                <div>
                    <label for="">Upload Image</label>
                    <input type="file" class="form-control">
                </div>


                <div>
                    <label for=""> Description</label>
                    <input name="course_description" placeholder="Enter Description" type="text" class="form-control">
                </div>



                <div>
                    <button type="submit" class="btn btn-success">Create</button>
                </div>

            </div>
            <div class="col-md-4"></div>

        </div>
    </form>
@endsection

