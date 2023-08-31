<?php
ini_set("SMTP", "smtp.example.com"); // Замените на адрес вашего SMTP-сервера
ini_set("smtp_port", 587); // Замените на порт вашего SMTP-сервера

$login = $_POST['login'];
$tel = $_POST['number'];
$text = $_POST['text'];

$login = htmlspecialchars($login);
$tel = htmlspecialchars($tel);
$text = htmlspecialchars($text);

$login = urldecode($login);
$tel = urldecode($tel);
$text = urldecode($text);

$login = trim($login);
$tel = trim($tel);
$text = trim($text);


if(mail(
  "Zink.sergei97@gmail.com",
  "Новое письмо с сайта",
  "Имя: ".$login."\n".
  "Номер телефона: ".$tel."\n".
  "Сообщение: ".$text."\n",
  "From: no-reply@mydomain.ru \r\n")
)
{
  echo "Письмо успешно отправлено!";
}
else {
  echo "Есть ошибки! Проверьте данные...";
}


?>