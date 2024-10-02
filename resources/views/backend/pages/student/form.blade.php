@extends('backend.master')

@section('content')
    <form action="{{ route('student.store') }}" method='post'enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-6">
                <div>
                    <label for="">Student Name:</label>
                    <input name="student_name" placeholder="Enter Student Name" type="text" class="form-control">
                </div>

                <div>
                    <label for="">Course list:</label>
                    <select name="courselists_id" id="" class="form-control">

                        @foreach($coures as $data)

                        <option value="{{$data->id }}">{{ $data->course_Name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="">Teachers:</label>
                    <select name="teacher_id" id="" class="form-control">

                        @foreach($teachers as $data)

                        <option value="{{$data->id}}">{{$data->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="">Address</label>
                    <input name="student_address" placeholder="Enter Address" type="text" class="form-control">
                </div>
                <div>
                    <label for="">Upload Image</label>
                    <input name="student_image"type="file" class="form-control">
                </div>

                <div>
                    <label for="">Student Email:</label>
                    <input name="student_email" placeholder="Enter Student Email" type="email" class="form-control">
                </div>

                <div>
                    <label for="">Student Mobile:</label>
                    <input name="student_mobile" placeholder="Students Phone Number" type="tel" class="form-control">
                </div>
                <div>
                    <label for="">Student Date of Birth:</label>
                    <input name="student_date_of_birth" placeholder="Enter Date" type="dateTime-local"
                        class="form-control">
                </div>
                <div>
                    <label for="gender">Gender:</label>
                    <select name="student_gender" id="gender" class="form-control" required>
                        <option>Select</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div>
                    <button type="submit" class="btn btn-success">Create</button>
                </div>

            </div>
            <div class="col-md-4"></div>

        </div>
    </form>
@endsection
