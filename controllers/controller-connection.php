<?php 
include_once "../models/Employer.php";
session_start();
$connected = false;
if(isset($_SESSION["id"])){
    $connected = false;
}
$email = "";
$password = "";
$errors = [];


if($_SERVER["REQUEST_METHOD"] == "POST")
{

    if(isset($_POST["email"]))
    {
        $email = htmlspecialchars($_POST["email"]);
        if(empty($email))
        {
            $errors["email"] = "Champs obligatoire !" ;
        }
        else if(!Employer::verifyEmail($email))
        {
            $errors["email"] = "Employer introuvable !" ; 
            
        }

    }



    if(isset($_POST["password"]))
    {
        $password = htmlspecialchars($_POST["password"]);
        if(empty($password))
        {
            $errors["password"] = "Champs obligatoire !";
        }
        else if(!isset($errors["email"]) )
        {
            if(!Employer::verifyPassLink($email,$password))
            {
                $errors["password"] = "Mot de passe incorrecte !";
            }

        }

    }

if(count($errors) == 0)
{
  $result =  Employer::getEmployerByEmail($email);
  $_SESSION["id"] = $result["id"];
  $_SESSION["admin"] = $result["admin"];
  $_SESSION["lastname"] = $result["lastname"];
  $_SESSION["firstname"] = $result["firstname"];
  $connected = true;

  header("Location: controller-home.php");
}

}


include "../views/connection.php";




?>