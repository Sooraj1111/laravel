<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tyabee</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Bootstrap -->
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('assets/font/stylesheet.css') }}" type="text/css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css')}}" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- top nav -->
    <section class="waitlist">
        <div class="row m-0">
            <div class="col-md-6 col-lg-6 col-sm-12 p-0">
                <div class="img-sec">
                    <div class="container-wait">
                        <img src="{{ asset('assets/images/footer-logo.png')}}" class="img-fluid">

                        <div class="content-sec">
                            <h2 class="sel-head"> Chat Online with Top Doctors</h2>
                            <p class="sel-pera">UAE’S first Peer to Peer marketpalce is launching soon</p>
                            <a href="#" class="how-work">How it works?</a>
                        </div>

                        <ul class="nav contact-list">
                            <li><a href="#" class=""><img src="{{ asset('assets/images/ic_message_white.png')}}"> <br>Contact
                                    Us</a></li>
                            <li><a href="#" class=""><img src="{{ asset('assets/images/ic_instagram_white.png')}}"> <br>Follow
                                    us</a></li>
                        </ul>
                        <img src="{{ asset('assets/images/ic_dd_pink.png')}}" class="img-fluid down-btn">


                    </div>
                </div>
            </div>

           @yield('form-content')
        </div>
    </section>





    <!------------ scripts start------------ -->
    <script src="{{ asset('http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    {{-- <script src="{{ asset('assets/js/animate.js')}}"></script> --}}
    <script src="{{ asset('assets/js/slick.js')}}"></script>
    {{-- <script src="{{ asset('assets/js/animate.js')}}"></script> --}}
    <script src="{{ asset('assets/js/common.js')}}"></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js')}}" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        @if(session()->has('error'))
        toastr.options = {
           "closeButton": true,
           "progressBar": true
        }
                toastr.error("{{ session('error') }}");
        @endif
   </script>
</body>

</html>
