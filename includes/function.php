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

function createProjekt($conn, $customername){

    echo"hej car";

    $stmt_insertCar = $conn->prepare("INSERT INTO cars (Make ) VALUES (:make , :model , :licensenumber )");
    $stmt_insertCar->bindparam(':make',$make, PDO::PARAM_STR);
    $stmt_insertCar->execute();

}



function fetchTcustomer($conn){
    $fetchTcustomer= $conn->prepare('SELECT * FROM customer') ;
    $fetchTcustomer->execute();
    return $fetchTcustomer; 
}

function fetchTcar($conn){
    $fetchTcar= $conn->prepare('SELECT * FROM cars') ;
    $fetchTcar->execute();
    return $fetchTcar; 
}

function selectprojekt($conn){
    $selectprojekt= $conn->prepare('SELECT * FROM projekt INNER JOIN cars ON projekt.Car_fk = cars.car_id INNER JOIN customer ON projekt.Customer_fk = customer.customer_id WHERE Status_fk = 1');
    $selectprojekt->execute();
    return $selectprojekt;
}

function selectSingleProject($conn, $id){
    $selectedCar = $conn->prepare(
    'SELECT *
    FROM projekt
    INNER JOIN cars
    ON projekt.Car_fk = cars.car_id
    INNER JOIN customer
    ON projekt.customer_fk = customer.customer_id
    INNER JOIN table_user
    ON projekt.Creater_fk = table_user.u_id
    WHERE projekt.projekt_id = :id'
    );
    $selectedCar->bindParam(':id', $id, PDO::PARAM_INT);
    $selectedCar->execute();
    $projectData = $selectedCar->fetch();
    
    return $projectData;
}

function deleteproject($conn, $pid){
    $deleteProjectQuery = $conn->prepare("UPDATE projekt SET Status_fk = 2 WHERE projekt_id = :pid");
    $deleteProjectQuery->bindParam(':pid', $pid, PDO::PARAM_INT);
    $deleteProjectQuery->execute();
    return true;
}

?>