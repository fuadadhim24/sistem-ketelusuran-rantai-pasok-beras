<?php
try{
    
    
}catch(PDOException $e){
    $response['error'] =  'Database error: '+$e->getMessage();
    echo json_encode($response);
}
?>