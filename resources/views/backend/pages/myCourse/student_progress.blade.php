@extends('backend.master')
@section('content')
    <div class="container">

        <table class="table">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Course Name</th>
                    <th>Progress Of This Course</th>

                </tr>
            </thead>
            <tbody>
                {{-- @php
                $data_val = str_count($videos->videos->courselists_id);
            @endphp --}}

                @foreach ($student_progress as $key => $data)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $data->courseRelation->course_Name }} </td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar"
                                    style="width: {{ ($data->progress_percent * 100) / $data->duration }}%;"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    {{ floor(($data->progress_percent * 100) / $data->duration) }}%
                                </div>
                            </div>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
