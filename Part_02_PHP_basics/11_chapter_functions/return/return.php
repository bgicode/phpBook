<?php ## Возврат массива
    function silly() {
        return [1, 2, 3];
    }
    // Присваивает массиву значение array(1,2,3)
    $arr = Silly();
    var_dump($arr); // выводим массив
    // Присваивает переменным $a, $b, $c первые значения из списка
    list ($a, $b, $c) = Silly();
    // Допустимо, начиная с PHP 5.4
    echo Silly()[2]; // 3
?>