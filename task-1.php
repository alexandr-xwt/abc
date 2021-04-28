<?php

$a = 'Группа инженеров из Национального центра научных исследований Франции и Массачусетского технологического института изготовила опытный образец бетона, который может проводить ток и нагреваться. Выяснилось, что если добавить в жидкий бетон углерод в определенной форме, то после застывания он становится проводником электричества. Для эксперимента был выбран нанокарбон – дешевый в производстве углеродный материал с отличной проводимостью. Оказалось, что достаточно добавить всего 4% нанокарбона в бетонную смесь, чтобы материал начал проводить ток и вырабатывать тепло. Причем процесс получился очень эффективным: напряжения всего в 5 вольт хватало, чтобы поверхность образца нагрелась с комнатной температуры до 41°C.';
$link = 'https://radiovesti.ru/brand/60950/episode/2530336/';
// crop to 180 symb
$b = mb_substr($a,0,180,'UTF-8');
// add ...
$b = $b . '...';
// delete: word word ...
$spacePosition = mb_strrpos($b, ' ', 'UTF-8'); 
$textCropToSpacePosition = mb_substr($b, 0, $spacePosition, 'UTF-8'); 
$spacePosition = mb_strrpos($textCropToSpacePosition, ' ', 'UTF-8'); 
$textCropToSpacePosition = mb_substr($textCropToSpacePosition, 0, $spacePosition, 'UTF-8'); 
$spacePosition = mb_strrpos($textCropToSpacePosition, ' ', 'UTF-8'); 
$textCropToSpacePosition = mb_substr($textCropToSpacePosition, 0, $spacePosition, 'UTF-8'); 
// show: word word ...
$textLinkWords = mb_substr($b,$spacePosition,183,'UTF-8');
// create link
$textLink = "<a href=$link>$textLinkWords</a>";
// 
$text = $textCropToSpacePosition . $textLink;
echo $text;