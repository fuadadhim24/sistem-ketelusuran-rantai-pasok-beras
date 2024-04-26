<?php 
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$database = "sistem-ketertelusuran-rantai-pasok-beras";

try{
    $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    // set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    // echo "Koneksi Berhasil";
}catch(PDOException $e){
    die("Koneksi gagal\n" . $e);
}

?>