@extends('frontend.components.front-master')
@if ($type == 'terms')
    @section('metaauthor')
    Terms and Condition
@endsection
@endif
@section('metaauthor')
    Privacy Policy
@endsection
@section('metadesc')
    {{ $condition->meta_description }}
@endsection
@section('metakey')
    {{ $condition->meta_keywords }}
@endsection
@section('metaauthor')
    {{ $condition->meta_title }}
@endsection
@section('front_content')
    <div class="mas_filter all-product" style="background: #00db89;padding:30px 10px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head d-flex justify-content-center">
                        <h4 class="head1 text-white" style="margin-bottom: 0px;font-size:25px"> <span class="text-dark">
                                {{ $condition->title }}</span></h4>
                    </div>
                    {{-- <div class="category_list">
                        <ul class="list-inline category_list_items">
                            @foreach ($sub_cat as $sub_cat)
                                <li class="list-inline-item category_item_wrapper mb-3">
                                    <a href="" class="category_item">{{ $sub_cat->name ?? '' }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="course-home-section">
        <div class="container">
            <span id="allInfoContent">
                <div class="container my-4">
                    <div class="row py-3">
                        {!! $condition->content !!}

                    </div>
                </div>

            </span>

        </div>
        <div id="preloader" style="display: none;">
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
    </div>
@endsection
