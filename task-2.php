<?php

// Создание изображения 20000*20000
// $im = imagecreate(20000, 20000);
// Создание изображения 800*800
$im = imagecreate(800, 800);
// Первый вызов: серый фон
$bg = imagecolorallocate($im, 160, 160, 160);
// Сохранение изображения
// header('Content-type: image/png');
imagepng($im, __DIR__ . '/image.png');
imagedestroy($im);