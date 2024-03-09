<?php ## Применение preg_grep()
$ar = preg_grep('/ex\d/s', glob(__DIR__ . '/*'));
foreach ($ar as $fn) {
    echo "Файл примера: $fn<br />";
}
