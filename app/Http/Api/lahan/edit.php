<?php
try{
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');

    include "connectDb.php";
    $id= $_POST['id'];
    $nama_lahan = $POST['nama_lahan'];
    $detail_lokasi = $POST['detail_lokasi'];
    $luas = $POST['luas'];
    $latitude = $POST['latitude'];
    $longitude = $POST['longitude'];
    $status = $POST['status'];

    $sql = "UPDATE `lahan` SET nama_lahan = '$nama_lahan', detail_lokasi = '$detail_lokasi', luas = '$luas', latitude = '$latitude', longitude = '$longitude', status = '$status' WHERE id = '$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $response['success'] = 'Informasi Lahan berhasil diperbarui.';
    echo json_encode($response);    
    
}catch(PDOException $e){
    $response['error'] =  'Database error: '+$e->getMessage();
    echo json_encode($response);
}
?>