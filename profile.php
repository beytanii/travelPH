<?php
require_once "config.php"; 
session_start(); 

$sql = "SELECT * FROM users WHERE id = ".$_SESSION['id'];
$result=$link->query($sql) or die($link->error);
$user = $result->fetch_assoc();

$username = $password = "";
$username_err = $password_err = $login_err = "" ; 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);  
    mysqli_query($link, "UPDATE users SET phone='$phone', address='$address' WHERE id= ".$user['id']);
    $_SESSION['message'] = "Successfully Updated!"; 
    header('location: profile.php');
    mysqli_close($link);
}


?>

<!DOCTYPE html>
<html lang="en">
<?php include 'head.php';?>
  <body>
  <?php include 'navbar.php';?>
    <div class="wrapper">
        <div class="subWrapper">
            <h6><?php echo !empty($_SESSION['message']) ? $_SESSION['message']:"" ?></h6>
            <h2>Profile</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $user['username']; ?>" disabled>
                </div>    
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="first_name" class="form-control" value="<?php echo $user['first_name']; ?>"disabled>
                </div> 
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="last_name" class="form-control" value="<?php echo $user['last_name']; ?>"disabled>
                </div> 
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $user['email']; ?>"disabled>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control" value="<?php echo $user['phone']; ?>">
                </div> 
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" value="<?php echo $user['address']; ?>">
                </div> 
                 
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </form>
        </div>
    </div>    
</body>
</html>