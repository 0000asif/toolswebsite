    @php
        $setting = App\Models\Setting::first();
    @endphp
    <div class="single_post_sidebar">
        <div class="aside_body">
            <li class="aside_devider">সিরাজগঞ্জ</a> </li>
            <li><a href="#"><i class="bi bi-building-fill"></i> <span class="aside_item">সিরাজগঞ্জের সকল উপজেলা </span>
                </a> </li>
            <li><a href="#"><i class="bi bi-union"></i> <span class="aside_item">সিরাজগঞ্জের সকল ইউনিয়ন
                    </span>
                </a> </li>
            <li><a href="#"><i class="bi bi-luggage-fill"></i> <span class="aside_item">সিরাজগঞ্জের দর্শনীয় স্থান
                    </span>
                </a> </li>
            <li><a href="#"><i class="bi bi-person-square"></i> <span class="aside_item">সিরাজগঞ্জের বিখ্যাত
                        ব্যাক্তিত্য
                    </span></li>
            <li><a href="{{ route('ads') }}"><i class="bi bi-badge-ad"></i> <span class="aside_item">আপনার
                        প্রতিষ্ঠানের বিজ্ঞাপন দিন </span>


            <li class="aside_devider">অন্যান্য সেবাসমূহ</a> </li>

            <li><a href="{{ route('MobileApps') }}"><i class="bi bi-house-fill"></i> <span class="aside_item"> মোবাইল
                        অ্যাপ ডাউনলোড করুন </span>
                </a> </li>
            <li><a href="{{ $setting->fb_link ?? '' }}"><i class="bi bi-droplet-half"></i> <span
                        class="aside_item">ব্লাড ডোনার </span></a> </li>
            <li><a href="{{ $setting->x_link ?? '' }}"><i class="bi bi-droplet"></i> <span class="aside_item">ব্লাড
                        পোষ্ট </span></a> </li>
            <li><a href="{{ $setting->email ?? '' }}"><i class="bi bi-postcard"></i> <span class="aside_item">মাহফিলের
                        পোস্টার </span></a> </li>
            <li><a href="{{ $setting->whatsapp_number ?? '' }}"><i class="bi bi-mortarboard"></i> <span
                        class="aside_item"> চাকরি </span></a> </li>

            <li class="aside_devider">আমাদের সাথে যুক্ত হোন</a> </li>


            <li><a href="{{ $setting->fb_link ?? '' }}"><i class="bi bi-flag-fill"></i> <span class="aside_item">ফেসবুক
                        পেজ </span></a> </li>
            <li><a href="{{ $setting->x_link ?? '' }}"><i class="bi bi-facebook"></i> <span class="aside_item">ফেসবুক
                        গ্রুপ </span></a> </li>
            <li><a href="{{ $setting->email ?? '' }}"><i class="bi bi-envelope-check-fill"></i> <span
                        class="aside_item">ইমেইল
                    </span></a> </li>
            <li><a href="{{ $setting->whatsapp_number ?? '' }}"><i class="bi bi-whatsapp"></i> <span
                        class="aside_item">হোয়াটসঅ্যাপ </span></a> </li>
            <li><a href="{{ $setting->linkedin ?? '' }}"><i class="bi bi-youtube"></i> <span class="aside_item">ইউটিউব
                    </span></a> </li>
            <li id="share" style="cursor: pointer"><a><i class="bi bi-share"></i> <span class="aside_item">শেয়ার
                        করুন</span></a> </li>

            <li class="aside_devider">প্রয়োজনীয় লিংক</a> </li>

            <li><a href="{{ route('about_us') }}"><i class="bi bi-collection"></i> <span class="aside_item">আমাদের
                        প্লাটফর্ম সম্পর্কে </span></a> </li>
            <li><a href="{{ route('contact_us') }}"><i class="bi bi-person-lines-fill"></i> <span
                        class="aside_item">যোগাযোগ
                    </span></a> </li>
            <li><a href="{{ route('privacy-policy') }}"><i class="bi bi-shield-lock-fill"></i> <span
                        class="aside_item">প্রাইভেসি পলিসি </span></a> </li>
            <li><a href="{{ route('ads') }}"><i class="bi bi-badge-ad-fill"></i> <span class="aside_item">বিজ্ঞাপন দিন
                    </span></a> </li>
            <li><a href="{{ route('terms-and-conditions') }}"><i class="bi bi-list-check"></i> <span
                        class="aside_item">টার্মস & কন্ডিশন্স </span></a> </li>



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
