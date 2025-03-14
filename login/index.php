<?php
require "Usuario.class.php";

$sucesso = $usuario = new Usuario();

if ( $sucesso ){
    $user = $usuario->chkUser("platao3301@athena.rep.gc");
    if($user == 0){
    $usuario->cadastrar("aristofacles", "platao3301@athena.rep.gc", "23");
    echo ("<h1Deu tudo certo");
    }else{
        echo "esse email já esta cadastrado no nosso site";
    }

 
} else {
    echo "<>Não foi mano";      
}