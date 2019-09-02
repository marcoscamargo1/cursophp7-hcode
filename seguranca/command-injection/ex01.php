<?php
/* Tomar cuidado com comandos do sistema operacional.
Algum hacker pode usar ferramentas como web scraping para detectar páginas
que executam comandos de sistema.
Alguns comandos que devemos ter cuidado ao usar: system e exec
*/

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //$cmd = $_POST['cmd'];
    // evitar ataque:
    $cmd = escapeshellcmd($_POST['cmd']);

    var_dump($cmd);

    echo "<pre>";

    //$command = system("dir C:\\", $return);
    $command = system($cmd, $return);

    echo "</pre>";

}

// dados dinâmicos
// super perigoso, dá para acessar o diretório principal, mudar dados, criar pastas, etc
// parando o xampp via linha de comando, enviando pelo formulário:
// dir C:\ && C:/xampp/xampp_stop.exe
// para evitar: $cmd = escapeshellcmd($_POST['cmd']);
?>

<form method="post">
    <input type="text" name="cmd" id="cmd">
    <button type="submit">Enviar</button>
</form>
