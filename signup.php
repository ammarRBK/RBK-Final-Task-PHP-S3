<?php
if(isset($_POST['submitSignUp'])){
  include_once("connect-mysql-mariadb.php");
  if($_POST['submitSignUp']){
       $user = $_POST['username'];
       $pass = $_POST['password'];
      $sql = "INSERT into users(username,password) values('$user','$pass')";
       $qury = mysql_query($sql);
      if(!$qury)
      {
          echo "Failed ".mysql_error();
          echo "<br /><a href='signupform.php'>SignUp</a>";
          echo "<br /><a href='signinform.php'>SignIn</a>";
      }
      else
      {
        $succsee = "Successful";
        echo "welcom to our family";
      }
  }
}
?>