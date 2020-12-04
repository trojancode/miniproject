<?php

function post($func){
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        foreach ($func as $key => $value) {
            if(!$value()){
                exit();
            }
        }
    }
}

function getM($func){
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        foreach ($func as $key => $value) {
            try {
                if($value()===false){
                    exit();
                }
            } catch (Throwable $th) {
                if($value===false){
                    echo "exit throw";
                    exit();
                }
            }
        }
    }
}

function get($func){
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        foreach ($func as $key => $value) {
            if(!$value()){
                exit();
            }
        }
    }
}

function put($func){
    if($_SERVER['REQUEST_METHOD'] === 'PUT'){
        foreach ($func as $key => $value) {
            if(!$value()){
                exit();
            }
        }
    }
}
?>