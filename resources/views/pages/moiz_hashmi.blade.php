@extends('layouts.app')

@section('content')
    <div class="container">
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information Banner</title>
    <!-- Start  -- css link -->
    <link rel="stylesheet" href="/LaravelDocker/resources/css/style.css">
    <!-- End -->
</head>

<body>

    <!-- Start  -- of banner -->

    <div class="banner">
        <div class="profile-img">
            <img src="WhatsApp Image 2024-09-11 at 12.34.58_02b8fdfe.jpg" alt="Profile Picture">
        </div>

        <!-- End of banner -->

        <!-- Start of main Information -->

        <div class="info">
            <h1>Moiz Ali Hashmi</h1>
            <p>Web Developer | Designer | Content Creator</p>
            <p><strong>Email:</strong> alimoiz605@gmail.com</p>
            <p><strong>Phone:</strong> 0335-5737582</p>

            <!-- END of main Information -->

            <!-- Start -- Social media links -->

            <div class="social-links">
                <a href="https://hub.docker.com/u/moiz003?_gl=1*c3ymyy*_gcl_au*MTkxODk2MzU5MS4xNzI3Njk1MzQy*_ga*MTI3MDk5MDE2NS4xNzI3Njk1MzQz*_ga_XJWPQMJYHQ*MTcyNzg4MDAwMy4zLjEuMTcyNzg4MDAxNC40OS4wLjA."
                    target="_blank">Docker</a>
                <a href="https://linkedin.com/in/yourprofile" target="_blank">LinkedIn</a>
                <a href="https://github.com/Moiz003" target="_blank">GitHub</a>
            </div>
        </div>
    </div>
    <!-- End of main Information -->
</body>

</html>
@endsection
