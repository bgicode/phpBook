<?php ## Пример второй
// Найти в тексте адрес E-mail. \S означает "не пробел", а [a-z0-9.]+ -
// "любое число букв, цифр или точек". Модификатор 'i' после '/'
// заставляет PHP не учитывать регистр букв при поиске совпадений.
// Модификатор 's', стоящий рядом с 'i', говорит, что мы работаем
// в "однострочном режиме" (см. ниже в этой главе).
preg_match('/(\S+)@([a-z0-9.]+)/is', "Привет от somebody@mail.ru!", $m);
// Имя хоста будет в $m[2], а имя ящика (до @) - в $m[1].
echo "В тексте найдено: ящик - $m[1], хост - $m[2]";
?>