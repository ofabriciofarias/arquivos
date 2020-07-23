<?php

$dir1 = "folder_01";

$dir2 = "folder_02";

//Criando uma pasta, caso ela não exista criamos com o nome.
if(!is_dir($dir2)) mkdir($dir1);
if(!is_dir($dir2)) mkdir($dir2);

//Criamos aqui um arquivo.
$filename = "README.txt";

//Se o arquivo não existir, adicionar ele no diretório
if(!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)){

	//O arquivo é criado e adicinoado no diretório e é do tipo de recebe escrita
	$file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");

	//Escrevo no arquivo o texto de data e hora
	fwrite($file, date("Y-m-d H:i:s"));

	//Fecho o arquivo
	fclose($file);
}

//Agora vamos mover um arquivo de um local, precisamos do caminho e nome do arquivo original.
//Agora vamos mudar para outro local.
//Pode ir para a mesma pasta, e pode ser utilizado para renomear somente.
//Primeiro e segundo parametro
	rename(
		$dir1 . DIRECTORY_SEPARATOR . $filename, //Origem
		$dir2 . DIRECTORY_SEPARATOR . $filename //Destino
	);

//Moveu o arquivo de uma pasta para outra
	echo "Arquivo movido com sucesso";

?>