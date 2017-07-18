<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php
	$ch1 = curl_init();
            curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch1, CURLOPT_URL, 'https://5c87e744.ngrok.io/');
            $result1 = curl_exec($ch1);
            curl_close($ch1);
            
           //  $obj = json_decode($result1, true);
           //  print_r($obj);
           // echo $obj['humidity'];
           print_r($result1);
//           $json = file_get_contents('http://203.151.143.172/Json/gen_json1.php');
// print_r($json);
?>
	
</body>
</html>