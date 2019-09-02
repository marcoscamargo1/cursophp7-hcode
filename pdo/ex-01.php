<?php
// futuramente usar try, catch
// CONEXÃO COM MYSQL
$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root", "");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
$stmt->execute();

// trazer os dados e salvar na variável $results
//$results = $stmt->fetchAll(); // traz indice e valor

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    foreach ($row as $key => $value) {
        echo "<strong>" . $key . "</strong>" . ": " . $value . "<br>";
    }
    echo "========================<br>";
}
//var_dump($results);

