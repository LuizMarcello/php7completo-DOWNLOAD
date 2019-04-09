<?php

$link = "https://image.webmotors.com.br/_fotos/anunciousados/gigante/2019/201903/20190315/nissan-versa-1.6-16v-flex-sl-4p-manual-wmimagem16011234564.jpg?s=fill&w=209&h=164&q=70";

$content = file_get_contents($link);

$parse = parse_url($link);

//var_dump($parse);

$basebane = basename($parse["path"]);

$file = fopen($basebane, "w+");

fwrite($file, $content);

?>

<img src="<?=$basebane?>">