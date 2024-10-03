@extends('layouts.app')

@section('content')
    <div class="container">
        <!--  BEGIN: Abdul Subhan - 131  -->
        <main class="container-fluid">

        <!-- Begin - Introduction Card Section -->
        <section class="row intro-card-container">

            <!-- Empty column for spacing on small screens -->
            <div class="col-0 col-sm-1 col-lg-3"></div>

            <!-- Begin - Introduction Card -->
            <div class="col-12 col-sm-10 col-lg-6 intro-card p-3 m-1 m-md-5 rounded">

                <!-- Heading -->
                <div class="text-center">
                    <h2 class="main-heading">MY INTRODUCTION</h2>
                </div>

                <!-- Personal Information -->
                <div>
                    <span class="intro-heading fs-5 fw-semibold"> Name :</span>
                    <span>Abdul Subhan</span>
                </div>
                <div>
                    <span class="intro-heading fs-5 fw-semibold"> Role :</span>
                    <span>Frontend (Intern)</span>
                </div>
                <div>
                    <span class="intro-heading fs-5 fw-semibold"> Position :</span>
                    <span>Team Coordinator</span>
                </div>
                <div>
                    <span class="intro-heading fs-5 fw-semibold"> Email :</span>
                    <span class="intro-link">subhanabbasipak@gmail.com</span>
                </div>
                <div>
                    <span class="intro-heading fs-5 fw-semibold"> Phone Number :</span>
                    <span>03125635728</span>
                </div>

                <!-- Favorite Image Section -->
                <div>
                    <div class="intro-heading fs-5 fw-semibold mb-3"> My Fav Image :</div>

                    <!-- Begin - Image and Upload Button Row -->
                    <div class="row">

                        <!-- Empty column for spacing on medium screens -->
                        <div class="col-0 col-md-3"></div>

                        <!-- Begin - Image and Upload Container -->
                        <div class="col-md-6">

                            <!-- Display Favorite Image -->
                            <img class="my-image" src="{{asset('assets/imgs/subhann.jpg')}}" alt="My fav photo">

                            <!-- Center Wrapper for Upload Button -->
                            <div class="center-wrapper">

                                <!-- Upload Container -->
                                <div class="upload-container">
                                    <button class="upload-btn">Add your fav one ! 😊</button>
                                    <input type="file" accept="image/*">
                                </div>
                            </div>
                        </div>
                        <!-- End - Image and Upload Container -->

                        <!-- Empty column for spacing on medium screens -->
                        <div class="col-0 col-md-3"></div>

                    </div>
                    <!-- End - Image and Upload Button Row -->
                </div>
                <!-- End - Favorite Image Section -->

            </div>
            <!-- End - Introduction Card -->

            <!-- Empty column for spacing on small screens -->
            <div class="col-0 col-sm-1 col-lg-3"></div>
        </section>
        <!-- End - Introduction Card Section -->

        </main>
        <!--  END: Abdul Subhan - 131  -->
    </div>

@endsection
