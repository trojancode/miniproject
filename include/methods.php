<?php

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