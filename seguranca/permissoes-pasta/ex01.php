<?php

$dir = "arquivos";
$permissao = "0775";
if (!is_dir($dir)) mkdir($dir, $permissao);

echo "Diretório $dir criado com sucesso!";

/*
0 = SEM PERMISSÃO
1 = EXECUÇÃO
2 = GRAVAÇÃO
3 = EXECUÇÃO E GRAVAÇÃO
4 = LEITURA
5 = LEITURA E EXECUÇÃO
6 = LEITURA E GRAVAÇÃO
7 = LEITURA, GRAVAÇÃO E EXECUÇÃO

7 = (4 + 2 + 1) = Acesso total (leitura + gravação + execução)
6 = (4 + 2) = Sem Execução (leitura + gravação)
5 = (4 + 1) = Sem Gravação (leitura + execução)
3 = (2 + 1) = Sem Leitura (gravação + execução)

 */