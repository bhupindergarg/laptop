<?php
$get = explode("?code=",$_SERVER['REQUEST_URI']);
$ch = curl_init();

$geturl ="https://graph.facebook.com/oauth/access_token?client_id=436565146478503&redirect_uri=https://www.facebook.com/dialog/oauth?client_id=436565146478503&redirect_uri=https://www.laptopgallery.0fees.us/facebook.php&client_secret=cce3b44097748c8f6699296b73b60690&code=$get[1]";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $geturl);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$userdata = curl_exec($ch);
curl_close($ch);

$accesstoken = explode('&',$userdata);
print_r($accesstoken);die;
$Input_token = explode('=',$accesstoken[0]);
$ch = curl_init();
$geturl = "https://graph.facebook.com/me?access_token=$Input_token[1]";			
curl_setopt($ch, CURLOPT_URL, $geturl);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$userdata1 = curl_exec($ch);			
curl_close($ch);
$json = json_decode($userdata1, true);
print_r($json);
?>
