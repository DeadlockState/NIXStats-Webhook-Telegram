<?php
// https://www.domoticz.com/wiki/PHP:_Send_notifications
function telegram($message)
{
	global $telegrambot, $telegramchatid;
	$url = 'https://api.telegram.org/bot'.$telegrambot.'/sendMessage';
	$data = array('chat_id' => $telegramchatid, 'text' => $message, 'disable_web_page_preview' => 1);
	$options = array('http' => array('method' => 'POST', 'header' => "Content-Type:application/x-www-form-urlencoded\r\n", 'content' => http_build_query($data)));
	$context = stream_context_create($options);
	$result = file_get_contents($url, false, $context);
	return $result;
}
?>
