<?php
$result = 0;
$operation = filter_input(INPUT_GET, 'operation');
$num1 = filter_input(INPUT_GET, 'num1');
$num2 = filter_input(INPUT_GET, 'num2');

//operations
if($operation == "add"){
    $num1 + $num2;
    json_encode(["result" => $result]);
}
if($operation == "sub"){
    $num1 - $num2;
    json_encode(["result" => $result]);
}
if($operation == "multi"){
    $num1 * $num2;
    json_encode(["result" => $result]);
}
if($operation == "divid"){
    $num1 / $num2;
    json_encode(["result" => $result]);
}

//error
if($num1 != is_numeric($num1) || $num2 != is_numeric($num2)){
    echo json_encode(["error" => "not a number"]);
}
?>

