<?php
include_once "../models/Employer.php";
include_once "../models/Expense.php";
include_once "../models/ExpenseType.php";
session_start();
$connected = false;
if(!isset($_SESSION["id"])){
    $connected = false;
    header('Location: controller-connection.php');
}else{
    $connected = true;
}



$list = Employer::getEmployerExpense($_GET["id"]);
$employer = Employer::getEmployer($_GET["id"]);
$expense = Expense::getExpense($_GET["id"]);


include "../views/admin-list-expense.php";


?>