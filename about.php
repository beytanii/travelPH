<?php
session_start(); 
if(!$_SESSION['loggedin']){
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'head.php';?>
<?php include 'modal.php';?>
<body>
    <?php include 'navbar.php';?>
    <div class="container">
        <h1>Destinantions</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src = "assets/img/guyam-island-siargao.jpg" data-toggle="collapse" href="#collapseExample" role="button"> 
                    <div  class="collapse" id="collapseExample">
                    <div class="card-body">
                        <p class="card-text" data-toggle="tooltip" data-placement="top" title="Tooltip">Guyam Islands, Siargao</p>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src = "assets/img/kayak-lagoon-el-nido.jpg" data-toggle="collapse" href="#collapseExample" role="button"> 
                    <div  class="collapse" id="collapseExample">
                    <div class="card-body">
                        <p class="card-text" data-toggle="tooltip" data-placement="top" title="Tooltip">Kayak Tour, El Nido</p>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src = "assets/img/boracay-island.jpg" data-toggle="collapse" href="#collapseExample" role="button"> 
                    <div  class="collapse" id="collapseExample">
                    <div class="card-body">
                        <p class="card-text" data-toggle="tooltip" data-placement="top" title="Tooltip">Boracay Beach</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
       <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src = "assets/img/siargao-island-siargao.jpg" data-toggle="collapse" href="#collapseExample1" role="button"> 
            <div  class="collapse" id="collapseExample1">
              <div class="card-body">
                <p class="card-text">Siargao Islands, Siargao</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src = "assets/img/island-hopping-tour-el-nido.jpg" data-toggle="collapse" href="#collapseExample1" role="button"> 
            <div  class="collapse" id="collapseExample1">
              <div class="card-body">
                <p class="card-text">Island Hopping Tour, El Nido</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src = "assets/img/boracay-beach-sunset.jpg" data-toggle="collapse" href="#collapseExample1" role="button"> 
            <div  class="collapse" id="collapseExample1">
              <div class="card-body">
                <p class="card-text">Boracay Beach Sunset</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div>
      
      </div>

      <section class="pricing">
        <!-- Siargao -->
        <div class="card-deck mb-3 text-center">
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Siargao Islands</h4>
            </div>
            <div class="card-body">
            <h1 class="card-title pricing-card-title"><s>Php 2,500</s> Php 1,400 each</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li><h3>Package includes:</h3></li>
                <li>Island Hopping</li>
                <li>Island Tour</li>
                <li>Snorkeling</li>
                <li>and more</li>
              </ul>
              <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal">Book Now</button>
            </div>
          </div>
          <!-- El Nido -->
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">El Nido</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title"><s>Php 3,500</s> Php 2,500 each</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li><h3>Package includes:</h3></li>
                <li>Kayaking</li>
                <li>Big Lagoon tour</li>
                <li>Party Boat</li>
                <li>and more</li>
              </ul>
              <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal">Book Now</button>
            </div>
          </div>
          <!-- Boracay -->
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Boracay Beach</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title"><s>Php 5,000</s> Php4,500 each</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
              <li><h3>Package includes:</h3></li>
                <li>Sunset Cruise</li>
                <li>Massage Session</li>
                <li>Island Hopping</li>
                <li>and more</li>
              </ul>
              <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal">Book Now</button>
            </div>
          </div>
        </div>
      </section>
    </div>
    <?php include 'footer.php';?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>


<!-- Siargao -->
<!-- Guyam Island -- href="https://unsplash.com/@aluengo91?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" -->

<!-- El Nido -->
<!-- Kayak -- href="https://unsplash.com/@jules_bss?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge"> -->
<!-- Island Hopping -- href="https://unsplash.com/@charlesdeluvio?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" -->

<!-- Boracay -->
<!-- Boracay Island -- href="https://unsplash.com/@brian_bondoc?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" -->
<!-- Boracay sunset href="https://unsplash.com/@rubymotilla?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge"  -->