<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0); // cor do título
$grayColor = imagecolorallocate($image, 100, 100, 100); // cor cinza

imagestring($image, 5, 440, 250, "CERTIFICADO", $titleColor);
imagestring($image, 5, 420, 350, "Marcos Camargo", $titleColor);
imagestring($image, 3, 400, 375, utf8_decode("Concluído em: ") .date("d/m/Y"), $titleColor);

// informa cabeçalho
header("Content-Type: image/jpeg");

// salva arquivo fisicamente
imagejpeg($image, "certificado".date("d-m-Y") . ".jpg", 50);

// apenas exibe arquivo
// imagejpeg($image);

imagedestroy($image); // retira da memória