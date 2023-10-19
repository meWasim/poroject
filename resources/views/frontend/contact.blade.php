@extends('layouts.admin')
@section('title')
{{ __('contact') }}
@endsection

@section('content')

@component('components.nav-bar')
@endcomponent
<div class="contact">

    <div class="contact-container d-flex">
        <div class="contact-links">
            <h1> Any Questions? Feel free to contact</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora quo voluptatum atque optio vero ex quam dignissimos modi cum perferendis, ut repellendus molestias esse assumenda natus libero officia? Eveniet, reiciendis?</p>
            <h2>test@gmail.com</h2>
        </div>
        <div class="contact-form">
            <h1>Contact Us</h1>
            <!-- @if($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach

            </ul>

            @endif -->
            <form action="{{ route('sendMessage') }}" method="POST"> <!-- Use route() function -->
                @csrf
                <div class="form-group">
                    @error('name')
                    <br><span class="alert-danger">{{$message}}</span>
                    @enderror
                    <input class="form-control" type="text" name="name" placeholder="Name *" >

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
@component('components.footer-component')
@endcomponent
@endsection