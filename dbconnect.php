<?php
ini_set('display_errors', On);
ini_set('error_reporting', E_ALL);

 $link = mysqli_connect("localhost","root","", "att-login");

  if(mysqli_connect_error()){

    die( "Database connection failed!!") ;

  }else{
    echo "Database connection successful <br>";
  }


?>
