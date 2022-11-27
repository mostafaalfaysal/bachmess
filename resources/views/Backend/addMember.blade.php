@extends('backend.master')
@section('content')
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BACHMESS -Add New Member</title>

    <!-- Custom fonts for this template-->
    <link href="{{url('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{url('/assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-success">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 animated--grow-in">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Register Member</h1>
                        </div>
                        <form class="user" action="{{route('addingMember')}}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                           placeholder="First Name" name="memberFirstName">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" id="exampleLastName"
                                           placeholder="Last Name" name="memberLastName">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                           placeholder="Father's Name" name="fathersName">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" id="exampleLastName"
                                           placeholder="Mother's Name" name="mothersName">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                       placeholder="Email Address" name="memberEmail">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-5 mb-3 mb-sm-0">
                                    <input type="date" class="form-control form-control-user" id="DOB" data-placeholder="Date of Birth" name="dateOfBirth">
                                    <style>input[type="date"]::before {
                                            content: attr(data-placeholder);
                                            width: 100%;
                                        }
                                    </style>

                                </div>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control form-control-user" id="exampleLastName"
                                           placeholder="NID Number" name="nidNumber">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                       placeholder="Permanent Address" name="permanentAddress">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                       placeholder="Phone Number" name="phoneNumber">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                       placeholder="Number of seat" name="numberOfSeat">
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user"
                                           id="exampleInputPassword" placeholder="Password" name="memberPassword">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user"
                                           id="exampleRepeatPassword" placeholder="Repeat Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Register Account
                            </button>
                        </form>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Bootstrap core JavaScript-->
{{--<script src="{{url('assets/vendor/jquery/jquery.min.js')}}"></script>--}}
{{--<script src="{{url('assets/vendor/jquery/jquery.min.js')}}"></script>--}}
{{--<script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>--}}

{{--<!-- Core plugin JavaScript-->--}}
{{--<script src="{{url('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>--}}

{{--<!-- Custom scripts for all pages-->--}}
{{--<script src="{{url('assets/js/sb-admin-2.min.js')}}"></script>--}}

</body>


@endsection
