<?php 
include_once "../models/Employer.php";
session_start();
$connected = false;
if(isset($_SESSION["id"])){
    $connected = false;
}

$lastname = "";
$firstname = "";
$mail = "";
$phone = "";
$password = "";
$password2 = "";
$errors = [];
$success = false;

$regexName = '/^[a-zA-Z]+$/';
$regexPhone = '/^[0-9]{10}+$/';
$regexPass = '/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/';

// Check if a Post method exist
if($_SERVER["REQUEST_METHOD"] == "POST")
{

    if(isset($_POST["lastname"]))
    {
        $lastname = htmlspecialchars($_POST["lastname"]);
        if(empty($lastname))
        {
            $errors["lastname"] = "Champs obligatoire !";
        }
        else if(!preg_match($regexName,$lastname))
        {
            $errors["lastname"] = "Mauvais format !";
        }

    }

    if(isset($_POST["firstname"]))
    {
        $firstname = htmlspecialchars($_POST["firstname"]);
        if(empty($firstname))
        {
            $errors["firstname"] = "Champs obligatoire !";
        }
        else if(!preg_match($regexName,$firstname))
        {
            $errors["firstname"] = "Mauvais format !";
        }

    }

    if(isset($_POST["email"]))
    {
        $mail = htmlspecialchars($_POST["email"]);
        if(empty($mail))
        {
            $errors["email"] = "Champs obligatoire !";
        }
        else if(!filter_var($mail,FILTER_VALIDATE_EMAIL))
        {

            $errors["email"] = "Mauvais format !";
        }
        else if(Employer::verifyEmail($mail))
        {
            $errors["email"] = "Un utilisateur avec cette email existe deja !";
        }
    }

    if(isset($_POST["phone"]))
    {
        $phone = htmlspecialchars($_POST["phone"]);
        if(empty($phone))
        {

            $errors["phone"] = "Champs obligatoire !";
        }
        else if(!preg_match($regexPhone,$phone))
        {
            $errors["phone"] = "Mauvais format";
        }

    }

    if(isset($_POST["password"]))
    {
        $password = htmlspecialchars($_POST["password"]);

        if(empty($password)){

            $errors["password"] = "Champs obligatoire !";

        }
        else if (!preg_match($regexPass,$password))
        {
            $errors["password"] = "Le mot de passe doit contenir au minimum 8 charactère, 1 lettre et 1 chiffre !";
        }
    }

    if(isset($_POST["password2"]))
    {
        $password2 = htmlspecialchars($_POST["password2"]);

        if(empty($password2)){

            $errors["password2"] = "Champs obligatoire !";

        }
        else if ($password2 != $password)
        {
            $errors["password2"] = "Les mot de pass doivent correspondre ! ";
        }
    }






if(count($errors) == 0)
{

    $password = password_hash($password,PASSWORD_DEFAULT);

    Employer::addEmployer($lastname,$firstname,$mail,$phone,$password,0);
    $success = true;
}

}


include "../views/inscription.php";




?>