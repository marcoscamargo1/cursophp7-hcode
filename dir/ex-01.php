<?php

// criação de diretórios
$name = "images";

// verifica se existe o diretório, se não existir, cria.
/*if (!is_dir($name)) {
    mkdir($name);
    echo "Diretório $name criado com sucesso!";
} else {
    echo "Não foi possível criar diretório. Diretório $name já existe.";
}*/

// verifica se existe o diretório, se não existir, cria.
// ao rodar novamente, deleta o diretório.
if (!is_dir($name)) {
    mkdir($name);
    echo "Diretório $name criado com sucesso!";
} else {
    rmdir($name);
    echo "Diretório $name existia, mas foi removido.";
}