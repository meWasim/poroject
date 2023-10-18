@extends('layouts.admin')
@section('title')
{{ __('contact') }}
@endsection

@section('content')

<section class="contact">
    @component('components.nav-bar')
    @endcomponent
    <div class="contact-container" style="display: flex;">
        <div class="contact-links" >hii Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quod tenetur et consequuntur neque doloribus dicta ipsam maxime autem itaque, blanditiis modi est, quia ducimus vel praesentium ipsum cum harum. </div>
        <div class="contact-form">hello Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque libero eius soluta reprehenderit tenetur repudiandae molestias recusandae, fugit illo. Iure molestiae velit ipsam est blanditiis quas ex consequatur eius delectus?</div>
    </div>
</section>

@endsection
