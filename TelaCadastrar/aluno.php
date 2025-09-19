<?php

require 'Aluno.class.php';
$aluno = new Aluno();

$con = $aluno->conectar();

if($con){
    $al = $aluno->consultar("Lucas.camilo@gmail.com");
    if( !$al ){
    $aluno->cadastrar(4617, "Lucas Camilo", "Lucas.camilo@gmail.com", "000.111.222-07");
    }else{
        echo"<script>alert('Esse aluno já foi cadastrado')</script>";   
    }
}else{
    echo"<script>alert('Não há conexão com o banco de dados. Tente novamente mais tarde')</script>";
}