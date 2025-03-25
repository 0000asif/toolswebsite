@php
    $setting = App\Models\Setting::first();
@endphp

<section class="footer-section" id="footer-section">
    <div class="container footer_container">
        <div class="row footer_row">
            <div class="col-md-4">
                <div class="footer-logo d-flex align-items-center">
                    {{-- @if ($setting->logo)
                         <img w class="logo_dark" style="max-width:100px;"
                             src="{{ asset('image/setting/' . $setting->logo) }}" alt="logo" />
                     @endif --}}
                    <h4>About Us</h4>

                </div>
                <p>
                    {{ $setting->footer_about ?? '' }}
                </p>
            </div>

            <div class="col-md-8 footer_demo_section">
                <div class="row">
                    <div class="col-md-3">
                        <h4>Help Desk</h4>

                        <ul>
                            <li><a href="{{ Route('about_us') }}">About Us</a></li>
                            <li><a href="{{ Route('contact_us') }}">Contact Us</a></li>
                            <li><a href="{{ Route('terms-and-conditions') }}">Terms &amp; Conditions</a></li>
                            <li><a href="{{ Route('privacy-policy') }}">privacy-policy</a></li>
                            <li class="text-white">Vectors and icons by <a href="https://www.svgrepo.com"
                                    target="_blank">SVG Repo</a></li>

                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4>Important Links</h4>

                        <ul>
                            <li><a href="{{ Route('blogs') }}">Blogs</a></li>
                            <li><a href="{{ Route('ads') }}">Advertisement</a></li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <div class="address text-white">
                            <h4>Contract Us </h4>

                            <p>Address: {{ $setting->address }}</p>

                            <p><a class="text-white" href="tel:{{ $setting->phone }}">Helpline:
                                    {{ $setting->phone }}</a></p>

                            <p>Email: <a class="text-white" href="sendmail:{{ $setting->email }}"><span
                                        class="_cf_email_"
                                        data-cfemail="422b2c242d0237263423312a6f372c2f27312a6c212d2f">{{ $setting->email }}</span></a>
                            </p>
                        </div>

                        <div class="media form-inline">
                            <a href="{{ $setting->x_link }}">
                                <img alt="" src="https://unmesh.com/media/Images/Unmesh/facebook.png" /></a>
                            <a href="{{ $setting->fb_link }}"><img alt=""
                                    src="https://unmesh.com/media/Images/Unmesh/youtube.png" /></a> <a
                                href="{{ $setting->instagram_link }}"><img alt=""
                                    src="https://unmesh.com/media/Images/Unmesh/instagram.png" /></a> <a
                                href="{{ $setting->linkedin }}"><img alt=""
                                    src="https://unmesh.com/media/Images/Unmesh/linkedIn.png" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container text-center">
        <hr>
        <p>
            Copyright © sirajganjcity.com All rights reserved. 2025
            <span>Design & Devlope By <a target="_blank" href="https://softnestbd.com">SoftNestBd</a></span>
        </p>
    </div>
</footer>
<a class="back-to-top d-flex align-items-center justify-content-center" href="#"><i
        class="bi bi-arrow-up-short"></i></a>
{!! $setting->footer_text !!}
