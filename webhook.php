<?php
$telegrambot = "123456789:SCR8NwQtqFoD3dPSmu99z8um8vN8jfQNYps";
$telegramchatid = "12345678";
$timezone = 2; // 2 for UTC+2

include("functions/telegram.php");

if(isset($_POST['payload']))
{
	$data = json_decode($_POST['payload'], true);

	if(empty($data['domain_id']))
	{
		$server_id = $data['server_id'];
		$notification_id = $data['notification_id'];
		$alert_id = $data['alert_id'];
		$server_name = $data['server_name'];
		$metric = $data['metric'];
		$status = $data['status'];
		$value = $data['value'];
		$subject = $data['subject'];
		$threshold = $data['threshold'];
		$start_time = date('Y-m-d H:i:s', $data['start_time']+($timezone*3600));
		$time = date('Y-m-d H:i:s', $data['time']+($timezone*3600));
		
		if($status == "open")
		{
			telegram($subject."\n".$start_time."\nView server statistics on https://nixstats.com/server/".$server_id);
		}
		else
		{
			telegram($subject."\n".$time."\nView server statistics on https://nixstats.com/server/".$server_id);
		}
	}
	else
	{
		$domain_id = $data['domain_id'];
		$notification_id = $data['notification_id'];
		$name = $data['name'];
		$status = strtoupper($data['status']);
		$subject = str_replace('Monitor', 'domain', $data['subject']);
		$start_time = date('Y-m-d H:i:s', $data['start_time']+($timezone*3600));
		$end_time = $data['end_time'];
		$time = date('Y-m-d H:i:s', $data['time']+($timezone*3600));
		
		if($status == "OPEN")
		{
			telegram($status." - ".$name." ".$subject."\n".$start_time."\nView domain statistics on https://nixstats.com/domain/".$domain_id);
		}
		else
		{
			telegram($status." - ".$name." ".$subject."\n".$time."\nView domain statistics on https://nixstats.com/domain/".$domain_id);
		}
	}
}
