<?php ## Соединение с memcached
error_reporting(E_ALL);
ini_set("display_errors", 1);
    $m = new Memcached();
    $m->addServer('localhost', 11211);
?>