<?php

//escanear a pasta imagens
$imagens = scandir("imagens");

//var_dump($imagens);
$data = array();

foreach ($imagens as $img) {
	//needle o que procura
	//haystack opções
	//Somente as imagens com . e ..
	if(!in_array($img, array(".", ".."))){
		$filename = "images" . DIRECTORY_SEPARATOR . $img;

		$info = pathinfo($filename);

		//$info['size'] = filesize($filename);
		//$info['modified'] = date("d/m/Y H:i:s", filemtime($filename));
		//var_dump($info);

		array_push($data, $info);
	}
}
//Teste no código


echo json_encode($data);
?>