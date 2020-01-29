<?php
include("db.php");
$input = filter_input_array(INPUT_POST);
date_default_timezone_set('America/New_York');
$date = date("Y-m-d H:i:s");

  if($input["action"] === 'edit')
  {

   $sql = "UPDATE Attendance
    SET Week ='" . $input['Week'] . "',
        StudentID ='" . $input['StudentID'] . "',
        fname ='" . $input['fname'] . "',
        lname ='" . $input['lname'] . "',
        MissedDate ='" . $input['MissedDate'] . "',
        MissedTime ='" . $input['MissedTime'] . "',
        MakeupDate ='" . $input['MakeupDate'] . "',
        MakeupTime ='" . $input['MakeupTime'] . "',
        course ='" . $input['course'] . "',
        Instructor ='" . $input['Instructor'] . "',
        Assistant ='" . $input['Assistant'] . "',
        updated_on='" . $date . "'" ."
        WHERE entry='" . $input['entry'] . "'";


   if ($conn -> query($sql) === TRUE){
     echo "<meta http-equiv='refresh' content='0'>";
   }

  }

  if ($input['action'] === 'delete')
  {
    $sql = "DELETE FROM Attendance WHERE entry='" . $input['entry'] . "'";

    if ($conn -> query($sql) === TRUE){
      echo "<meta http-equiv='refresh' content='0'>";
    }
  }

?>
