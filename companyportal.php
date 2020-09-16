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

    $uid=$_POST['userid'];
    $pwd=$_POST['password'];

    $foundFlg=0;
    $selectQuery="SELECT * FROM companydetails where uid='$uid' and password='$pwd'";
    $selectResult=$conn->query($selectQuery);
    
    //check if record is found
    if($selectResult->num_rows===1){
      $_SESSION['userid']=$uid;
      ?>
      View job posts
      <br>
      <button><a href="displayjobpost.php">Jobs</a></button>
      <br>
      Add a Job
        <form action="addjob.php" method="post">
          <br>Job title <br>
          <input type="text" name="jobtitle" required>
          <br>Stipend <br>
          <input type="text" name="stipend" required>
          <br> Job description <br>
          <textarea rows = "5" cols = "60" name = "jobdescription">
                  Enter details here...
          </textarea><br>
          <br><br>
          <input type="submit">
        </form>
      <?php
    }
    //record not found
    else{
      echo "Login failed";
    }
  }

?>

</body>
</html>