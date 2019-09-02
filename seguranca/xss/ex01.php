<form method="post">
    <input type="text" name="busca" id="busca">
    <button type="submit">Enviar</button>
</form>

<?php

if (isset($_POST['busca'])) {
    //echo $_POST['busca'];

    // para evitar ataques de xss com tags
    echo strip_tags($_POST['busca']);
}
