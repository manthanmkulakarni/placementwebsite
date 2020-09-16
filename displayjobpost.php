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

    $uid=$_SESSION['userid'];

    $foundFlg=0;
    $selectQuery="SELECT * FROM job where company='$uid'";
    $selectResult=$conn->query($selectQuery);

    //check if record is alredy found
    if($selectResult->num_rows>0){
      while($temp=$selectResult->fetch_assoc()){
        echo $temp['jobrole'].'<br>';
        echo $temp['stipend'].'<br>';
        echo $temp['disc'].'<br><br>';
      }

    }

  }


?>

</body>
</html>