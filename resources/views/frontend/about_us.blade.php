@extends('frontend.components.front-master')
@section('metaauthor')
    About Us
@endsection
@section('metadesc')
    {{ $about->meta_description }}
@endsection
@section('metakey')
    {{ $about->meta_keywords }}
@endsection
@section('metaauthor')
    {{ $about->meta_title }}
@endsection
@section('front_content')
    <div class="mas_filter all-product" style="background: #00db89;padding:30px 10px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head d-flex justify-content-center">
                        <h4 class="head1 text-white" style="margin-bottom: 0px;font-size:25px">{{ $about->title ?? "" }}</h4>
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

    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <div class="p-4 rounded shadow bg-light">
                   {!! $about->text ?? "" !!}
                </div>
            </div>
        </div>
    </div>
@endsection
