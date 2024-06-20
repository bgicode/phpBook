<?php ## Использование метода PDO::exec()
require_once('connect_db.php');
// Формируем и выполняем SQL-запрос
    $query = "CREATE TABLE catalogs (
    catalog_id INT(11) NOT NULL AUTO_INCREMENT,
    name TINYTEXT NOT NULL,
    PRIMARY KEY (catalog_id))";
    $count = $pdo->exec($query);
    if ($count !== false)
    echo "Таблица создана успешно";
    else {
    echo "Не удалось создать таблицу";
    echo "<pre>";
    print_r($pdo->errorInfo());
    echo "<pre>";
    }
?>