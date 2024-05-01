<?php

try{
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    include 'connectDb.php';

    $sql = "SELECT * FROM `padi`";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Memeriksa apakah data ditemukan
    $row_count = $stmt->rowCount();
    if ($row_count > 0) {
        $response['data'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $response['error'] = 'Data tidak ditemukan.';
    }
    echo json_encode($response);
}catch(PDOException $e){
    $response['error'] =  'Database error: '+$e->getMessage();
    echo json_encode($response);
}
?>