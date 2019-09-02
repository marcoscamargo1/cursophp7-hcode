<?php

// função para tratamento de erros
function trataErro($code, $message, $file, $line) {
    echo json_encode([
        "code" => $code,
        "message" => $message,
        "line" => $line,
        "file" => $file
    ]);
}

set_error_handler("trataErro"); // "avisa o php para usar essa função quando houver erros

$total = 100 / 0;