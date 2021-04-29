<?php

header('Content-type: image/jpeg');

$w_sour = 800;
$h_sour = 800;
$w_dest = 200;
$h_dest = 100;

// Создание изображений
$im_sour = imagecreate($w_sour, $h_sour);
$im_dest = imagecreatetruecolor($w_dest, $h_dest);

// Серый фон
$im_sour_bg = imagecolorallocate($im_sour, 160, 160, 160);

// palette to true color
imagepalettetotruecolor($im_sour);

// Изменение размеров
// imagecopyresampled($im_dest, $im_sour, 0, 0, 0, 0, $w_dest, $h_dest, $w_sour, $h_sour);
// Вывод изображения на экран
imagejpeg($im_sour);
// Освобождение памяти
imagedestroy($im_sour, $im_dest, $im_sour_tmp);