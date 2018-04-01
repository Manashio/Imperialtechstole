<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php require('header/component.php'); ?>
    <title>Home</title>
  </head>
  <body>
    <?php require('navbar/navbar.php'); ?>

<section id="carouselSection" class="nopad">

<div class="container-fluid nopad">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">



      <div class="item active">
        <img src="assets/img/slider/1.gif" alt="CCTV" style="width:100%;">
        <div class="sld caption1">
          <h1>CCTV SERVILANCE</h1>
          <h3>TRACK ALL MOMENTS OF YOUR VALUABLES</h3>
        </div>
      </div>

              <div class="item">
                <img src="assets/img/slider/2.gif" alt="Printer" style="width:100%;">
                <div class="sld caption2">
                  <h1>PRINTERS</h1>
                  <h3>PRINT COLOUR OF YOUR LIFE ON A PAPER</h3>
                </div>
              </div>
              <div class="item">
                <img src="assets/img/slider/3.gif" alt="Projector" style="width:100%;">
                <div class="sld caption3">
                  <h1>PROJECTOR</h1>
                  <h3>Fill Display Of Your Wall</h3>
                </div>
              </div>

      <div class="item">
        <img src="assets/img/slider/4.gif" alt="Wall TV" style="width:100%;">
        <div class="sld caption4">
          <h1>Wall TV</h1>
          <h3>Digital Flat Display on your Wall!</h3>
        </div>
      </div>


    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</section>


<section>
<h1 class="text-center">Content Inside Here</h1><br>
<p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</section>
<section id="leftSection" class="nopad nomarg">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 color">
        <h1>FEATURES</h1>

      </div>
      <div class="col-md-8 nocolor">
        <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

      </div>
    </div>
  </div>
</section>

<section>
  <h1 class="text-center">SOMETHING IN BETWEEN</h1>
  <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</section>

<section id="leftSection" class="nopad nomarg">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 nocolor">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

      </div>
      <div class="col-md-4 color">
        <h1>REWORKS</h1>

      </div>

    </div>
  </div>
</section>

<?php require('footer/footer.php'); ?>
  </body>
  <?php require('footer/component.php'); ?>
</html>
