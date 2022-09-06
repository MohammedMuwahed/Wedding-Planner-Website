<?php
require 'connect.php';
require 'session.php';
if (isset($_SESSION['id'])){
    require 'navbar.html';
    $name_hall='';
    $date='';
    $members='';
    $id_hall=0;

    $sql="SELECT * FROM bookingnow where id_hall=:id_hall";
    $statement=$pdo->prepare($sql);
    $id_hall=$_GET['id_hall'];
    $statement->bindParam(":id_hall",$id_hall, PDO::PARAM_INT);
    $statement->execute();

    $data=$statement->fetchAll();

    foreach($data as $row){
        $name_hall=$row['name_hall'];
        $date=$row['date'];
        $members=$row['members'];
    }

    if(isset($_POST['update_book'])){
    $sql = "UPDATE bookingnow SET  name_hall=:name_hall, date=:date, members=:members where id_hall = :id_hall";
    $statement = $pdo->prepare($sql);
    $name_hall = $_POST['name_hall'];
    $date = $_POST['date'];
    $members = $_POST['members'];
    $statement->bindParam(':name_hall', $name_hall, PDO::PARAM_STR);
    $statement->bindParam(':date', $date, PDO::PARAM_STR);
    $statement->bindParam(':members', $members, PDO::PARAM_STR);
    $statement->execute();
    $pdo=null;

    }

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>view Book</title>
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
        <form action="edit_book.php" method="POST" >
            <div class="bookContainer">
                <h2>Book Here</h2>
                <label for="name_hall"><b>Hall Name</b></label>
                <select name="name_hall" id="pickone" >
                    <option value="<?php echo $name_hall?>"><?php echo $name_hall?></option>
                    <option value="<?php echo $row1['name'] ?>" ><?php echo $row1['name'] ?></option>
                    <option value="<?php echo $row2['name'] ?>" ><?php echo $row2['name'] ?></option>
                </select>
                
                <label for="date"><b>date</b></label>
                <input type="date" name="date"id="date" value="<?php echo $date; ?>">

                <label for="members"><b>How many members</b></label>
                <input type="number" name="members" id="members"value="<?php echo $members; ?>">
                <input type="hidden" name="id_hall" value="<?php echo $id_hall?>">
    
                <button type="submit" name="update_book"><b> Update </b></button>

            </div>
        </form>
        <a href="mybooking.php"> View my books </a>
    </body>
    </body>
    </html>
    <?php
}else{
  header("Location:login.php");
  die;
}
?>