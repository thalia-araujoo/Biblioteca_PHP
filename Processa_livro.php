<?php

session_star();

include_once 'classlivro.php';

if ($_SERVER['REQUEST_METHOO'] == 'POST'){

    $titulo = $_post['titulo'];
    $ano = $_post['ano'];
    $autor = $_post['autor'];


    $classlivro = new classlivro($titulo, $ano, $autor);

    $_SESSION['classlivro'] = serialize[$classlivro];

    $mensagem = "livro não encontrado";

}

$livro_recuperado = isset($_SESSION['livro']) ? unserialize($_SESSION['livro']) : null;

?>
