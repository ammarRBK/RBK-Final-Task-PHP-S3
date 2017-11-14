<?php  
  $server = "localhost";
  $user = "root";
  $pw = "root";
  $db = "lasttaskrbk";
  $con = mysqli_connect($server,$user,$pw,$db);
  // $con=mysqli_connect($server,,"DHIgiv98012","rbkLastTask");
  if($con){
  	echo "success";
  }else{
  	echo "Faild";
  }
?>  