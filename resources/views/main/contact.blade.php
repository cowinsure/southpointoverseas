<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>Contact - SouthpointBD</title>

    <!-- fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7COswald:300,400,500,600,700"
        rel="stylesheet"
        type="text/css"
    />
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/south_point_white.png') }}" type="image/x-icon">

    <!-- styles -->
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/contact.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/script/qrcode.min.js')}}"></script>


    {{--  ----------------------------------------------- audio ------------------------------------  --}}

    <audio autoplay>
        <source src="{{ asset('assets/music/bangla.mp3') }}" type="audio/ogg">
        Your browser does not support the audio element.
    </audio>

    {{--  ----------------------------------------------------------------------------- end - audio   --}}

</head>
<body class="loader">
{{-- --------------------------- loading ------------------------------ --}}
<x-loading></x-loading>
{{-- ---------------------------------------------------- end - loading --}}

<!-- pointer start -->
<div class="pointer" id="pointer">
    <i class="fas fa-long-arrow-alt-right"></i>
    <i class="fas fa-search"></i>
    <i class="fas fa-link"></i>
</div>
<!-- pointer end -->

<!-- to-top-btn start -->
<a class="to-top-btn pointer-small" href="#up">
    <span class="to-top-arrow"></span> </a
><!-- to-top-btn end -->

<!-- header start -->
<header class="fixed-header">
    <!-- header-flex-box start -->
    <div class="header-flex-box">
        <!-- logo start -->
        <a href="/" class="logo pointer-large animsition-link">
            {{-- ---------------------------------------------------------- icon component --------------------------------------------------------   --}}

            <x-logo-part></x-logo-part>

            {{-- ------------------------------------------------------------------------------------------------------------ end - icon component    --}}
        </a><!-- logo end -->

        <!-- menu-open start -->
        <div class="menu-open pointer-large">
            <span class="hamburger"></span>
        </div><!-- menu-open end -->
    </div><!-- header-flex-box end -->
</header><!-- header end -->

<!-- nav-container start -->
<!-- nav-container end -->

{{-- ---------------------------------------------------------------- navbar ---------------------------------------------- --}}
<x-public-navbar></x-public-navbar>
{{-- ---------------------------------------------------------------------------------------------------------- end - navbar --}}


<!-- animsition-overlay start -->
<main class="animsition-overlay" data-animsition-overlay="true">
    <!-- page-head start -->
    <section id="up" class="page-head flex-min-height-box dark-bg-1">
        <!-- page-head-bg -->
        <div
            class="page-head-bg overlay-loading2"
            style="
                background-image: url({{ asset('assets/images/navbar/trade.jpg') }});
                "
        ></div>

        <!-- flex-min-height-inner start -->
        <div class="flex-min-height-inner">
            <!-- flex-container start -->
            <div
                class="container top-bottom-padding-120 flex-container response-999"
            >
                <!-- column start -->
                <div class="six-columns six-offset">
                    <div class="content-left-margin-40">
                        <h2 class="large-title-bold">
                  <span
                      class="load-title-fill tr-delay03"
                      data-text="Contact Us"
                      style="padding: 10px"
                  >Contact Us</span
                  ><br/>
                        </h2>


                        <h3 class="large-title-bold text-color-4"
                            style="font-size: 30px; margin-top: 20px; background-color: #FFFFFF; padding: 10px">
                            <span class="overlay-loading2 overlay-light-bg-1 tr-delay04 text-color-1"> A Professionally managed
                            </span><br>
                            <span
                                class="overlay-loading2 overlay-light-bg-1 tr-delay05 text-color-1">Human Resource</span><br>
                            <span class="overlay-loading2 overlay-light-bg-1 tr-delay06 text-color-1">Training and placement centre</span>
                        </h3>
                    </div>
                </div>
                <!-- column end -->
            </div>
            <!-- flex-container end -->
        </div><!-- flex-min-height-inner end -->

        <!-- scroll-btn start -->
        <a href="#down" class="scroll-btn pointer-large">
            <div class="scroll-arrow-box">
                <span class="scroll-arrow"></span>
            </div>
            <div class="scroll-btn-flip-box">
                <span class="scroll-btn-flip" data-text="Scroll">Scroll</span>
            </div>
        </a
        ><!-- scroll-btn end -->
    </section>
    <!-- page-head end -->

    <!-- ----------------------------------------------------------------- contact information ----------------------------------------------------------------- -->

