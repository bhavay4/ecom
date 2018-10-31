<!DOCTYPE html>
<?php 
@session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
</head>
<body>
    <div>
       <h2>Login </h2>
       <?php
        if(isset($_GET['location']))
        {$location=$_GET["location"];
            echo'<form action="includes/login.inc.php?location='.$location.'"method="POST">';
        }
        else
        {
            echo'<form action="includes/login.inc.php" method="POST">';
        }
        ?>
        
            <input type="text" name="uid" placeholder="Enter your Email/UserName">
            <input type="password" name="pwd" value="">
            <input type="checkbox" name="stay" value="stay log in">
            <input type="submit"  name="submit"value="login">
            
        </form>
        <a href="signup.php"><button>SignUp</button></a>
            <button><a href="forgot_pass.php">forgot password</a></button>
    </div>
</body>
</html>