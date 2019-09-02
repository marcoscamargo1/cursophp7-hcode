<?php
// criar arquivo
$file = fopen("teste.txt", "w+");
fwrite($file, "testando remoção de arquivo");
fclose($file);

// remover arquivo
unlink("teste.txt");
echo "Arquivo $file removido com sucesso!"; // Arquivo Resource id #3 removido com sucesso!