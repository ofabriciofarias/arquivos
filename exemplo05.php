<?php
//unlink arquivos.

$file = fopen("teste.txt", "w+");

fclose($file);

//Apaga um arquivo ou uma pasta.
unlink("teste.txt");

echo "Arquivo removido com sucesso.";


?>