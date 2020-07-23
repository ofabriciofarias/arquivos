<html>

<form method="POST" enctype="multipart/form-data">

	<input type="file" name="fileUpload">

	<button type="submit">Enviar</button>

</form>

</html>

<?php

//Realizar upload de arquivos
//enctype= "multpart/form-data" permite saber que é  do tipo do formulário

if($_SERVER["REQUEST_METHOD"] === "POST"){

	//$file guarda o arquivo que estamos recebendo
	//$_FILES[] array super global
	$file = $_FILES["fileUpload"];

	if($file["error"]){
		throw new Exception("Erro: " . $file["error"]);
	}

	//echo "I am here <br>";

	$dirUploads = "uploads";

	//Verificar se o diretório já existe
	if(!is_dir($dirUploads)){
		//mkdir padrão já deixa com permissão de escrita
		mkdir($dirUploads);
	}

	//arquivo e destino
	if(move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])){
		echo "Upload realizado com sucesso!";		
	}else{
		throw new Exception("Não foi possível realizar o upload");	
	}
}
?>
