@extends('frontend.components.front-master')

@section('front_content')
    <div class="singlePageBg course-home-section">
        @php
            $tools = App\Models\Blog::where('status', 1)->where('slug', 'jobs-finds')->first();
        @endphp

        <div class="container sirajganj_single_post_container">
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="postBody">
                        <h2 class="postBodyTitle">{{ $tools->title ?? 'Remote Jobs Finder' }}</h2>
                    </div>
                    <input type="text" id="toolsID" value="{{ $tools->id }}" hidden>

                    {{-- ========== Tool Section ========== --}}
                    <div class="mainTools">
                        <div class="job_finder text-center">
                            <div class="container sirajganj_single_post_container">
                                {{-- Filters --}}
                                <div class="row mb-4">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="jobCount">Number of Jobs:</label>
                                            <select id="jobCount" class="form-control mt-1">
                                                <option value="10">10</option>
                                                <option value="20" selected>20</option>
                                                <option value="50">50</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="jobGeo">Location:</label>
                                            <select id="jobGeo" class="form-control mt-1">
                                                <option value="">🌐 Anywhere</option>
                                                <option class="level-0" value="apac">🌏 APAC</option>
                                                <option class="level-1" value="australia">&nbsp;&nbsp;&nbsp;🇦🇺 Australia
                                                </option>
                                                <option class="level-1" value="china">&nbsp;&nbsp;&nbsp;🇨🇳 China</option>
                                                <option class="level-1" value="japan">&nbsp;&nbsp;&nbsp;🇯🇵 Japan</option>
                                                <option class="level-1" value="new-zealand">&nbsp;&nbsp;&nbsp;🇳🇿 New
                                                    Zealand</option>
                                                <option class="level-1" value="philippines">&nbsp;&nbsp;&nbsp;🇵🇭
                                                    Philippines</option>
                                                <option class="level-1" value="singapore">&nbsp;&nbsp;&nbsp;🇸🇬 Singapore
                                                </option>
                                                <option class="level-1" value="south-korea">&nbsp;&nbsp;&nbsp;🇰🇷 South
                                                    Korea</option>
                                                <option class="level-1" value="thailand">&nbsp;&nbsp;&nbsp;🇹🇭 Thailand
                                                </option>
                                                <option class="level-1" value="vietnam">&nbsp;&nbsp;&nbsp;🇻🇳 Vietnam
                                                </option>
                                                <option class="level-0" value="emea">🌍 EMEA</option>
                                                <option class="level-1" value="europe">&nbsp;&nbsp;&nbsp;🇪🇺 Europe
                                                </option>
                                                <option class="level-2" value="austria">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;🇦🇹 Austria</option>
                                                <option class="level-2" value="belgium">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;🇧🇪 Belgium</option>
                                                <option class="level-2" value="bulgaria">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;🇧🇬 Bulgaria</option>
                                                <option class="level-2" value="croatia">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;🇭🇷 Croatia</option>
                                                <option class="level-2" value="cyprus">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;🇨🇾 Cyprus</option>
                                                <option class="level-2" value="czechia">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;🇨🇿 Czechia</option>
                                                <option class="level-2" value="denmark">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;🇩🇰 Denmark</option>
                                                <option class="level-2" value="estonia">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;🇪🇪 Estonia</option>
                                                <option class="level-2" value="finland">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;🇫🇮 Finland</option>
                                                <option class="level-2" value="france">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;🇫🇷 France</option>
                                                <option class="level-2" value="germany">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;🇩🇪 Germany</option>
                                                <option class="level-2" value="greece">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;🇬🇷 Greece</option>
                                                <option class="level-2" value="hungary">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;🇭🇺 Hungary</option>
                                                <option class="level-2" value="ireland">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;🇮🇪 Ireland</option>
                                                <option class="level-2" value="italy">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;🇮🇹 Italy</option>
                                                <option class="level-2" value="latvia">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;🇱🇻 Latvia</option>
                                                <option class="level-2" value="lithuania">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;🇱🇹 Lithuania</option>
                                                <option class="level-2" value="netherlands">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;🇳🇱 Netherlands</option>
                                                <option class="level-2" value="norway">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;🇳🇴 Norway</option>
                                                <option class="level-2" value="poland">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;🇵🇱 Poland</option>
                                                <option class="level-2" value="portugal">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;🇵🇹 Portugal</option>
                                                <option class="level-2" value="romania">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;🇷🇴 Romania</option>
                                                <option class="level-2" value="slovakia">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;🇸🇰 Slovakia</option>
                                                <option class="level-2" value="slovenia">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;🇸🇮 Slovenia</option>
                                                <option class="level-2" value="spain">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;🇪🇸 Spain</option>
                                                <option class="level-2" value="sweden">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;🇸🇪 Sweden</option>
                                                <option class="level-2" value="switzerland">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;🇨🇭 Switzerland</option>
                                                <option class="level-2" value="uk">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;🇬🇧 UK</option>
                                                <option class="level-1" value="israel">&nbsp;&nbsp;&nbsp;🇮🇱 Israel
                                                </option>
                                                <option class="level-1" value="turkiye">&nbsp;&nbsp;&nbsp;🇹🇷 Türkiye
                                                </option>
                                                <option class="level-1" value="united-arab-emirates">
                                                    &nbsp;&nbsp;&nbsp;🇦🇪 United Arab Emirates</option>
                                                <option class="level-0" value="latam">🌎 LATAM</option>
                                                <option class="level-1" value="argentina">&nbsp;&nbsp;&nbsp;🇦🇷 Argentina
                                                </option>
                                                <option class="level-1" value="brazil">&nbsp;&nbsp;&nbsp;🇧🇷 Brazil
                                                </option>
                                                <option class="level-1" value="costa-rica">&nbsp;&nbsp;&nbsp;🇨🇷 Costa
                                                    Rica</option>
                                                <option class="level-1" value="mexico">&nbsp;&nbsp;&nbsp;🇲🇽 Mexico
                                                </option>
                                                <option class="level-0" value="canada">🇨🇦 Canada</option>
                                                <option class="level-0" value="usa" selected="selected">🇺🇸 USA
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="jobIndustry">Industry:</label>
                                            <select id="jobIndustry" class="form-control mt-1">
                                                <option value="">Any category</option>
                                                <option class="level-0" value="business">Business Development</option>
                                                <option class="level-0" value="copywriting">Copywriting &amp; Content
                                                </option>
                                                <option class="level-0" value="supporting" selected="selected">Customer
                                                    Success</option>
                                                <option class="level-1" value="technical-support">
                                                    &nbsp;&nbsp;&nbsp;Technical Support</option>
                                                <option class="level-0" value="data-science">Data Science</option>
                                                <option class="level-0" value="design-multimedia">Design &amp; Creative
                                                </option>
                                                <option class="level-1" value="web-app-design">&nbsp;&nbsp;&nbsp;Web &amp;
                                                    App Design</option>
                                                <option class="level-0" value="admin">DevOps &amp; SysAdmin</option>
                                                <option class="level-0" value="engineering">Engineering</option>
                                                <option class="level-0" value="accounting-finance">Finance &amp; Legal
                                                </option>
                                                <option class="level-0" value="hr">HR &amp; Recruiting</option>
                                                <option class="level-0" value="marketing">Marketing &amp; Sales</option>
                                                <option class="level-1" value="seller">&nbsp;&nbsp;&nbsp;Sales</option>
                                                <option class="level-1" value="seo">&nbsp;&nbsp;&nbsp;SEO</option>
                                                <option class="level-1" value="smm">&nbsp;&nbsp;&nbsp;Social Media
                                                    Marketing</option>
                                                <option class="level-0" value="management">Product &amp; Operations
                                                </option>
                                                <option class="level-0" value="dev">Programming</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="form-group">
                                            <label for="jobTag">Tag (e.g. seo, content, social):</label>
                                            <input type="text" id="jobTag" class="form-control mt-1"
                                                placeholder="Enter specific tags (comma separated)">
                                        </div>
                                    </div>
                                </div>

                                {{-- Button --}}
                                <button id="fetchJobs" class="generateBtn mt-3">Find Remote Jobs</button>

                                {{-- Output --}}
                                <div id="jobsResult" class="mt-4 text-left d-none">
                                    <h4 class="text-center mb-4">Available Remote Jobs</h4>
                                    <div id="jobsList" class="row"></div>
                                    <div class="text-center mt-4">
                                        <button id="loadMoreJobs" class="copyBtn d-none">Load More Jobs</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- ========= Tool Description ========= --}}
                    <div class="postBodyDesc mt-4">
                        <h3 class="text-start">Total View : <span>{{ $tools->view ?? 0 }}</span></h3>
                    </div>
                    <div class="postBodyDesc mt-5">
                        <p class="postBodyDescText">{!! $tools->description ?? '' !!}</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="course-home-section related_post">
            <div class="container sirajganj_related_view">
                <span id="allInfoContent">
                    <div class="container my-4 sirajganj_related_container">
                        <div class="row py-3 sirajganj_related_row">
                            <h4>Related Information</h4>
                            <div class="head d-flex justify-content-center">
                                <a href="" class="sirajganj_btn-primary">All Information ➜</a>
                            </div>
                        </div>
                    </div>
                </span>

                <div id="preloader" style="display: none;">
                    <div class="spinner-border text-primary" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function changeImage(element) {
            var mainImage = document.getElementById('mainImage');
            mainImage.src = element.src;
        }
    </script>
