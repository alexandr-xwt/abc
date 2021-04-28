<?php

// Создание изображения 20000*20000 
$im = imagecreate(20000, 20000);

// Серый фон
$bg = imagecolorallocate($im, 160, 160, 160);

// Вывод изображения
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);