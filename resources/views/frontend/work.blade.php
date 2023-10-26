@extends('layouts.admin')
@section('title')
{{ __('contact') }}
@endsection

@section('content')

@component('components.nav-bar')
@endcomponent
<div class="work" id="contact">
    <h1 class="heading text-wrap">Check out all the works made in the last years</h1>
    <div class="buttons">
        <button>ALL</button>
        <button>VIDEO</button>
        <button>PHOTOS</button>
    </div>

</div>

@component('components.footer-component')
@endcomponent
<script src="{{asset('assets/js/navbar.js')}}"></script>
@endsection