<?php
require 'session.php';
require 'connect.php';
if (isset($_SESSION['id'])){
    require 'navbar.html';
?>
<?php
if(isset($_POST['booknow'])){

$sql="INSERT INTO bookingnow(name_hall,date,members) values (:name_hall,:date,:members)";
$statement=$pdo->prepare($sql);
$name_hall=$_POST['name_hall'];
$date=$_POST['date'];
$members=$_POST['members'];
$statement->bindParam(":name_hall",$name_hall,PDO::PARAM_STR);
$statement->bindParam(":date",$date,PDO::PARAM_STR);
$statement->bindParam(":members",$members,PDO::PARAM_STR);
$result = $statement->execute();
if (!$result){
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
    <title>Book Now</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <form action="mybooking.php" method="POST" >
        <div class="bookContainer">
        <h2>Book Here</h2>
        <label for="name_hall"><b>Hall Name:</b></label>
        <select name="name_hall" id="pickone" required>
            <option value="">pick one...</option>
            <option value="Al-NumanHalls" ><?php echo $row1['name'] ?></option>
            <option value="Nowruzhalls" ><?php echo $row2['name'] ?></option>
        </select>

        <label for="date"><b>date:</b></label>
        <input type="date" name="date" id="date" placeholder="Enter the date of your hall" required>
        
        <label for="number"><b>members:</b></label>
        <input type="number" name="members" id="members" placeholder="Number of members" required>
              
        <button type="submit" id="book_bnt"name="booknow"><b> Book Now </b></button>

        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
<?php
}else{
  header("Location: login.php");
  die;
}
?>