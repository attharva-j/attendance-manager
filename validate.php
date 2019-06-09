<?php

    session_start();
    include 'dbconnect.php';

    if ($_POST["username"] || $_POST["password"]) {
      // code...

      $user = $_POST['username'];
      $pwd = $_POST['password'];
      $userType = $_POST['student'];

      if($userType == 'stud'){
        $query = "SELECT * FROM tecompstudsem2 WHERE username='$user' AND password='$pwd'";
        $result = mysqli_query($link, $query);
        if(mysqli_num_rows($result) > 0) {

          // while($row = mysqli_fetch_assoc($result)) {
          //        echo "Username: " . $row["username"]. "<br>". "Password: " . $row["password"]. "<br>";
          //     }
          echo "$user<br>$pwd<br>";
          $_SESSION['username'] = $user;
          $_SESSION['password'] = $pwd  ;

          header('Location: studentinfo.php');


        }else{
          echo "Invalid combination!";
        }
      }else {
        $query = "SELECT * FROM tecompstaffsem2 WHERE username='$user' AND password='$pwd'";
        $result = mysqli_query($link, $query);
        if(mysqli_num_rows($result) > 0) {

          // while($row = mysqli_fetch_assoc($result)) {
          //        echo "Username: " . $row["username"]. "<br>". "Password: " . $row["password"]. "<br>";
          //     }
          echo "$user<br>$pwd<br>";
          $_SESSION['username'] = $user;
          $_SESSION['password'] = $pwd  ;

          header('Location: teacherinfo.php');


        }else{
          echo "Invalid combination!";
        }
      }



    }




?>
