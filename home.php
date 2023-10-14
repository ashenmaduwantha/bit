<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>MotorMart</title>
        
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
       
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">MotorMart.com</a>
    <img src="image/logo1.jpg" alt="Avatar Logo" style="width:50px;" class="rounded-pill">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="cars.php" role="button" data-bs-toggle="dropdown">Cars</a>
          <ul class="dropdown-menu"> 
            <li><a class="dropdown-item" href="bmw.php">BMW</a></li>
            <li><a class="dropdown-item" href="Alfa Romeo.php">Alfa Romeo</a></li>
            <li><a class="dropdown-item" href="#">Benz</a></li>
            <li><a class="dropdown-item" href="#">Ferrari</a></li>
            <li><a class="dropdown-item" href="#">Honda</a></li>
            <li><a class="dropdown-item" href="#">Jaguar</a></li>
          </ul>
        </li>
        <li class="nav-item">
        <a class="nav-link dropdown-toggle" href="bikes.php" role="button" data-bs-toggle="dropdown">Bikes</a>
        <ul class="dropdown-menu"> 
            <li><a class="dropdown-item" href="#">Aprilia</a></li>
            <li><a class="dropdown-item" href="#">BMW</a></li>
            <li><a class="dropdown-item" href="#">Ducati</a></li>
            <li><a class="dropdown-item" href="#">Hero</a></li>
            <li><a class="dropdown-item" href="#">Honda</a></li>
            <li><a class="dropdown-item" href="#">KTM</a></li>
          </ul>
        </li>
          
        
      </ul>
      <form class="d-flex justify-content-end" role="search">
      <input class="form-control me-2 "  type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light" type="submit">Search</button>
    </form>
    <div class="position-relative">
        <a href="https://www.facebook.com/" class="mx-2"><span class="bi-facebook bg-light"></span></a>
        <a href="https://twitter.com/" class="mx-2"><span class="bi-twitter bg-light"></span></a>
        <a href="https://www.instagram.com/" class="mx-2"><span class="bi-instagram bg-light"></span></a></div>
    </div>
  </div>
</div>
</nav>
<!--slides photos-->

  <div>
  <!-- Left and right controls/icons -->
  <div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/cars/bmw x5.jpg" style="width:1400px; height: 700px;" class="d-block"  >
     
    </div>
    <div class="carousel-item">
      <img src="image/cars/OIP.jpeg" style="width:1400px; height: 700px;" class="d-block" >
    </div>
    <div class="carousel-item">
      <img src="image/cars/bugatti.jpg" style="width:1400px; height: 700px;" alt="New York" class="d-block" >
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
</div>

</div>
    <section id="posts" class="posts pt-3">
      <div class="container" data-aos="fade-up">
        <div class="section-header d-flex justify-content-between align-items-center mb-5">
          <h2>Top Rated Cars of 2023 </h2>
          <div><a href="bestcars.html" class="more">See All</a></div>
          </div>
          <div class="row g-5">
          <div class="col-lg-4">
            <div class="post-entry-1 lg">
              <img src="image/cars/BMW i4.jpeg"  style="width:500px; height: 200px;" alt="" class="img-fluid">
              <h3>BMW i4</h3>
              <a href="#" class="btn btn-info">View more details</a>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="post-entry-1 lg">
                <img src="image/cars/Cadillac CT4-V Blackwing.jpeg" style="width:500px; height: 200px;"   alt="" class="img-fluid">
                 <h3>Cadillac CT4-V Blackwing</h3>
                 <a href="#" class="btn btn-info">View more details</a>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="post-entry-1 lg">
                  <img src="image/cars/Chevrolet Corvette.jpeg" style="width:500px; height: 200px;" alt="" class="img-fluid">
                  
                  <h3>Chevrolet Corvette</h3>
                  <a href="#" class="btn btn-info">View more details</a>
                  </div>
                </div>
          </div>
            </div>
 </div>
</div>
<section class=" pt-4">
      <div class="container" data-aos="fade-up">
        <div class="section-header  d-flex justify-content-between align-items-center mb-5">
          <h2>Top Rated Bikes of 2023 </h2>
          <div><a href="bestbikes.php" class="more">See All </a></div>
          </div>
          <div class="row g-5">
          <div class="col-lg-4">
            <div class="post-entry-1 lg">
              <img src="image/bikes/Aprilia RS660 Extrema.webp"  style="width:500px; height: 200px;" alt="" class="img-fluid">
              <h3>Aprilia RS660 Extrema</h3>
              <a href="#" class="btn btn-info">View more details</a>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="post-entry-1 lg">
                <img src="image/bikes/Suzuki GSX-8S.webp" style="width:500px; height: 200px;"   alt="" class="img-fluid">
                 <h3>Suzuki GSX-8S</h3>
                 <a href="#" class="btn btn-info">View more details</a>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="post-entry-1 lg">
                  <img src="image/bikes/Ducati Multistrada V4.webp" style="width:500px; height: 200px;" alt="" class="img-fluid">
                  
                  <h3>Ducati Multistrada V4</h3>
                  <a href="#" class="btn btn-info">View more details</a>
                  </div>
                </div>
          </div>
            </div>

       
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script> 
    </body>
</html>
