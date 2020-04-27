<?php

if(!is_dir("imagens2")){
	mkdir("imagens2");
}

//scandir lê os diretórios e apaga os arquivos com o unlink
foreach (scandir("imagens2") as $item) {
	if(!in_array($item, array(".", ".."))){
		unlink("imagens2/". $item);
	}
}

?>