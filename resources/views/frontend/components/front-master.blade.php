<!DOCTYPE html>
<html lang="bn-BD">

<head>
    @php
        $setting = App\Models\Setting::first();
    @endphp
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Author -->

    <meta name="author" content="@yield('metaauthor', $setting->meta_title)">


    <!-- Description -->
    <meta name="description" content="@yield('metadesc', $setting->meta_description)">

    <!-- Keywords -->
    <meta name="keywords" content="@yield('metakey', $setting->keywords)">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Meta URL -->
    {{-- @if (!empty($setting->meta_url)) --}}
    <link rel="canonical" href="{{ url()->current() }}">
    {{-- @endif --}}

    <!-- Meta Image (for social sharing) -->
    @if (!empty($setting->meta_img))
        <meta property="og:image" content="{{ asset('image/setting/' . $setting->meta_img) }}">
    @endif

    <!-- Copyright -->
    <meta name="copyright" content="{{ $setting->copyright_text ?? 'Default copyright text' }}">


    <meta name="application-name" content="" />
    <meta name='dmca-site-verification' content='ZVFKZ1JuY2hzQXlYaloySC9vVUF1Zz090' />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400..800&family=Hind+Siliguri:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;600&display=swap" rel="stylesheet">



    <title>Sirajganj City | @yield('metaauthor', $setting->meta_title) </title>

    <link rel="shortcut icon" href="{{ asset('image/setting/' . $setting->fav_icon) }}" type="image/x-icon">

    <link rel="icon" href="{{ asset('image/setting/' . $setting->fav_icon) }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/asif.css">


    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/custom.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <!-- summernote -->
    <link rel="stylesheet" href=" {{ asset('backend') }}/plugins/summernote/summernote-bs4.min.css">

    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/select2/css/select2.min.css">
    <style>
        .select2-container--default .select2-selection--single {
            background-color: #fff;
            border: 1px solid #aaa;
            border-radius: 4px;
            width: 100% !important;
            height: 100% !important;
        }
        .singlePageBg {
            background: linear-gradient(45deg, #124e6624, #fbf5dfb8) !important;
            margin-top: -14px;
            padding: 15px 0;
        }
        .postBody {
            background: #ffffff91;
            padding: 15px;
            border: 1px solid #d9d9d9;
        }
        .postBodyDesc {
            padding: 15px;
            background: #fcfbf6;
            margin-top: 10px;
        }
        .mainTools {
            padding: 15px;
            background: #fcfbf6;
            border: 1px solid #d9d9d9;
            border-top: none;
        }
        h2.postBodyTitle {
        text-align: center;
        font-size: 25px;
        margin-bottom: 0px;
    }
    </style>
    {!! $setting->header_text !!}

</head>

<body id="body">

    <!-- ===========================================================
   ============== PHP
   =========================================================== -->
    <!--Loading-->
    <div id="loadingMask" class="loader loader-double"></div>

    <!--Navbar-->
    <style>
        .navbar-nav {
            flex-direction: inherit !important;
        }
    </style>
    <style>
        .testimonial-section .card .card-body p {
            font-family: 'BALOO DA 2';
            font-size: 17px;
        }

        #preloader {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
        }
    </style>


    <!-- ============================================== -->
    <!-- Aside Menu  -->
    @include('frontend.components.mobile_menu_aside')

    <!--========================== -->


    {{-- ========================================== --}}
    {{-- Header  --}}
    @include('frontend.components.header')
    {{-- ========================================== --}}

    <!-- Footer Sticky Menu Start -->
    @include('frontend.components.mobile_menu')
    <!-- Footer Sticky Menu Start -->
    <!--MainBody-->
    <div class="container-fluid p-0 m-0 mainBody" id="mainBody" style="overflow-x:hidden;">
        <main id="main">
            <input type="hidden" id="programLoadMoreNumber" value="3" />
            <input type="hidden" id="programShowProgramNumber" value="9" />
            <input type="hidden" id="testimonialLoadMoreNumber" value="3" />
            <input type="hidden" id="testimonialShowNumber" value="3" />


            <!-- ======= Hero Section Slider ======= -->
            {{-- @include('frontend.components.slider') --}}
            <!-- ======= Hero Section Slider ======= -->

            <!-- End Hero -->

            @yield('front_content')

        </main>

    </div>



    <!-- ======= Chat Section ======= -->
    @include('frontend.components.live_chat')
    <!-- ======= Footer ======= -->
    @include('frontend.components.footer')
    <!-- End Footer -->


    <script src="{{ asset('frontend') }}/assets/js/jQuery.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/man.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/custom.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <!-- Select2 -->
    <script src="{{ asset('backend') }}/plugins/select2/js/select2.full.min.js"></script>

    <!-- Summernote -->
    <script src=" {{ asset('backend') }}/plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $(function() {
            // Summernote
            $('.summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>
    <script>
        document.getElementById('shareButton').addEventListener('click', async () => {
            const shareData = {
                title: document.title,
                text: 'Check out this awesome website!',
                url: 'https://sirajganjcity.com/'
            };

            if (navigator.share) {
                try {
                    await navigator.share(shareData);
                    console.log('Content shared a successfully');
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

    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

            //Date and time picker
            $('#reservationdatetime').datetimepicker({
                icons: {
                    time: 'far fa-clock'
                }
            });

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                            'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                        'MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })


        })
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const footerSticky = document.querySelector(".footer_sticky");
            let lastScrollTop = 0;

            window.addEventListener("scroll", function() {
                let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

                if (currentScroll < lastScrollTop) {
                    // Scrolling down
                    footerSticky.style.display = "block";
                } else {
                    // Scrolling up
                    footerSticky.style.display = "none";
                }
                lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Avoid negative scroll values
            });
        });
    </script>
    <script>
        // Function to load Batches with a preloader
        function loadBatches(url, data = {}) {
            $('#preloader').show(); // Show the preloader
            $.ajax({
                url: url,
                type: "GET",
                data: data,
                success: function(data) {
                    $('#content').html(data);
                },
                complete: function() {
                    $('#preloader').hide(); // Hide the preloader after the request completes
                },
                error: function(xhr, status, error) {
                    console.error("Error: " + error);
                    $('#preloader').hide(); // Hide the preloader on error
                }
            });
        }
    </script>

    @stack('front_js')
</body>

</html>
