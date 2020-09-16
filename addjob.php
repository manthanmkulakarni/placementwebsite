<!DOCTYPE html>
<html>
<body>

<?php

  session_start();

  $servername = "192.168.29.7";
  $username = "placementoffice";
  $password = "poffice@123";
  $dbname = "placementwebsite";

  // Create connection
  $conn = new mysqli($servername, $username, $password,$dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 
  else{
    
    $jrole=$_POST['jobtitle'];
    $jcompany=$_SESSION['userid'];
    $jstipend=$_POST['stipend'];
    $jdesc=$_POST['jobdescription'];
    $insertQuery="INSERT into job (jobid,jobrole,company,stipend,disc) values (UUID(),'$jrole','$jcompany','$jstipend','$jdesc')";


    if ($conn->query($insertQuery) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }


?>

</body>
</html>