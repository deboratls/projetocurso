<?php

declare(strict_types=1);


require 'produto.php';

$produto = new Produto();

switch ($_GET['operacao']){


case 'list':

echo '<h3> Pessoa: </h3>'; 

foreach($pdo->query($sql) as $key => $value){
    echo 'id: '  . $value['id'] . '<br> Nome: '. $value['nome'] . '<hr>';
}

break;

case 'insert':

    $status = $produto->insert('Produto teste  01');

    if(!$status){
        echo "não foi possivel executar a operação!";
    }

    echo "Registro inserido com sucessooooooooooo!";

    break;

case 'update':

    $status = $produto->update('Produto foi alterado', 4);

    if(!$status){
        echo "não foi possivel executar a operação!";
        return false;
    }
        echo "Registro atualizado com sucesso";
    
    break;

case 'delete':

    $status = $produto->delete(3);
    if(!$status){
        echo "Não foi possível executar a operação";
        return false;

        echo "registro removido com sucesso";
    }
    
    break;

}