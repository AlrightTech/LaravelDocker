@extends('layouts.app')

@section('content')
<div class="container">
        <div classfatima-main>
       <!-- Header Section starts -->
<header>
    <!-- Profile Picture container with class for spacing -->
    <div class="pic leftrightspace">
        <!-- Add alt text for accessibility -->
        <img src="{{ asset('assets/images/img.jpg') }}" alt="Sample Image">
    </div>

    <!-- Navigation Section -->
    <nav>
        <!-- Introduction Section with name and title -->
        <div class="intro leftrightspace">
            <h1>Fatimah Abid</h1>
            <p>Front-End Developer</p>
        </div>

        <!-- Navigation links for About, Projects, and Contact sections -->
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</header>
<!-- Header Section ends -->

<!-- Main content section with additional padding -->
<div class="main leftrightspace">

    <!-- About Me Section -->
    <div id="about">
        <h2>About Me</h2>
        <p>Hi, I'm Fatimah Abid, a front-end development enthusiast currently pursuing an internship to gain practical experience in the field. I’m passionate about building responsive, intuitive web applications using HTML, CSS, and JavaScript, and I'm constantly working to enhance my skills in these areas.</p>
        <p>During my internship, I am excited to learn from industry professionals, contribute to real projects, and apply the knowledge I've gained through my academic studies. My goal is to improve both my coding abilities and my understanding of how to create user-friendly, engaging web experiences.</p>
        <p>I'm particularly interested in learning more about modern web development practices, frameworks like React, and contributing to collaborative projects that make an impact.</p>
    </div>

    <!-- Projects Section -->
    <div id="projects">
        <h2>My Projects</h2>

        <!-- First Project -->
        <div class="project">
            <h3>First Flight</h3>
            <!-- Description of the project -->
            <p>FirstFlight is a web-based application designed to simplify the process of booking and managing flights. It allows users to search for flights, compare prices, and book tickets through a user-friendly interface. The project integrates real-time flight data from multiple airlines, ensuring users have access to the latest flight schedules and pricing. Key features include filtering flights by date, destination, and budget, as well as secure payment options. The application is built using HTML, CSS, JavaScript, and a backend system to manage flight data and bookings, making it ideal for users looking for a seamless travel experience.</p>
        </div>

    </div>
</div>
<!-- Main content section ends -->

<!-- Footer Section -->
<footer class="leftrightspace fatime-footer">
    <h2>Contact Me</h2>
    <!-- Email link with corrected mailto attribute -->
    <p>Email: <a href="mailto:abidf1415@gmail.com">abidf1415@gmail.com</a></p>
    <!-- Social Media Link -->
    <p>Facebook: <a href="https://www.facebook.com/yourprofile" target="_blank">Fatimah Abid</a></p>
</footer>
<!-- Footer Section ends -->

    </div>
    </div>
@endsection
