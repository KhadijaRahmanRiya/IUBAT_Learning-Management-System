
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>IUBAT learning Management system</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">

            <a href="{{ route('website') }}" class="nav-item nav-link active">Home</a>

            <a href="{{ route('course.web') }}" class="nav-link ">Course</a>
            <a href="{{ route('contact.us') }}" class="nav-item nav-link">Contact</a>



            @auth


            <a href="{{route ('profile') }}" class="nav-item nav-link">Profile</a>
            <a href="{{ route('logout') }}" class="nav-item nav-link">Logout</a>


            @else

            <a href="{{route ('registration') }}" class="nav-item nav-link">Registration</a>

            <a href="{{route ('login') }}"   class="nav-item nav-link">Login</a>
            @endauth


        </div>
    </nav>
    <!-- Navbar End -->
    <!-- LOG IN with Modal  -->

    {{-- <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action=" ">
        <div class="modal-body mx-3">

          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input name="email" type="email" id="defaultForm-email" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
          </div>

          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <input name="Password" type="password" id="defaultForm-pass" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
          </div>

        </div>

        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-default">Login</button>
        </div>
    </form>

      </div>
    </div>
  </div>

  <div class="text-center">
    <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Launch
      Modal Login Form</a>
  </div>
 --}}
