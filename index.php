<?php
session_start(); 
if(!$_SESSION['loggedin']){
    header("location:contact.php");
}
?>

<html>
  <?php include 'head.php';?>
  <body>
  <?php include 'modal.php';?>
  <?php include 'navbar.php';?>
    <section>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src = "assets/img/ElNido-03.jpg">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Philippines is one of the largest island groups in the world with 7,107 islands.</h1>
                <p>If you are into white sandy beaches and turquoise crystal-clear waters, you're in the right country. Philippines is made up of 7,107 islands. It's not hard to find your dream beach or a pristine island over there and having it all for yourself.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src = "assets/img/pilipina.jpg"> <div class="filter">TEXT</div>
            <div class="container">
              <div class="carousel-caption">
                <h1>The hospitality of Filipinos is incomparable to the rest of the world.</h1>
                <p>Filipinos are the most kind and friendly people, extremely welcoming and curious, but also respectful. They always seem happy and smiling, and they love to sing and to dance whenever there is an occasion to celebrate. </p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src = "assets/img/manila.jpg">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>From bustling cities to stunning beaches and mountains, the Philippines has a lot to offer adventurous explorers.</h1>
                <p>Manila, known as the “Pearl of the Orient”, is the nation’s capital city. This bustling historic city is full of things to see and do — including museums, parks, theaters, shopping malls and a plethora of restaurants to choose from.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>



    <?php include 'footer.php';?>
    <?php include 'script.php';?>

  </body>
</html>

<!-- El Nido:  href="https://unsplash.com/@cjtagupa?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" -->
<!-- El Nido-01: href="https://unsplash.com/@ehmirbautista?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" -->
<!-- Pilipina: href="https://unsplash.com/@austincmdz?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" -->
<!-- MAnila.jpg: href="https://unsplash.com/@jcgellidon?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" -->
