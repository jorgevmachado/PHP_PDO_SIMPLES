<?php

    require_once 'global.php';

    try {
        $id = $_GET['id'];
        $categoria = new Categoria($id);
        $categoria->delete();
        header('Location: listar-categorias.php');
    } catch (Exception $e) {
        Erro::tratarErro($e);
    }