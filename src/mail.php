<?php
  if (isset($_POST['subj'])) {$subj = $_POST['subj'];}
	if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
	if (isset($_POST['name'])) {$name = $_POST['name'];}
	if (isset($_POST['email'])) {$clientemail = $_POST['email'];}
	if (isset($_POST['message'])) {$message = $_POST['message'];}



$emailsender = 'form@bt-l.ru';


$to  = "zokrat@yandex.ru" ;
// $to .= ", zokrat@yandex.ru";


// $mes = "Тема: Заказ обратного звонка с сайта!\nТелефон: $phone\n";
$mes = "Тема: $subj\nТелефон: $phone\nИмя: $name\nE-mail: $clientemail\nСообщение: $message";
$sub='Сообщение или заказ звонка с сайта'; //сабж

$send = mail ($to,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$emailsender");

ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');
?>

