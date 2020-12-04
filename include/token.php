<?php

function generateToken($id){
    include("db.php");
    $res = mysqli_query($conn,"SELECT * FROM users  where id = '$id'");
    $res = mysqli_fetch_assoc($res);
    
    $hash = hash('md5',$res['email'].$res['name']);

    return $hash;
}

function verifyToken(){
    $token = apache_request_headers()['Authorization'];
    $id = apache_request_headers()['user'];
    $hash = generateToken($id);

    if($hash == $token){
        echo "Access Approved";
        return true;
    }else{
      echo "Access denied";
      return false;
      exit();
    }
}

?>
