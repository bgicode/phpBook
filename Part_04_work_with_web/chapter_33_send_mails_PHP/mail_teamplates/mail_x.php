<?php ## Отправка почты по шаблону (без кодирования)
// Подключаем функцию mailx() (см. ниже)
include_once "mailx.php";
// Этот текст может быть получен, например, из базы данных
// либо являться сообщением форума или гостевой книги
$text = "Cookies need love like everything does.";
// Получатели письма
$tos = ["bgdesigner@yandex.ru", "ggggg@1792-test2.mailsnag.io"];
// Считываем шаблон
$tpl = file_get_contents("mail.eml");
// Отправляем письма в цикле по получателям
foreach ($tos as $to) {
// Заменяем элементы шаблона
$mail = $tpl;
$mail = strtr($mail, [
"{TO}" => $to,
"{TEXT}" => $text,
]);
// Вызываем mailx(), включенную из файла
mailx($mail);
}
?>