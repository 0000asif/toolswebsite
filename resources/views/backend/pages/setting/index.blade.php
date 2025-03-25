@extends('backend.layout.master-admin')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <h1>Website Settings</h1>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                @include('backend.components.alert')
                <form action="{{ route('setting.update', $setting->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="row">
                                <!-- Logo -->
                                <div class="form-group col-4">
                                    <label for="logo">Logo</label>
                                    <input type="file" name="logo"
                                        class="form-control @error('logo') is-invalid @enderror">
                                    @if ($setting->logo)
                                        <img src="{{ asset('image/setting/' . $setting->logo) }}" width="100"
                                            alt="Current Logo">
                                    @endif
                                    @error('logo')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Favicon -->
                                <div class="form-group  col-4">
                                    <label for="fav_icon">Favicon</label>
                                    <input type="file" name="fav_icon"
                                        class="form-control @error('fav_icon') is-invalid @enderror">
                                    @if ($setting->fav_icon)
                                        <img src="{{ asset('image/setting/' . $setting->fav_icon) }}" width="50"
                                            alt="Current Favicon">
                                    @endif
                                    @error('fav_icon')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Site Title -->
                                <div class="form-group col-4">
                                    <label for="site_title">Site Title *</label>
                                    <input type="text" name="site_title"
                                        class="form-control @error('site_title') is-invalid @enderror"
                                        value="{{ old('site_title', $setting->site_title) }}" required>
                                    @error('site_title')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Contact Information -->
                                <div class="form-group col-4">
                                    <label for="phone">Phone *</label>
                                    <input type="text" name="phone"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        value="{{ old('phone', $setting->phone) }}" required>
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-4">
                                    <label for="email">Email *</label>
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email', $setting->email) }}" required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-4">
                                    <label for="whatsapp_number">WhatsApp Number *</label>
                                    <input type="text" name="whatsapp_number"
                                        class="form-control @error('whatsapp_number') is-invalid @enderror"
                                        value="{{ old('whatsapp_number', $setting->whatsapp_number) }}" required>
                                    @error('whatsapp_number')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Social Links -->
                                <div class="form-group col-4">
                                    <label for="fb_link">Facebook Link *</label>
                                    <input type="text" name="fb_link"
                                        class="form-control @error('fb_link') is-invalid @enderror"
                                        value="{{ old('fb_link', $setting->fb_link) }}" required>
                                    @error('fb_link')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-4">
                                    <label for="instagram_link">Instagram Link *</label>
                                    <input type="text" name="instagram_link"
                                        class="form-control @error('instagram_link') is-invalid @enderror"
                                        value="{{ old('instagram_link', $setting->instagram_link) }}" required>
                                    @error('instagram_link')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-4">
                                    <label for="x_link">X Link *</label>
                                    <input type="text" name="x_link"
                                        class="form-control @error('x_link') is-invalid @enderror"
                                        value="{{ old('x_link', $setting->x_link) }}" required>
                                    @error('x_link')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-4">
                                    <label for="linkedin">LinkedIn Link *</label>
                                    <input type="text" name="linkedin"
                                        class="form-control @error('linkedin') is-invalid @enderror"
                                        value="{{ old('linkedin', $setting->linkedin) }}" required>
                                    @error('linkedin')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-4">
                                    <label for="youtube_link">Youtube Channel Link </label>
                                    <input type="text" name="youtube_link"
                                        class="form-control @error('youtube_link') is-invalid @enderror"
                                        value="{{ old('youtube_link', $setting->youtube_link) }}">
                                    @error('youtube_link')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="form-group col-4">
                                    <label for="youtube_video">Youtube Video Link </label>
                                    <input type="text" name="youtube_video"
                                        class="form-control @error('youtube_video') is-invalid @enderror"
                                        value="{{ old('youtube_video', $setting->youtube_video) }}">
                                    @error('youtube_video')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Payment Image -->
                                {{-- <div class="form-group col-4">
                                    <label for="payment_img">Payment Image</label>
                                    <input type="file" name="payment_img"
                                        class="form-control @error('payment_img') is-invalid @enderror">
                                    @if ($setting->payment_img)
                                        <img src="{{ asset('image/setting/' . $setting->payment_img) }}" width="100"
                                            alt="Payment Image">
                                    @endif
                                    @error('payment_img')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div> --}}

                                <!-- Footer Background Image -->
                                {{-- <div class="form-group col-4">
                                    <label for="footer_bg">Footer Background Image</label>
                                    <input type="file" name="footer_bg"
                                        class="form-control @error('footer_bg') is-invalid @enderror">
                                    @if ($setting->footer_bg)
                                        <img src="{{ asset('image/setting/' . $setting->footer_bg) }}" width="100"
                                            alt="Footer Background Image">
                                    @endif
                                    @error('footer_bg')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div> --}}

