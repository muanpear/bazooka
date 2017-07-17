<?php
$access_token = 'uveGNsUg/o/uC4HfPl8hFchxJHR4ck8iBfO7G6hPF1A+TJL12aJZX9MitNeb4e0aTHvKSvNWGdszguf2S3ay2tjGa35+t3MHXwe7ACL+Zwm0CQllY3j0JsXwn3eAD6qimxSf2sxMo2672wGpWuXQXgdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];

			// Build message to reply back
			if($text == "wow"){
				$ch1 = curl_init();
            curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch1, CURLOPT_URL, 'http://203.151.143.172/Json/gen_json1.php');
            $result1 = curl_exec($ch1);
            curl_close($ch1);
            
            $obj = json_decode($result1, true);
            if(isset($obj['id'])){
                $result_text = $obj['humidity'];
            }else{//ถ้าไม่เจอกับตอบกลับว่าไม่พบข้อมูล
                $result_text = 'ไม่พบข้อมูล';
            }
            
            $text = $result_text;
			}else{
				$text = 'love u';
			}
			$messages = [
				'type' => 'text',
				'text' => $text
			];

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
		}
	}
}
echo "OK";