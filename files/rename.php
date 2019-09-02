<?php
// mover arquivos de uma pasta para outra

// verifica se não existe e cria dois diretórios(pastas)
$dir1 = "folder1";
$dir2 = "folder2";
if (!is_dir($dir1)) mkdir($dir1);
if (!is_dir($dir2)) mkdir($dir2);

// cria arquivo se não existir
$file = "README.txt";
if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $file)) {

    $file = fopen($dir1 . DIRECTORY_SEPARATOR . $file, "w+");
    fwrite($file, date("d/m/Y H:i:s"));
    fclose($file);

}

// mover arquivo da dir1 para dir2 (também pode renomear)

rename($dir1 . DIRECTORY_SEPARATOR . $file,
       $dir2 . DIRECTORY_SEPARATOR . $file);

echo "Arquivo movido com sucesso!";