<?php

$data = ["empresa" => "Hcode Treinamentos"];

setcookie("nome_cookie", json_encode($data), time() + 3600);

echo "Está setado o cookie!";