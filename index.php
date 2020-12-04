<?php

include_once('./include/jsonResponse.php');
include_once('./include/token.php');
include_once('./include/methods.php');

// convertJsonFromQuery("SELECT * FROM users"); 

get([verifyToken()],function(){

    $token = generateToken(1);

    echo $token;
});


put([verifyToken()],function(){

    echo "PUT";
});

?>