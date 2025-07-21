<nav class="nav-container dark-bg-1">
    <!-- nav-logo start -->
    <div class="nav-logo">
        <img src="{{ asset('assets/images/logo/SP-Weblogo.png') }}" alt="logo">
    </div><!-- nav-logo end -->

    <!-- menu-close -->
    <div class="menu-close pointer-large"></div>

    <!-- dropdown-close-box start -->
    <div class="dropdown-close-box">
        <div class="dropdown-close pointer-large">
            <span></span>
        </div>
    </div><!-- dropdown-close-box end -->

    <!-- nav-menu start -->
    <ul class="nav-menu dark-bg-1">
        <!-- nav-box start -->
        <li class="nav-box nav-bg-change active dropdown-open">
            <!-- <a class="pointer-large nav-link">
                <span class="nav-btn" data-text="Home">Home</span>
            </a> -->

            <a href="{{ route('page.home') }}" class="animsition-link pointer-large nav-link">
                <span class="nav-btn" data-text="Home">Home</span>
            </a>



            <div class="nav-bg" style="background-image: url({{asset('assets/images/navbar/contact.jpg')}});"></div>
        </li><!-- nav-box end -->
        <!-- nav-box start -->
        <li class="nav-box nav-bg-change">
            <a href="{{ route('page.about') }}" class="animsition-link pointer-large nav-link">
                <span class="nav-btn" data-text="About Us">About Us</span>
            </a>
            <div class="nav-bg" style="background-image: url({{ asset('assets/images/navbar/1.jpg') }});"></div>
        </li><!-- nav-box end -->
        <!-- nav-box start -->
        <li class="nav-box nav-bg-change">
            <a href="{{ route('page.recruitment') }}" class="animsition-link pointer-large nav-link">
                <span class="nav-btn" data-text="Recruitment">Recruitment</span>
            </a>
            <div class="nav-bg"
                 style="background-image: url({{ asset('assets/images/navbar/recruitment.jpg') }});"></div>
        </li><!-- nav-box end -->

        <!-- nav-box start -->
        <li class="nav-box nav-bg-change">
            <a href="{{ route('page.infrastructure') }}" class="animsition-link pointer-large nav-link">
                <span class="nav-btn" data-text="Infrastructure">Infrastructure</span>
            </a>
            <div class="nav-bg"
                 style="background-image: url({{ asset('assets/images/navbar/2.jpg') }});"></div>
        </li>
        <!-- nav-box end -->

        <!-- nav-box start -->
        <li class="nav-box nav-bg-change">
            <a href="{{ route('page.trades') }}" class="animsition-link pointer-large nav-link">
                <span class="nav-btn" data-text="Trades">Trades</span>
            </a>
            <div class="nav-bg" style="background-image: url({{ asset('assets/images/navbar/trade.jpg') }});"></div>
        </li>
        <!-- nav-box end -->


        <!-- nav-box start -->
        <li class="nav-box nav-bg-change">
            <a href="{{ route('page.contacts') }}" class="animsition-link pointer-large nav-link">
                <span class="nav-btn" data-text="Contact">Contact</span>
            </a>
            <div class="nav-bg" style="background-image: url({{ asset('assets/images/navbar/contact.jpg') }});"></div>
        </li><!-- nav-box end -->
    </ul><!-- nav-menu end -->
</nav>
