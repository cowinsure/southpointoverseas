<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>SouthPoint BD</title>

    <!-- fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7COswald:300,400,500,600,700"
        rel="stylesheet"
        type="text/css"
    />

    {{-- ----------------- seo --------------------   --}}

    <meta name="Description"
          CONTENT="South Point Overseas Limited, as it stands out today as one of the most established companies in the field of Human Resource Development and overseas employment, has been in the business of recruitment, training, and placement of workers for overseas employment for over two decades since the formation of the Company.">

    {{-- ------------------------------- end - seo    --}}

    <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/index.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/south_point_white.png') }}"
          type="image/x-icon">


    <!-- styles -->


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


{{-- -------------------------------------------------- navbar -----------------------------------------------}}

<x-public-navbar></x-public-navbar>

{{-- ------------------------------------------------------------------------------------------ end - navbar--}}

{{--  ----------------------------------------------- audio ------------------------------------  --}}

{{--<audio controls>--}}
{{--    <source src="https://www.computerhope.com/jargon/m/example.mp3" />--}}
{{--</audio>--}}

<iframe src="{{ asset('assets/music/bangla.mp3') }}" allow="autoplay" style="display:none" id="iframeAudio">
</iframe>

{{--  ----------------------------------------------------------------------------- end - audio   --}}

