<?php ## Использование класса DateTimeZone
    $date = new DateTime();
    $timezone = new DateTimeZone("Europe/Moscow");
    $date->setTimezone($timezone);
    echo $date->format("d-m-Y H:i:s")
?>