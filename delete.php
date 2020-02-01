<?php
    include("db.php");
    $pass = $_POST['pass'];

    if(isset($_POST["deleteAll"]) && $pass == "Admin")
    {
          $sql= "DELETE FROM Attendance";

          if ($conn -> query($sql) === TRUE){
            header('Location:index.php');
          } /*else {
            echo "Fail" . $conn->error;
          }*/

    } else {
      header('Location:index.php');
    }


?>
