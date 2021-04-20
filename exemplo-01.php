<?php

$conn = new PDO("sqlsrv:Database=dbphp8;server=localhost\SQLEXPRESS;ConnectionPooling=0","server", "root");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin;");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);  // o fetchAll fatia todas as linhas //

foreach ($results as $row){

    foreach ($row as $key => $value){

    echo "<strong>".$key.":</strong>".$value."<br/>";

    }

    echo "=========================================<br>";
}

?>