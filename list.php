<?php

declare(strict_types=1);

$pdo= require 'conect.php';
$sql= 'select * from produto';

echo '<h3> Pessoa: </h3>'; 

foreach($pdo->query($sql) as $key => $value){
    echo 'id: '  . $value['id'] . '<br> Nome: '. $value['nome'] . '<hr>';
}