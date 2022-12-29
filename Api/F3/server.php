<?php
header('content-type: application/json; charset = utf-8');


$param = explode("/",str_replace("http://localhost/my-app/Api/F3", "",
$_SERVER['REQUEST_URI']));

$oper = array_shift($param);
echo json_encode(
    [
        "oper" => $oper,
        "post" = json_decode(file_get_contents('Api://input'), true)
    ]
    );
?>