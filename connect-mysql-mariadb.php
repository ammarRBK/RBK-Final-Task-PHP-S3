  <!-- connot connect to database -->
 <?php
  // define (DB_USER, "root");
  // define (DB_PASSWORD, "gOJTkc7QSL");
  // define (DB_DATABASE, "rbkLastTask");
  // define (DB_HOST, "https://node42861-env-2276018.mircloud.host");
?> -->
  <?php  
  // $server = "node42861-env-2276018.mircloud.host";
  // $user = "root";
  // $pw = "DHIgiv98012";
  // $db = "rbkLastTask";
  // $con = mysqli_connect($server,$user,$pw,$db);
  $con=mysqli_connect("node42861-env-2276018.mircloud.host","root","DHIgiv98012","rbkLastTask");
  Echo mysqli_connect_error();
  if($con)
  {
      echo "success";
  }
  else
  {
      echo "failed";
  }
  ?>  