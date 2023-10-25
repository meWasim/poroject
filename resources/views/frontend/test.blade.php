<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/test.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
</head>
<body>
  <header>
    <a href="#" class="brand">Dance CLUB</a>
    <div class="navigation">
        <div class="navigation-item">
            <a href="">About Me</a>
            <a href="">Work</a>
            <a href="">Blog</a>
            <a href="">Contact</a>
        </div>
    </div>
    <div class="media-icon">
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-twitter-x"></i></a>
        <a href="#"><i class="bi bi-linkedin"></i></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
    </div>
  </header>  
  <section class="home">
  <div class="slider">
      
      <div class="slide"><img src="{{asset('assets/img/main.jpg')}}" alt="Image 2"></div>
      <div class="slide"><img src="{{asset('assets/img/home.jpg')}}" alt="Image 3"></div>
      <div class="slide"><img src="{{asset('assets/img/slide1.jpg')}}" alt="Image 3"></div>
      <div class="slide"><img src="{{asset('assets/img/slide2.jpg')}}" alt="Image 3"></div>
      <div class="slide"><img src="{{asset('assets/img/slide3.jpg')}}" alt="Image 3"></div>
    </div>
    <!-- <img src="{{asset('assets/img/home.jpg')}}" alt="">
    <img src="{{asset('assets/img/main.jpg')}}" alt="Image 2"> -->
    <div class="content">
        <h1>wonder <br><span>Island</span></h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas expedita est ipsam? Dolorem ipsa reprehenderit ut qui dolor quas quibusdam, vel, aperiam laudantium ratione, esse quae a repudiandae dolorum pariatur.</p>
        <a href="">Read More</a>
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

</body> 
</html>