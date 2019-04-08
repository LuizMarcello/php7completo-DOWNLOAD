<?php

$link = "https://www.google.com.br/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";

//função nativa do php que somente lê o conteúdo bruto/binário do arquivo:
//Ela recebe(no parâmetro) tanto um arquivo local como uma 'url':
$content = file_get_contents($link);

//função nativa parse_url().
//Colocando agora o conteúdo entro de um arquivo
//fisico e interpretando/formatando este conteúdo
//convertendo o que está vindo pela url em um arquivo real
//Ela retorna um array.
$parse = parse_url($link);

//função nativa 'basename()': retorna o nome base do arquivo
//mediante o caminho dado no parâmetro dele, ou seja, a chave
//"path" da variável '$parse', que é um array. 
$basename = basename($parse["path"]);

//Criando o arquivo com o nome '$basename', escrevendo nele desde o inicio(w+).
//'$file' será o manipulador/resource deste novo arquivo criado.
$file = fopen($basename, "w+");

//função nativa 'fwrite()' para escrever no arquivo:  
//Parâmetros: Manipulador/resouce do arquivo e o conteúdo a ser escrito.
fwrite($file, $content);

fclose($file);


?>