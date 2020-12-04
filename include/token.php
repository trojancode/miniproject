<?php

function generateToken($id){
    include("db.php");
    $res = mysqli_query($conn,"SELECT * FROM users  where id = '$id'");

    if(!$res->num_rows>0){
        echo "User not found";
        exit();
    }

    $res = mysqli_fetch_assoc($res);
    $hash = hash('md5',$res['email'].$res['name'].$id);

    return $hash;
}

function verifyToken(){
    $token = apache_request_headers()['Authorization'];
    $id = apache_request_headers()['user'];
    $hash = generateToken($id);

    if($hash === $token){
        return true;
    }else{
        echo "Invalid Token";
        exit();
      return false;
    }
}

?>