{{-- 
                                <div class="form-group col-4">
                                    <label for="booking_time">Booking project payment time (hour) *</label>
                                    <input type="number" name="booking_time" placeholder="Time as a hour"
                                        class="form-control @error('booking_time') is-invalid @enderror"
                                        value="{{ old('booking_time', $setting->booking_time) }}" required>
                                    @error('booking_time')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div> --}}

                                <!-- Short Description -->
                                <div class="form-group col-12">
                                    <label for="short_description">Short Description *</label>
                                    <textarea name="short_description" id="summernote"
                                        class="form-control @error('short_description') is-invalid @enderror">{{ old('short_description', $setting->short_description) }}</textarea>
                                    @error('short_description')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- footer_about and Map -->
                                <div class="form-group col-12">
                                    <label for="footer_about">Footer About *</label>
                                    <textarea name="footer_about" class="form-control @error('footer_about') is-invalid @enderror">{{ old('footer_about', $setting->footer_about) }}</textarea>
                                    @error('footer_about')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>


                                <!-- Address and Map -->
                                <div class="form-group col-6">
                                    <label for="address">Address *</label>
                                    <textarea name="address" class="form-control @error('address') is-invalid @enderror">{{ old('address', $setting->address) }}</textarea>
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-4">
                                    <label for="map">Map Embed Link</label>
                                    <input type="text" name="map"
                                        class="form-control @error('map') is-invalid @enderror"
                                        value="{{ old('map', $setting->map) }}">
                                    @error('map')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Meta Title -->
                                <div class="form-group col-4">
                                    <label for="meta_title">Meta Title *</label>
                                    <input type="text" name="meta_title"
                                        class="form-control @error('meta_title') is-invalid @enderror"
                                        value="{{ old('meta_title', $setting->meta_title) }}">
                                    @error('meta_title')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- meta url  --}}
                                <div class="form-group col-4">
                                    <label for="meta_url">Meta URL</label>
                                    <input type="text" name="meta_url"
                                        class="form-control @error('meta_url') is-invalid @enderror"
                                        value="{{ old('meta_url', $setting->meta_url) }}">
                                    @error('meta_url')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Meta descriptioin -->
                                <div class="form-group col-6">
                                    <label for="meta_description">Meta Descriptioin *</label>
                                    <textarea name="meta_description" class="form-control @error('meta_description') is-invalid @enderror">{{ old('meta_description', $setting->meta_description) }}</textarea>
                                    @error('meta_description')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- Meta Keywords -->
                                <div class="form-group col-6">
                                    <label for="keywords">Meta Keyword *</label>
                                    <textarea name="keywords" class="form-control @error('keywords') is-invalid @enderror">{{ old('keywords', $setting->keywords) }}</textarea>
                                    @error('keywords')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Header Text -->
                                <div class="form-group col-6">
                                    <label for="header_text">Header Text *</label>
                                    <textarea name="header_text" class="form-control @error('header_text') is-invalid @enderror">{{ old('header_text', $setting->header_text) }}</textarea>
                                    @error('header_text')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Footer Text -->
                                <div class="form-group col-6">
                                    <label for="footer_text">Footer Text *</label>
                                    <textarea name="footer_text" class="form-control @error('footer_text') is-invalid @enderror">{{ old('footer_text', $setting->footer_text) }}</textarea>
                                    @error('footer_text')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>


                                <!-- Meta Image -->
                                <div class="form-group col-4">
                                    <label for="meta_img">Meta Image</label>
                                    <input type="file" name="meta_img"
                                        class="form-control @error('meta_img') is-invalid @enderror">
                                    @if ($setting->meta_img)
                                        <img src="{{ asset('image/setting/' . $setting->meta_img) }}" width="100"
                                            alt="Footer Background Image">
                                    @endif
                                    @error('meta_img')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Copyright Text -->
                                <div class="form-group col-8">
                                    <label for="copyright_text">Copyright Text *</label>
                                    <input type="text" name="copyright_text"
                                        class="form-control @error('copyright_text') is-invalid @enderror"
                                        value="{{ old('copyright_text', $setting->copyright_text) }}" required>
                                    @error('copyright_text')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                        </div>


                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Settings</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection

@push('js')
    <script src="{{ asset('backend') }}/plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $(function() {
            $('#summernote').summernote();
        });
    </script>
@endpush
