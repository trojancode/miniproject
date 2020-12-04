<?php

include_once('./include/jsonResponse.php');
include_once('./include/token.php');

// convertJsonFromQuery("SELECT * FROM users"); 

 $token = generateToken(1);

 echo $token;

 verifyToken();

?>