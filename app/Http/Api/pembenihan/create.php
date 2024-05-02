<?php
try{
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');

    include "connectDb.php";
    $nama_lahan = $POST['nama_lahan'];
    $detail_lokasi = $POST['detail_lokasi'];
    $luas = $POST['luas'];
    $latitude = $POST['latitude'];
    $longitude = $POST['longitude'];
    $status = $POST['status'];

    $sql = "INSERT INTO `lahan` (`nama_lahan`,`detail_lokasi`,`luas`,`latitude`,`longitude`,`status`) VALUES ('$nama_lahan', '$detail_lokasi', '$luas','$latitude','$longitude','$status')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $response['success'] = 'Pembenihan berhasil disimpan.';
    echo json_encode($response);    
    
}catch(PDOException $e){
    $response['error'] =  'Database error: '+$e->getMessage();
    echo json_encode($response);
}
?>