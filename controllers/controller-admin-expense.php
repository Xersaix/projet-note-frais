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
    if($_SESSION["admin"] == 0)
    {
        header('Location: controller-home.php'); 
    }
}

$expense = Expense::getExpense($_GET["id"]);
$expense_date = "";
$expense_type = "";
$expense_reason = "";
// get the base64 file
$imgData = $expense["image"];
// Open a file and add the base64 as a parameter to get the file type
$file = finfo_open();
$mime_type = finfo_buffer($file,$imgData,FILEINFO_MIME_TYPE);



// link to the file for the img tag <img src="data:image/gif;base64,R0lGODdhAQABAPAAAP8AAAAAACwAAAAAAQABAAACAkQBADs" />
$base64ImageSrc = 'data:' . $mime_type . ';base64,' . $imgData;






$errors = [];
$show = false;
$dateRegex = '/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/'; 
// Get all the type and initailize the type checker. 
$types = ExpenseType::getAllType();
$types_checker = array();

// Get all the species and initailize the species checker.
foreach ($types as $row) {
    array_push($types_checker,$row["id"]);

}
$show = false;

// Check if a Post method exist
if($_SERVER["REQUEST_METHOD"] == "POST")
{

    if(isset($_POST["reason"]))
    {
        $expense_reason = htmlspecialchars($_POST["reason"]);
        if(empty($expense_reason) && isset($_POST["invalid"]))
        {
           
            $errors["reason"] = "Champs obligatoire";
        }
    }

    if(isset($_POST["valid"]))
    {
       
    }


if(count($errors) == 0)
{
 
    if(isset($_POST["valid"]))
    {
        Expense::validExpense(date('y-m-d'),$_GET["id"]);
    }else if(isset($_POST["invalid"]))
    {
        Expense::invalidExpense(date('y-m-d'),$expense_reason,$_GET["id"]);
    }
    // $show = true;
}

}


include "../views/admin-expense.php";

fclose($temp);
?>