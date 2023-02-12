<?php
//PDO - descrive file database
$pdo = new PDO('sqlite:Prova.db');

//scrivi query sql
$statement = $pdo->query("SELECT * FROM movie");

//run la query sql
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

//mostra

echo "<pre>";
print_r($rows);
echo "</pre>";
?>