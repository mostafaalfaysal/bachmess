@extends('backend.master')
@section('content')
    <div class="card shadow mb-4 container px-2 mx-auto animated--grow-in">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-xl-center">Make Fine</h6>
        </div>
        <div class="card-body mx-auto mb-4">
                <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
                    <title>Make Fine</title><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
                    <link rel="stylesheet" href="assets/css/styles.min.css">
                </head>
                <body>
                <div class="registration-form">
                    <form>
                        <div class="form-group">
                            <input id="memberID" class="form-control item" type="text" placeholder="Member ID" />
                        </div>
                        <div class="form-group">
                            <input id="memberName" class="form-control item" type="text" placeholder="Member Name" />
                        </div>
                        <div class="form-group">
                            <input class="form-control item" type="number" id="amount" placeholder="Amount">
                        </div>
                        <div class="form-group">
                            <input class="form-control item" type="text" id="fineNote" placeholder="Reason of Fine">
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control form-control-user" id="DOB" data-placeholder="Fine Date">
                            <style>input[type="date"]::before {
                                    content: attr(data-placeholder);
                                    width: 100%;
                                }
                            </style>
                        </div>
                        <div class="form-group"><button class="btn btn-primary btn-block create-account" type="button">Submit</button>
                        </div>
                    </form>
                </div>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/js/bootstrap.bundle.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
                <script src="assets/js/script.min.js"></script>
        </div>
    </div>
@endsection
