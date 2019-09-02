<?php

if (isset($_COOKIE["nome_cookie"])) {

    var_dump(json_decode($_COOKIE["nome_cookie"], true)); // array
    // var_dump(json_decode($_COOKIE["nome_cookie"])); // objeto
    $obj = json_decode($_COOKIE["nome_cookie"]); // objeto

    // acessa objeto
    echo $obj->empresa;
}