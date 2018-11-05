<?php

class Categoria
{
    public $id;
    public $nome;

    public function __construct($id = false)
    {
        if ($id){
            $this->id = $id;
            $this->carregar();
        }
    }

    public function index()
    {
        $query = "SELECT id, nome FROM categoria";
        $conexao = Conexao::conectar();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function carregar()
    {
        $query = "SELECT id, nome FROM categoria WHERE id =" . $this->id;
        $conexao = Conexao::conectar();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        foreach ($lista as $linha) {
            $this->nome = $linha['nome'];
        }
    }

    public function store()
    {
        $query = "INSERT INTO categoria (nome) VALUES ('" . $this->nome . "')";
        $conexao = Conexao::conectar();
        $conexao->exec($query);
    }

    public function update()
    {
        $query = "UPDATE categoria set nome ='" . $this->nome ."'WHERE id =" . $this->id;
        $conexao = Conexao::conectar();
        $conexao->exec($query);
    }

    public function delete()
    {
        $query = "DELETE FROM categoria WHERE id=" . $this->id;
        $conexao = Conexao::conectar();
        $conexao->exec($query);
    }

}