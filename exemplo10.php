<?php 

//Endereço
$link = "https://www.google.com.br/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

//Conteúdo do arquivo
$content = file_get_contents($link);

//var_dump($content);

$parse = parse_url($link);

//var_dump(basename($parse["path"]));

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

//Passando agora a imagem
fwrite($file, $content);

fclose($file);

//Chamar a imagem agora puxando do próprio servidor local

?>


<img src="<?=$basename?>">
