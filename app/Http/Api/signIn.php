<?php
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');

    include "connectDb.php";

    $email = $_GET['email'];
    $password = $_GET['password'];

    $sql = "SELECT * FROM users WHERE email='$email AND password='$password'";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt->execute();
    $returnValue = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($returnValue);


?>