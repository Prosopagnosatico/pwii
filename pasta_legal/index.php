<?php
$nome = $_POST["Joazinhoplays@gmail.com"];
$senha = $_POST["1234"];

if(isset($nome) &&isset($senha))
{
    $usuario = new Usuario();
    $usuario -> cadastrar($nome, $senha)
}