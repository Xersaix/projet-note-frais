<?php
include_once "../models/Employer.php";
include_once "../models/Expense.php";
session_start();
$connected = false;
if(!isset($_SESSION["id"])){
    $connected = false;
    header('Location: controller-connection.php');
}else{
    $connected = true;
}



$list = Employer::getEmployerExpense($_SESSION["id"]);
$employer = Employer::getEmployer($_SESSION["id"]);

if($_SERVER["REQUEST_METHOD"] == "POST")
{

    if(isset($_POST["delete"]))
    {
        Expense::deleteExpense($_POST["delete"]) ;
        header("Location: controller-employer-expense-list.php");
    }
}

include "../views/employer-list-expense.php";


?>