<?php  
require ("session.php");
require ("navbar.html");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="edit_profile.php" method="POST">
        <div class="profileContainer">
            <h2><b>Welcome <?php echo $loggedin_fname . " " . $loggedin_lname;?></b></h2>
            <label for="id"><b>id:</b></label>
            <div><?php echo $loggedin_id;?></div>
            <label for="fullname"><b>fullname:</b></label>
            <div> <?php echo $loggedin_fname . " " . $loggedin_lname;?></div>
            <label for="username"><b>Username:</b> </label>
            <div><?php echo $loggedin_user;?></div>
            <label for="email"><b>email:</b></label>
            <div><?php echo $loggedin_email;?></div>

            <button  id="edit_btn">Edit profile</button> 
    </form>
            <a id="delete_btn" href="delete.php">delete profile</a> 
            <a class="regLink" href="logout.php">Logout</a>
        </div>
        
</body>
</html>