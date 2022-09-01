<h1>Editar Filmes</h1>

<?php

    if(isset($_POST['salvar'])) {
        $sql_editar_filme = "UPDATE filmes
                             SET nome = :nome,
                                ano   = :ano,
                               resumo = :resumo
                         WHERE codigo = :codigo
        ";
        $filme_editar_prepare = $conn->prepare($sql_editar_filme);
        if ($filme_editar_prepare ->execute(array(
            "codigo" => $_GET['codigo'],
            "nome"   => $_POST['nome'],
            "resumo" => $_POST['resumo'],
            "ano"    => $_POST['ano']
            ))) {
            echo "
                <div class=\"alert alert-success\">
                    Filme alterado com sucesso!
                </div>
            ";
        }  
    } else {

    if (isset($_POST['editar'])) {
            $sql_editar_filme = "DELETE
                                FROM filmes
                                WHERE codigo = :codigo
            ";
            $filme_editar_prepara = $conn->prepare($sql_editar_filme);
            $filme_editar_prepara->execute(array("codigo" => $_GET['codigo']));
    }
    $sql_filme = "SELECT * 
              from filmes 
              where codigo = :codigo";
    $filme_prepara = $conn->prepare($sql_filme);
    $filme_prepara->execute(array("codigo"=>$_GET['codigo']));

    $filme = $filme_prepara->fetch();

 
?>
<form method="post">
<table class="table">
    <tr>
        <td>
            Nome
        </td>
        <td>
        <div class="form-floating mb-3">
            <input type="text" name="nome" class="form-control" id="floatingInput" value="<?php echo $filme['nome']; ?>" placeholder="Nome">
            <label for="floatingInput">Nome</label>
        </div>
        </td>
    </tr>
    <tr>
        <td>
            Ano
        </td>
        <td>
        <div class="form-floating mb-3">
            <input type="text" name="ano"  class="form-control" id="floatingInput" value="<?php echo $filme['ano']; ?>" placeholder="Ano">
            <label for="floatingInput">Ano</label>
        </div>         
        </td>
    </tr>
    <tr>
        <td>
            Resumo
        </td>
        <td>
        <div class="form-floating">
            <textarea  class="form-control" name="resumo" placeholder="Digite o resumo" id="floatingTextarea2" style="height: 100px">"<?php echo $filme['resumo']; ?></textarea>
            <label for="floatingTextarea2">Resumo</label><br>
        </div>
        </td>
    </tr>
</table>
    <input class="btn btn-primary" type="submit" name="salvar" value="Salvar">
</form>
<br>

<?php
    }
?>
