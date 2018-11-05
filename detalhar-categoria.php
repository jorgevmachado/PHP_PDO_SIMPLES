<?php require_once 'global.php' ?>
<?php
try {
    $id = $_GET['id'];
    $categoria = new Categoria($id);
} catch (Exception $e) {
    Erro::tratarErro($e);
}
?>
<?php require_once 'cabecalho.php' ?>

    <div class="row">
        <div class="col-md-12">
            <h2>Detalhes da Categoria</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 right">
            <a href="listar-categorias.php" class="btn btn-info btn-block">voltar</a>
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
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <label><?=$categoria->id?></label>
                        </td>
                        <td>
                            <label><?=$categoria->nome?></label>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php require_once 'rodape.php' ?>