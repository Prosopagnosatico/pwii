<?php

//Cria a classe aluno
class Aluno{
    //Declaração das variaveis que serão usadas no back end
    private $lucasId;
    private $lucasRm;
    private $lucasNome;
    private $lucasEmail;
    private $lucasCpf;
    private $lucasPdo;

    //função usada especialmente para conectar o php com o sql
    public function conectar(){
        $lucasDns = "mysql:dbname=alunopwii;host=localhost";
        $lucasDbUser = "root";
        $lucasDbPass = "";

        /*Aqui, o $this representa um objeto de Aluno, o "->" é usado para ver as propriedade do objeto 
        que ele está apontando*/
        try{
            $this->lucasPdo = new PDO($lucasDns, $lucasDbUser, $lucasDbPass);
            //O \Throwable capta erros e exceções, o $th recebe o objeto do erro ou da exceção
        } catch(\Throwable $th){
            //return false para indicar que deu errado a conexão
            return false;
        };
    }


    //Métodos para ver o valor que ta sendo apontado pelo "->" e retornar ele 
    public function getLucasId(){
        return $this->lucasId;
    }

    public function getLucasRm(){
        return $this->lucasRm;
    }

    public function getLucasNome(){
        return $this->lucasNome;
    }

    public function getLucasEmail(){
        return $this->lucasEmail;
    }

    public function getLucasCpf(){
        return $this->lucasCpf;
    }

    /*Esses métodos que estão dizendo "O valor que tá ai dentro é esse", como se revelasse um numero
     rasurado por cima dele*/
    public function setLucasId($lucasId){
        $this->lucasId = $lucasId;
    }

    public function setLucasRm($lucasRm){
        $this->lucasRm = $lucasRm;
    }

    public function setLucasNome($lucasNome){
        $this->lucasNome = $lucasNome;
    }

    public function setLucasEmail($lucasEmail){
        $this->lucasEmail = $lucasEmail;
    }

    public function setLucasCpf($lucasCpf){
        $this->lucasCpf = $lucasCpf;
    }

    //Esse método vai pegar os valores cadastrados aqui e vai colocar no sql
    public function cadastrar($lucasRm, $lucasCpf, $lucasNome, $lucasEmail){
        /*Essa parte tá deixando um comando preparado para executar no sql depois. O código tá falando
        que o valor das colunas no sql vai ser igual a essas variaveis, que na verdade são placeholders */
        $lucasSql = "INSERT INTO aluno SET lucasRm = :lr, lucasCpf = :lc, lucasNome = :ln , lucasEmail = :le;";
        //O lucasPdo tá verificando se tá tudo certo para executar esse código no sql depois
        $lucasSql = $this->lucasPdo->prepare($lucasSql);

        /*O bindvalue tá dizendo que aqueles placeholders estavam se referindo a essas variaveis na verdade*/
        $lucasSql->bindvalue(":lr", $lucasRm);
        $lucasSql->bindvalue(":lc", $lucasCpf);
        $lucasSql->bindvalue(":ln", $lucasNome);
        $lucasSql->bindvalue(":le", $lucasEmail);
        
        //Aqui está de fato executando o comando(query) do $lucasSql no sql 
        return $lucasSql->execute();
    }

    /*Esse método ta fazendo todo o mesmo processo do ultimo método, mas para consultar os valores da
    linha onde o email tiver sido selecionado*/ 
    public function consultar($lucasEmail){
        $lucasSql = "SELECT * FROM aluno WHERE lucasEmail = :le;";
        $lucasSql = $this->lucasPdo->prepare($lucasSql);

        $lucasSql->bindvalue(":le", $lucasEmail);

        $lucasSql->execute();
        /*Verifica se há alguma linha  com o email selecionado no comando(query) do lucasSql, 
        o maior que zero faz agora o rowcount verificar como um booleano, ou seja, se tiver, ele
        vai retornar verdadeiro, se não tiver ele vai retornar falso*/
        return $lucasSql->rowCount() > 0;
    }



