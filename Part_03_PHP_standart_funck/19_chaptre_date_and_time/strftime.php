<?php ## Использование strftime()
    // Активизируем текущую локаль (иначе дата будет на английском)
    setlocale(LC_ALL, 'ru_RU.utf8');
    // Выводим 2 предложения
    echo strftime("%B %Y года, %d число. Был %A, часы показывали %H:%M.");
?>