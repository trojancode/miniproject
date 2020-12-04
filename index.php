<?php

include_once('./include/jsonResponse.php');
include_once('./include/token.php');
include_once('./include/methods.php');

// convertJsonFromQuery("SELECT * FROM users"); 

get(function(){

    $token = generateToken(1);

    echo $token;
   
    verifyToken();
});


post(function(){

    echo "POST";
});


put(function(){

    echo "PUT";
});

?>