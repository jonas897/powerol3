<?php 

function createCustomer($conn, $firstname , $lastname , $email , $phoneNumber , $adress , $postcode, $city){

    echo"hej";

    
    $stmt_insertOwner = $conn->prepare("INSERT INTO customer (First_Name , Last_Name , Email , Phonenumner , Adress , PostCode , City) VALUES (:First_Name , :Last_Name , :Email , :Phonenumner , :Adress , :PostCode , :City )");
    $stmt_insertOwner->bindparam(':First_Name',$firstname, PDO::PARAM_STR);
    $stmt_insertOwner->bindparam(':Last_Name',$lastname, PDO::PARAM_STR);
    $stmt_insertOwner->bindparam(':Email',$email, PDO::PARAM_STR);
    $stmt_insertOwner->bindparam(':Phonenumner',$phoneNumber, PDO::PARAM_STR);
    $stmt_insertOwner->bindparam(':Adress',$adress, PDO::PARAM_STR);
    $stmt_insertOwner->bindparam(':PostCode',$postcode, PDO::PARAM_STR);
    $stmt_insertOwner->bindparam(':City',$city, PDO::PARAM_STR);
    $stmt_insertOwner->execute();

}


function createCar($conn, $make , $model , $licensenumber ){

    echo"hej car";

    $stmt_insertCar = $conn->prepare("INSERT INTO cars (Make , Model , Reg ) VALUES (:make , :model , :licensenumber )");
    $stmt_insertCar->bindparam(':make',$make, PDO::PARAM_STR);
    $stmt_insertCar->bindparam(':model',$model, PDO::PARAM_STR);
    $stmt_insertCar->bindparam(':licensenumber',$licensenumber, PDO::PARAM_STR);
    $stmt_insertCar->execute();

}

?>