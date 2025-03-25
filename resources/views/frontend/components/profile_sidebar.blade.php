 @php
     $setting = App\Models\Setting::first();
 @endphp

 <div class="col-md-3">
     <div class="profile_sidebar">
         <div class="aside_body profile">
             <li class="{{ request()->routeIs('CustomerProfile') ? 'profile_active' : '' }}">
                 <a href="#" class="d-flex justify-content-between align-items-center">
                     <div class="d-flex align-items-center">
                         <i class="bi bi-house-fill"></i>
                         <span class="aside_item ms-2">ড্যাশবোর্ড</span>
                     </div>
                     <i class="bi bi-chevron-right profile_arrow"></i>
                 </a>
             </li>

             <ul class="list-unstyled">
                 <li>
                     <a href="{{ Route('customer.update') }}" class="d-flex justify-content-between align-items-center">
                         <div class="d-flex align-items-center">
                             <i class="bi bi-people"></i>
                             <span class="aside_item ms-2">প্রোফাইল আপডেট করুন</span>
                         </div>
                         <i class="bi bi-chevron-right profile_arrow"></i>
                     </a>
                 </li>
                 <li>
                     <a href="{{ Route('customer.passwordupdate') }}"
                         class="d-flex justify-content-between align-items-center">
                         <div class="d-flex align-items-center">
                             <i class="bi bi-eye-slash"></i>
                             <span class="aside_item ms-2">পাসওয়ার্ড পরিবর্তন করুন</span>
                         </div>
                         <i class="bi bi-chevron-right profile_arrow"></i>
                     </a>
                 </li>
                 <li>
                     <a href="{{ Route('customer.favoriteList') }}"
                         class="d-flex justify-content-between align-items-center">
                         <div class="d-flex align-items-center">
                             <i class="bi bi-heart-fill"></i>
                             <span class="aside_item ms-2">পছন্দের তালিকা</span>
                         </div>
                         <i class="bi bi-chevron-right profile_arrow"></i>
                     </a>
                 </li>
                 <li>
                     <a href="#" class="d-flex justify-content-between align-items-center" data-bs-toggle="modal"
                         data-bs-target="#staticBackdrop">
                         <div class="d-flex align-items-center">
                             <i class="bi bi-box-arrow-left"></i>
                             <span class="aside_item ms-2">লগআউট করুন</span>
                         </div>
                         <i class="bi bi-chevron-right profile_arrow"></i>
                     </a>
                 </li>

                 <li class="aside_devider">সকল তথ্য যুক্ত করুন</li>

                 <li class="{{ request()->routeIs('BloodDoner') ? 'profile_active' : '' }}">
                     <a href="{{ route('BloodDoner') }}" class="d-flex justify-content-between align-items-center">
                         <div class="d-flex align-items-center">
                             <i class="bi bi-droplet-half"></i>
                             <span class="aside_item ms-2">রক্ত দানকারি যুক্ত করুন </span>
                         </div>
                         <i class="bi bi-chevron-right profile_arrow"></i>
                     </a>
                 </li>
                 <li>
                     <a href="{{ Route('customer.postadd') }}"
                         class="d-flex justify-content-between align-items-center">
                         <div class="d-flex align-items-center">
                             <i class="bi bi-info-circle-fill"></i>
                             <span class="aside_item ms-2">তথ্য যুক্ত করুন</span>
                         </div>
                         <i class="bi bi-chevron-right profile_arrow"></i>
                     </a>
                 </li>
                 <li>
                     <a href="{{ Route('customer.blogadd') }}"
                         class="d-flex justify-content-between align-items-center">
                         <div class="d-flex align-items-center">
                             <i class="bi bi-substack"></i>
                             <span class="aside_item ms-2">ব্লগ লেখুন</span>
                         </div>
                         <i class="bi bi-chevron-right profile_arrow"></i>
                     </a>
                 </li>
                 <li>
                     <a href="{{ Route('CusMahfilPoserAdd') }}"
                         class="d-flex justify-content-between align-items-center">
                         <div class="d-flex align-items-center">
                             <i class="bi bi-mortarboard"></i>
                             <span class="aside_item ms-2">মাহফিল পোস্টার অ্যাড করুন </span>
                         </div>
                         <i class="bi bi-chevron-right profile_arrow"></i>
                     </a>
                 </li>
                 <li>
                     <a href="{{ Route('customer.jobpostadd') }}"
                         class="d-flex justify-content-between align-items-center">
                         <div class="d-flex align-items-center">
                             <i class="bi bi-mortarboard"></i>
                             <span class="aside_item ms-2">জব পোস্ট করুন</span>
                         </div>
                         <i class="bi bi-chevron-right profile_arrow"></i>
                     </a>
                 </li>
                 <li>
                     <a href="{{ Route('ads') }}" class="d-flex justify-content-between align-items-center">
                         <div class="d-flex align-items-center">
                             <i class="bi bi-badge-ad-fill"></i>
                             <span class="aside_item ms-2">বিজ্ঞাপন দিন</span>
                         </div>
                         <i class="bi bi-chevron-right profile_arrow"></i>
                     </a>
                 </li>

                 <li class="aside_devider">আমার ইতিহাস</li>

                 <li>
                     <a href="{{ Route('customer.post') }}" class="d-flex justify-content-between align-items-center">
                         <div class="d-flex align-items-center">
                             <i class="bi bi-substack"></i>
                             <span class="aside_item ms-2">আমার সকল ব্লগ</span>
                         </div>
                         <i class="bi bi-chevron-right profile_arrow"></i>
                     </a>
                 </li>
                 <li>
                     <a href="{{ Route('customer.blog') }}" class="d-flex justify-content-between align-items-center">
                         <div class="d-flex align-items-center">
                             <i class="bi bi-sticky-fill"></i>
                             <span class="aside_item ms-2">আমার সকল পোষ্ট</span>
                         </div>
                         <i class="bi bi-chevron-right profile_arrow"></i>
                     </a>
                 </li>
                 <li>
                     <a href="{{ Route('customer.jobpost') }}"
                         class="d-flex justify-content-between align-items-center">
                         <div class="d-flex align-items-center">
                             <i class="bi bi-mortarboard"></i>
                             <span class="aside_item ms-2">আমার সকল জব পোষ্ট</span>
                         </div>
                         <i class="bi bi-chevron-right profile_arrow"></i>
                     </a>
                 </li>
                 <li>
                     <a href="{{ Route('customer.blood_donor') }}"
                         class="d-flex justify-content-between align-items-center">
                         <div class="d-flex align-items-center">
                             <i class="bi bi-droplet"></i>
                             <span class="aside_item ms-2">আমার সকল রক্তদাতা </span>
                         </div>
                         <i class="bi bi-chevron-right profile_arrow"></i>
                     </a>
                 </li>
                 <li>
                     <a href="#" class="d-flex justify-content-between align-items-center">
                         <div class="d-flex align-items-center">
                             <i class="bi bi-badge-ad-fill"></i>
                             <span class="aside_item ms-2">আমার সকল বিজ্ঞাপন</span>
                         </div>
                         <i class="bi bi-chevron-right profile_arrow"></i>
                     </a>
                 </li>


                 <li class="aside_devider">আমাদের সাথে যুক্ত হোন </a> </li>

                 <li><a href="{{ $setting->fb_link ?? '' }}"><i class="bi bi-flag-fill"></i> <span
                             class="aside_item">ফেসবুক
                             পেজ </span></a> </li>
                 <li><a href="{{ $setting->x_link ?? '' }}"><i class="bi bi-facebook"></i> <span
                             class="aside_item">ফেসবুক
                             গ্রুপ </span></a> </li>
                 <li><a href="{{ $setting->email ?? '' }}"><i class="bi bi-envelope-check-fill"></i> <span
                             class="aside_item">ইমেইল
                         </span></a> </li>
                 <li><a href="{{ $setting->whatsapp_number ?? '' }}"><i class="bi bi-whatsapp"></i> <span
                             class="aside_item">হোয়াটসঅ্যাপ </span></a> </li>
                 <li><a href="{{ $setting->linkedin ?? '' }}"><i class="bi bi-youtube"></i> <span
                             class="aside_item">ইউটিউব
                         </span></a> </li>
                 {{-- <li id="shareButton" style="cursor: pointer"><a><i class="bi bi-share"></i> <span
                            class="aside_item">শেয়ার
                            করুন</span></a> </li> --}}

             </ul>


         </div>
     </div>
 </div>



 <!-- Modal -->
 <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="staticBackdropLabel">লগআউট কনফার্মেশন ! </h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 আপনি কি লগআউট করতে চান ?
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">বাহির </button>
                 <a href="{{ route('CustomerLogout') }}"> <button type="button"
                         class="btn btn-primary">লগআউট</button></a>
             </div>
         </div>
     </div>
 </div>
