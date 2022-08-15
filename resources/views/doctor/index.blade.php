<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vision Center</title>
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">

    <link rel="shortcut icon" href="images/favicon.png" type="">
      <!-- bootstrap core css -->
      {{-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css" /> --}}
      <!-- font awesome style -->
      <link href="{{ asset('asset/css/font-awesome.min.css') }}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{ asset('asset/css/responsive.css') }}" rel="stylesheet" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
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
                            <div class="logout-section float-end">
                                <a href=""><img src="{{ asset('image/home_icon.png') }}" alt=""></a>
                                <a href=""><img src="{{ asset('image/login_icon.png') }}" alt=""></a>
                                <a href=""><img src="{{ asset('image/logout_icon.png') }}" alt=""></a>
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
                <div class="col-md-12 text-end" style="min-height: 50px">
                    
                </div>
            </div>
        </div>
    </nav>
    {{-- navbar section end --}}
    {{-- content section start --}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content bg-light p-3 pt-5 pb-5" style="min-height: 500px">
                    
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

    <script src="{{ asset('asset/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('asset/js/custom.js') }}"></script>
    {{-- <script src="{{ asset('asset/js/popper.min.js') }}"></script> --}}
</body>
</html>