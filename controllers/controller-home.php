<?php 
include_once "../models/Expense.php";
session_start();
$connected = false;
if(!isset($_SESSION["id"])){
    $connected = false;
    header('Location: controller-connection.php');
}else{
    $connected = true;
    if($_SESSION["admin"] == 1)
    {
     $in_wait =  Expense::getNumberExpenseStats(1);
    $refused =  Expense::getNumberExpenseStats(3);
    $valided =  Expense::getNumberExpenseStats(3);
    }else{
        $in_wait =  Expense::getNumberExpenseStatsE(1,$_SESSION["id"]);
        $refused =  Expense::getNumberExpenseStatsE(3,$_SESSION["id"]);
        $valided =  Expense::getNumberExpenseStatse(3,$_SESSION["id"]);
    }
}



include "../views/home.php";




?>