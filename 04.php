<?php
$s = 2;
switch ($s) {
    case 1:
        print("Валера");
        break;
    case 2:
        print("Павлик");
    case 3:
        print("youtube");
    default: print("По умолчанию");
}

// PHP исполняет оператор с case 2 тк указан switch(2) ($a=2). Если установить switch(1), будет выведена
// надпись Валера, т.к. после case 1 установлен break (прекращение выполнения оператора). При $s = 3
// будет выведено youtubeПо умолчанию. При любых других значениях будет выведена надпись По умолчанию.
?>
