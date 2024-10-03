@extends('layouts.app')

@section('content')
    <div class="container">
    <section id="about" class="d-flex align-items-center ">
    <div class="container1 ">
        <picture>
         <img src="{{asset('assets/imgs/WhatsApp Image 2024-10-02 at 19.29.47_08125a6b.jpg')}}" alt="Profile Pic" class="Profile_pic">
        </picture>
        <div class="Text_box">
        <h2 class="text-center mb-4">Abdul Ahad Qureshi</h2>
        <h6 class="text-center mb-3">Degree: Bachelors In Artificial Intelligence</h6>
        <h6 class="text-center mb-3">University: National University Of Modern Languages</h6>

         <p class="text-center mb-3">I am a passionate web developer with expertise in front-end technologies.With a background in HTML, CSS, JavaScript, and React, I build responsive and modern websites.</p>
        <div class="Download_btn">
        <button class="btn btn-success ">Download Resume</button>
    </div>
    </div>
</div>
  </section></div>
@endsection