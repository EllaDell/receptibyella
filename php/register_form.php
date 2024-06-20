<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = "SELECT * FROM user_form WHERE email = '$email'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'user already exist!';
   }else{
      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registracija</title> 
   <style>
        .hidden-select {
            display: none;
        }
    </style>
   <link rel="stylesheet" href="../css/rega.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" 
rel="stylesheet">

</head>
<body>

<div class="form-container">

   <form action="" method="post">
      <h3>Registracija</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="Unesite ime">
      <input type="email" name="email" required placeholder="Unesite email">
      <input type="password" name="password" required placeholder="Lozinka">
      <input type="password" name="cpassword" required placeholder="Ponovi lozinku">
      <select name="user_type" class="hidden-select">
            <option value="user">Korisnik</option>
        </select>
      <input type="submit" name="submit" value="Potvrdi" class="form-btn">
      <p>Već imaš račun? <a href="login_form.php">Ulogiraj se</a></p>
      <p><a href="../index.html">Početna stranica</a></p>
   </form>

</div>

</body>
</html>