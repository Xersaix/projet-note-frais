<?php
include_once "../models/Employer.php";
session_start();
$connected = false;
if(!isset($_SESSION["id"])){
    $connected = false;
    header('Location: controller-connection.php');
}else{
    $connected = true;
}



$list = Employer::getEmployerList();


include "../views/employer-list.php";


?>