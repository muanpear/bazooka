<?php
	$ch1 = curl_init();
            curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch1, CURLOPT_URL, 'https://bazooka1.herokuapp.com/x.json');
            $result1 = curl_exec($ch1);
            curl_close($ch1);
            
            $obj = json_decode($result1, true);
            // print_r($obj);
           echo $obj['humidity'];
?>