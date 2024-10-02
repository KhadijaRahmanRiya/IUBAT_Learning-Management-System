@extends('backend.master')

@section('content')

<form action="{{route('attendence.store')}}" method='post'>
    @csrf
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-6">
                <div>
                    <label for="">ID:</label>
                    <select name="id" id="" class="form-control">

                        @foreach($students as $data)

                        <option value="{{$data->id }}">{{ $data->student_name}}</option>
                        @endforeach
                    </select>
                </div>


                <div>
                    <label for="">Date</label>
                    <input name="date" placeholder="Enter role" type="date" class="form-control">
                </div>

              

                <div>
                    <button type="submit" class="btn btn-success">Create</button>
                </div>

            </div>
            <div class="col-md-4"></div>

        </div>
    </form>




@endsection
