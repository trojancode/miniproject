<?php

include_once('./include/db.php');

$res = mysqli_query($conn,"SELECT * FROM users");

$arr=[];

while ($row = mysqli_fetch_assoc($res)) {
    array_push($arr,$row);
}

echo json_encode($arr);

?>