<!DOCTYPE html>
<html lang="en">

<head>
  <!-- meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Riya's Project </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{url('vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{url('vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{url('vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{url('vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{url('vendors/simple-line-icons/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{url('vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{url('vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{url('js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{url('css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('backend/css/sb-admin-2.min.css') }}" rel="stylesheet">
  <link rel="shortcut icon" href="{{url('images/favicon.png')}}" />
  <link rel="shortcut icon" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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

</head>



<body>
  <div class="container-scroller">






    @include("backend.fixed.header")





    <div class="container-fluid page-body-wrapper pt-0">










      @include("backend.fixed.sidebar")








      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
                @yield("content")
            </div>
          </div>
        </div>









          @include("backend.fixed.footer")





      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{url('vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{url('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{url('vendors/progressbar.js/progressbar.min.js')}}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{url('js/off-canvas.js')}}"></script>
  <script src="{{url('js/hoverable-collapse.js')}}"></script>
  <script src="{{url('js/template.js')}}"></script>
  <script src="{{url('js/settings.js')}}"></script>
  <script src="{{url('js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{url('js/jquery.cookie.js')}}" type="text/javascript"></script>
  <script src="{{url('js/dashboard.js')}}"></script>
  <script src="{{url('js/Chart.roundedBarCharts.js')}}"></script>



  <script src="{{ asset('backend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('backend/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('backend/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('backend/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('backend/js/demo/chart-pie-demo.js') }}"></script>
    <script src="{{ asset('backend/js/demo/chart-bar-demo.js') }}"></script>
  <!-- End custom js for this page-->
</body>

</html>

