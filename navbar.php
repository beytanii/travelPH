<nav class="navbar sticky-top navbar-expand-lg navbar00">
  <a href="index.php"><img src="assets/img/logo.png" class="navbar-brand panda-nav" ></a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>


    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle mr-2" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome <?php echo $_SESSION["username"] ?></a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="profile.php">Profile</a>
          <a  class="dropdown-item" href="logout.php" type="submit">Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>