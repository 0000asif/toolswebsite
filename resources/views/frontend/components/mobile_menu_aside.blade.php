     @php
         $setting = App\Models\Setting::first();
     @endphp
     <style>
         /* Hide submenu by default */
         .custom-submenu {
             display: none;
             padding-left: 20px;
             list-style: none;
             margin-top: 5px;
         }

         /* Style for submenu links */
         .custom-submenu li a {
             display: block;
             color: #333;
             text-decoration: none;
             padding: 5px 0;
         }

         .custom-submenu li a:hover {
             color: #007bff;
         }


         /* Expand submenu when active */
         .custom-dropdown.open>.custom-submenu {
             display: block;
         }
     </style>
     <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="mobileMenuAside"
         aria-labelledby="mobileMenuAsideLabel">
         <div class="offcanvas-header">
             <h5 class="offcanvas-title" id="mobileMenuAsideLabel">মেনু </h5>
             <hr>
             <button type="button" class="text-reset aside-close" data-bs-dismiss="offcanvas" aria-label="Close">
                 <i class="bi bi-x-lg"></i>
             </button>
         </div>
         <div class="offcanvas-body">
             <div class="aside_body">
                 <!-- Home -->
                 <li><a href="{{ route('frontHome') }}"><i class="bi bi-house-fill"></i> <span
                             class="aside_item">হোম</span></a></li>

                 <!-- All Posts -->
                 <li><a href="{{ route('all.post') }}"><i class="bi bi-file-earmark-text-fill"></i> <span
                             class="aside_item">সকল পোষ্ট</span></a></li>

                 <!-- Blood Section -->
                 <li class="custom-dropdown">
                     <a href="javascript:void(0)" class="dropdown-toggle">
                         <i class="bi bi-droplet-fill"></i> <span class="aside_item">রক্ত </span>
                     </a>
                     <ul class="custom-submenu">
                         <li><a href="{{ route('blood_doners') }}">সকল ব্লাড ডোনার</a></li>
                         <li><a href="{{ route('bloods') }}">রক্ত প্রোয়োজন</a></li>
                     </ul>
                 </li>

                 <!-- Jobs -->
                 <li><a href="{{ route('jobs') }}"><i class="bi bi-briefcase-fill"></i> <span
                             class="aside_item">চাকরি</span></a></li>

                 <!-- Blogs -->
                 <li><a href="{{ route('blogs') }}"><i class="bi bi-journal-text"></i> <span
                             class="aside_item">ব্লগ</span></a></li>

                 <!-- Sirajganj Section -->
                 <li class="custom-dropdown">
                     <a href="javascript:void(0)" class="dropdown-toggle">
                         <i class="bi bi-map-fill"></i> <span class="aside_item">সিরাজগঞ্জ </span>
                     </a>
                     <ul class="custom-submenu">
                         <li><a href="#">সিরাজগঞ্জের সকল ইউনিয়ন</a></li>
                         <li><a href="#">সিরাজগঞ্জের সকল উপজেলা</a></li>
                         <li><a href="#">সিরাজগঞ্জের দর্শনীয় স্থান</a></li>
                         <li><a href="#">সিরাজগঞ্জের বিখ্যাত ব্যাক্তিত্ব</a></li>
                     </ul>
                 </li>

                 <!-- Mahfil Poster -->
                 <li><a href="{{ route('MahfilPoster') }}"><i class="bi bi-megaphone-fill"></i> <span
                             class="aside_item">মাহফিলের পোষ্টার</span></a></li>

                 <!-- Ads -->
                 <li><a href="{{ route('ads') }}"><i class="bi bi-bullhorn-fill"></i> <span class="aside_item">বিজ্ঞাপন
                             দিন</span></a></li>

                 <!-- Mobile Apps -->
                 <li><a href="{{ route('MobileApps') }}"><i class="bi bi-phone-fill"></i> <span
                             class="aside_item">মোবাইল অ্যাপ</span></a></li>

                 <!-- Other Services -->
                 <li class="aside_devider">অন্যান্য সেবাসমূহ</li>
                 <li><a href="{{ route('about_us') }}"><i class="bi bi-info-circle-fill"></i> <span
                             class="aside_item">আমাদের সম্পর্কে</span></a></li>
                 <li><a href="{{ route('contact_us') }}"><i class="bi bi-envelope-fill"></i> <span
                             class="aside_item">যোগাযোগ</span></a></li>
                 <li><a href="{{ route('privacy-policy') }}"><i class="bi bi-shield-lock-fill"></i> <span
                             class="aside_item">প্রাইভেসি পলিসি</span></a></li>
                 <li><a href="{{ route('terms-and-conditions') }}"><i class="bi bi-book-fill"></i> <span
                             class="aside_item">টার্মস & কন্ডিশন্স</span></a></li>


                 <!-- Connect with Us -->
                 <li class="aside_devider">আমাদের সাথে যুক্ত হোন</li>
                 <li><a href="{{ $setting->fb_link ?? '#' }}"><i class="bi bi-facebook"></i> <span
                             class="aside_item">ফেসবুক পেজ</span></a></li>
                 <li><a href="{{ $setting->x_link ?? '#' }}"><i class="bi bi-twitter"></i> <span
                             class="aside_item">ফেসবুক গ্রুপ</span></a></li>
                 <li><a href="{{ $setting->email ?? '#' }}"><i class="bi bi-envelope-fill"></i> <span
                             class="aside_item">ইমেইল</span></a></li>
                 <li><a href="{{ $setting->whatsapp_number ?? '#' }}"><i class="bi bi-whatsapp"></i> <span
                             class="aside_item">হোয়াটসঅ্যাপ</span></a></li>
                 <li><a href="{{ $setting->linkedin ?? '#' }}"><i class="bi bi-youtube"></i> <span
                             class="aside_item">ইউটিউব</span></a></li>
                 <li id="share" style="cursor: pointer"><a><i class="bi bi-share"></i> <span
                             class="aside_item">শেয়ার
                             করুন</span></a> </li>
             </div>
         </div>

     </div>
     <script>
         document.addEventListener("DOMContentLoaded", function() {
             const dropdowns = document.querySelectorAll('.custom-dropdown > .dropdown-toggle');

             dropdowns.forEach(dropdown => {
                 dropdown.addEventListener('click', function() {
                     const parent = this.parentElement;

                     // Toggle the 'open' class for this dropdown
                     parent.classList.toggle('open');

                     // Close other dropdowns if needed
                     dropdowns.forEach(item => {
                         if (item !== this && item.parentElement.classList.contains(
                                 'open')) {
                             item.parentElement.classList.remove('open');
                         }
                     });
                 });
             });
         });
     </script>

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
