<?php

function convertJsonFromQuery($Query){
    include_once('db.php');
    $res = mysqli_query($conn,$Query);
    $arr=[];
    while ($row = mysqli_fetch_assoc($res)) {
        array_push($arr,$row);
    }
    echo json_encode($arr);
}



?>