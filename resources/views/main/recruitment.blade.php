<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>Recruitment</title>

    <!-- fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7COswald:300,400,500,600,700"
        rel="stylesheet"
        type="text/css"
    />

    <!-- styles -->
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css"/>
    <link
        href="{{ asset('assets/css/recruitment.css') }}"
        rel="stylesheet"
        type="text/css"
        id="style"
    />

    {{--  ----------------------------------------------- audio ------------------------------------  --}}

    <audio preload="auto" autoplay="autoplay" id="my_audio">
        <source src="{{ asset('assets/music/bangla.mp3') }}">
        Your browser does not support the audio element.
    </audio>

    {{--  ----------------------------------------------------------------------------- end - audio   --}}
</head>
<body class="loader">

{{-- -------------------------------------------- header section ------------------------------------------------------}}

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

{{-- ------------------------------------------ end - header section --------------------------------------------------}}


{{-- --------------------------------------------------------------- nav section ---------------------------------------------------------  --}}
<!-- nav-container start -->
<x-public-navbar></x-public-navbar>
<!-- nav-container end -->

{{-- ------------------------------------------------------------------------------------------------------------------ end - nav section   --}}


<!-- animsition-overlay start -->
<main class="animsition-overlay" data-animsition-overlay="true">
    <!-- page-head start -->
    <section id="up" class="page-head flex-min-height-box dark-bg-1">
        <!-- page-head-bg -->
        <div
            class="page-head-bg overlay-loading2"
            style="background-image: url({{ asset('assets/images/navbar/contact.jpg') }});"
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
                      data-text="Recruitment"
                  >Recruitment</span
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
            <!-- flex-min-height-inner end -->

            <!-- scroll-btn start -->
            <a href="#down" class="scroll-btn pointer-large">
                <div class="scroll-arrow-box">
                    <span class="scroll-arrow"></span>
                </div>
                <div class="scroll-btn-flip-box">
                    <span class="scroll-btn-flip" data-text="Scroll">Scroll</span>
                </div>
            </a><!-- scroll-btn end -->
    </section>
    <!-- page-head end -->

{{-- -------------------------------------------------------------- recruitment ----------------------------------------------------   --}}

<!-- dark-bg-2 start -->
    <section id="down" class="dark-bg-2 top-bottom-padding-120" data-midnight="black" style="padding: 200px 0px">
    @foreach($recruitments as $recruitment)
        <!-- container start -->
            <div data-animation-container class="text-center container small">
                <!-- <h2 data-animation-child class="large-title text-height-10 title-fill" data-animation="title-fill-anim" data-text="South Point Training And Selection Centre">Recent Works</h2><br> -->
                <br/>
                <h2
                    data-animation-child
                    class="large-title text-height-10 text-color-1 overlay-anim-box2"
                    data-animation="overlay-anim2"
                    style="color: #ef1a30"
                >
                    {{ $recruitment->title }}
                </h2>
                <br/>
                <!-- <p data-animation-child class="tr-delay02 xsmall-title-oswald top-margin-5 title-fill" data-animation="title-fill-anim" data-text="We Offer Digital Solutions">We Offer Digital Solutions</p> -->
                <p
                    data-animation-child
                    class="text-color-5 p-style-small fade-anim-box tr-delay04"
                    data-animation="fade-anim"
                    style="color: darkgrey; white-space: break-spaces; text-align: justify;"
                >{{ $recruitment->content }}</p>
            </div>
            <!-- container end -->
        @endforeach

    </section>
    <!-- dark-bg-2 end -->

{{-- -------------------------------------------------------------- end - recruitment ----------------------------------------------------   --}}


{{--  ------------------------------------------------------------ our services -----------------------------------------------------------  --}}

