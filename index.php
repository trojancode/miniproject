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


postM([function(){

    echo "POST m";
    return true;
},function(){

    echo "POST 1";
    return false;
},function(){

    echo "POST 3";
    return true;
},]);


put(function(){

    echo "PUT";
});

?>