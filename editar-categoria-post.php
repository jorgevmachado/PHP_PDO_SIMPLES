<?php
    require_once 'global.php';

    try {
        $id = $_POST['id'];

        $categoria = new Categoria($id);
        $categoria->nome = $_POST['nome'];
        $categoria->update();
        header('Location: listar-categorias.php');
    } catch (Exception $e) {
        Erro::tratarErro($e);
    }