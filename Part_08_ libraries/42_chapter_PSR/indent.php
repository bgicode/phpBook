<?php ## Отступы - 4 пробела
    function tabber($spaces, $echo, ...$planets)
    {
    // Подготавливаем аргументы для myecho()
        $new = [];
        foreach ($planets as $planet)
        {
            $new[] = str_repeat("&nbsp;", $spaces).$planet;
        }
        // Пользовательский вывод задается извне
        $echo(...$new);
    }
    