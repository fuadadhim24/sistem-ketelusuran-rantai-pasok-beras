<?php
try{
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');

    include "connectDb.php";
    $id= $_POST['id'];

    $sql = "DELETE FROM `lahan` WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $response['success'] = 'Lahan berhasil dihapus.';
    echo json_encode($response);    
    
}catch(PDOException $e){
    $response['error'] =  'Database error: '+$e->getMessage();
    echo json_encode($response);
}
?>