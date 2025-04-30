    @php
        $setting = App\Models\Setting::first();
    @endphp
    <div class="single_post_sidebar">
        <div class="aside_body">
            <li class="aside_devider">Out Top Tools</a> </li>
            <li><a href="#"><i class="bi bi-building-fill"></i> <span class="aside_item">Domain Availability Checker  </span>
                </a> </li>
            <li><a href="#"><i class="bi bi-union"></i> <span class="aside_item">Free Placeholder Img Downloader</span>
                </a> </li>
            <li><a href="#"><i class="bi bi-luggage-fill"></i> <span class="aside_item">Free Meme Image Downloader
                    </span>
                </a> </li>
            <li><a href="#"><i class="bi bi-person-square"></i> <span class="aside_item">Free Brand Logo Downloader
                    </span></li>
            <li><a href="{{ route('ads') }}"><i class="bi bi-badge-ad"></i> <span class="aside_item">Show Your Brand Adds </span>
            <li><a href="{{ route('ads') }}"><i class="bi bi-badge-ad"></i> <span class="aside_item">Website Technology Finder </span>
            <li><a href="{{ route('ads') }}"><i class="bi bi-badge-ad"></i> <span class="aside_item">Website Seo Checker </span>


            <li class="aside_devider">Others Services</a> </li>

            <li><a href="{{ route('MobileApps') }}"><i class="bi bi-house-fill"></i> <span class="aside_item"> Download Our Mobile Apps </span>
                </a> </li>
            <li><a href="{{ $setting->fb_link ?? '' }}"><i class="bi bi-mortarboard"></i> <span
                        class="aside_item">International Job </span></a> </li>
            <li><a href="{{ $setting->x_link ?? '' }}"><i class="bi bi-droplet"></i> <span class="aside_item">International Remote Job </span></a> </li>
            <li><a href="{{ $setting->email ?? '' }}"><i class="bi bi-postcard"></i> <span class="aside_item">Online Snake Game </span></a> </li>
            <li><a href="{{ $setting->whatsapp_number ?? '' }}"><i class="bi bi-mortarboard"></i> <span
                        class="aside_item"> Online Guessing Game </span></a> </li>

            <li class="aside_devider">Follow Us On Social Media</a> </li>


            <li><a href="{{ $setting->fb_link ?? '' }}"><i class="bi bi-flag-fill"></i> <span class="aside_item">Facebook Page </span></a> </li>

            <li><a href="{{ $setting->email ?? '' }}"><i class="bi bi-envelope-check-fill"></i> <span
                        class="aside_item"> Email
                    </span></a> </li>
            <li><a href="{{ $setting->whatsapp_number ?? '' }}"><i class="bi bi-whatsapp"></i> <span
                        class="aside_item">WhatsApp </span></a> </li>
            <li><a href="{{ $setting->linkedin ?? '' }}"><i class="bi bi-youtube"></i> <span class="aside_item">Youtube
                    </span></a> </li>
            <li id="share" style="cursor: pointer"><a><i class="bi bi-share"></i> <span class="aside_item">Share Us</span></a> </li>

            <li class="aside_devider">Usefull Links</a> </li>

            <li><a href="{{ route('about_us') }}"><i class="bi bi-collection"></i> <span class="aside_item"> About Us </span></a> </li>
            <li><a href="{{ route('contact_us') }}"><i class="bi bi-person-lines-fill"></i> <span class="aside_item">Contact</span></a> </li>
            <li><a href="{{ route('privacy-policy') }}"><i class="bi bi-shield-lock-fill"></i> <span class="aside_item">Privacy Policy </span></a> </li>
            <li><a href="{{ route('terms-and-conditions') }}"><i class="bi bi-list-check"></i> <span class="aside_item">Terms & Conditions </span></a> </li>
            <li><a href="{{ route('ads') }}"><i class="bi bi-badge-ad-fill"></i> <span class="aside_item">Place Your Adds</span></a> </li>



        </div>
    </div>

    <script>
        document.getElementById('share').addEventListener('click', async () => {
            const shareData = {
                title: document.title,
                text: 'Check out this awesome website!',
                url: 'https://sirajganjcity.com/'
            };

            if (navigator.share) {
                try {
                    await navigator.share(shareData);
                    console.log('Content shared successfully');
                } catch (err) {
                    console.error('Error sharing:', err);
                }
            } else {
                // Fallback: Copy the link to clipboard
                copyToClipboard(shareData.url);
                alert('Link copied to clipboard!');
            }
        });

        function copyToClipboard(text) {
            const textarea = document.createElement('textarea');
            textarea.value = text;
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand('copy');
            document.body.removeChild(textarea);
        }
    </script>
