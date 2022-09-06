<?php
session_start();
include('connect.php');

$id_check=$_SESSION['id'];
$statement = $pdo->query ("SELECT * FROM registration where id='$id_check'");
$row=$statement->fetch();
$loggedin_user=$row['username'];
$loggedin_id=$row['id'];
$loggedin_fname=$row['firstName'];
$loggedin_lname=$row['lastName'];
$loggedin_email=$row['email'];
$loggedin_password=$row['password'];
$statement->execute();

$statement = $pdo->query ("SELECT * FROM book_list");
$row1=$statement->fetch();
$row2=$statement->fetch();
$statement->execute();

if(!isset($loggedin_user) || $loggedin_user==NULL) {
    header("Location: login.php");
}
?>
