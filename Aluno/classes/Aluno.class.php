<?php

class Aluno{
    private $id;
    private $ra;
    private $nome; 
    private $curso;
    private $periodo;
    private $pdo;

    //getters e setters - modificadores de acesso

    //O método get 
    public function getRa(){
        return $this->ra;      
    }

    public function getNome(){
        return $this->nome;      
    }
    
    public function getCurso(){
        return $this->curso;      
    }

    public function getPeriodo(){
        return $this->periodo;      
    }

    public function __construct(){
        //Essa função vai criar uma conexão nova no banco de dados para cada usuario, eu acho.
        /*A classe PDO foi criada para auxiliar a interação com a DB
        Ela precisa de 3 atributos 
        */
        $dns = "mysql:dbname=usuarioetimpwii;host=localhost";
        $user = "root";
        $pass = "";
        //Sempre se usa esses 3 atributos 

        try {
            $th->pdo = new PDO($dns, $user, $pass);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    /*O metodo set vai gravar um valor no atributo, entao eu tenho qu passar
    esse parametro entre os parenteses 
    */ 
    public function setRa($ra){
        $this->ra = $ra;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    
    public function setCurso($curso){
        $this->curso = $curso;
    }

    public function setPeriodo($periodo){
        $this->periodo = $periodo;
    }
}