<?php
switch(1) {
    case 1: print("Книга");
    case 2: print("Автор");
    default: print("Книга не найдена");
}

// PHP исполнит все операторы тк указан switch(1). Если установить switch(0), будет выведена
// последная надпись Книга не найдена. Если установить switch(2), php исполнит оператор с case 2.

?>
