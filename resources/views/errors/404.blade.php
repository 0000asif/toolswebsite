@extends('frontend.components.front-master')
@section('front_content')
    <style>
        .error-container {
            text-align: center;
            max-width: 600px;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: auto
        }
        .error-container h1 {
            font-size: 120px;
            font-weight: bold;
            margin: 0;
            color: #e74c3c;
        }
        .error-container h2 {
            font-size: 32px;
            margin: 10px 0;
            color: #555;
        }
        .error-container p {
            font-size: 16px;
            color: #777;
            margin: 15px 0 30px;
        }
        .error-container a {
            display: inline-block;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .error-container a:hover {
            background-color: #0056b3;
        }
    </style>

  <div class="container">
   <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8 my-5">
           <div class="error-container">
        <h1>404</h1>
        <h2>Page Not Found</h2>
        <p>Oops! The page you are looking for does not exist. It might have been removed or is temporarily unavailable.</p>
        <a href="{{ url('/') }}">Go back to Homepage</a>
    </div>
      </div>
      <div class="col-md-2"></div>
   </div>
  </div>
@endsection