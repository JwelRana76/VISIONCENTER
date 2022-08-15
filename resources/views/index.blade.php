<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Vision Center</title>
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">

    <link rel="shortcut icon" href="images/favicon.png" type="">
      <!-- bootstrap core css -->
      {{-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css" /> --}}
      <!-- font awesome style -->
      <link href="css/font-awesome.min.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{ asset('asset/css/responsive.css') }}" rel="stylesheet" />
      {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css
      "> --}}
</head>
<body>
    {{-- herader section start --}}
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col md 12">
                    <div class="row">
                        <div class="col-md-2 logo">
                            <img src="{{ asset('image/logo.png') }}" alt="">
                        </div>
                        <div class="col-md-4 header-title">
                            <h3>Community Vision Center</h3>
                        </div>
                        <div class="col-md-6 float-end">
                            <div class="login-section float-end">
                                <button class="btn-sm" data-bs-toggle="modal" data-bs-target="#userLogIn">User Login</button>
                                <button class="btn-sm" data-bs-toggle="modal" data-bs-target="#doctorLogIn">Doctor Login</button>
                                <button class="btn-sm" data-bs-toggle="modal" data-bs-target="#adminLogIn">Admin Login</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- header section end --}}
    {{-- navbar section start --}}
    <nav>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-end">
                    <ul>
                        <li class="nav-item"><a class="active" href="">Home</a></li>
                        <li class="nav-item"><a class="" href="">About</a></li>
                        <li class="nav-item"><a class="" href="">Contact</a></li>
                        <li class="nav-item"><a class="" href="">Service</a></li>
                        <li class="nav-item"><a class="" href="">Location</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    {{-- navbar section end --}}
    {{-- slider section start --}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{ asset('image/banner_new1.jpg') }}" class="d-block w-100" alt="Image">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('image/banner_new2.jpg') }}" class="d-block w-100" alt="Image">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('image/banner_new3.jpg') }}" class="d-block w-100" alt="Image">
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    {{-- slider section end --}}
    {{-- content section start --}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content bg-light p-3 pt-5 pb-5">
                    <h3 class="pb-2">REMOTE PATIENT CONSULTATION SYSTEM</h3>
                    <p>
                        Remote Patient Consultation System Provides neccessary information to the users for interaction with doctor through online and provides the diagnosis for the patient desease and suggest the apt treatment by consulting the doctor through online. The tool helps in the processes of patient registration, enter various patient details like medical record and capture eye images.
                    </p>
                    <p>
                        Separate screen to enter Medical record details and also eye image capture provision provided. Different screens to provide details about the patient for all doctors and vision centre user made available.
                    </p>
                    <div class="text-center pt-5">
                        <img text-center src="{{ asset('image/logo_givethegift.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- content section end --}}
    {{-- footer area start --}}
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer">
                        <p>© 2009 - 2022 ARAVIND EYE CARE SYSTEM. ALL RIGHTS RESERVED.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    {{-- footer area end --}}

    @include('model')
    <script src="{{ asset('asset/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('asset/js/custom.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js
    "></script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
    {{-- <script src="{{ asset('asset/js/popper.min.js') }}"></script> --}}

    <script>
        $(document).ready(function(){
            $(document).on('click','.adminLogin', function(e){
                e.preventDefault();
                var data = {
                    'name': $('.name').val(),
                    'password': $('.password').val(),
                }
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "/admin/check",
                    data:data,
                    datatype: "json",
                    success: function(response){
                        if (response.status == 400) {
                            $('#error_messege').html("");
                            $('#error_messege').append('<li>'+response.errors+'</li>')
                        }else{
                            
                        }
                    }
                })
            });
        });
    </script>
</body>
</html>