<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'http://203.151.143.172/Json/gen_json1.php');
$result = curl_exec($ch);
curl_close($ch);

$obj = json_decode($result);
echo $obj->id;
?>