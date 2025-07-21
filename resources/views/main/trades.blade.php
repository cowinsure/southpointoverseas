<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trades - Southpoint BD</title>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7COswald:300,400,500,600,700"
          rel="stylesheet" type="text/css">

    <link rel="shortcut icon" href="{{ asset('assets/images/logo/south_point_white.png') }}" type="image/x-icon">


    <!-- styles -->
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/trades.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

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

<!--------------------------------------------------------------------------- nav-container start ----------------------------------------------------------- -->

<x-public-navbar></x-public-navbar>

<!-- ---------------------------------------------------------------------------------------------------------------------------------------- nav-container end -->

<!-- animsition-overlay start -->
<main class="animsition-overlay" data-animsition-overlay="true">

    <!-- dark-bg-2 start -->
    <section id="down" class="dark-bg-2 top-bottom-padding-120">
        <!-- container start -->
        <div class="container">
            <div class="text-center">
                <h2 class="large-title text-height-10 title-fill" data-animation="title-fill-anim" data-text="TRADES">
                    TRADES</h2><br><br><br>
            </div>


            <!--------------------------- trades-slider start ----------------------------------->
            <div class="about-slider bottom-padding-60">
                <!-- swiper-wrapper start -->
                <div class="swiper-wrapper">
                    @foreach($trades as $trade)
                        <div class="swiper-slide">
                            <!-- <a class="photo-popup pointer-zoom" href="assets/images/about/tiling.png">
                                              <img src="assets/images/about/tiling.png" style="height: 400px;" alt="title">
                                          </a>
                                          <p style="text-align: center; font-weight: 600; font-size: x-large;">Tiling</p> -->
                            <!-- inner slide start -->
                            <a
                                href="{{ asset('storage/'.$trade->image) }}"
                                class="swiper-slide photo-popup pointer-zoom"
                            >
                                <div class="hidden-box">
                                    <img
                                        class="hover-img"
                                        src="{{ asset('storage/'.$trade->image) }}"
                                        style="height: 400px"
                                        alt="project"
                                    />
                                </div>
                                <div
                                    class="portfolio-slider2-content"
                                    style="text-align: center"
                                >
                  <span
                      class="
                      small-title-oswald
                      red-color
                      portfolio-slider-overlay
                    "
                  ></span
                  >
                                    <h2 class="title-style text-color-4">
                    <span class="hidden-box d-block text-height-10">
                      <span class="portfolio-slider-fade portfolio-slider-tr-03"
                      >{{ $trade->content }}</span
                      >
                    </span>
                                    </h2>
                                </div>
                            </a
                            ><!-- inner slide end -->
                        </div>
                    @endforeach
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
            <!---------------------------- trades-slider end ------------------------------------>

        </div><!-- container end -->
    </section><!-- dark-bg-2 end -->


    {{--    -------------------------------------------------- training activities --------------------------------------------------------        --}}


    @foreach($trainings as $training)
        <div class="text-center red-bg">
            <a href="#" class="pointer-large overlay-btn-box">
            <span class="overlay-btn" data-text="{{ $training->title }}"
                  style="font-size: 35px;">{{ $training->title }}</span>
            </a>
            <div class="container">
                <p class="train padding-for-training-activities"
                   style="text-align: justify">{{ $training->content }}</p>
            </div>
        </div>
    @endforeach

    {{--    --------------------------------------------------------------------------------------------------- end - training activities         --}}

</main><!-- animation-overlay end -->


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
                                                                       target="_blank" style="color: black">&copy;
                    Copyright 2021.Designed and developed by SIS InflexionPoint (BD) Ltd</a></p>
        </div><!-- column end -->
    </div><!-- flex-container end -->
</footer><!-- footer end -->

<!-- scripts -->
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>


</body>
</html>
