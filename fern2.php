<?php
$db_config=array(
    "host"=>"203.151.143.164",
    "user"=>"root",
    "pass"=>"noconly",
    "dbname"=>"line",
    "charset"=>"utf8"
);
$mysqli = @new mysqli($db_config["host"], $db_config["user"], $db_config["pass"], $db_config["dbname"]);
$mysqli->set_charset($db_config["charset"]);
if(mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
    exit;
}

$result = $mysqli->query("SELECT * FROM `device_type`");
$data = $result->fetch_assoc();
echo $data['deviceTypeName'];
?>