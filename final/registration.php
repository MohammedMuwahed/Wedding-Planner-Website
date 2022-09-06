<?php
session_start();

require 'connect.php';
if(isset($_POST['register'])){

$sql="INSERT INTO registration(firstName,lastName,username,email,password) values (:firstName,:lastName,:username,:email,:password)";
$statement=$pdo->prepare($sql);
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$statement->bindParam(":firstName",$firstName,PDO::PARAM_STR);
$statement->bindParam(":lastName",$lastName,PDO::PARAM_STR);
$statement->bindParam(":username",$username,PDO::PARAM_STR);
$statement->bindParam(":email",$email,PDO::PARAM_STR);
$statement->bindParam(":password",$password,PDO::PARAM_STR);
$result= $statement->execute();
if ($result){
    echo 'successfully saved.';
    header("Location: login.php");
    die;
}else{
    echo 'There was an Error while saving data.';
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
    <title>Registeration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post" >
        <div class="regContainer">
        <a href="home.php"><img id="reg_logo" src="logo.png" ></a>
        <h2>Register Here</h2>
        <label for="firstName"><b>First Name</b></label>
        <input type="text" placeholder="Enter your first name" name="firstName" required>

        <label for="lastName"><b>Last Name</b></label>
        <input type="text" placeholder="Enter your last name" name="lastName" required>

        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>
        
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" required>
        
        <label for="password"><b>Password (8 characters minimum):</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="password" minlength="8"required>
        <input type="checkbox" onclick="showPass()"><span> Show password</span>
        
        <button type="submit" name="register">Sign Up</button>
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="password">Forgot <a href="#">password?</a></span>
            
        <a  class="regLink" href="login.php" > Login Here </a>
        </div>
    </form>
    <script src = "show_password.js"></script>

</body>
</html>