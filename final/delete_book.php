<?php
require 'session.php';
if (isset($_SESSION['id'])){
  ?>
<?php
require 'connect.php';
$sql="DELETE FROM bookingnow WHERE id_hall = :id_hall ";
$id_hall =$_GET['id_hall'];
$statement=$pdo->prepare($sql);
$statement->bindParam(":id_hall",$id_hall, PDO::PARAM_INT);
$result=$statement->execute();
if ($result){
  echo 'successfully saved.';
  header("Location: mybooking.php");
}else{
  echo 'There was an Error while saving data.';
}
$pdo=null;
?>
<?php
}else{
  header("Location: login.php");
  die;
}
?>