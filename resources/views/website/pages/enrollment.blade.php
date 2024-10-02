@extends('website.master')
@section('content')
    <form action="{{ route('pay.now') }}" method="post">
        @csrf
        <input type="hidden" name="course_id" value="{{ $course->id }}">
        <section style="background-color: #eeeeee;">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card text-black">
                            {{-- <i class="fab fa-apple fa-lg pt-3 pb-1 px-3"></i> --}}
                            <img src="" class="card-img-top" alt="" />
                            <div class="card-body">
                                <div class="text-center">
                                    <h5 class="card-title">{{ $course->course_Name }}</h5>
                                    <p class="text-muted mb-4"></p>
                                </div>
                                <div>
                                    <div class="d-flex justify-content-between">
                                        <span>{{ $course->course_Name }}</span><span>{{ $course->course_price }} BDT</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span>Course Duration</span><span>{{ $course->course_duration }} hrs</span>
                                    </div>

                                </div>
                            </div>
                            @auth


                                @if (auth()->user()->role_id == 3)
                                    <button class="btn btn-primary">Enroll Now</button>
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
@endsection
