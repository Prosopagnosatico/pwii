<?php

function conecta(){
    $way  = "mysql:dbname=escola;host=localhost";
    $user = "root";
    $pass = "";

    try {
        $pdo = new PDO($way, $user, $pass);
    } catch (\Throwable $th) {
        echo "Erro ao conectar ao banco de dados".$th;
    }
}