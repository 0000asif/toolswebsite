@extends('frontend.components.front-master')
@section('front_content')
    <div class="mas_filter all-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head d-flex justify-content-center">
                        <h1 class="head1 text-white m-0"> সার্চ রেজাল্ট ! </h1>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="course-home-section">

        <div class="container">

            <span id="allBloodPost">
                <div class="">
                    <div class="container">
                      
                        <div class="col-md-12">
                            <div class="row mt-3">
                                <div class="col-md-12 col-12">
                                    <!-- =============== show all doner list ============  -->
                                    <div class="my-3">
                                        <div class="row">
                                            <a href="{{ Route('frontHome') }}" class="sirajganj_btn-header"><i
                                class="bi bi-arrow-left"></i> Back</a>
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8 col-12">
                                             
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="col-md-10 col-10">
                                                         
                                                            <div class="doner_list_right">
                                                                <!-- Title -->
                                                                @if (!empty($result->title))
                                                                    <h2>
                                                                        {{ $result->title }}
                                                                    </h2>
                                                                @endif

                                                                <!-- Description -->
                                                                @if (!empty($result->description))
                                                                    <p>{!! $result->description !!}</p>
                                                                @endif

                                                                <!-- Category -->
                                                                @if (!empty($result->category_id))
                                                                    <p><strong>Category:</strong>
                                                                        {{ $result->category->name ?? '' }}
                                                                    </p>
                                                                @endif

                                                                <!-- Sub Category -->
                                                                @if (!empty($result->sub_category_id))
                                                                    <p><strong>Sub Category :</strong>
                                                                        {{ $result->subCategory->name ?? '' }}</p>
                                                                @endif

                                                                <!-- Upazila -->
                                                                @if (!empty($result->upazila_id))
                                                                    <p><strong>Upazila ID:</strong>
                                                                        {{ $result->upazila->bn_name }}
                                                                    </p>
                                                                @endif

                                                                <!-- Union -->
                                                                @if (!empty($result->union_id))
                                                                    <p><strong>Union ID:</strong>
                                                                        {{ $result->union->bn_name }}</p>
                                                                @endif

                                                                <!-- Phone -->
                                                                @if (!empty($result->phone))
                                                                    <p><strong>Phone:</strong> {{ $result->phone }}</p>
                                                                @endif

                                                                <!-- Email -->
                                                                @if (!empty($result->email))
                                                                    <p><strong>Email:</strong> {{ $result->email }}</p>
                                                                @endif

                                                                <!-- Address -->
                                                                @if (!empty($result->address))
                                                                    <p><strong>Address:</strong> {{ $result->address }}
                                                                    </p>
                                                                @endif

                                                                <!-- Facebook Link -->
                                                                @if (!empty($result->facebook_link))
                                                                    <p>
                                                                        <strong>Facebook:</strong>
                                                                        <a href="{{ $result->facebook_link }}"
                                                                            target="_blank">View Profile</a>
                                                                    </p>
                                                                @endif

                                                                <!-- Google Map Button -->
                                                                @if (!empty($result->google_map))
                                                                    <p>
                                                                        <strong>Location:</strong>
                                                                        <a href="{{ $result->google_map }}"
                                                                            class="sirajganj_btn-header btn-sm"
                                                                            target="_blank">View
                                                                            on Google Map</a>
                                                                    </p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
            </span>

        </div>
    </div>
@endsection
@push('front_js')
    <script></script>
@endpush
