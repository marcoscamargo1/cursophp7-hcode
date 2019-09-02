<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0); // cor do título
$grayColor = imagecolorallocate($image, 100, 100, 100); // cor cinza

imagettftext($image, 32, 0, 320, 250, $titleColor, __DIR__. DIRECTORY_SEPARATOR . "fonts" . DIRECTORY_SEPARATOR . "Bevan" . DIRECTORY_SEPARATOR . "Bevan-Regular.ttf", "CERTIFICADO");
//imagettftext($image, 32, 0,440, 250, $titleColor, "fonts" . DIRECTORY_SEPARATOR . "Bevan" . DIRECTORY_SEPARATOR . "Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($image, 32, 0,345, 350, $titleColor, __DIR__ . DIRECTORY_SEPARATOR . "fonts" . DIRECTORY_SEPARATOR . "Playball" . DIRECTORY_SEPARATOR . "Playball-Regular.ttf", "Marcos Camargo");
imagestring($image, 3, 400, 375, utf8_decode("Concluído em: ") .date("d/m/Y"), $titleColor);

// informa cabeçalho
header("Content-Type: image/jpeg");

// salva arquivo fisicamente
// imagejpeg($image, "certificado".date("d-m-Y") . ".jpg", 50);

// apenas exibe arquivo
imagejpeg($image);

imagedestroy($image); // retira da memória