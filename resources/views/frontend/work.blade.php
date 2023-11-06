@extends('layouts.admin')
@section('title')
{{ __('Work') }}
@endsection

@section('content')

@component('components.nav-bar')
@endcomponent
<div class="work" id="">
    <h1 class="heading text-wrap">Check out all the works made in the last years</h1>
    <div class="buttons">
        <button id="show-all">ALL</button>
        <button id="show-video">VIDEO</button>
        <button id="show-photos">PHOTOS</button>
    </div>

        <div id="all-content">
            <!-- Content for the "ALL" button -->
            <p>All content goes here.</p>
        </div>

        <div id="video-content" style="display: none;">
            <!-- Content for the "VIDEO" button -->
            <p>Video content goes here.</p>
        </div>

       <div id="photo-content" style="display: none;">
        <!-- Content for the "PHOTOS" button -->
        <div class="work-container">
            <div class="card">
                <img src="{{ asset('assets/img/home.jpg') }}" alt="" srcset="">
                <div class="overlay">
                    <h1 class="text-h1">Lorem ipsum</h1>
                    <p class="text-p">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias dolores ex expedita quaerat a in et.
                    </p>
                    <a class="link-a" href="#"> Read More</a>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('assets/img/main.jpg') }}" alt="" srcset="" >
                <div class="overlay">
                    <h1 class="text-h1">Lorem ipsum</h1>
                    <p class="text-p">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias dolores ex expedita quaerat a in et.
                    </p>
                    <a class="link-a" href="#"> Read More</a>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('assets/img/slide2.jpg') }}" alt="" srcset="">
                <div class="overlay">
                    <h1 class="text-h1">Lorem ipsum</h1>
                    <p class="text-p">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias dolores ex expedita quaerat a in et.
                    </p>
                    <a class="link-a" href="#"> Read More</a>
                </div>
            </div>
        </div>
    </div>

</div>

@component('components.footer-component')
@endcomponent
<script src="{{asset('assets/js/navbar.js')}}"></script>
<script src="{{asset('assets/js/work.js')}}"></script>
@endsection






{{-- <div class="container">
    <div class="card">
        <img src="https://pibig.info/uploads/posts/2021-06/1623123014_3-pibig_info-p-znachenie-vodi-v-prirode-priroda-krasivo-f-3.jpg" alt="Animated Card Hover Effect Html & CSS">
        <div class="overlay">
            <h1 class="text-h1">the mountains</h1>
            <p class="text-p">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias dolores ex expedita quaerat a in et.
            </p>
            <a class="link-a" href="#"> Read More</a>
        </div>
    </div>


</div>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;700;800&display=swap');

* {
	box-sizing: border-box;
	margin: 0;
	padding: 0;
}

ul,
li {
	list-style: none;
}

a {
	text-decoration: none;
}

body {
	font-family: 'Poppins', sans-serif;
	font-weight: 700;
	font-size: 16px;

	display: flex;
	align-items: center;
	justify-content: space-around;
	min-height: 100vh;
}


</style> --}}
