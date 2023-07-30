<?php
include_once "../helpers/Database.php";
class Employer{


public static function getAllEmployer()
{
    $conn = Database::connectDatabase();
    $stmt = $conn->prepare("SELECT * FROM `employer`");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result =  $stmt->fetchAll();

        $conn = null;
    return $result;

}

public static function addEmployer($lastname,$firstname,$email,$phone,$password,$admin)
{
    $conn = Database::connectDatabase();

    $stmt = $conn->prepare("INSERT INTO `employer`(`lastname`, `firstname`, `email`, `phone`, `password`, `admin`)
     VALUES (:lastname,:firstname,:email,:phone,:password,:admin)");

    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':admin', $admin);
    $stmt->execute();
    $conn = null;

}

public static function verifyEmail($email)
{
    $conn = Database::connectDatabase();
    $stmt = $conn->prepare("SELECT * FROM `employer` where email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result =  $stmt->fetch();
    $conn = null;
    if($result)
    {
        return true;
    }
    else
    {
        return false;
    }
}

public static function verifyPassLink($email,$password)
{


    $conn = Database::connectDatabase();
    $stmt = $conn->prepare("SELECT * FROM `employer` where email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result =  $stmt->fetch();
    $conn = null;


    return password_verify($password,$result["password"]);
}

public static function getEmployer($id)
{

    $conn = Database::connectDatabase();
    $stmt = $conn->prepare("SELECT * FROM `employer` where id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result =  $stmt->fetch();
    $conn = null;
    return $result;

}

public static function getEmployerList()
{

    $conn = Database::connectDatabase();
    $stmt = $conn->prepare("SELECT e.id AS employer_id, e.lastname, e.firstname, e.email, e.phone, COUNT(ee.id) AS number_of_expenses
    FROM employer e
    LEFT JOIN expense ee ON e.id = ee.id_employer AND ee.id_status = 1
    GROUP BY e.id, e.lastname, e.firstname, e.email, e.phone;");
    $stmt->execute();
    $result =  $stmt->fetchAll();
    $conn = null;
    return $result;
}

public static function getEmployerByEmail($email)
{

    $conn = Database::connectDatabase();
    $stmt = $conn->prepare("SELECT * FROM `employer` where email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result =  $stmt->fetch();
    $conn = null;
    return $result;

}

public static function getEmployerExpense($id)
{
    $conn = Database::connectDatabase();
    $stmt = $conn->prepare("SELECT e.id AS employer_id, e.lastname, e.firstname, e.email, e.phone, et.name AS expense_type, s.name AS status, ee.payment_date, ee.payment_ttc, ee.payment_ht, ee.reason, ee.validation_date, ee.result_commentary, ee.id AS expense_id , ee.image  FROM employer e LEFT JOIN expense ee ON e.id = ee.id_employer LEFT JOIN expense_type et ON ee.id_expense_type = et.id LEFT JOIN status s ON ee.id_status = s.id WHERE e.id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result =  $stmt->fetchAll();
    $conn = null;
    return $result;






}

}
?>