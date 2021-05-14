<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>UCLA Music Studies</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="main.css" />
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <script>
      var slideIndex = 0;
      showSlides();

      function showSlides() {
        //test 2
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
          slideIndex = 1;
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 4000); // Change image every 2 seconds
      }
    </script>
  </head>

  <body>
  <!--
    <div class="navbar" id="myTopnav">
      <div class="navbar-centered">
        <a href="index.html"><h1>UCLA Undergraduate Music Studies</h1></a>
      </div>
      <a href="journal.php"><h2>Journal</h2></a>
      <a href="podcast.php"><h2>Podcast</h2></a>
      <a href="club.php"><h2>Club</h2></a>
      <a href="about.php"><h2>About</h2></a>
        <a href="people.php"><h2>People</h2></a>
        <a href="contact.php"><h2>Contact</h2></a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <div class="navbar-right">

          <i class="fa fa-bars"></i>
        </a>
      </div>
    </div>
      -->
    <nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="index.php">MUSE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="journal.php">Journal <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="podcast.php">Podcast</a>
      <a class="nav-item nav-link" href="club.php">Club</a>
      <a class="nav-item nav-link" href="about.php">About</a>
      <a class="nav-item nav-link" href="people.php">People</a>
      <a class="nav-item nav-link" href="contact.php">About</a>

    </div>
  </div>
</nav>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>