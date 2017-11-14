<?php
if(isset($_POST['submitSignUp'])){
  include_once 'connect-mysql-mariadb.php';
       $user = $_POST['username'];
       $pass = $_POST['password'];
       $hashedPassword = password_hash($pass,PASSWORD_DEFAULT);
      $sql = "INSERT INTO users(username,password) VALUES ('$user','$hashedPassword');";
       mysqli_query($con,$sql);
      if(!$sql)
      {
          echo "Failed ".mysqli_error();
      }
      else
      {
        echo "welcom to our family";
      }
}
?>