<!-- form envia string por padrão, para enviar dados(arquivos) tem que usar o enctype-->
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="fileUpload" id="fileUpload">
    <button type="submit">Send</button>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $file = $_FILES["fileUpload"]; // arquivo para guardar informações, nome, tamanho, etc

    if ($file["error"]) {
        throw new Exception("Error: " . $file["error"]);
    }

    $dirUploads = "uploads"; // cria diretório para receber os arquivos
    if (!is_dir($dirUploads)) {
        mkdir($dirUploads);
    }

    if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])) {
        echo "Upload realizado com sucesso!";
    } else {
        throw new Exception("Não foi possível realizar upload.");
    }
}