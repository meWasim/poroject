@extends('layouts.admin')
@section('title')
{{ __('Dance Club') }}
@endsection

@section('content')

@component('components.nav-bar')
    @endcomponent
<section class="home">
    
    <div class="slider">
      
      <div class="slide"><img src="{{asset('assets/img/main.jpg')}}" alt="Image 2"></div>
      <div class="slide"><img src="{{asset('assets/img/home.jpg')}}" alt="Image 3"></div>
      <div class="slide"><img src="{{asset('assets/img/slide1.jpg')}}" alt="Image 3"></div>
      <div class="slide"><img src="{{asset('assets/img/slide2.jpg')}}" alt="Image 3"></div>
      <div class="slide"><img src="{{asset('assets/img/slide3.jpg')}}" alt="Image 3"></div>
    </div>
</section>
<script>
    $(document).ready(function() {
        var currentSlide = 0;
        var slides = $('.slide');

        // Show the first slide
        $(slides[currentSlide]).show();

        // Function to transition between slides
        function transitionSlide() {
            // Slide up the current slide with a fade effect
            $(slides[currentSlide]).fadeOut(1000, function() {
                currentSlide = (currentSlide + 1) % slides.length;
                // Slide down the next slide with a fade effect
                $(slides[currentSlide]).fadeIn(1000);
            });
        }

        // Auto slide every 3 seconds (adjust the time as needed)
        var slideInterval = setInterval(transitionSlide, 4000); // 3000 milliseconds = 3 seconds
    });
</script>

<!-- <script>
    $(document).ready(function() {
        var currentSlide = 0;
        var slides = $('.slide');

        // Function to transition between slides
        function transitionSlide() {
            var nextSlide = (currentSlide + 1) % slides.length;
            var slideWidth = $('.slideshow-container').width();

            // Slide the current slide to the left
            $(slides[currentSlide]).animate({ left: -slideWidth }, 1000, function() {
                $(this).css('left', '0');
            });

            // Slide the next slide in from the right
            $(slides[nextSlide]).css('left', slideWidth).show().animate({ left: '0' }, 1000);

            currentSlide = nextSlide;

            // Check if we've reached the last slide
            if (currentSlide === 0) {
                // Reset the slideshow to the first slide
                $(slides[slides.length - 1]).css('left', slideWidth).hide();
                currentSlide = 0;
            }
        }

        // Auto slide every 3 seconds (adjust the time as needed)
        var slideInterval = setInterval(transitionSlide, 3000); // 3000 milliseconds = 3 seconds
    });
</script> -->



@endsection