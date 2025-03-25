<!-- ###------- Last Sectin  ----------- ### -->
@php
    $setting = App\Models\Setting::first();
@endphp
   <div class="bgded home_about">
       <section id="testimonials" class="hoc container clear">
           <div class="container hoem_about_section">
               <div class="row">
                   <div class="col-md-6 col-12">
                       <div class="about_sirajganj">
                           <!-- <h2>সিরাজগঞ্জসিটি ডট কম </h2> -->
                           <h2>{{ $setting->site_title ?? "" }} </h2>
                           <hr class="about_header">
                           <p>
                           <main>
                                  {!! $setting->short_description ?? "" !!}
                           </p>
                       </div>
                   </div>
                   <div class="col-md-1"></div>
                   <div class="col-md-5 col-12">
                       <div class="tutorial_sirajganj">
                           <h2>ভিডিও টিউটোরিয়াল </h2>
                           <hr class="about_header">
                           <p>আমাদের প্লাটফর্ম কিভাবে ব্যাবহার করবেন তার সম্পর্ন ভিডিও টিউটোরিয়াল</p>
                           <iframe width="100%" height="315"
                               src="{{ $setting->youtube_video ?? "" }}"
                               title="YouTube video player" frameborder="0"
                               allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                               referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                       </div>
                   </div>
               </div>
           </div>
       </section>
   </div>