<?php require_once 'global.php' ?>
<?php
    try {
        $categoria = new Categoria();
        $lista = $categoria->index();
    } catch (Exception $e) {
        Erro::tratarErro($e);
    }
?>
<?php require_once 'cabecalho.php' ?>

<div class="row">
    <div class="col-md-12">
        <h2>Categorias</h2>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <a href="adicionar-categoria.php" class="btn btn-info btn-block">Criar Nova Categoria</a>
    </div>
</div>

<br>

<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <td>Id</td>
                    <th>Nome</th>
                    <th class="acao">Editar</th>
                    <th class="acao">Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista as $linha):?>
                    <tr>
                        <td>
                            <a href="detalhar-categoria.php?id=<?=$linha['id']?>" class="btn btn-link">
                                <?=$linha['id']?>
                            </a>
                        </td>
                        <td>
                            <a href="detalhar-categoria.php?id=<?=$linha['id']?>" class="btn btn-link">
                                <?=$linha['nome']?>
                            </a>
                        </td>
                        <td>
                            <a href="editar-categoria.php?id=<?=$linha['id']?>" class="btn btn-info">
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href="excluir-categoria-post.php?id=<?=$linha['id']?>" class="btn btn-danger">
                                Excluir
                            </a>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>
<?php require_once 'rodape.php' ?>