<!-- company profile start -->
    <section id="down" class="dark-bg-1 flex-min-height-box about-page">
        <!-- flex-min-height-inner start -->
        <div class="flex-min-height-inner">
            <!-- container start -->
            <div
                data-animation-container
                class="container small bottom-padding-60"
            >
                <br/><br/>
                <!-- flex-container start -->
                <div class="text-center">
                    <h4
                        data-animation-child
                        class="large-title text-color-1 overlay-anim-box2"
                        data-animation="overlay-anim2"
                    >
                        Our Services
                    </h4>
                    <br/><br/><br/>
                </div>
                <!-- table style start -->
                <style type="text/css">
                    td {
                        text-align: left;
                        border: 1px solid rgba(0, 0, 0, 0.1);
                        padding: 10px;
                    }
                </style>
                <!-- table style start -->
                <div data-animation-container class="flex-container">
                    <table
                        style="
                  border-collapse: collapse;
                  border: 0px solid #ffcc00;
                  color: #000000;
                  width: 60%;
                  box-shadow: 0 15px 20px rgba(0,0,0,0.30);
                  margin: auto;
                "
                        border="0"
                        cellspacing="2"
                        cellpadding="3"
                    >
                        <tbody>
                        @foreach($services as $service)
                            <tr>
                                <td style="padding: 22px">{{ $service->content }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- flex-container end -->
            </div>
            <!-- container end -->
        </div>
        <!-- flex-min-height-inner end -->
    </section>
    <!-- company profile end -->

{{--  ----------------------------------------------------------- end - our services -------------------------------------------------------  --}}

<!-- dark-bg-2 start -->
    <section id="down" class="dark-bg-2 top-bottom-padding-120" data-midnight="black">
        <!-- container start -->
        <div data-animation-container class="text-center container small">
            <h2
                data-animation-child
                class="large-title text-height-10 text-color-1 overlay-anim-box2"
                data-animation="overlay-anim2"
                style="color: #ef1a30"
            >
                Business Procedure
            </h2>
        </div>
        <!-- container end -->

    {{--  --------------------------------------------------   document loop -----------------------------------------   --}}

    <!-- portfolio-slider2 start -->
        @foreach($documents as $document)
            <div class="portfolio-slider2 top-bottom-padding-40">
                <div
                    style="text-align: center; margin-bottom: 50px; margin-top: 60px"
                >
                    <h2
                        style="
                background-color: #ef1a30;
                display: inline-block;
                padding: 2px 5px;
                color: white;
              "
                    >
                        {{ $document->title }}
                    </h2>
                </div>


                <!-- swiper-wrapper start -->
                <div class="swiper-wrapper">

                {{-- ----------------------   slider loop  -----------------------------------   --}}

                @foreach($document->papers as $paper)
                    <!-- slide start -->
                        <div class="swiper-slide">
                            <!-- inner slide start -->
                            <a
                                href="{{asset('storage/'.$paper->image)}}"
                                class="swiper-slide photo-popup pointer-zoom"
                            >
                                <div class="hidden-box">
                                    <img
                                        class="hover-img"
                                        src="{{asset('storage/'.$paper->image)}}"
                                        style="height: 440px; width: 300px"
                                        alt="project"
                                    />
                                </div>
                                <div class="portfolio-slider2-content">
                                  <span
                                      class="
                                      small-title-oswald
                                      red-color
                                      portfolio-slider-overlay
                                    "

                                      style="background-color : rgba(255,0,0,0.8); padding : 8px; color : white"

                                  >{{ $paper->content }}
                                  </span>
                                </div>
                            </a
                            ><!-- inner slide end -->
                        </div>
                        <!-- slide end -->

                    @endforeach

                    {{-- ----------------------   slider loop  -----------------------------------   --}}


                </div>
                <!-- swiper-wrapper end -->
                <!-- swiper-button-next start -->
                <div class="swiper-button-next">
                    <div class="slider-arrow-next-box">
                        <span class="slider-arrow-next"></span>
                    </div>
                </div>
                <!-- swiper-button-next end -->
                <!-- swiper-button-prev start -->
                <div class="swiper-button-prev">
                    <div class="slider-arrow-prev-box">
                        <span class="slider-arrow-prev"></span>
                    </div>
                </div>
                <!-- swiper-button-prev end -->
            </div>
            <!-- portfolio-slider2 end -->
        @endforeach

        {{--  --------------------------------------------  end -  document loop -----------------------------------------   --}}


    </section>
    <!-- dark-bg-2 end -->
</main>
<!-- animsition-overlay end -->

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
                        <li><i class="far fa-envelope"></i><a href="{{ $footer->email }}" class="xsmall-title-oswald">
                                {{ $footer->email }}</a></li>
                        <li><i class="fas fa-mobile-alt"></i><a href="#"
                                                                class="xsmall-title-oswald">{{ $footer->tel }}</a>
                        </li>
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
