<?php

const ONE_HUNDRED_RANDOM_NUMBERS = [-14, -14, -38, 93, -57, 2, -68, -53, - 16,
-58, -57, -4, 23, -92, 97, -90, 68, -31, 87, 45, -48, -26, -44, - 28, 53, -26,
35, 96, 8, -16, -38, 44, 69, 23, 37, -74, -74, 69, -41, 9 , -89, 2, -94, 34,
10, -96, 43, -21, -28, 31, -76, 24, -95, -21, 95, 58, 53, 31, 54, -39, -85,
-83, -95, 84, 40, 42, 97, 11, 11, 11, -25, 22, 58, -19, -44, -32, -16, 99,
47, 56, 30, 70, -19, 34, -50, -24, -7,  -97, -92, -53, -36, -78, -36, -32,
-94, -96, -90, -97, 21, 21];
$k = 0;
// показ массива по 10 чисел в строку
for ($i=0; $i<100; $i++) {
    echo ONE_HUNDRED_RANDOM_NUMBERS[$i] . ' | ';
    if (($i % 10 == 0) && ($i > 0)) {
        echo '<br>';
    }
}
// подсчёт количества пар идущих подряд одиновых чисел
for ($i=0; $i<100; $i++) {
    if ((ONE_HUNDRED_RANDOM_NUMBERS[$i] == ONE_HUNDRED_RANDOM_NUMBERS[$i+1]) &&
    ($i < 99)) {
        $k++;
    }
}
echo '<p> Количество пар идущих подряд одиновых чисел: ' . $k;
