<?php
 
$botToken = "290594247:AAEslzY2cIcKqJlayDsyce8YHqkUTGx87TM";
$website = "https://api.telegram.org/bot".$botToken;
 
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
 
 
$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];
 
 
switch($message) {
       
        case "/hola":
                sendMessage($chatId, "Ola amiguitos");
                break;
        default:
                sendMessage($chatId, "Que coño dise usté");
       
}
 
function sendMessage ($chatId, $message) {
       
        $url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
        file_get_contents($url);
       
}
 
 
 
 
 
?>