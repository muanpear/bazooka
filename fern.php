<?php
// $json = file_get_contents('https://www.hotmail.com');
// print_r($json);
$json_url = "x.json";
$json = file_get_contents($json_url);
$data = json_decode($json, TRUE);
echo "<pre>";
print_r($data);
echo "</pre>";
?>