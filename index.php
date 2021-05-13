<?php include("./header.php") ?>

    <script>
      var slideIndex = 0;
      showSlides();

      function showSlides() {
        //test
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

    <div class="flex-container">
      <div class="welcome"><img src="ebtm-square.png" /></div>
      <div>
        <p>
          Welcome to the UCLA Department of Musicology's undergraduate music
          studies group!
        </p>
      </div>
    </div>

    <div class="container"></div>
    <div class="footer">
      <h6>
        MUSE | © 2021 by UCLA Musicology Department. Individual articles are the
        copyright of their authors. | uclamusejournal@gmail.com
      </h6>
      <div class="footer-right">
        <h6>
          <a href="https://www.instagram.com/uclamusicstudies/"
            ><img class="social" src="iglyph.png"
          /></a>
        </h6>
        <h6>
          <a href="https://www.facebook.com/uclamusicstudies/"
            ><img class="social" src="fglyph.png"
          /></a>
        </h6>
        <h6>
          <a
            href="https://open.spotify.com/user/onh9otqhp57vzp7391raxhdpk?si=263c5a46cce74f95"
            ><img class="social" src="sglyph.png"
          /></a>
        </h6>
      </div>
    </div>
  </body>
</html>