@endsection

@push('front_js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            let currentPage = 1;

            // Fetch jobs when button is clicked
            $("#fetchJobs").click(function() {
                currentPage = 1;
                fetchJobs();
            });

            // Load more jobs
            $("#loadMoreJobs").click(function() {
                currentPage++;
                fetchJobs(true);
            });

            function fetchJobs(append = false) {
                const count = $("#jobCount").val();
                const geo = $("#jobGeo").val();
                const industry = $("#jobIndustry").val();
                const tag = $("#jobTag").val().trim();

                // Show loading indicator
                $("#preloader").show();

                // Build API URL
                let apiUrl = `https://jobicy.com/api/v2/remote-jobs?count=${count}`;

                if (geo) apiUrl += `&geo=${geo}`;
                if (industry) apiUrl += `&industry=${industry}`;
                if (tag) apiUrl += `&tag=${tag}`;

                $.ajax({
                    url: apiUrl,
                    method: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        $("#preloader").hide();

                        if (!append) {
                            $("#jobsList").empty();
                        }

                        if (response.jobs && response.jobs.length > 0) {
                            response.jobs.forEach(function(job) {
                                const jobCard = `
                                    <div class="col-md-6 mb-4">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <h5 class="card-title">${job.jobTitle}</h5>
                                                <h6 class="card-subtitle mb-2 text-muted">${job.companyName}</h6>
                                                <p class="card-text">${job.jobExcerpt}</p>
                                                <div class="job-meta">
                                                    <span class="badge bg-primary">${job.jobType}</span>
                                                    <span class="badge bg-secondary ms-2">${job.pubDate}</span>
                                                    ${job.geo ? `<span class="badge bg-info ms-2">${job.geo}</span>` : ''}
                                                </div>
                                            </div>
                                            <div class="card-footer bg-transparent">
                                                <a href="${job.url}" target="_blank" class="btn btn-sm btn-success">View Job</a>
                                            </div>
                                        </div>
                                    </div>
                                `;
                                $("#jobsList").append(jobCard);
                            });

                            $("#jobsResult").removeClass("d-none");
                            $("#loadMoreJobs").removeClass("d-none");
                        } else if (!append) {
                            $("#jobsList").html(
                                '<div class="col-12"><p class="text-center">No jobs found matching your criteria.</p></div>'
                            );
                            $("#loadMoreJobs").addClass("d-none");
                        } else {
                            $("#loadMoreJobs").addClass("d-none");
                            alert("No more jobs available.");
                        }
                    },
                    error: function(xhr, status, error) {
                        $("#preloader").hide();
                        console.error("Error fetching jobs:", error);
                        alert("Error fetching jobs. Please try again later.");
                    }
                });
            }
        });
    </script>
@endpush
