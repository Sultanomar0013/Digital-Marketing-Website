

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: black">
  <div class="container" style="max-width:95%">
    <a class="navbar-brand" href="#home"><img class="anima_logo" src="../images/logo.png" alt="Logo" style="width:50px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <?php
        // Check if the current page is form.php
        if (basename($_SERVER['PHP_SELF']) === 'form.php') {
            // Don't display the "Join Us" button
            echo '  <li class="nav-item">
            <a href="all.php" type="button" class="btn btn-light "><strong>HOME</strong></a>
          </li>';
        } else {
            // Display the "Join Us" button
            echo '  
            <li class="nav-item">
          <a class="nav-link" href="#about" style="color:white;"><strong>About</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services" style="color:white;"><strong>Services</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#process" style="color:white;"><strong>Our Process</strong></a>
        </li>
            <li class="nav-item">
            <a href="form1.php" type="button" class="btn btn-light "><strong>JOIN US</strong></a>
          </li>';
        }
        ?>
      </ul>
    </div>
  </div>

  
<script>
$(document).ready(function(){
    // Smooth scrolling for navigation links
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 100);
        }
    });
});




$(document).ready(function() {
  var lastScrollTop = 0;
  var navbarHeight = $('nav').outerHeight();
  var delta = 5;

  $(window).scroll(function(event) {
    var st = $(this).scrollTop();

    // If the scroll position hasn't changed significantly, avoid unnecessary DOM manipulations
    if (Math.abs(lastScrollTop - st) <= delta) return; // Adjust the threshold as needed

    // Reset the `navbar-show` class only when scrolling up and after passing the navbar height
    if (st < lastScrollTop && st > navbarHeight ) {
      $('nav').removeClass('navbar-hide').addClass('navbar-show');
    } else if(st > lastScrollTop ) {
      // Scrolling down or at the top (including initial load)
      $('nav').addClass('navbar-hide').removeClass('navbar-show'); // Hide on scroll down or initial load
    }
    
    lastScrollTop = st;

  }
);
});








</script>

</nav>


<style>
  .navbar-hide {
    transform: translateY(-100%);
    transition: transform 0.5s ease-in-out;
  }

  .navbar-show {
    transform: translateY(0%);
    transition: transform 0.5s ease-in-out;
  }
</style>