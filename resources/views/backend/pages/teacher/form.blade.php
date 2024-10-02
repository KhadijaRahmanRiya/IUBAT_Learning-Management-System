@extends('backend.master')

@section('content')

    <form action="{{route('teacher.store') }}"  method = 'post'>
    @csrf


        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-6">
                <div>
                    <label for="">Teacher Name:</label>
                    <input name="teacher_name" placeholder="Enter Teacher name" type="text" class="form-control">
                </div>

                {{-- <div>
                    <label for="">Course :</label>
                    <select name="courselists_id" id="" class="form-control">

                        @foreach($courselist as $data)

                        <option value="{{$data->id }}">{{ $data->course_Name }}</option>
                        @endforeach
                    </select>
                </div> --}}

                <div>
                    <label for="">Teacher Email:</label>
                    <input name="teacher_email" placeholder="Enter email"  type="email" class="form-control">

                    @error('teacher_contact')

                    <span class="text-danger">{{ $message}}</span>

                    @enderror

                </div>

                <div>
                    <label for="">Contact:</label>
                    <input name="teacher_contact" placeholder="Enter Contact" type="text" class="form-control">

                    @error('teacher_contact')

                    <span class="text-danger">{{ $message}}</span>

                    @enderror

                </div>

                <div>
                    <label for="">Address:</label>
                    <input name="teacher_address" placeholder="Enter address" type="text" class="form-control">
                </div>

                <div>
                    <label for=""> Designation:</label>
                    <input name="teacher_designation" placeholder="Enter Designation" type="text" class="form-control">
                </div>
                {{-- <div>
                    <label for="">Password:</label>
                    <input name="password" placeholder="Enter password" type="password" class="form-control">
                </div>

                <div>
                    <label for="">role</label>
                    <select name="role" id="" class="form-control">
                        <option value="admin">Admin</option>
                        <option value="teacher">Teacher</option>
                    </select>
                </div> --}}


                <div>
                    <button type="submit" class="btn btn-success my-3">Create</button>
                </div>
        </div>
            <div class="col-md-4"></div>

        </div>
    </form>
@endsection
