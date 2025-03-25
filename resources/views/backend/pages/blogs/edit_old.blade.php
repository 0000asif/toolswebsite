@extends('backend.layout.master-admin')
@section('content')
    @include('backend.components.alert')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Post</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Edit Post</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            {{-- <div class="card-header d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <h3 class="card-title">Edit Post</h3>
                                </div>
                                <div>
                                    <a href="{{ route('tools.index') }}" class="btn btn-dark btn-sm">Back</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('tools.update', $blog->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <!-- Post Details -->
                                    <div class="mb-3">
                                        <label for="title">Post Title <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            name="title" value="{{ old('title', $blog->title) }}" required>
                                        @error('title')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Customer -->
                                    <div class="mb-3">
                                        <label for="customer_id">Customer <span class="text-danger">*</span></label>
                                        <select required name="customer_id" id="customer_id"
                                            class="form-control select2 @error('customer_id') is-invalid @enderror">
                                            <option value="">Select a customer</option>
                                            @foreach ($customers as $customer)
                                                <option value="{{ $customer->id }}"
                                                    {{ $blog->customer_id == $customer->id ? 'selected' : '' }}>
                                                    {{ $customer->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('customer_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="slug">Post Slug <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                            name="slug" value="{{ old('slug', $blog->slug) }}" required>
                                        @error('slug')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="mb-3">
                                        <label for="phone">Phone <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                            name="phone" value="{{ old('phone', $blog->phone) }}" required>
                                        @error('phone')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="email">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email', $blog->email) }}" required>
                                        @error('email')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="address">Address <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('address') is-invalid @enderror"
                                            name="address" value="{{ old('address', $blog->address) }}" required>
                                        @error('address')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="facebook_link">Facebook Link <span class="text-danger">*</span></label>
                                        <input type="url"
                                            class="form-control @error('facebook_link') is-invalid @enderror"
                                            name="facebook_link" value="{{ old('facebook_link', $blog->facebook_link) }}"
                                            required>
                                        @error('facebook_link')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="google_map">Google Map <span class="text-danger">*</span></label>
                                        <input type="url" class="form-control @error('google_map') is-invalid @enderror"
                                            name="google_map" value="{{ old('google_map', $blog->google_map) }}" required>
                                        @error('google_map')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="main_img">Main Image <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control @error('main_img') is-invalid @enderror"
                                            name="main_img" id="main_img" accept="image/*">
                                        @if ($blog->main_img)
                                            <img src="{{ asset('public/images/blogs/' . $blog->main_img) }}" alt="Post Main Image"
                                                class="mt-2" style="width: 150px;">
                                        @endif
                                        <div class="mt-3">
                                            <img id="imagePreview" src="#" alt="Image Preview"
                                                style="display: none; max-height: 200px;">
                                        </div>
                                        @error('main_img')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="mb-3">
                                        <label for="description">Description <span class="text-danger">*</span></label>
                                        <textarea name="description" id="summernote" class="form-control @error('description') is-invalid @enderror"
                                            rows="5" required>{{ old('description', $blog->description) }}</textarea>
                                        @error('description')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="category_id">Category <span class="text-danger">*</span></label>
                                        <select name="category_id"
                                            class="form-control @error('category_id') is-invalid @enderror" required>
                                            <option value="">Select a category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ $blog->category_id == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="sub_category_id">Subcategory <span
                                                class="text-danger">*</span></label>
                                        <select name="sub_category_id"
                                            class="form-control @error('sub_category_id') is-invalid @enderror" required>
                                            <option value="">Select a subcategory</option>
                                            @foreach ($subcategories as $subcategory)
                                                <option value="{{ $subcategory->id }}"
                                                    {{ $blog->sub_category_id == $subcategory->id ? 'selected' : '' }}>
                                                    {{ $subcategory->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('sub_category_id')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <!-- Upazila -->
                                    <div class="mb-3">
                                        <label for="upazila_id">Upazila <span class="text-danger">*</span></label>
                                        <select required name="upazila_id" id="upazila_id"
                                            class="form-control select2 @error('upazila_id') is-invalid @enderror">
                                            <option value="">Select an upazila</option>
                                            @foreach ($upazilas as $upazila)
                                                <option value="{{ $upazila->id }}"
                                                    {{ $blog->upazila_id == $upazila->id ? 'selected' : '' }}>
                                                    {{ $upazila->bn_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('upazila_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!-- Union -->
                                    <div class="mb-3">
                                        <label for="union_id">Union <span class="text-danger">*</span></label>
                                        <select required name="union_id" id="union_id"
                                            class="form-control select2 @error('union_id') is-invalid @enderror">
                                            <option value="">Select a union</option>
                                            @foreach ($unions as $union)
                                                <option value="{{ $union->id }}"
                                                    {{ $blog->union_id == $union->id ? 'selected' : '' }}>
                                                    {{ $union->bn_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('union_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="gallry_img">Gallery Images</label>
                                        <input type="file" name="gallry_img[]"
                                            class="form-control @error('gallry_img') is-invalid @enderror" multiple>
                                        @if ($blog->gallry_img)
                                            <div class="mt-2">
                                                @foreach (json_decode($blog->gallry_img, true) as $image)
                                                    <img src="{{ asset('images/blogs/gallery/' . $image) }}"
                                                        alt="Gallery Image" style="width: 100px; margin-right: 5px;">
                                                @endforeach
                                            </div>
                                        @endif
                                        @error('gallry_img')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

<!-- Post Gallery Image -->
                                                <div class="form-group mb-4 col-md-6">
                                                    <label for="gallry_img">Gallery Images</label>
                                                    <input type="file" name="gallry_img[]" accept="image/*"
                                                        class="form-control @error('gallry_img') is-invalid @enderror"
                                                        multiple>
                                                    @if ($blog->gallry_img)
                                                        <div class="mt-2">
                                                            @foreach (json_decode($blog->gallry_img, true) as $image)
                                                                <img src="{{ asset('public/images/blogs/gallery/' . $image) }}"
                                                                    alt="Image"
                                                                    style="width: 100px; margin-right: 5px;">
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                    @error('gallry_img')
                                                        <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                
                                                
                                    <div class="mb-3">
                                        <label for="status">Status <span class="text-danger">*</span></label>
                                        <select name="status" class="form-control @error('status') is-invalid @enderror"
                                            required>
                                            <option value="1" {{ $blog->status == 1 ? 'selected' : '' }}>Active
                                            </option>
                                            <option value="0" {{ $blog->status == 0 ? 'selected' : '' }}>Inactive
                                            </option>
                                        </select>
                                        @error('status')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- SEO Fields -->
                                    <h5>SEO Fields</h5>

                                    <div class="mb-3">
                                        <label for="meta_title">Meta Title</label>
                                        <input type="text"
                                            class="form-control @error('meta_title') is-invalid @enderror"
                                            name="meta_title" value="{{ old('meta_title', $blog->meta_title) }}">
                                        @error('meta_title')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="meta_description">Meta Description</label>
                                        <textarea name="meta_description" class="form-control @error('meta_description') is-invalid @enderror"
                                            rows="3">{{ old('meta_description', $blog->meta_description) }}</textarea>
                                        @error('meta_description')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="meta_keywords">Meta Keywords</label>
                                        <input type="text"
                                            class="form-control @error('meta_keywords') is-invalid @enderror"
                                            name="meta_keywords"
                                            value="{{ old('meta_keywords', $blog->meta_keywords) }}">
                                        @error('meta_keywords')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary">Update Post</button>
                                    </div>
                                </form>


                            </div> --}}
                            <div class="card card-primary">
                                <div class="card-header d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h3 class="card-title">Edit Post</h3>
                                    </div>
                                    <div>
                                        <a href="{{ route('tools.index') }}" class="btn btn-dark btn-sm">Back</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('tools.update', $blog->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT') <!-- Include method for PUT -->
                                        <div class="card-body">
                                            <div class="row">

                                                <!-- Post Title -->
                                                <div class="form-group mb-4 col-md-6">
                                                    <label for="title">Post Title <span
                                                            class="text-danger">*</span></label>
                                                    <input required type="text"
                                                        class="form-control @error('title') is-invalid @enderror"
                                                        name="title" placeholder="Enter Post title"
                                                        value="{{ old('title', $blog->title) }}">
                                                    @error('title')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <!-- Post Slug -->
                                                <div class="form-group mb-4 col-md-6">
                                                    <label for="slug">Post Slug <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text"
                                                        class="form-control @error('slug') is-invalid @enderror"
                                                        name="slug" value="{{ old('slug', $blog->slug) }}" required>
                                                    @error('slug')
                                                        <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <!-- Customer -->
                                                <div class="form-group mb-4 col-md-6">
                                                    <label for="customer_id">Customer <span
                                                            class="text-danger">*</span></label>
                                                    <select required name="customer_id" id="customer_id"
                                                        class="form-control select2 @error('customer_id') is-invalid @enderror">
                                                        <option value="">Select a customer</option>
                                                        @foreach ($customers as $customer)
                                                            <option value="{{ $customer->id }}"
                                                                {{ old('customer_id', $blog->customer_id) == $customer->id ? 'selected' : '' }}>
                                                                {{ $customer->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('customer_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <!-- Phone -->
                                                <div class="form-group mb-4 col-md-6">
                                                    <label for="phone">Phone <span class="text-danger">*</span></label>
                                                    <input type="text" name="phone"
                                                        class="form-control @error('phone') is-invalid @enderror"
                                                        placeholder="Enter phone number"
                                                        value="{{ old('phone', $blog->phone) }}">
                                                    @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <!-- Email -->
                                                <div class="form-group mb-4 col-md-6">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        placeholder="Enter email address"
                                                        value="{{ old('email', $blog->email) }}">
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <!-- Address -->
                                                <div class="form-group mb-4 col-md-6">
                                                    <label for="address">Address</label>
                                                    <input type="text" name="address"
                                                        class="form-control @error('address') is-invalid @enderror"
                                                        placeholder="Enter address"
                                                        value="{{ old('address', $blog->address) }}">
                                                    @error('address')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <!-- Facebook Link -->
                                                <div class="form-group mb-4 col-md-6">
                                                    <label for="facebook_link">Facebook Link</label>
                                                    <input type="url" name="facebook_link"
                                                        class="form-control @error('facebook_link') is-invalid @enderror"
                                                        placeholder="Enter Facebook link"
                                                        value="{{ old('facebook_link', $blog->facebook_link) }}">
                                                    @error('facebook_link')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <!-- Google Map -->
                                                <div class="form-group mb-4 col-md-6">
                                                    <label for="google_map">Google Map</label>
                                                    <input type="url" name="google_map"
                                                        class="form-control @error('google_map') is-invalid @enderror"
                                                        placeholder="Enter Google Map link"
                                                        value="{{ old('google_map', $blog->google_map) }}">
                                                    @error('google_map')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <!-- Post Main Image -->
                                                <div class="form-group mb-4 col-md-6">
                                                    <label for="main_img">Main Image <span
                                                            class="text-danger">*</span></label>
                                                    <input id="main_img" type="file" name="main_img"
                                                        accept="image/*"
                                                        class="form-control @error('main_img') is-invalid @enderror">
                                                    @if ($blog->main_img)
                                                        <img src="{{ asset('public/images/blogs/' . $blog->main_img) }}"
                                                            alt="Post Main Image" class="mt-2" style="width: 150px;">
                                                    @endif
                                                    @error('main_img')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <div class="mt-3">
                                                        <img id="imagePreview" src="#" alt="Image Preview"
                                                            style="display: none; max-height: 200px;">
                                                    </div>
                                                </div>

                                                <!-- Category -->
                                                <div class="form-group mb-4 col-md-6">
                                                    <label for="category_id">Category <span
                                                            class="text-danger">*</span></label>
                                                    <select required name="category_id" id="category_id"
                                                        class="form-control select2 @error('category_id') is-invalid @enderror">
                                                        <option value="">Select a category</option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}"
                                                                {{ old('category_id', $blog->category_id) == $category->id ? 'selected' : '' }}>
                                                                {{ $category->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('category_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <!-- Subcategory -->
                                                <div class="form-group mb-4 col-md-6">
                                                    <label for="sub_category_id">Subcategory</label>
                                                    <select name="sub_category_id" id="sub_category_id"
                                                        class="form-control select2 @error('sub_category_id') is-invalid @enderror">
                                                        <option value="">Select a subcategory</option>
                                                        @foreach ($subcategories as $subcategory)
                                                            <option value="{{ $subcategory->id }}"
                                                                {{ old('sub_category_id', $blog->sub_category_id) == $subcategory->id ? 'selected' : '' }}>
                                                                {{ $subcategory->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('sub_category_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <!-- Upazila -->
                                                <div class="form-group mb-4 col-md-6">
                                                    <label for="upazila_id">Upazila</label>
                                                    <select name="upazila_id" id="upazila_id"
                                                        class="form-control select2 @error('upazila_id') is-invalid @enderror">
                                                        <option value="">Select an upazila</option>
                                                        @foreach ($upazilas as $upazila)
                                                            <option value="{{ $upazila->id }}"
                                                                {{ old('upazila_id', $blog->upazila_id) == $upazila->id ? 'selected' : '' }}>
                                                                {{ $upazila->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('upazila_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <!-- Union -->
                                                <div class="form-group mb-4 col-md-6">
                                                    <label for="union_id">Union</label>
                                                    <select name="union_id" id="union_id"
                                                        class="form-control select2 @error('union_id') is-invalid @enderror">
                                                        <option value="">Select a union</option>
                                                        @foreach ($unions as $union)
                                                            <option value="{{ $union->id }}"
                                                                {{ old('union_id', $blog->union_id) == $union->id ? 'selected' : '' }}>
                                                                {{ $union->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('union_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <!-- Status -->
                                                <div class="form-group mb-4 col-md-6">
                                                    <label for="status">Status <span
                                                            class="text-danger">*</span></label>
                                                    <select name="status"
                                                        class="form-control @error('status') is-invalid @enderror"
                                                        required>
                                                        <option value="1" {{ $blog->status == 1 ? 'selected' : '' }}>
                                                            Active
                                                        </option>
                                                        <option value="0" {{ $blog->status == 0 ? 'selected' : '' }}>
                                                            Inactive
                                                        </option>
                                                    </select>
                                                    @error('status')
                                                        <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <!-- Description -->
                                                <div class="form-group mb-4 col-md-12">
                                                    <label for="description">Description</label>
                                                    <textarea name="description" id="summernote" rows="6"
                                                        class="form-control ckeditor @error('description') is-invalid @enderror" placeholder="Enter post description">{{ old('description', $blog->description) }}</textarea>
                                                    @error('description')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                             <!-- SEO Title -->
                                                <div class="form-group mb-4 col-md-6">
                                                    <label for="meta_title">SEO Title</label>
                                                    <input type="text" name="meta_title" id="meta_title"
                                                        class="form-control @error('meta_title') is-invalid @enderror"
                                                        placeholder="Enter SEO title"
                                                        value="{{ old('meta_title', $blog->meta_title) }}">
                                                    @error('meta_title')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <!-- SEO Keywords -->
                                                <div class="form-group mb-4 col-md-6">
                                                    <label for="meta_keywords">SEO Keywords</label>
                                                    <input type="text" name="meta_keywords" id="meta_keywords"
                                                        class="form-control @error('meta_keywords') is-invalid @enderror"
                                                        placeholder="Enter SEO keywords"
                                                        value="{{ old('meta_keywords', $blog->meta_keywords) }}">
                                                    @error('meta_keywords')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <!-- SEO Description -->
                                                <div class="form-group mb-4 col-md-12">
                                                    <label for="meta_description">SEO Description</label>
                                                    <textarea name="meta_description" id="meta_description" rows="4"
                                                        class="form-control @error('meta_description') is-invalid @enderror" placeholder="Enter SEO description">{{ old('meta_description', $blog->meta_description) }}</textarea>
                                                    @error('meta_description')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>


                                                <div class="form-group mb-4 ">
                                                    <button type="submit" class="btn btn-primary">Update Post</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('js')
    <script src="{{ asset('backend') }}/plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        });
        $(document).ready(function() {
            $('#main_img').on('change', function(event) {
                const imageInput = event.target;
                const imagePreview = $('#imagePreview');

                if (imageInput.files && imageInput.files[0]) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        imagePreview.attr('src', e.target.result).show();
                    };

                    reader.readAsDataURL(imageInput.files[0]);
                } else {
                    imagePreview.attr('src', '#').hide();
                }
            });
        });
    </script>
@endpush
