<?php
$request= $_SERVER['REQUEST_URI'];
$router= str_replace('/codes/backend/views', '', $request);


if($router== "/login"){
    include("./views/login.php");
}

?>

