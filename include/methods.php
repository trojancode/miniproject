<?php

function post($func,$controller){
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        foreach ($func as $key => $value) {
            if(!$value){
                exit();
            }
        }
        $controller();
    }
}

function get($func,$controller){
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        foreach ($func as $key => $value) {
            if(!$value){
                exit();
            }
        }
        $controller();
    }
}

function put($func,$controller){
    if($_SERVER['REQUEST_METHOD'] === 'PUT'){
        foreach ($func as $key => $value) {
            if(!$value){
                exit();
            }
        }
        $controller();
    }
}
?>