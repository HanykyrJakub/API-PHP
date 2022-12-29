<?php
echo "this is it";
echo $_SERVER['HTTP_HOST'].
    $_SERVER['REQUEST_URI'];


    $param = str_replace("php/math-api/f2","",$_SERVER['REQUEST_URI']);
    $oper = array_shift($param);
    var_dump($oper, $param);
    var_dump(explode("/", $param));