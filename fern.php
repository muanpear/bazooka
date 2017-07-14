<?php
// $json = file_get_contents('https://www.hotmail.com');
// print_r($json);
$json_url = "https://203.151.143.172/Json/gen_json1.php";
$json = file_get_contents($json_url);
$data = json_decode($json, TRUE);
echo "<pre>";
print_r($data);
echo "</pre>";
?>