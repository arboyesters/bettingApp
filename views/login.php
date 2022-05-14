<?php
//import the dbconn
require("dbconn.php");

//post request
$username= $_POST["username"];
$password= $_POST["password"];

$sql= "SELECT * FROM admin_user_table WHERE admin_email_id='$username'";
$result= mysqli_query($conn, $sql);

$num= mysqli_num_rows($result);
$row= mysqli_fetch_assoc($result);

if($num== 1){
  if($password== $row["admin_password"]){
    $login= true;
    session_start();
    $_SESSION['username']= $row["admin_email_id"];
    $_SESSION['password']= $row["admin_password"];

    $status= 200;
    $response= "User authenticated successfully";
    echo $response;
  }
  else{
    $status= 203;
    $response= "Password doesn't match";
    echo $response;
  }
  
}
else{
  $status= 203;
  $response= "User doesn't exist";
  echo $response;
}

?>