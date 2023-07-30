<?php
include_once "../helpers/Database.php";

class Expense
{

    public static function addExpense($date,$ttc,$ht,$reason,$type,$employer,$image)
    {
        $conn = Database::connectDatabase();
    
        $stmt = $conn->prepare("INSERT INTO `expense`(`payment_date`, `payment_ttc`, `payment_ht`, `reason`,
           `id_expense_type`, `id_employer`, `id_status`,image)
         VALUES (:date,:ttc,:ht,:reason,:type,:employer,1,:img)");
    
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':ttc', $ttc);
        $stmt->bindParam(':ht', $ht);
        $stmt->bindParam(':reason', $reason);
        $stmt->bindParam(':type', $type);
        $stmt->bindParam(':employer', $employer);
        $stmt->bindParam(':img', $image);
        $stmt->execute();
        $conn = null;
    
    }



    public static function updateExpense($date,$ttc,$ht,$reason,$type,$employer,$id,$img)
    {
        $conn = Database::connectDatabase();
    
        $stmt = $conn->prepare("UPDATE `expense` SET `payment_date` = :date, `payment_ttc` = :ttc, `payment_ht` = :ht, `reason` = :reason,
           `id_expense_type` = :type , `id_employer` = :employer, `id_status` = 1 , `image` = :img   WHERE id = :id ");
    
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':ttc', $ttc);
        $stmt->bindParam(':ht', $ht);
        $stmt->bindParam(':reason', $reason);
        $stmt->bindParam(':type', $type);
        $stmt->bindParam(':employer', $employer);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':img', $img);
        $stmt->execute();
        $conn = null;
    
    }

    public static function getNumberExpenseStats($status)
    {
        $conn = Database::connectDatabase();
    
        $stmt = $conn->prepare("SELECT COUNT(*) AS number
        FROM expense
        WHERE id_status = :status");
    
        $stmt->bindParam(':status', $status);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result =  $stmt->fetch();
        $conn = null;
        return $result;
    
    } 
    public static function getNumberExpenseStatsE($status,$id)
    {
        $conn = Database::connectDatabase();
    
        $stmt = $conn->prepare("SELECT COUNT(*) AS number
        FROM expense
        WHERE id_status = :status AND id_employer = :id");
    
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result =  $stmt->fetch();
        $conn = null;
        return $result;
    
    } 


    public static function validExpense($date,$id)
    {
        $conn = Database::connectDatabase();
    
        $stmt = $conn->prepare("UPDATE `expense` SET validation_date = :date,  `id_status` = 2 WHERE id = :id ");
    
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $conn = null;
    
    }
    public static function invalidExpense($date,$reason,$id)
    {
        $conn = Database::connectDatabase();
    
        $stmt = $conn->prepare("UPDATE `expense` SET validation_date = :date, result_commentary = :reason , `id_status` = 3 WHERE id = :id ");
    
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':reason', $reason);
        $stmt->execute();
        $conn = null;
    
    }
    public static function getExpense($id)
    {

    $conn = Database::connectDatabase();
    $stmt = $conn->prepare("SELECT * FROM `expense` where id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result =  $stmt->fetch();
    $conn = null;
    return $result;

    }
    public static function deleteExpense($id)
    {

    $conn = Database::connectDatabase();
    $stmt = $conn->prepare("DELETE FROM `expense` WHERE id=  :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result =  $stmt->fetch();
    $conn = null;


    }
}



?>