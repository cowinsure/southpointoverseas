<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Infrastructure - Southpoint BD</title>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7COswald:300,400,500,600,700"
          rel="stylesheet" type="text/css">

    <link rel="shortcut icon" href="{{ asset('assets/images/logo/south_point_white.png') }}" type="image/x-icon">

    <!-- styles -->
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/infrastructure.css') }}" rel="stylesheet" type="text/css">

    {{--  ----------------------------------------------- audio ------------------------------------  --}}

    <audio preload="auto" autoplay="autoplay" id="my_audio">
        <source src="{{ asset('assets/music/bangla.mp3') }}">
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
</div><!-- pointer end -->

<!-- to-top-btn start -->
<a class="to-top-btn pointer-small" href="#up">
    <span class="to-top-arrow"></span>
</a><!-- to-top-btn end -->

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


{{-- -------------------------------------------------- navbar -----------------------------------------------}}

<x-public-navbar></x-public-navbar>

{{-- ------------------------------------------------------------------------------------------ end - navbar--}}

<!-- animsition-overlay start -->


<main class="animsition-overlay" data-animsition-overlay="true">
    <!-- page-head start -->
    <section id="up" class="page-head flex-min-height-box dark-bg-1">
        <!-- page-head-bg -->
        <div class="page-head-bg overlay-loading2"
             style="background-image: url({{ asset('assets/images/navbar/infrastructure.jpg') }});"></div>

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
                      data-text="Infrastructure"
                  >Infrastructure</span
                  ><br/>
                        </h2>
                        <h3 class="large-title-bold text-color-4"
                            style="font-size: 30px; margin-top: 20px; background-color: #D6E6F6; padding: 10px">
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
        </div>
        <!-- scroll-btn start -->
        <a href="#down" class="scroll-btn pointer-large">
            <div class="scroll-arrow-box">
                <span class="scroll-arrow"></span>
            </div>
            <div class="scroll-btn-flip-box">
                <span class="scroll-btn-flip" data-text="Scroll">Scroll</span>
            </div>
        </a><!-- scroll-btn end -->
    </section><!-- page-head end -->

    <!-- dark-bg-2 start -->
    <section id="down" class="dark-bg-2 top-bottom-padding-120" data-midnight="black">
    @foreach($infrastructures as $infrastructure)
        <!-- container start -->
            <div data-animation-container class="text-center container small">
                <!-- <h2 data-animation-child class="large-title text-height-10 title-fill" data-animation="title-fill-anim" data-text="South Point Training And Selection Centre">Recent Works</h2><br> -->
                <h2 data-animation-child class="large-title text-height-10 text-color-1 overlay-anim-box2"
                    data-animation="overlay-anim2" style="color: #ef1a30;">{{ $infrastructure->title }}</h2><br>
                <!-- <p data-animation-child class="tr-delay02 xsmall-title-oswald top-margin-5 title-fill" data-animation="title-fill-anim" data-text="We Offer Digital Solutions">We Offer Digital Solutions</p> -->
                <p data-animation-child class="text-color-5 p-style-small fade-anim-box tr-delay04"
                   data-animation="fade-anim"
                   style="color: darkgrey; text-align: justify">{{ $infrastructure->content }}</p>
            </div><!-- container end -->
    @endforeach

    <!-- portfolio-slider2 start -->
        <div class="portfolio-slider2 top-bottom-padding-90">
            <!-- swiper-wrapper start -->
            <div class="swiper-wrapper">
            @foreach($infrastructure_images as $image)
                <!-- slide start -->
                    <div class="swiper-slide">
                        <!-- inner slide start -->
                        <a href="{{ asset('storage/'.$image->image) }}" class="swiper-slide photo-popup pointer-zoom">
                            <div class="hidden-box">
                                <img class="hover-img" src="{{ asset('storage/'.$image->image) }}"
                                     style="height: 440px;"
                                     alt="project">
                            </div>
                            <div class="portfolio-slider2-content">
                                <span
                                    class="small-title-oswald portfolio-slider-overlay"
                                    style="color : white; background: rgb(255,0,0,0.6); padding: 5px">{{ $image->title }}</span>
                                <h2 class="title-style text-color-4">
										<span class="hidden-box d-block text-height-10">
											<span
                                                class="portfolio-slider-fade portfolio-slider-tr-03"
                                                style="color : white; background: 	rgb(255,0,0,0.6); padding : 10px">{{ $image->content }}</span>
										</span>
                                </h2>
                            </div>
                        </a><!-- inner slide end -->
                    </div><!-- slide end -->
                @endforeach
            </div><!-- swiper-wrapper end -->
            <!-- swiper-button-next start -->
            <div class="swiper-button-next">
                <div class="slider-arrow-next-box">
                    <span class="slider-arrow-next"></span>
                </div>
            </div><!-- swiper-button-next end -->
            <!-- swiper-button-prev start -->
            <div class="swiper-button-prev">
                <div class="slider-arrow-prev-box">
                    <span class="slider-arrow-prev"></span>
                </div>
            </div><!-- swiper-button-prev end -->
        </div><!-- portfolio-slider2 end -->
    </section><!-- dark-bg-2 end -->
</main><!-- animsition-overlay end -->

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
                    <ul class="footer-information text-color-4">
                       @if(!empty($footer->email))
                        <li style="display: flex; align-items: center;  margin-bottom: 6px; justify-content: flex-start;">
                            <i class="far fa-envelope"></i>
                            <a href="mailto:{{ $footer->email }}" class="xsmall-title-oswald" style="color: #0b0b0b">{{ $footer->email }}</a>
                        </li>
                        @endif
                        @if(!empty($footer->tel))
                        <li style="display: flex; align-items: center;  margin-bottom: 6px; justify-content: flex-start;">
                            <i class="fas fa-mobile-alt"></i>
                            <a href="tel:{{ $footer->tel }}" class="xsmall-title-oswald" style="color: black">{{ $footer->tel }}</a>
                        </li>
                        @endif
                        <li><i class="fas fa-map-marker-alt"></i><a href="#"
                                                                    class="xsmall-title-oswald text-height-17">{{ $footer->address }}</a>
                        </li>
                    </ul>
                </div>
            </div><!-- column end -->
    @endforeach
    <!-- column start -->
        <div class="twelve-columns">
            <p class="p-letter-style text-color-4 footer-copyright"><a href="https://inflexionpointbd.com/"
                                                                       target="_blank">&copy; Copyright 2021.Designed and developed by SIS InflexionPoint (BD) Ltd</a></p>
        </div><!-- column end -->
    </div><!-- flex-container end -->
</footer><!-- footer end -->

<!-- scripts -->
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
