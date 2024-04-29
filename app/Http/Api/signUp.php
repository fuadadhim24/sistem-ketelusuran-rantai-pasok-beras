<?php
    try{
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');

        include 'connectDb.php';
        $email = $_POST['email'];
        $name = $_POST['name'];
        $password = $_POST['password'];

        //get nama file
        $profilePhotoPath = $_FILES['profile_photo_path']['name'];

        //upload foto ke direktori
        $targetDir = "https://17januari23.000webhostapp.com/public/asset/img/profile_photo/";

        if (move_uploaded_file($_FILES["profile_photo_path"]["tmp_name"], $uploadPath)) {
            // Jika berhasil diupload, hash password dan masukkan data ke database
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`email`,`name`,`password`,`profile_photo_path`) VALUES ('$email', '$name', '$hashedPassword','$profilePhotoPath')";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $response['success'] = 'File berhasil diupload dan data berhasil disimpan.';
            echo json_encode($response);
        } else {
            $response['error'] = 'File gagal diupload.';
            echo json_encode($response);
        }

    }catch(PDOException $e){
        $response['error'] = 'Database error:'.$e->getMessage();
        echo json_encode($response);
    }

?>