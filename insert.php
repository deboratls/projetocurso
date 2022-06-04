<?php

declare(strict_types=1);


$pdo = require 'conect.php';
$sql = 'insert into produto(nome) value(?)';


$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_GET['nome']);
$prepare->execute();

echo $prepare->rowCount();
