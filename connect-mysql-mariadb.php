  <!-- connot connect to database -->
  <?php  
   $server = "https://node42861-env-2276018.mircloud.host";
  $user = "root";
  $pw = "gOJTkc7QSL";
  $db = "rbkLastTask";
   $connect = mysql_connect($server,$user,$pw,$db);
   if(!$connect){
    die("connot connect to database $db on server $server using
       username $user (".mysql_errno().", ".mysql_connect_error().")");
    echo "connot connect";
   }else{
   echo "you have connection to your database";
 }
  ?>  