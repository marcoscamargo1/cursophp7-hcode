<?php

$filename = "usuarios.csv";

if (file_exists($filename)) { // se o arquivo existir

    $file = fopen($filename, "r"); // abre em modo leitura

    $headers = explode(",", fgets($file)); // retira as vírgulas (cabeçalho/colunas)

    $data = []; // inicia um array que vai armazenar os dados

    //var_dump($headers);
    while ($row = fgets($file)) { // enquanto tiver linhas, fgets — Lê uma linha de um ponteiro de arquivo

        //var_dump($row);
        $rowData = explode(",", $row); // retira as vírgulas (linhas da tabela/conteúdo)
        $linha = []; // inicia um array para guardar os dados

        for ($i = 0; $i < count($headers); $i++) {
            $linha[$headers[$i]] = $rowData[$i];
        }

        array_push($data, $linha);
    }

    fclose($file); // fecha o arquivo

    echo json_encode($data);

}