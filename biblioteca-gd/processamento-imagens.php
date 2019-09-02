<?php

header("Content-Type: image/png");

// define como será a  imagem, fundo preto e escrito em vermelho

$image = imagecreate(256, 256); // define tamanho

$black = imagecolorallocate($image, 0,0,0); // cor do fundo
$red = imagecolorallocate($image, 255,0,0); // cor da letra

imagestring($image, 5, 75, 120, "Curso PHP 7", $red); // tipo de fonte, conteúdo e posicionamento na tela

imagepng($image); // cria a imagem, formato png (definido no header)

imagedestroy($image); // após o término tem que destruir a variável