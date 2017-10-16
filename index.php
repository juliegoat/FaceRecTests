<?php

require "keys.php";
$appid = $APP_ID;
$appkey = $APP_KEY;

function addToGallery($appid, $appkey){
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.kairos.com/enroll");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_POST, TRUE);

curl_setopt($ch, CURLOPT_POSTFIELDS, "{
  \"image\": \"https://instagram.fbed1-1.fna.fbcdn.net/t51.2885-15/e35/21147746_682396738616229_3863412680064761856_n.jpg\",
  \"subject_id\": \"Julie\",
  \"gallery_name\": \"MyGallery\"
}");

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Content-Type: application/json",
  "app_id: " . $appid,
  "app_key: " . $appkey
));

$response = curl_exec($ch);
curl_close($ch);

echo "app_id: " . $appid;

var_dump($response);
}

function checkMyFace($appid, $appkey){
	$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.kairos.com/recognize");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_POST, TRUE);

curl_setopt($ch, CURLOPT_POSTFIELDS, "{
  \"image\": \"https://instagram.fbed1-1.fna.fbcdn.net/t51.2885-15/e35/21373299_298578087286074_3250063767915986944_n.jpg\",
  \"gallery_name\": \"MyGallery\"
}");

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Content-Type: application/json",
  "app_id: ".$appid,
  "app_key: ".$appkey
));

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);
}


addToGallery($appid, $appkey);
checkMyFace($appid, $appkey);

?>