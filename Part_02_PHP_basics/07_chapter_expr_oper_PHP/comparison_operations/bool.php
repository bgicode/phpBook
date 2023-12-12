<?php ## Логические переменные
    $hundred = 100;
    if ($hundred == 1) echo "хм, странно... переменная равна 1!<br />";
    if ($hundred == true) echo "переменная истинна!<br />";
    if ("" == 0) echo "совпадение!";//в PHP 8 возврвщает false https://www.php.net/manual/ru/migration80.incompatible.php
    if ("Universe" == 0) echo "совпадение!";//в PHP 8 возврвщает false
?>