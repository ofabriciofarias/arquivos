<?php
//Trabalhra com file open

//fopen pede dois argumentos nome e como vai ser utilizado.
//w+ w significa escrever, + que o arquivo não existe e vai ser criado
//a+ o conteúdo é preservado, o ponteiro vai para o final e permite continuar escrevendo.
$file = fopen("log.txt","a+");

//fwrite($file, date("d-m-Y H:i:s"));
fwrite($file, date("d-m-Y H:i:s") . "\r\n");

fclose($file);

echo "Arquivo criado com sucesso.";

?>