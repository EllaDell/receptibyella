<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){
   $error = [];

   $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']): '';
   $pass = isset($_POST['password']) ? md5($_POST['password']): '';

   $select = "SELECT * FROM user_form WHERE email = '$email' AND password = '$pass'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){
         $_SESSION['logged_in'] = true;
         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){
         $_SESSION['logged_in'] = true;
         $_SESSION['user_name'] = $row['name'];
         header('location:../user_page.php');
      }
     
   }else{
      $error[] = 'Netočan e-mail ili lozinka';
   }

};

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
   <link rel="stylesheet" href="../css/login.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" 
rel="stylesheet">
</head>
<body>
<div class="form-container">

   <form action="" method="post">
      <h3>Ulogirajte se</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="Unesite svoj e-mail">
      <input type="password" name="password" required placeholder="Unesite lozinku">
      <input type="submit" name="submit" value="Prijavi se" class="form-btn">
      <p><a href="../index.html">Početna stranica</a></p>
      <p><a href="register_form.php" class="form-btn">Registracija</a></p>

   </form>

</div>

</body>
</html>