<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

   $select = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist!';
   }else{
      mysqli_query($conn, "INSERT INTO `users`(name, email, password) VALUES('$name', '$email', '$pass')") or die('query failed');
      $message[] = 'registered successfully!';
      header('location:login.php');
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
      input{
         text-align: center;
      }
   </style>
</head>
<body>
<style>
body{
background-image: url('backkk.jpeg');
background-repeat: no-repeat;
background-size: 100% 100%;
background-attachment: fixed;


}


    </style>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>
<center><h1>Al-Agamy Pharmacy</h1></center>

   
<div class="form-container">

   <form action="" method="post">
      <h3>Please Enter Your Data  </h3>
      <input type="text" name="name" required placeholder="Username" class="box">
      <input type="email" name="email" required placeholder="Gmail" class="box">
      <input type="password" name="password" required placeholder="card number" class="box">
      <input type="password" name="cpassword" required placeholder="Confirm card number" class="box">
      <input type="submit" name="submit" class="btn" value="Signin">
      <p>Complete?<a href="login.php"> login</a></p>
   </form>

</div>

</body>
</html>