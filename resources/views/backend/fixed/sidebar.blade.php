<nav class="sidebar sidebar-offcanvas"  style="width:700px">

    <ul class="nav  style="width:700px">

        @if (auth()->user()->role_id==1)
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="mdi mdi-grid-large menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>


            <li class="nav-item">
                {{-- <a class="nav-link" href="{{ route('role.index') }}" aria-expanded="false" aria-controls="ui-basic">
                    <i class="menu-icon mdi mdi-floor-plan"></i>
                    <span class="menu-title">Role</span>
                    <i class="menu-arrow"></i>
                </a> --}}
                <div class="collapse" id="ui-basic">

                </div>
            </li>



{{--
            <li class="nav-item">
                <a class="nav-link" href="{{ route('student.list') }}" aria-expanded="false" aria-controls="charts">
                    <i class="menu-icon fa-solid fa-user-graduate"></i>
                    <span class="menu-title">Student</span>
                    <i class="menu-arrow"></i>
                </a> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{route('attendence')}}" aria-expanded="false" aria-controls="charts">
                        <i class="menu-icon mdi mdi-chart-line"></i>
                        <span class="menu-title">Attendence</span>
                        <i class="menu-arrow"></i> --}}
                    </a>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('enroll.list') }}" aria-expanded="false" aria-controls="charts">
                            <i class="menu-icon mdi mdi-chart-line"></i>
                            <span class="menu-title">Student</span>
                            <i class="menu-arrow"></i>
                        </a>



            <li class="nav-item">
                {{-- <a class="nav-link" href="{{route('teacher.list')}}" aria-expanded="false" aria-controls="tables">
                    <i class="menu-icon mdi mdi-table"></i>
                    <span class="menu-title">Teacher</span>
                    <i class="menu-arrow"></i>
                </a> --}}

            {{-- <li class="nav-item">
                <a class="nav-link" href="{{route('upload.list') }}" aria-expanded="false" aria-controls="icons">
                    <i class="menu-icon mdi mdi-layers-outline"></i>
                    <span class="menu-title">Content Upload</span>
                    <i class="menu-arrow"></i>
                </a> --}}
                {{-- <a class="nav-link" href="{{route('permission.index') }}" aria-expanded="false" aria-controls="icons">
                    <i class="menu-icon mdi mdi-layers-outline"></i>
                    <span class="menu-title">Permissions</span>
                    <i class="menu-arrow"></i>
                </a> --}}
             
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('backend.application.index') }}" aria-expanded="false" aria-controls="icons">
                        <i class="menu-icon mdi mdi-layers-outline"></i>
                        <span class="menu-title">Teacher Application</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('category.list') }}" aria-expanded="false" aria-controls="ui-basic">
                            <i class="menu-icon mdi mdi-floor-plan"></i>
                            <span class="menu-title">Category</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">

                        </div>
                    </li>
            @endif


            @if (auth()->user()->role_id == 2 || auth()->user()->role_id == 1)
            <li class="nav-item">
                <a class="nav-link" href="{{ route('backend.mycourse.index') }}" aria-expanded="false" aria-controls="charts">
                    <i class="menu-icon fa-solid fa-user-graduate"></i>
                    <span class="menu-title">My Course</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('course.list') }}" aria-expanded="false" aria-controls="ui-basic">
                    <i class="menu-icon mdi mdi-floor-plan"></i>
                    <span class="menu-title">Course</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">

                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('upload.list') }}" aria-expanded="false" aria-controls="icons">
                    <i class="menu-icon mdi mdi-layers-outline"></i>
                    <span class="menu-title">Content Upload</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
        @endif

        {{-- <li class="nav-item">
            <a class="nav-link" href="{{ route('exam.list') }}" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon mdi mdi-account-circle-outline"></i>
                <span class="menu-title">Take Exam</span>
                <i class="menu-arrow"></i>
            </a> --}}


        {{-- <li class="nav-item">
            <a class="nav-link" href="">
                <i class="menu-icon mdi mdi-file-document"></i>
                <span class="menu-title">Report</span> --}}
            {{-- </a> --}}
        </li>
    </ul>
</nav>
