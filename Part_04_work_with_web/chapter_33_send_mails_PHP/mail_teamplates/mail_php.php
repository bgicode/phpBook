<?php ## Отправка почты с использованием активного шаблона
// Подключаем функции
include_once "mailx.php";
include_once "mailenc.php";
include_once "template.php";
$text = "Well, now, ain't this a surprise?";
$tos = ["Пупкин Василий <poupkinne@mail.ru>"];
$a = 1;
foreach ($tos as $to) {
    // "Разворачиваем" шаблон, передавая ему $to и $text
    $mail = template("mail.php.eml", [
    "to" => $to,
    "text" => $text,
    ]);
    // Дальше как обычно: кодируем и отправляем
    $mail = mailenc($mail);
    mailx($mail);
}
?>