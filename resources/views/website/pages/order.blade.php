@extends('website.master')
@section('content')
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

        <title> </title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">

        <!-- Bootstrap core CSS -->
        <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="form-validation.css" rel="stylesheet">
    </head>

    <body class="bg-light">

        <div class="container">
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg"
                    alt="" width="72" height="72">

                <p class="lead">Billing Information</p>
            </div>

            <div class="row">

                <div class="col-md-12 order-md-1">
                    <h4 class="mb-3">Billing</h4>
                    <form action="{{ route('order.store') }}" class="needs-validation" method="post">
                        @csrf

                        <div class="row">
                <div>
                    {{-- @dd($courselist->id) --}}
                <label for="courselist_id">Course Name</label>
                <select name="courselist_id" id="courselist_id" class="form-control">
                    <option value="{{ $courselist->id }}">{{ $courselist->course_Name }}</option>
                </select>
            </div>

                </div>
                <div class="mb-3">
                    <label for="email">Email </label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com">
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>

                </div>
                <div class="mb-3">
                    <label for="phone">Phone</label>
                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="017***********">
                    <div class="invalid-feedback">

                    </div>
                </div>

                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St"
                        required>
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="status"></label>
                    <input type="text" name="status" class="form-control" id="status" placeholder=""
                        required>
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>
              <div class="mb-3">
                    <label for="
        


                .">Transaction ID:</label>
                    <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St"
                        required>
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now</button>
                </form>
            </div>
        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">Billing Info</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
        </div>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script>
            window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
        </script>
        <script src="../../assets/js/vendor/popper.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <script src="../../assets/js/vendor/holder.min.js"></script>
        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict';

                window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');

                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>
    </body>

    </html>
@endsection
