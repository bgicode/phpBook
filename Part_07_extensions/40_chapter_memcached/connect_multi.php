<?php ## Соединение с memcached-серверами
$m = new Memcached();
$m->addServers([
    ['localhost', 11211, 10],
    ['localhost', 11212, 10],
]);
?>