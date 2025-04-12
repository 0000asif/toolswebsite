<!-- ======= Header ======= -->
<header id="header" class="header sticky-top bg-light shadow-sm">
    <div class="container container-xl d-flex align-items-center justify-content-between">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <h3 class="mb-0 fw-bold">SoftNestTools</h3>
        </a>

        <!-- Navbar -->
        <nav id="navbar" class="navbar">
            <ul class="nav">
                <li class="nav-item"><a class="nav-link text-dark fw-semibold" href="{{ Route('frontHome') }}">Home</a>
                </li>
                <li class="nav-item"><a class="nav-link text-dark fw-semibold" href="">All
                        Tools</a></li>
                <li class="nav-item"><a class="nav-link text-dark fw-semibold" href="{{ Route('blogs') }}">Blog</a></li>



                <li class="nav-item"><a class="nav-link text-dark fw-semibold" href="{{ Route('ads') }}">Make Ads</a>
                </li>
                <li class="nav-item"><a class="nav-link text-dark fw-semibold" href="{{ route('about_us') }}">About
                        Us</a></li>
                <li class="nav-item"><a class="nav-link text-dark fw-semibold" href="{{ route('MobileApps') }}">Mobile
                        Apps</a></li>



                <li><a href="javascript:void(0)">Others ▿</a>
                    <ul class="sub_menu">
                        <li><a href="{{ route('contact_us') }}">Contact Us </a></li>
                        <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                        <li><a href="{{ route('terms-and-conditions') }}">Terms & Condition</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>


<div class="d-lg-none">
    <div class="sticky-top bg-light shadow-sm">
        <div class="container container-sm">
            <div class="row p-3 align-items-center" style="row-gap: 8px">

                <!-- Left Section (Logo + Mobile Menu Button) -->
                <div class="col-12" style="text-align: left">
                    <div class="row">
                        <!-- Logo -->
                        <div class="col-md-6 col-10">
                            <div class="top_header">
                                <div>
                                    <a href="{{ Route('frontHome') }}">
                                        <h3 class="m-0">Best Tools</h3>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Mobile Menu Button -->
                        <div class="col-md-6 col-2">
                            <div class="top_header_bar" data-bs-toggle="offcanvas" data-bs-target="#mobileMenuAside"
                                aria-controls="mobileMenuAside" type="button">
                                <i class="bi bi-list"></i>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
