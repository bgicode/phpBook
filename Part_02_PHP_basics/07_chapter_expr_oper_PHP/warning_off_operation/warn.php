<!-- Навязчивые предупреждения -->
<form action="warn.php">
    <input type="submit" name="doGo" value="Click!">
</form>
<?php
    //php8 по умолчанию отключен вывод ошибок
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    // В массиве $_REQUEST всегда содержатся пришедшие из формы данные.
    if ($_REQUEST['doGo']) echo "Вы нажали кнопку!";    
?>