<?php
require "classes/Aluno.class.php";

$retorno = $aluno = new Aluno();

if( !$retorno){
    echo "<h1>Banco indisponivel, tente novamente mais tarde";  
    exit;  
} else{
    $aluno->$ra("123");
    $aluno->$nome("Lucas");
    $aluno->$curso("DS");
    $aluno->$periodo("Segundo ano");

    $nome = $aluno->getNome();
    $ra   = $aluno->  getRa();
    $curso= $aluno->getCurpo();
    $periodo= $periodo->getPeriodo();

    echo "Aluno: $nome - RA: $ra - Curso: $curso - Periodo: $periodo ";
}
echo "</h1>";