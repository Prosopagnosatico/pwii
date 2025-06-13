<?php
require 'classes/Aluno.class.php';

$aluno = new Aluno();

$conn = $aluno->conectar();

if($conn == true){
    //            $nome,    $ra,    $periodo,  $curso
    $aluno->cadastrarAluno("Miguel", "4618", "integral", "DP")
}else{
    echo "Conexão falhou";
};