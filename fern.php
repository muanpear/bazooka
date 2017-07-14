<?php
//print_r(file_get_contents("http://172.20.20.225/Json/gen_json1.php"));

$json = file_get_contents('http://203.151.143.172/Json/gen_json1.php');
$obj = json_decode($json);
echo $obj->id;
?>