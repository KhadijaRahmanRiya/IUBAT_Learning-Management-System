@extends('website.master')
@section('content')
    <div style="text-align:center">
        <h1>{{ $course->course_Name }}</h1>

        @foreach ($course->videos as $data)
            {{-- <h1>{{ $data->courselists_id }} --}}
            {{-- <h1>{{ $course->course_Name }}</h1> --}}
            <video id="myvideo" width="400" controls>
                <source src="{{ url('/uploads/' . $data->filename) }}" type="video/mp4">
                <source src="mov_bbb.ogg" type="video/ogg">


            </video>
        @endforeach
{{--
        <a id="exam" style="pointer-events: none" class="btn btn-success"
            href="{{ route('attend.exam', $course->id) }}">Exam</a> --}}
        <h5>{{ $course->course_description }}</h5>
        <input type="hidden" name="course_id" value="{{ $course->id }}" id="course_id">


        @if (!$certificate)
            <a href="{{ route('certificate.list', $course->id) }}" class="btn "
                style="background-color: rgb(196, 219, 219)">Completed</a>
        @else
            @if (!$exam)
                {{-- <a href="{{ route('attend.exam', $course->id) }}" class="btn "
                    style="background-color: rgb(170, 170, 170)">Exam</a> --}}
                    <a id="exam" style="pointer-events: none" class="btn btn-success"
            href="{{ route('attend.exam', $course->id) }}">Exam</a>
            @else
                <a href="{{ route('certificate.generate', $course->id) }}" class="btn btn-info">Claim Certificate</a>
            @endif
        @endif


    </div>
@endsection


@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#myvideo").on(
                "timeupdate",
                function(event) {
                    if (Math.floor(this.currentTime) % 2 == 0) {
                        onTrackedVideoFrame(Math.floor(this.currentTime), this.duration);
                    }

                    if (this.currentTime == this.duration) {
                        document.getElementById("exam").style.pointerEvents = "auto";
                    }

                });
        });

        function onTrackedVideoFrame(currentTime, duration) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            var currentTime = currentTime;
            var duration = duration;
            var course_id = $("input[name=course_id]").val();


            $.ajax({
                type: 'POST',
                url: "{{ route('progress.post') }}",
                data: {
                    course_id: course_id,
                    currentTime: currentTime,
                    duration: duration
                },
                success: function(data) {
                    console.log('success');
                }
            });


        }
    </script>
@endpush
