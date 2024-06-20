<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin</title> 
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Pozdrav, </h3>
      <h1> <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>Gospodarice ovo je Vaš admin page</p>
      <a href="logout.php" class="btn">Log out</a>
   </div>

</div>

</body>
</html>