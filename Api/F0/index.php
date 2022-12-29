<?php
/*
vstup http://localhost/my-app/Api/$n=42
*/
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);
$number = filter_input(INPUT_GET, 'n', FILTER_VALIDATE_FLOAT);
if($number === null) {
    reply(["error" => "no Number"]);
}
if($number === false) {
    reply(["error" => "not a Number"]);
}
reply(["result" => $number * 2]);


function reply(array $data)
{
    echo json_encode($data);
    exit;
}
?>