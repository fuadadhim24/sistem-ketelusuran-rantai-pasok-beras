<?php
    try{
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
    
        include "connectDb.php";
        $email = $_GET['email'];
        $password = $_GET['password'];
        
        // echo json_encode($email.' '.$password);
        
    
        // Gunakan parameterized query untuk mencegah SQL injection
        $sql = "SELECT * FROM users WHERE email='$email'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

    
        if($stmt->rowCount() > 0){
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // verifikasi password
            if(password_verify($password,$user['password'])){
                $response['data'] = $user;
                echo json_encode($response);
            }else{
                $response['error']='Password salah';
                echo json_encode($response);
            }
        }else{
            $response['error'] = 'Data tidak ditemukan';
            echo json_encode($response);
        }
    
    }catch(PDOException $e){
        $response['error'] = 'Database error: '.$e->getMessage();
        echo json_encode($response);
    } 
?>
