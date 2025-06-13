<?php
require 'classes/aluno.class.php';

$retorno = $aluno = new Aluno();
if( !$retorno ){ 
    echo "<h1>Banco indisponivel, tente mais tarde<h1>";
    exit;
}else{
    $aluno->setRa("123");
    $aluno->setNome("Fabio");
    $aluno->setCurso("DS");
    $aluno->setPeriodo("matutino");
    
    $nome    = $aluno->getNome();
    $ra      = $aluno->getRa();
    $curso   = $aluno->getCurso();
    $periodo = $aluno->getPeriodo();


    echo "Aluno: $nome - RA: $ra - Curso: $curso - Periodo - $periodo";

}