
<?php
declare(strict_types=1);


class produto
{
    private $conexao;
    

    public function _construct()
    {
        try{
            $this->conexao = new PDO('mysql:localhost=mysql;dbname=pdo', 'root', 'root');

        }catch(Exception $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function list() : array
    {
        $sql = 'select * from produto';
        $produto = [];
            
        foreach ($this->conexao->query($sql) as $key => $value) 
        {
            array_push($produto, $value);
        
        }
        return $produto;
        
    }


    public function insert(string $nome) : int
    {
        $sql = 'insert into produto(nome) values(?)';


        $prepare = $this->conexao->prepare($sql);

        $prepare->bindParam(1, $nome);
        $prepare->execute();

        return $prepare->rowCount();

    }

    public function update(String $nome, int $id): int
    {

        $sql = 'update produto set nome = ? where id = ?';


        $prepare = $this->conexao->prepare($sql);

        $prepare->bindParam(1, $nome);
        $prepare->bindParam(2, $id);


        $prepare->execute();

        return $prepare->rowCount();

    }

    public function delete(int $id) : int
    {
        $sql = 'delete from produto where id = ?';

        $prepare = $this->conexao->prepare ($sql);

        $prepare->bindParam(1, $id);
        $prepare->execute();

        return $prepare->rowCount();

    }
}