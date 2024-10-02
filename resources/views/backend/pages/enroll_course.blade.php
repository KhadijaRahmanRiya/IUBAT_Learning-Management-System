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

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Sl</th>
                {{-- <th scope=""></th> --}}
                <th scope="Student Email">Student Email</th>
                <th scope="Student Mobile">Student Mobile</th>
                <th scope="Student Address">Student Address</th>
                <th scope="status">status</th>

            </tr>
        </thead>
        <tbody>



        <tbody>
           @foreach ($students as $data)

                <tr>

                    <th scope="row">{{$data->id }}</th>
                    
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->phone }} </td>
                    <td>{{ $data->address }} </td>
                    <td>{{ $data->status }} </td>





                </tr>
                @endforeach

        </tbody>

    </table>


@endsection
