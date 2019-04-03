<?php
  //session_start();
  include 'dbconnect.php';

  include 'validate.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Dashboard</title>
  </head>
  <body>

    <?php
      $user = $_SESSION['username'];
      $pwd = $_SESSION['password'];
      echo "<h1> $user </h1> <br> <h2> $pwd </h2>";

    ?>

  </body>
</html>
