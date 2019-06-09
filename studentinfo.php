<?php
  //session_start();
  include 'dbconnect.php';

  include 'validate.php';
  error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Dashboard</title>
    <link rel="stylesheet" type="text/css" href="studentinfo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  </head>
  <body>

    <div class="jumbotron text-center">
      <?php
        $user = $_SESSION['username'];
        $pwd = $_SESSION['password'];
        //echo "<h1> $user </h1> <br> <h2> $pwd </h2>";

        $query = "SELECT * FROM tea2018_19 WHERE username  = '$user'";
        $result = mysqli_query($link,$query);
        if(mysqli_num_rows($result) > 0){
          while($row = mysqli_fetch_assoc($result)){
            echo "<h1>".$row['name']."</h1>";
          }
        }

      ?>

      <p>Welcome, This is your dashboard.</p>
  </div>


    <div class="container">



  </div>

  </body>
</html>
