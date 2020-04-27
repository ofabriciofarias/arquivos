<?php
//Verifica se o diretório existe, se não existir vai criar.

$name = "imagens";

//Se o diretório não existir, vamos criar
if(!is_dir($name)){
	//Cria o diretório, caso não exista.
	mkdir($name);
	echo "Diretório $name criado com sucesso.<br>";
}else{
	//Para remover um diretório, podemos usar
	rmdir($name);
	echo "Diretório $name já existe, agora foi removido.<br>";
}

?>