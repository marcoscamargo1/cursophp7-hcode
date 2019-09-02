<?php

try {
    throw new Exception("Houve um erro", 400); // erro bad request
} catch (Exception $e) {
    //echo "Erro: " . $e->getMessage();
    echo json_encode([
        "message" => $e->getMessage(),
        "line" => $e->getLine(),
        "file" => $e->getFile(),
        "code" => $e->getCode()
    ]);
}