@extends('backend.master')
@section('content')


<style>
    .table thead th {
    border-top: 0;
    border-bottom-width: 1px;
    font-weight: 600;
    font-size: 1.375rem;
}
.table td {
    font-size: 1.512rem;
}
</style>
     <a href="{{ route('student.form') }}" class="btn btn-info">Add New Student</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Sl</th>
                <th scope="Student Name">Student Name</th>
                <th scope="Student image">Image</th>
                <th scope="col">Course name</th>
                <th scope="col">Teacher name</th>
                <th scope="Student Email">Student Email</th>
                <th scope="Student Mobile">Student Mobile</th>
                <th scope="Student Mobile">Student Address</th>
                <th scope="Gender">Gender</th>
                <th scope="Gender">Action</th>
            </tr>
        </thead>
        <tbody>



        <tbody>
            @foreach ($students as $key => $student)
                <tr>

                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $student->student_name }}</td>
                    <td>

                        <img src="{{ url('/uploads/' . $student->student_image) }}" width=50 alt="image">

                    </td>
                    <td>{{ $student->courselist->course_Name }}</td>
                    <td>{{ $student->teacher->name }}</td>
                    <td>{{ $student->student_email }}</td>
                    <td>{{ $student->student_mobile }}</td>
                    <td>{{ $student->student_address }}</td>
                    <td>{{ $student->student_gender }}</td>


                    <td>
                        <a href="{{ route('view', $student->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('delete', $student->id) }}" class="btn btn-danger">Delete</a>
                    </td>


                </tr>
            @endforeach
        </tbody>

    </table>

    {{ $students->links() }}
@endsection

{{-- style="background-color: red;color:white;" --}}
