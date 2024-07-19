<?php
    $firstName = $_POST['firstName']
    $lastName = $_POST['lastName']
    $phone = $_POST['Phone']
    $email = $_POST['email']
    $password = $_POST['password']
    
    //Database connection
    $conn = new mysqli('localhost','root','','test')
    if($conn->connection_error){
        die('connection Failed : '.$conn->connect_error)
    }else{
        $stmt = $conn->prepare("insert into registration(fristName, lastName, phone, Email, password)
            values(?, ?, ?, ?, ?, ?)")
        $stmt->bind_param("sssssi",$firstName, $lastName, $phone, $email, $password);
        $stmt->execute();
        echo "Registration Successfully...";
        $stmt->close();
        $conn->close();
    }
?>