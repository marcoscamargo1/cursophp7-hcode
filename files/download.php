<?php
// variável com endereço
//$link = "https://www.sescpr.com.br/wp-content/themes/_s3/media/svg/logo-sesc.svg";

// essa ta dando erro, será por causa do https. OK, corrigido com certificado ssl
$link = "https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";
// variável com conteúdo
$content = file_get_contents($link);

$parse = parse_url($link);

// var_dump($content);
$basename = basename($parse["path"]);

$file = fopen($basename, "w+");
fwrite($file, $content);
fclose($file);

?>

<img src="<?=$basename?>">
