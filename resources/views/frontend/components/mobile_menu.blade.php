   <section class="footer_sticky d-xl-none" id="footer_sticker__ider">
       <div class="my_container">
           <div class="fonter_stick__main d-flex">
               <div>
                   <span>
                       <a href="{{ route('frontHome') }}">
                           <i class="bi bi-house"></i>

                       </a>
                   </span>
                   <span>
                       <a href="{{ route('frontHome') }}">Home</a>
                   </span>
               </div>
               <div>
                   <span>
                       <a href="{{ route('BloodDoner') }}">
                           <i class="bi bi-droplet-fill" style="color: red;"></i>
                       </a>
                   </span>
                   <span>
                       <a href="{{ route('BloodDoner') }}" style="color: red;">Blood</a>
                   </span>
               </div>
               <div>
                   <span>
                       <a href="{{ route('customer.favoriteList') }}">
                           <i class="bi bi-list-task"></i>
                       </a>
                   </span>
                   <span>
                       <a href="{{ route('customer.favoriteList') }}">Fev List</a>
                   </span>
               </div>
               <div>
                   <span>
                       <a href="{{ route('blogs') }}">
                           <i class="bi bi-substack"></i>
                       </a>
                   </span>
                   <span>
                       <a href="{{ route('blogs') }}">Blog</a>
                   </span>
               </div>
               {{-- <div>
                @if (Auth::guard('customer')->check())
                     <a href="{{ route('CustomerProfile') }}"><span class="footer_cart">
                           <i class="bi bi-person"></i></span>
                       <span>Profile</span></a>
                @else
                     <a href="{{ route('CustomerLogin') }}"><span class="footer_cart">
                           <i class="bi bi-box-arrow-in-right"></i></span>
                       <span>Login</span></a>
                @endif
               </div> --}}
           </div>
       </div>
   </section>
