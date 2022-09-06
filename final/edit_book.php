<?php
require 'connect.php';
require 'session.php';
if(isset($_POST['update_book'])){
    $sql = "UPDATE bookingnow SET name_hall=:name_hall, date=:date, members=:members where id_hall=:id_hall";
    $statement = $pdo->prepare($sql);
    $name_hall = $_POST['name_hall'];
    $date = $_POST['date'];
    $members = $_POST['members'];
    $id_hall = $_POST['id_hall'];
    $statement->bindParam(':name_hall',$name_hall, PDO::PARAM_STR);
    $statement->bindParam(':date',$date, PDO::PARAM_STR);
    $statement->bindParam(':members',$members, PDO::PARAM_STR);
    $statement->bindParam(':id_hall',$id_hall, PDO::PARAM_STR);
    $result= $statement->execute();
    if ($result){
        echo 'successfully saved.';
        header("Location: mybooking.php");
    }else{
        echo 'There was an Error while saving data.';
    }
    $pdo=null;
}
?>