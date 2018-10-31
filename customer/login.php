<!DOCTYPE html>
<?php 
@session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .login_form{
            width: 350px;
            height: 430px;
            background-color: #F9F9F9;
            padding: 15px;
            border-radius: 6px;
            margin: 60px auto;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
        }
    </style>
</head>
<body>
    
        <div class="container">
            <div class="login_form">
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
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="text" name="uid" placeholder="Enter your Email/UserName" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="pwd">Password:</label>
                      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" name="stay" value="stay log in"> Remember me</label>
                    </div>
                    <button type="submit" name="submit"value="login" class="btn btn-info">Submit</button><br>
                    <a href="forgot_pass.php">forgot password</a><br><hr>
                </form>
                <h5>New here?</h5>
                <a href="signup.php"><button class="btn btn-default">SignUp</button></a>
                
            </div>
        </div>
        
            
        
 
</body>
</html>