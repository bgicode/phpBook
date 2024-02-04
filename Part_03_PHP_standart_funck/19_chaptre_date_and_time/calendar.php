<?php ## Календарь на текущий месяц
// Функция формирует двумерный массив, представляющий собой
// календарь на указанный месяц и год. Массив состоит из строк,
// соответствующих неделям. Каждая строка - массив из семи
// элементов, которые равны числам (или пустой строке, если
// данная клетка календаря пуста).
function makeCal($year, $month) {
    // Получаем номер дня недели для 1 числа месяца.
    $wday = date('N');
    // Начинаем с этого числа в месяце (если меньше нуля
    // или больше длины месяца, тогда в календаре будет пропуск).
    $n = - ($wday - 2);
    $cal = [];
    // Цикл по строкам.
    for ($y = 0; $y < 6; $y++) {
        // Будущая строка. Вначале пуста.
        $row = [];
        $notEmpty = false;
        // Цикл внутри строки по дням недели.
        for ($x = 0; $x < 7; $x++, $n++) {
            // Текущее число > 0 и < длины месяца?
            if (checkdate($month, $n, $year)) {
                // Да. Заполняем клетку.
                $row[] = $n;
                $notEmpty = true;
            } else {
                // Нет. Клетка пуста.
                $row[] = "";
            }
        }
        // Если в данной строке нет ни одного непустого элемента,
        // значит, месяц кончился.
        if (!$notEmpty) break;
        // Добавляем строку в массив.
        $cal[] = $row;
    }
    return $cal;
}
// Формируем календарь на текущий месяц.
$now = getdate();
$cal = makeCal($now['year'], $now['mon'] - 1);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Использование функции strtotime()</title>
    <meta charset='utf-8'>
</head>
<body>
    <table border='1'>
    <tr>
        <td>Пн</td>
        <td>Вт</td>
        <td>Ср</td>
        <td>Чт</td>
        <td>Пт</td>
        <td>Сб</td>
        <td style="color:red">Вс</td>
    </tr>
    <!-- цикл по строкам -->
    <?php foreach ($cal as $row) {?>
        <tr>
        <!-- цикл по столбам -->
            <?php foreach ($row as $i => $v) {?>
                <!-- воскресенье - "красный" день -->
                <td style="<?= $i == 6 ? 'color:red' : '' ?>">
                <?= $v ? $v : "&nbsp;" ?>
                </td>
            <?php } ?>
        </tr>
    <?php } ?>
    </table>
</body>
</html>