<?php 
$hostname = "localhost";
$username = "id20163157_root";
$password = "Zenfonix191021!";
$database = "id20163157_sistem_ketertelusuran_beras";

try{
    $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    // set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    // echo "Koneksi Berhasil";
}catch(PDOException $e){
    $response['error'] = 'Koneksi gagal';
            echo json_encode($response);
}

?>