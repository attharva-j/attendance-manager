<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration Confirmation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php
      include 'dbconnect.php';
      if(isset($_POST['submitBtn'])){

          $userType = $_POST['student'];
          $name = $_POST['name'];
          $dept = $_POST['dept'];
          $class = $_POST['class'];
          $roll = $_POST['rollno'];
          $mno = $_POST['mno'];
          $pwd = $_POST['pwd'];

          //echo "You've entered ".$name."<br>".$dept."<br>".$class."<br>".$roll."<br>".$mno."<br>".$pwd;
          //$query = "INSERT INTO `tecompstudsem2`(`username`, `password`) VALUES ('$roll','$pwd')";
          //$query1 = "INSERT INTO `compteasem2attendance` VALUES ('$roll','0','0','0','0','0')";
          //echo $class." ".$userType;

          if($userType == 'student'){
            if($class == 'tea'){

              $query = "INSERT INTO `tecompstudsem2`(`username`, `password`) VALUES ('$roll','$pwd')";
              $query1 = "INSERT INTO `compteasem2attendance` VALUES ('$roll','0','0','0','0','0')";
              $query2 = "INSERT INTO `tea2018_19`(`username`, `name`) VALUES ('$roll','$name')";

              if(mysqli_query($link, $query)) {
                //echo "Inserted successfully <br>";
              }else{
                echo "Insertion failed!<br>";
              }

              if(mysqli_query($link, $query1)) {
                //echo "Default attendance inserted successfully <br>";
              }else{
                echo "Insertion failed!<br>";
              }

              if(mysqli_query($link, $query2)) {
                //echo "Inserted in member table successfully <br>";
              }else{
                echo "Insertion failed!<br>";
              }

            }
          }
          else{

            //echo "<h1>You are a teacher!</h1>";
              $query = "INSERT INTO `tecompstaffsem2`(`username`, `password`) VALUES ('$roll','$pwd')";

              if(mysqli_query($link, $query)) {
                echo "<h3 style='text-align: center;'>Inserted successfully</h3> <br>";
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
  </body>
</html>
