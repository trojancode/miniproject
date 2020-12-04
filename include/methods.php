<?php

function postM($func){
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        foreach ($func as $key => $value) {
            if(!$value()){
                exit();
            }
        }
    }
}


function post($func){
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $func();
    }
}

function get($func){
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $func();
    }
}

function put($func){
    if($_SERVER['REQUEST_METHOD'] === 'PUT'){
        $func();
    }
}
?>