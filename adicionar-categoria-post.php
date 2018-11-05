<?php
    require_once 'global.php';

    try {
        $categoria = new Categoria();
        $categoria->nome = $_POST['nome'];
        $categoria->store();
        header('Location: listar-categorias.php');
    } catch (Exception $e) {
        Erro::tratarErro($e);
    }