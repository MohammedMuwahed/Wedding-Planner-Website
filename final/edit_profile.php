<?php
require 'connect.php';
require 'session.php';
if (isset($_SESSION['id'])){
    require 'navbar.html';
?>
<?php
if(isset($_POST['update_profile'])){

$sql="UPDATE registration SET firstName=:firstName,lastName=:lastName,username=:username, email=:email,password=:password where id = $loggedin_id";
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
    header("Location: home.php");
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
    <title>Edit and update profile data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post" >
    <div class="regContainer">
        <h2>Update profile</h2>
        <label for="firstName"><b>First Name</b></label>
        <input type="text" name="firstName" value=<?php echo $loggedin_fname?> required>

        <label for="lastName"><b>Last Name</b></label>
        <input type="text" name="lastName" value=<?php echo $loggedin_lname?> required>

        <label for="username"><b>Username</b></label>
        <input type="text" name="username" value=<?php echo $loggedin_user?> required>
        
        <label for="email"><b>Email</b></label>
        <input type="email" name="email" value=<?php echo $loggedin_email?> required>

        <label for="password"><b>Password (8 characters minimum):</b></label>
        <input type="password" name="password" id="password" minlength="8" value=<?php echo $loggedin_password?> required>
        <input type="checkbox" onclick="showPass()"><span> Show password</span>
        <button type="submit" name="update_profile">Update Profile</button>
            
        <a class="regLink" href="logout.php">Logout</a>
        </div>
    </form>
    <script src = "show_password"></script>
</body>
</html>
<?php
}else{
  header("Location: login.php");
  die;
}
?>