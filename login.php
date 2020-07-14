<?php
session_start(); 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
} 

require_once "config.php"; 

$username = $password = "";
$username_err = $password_err = $login_err = "" ; 

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    if(empty($username_err) && empty($password_err)){    
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){        
            mysqli_stmt_bind_param($stmt, "s", $param_username);
                    
            $param_username = $username;
                    
            if(mysqli_stmt_execute($stmt)){            
                mysqli_stmt_store_result($stmt);
                            
                if(mysqli_stmt_num_rows($stmt) == 1){                                    
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){                        
                            session_start();
                                                    
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            $_SESSION["first_name"] = $first_name;                            
                            $_SESSION["last_name"] = $last_name;                            
                            $_SESSION["email"] = $email;                            
                            $_SESSION["phone"] = $phone;                            
                            $_SESSION["address"] = $address;
                            $_SESSION["message"] = "";                           
                                                    
                            header("location: index.php");
                        } else{                        
                            $login_err = "Ivalid username or password";
                        }
                    }
                } else{                
                    $login_err = "Ivalid username or password";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        
            mysqli_stmt_close($stmt);
        }
    }
    
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Locally</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/login.css">
</head>
<body>
    <div class="container text-center">
        <div class="imgContainer"><img src="./assets/img/logo.png"></div><br>
        <h6><?php echo !empty($_SESSION['message']) ? $_SESSION['message']:"" ?></h6>
        <div class="secondDiv">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form-signin">
                <div class="p-3 mb-2 bg-danger text-white" <?php echo !empty($login_err) ?: 'hidden' ?>><?php echo $login_err; ?></div>
                <div class="form-group <?php echo (empty($username_err)) ?: 'has-error'; ?>">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                    <span class="help-block"><?php echo $username_err; ?></span>
                </div>    
                <div class="form-group <?php echo (empty($password_err)) ?: 'has-error'; ?>">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                    <span class="help-block"><?php echo $password_err; ?></span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Login">
                </div>
            </form>
        </div>   
    </div>
   

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    
</body>
</html>