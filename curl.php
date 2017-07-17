<?php
	// $ch1 = curl_init();
 //            curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
 //            curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
 //            curl_setopt($ch1, CURLOPT_URL, 'http://www.google.co.th');
 //            $result1 = curl_exec($ch1);
 //            curl_close($ch1);
            
 //            $obj = json_decode($result1, true);
 //            print_r($obj);
           // echo $obj['humidity'];
          $json = file_get_contents('http://203.151.143.173:8080/app/index.php');
print_r($json);
?>