<?php
//connect to the database
$DATABASE_HOSTNAME = "database-1.cd9ccwppzsm2.ap-south-1.rds.amazonaws.com";
$DATABASE_USERNAME = "admin";
$DATABASE_PASSWORD = "admin1234";
$DATABASE_DBNAME = "satta_app_db";

//connection
$conn= mysqli_connect($DATABASE_HOSTNAME, $DATABASE_USERNAME, $DATABASE_PASSWORD, $DATABASE_DBNAME);
if(!$conn){
    die("Error: ".mysqli_connect_error());
}
else{
    $status= 200;
    $response= "Connection to the database is successfull";
}
?>