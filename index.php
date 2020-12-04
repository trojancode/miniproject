<?php

include_once('./include/db.php');

$res = mysqli_query($conn,"SELECT * FROM users");

echo json_encode(mysqli_fetch_array($res));

?>