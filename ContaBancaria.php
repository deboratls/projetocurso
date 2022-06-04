<?php
/*
class ContaBancaria
{
    public $banco;
    public $nomeTitular= 'Débora';
    public $nomeAgencia= '3467  ';
    public  $numeroConta;
    public $saldo= 2000;

}

$conta = new ContaBancaria();

var_dump($conta->saldo);

$conta->saldo=0;

*/

function validarUsuario(array $usuario)

{
    if(empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])){
        throw new Exception(" Campos obrigatórios não foram preenchidos!");
    }

    return true;
}


$usuario = [
    'codigo' =>1,
    'nome' => '',
    'idade' => 57,
];

$status = false;

try{
    $status = validarusuario($usuario);
}catch (Exception $e){
    echo $e->getMessage();
} finally{
    echo"Status de operação: " . (int)$status;//cast
    die();
}

echo"\n... execuando...\a";