<?php
class Usuario{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $pdo;

    public function __construct(){
        $dns = "mysql:dbname=usuariopwii;host=localhost";
        $dbUser = "root";   
        $dbPass = "";
        
        try {
            $this->pdo = new PDO($dns, $dbUser, $dbPass);
            return true;
        } catch (\Throwable $th) {
            echo ("Banco de dados indisponivel no momento nao tente mais tarde");
            return false;
        }

        $this->pdo = new PDO($dns, $dbUser, $dbPass);
    }

    function cadastrar($nome, $email, $senha){
        //passo 1 criar a query(consulta)
        $sql = "INSERT INTO usuarios SET nome = :n, email = :e, senha = :s";
        //passo 2 preparar a query 
        $stmt = $this->pdo->prepare($sql);

        //passo 3 usar o bindValue
        $stmt->bindValue(":n", $nome);
        $stmt->bindValue(":e", $email);
        $stmt->bindValue(":s", $senha);

        //passo 4 executar a query 
        $stmt->execute();

    }

    function chkUser($email){
        $sql = "SELECT * FROM usuarios WHERE email = :e";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(":e", email);

        $stmt->execute();
        
        //passo 5 saber se encontrou o registro
        echo "Registros encontrados" .s
        return $stmt->rowCount();

        
    }

    
}