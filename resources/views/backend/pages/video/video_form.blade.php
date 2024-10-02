@extends('backend.master')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Upload Multiple Videos</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('upload.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="title">Video Title</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>

                        <div>
                            <label for="">Course Name:</label>
                            <select name="courselists_id" id="" class="form-control">

                                @foreach($courselist as $data)

                                <option value="{{$data->id}}">{{$data->course_Name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label for="">Teachers:</label>
                            <select name="teacher_id" id="" class="form-control">

                                @foreach($teacher as $data)

                                <option value="{{$data->id}}">{{$data->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="filename">Videos</label>
                            <input type="file" name="video[]" id="filename" class="form-control" multiple>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" id="description" class="form-control" multiple>
                        </div>

                        <button type="submit" class="btn btn-primary">Upload Videos</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection





