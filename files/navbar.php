<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navigation with Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: black">
  <div class="container" style="max-width:95%">
    <a class="navbar-brand" href="#home"><img src="../images/logo.png" alt="Logo" style="width:80px"></a>
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
            <a href="form.php" type="button" class="btn btn-light "><strong>JOIN US</strong></a>
          </li>';
        }
        ?>
      </ul>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
</script>

</nav>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
