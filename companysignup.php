<!DOCTYPE html>
<html>
<body>

<?php
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

    $uid=$_POST['userid'];
    $cname=$_POST['companyname'];
    $pwd=$_POST['password'];

    $foundFlg=0;
    $selectQuery="SELECT uid,cname FROM companydetails";
    $selectResult=$conn->query($selectQuery);

    //check if record is alredy found
    if($selectResult->num_rows>0){
      while($temp=$selectResult->fetch_assoc()){
        if($temp['cname']===$cname || $temp['uid']===$uid){
          $foundFlg=1;
          break;
        }
      }

    }
    //record already found
    if($foundFlg===1){
      echo "Record already found <br>";
    }
    //record not found
    else{
      $insertQuery="INSERT into companydetails (cname,uid,password) VALUES ('$cname','$uid','$pwd')";


      if ($conn->query($insertQuery) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
  }


?>

</body>
</html>