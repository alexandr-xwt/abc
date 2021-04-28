<?php

$a = 'Группа инженеров из Национального центра научных исследований Франции и Массачусетского технологического института изготовила опытный образец бетона, который может проводить ток и нагреваться. Выяснилось, что если добавить в жидкий бетон углерод в определенной форме, то после застывания он становится проводником электричества. Для эксперимента был выбран нанокарбон – дешевый в производстве углеродный материал с отличной проводимостью. Оказалось, что достаточно добавить всего 4% нанокарбона в бетонную смесь, чтобы материал начал проводить ток и вырабатывать тепло. Причем процесс получился очень эффективным: напряжения всего в 5 вольт хватало, чтобы поверхность образца нагрелась с комнатной температуры до 41°C.';
$link = 'https://radiovesti.ru/brand/60950/episode/2530336/';
// crop to 180 symb
$b = mb_substr($a,0,180,'UTF-8');
// add ...
$b = $b . '...';
// delete: word word ...
$space_position = mb_strrpos($b, ' ', 'UTF-8'); 
$crop_to_space_position = mb_substr($b, 0, $space_position, 'UTF-8'); 
$space_position = mb_strrpos($s, ' ', 'UTF-8'); 
$crop_to_space_position = mb_substr($s, 0, $space_position, 'UTF-8'); 
$space_position = mb_strrpos($s, ' ', 'UTF-8'); 
$crop_to_space_position = mb_substr($s, 0, $space_position, 'UTF-8'); 
// show: word word ...
$text__link__words = mb_substr($b,$space_position,183,'UTF-8');
// create link
$text__link = "<a href=\"$link\">$text__link__words</a>";
echo $text__link;