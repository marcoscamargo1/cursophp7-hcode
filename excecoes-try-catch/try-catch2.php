<?php

function trataNome($name)
{
    if (!$name) {
        throw new Exception("Nenhum nome foi informado.", 1);
    }
    echo ucfirst($name) . "<br>";
}
 try {
    trataNome("joão");
    trataNome("");
 } catch (Exception $e) {
    echo $e->getMessage();
 } finally { // finally: executa sempre
    echo "Executou o Try ou o Catch";
 }