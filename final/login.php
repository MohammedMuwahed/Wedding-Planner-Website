<?php

session_start();
require("connect.php");

if(isset($_POST['login'])){
  $sql="SELECT * from registration where username=:username and password=:password";
  
    $username=$_POST['username'];
    $password=$_POST['password'];

    $statement=$pdo->prepare($sql);
    
    $statement->bindParam(":username",$username,PDO::PARAM_STR);
    $statement->bindParam(":password",$password,PDO::PARAM_STR);
    $statement->execute();
    $id = $statement->fetchColumn();

    if($id){
      $_SESSION['id'] = $id;  
      $_SESSION['username'] = $username;
      
      header("location:home.php");
    }else{
      echo "Invalid username or password";
    }
    $pdo=null;

  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login </title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="" method="POST">
  <div class="loginContainer">
  <a href="home.php"><img id="login_logo" src="logo.png" ></a>
  <h2>Login Here</h2>
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username"  required>
    <label for="password"><b>Password  (8 characters minimum):</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" minlength="8"required> 
    <input type="checkbox" onclick="showPass()"><span> Show password</span>

    <button  id="login-btn" type="submit" name="login">Login</button>
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="password">Forgot <a href="#">password?</a></span>
    
    <a  class="regLink" href="registration.php" > Register Here </a>
    </div>
</form>
<script src = "show_password.js"></script>

</body>
</html>