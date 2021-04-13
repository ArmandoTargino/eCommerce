<?php
  $isLog;
  if(Session::has("user")){
    $isLog="logout";
  }else{
    $isLog="login";
  }

  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Just Travel</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <link rel="stylesheet" href="{{asset('css/styles.css')}}">
  <script src="https://kit.fontawesome.com/a7813bdb0d.js" crossorigin="anonymous"></script>

</head>

<body>

  <!-- *************** NAVBAR -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top headerbarra">
    <a class="navbar-brand" href="/"><i class="fas fa-globe-europe fa-2x navIcon"></i> Just Travel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav justify-content-between w-100">
        <li class="nav-item dropdown">
          <a class="nav-link hvr-grow dropdown-toggle" href="#whyTravel" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">About Us</a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="/about#aboutUs">About Us</a></li>
            <li><a class="dropdown-item" href="/about#whyTravel">Why Travel?</a></li>
            <li><a class="dropdown-item" href="/about#charity">Charity</a></li>
            <li><a class="dropdown-item" href="/about#sustainability">Sustainability</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link hvr-grow dropdown-toggle" href="#whyTravel" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Our Plans</a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="/plans">Our plans pricing</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link hvr-grow dropdown-toggle" href="#whyTravel" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Contact</a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="/contact">Can we help?</a></li>
            <li><a class="dropdown-item" href="#contact">Follow us in Social Media</a></li>
            <li><a class="dropdown-item" href="/contact">Contact us</a></li>
          </ul>
        </li>
          <li class="nav-item">
            <a class="nav-link hvr-grow" href="/<?php echo $isLog; ?>"><?php echo $isLog; ?></a><a>/ </a><a class="hvr-grow" href="/register">Register</a>
          </li>
        <li class="nav-item">
          <a class="nav-link hvr-grow" href="/checkout">Cart <i class="fas fa-shopping-cart"></i></a>
        </li>
      </ul>
    </div>
  </nav>
