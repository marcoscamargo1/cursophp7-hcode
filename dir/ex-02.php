<?php
// configurar fuso horário, futuramente fazer em um arquivo config.php
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
date_default_timezone_set('America/Sao_Paulo');
// ver conteúdo de pastas
$imgs = scandir("images");
//var_dump($imgs);

// ver detalhes dos arquivos do diretório
$data = []; // mesmo que array()

foreach ($imgs as $img) {
    if (!in_array($img, [".", ".."])) { // pular itens desnecessários (. e ..)
        $filename = "images" . DIRECTORY_SEPARATOR . $img;
        $info = pathinfo($filename);
        $info["size"] = filesize($filename); // ver tamanho dos arquivos
        $info["modified"] = date("d/m/Y H:i:s", filemtime($filename)); // mostra data de modificação dos arquivos
        $info["url"] = "http://localhost/HCODE/PHP-7/dir/" .str_replace("\\", "/", $filename); // ver caminho do arquivo

        array_push($data, $info);
    }
}

echo json_encode($data);