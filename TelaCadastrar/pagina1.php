<?php
session_start();

$_SESSION['nome'] = "Lucas Camilo";

header("location:pagina2.php");