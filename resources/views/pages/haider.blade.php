@extends('layouts.app')

@section('content')
  <!-- start: Name: Haider Ali - emp id 357 -->
<div class="haider-main">
     
    <div class="container">
        
    <div class="haider-container">
        <!-- Header with name and profession -->
        <header>
            <h1>Haider Ali</h1>
            <p class="profession">Web Developer</p>
        </header>
        <!-- header ended here -->

        <!-- Profile Image Section -->
        <div class="profile-image">
            <img src="{{ asset('images/dashboard.jpeg') }}" alt="Sample Image">

        </div>
        <!-- Profile Image Section ended -->
       
        <!-- Personal Details -->
        <div class="details">
            <p><strong>Phone:</strong> <a href="tel:+1234567890">+92 323 0950901</a></p>
            <p><strong>Email:</strong> <a href="mailto:john.doe@example.com">arao72679@gmail.com</a></p>
            <p><strong>Location:</strong> Islamabad , Pakistan</p>
            <p><strong>Github:</strong> <a href="https://www.johndoe.com" target="_blank">haiderali428</a></p>
        </div>
        <!-- personal detail ended here -->

        <!-- Short Bio -->
        <div class="bio">
            <p>Hello! I'm Haider, a passionate web developer with a focus on creating interactive, user-friendly websites. I enjoy coding and bringing ideas to life in the digital space.</p>
        </div>
        <!-- Short Bio ended here-->
     
        <!-- Optional Call to Action this button use to download resume -->
        <div class="cta">
            <a href="your-resume.pdf" class="btn" target="_blank">Download Resume</a>
        </div>

    </div>
    </div>
    </div>
    <!-- start: Name: Haider Ali - emp id 357 -->
@endsection
