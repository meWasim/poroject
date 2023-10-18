<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')</title>

    @stack('head')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- fontstyle -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hachi+Maru+Pop&family=Poppins:wght@300;400&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <!-- font-family: 'Hachi Maru Pop', cursive;
    font-family: 'Poppins', sans-serif;
    font-family: 'Roboto', sans-serif; -->

    <!-- css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nav.css')}}">
</head>

<body><nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0">
    <div class="container">
      <a class="navbar-brand" href="#!"><span style="color: #5e9693;">DANCE</span><span style="color: #ffafcc;">CLUB</span></a>
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#!">ABOUT ME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">WORK</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">BLOG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">CONTACT</a>
          </li>
        </ul>
      </div>
      <!-- Move icons to the right -->
      <ul class="navbar-nav ms-auto">
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="#!">
            <i class="bi bi-linkedin"></i>
          </a>
        </li>
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="#!">
            <i class="bi bi-twitter"></i>
          </a>
        </li>
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="#!">
            <i class="bi bi-instagram"></i>
          </a>
        </li>
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="#!">
            <i  class="bi bi-facebook"></i>
          </a>
        </li>
      </ul>
    </div>
  </nav>

    @yield('content')
    
</body>

</html>
