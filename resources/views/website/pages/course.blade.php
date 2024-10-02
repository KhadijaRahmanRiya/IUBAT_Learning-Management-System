@extends('website.master')
@section('content')
    <div class="row g-4 justify-content-center">

        @foreach ($courses as $course)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/tri.jpg" alt="">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            {{-- <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                style="border-radius: 30px 0 0 30px;">Read More</a> --}}
                            <a href="{{ route('enrollment', $course->id) }}"
                                class="flex-shrink-0 btn btn-lg px-3" style="border-radius: 30px 30px 30px 30px;background-color:rgb(128, 20, 20);color:white
                                ">Join
                                Now</a>
                        </div>
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0">{{ $course->course_price }}</h3>

                        <h5 class="mb-4">{{ $course->course_Name }}</h5>
                    </div>
                    <div class="d-flex border-top">
                        {{-- <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>{{ $teachers->name}}</small> --}}
                        <small class="flex-fill text-center border-end py-2"><i
                                class="fa fa-clock text-primary me-2"></i>{{ $course->course_duration }} hrs</small>
                                {{-- <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-clock text-primary me-2"></i>{{ $course->course_description}} </small> --}}



                    </div>
                    <div class="d-flex border-top">
                                  <h6>
                                <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-clock text-primary me-2"></i>{{ $course->course_description}} </small>
                                </h6>

                                {{-- <i class="fa fa-pencil-square-o" aria-hidden="true"></i> --}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
