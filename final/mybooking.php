<?php 
require 'session.php'; 
if (isset($_SESSION['id'])){
    require 'navbar.html';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Booking</title>
    <style>
         th,td
          {border-bottom: 1px solid #ddd;}

         tr:hover
          {background-color: #D3D3D3;}
    </style>
      <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        require 'connect.php';
        $sql="SELECT * FROM bookingnow";
        $statement=$pdo->prepare($sql);
        $statement->execute();
        echo "<table style='border:1px solid; width:80%; text-align:center; margin:auto;'>";
        echo "<tr>";
            echo "<th> Hall id </th>";
            echo "<th> Hall Name </th>";
            echo "<th> Date </th>";
            echo "<th> Members </th>";
            echo "<th> Edit </th>";
            echo "<th> Delete </th>";
        echo "</tr>";
        $data=$statement->fetchAll();
        foreach ($data as $row) {
            echo "<tr>".
            "<td>" . $row['id_hall']." </td>".
            " <td> ". $row['name_hall'] . " </td>". 
            " <td> ". $row['date'] . " </td>". 
            "<td>" . $row['members'] . "</td>".
            "<td>" ." <a href=view_book.php?id_hall=".$row['id_hall']."> edit </a></td>".
            "<td> <a href=delete_book.php?id_hall=".$row['id_hall']."> delete </a> </td>".
            "</tr>";
        }
    echo "</table>";
    $pdo=null;
    ?>

    </br>
    </br>
    <a href="book_now.php"> Add new book </a>
    </body>
    </html>
    <?php
}else{
  header("Location: login.php");
  die;
}
?>