<?php

include_once('./include/jsonResponse.php');
include_once('./include/token.php');
include_once('./include/methods.php');

// convertJsonFromQuery("SELECT * FROM users"); 
function test(){

    echo " test 1 r";
    return true;

}

get(["verifyToken","test",function(){

    echo " test 2";

}]);

put([function(){
    echo generateToken(1);
}]);

?>