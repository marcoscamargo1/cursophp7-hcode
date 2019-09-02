<?php

//$file = fopen("teste.txt", "a+"); // cria arquivo teste.txt na pasta atual
//fwrite($file, "Testando escrita no arquivo. Modificou?"); // escreve algo no arquivo criado
$file = fopen("log.txt", "a+"); // a+ adiciona sempre que executa, w+ só adiciona 1 vez
fwrite($file, "Testando quebra de linha." . "\r\n");
fclose($file); // depois fecha o arquivo




/*
https://www.php.net/manual/pt_BR/function.fopen.php

mode 	Descrição
'r' 	Abre somente para leitura; coloca o ponteiro do arquivo no começo do arquivo.
'r+' 	Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo.
'w' 	Abre somente para escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.
'w+' 	Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.
'a' 	Abre somente para escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.
'a+' 	Abre para leitura e escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.
'x' 	Cria e abre o arquivo somente para escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a fopen() falhará, retornando FALSE e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo. Isto é equivalente a especificar as flags O_EXCL|O_CREAT para a chamada de sistema open(2).
'x+' 	Cria e abre o arquivo para leitura e escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a fopen() falhará, retornando FALSE e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo. Isto é equivalente a especificar as flags O_EXCL|O_CREAT para a chamada de sistema open(2).

 Nota:
 Para portabilidade, é fortemente recomendado que você sempre utilize a flag 'b' quando abrir arquivos com fopen().

 Nota:
 Novamente para portabilidade, também é fortemente recomendado que você reescreva códigos que utilizem ou confiem no modo 't', de forma que passem a utilizar os fins de linha corretos e o modo 'b'.

 use_include_path
 O terceiro parâmetro opcional use_include_path pode ser definido para '1' ou TRUE se você quiser buscar o arquivo também no include_path.

*/