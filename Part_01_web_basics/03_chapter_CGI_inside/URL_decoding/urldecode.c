// Функция URL-декодирования.
// Функция преобразует строку данных st в нормальное представление.
// Результат помещается в ту же строку, что была передана в параметрах.
void url_decode(char *st) {
    char *p = st; // указывает на текущий символ строки
    char hex[3];
    // временный буфер для хранения %XX
    int code;
    // преобразованный код
    // Запускаем цикл, пока не кончится строка (т. е. пока
    // не появится символ с кодом 0, см. ниже)
    do {
        // Если это %-код ...
        if(*st == '%') { // тогда копируем его во временный буфер
            hex[0] = *(++st);
            hex[1] = *(++st);
            hex[2] = 0;
            // Переводим его в число
            sscanf(hex, "%X", &code);
            // и записываем обратно в строку
            *p++ = (char)code;
            // Указатель p всегда отмечает то место в строке, в которое
            // будет помещен очередной декодированный символ
        }
        // Иначе, если это "+", то заменяем его на " "
        else if(*st == '+') *p++ = ' ';
        // А если ни то, ни другое - оставляем, как есть
        else *p++ = *st;
    } while(*st++ != 0); // пока не найдем нулевой код
}
