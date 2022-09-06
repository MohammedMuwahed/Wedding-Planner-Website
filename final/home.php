<?php
require 'session.php';
require 'navbar.html';
if (isset($_SESSION['id'])){
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
  <h2>Hello <?php echo $_SESSION['username'];?></h2>
  <div id="card_container">
    <form action="home.php" method="post">
      <div class="card">
        <img src="<?php echo $row1['image'] ?>" class="card-img-top" >
        <div class="card-body">
          <h5 class="card-title"><?php echo $row1['name'] ?></h5>
          <p class="card-text">
            <Address><span id="topics">Address:</span> <?php echo $row1['address'] ?>  
            <a href="<?php echo $row1['link_address'] ?>" target="_blank">(Location here)</a> </Address>
            <div class="phone_number"><span id="topics">Phone:</span> <span onclick="copy(this)"><?php echo $row1['phone_number'] ?></span></div>
            <h5>Price: <?php echo $row1['price'] ?> JD</h5>
          </p>
          <a href="book_now.php" class="btn btn-primary">Book Now</a>
        </div>
      </div>
      <div class="card">
        <img src="<?php echo $row2['image'] ?>" class="card-img-top" >
        <div class="card-body">
          <h5 class="card-title"><?php echo $row2['name'] ?></h5>
          <p class="card-text">
            <Address><span id="topics">Address:</span> <?php echo $row2['address'] ?>  
            <a href="<?php echo $row2['link_address'] ?>" target="_blank">(Location here)</a> </Address>
            <div class="phone_number"><span id="topics">Phone:</span> <span onclick="copy(this)"><?php echo $row2['phone_number'] ?></span></div>
            <h5>Price: <?php echo $row2['price'] ?> JD</h5>
          </p>
          <a href="book_now.php" class="btn btn-primary">Book Now</a>
        </div>
      </div>
    </form>
  </div>
  <script src="copy.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
  </html>
  <?php
}else{
  header("Location: login.php");
  die;
}
?>