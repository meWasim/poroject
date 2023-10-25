@extends('layouts.admin')
@section('title')
{{ __('contact') }}
@endsection

@section('content')

@component('components.nav-bar')
@endcomponent
<div class="contact">

    <div class="contact-container d-flex ">
        <div class="contact-links d-flex flex-column">
            <h1> Any Questions? Feel free to contact</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora quo voluptatum atque optio vero ex quam dignissimos modi cum perferendis, ut repellendus molestias esse assumenda natus libero officia? Eveniet, reiciendis?</p>
            <h2>test@gmail.com</h2>
        </div>
        <div class="contact-form">
            @if ($message=Session::get('message'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
            @endif
            <h1>Contact Us</h1>

            <form action="{{ route('sendMessage') }}" method="POST"> <!-- Use route() function -->
                @csrf
                <div class="form-group">
                    @error('name')
                    <br><span class="alert-danger">{{$message}}</span>
                    @enderror
                    <input class="form-control" type="text" name="name" placeholder="Name *">

                </div>
                <div class="form-group">
                    @error('email')
                    <br><span class="alert-danger">{{$message}}</span>
                    @enderror
                    <input class="form-control" type="email" name="email" placeholder="Email *">
                </div>
                <div class="form-group">
                    @error('phone')
                    <br><span class="alert-danger">{{$message}}</span>
                    @enderror
                    <input class="form-control" type="tel" name="phone" placeholder="Phone No. *">
                </div>
                <div class="form-group">
                    @error('message')
                    <br><span class="alert-danger">{{$message}}</span>
                    @enderror
                    <textarea class="form-control" id="message" name="message" placeholder="Message *" rows="7"></textarea>
                </div>
                <div class="form-group send-btn">
                    <button type="submit" class=" btn btn-success ">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.553815193169!2d88.40506187565488!3d22.558380979501862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02742e9e4acc3b%3A0x924a4d8acf33a574!2sMatainja%20Technologies!5e0!3m2!1sen!2sin!4v1698229076551!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
@component('components.footer-component')
@endcomponent
@endsection