@extends('layouts.admin')
@section('title')
{{ __('Dance Club') }}
@endsection

@section('content')

@component('components.nav-bar')
@endcomponent
<section class="home">
    <div class="animation-container">
        <h1 style="font-size: 80px;">adipisicing elit. Officiis, impedit? </h1><br>
    </div>

    <div class="slider">

        <div class="slide"><img src="{{asset('assets/img/main.jpg')}}" alt="Image 2"></div>
        <div class="slide"><img src="{{asset('assets/img/home.jpg')}}" alt="Image 3"></div>
        <div class="slide"><img src="{{asset('assets/img/slide1.jpg')}}" alt="Image 3"></div>
        <div class="slide"><img src="{{asset('assets/img/slide2.jpg')}}" alt="Image 3"></div>
        <div class="slide"><img src="{{asset('assets/img/slide3.jpg')}}" alt="Image 3"></div>
    </div>
</section>
<script src="{{asset('assets/js/slide.js')}}"></script>





@endsection