<?php

if (!is_dir("images")) // se não tem a pasta images
    mkdir("images"); // cria pasta images

foreach (scandir("images") as $item) { // procura cada item da pasta images
    if (!in_array($item, [".", ".."])) { // ignorar os itens . e ..
        unlink("images/" . $item); // apagar itens da pasta images
    }
}
 echo "Tudo Ok!";