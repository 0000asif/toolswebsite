 @php
     use App\Models\Blog;
     use App\Models\Post;
     use App\Models\Customer;
     use App\Models\Revision;
     use App\Models\Contact;

     $pengingPost = Blog::where('status', '0')->count();
     $pendingBlog = post::where('status', '0')->count();
     $pendingCustomer = Customer::where('status', '0')->count();
     $revision = Revision::where('status', '0')->count();
     $contact = Contact::where('status', '0')->count();
 @endphp




 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="{{ route('home') }}" class="brand-link">
         <img src=" {{ asset('backend') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">SirajganjCity</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">


         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <li class="nav-item menu-open">
                     <a href="{{ route('home') }}" class="nav-link active">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Dashboard
                         </p>
                     </a>
                 </li>

                 {{-- Devider  --}}
                 <li class="nav-header">DASHBOARDS</li>


                 {{-- Role & Permission  --}}
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon far fa-envelope"></i>
                         <p>
                             Role & Permission
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('permission.index') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Permission</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('role.index') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Role</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('user.index') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>User</p>
                             </a>
                         </li>
                     </ul>
                 </li>


                 {{-- Customer --}}
                 <li class="nav-item {{ request()->routeIs('customer.*') ? 'menu-open' : '' }}">
                     <a href="#" class="nav-link {{ request()->routeIs('customer.*') ? 'active' : '' }}">
                         <i class="nav-icon fas fa-users"></i>
                         <p>
                             Customer
                             <i class="fas fa-angle-left right"></i>
                             <span class="badge badge-info right">{{ $pendingCustomer }}</span>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('customer.create') }}"
                                 class="nav-link {{ request()->routeIs('customer.create') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Add New</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('customer.index') }}"
                                 class="nav-link {{ request()->routeIs('customer.index') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>All Customer</p>
                             </a>
                         </li>
                     </ul>
                 </li>



                 {{-- Blog Category --}}
                 <li class="nav-item {{ request()->routeIs('blog-category.*') ? 'menu-open' : '' }}">
                     <a href="#" class="nav-link {{ request()->routeIs('blog-category.*') ? 'active' : '' }}">
                         {{-- <i class="nav-icon far fa-envelope"></i> --}}
                         <i class="nav-icon fas fa-caret-square-right"></i>
                         <p>
                             Blog Category
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('blog-category.create') }}"
                                 class="nav-link {{ request()->routeIs('blog-category.create') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Add New</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('blog-category.index') }}"
                                 class="nav-link {{ request()->routeIs('blog-category.index') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>All Blog Category</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 {{-- blogs --}}
                 <li
                     class="nav-item {{ request()->routeIs('blog.*') || request()->routeIs('pending.blog') || request()->routeIs('approved.blog') ? 'menu-open' : '' }}">
                     <a href="#"
                         class="nav-link {{ request()->routeIs('blog.*') || request()->routeIs('pending.blog') || request()->routeIs('approved.blog') ? 'active' : '' }}">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             Blogs
                             <i class="fas fa-angle-left right"></i>
                             <span class="badge badge-info right">{{ $pendingBlog }}</span>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('blog.create') }}"
                                 class="nav-link {{ request()->routeIs('blog.create') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Add New</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('pending.blog') }}"
                                 class="nav-link {{ request()->routeIs('pending.blog') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>All pending Blogs</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('approved.blog') }}"
                                 class="nav-link {{ request()->routeIs('approved.blog') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>All Approved Blogs</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('blog.index') }}"
                                 class="nav-link {{ request()->routeIs('blog.index') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>All Blogs</p>
                             </a>
                         </li>
                     </ul>
                 </li>




                 {{-- Category --}}
                 <li class="nav-item {{ Route::is('category.*') ? 'menu-open' : '' }}">
                     <a href="#" class="nav-link {{ Route::is('category.*') ? 'active' : '' }}">
                         {{-- <i class=" far fa-envelope"></i> --}}
                         <i class="nav-icon fas fa-caret-square-right"></i>
                         <p>
                             Category
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('category.create') }}"
                                 class="nav-link {{ Route::is('category.create') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Add New</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('category.index') }}"
                                 class="nav-link {{ Route::is('category.index') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>All Category</p>
                             </a>
                         </li>
                     </ul>
                 </li>


                 {{-- Tools --}}
                 <li
                     class="nav-item {{ request()->routeIs('tools.*') || request()->routeIs('pending.post') || request()->routeIs('approved.post') || request()->routeIs('tag.index') ? 'menu-open' : '' }}">
                     <a href="#"
                         class="nav-link {{ request()->routeIs('tools.*') || request()->routeIs('pending.post') || request()->routeIs('approved.post') ? 'active' : '' }}">
                         <i class="nav-icon fas fa-paste"></i>
                         <p>
                             Tools
                             <i class="fas fa-angle-left right"></i>
                             <span class="badge badge-danger right">{{ $pengingPost }}</span>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('tools.create') }}"
                                 class="nav-link {{ request()->routeIs('tools.create') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Add New</p>
                             </a>
                         </li>
                         {{-- <li class="nav-item">
                             <a href="{{ route('pending.post') }}"
                                 class="nav-link {{ request()->routeIs('pending.post') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>All Pending Post</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('approved.post') }}"
                                 class="nav-link {{ request()->routeIs('approved.post') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>All Published Post</p>
                             </a>
                         </li> --}}
                         <li class="nav-item">
                             <a href="{{ route('tools.index') }}"
                                 class="nav-link {{ request()->routeIs('tools.index') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>All Tools</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('tag.index') }}"
                                 class="nav-link {{ request()->routeIs('tag.index') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>All Tag</p>
                             </a>
                         </li>
                     </ul>
                 </li>


                 {{-- Mobile Apps --}}
                 <li
                     class="nav-item {{ request()->routeIs('mobileapps.*') || request()->routeIs('appsreview.*') || request()->routeIs('job.*') ? 'menu-open' : '' }}">
                     <a href="#"
                         class="nav-link {{ request()->routeIs('mobileapps.*') || request()->routeIs('appsreview.*') || request()->routeIs('job.*') ? 'active' : '' }}">
                         {{-- <i class="nav-icon far fa-envelope"></i> --}}
                         <i class="nav-icone fab fa-google-play"></i>
                         <p>
                             Mobile Apps
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('mobileapps.index') }}"
                                 class="nav-link {{ request()->routeIs('mobileapps.index') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Mobile Apps Settings</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('appsreview.index') }}"
                                 class="nav-link {{ request()->routeIs('appsreview.index') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Pending Review</p>
                             </a>
                         </li>
                     </ul>
                 </li>



                 {{-- Terms Condition --}}
                 <li
                     class="nav-item {{ request()->routeIs('privacy-policy.*') || request()->routeIs('terms-condition.*') || request()->routeIs('about.*') ? 'menu-open' : '' }}">
                     <a href="#"
                         class="nav-link {{ request()->routeIs('privacy-policy.*') || request()->routeIs('terms-condition.*') || request()->routeIs('about.*') ? 'active' : '' }}">
                         {{-- <i class="nav-icon far fa-envelope"></i> --}}
                         <i class="nav-icon fas fa-vote-yea"></i>
                         <p>
                             Pages
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('about.index') }}"
                                 class="nav-link {{ request()->routeIs('about.index') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>About</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('privacy-policy.index') }}"
                                 class="nav-link {{ request()->routeIs('privacy-policy.index') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Privacy Policy</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('terms-condition.index') }}"
                                 class="nav-link {{ request()->routeIs('terms-condition.index') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Terms and Condition</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <li class="nav-item">
                     <a href="{{ route('revision.index') }}"
                         class="nav-link {{ request()->routeIs('revision.index') ? 'active' : '' }}">
                         {{-- <i class="nav-icon fas fa-cog"></i> --}}
                         <i class="nav-icon far fa-registered"></i>
                         <p>
                             Revision
                             <span class="badge badge-danger right">{{ $revision }}</span>
                         </p>
                     </a>
                 </li>

                 <li class="nav-item">
                     <a href="{{ route('contact.index') }}"
                         class="nav-link {{ request()->routeIs('cantact.index') ? 'active' : '' }}">
                         <i class="nav-icon fas fa-id-card-alt"></i>
                         <p>
                             Contact Messages
                             <span class="badge badge-danger right">{{ $contact }}</span>
                         </p>
                     </a>
                 </li>



                 {{-- Terms Condition --}}
                 <li
                     class="nav-item {{ request()->routeIs('ContactPageSeo', 'AddsPageSeo', 'PosterPageSeo', 'JobPageSeo', 'LoginPageSeo', 'RegPageSeo', 'BloodDonnerPageSeo', 'BloodPostPageSeo') ? 'menu-open' : '' }}">
                     <a href="#"
                         class="nav-link {{ request()->routeIs('ContactPageSeo', 'AddsPageSeo', 'PosterPageSeo', 'JobPageSeo', 'LoginPageSeo', 'RegPageSeo', 'BloodDonnerPageSeo', 'BloodPostPageSeo') ? 'active' : '' }}">
                         {{-- <i class="nav-icon far fa-envelope"></i> --}}
                         <i class="nav-icon fas fa-vote-yea"></i>
                         <p>
                             SEO Section
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('ContactPageSeo') }}"
                                 class="nav-link {{ request()->routeIs('ContactPageSeo') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Contact Page SEO</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('AddsPageSeo') }}"
                                 class="nav-link {{ request()->routeIs('AddsPageSeo') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Adds Page SEO</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('PosterPageSeo') }}"
                                 class="nav-link {{ request()->routeIs('PosterPageSeo') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Poster Page SEO</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('JobPageSeo') }}"
                                 class="nav-link {{ request()->routeIs('JobPageSeo') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Job Page Seo </p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('LoginPageSeo') }}"
                                 class="nav-link {{ request()->routeIs('LoginPageSeo') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Login Page Seo </p>
                             </a>
                         </li>
                         {{-- RegPageSeo --}}
                         <li class="nav-item">
                             <a href="{{ route('RegPageSeo') }}"
                                 class="nav-link {{ request()->routeIs('RegPageSeo') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Sinup Page Seo </p>
                             </a>
                         </li>
                         {{-- BloodDonnerPageSeo --}}
                         <li class="nav-item">
                             <a href="{{ route('BloodDonnerPageSeo') }}"
                                 class="nav-link {{ request()->routeIs('BloodDonnerPageSeo') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Blood Doner Page Seo </p>
                             </a>
                         </li>
                         {{-- BloodPostPageSeo --}}
                         <li class="nav-item">
                             <a href="{{ route('BloodPostPageSeo') }}"
                                 class="nav-link {{ request()->routeIs('BloodPostPageSeo') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Blood Post Page Seo </p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <li class="nav-item">
                     <a href="{{ route('setting.index') }}"
                         class="nav-link {{ request()->routeIs('setting.index') ? 'active' : '' }}">
                         <i class="nav-icon fas fa-cog"></i>
                         <p>
                             Settings
                         </p>
                     </a>
                 </li>


             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