<!-- animsition-overlay start -->
<main class="animsition-overlay" data-animsition-overlay="true">
    <!---------------------------- home-slider start ------------------------------------>
    <section class="home-slider" id="up">
        <!----------------------- swiper-wrapper start ------------------------------->
        <div class="swiper-wrapper">
            <!---------------- you can start for loop from here with content ------------------------>
            <!----- see previous versions for content slider ------>
            <!---------------- you should end loop here with content ------------------------>

            <!--------------- you can start for loop from here without content ---------------------->

            @foreach($sliders as $image)
                <div class="swiper-slide flex-min-height-box home-slide">
                    <!-- slide-bg -->
                    <div
                        class="slide-bg overlay-loading2 overlay-dark-bg-1 box-sh"
                        style="
                            background-image: url({{ asset('storage/'.$image->image) }});
                            " id="box"
                    >
                        <p style="color: white; font-size: 20px; font-weight: bold; text-align: center; position: absolute; bottom: 135px; left: 20px">{{ $image->content }}</p>
                    </div>

                    <!-- home-slider-content start -->
                    <div
                        class="home-slider-content flex-min-height-inner dark-bg-1"
                    ></div>
                    <!-- home-slider-content end -->
                </div>
                <!-- swiper-slide end -->
            @endforeach

            <style>
                .box-sh {
                    box-shadow: inset 0px -170px 10px rgba(0, 0, 0, 0.5);
                }

            </style>
            <!---------------- you should end for loop here without content ------------------------>
        </div>
        <!----------------------- swiper-wrapper end ------------------------------->

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

        <!-- swiper-pagination -->
        <div class="swiper-pagination"></div>


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
    <!----------------------------- home-slider end ------------------------------------->

    <!-- flex-min-height-box start -->
    <section
        id="down"
        class="dark-bg-1 flex-min-height-box"
        style="background: #e6ebef"
    >
        <!-- flex-min-height-inner start -->
        <div class="flex-min-height-inner">
            <!-- container start -->
            <div class="container small top-bottom-padding-120">
                <!-- flex-container start -->
                @foreach($abouts as $about)
                    <div data-animation-container class="flex-container">
                        <!-- column start -->
                        <div class="twelve-columns text-center">
                            <h2 class="large-title text-height-12">
                  <span
                      data-animation-child
                      class="title-fill"
                      data-animation="title-fill-anim"
                      data-text="{{$about->title}}"
                  >{{$about->title}}</span
                  ><br/>
                            </h2>
                        </div>
                        <!-- column end -->
                        <!-- column start -->
                        <div class="twelve-columns">
                            <div class="content-right-margin-20">
                                <p
                                    data-animation-child
                                    class="p-style-medium text-color-5 fade-anim-box tr-delay02"
                                    data-animation="fade-anim"
                                    style="white-space: break-spaces; text-align: justify"
                                >{{ \Illuminate\Support\Str::limit($about->content,807) }}</p>
                            </div>
                        </div>
                        <!-- column end -->

                        <!-- column start -->
                        <div class="twelve-columns text-center">
                            <div
                                data-animation-child
                                class="arrow-btn-box top-margin-30 fade-anim-box tr-delay05"
                                data-animation="fade-anim"
                            >
                                <a
                                    href="{{ route('page.about') }}"
                                    class="arrow-btn pointer-large animsition-link"
                                >Read more</a
                                >
                            </div>
                        </div>
                        <!-- column end -->
                    </div>
            @endforeach
            <!-- flex-container end -->
            </div>
            <!-- container end -->
        </div>
        <!-- flex-min-height-inner end -->
    </section>
    <!-- flex-min-height-box end -->

    <!------------------- recent works section start ------------------->
    <section
        class="light-bg-1 bottom-padding-30 top-padding-120"
    >
        <!-- container start -->
        <div
            data-animation-container
            class="container small bottom-padding-60 text-center"
        >

            <br/>

        </div>
        <!-- container end -->

        <!------------ bottom-padding-90 start ------------>
        <div class="bottom-padding-90">
            <!-- portfolio-content start -->
            <div class="portfolio-content flex-min-height-box">
                <!-- portfolio-content-inner start -->
                <div class="portfolio-content-inner flex-min-height-inner">
                    <!-- flex-container start -->
                    @foreach($messages as $message)
                        <div class="flex-container container small" id="flex-direction-mobile">
                            <!-- column start -->
                            <div data-animation-container class="six-columns">
                                <div class="content-right-margin-40">
                                    <!-- <span class="small-title-oswald red-color overlay-anim-box2" data-animation="overlay-anim2">Commercial</span> -->
                                    <h3 class="title-style text-color-1">
                                      <span
                                          data-animation-child
                                          class="overlay-anim-box2 overlay-dark-bg-2 tr-delay01"
                                          data-animation="overlay-anim2"
                                      >Managing Director's Message</span><br/>

                                    </h3>

                                    <p
                                        data-animation-child
                                        class="
                                                p-style-small
                                                text-color-2
                                                fade-anim-box
                                                tr-delay04
                                               "
                                        style="white-space: break-spaces; text-align: justify"
                                        data-animation="fade-anim"
                                    >{{ \Illuminate\Support\Str::limit($message->message,400) }}</p>

                                    <div
                                        data-animation-child
                                        class="
                                            arrow-btn-box
                                            top-margin-30
                                            fade-anim-box
                                            tr-delay05
                                            "
                                        data-animation="fade-anim"
                                    >
                                        <a
                                            href="{{ route('page.about') }}"
                                            class="arrow-btn pointer-large animsition-link"
                                        >Read more</a
                                        >
                                    </div>
                                </div>
                            </div>
                            <!-- column end -->
                            <!-- column start -->

                            {{-- -------------- managing directors message -------------------------   --}}

                            <div class="six-columns top-padding-60">
                                <a
                                    href="{{ route('page.about') }}"
                                    class="
                      portfolio-content-bg-box
                      pointer-large
                      hover-box
                      hidden-box
                      animsition-link
                    "
                                >
                                    <div
                                        class="
                        portfolio-content-bg
                        hover-img
                        overlay-anim-box2 overlay-dark-bg-2
                      "
                                        data-animation="overlay-anim2"
                                        style="
                                            background-image: url({{ asset('storage/'.$message->image) }});
                                            "
                                    ></div>
                                </a>
                            </div>

                        {{-- -------------- end - managing directors message --------------------   --}}

                        <!-- column end -->
                        </div>
                @endforeach
                <!-- flex-container end -->
                </div>
                <!-- portfolio-content-inner end -->
            </div>
            <!-- portfolio-content end -->
        </div>
        <!-- bottom-padding-90 end -->

        <!------------ bottom-padding-90 start ------------>
        <div class="bottom-padding-90">
            <!-- portfolio-content start -->
            <div class="portfolio-content flex-min-height-box">
                <!-- portfolio-content-inner start -->
                <div class="portfolio-content-inner flex-min-height-inner">
                    <!-- flex-container start -->
                    <div class="flex-container reverse container small">
                    @foreach($contents as $content)
                        <!-- column start -->
                            <div data-animation-container class="twelve-columns">
                                <div class="content-left-margin-40">
                                    <h3 class="title-style text-color-1" style="text-align: center">
                      <span
                          data-animation-child
                          class="overlay-anim-box2 overlay-dark-bg-2 tr-delay01"
                          data-animation="overlay-anim2"
                      >{{ $content->title }}</span
                      ><br/>
                                        <!-- <span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay02" data-animation="overlay-anim2">gluten-free</span><br>
                                                              <span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay03" data-animation="overlay-anim2">Man bun small</span> -->
                                    </h3>
                                    <p
                                        data-animation-child
                                        class="
                        p-style-small
                        text-color-2
                        fade-anim-box
                        tr-delay04
                      "
                                        data-animation="fade-anim"
                                        style=""
                                    >{{ $content->content }}</p>

                                    <div
                                        data-animation-child
                                        class="
                        arrow-btn-box
                        top-margin-30
                        fade-anim-box
                        tr-delay05
                      "
                                        data-animation="fade-anim"
                                    >
                                        <a
                                            href="{{ route('page.about') }}"
                                            class="arrow-btn pointer-large animsition-link"
                                        >Read more</a
                                        >
                                    </div>
                                </div>
                            </div>
                            <!-- column end -->
                        @endforeach
                    </div>
                    <!-- flex-container end -->
                </div>
                <!-- portfolio-content-inner end -->
            </div>
            <!-- portfolio-content end -->
        </div>
        <!-- bottom-padding-90 end -->
    </section>
    <!------------------- recent works section end ------------------->

    <!------------------------------------------- video-content-bg start ------------------------------------>
    <iframe
        class="video-content-bg"
        width="560"
        height="315"
        src="https://www.youtube.com/embed/JhpMSJfbtJk"
        title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
    ></iframe>
    <!--------------------------------------------- video-content-bg end ------------------------------------>

    <!-- section start -->
    <section class="light-bg-1 top-bottom-padding-120">
        <!-- container start -->
        <div data-animation-container class="container small bottom-padding-60">
            <div class="text-center">
                <h2
                    data-animation-child
                    class="large-title text-color-1 overlay-anim-box2"
                    data-animation="overlay-anim2"
                >
                    TRADES
                </h2>
            </div>
        </div>
        <!-- container end -->

        <!--------------------------- about-slider start ----------------------------------->
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
        <!---------------------------- about-slider end ------------------------------------>
    </section>
    <!-- section end -->
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
                        <li><i class="far fa-envelope"></i><a href="" class="xsmall-title-oswald">
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
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>

{{--<script>--}}
{{--    var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);--}}
{{--    if (!isChrome){--}}
{{--        $('#iframeAudio').remove()--}}
{{--    }--}}
{{--    else {--}}
{{--        $('#playAudio').remove() // just to make sure that it will not have 2x audio in the background--}}
{{--    }--}}
{{--</script>--}}

<script>

    // document.body.addEventListener("mousemove", function () {
    //     audio = document.getElementById('playAudio');
    //     audio.play()
    // })
</script>
</body>
</html>