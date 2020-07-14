<?php
require_once "config.php";
session_start();
$username = $first_name = $last_name = $password = $confirm_password = $phone = $address = $email = "";
$username_err = $password_err = $first_name_err = $last_name_err = $confirm_password_err = $phone_err = $address_err = $general_err= $email_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
     
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{        
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){            
            mysqli_stmt_bind_param($stmt, "s", $param_username);
                        
            $param_username = trim($_POST["username"]);
                        
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            
            mysqli_stmt_close($stmt);
        }
    }

    if(empty(trim($_POST["first_name"]))){
        $first_name_err = "Please enter First Name";     
    } else{
        $first_name = trim($_POST["first_name"]);
    }

    if(empty(trim($_POST["last_name"]))){
        $last_name_err = "Please enter Last Name";     
    } else{
        $last_name = trim($_POST["last_name"]);
    }

    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter Email";     
    } else{
        $email = trim($_POST["email"]);
    }

    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
        
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    if(empty(trim($_POST["phone"]))){
        $phone_err = "Please enter a phone.";
    } else{        
        $sql = "SELECT id FROM users WHERE phone = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){            
            mysqli_stmt_bind_param($stmt, "s", $param_phone);
                        
            $param_phone = trim($_POST["phone"]);
                        
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $phone_err = "This phone is already taken.";
                } else{
                    $phone = trim($_POST["phone"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            
            mysqli_stmt_close($stmt);
        }
    }

    if(empty(trim($_POST["address"]))){
        $address_err = "Please enter an address.";     
    } else{
        $address = trim($_POST["address"]);
    }
        
    if(empty($username_err) && empty($first_name_err) && empty($last_name_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err) && empty($phone_err) && empty($address_err)){
                
        $sql = "INSERT INTO users (username, first_name, last_name, email, password, phone, address) VALUES (?, ?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){            
            mysqli_stmt_bind_param($stmt, "sssssss", $param_username, $param_first_name, $param_last_name, $param_email, $param_password, $param_phone, $param_address);
                        
            $param_username = $username;
            $param_first_name = $first_name;
            $param_last_name = $last_name;
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); 
            $param_phone = $phone;
            $param_address = $address;
                        
            if(mysqli_stmt_execute($stmt)){   
                session_start();
                $_SESSION['message'] = "Successfully Registered";
                header("location: login.php");
            } else{
                $general_err = mysqli_stmt_error($stmt);
            }
            
            mysqli_stmt_close($stmt);
        }
    }
        
    mysqli_close($link);
}
?>

<html>
  <?php include 'head.php';?>
  <body>
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

  </div>
</nav>
    <div class="wrapper">
        <img src="./assets/img/balabac.jpg">
        <div class="subWrapper">
            <h2>Sign Up</h2><br>
            <p>Please fill this form to create an account.</p>
            <span class="help-block"><?php echo $general_err; ?></span>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group <?php echo (empty($username_err)) ?: 'has-error'; ?>">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                    <span class="help-block"><?php echo $username_err; ?></span>
                </div>    
                <div class="form-group <?php echo (empty($first_name_err)) ?: 'has-error'; ?>">
                    <label>First Name</label>
                    <input type="text" name="first_name" class="form-control" value="<?php echo $first_name; ?>">
                    <span class="help-block"><?php echo $first_name_err; ?></span>
                </div>   
                <div class="form-group <?php echo (empty($last_name_err)) ?: 'has-error'; ?>">
                    <label>Last Name</label>
                    <input type="text" name="last_name" class="form-control" value="<?php echo $last_name; ?>">
                    <span class="help-block"><?php echo $last_name_err; ?></span>
                </div>   
                <div class="form-group <?php echo (empty($email_err)) ?: 'has-error'; ?>">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                    <span class="help-block"><?php echo $email_err; ?></span>
                </div> 
                <div class="form-group <?php echo (empty($password_err)) ?: 'has-error'; ?>">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                    <span class="help-block"><?php echo $password_err; ?></span>
                </div>
                <div class="form-group <?php echo (empty($confirm_password_err)) ?: 'has-error'; ?>">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                    <span class="help-block"><?php echo $confirm_password_err; ?></span>
                </div>
                <div class="form-group <?php echo (empty($phone_err)) ?: 'has-error'; ?>">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control" value="<?php echo $phone; ?>">
                    <span class="help-block"><?php echo $phone_err; ?></span>
                </div> 
                <div class="form-group <?php echo (empty($address_err)) ?: 'has-error'; ?>">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" value="<?php echo $address; ?>">
                    <span class="help-block"><?php echo $address_err; ?></span>
                </div> 
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <input type="reset" class="btn btn-default" value="Reset">
                </div>
                <p>Already have an account? <a href="login.php">Login here</a>.</p>
            </form>
        </div>
    </div>    
</body>
</html>