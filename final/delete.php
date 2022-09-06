<?php
require 'session.php';
require 'connect.php';
$sql = "DELETE FROM registration where id = $loggedin_id";
$statement=$pdo->prepare($sql);
$statement->execute();
$pdo = null;
if(!isset($loggedin_id) || $loggedin_id==NULL) {
    header("Location: login.php");
}
?>