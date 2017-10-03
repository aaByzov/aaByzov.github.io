<?php

//    curl -d "url=https://aabyzov.github.io/telegram.php" https://api.telegram.org/bot358045049:AAGbgfN-zrDba4m4K8NybufflR63RyHvuOg/setWebhook
    
    $ip = (isset($_SERVER['REMOTE_ADDR']))?$_SERVER['REMOTE_ADDR']:0;
    $userAgent = (isset($_SERVER['HTTP_USER_AGENT']))?$_SERVER['HTTP_USER_AGENT']:0;
    echo $ip.'<br/>'.$userAgent.'<br/>';

    $botToken = "358045049:AAGbgfN-zrDba4m4K8NybufflR63RyHvuOg";
    $website = "https://api.telegram.org/bot".$botToken;
//    
//    $content = file_get_contents("php://input");
//    $update = json_decode($content, TRUE);
//    $message = $update["message"];
//    $chatId = $message["chat"]["id"];
    $chatId = "200172853";
//    $text = $message["text"];
    
//    echo $text;
    echo 'OK<br/>';
    
    $welcomemessage = 'Welcome!!!';
    file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$welcomemessage);
?>