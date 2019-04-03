<?php
  include 'dbconnect.php';
  if(isset($_POST['submitBtn'])){

      $name = $_POST['name'];
      $dept = $_POST['dept'];
      $class = $_POST['class'];
      $roll = $_POST['rollno'];
      $mno = $_POST['mno'];
      $pwd = $_POST['pwd'];

      //echo "You've entered ".$name."<br>".$dept."<br>".$class."<br>".$roll."<br>".$mno."<br>".$pwd;
      //$query = "INSERT INTO `tecompstudsem2`(`username`, `password`) VALUES ('$roll','$pwd')";
      //$query1 = "INSERT INTO `compteasem2attendance` VALUES ('$roll','0','0','0','0','0')";
      echo $class;
      if($class == 'tea'){

        $query = "INSERT INTO `tecompstudsem2`(`username`, `password`) VALUES ('$roll','$pwd')";
        $query1 = "INSERT INTO `compteasem2attendance` VALUES ('$roll','0','0','0','0','0')";
        $query2 = "INSERT INTO `tea2018_19`(`username`, `name`) VALUES ('$roll','$name')";

        if(mysqli_query($link, $query)) {
          echo "Inserted successfully <br>";
        }else{
          echo "Insertion failed!<br>";
        }

        if(mysqli_query($link, $query1)) {
          echo "Default attendance inserted successfully <br>";
        }else{
          echo "Insertion failed!<br>";
        }

        if(mysqli_query($link, $query2)) {
          echo "Inserted in member table successfully <br>";
        }else{
          echo "Insertion failed!<br>";
        }

      }


      //$query2 = "INSERT INTO `tea2018-19`(`username`, `name`) VALUES ('$roll','$name')";
      // if(mysqli_query($link, $query)) {
      //   echo "Inserted successfully <br>";
      // }else{
      //   echo "Insertion failed!<br>";
      // }
      //
      // if(mysqli_query($link, $query1)) {
      //   echo "Default attendance inserted successfully <br>";
      // }else{
      //   echo "Insertion failed!<br>";
      // }
  }


?>