@foreach($contact_info as $contact)
    <!-- flex-min-height-box start -->
        <section id="down" class="dark-bg-1 flex-min-height-box">
            <!-- flex-min-height-inner start -->
            <div class="flex-min-height-inner">
                <!-- container start -->
                <div class="container top-padding-120 bottom-padding-60">
                    <div data-animation-container>
                        <h2 class="large-title text-center">
                            <span
                                data-animation-child
                                class="title-fill"
                                data-animation="title-fill-anim"
                                data-text="{{ $contact->title }}"
                            >
                            {{ $contact->title }}
                            </span>
                        </h2>
                    </div>
                    <!-- flex-container start -->
                    <div class="flex-container top-padding-90 contact-box">
                        <div class="table-width-css-1">
                            <iframe
                                src="{{ $contact->map }}"
                                width="600"
                                height="450"
                                style="border: 0; width: 100%"
                                allowfullscreen=""
                                loading="lazy"
                            ></iframe>
                        </div>

                        <div class="table-width-css-2">
                            <div>
                                <div
                                    style="box-shadow: 0 15px 20px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.25); border: 0px solid black; display: inline-block; padding: 5px; border-radius: 10px">
                                    <img src="{{ asset('assets/images/qrcode/qr-1.png') }}" alt=""
                                         style="width: 190px; height: 190px">
                                </div>
                            </div>

                            <div style="margin-top: 10px">
                                <h3 class="small-text text-center">{{ $contact->place }}</h3>
                                <div style="margin-top: 15px; text-align: center">
                                    <span class="small-text">{{ $contact->address }}</span><br>
                                    <span class="small-text">{{ $contact->tel }}</span><br>
                                    <span class="small-text">{{ $contact->email }}</span><br>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- container end -->
            </div>
            <!-- flex-min-height-inner end -->
        </section>
        <!-- flex-min-height-box end -->
@endforeach



<!-- ------------------------------------------------------------------------------------------------------------------------------- end - contact information -->


    {{-- ----------------------------------------------- footer  ----------------------------------------------------- --}}


</main>

<!-- footer start -->
<footer class="footer dark-bg-1">
    <!-- flex-container start -->
    <div class="flex-container container top-bottom-padding-90">

        <!-- column start -->
        <div class="two-columns bottom-padding-60">
            <div class="content-right-margin-10 footer-center-mobile">
                <img class="footer-logo" src="{{ asset('assets/images/logo/SP-Weblogo.png') }}" alt="logo">
            </div>
        </div><!-- column end -->

    @foreach($footers as $footer)

        <!-- column start -->
            <div class="five-columns bottom-padding-60">
                <div class="content-left-right-margin-10 footer-left-mobile">
                    <h4>{{ $footer->title }}</h4> <br>
                    <ul class="footer-information">
                        <li><i class="far fa-envelope"></i><a href="{{ $footer->email }}" class="xsmall-title-oswald"
                                                              style="color: #0b0b0b">
                                {{ $footer->email }}</a></li>
                        <li><i class="fas fa-mobile-alt"></i><a href="#"
                                                                class="xsmall-title-oswald"
                                                                style="color: black">{{ $footer->tel }}</a>
                        </li>
                        <li><i class="fas fa-map-marker-alt"></i><a href="#" class="xsmall-title-oswald text-height-17"
                                                                    style="color: black">{{ $footer->address }}</a>
                        </li>
                    </ul>
                </div>
            </div><!-- column end -->
    @endforeach
    <!-- column start -->
        <div class="twelve-columns">
            <a href="https://inflexionpointbd.com/" target="_blank">

                <p class="p-letter-style text-color-4 footer-copyright">&copy; Copyright 2021.Designed and developed by SIS InflexionPoint (BD) Ltd</p>

            </a>
        </div><!-- column end -->
    </div><!-- flex-container end -->
</footer><!-- footer end -->

{{-- ----------------------------------------------- end - footer ------------------------------------------------ --}}


<!-- scripts -->
<link rel="stylesheet" href="{{asset('js/jquery.min.js')}}">
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
