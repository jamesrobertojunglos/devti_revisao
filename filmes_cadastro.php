<h1>Cadastro de Filmes</h1>

<?php
   if (isset($_POST['gravar'])) {
       $sql_filme_salvar = "INSERT into filmes
                           (nome, resumo, ano)
                           VALUES(:nome,:resumo,:ano)
       ";
       $filme_salvar_prepara = $conn->prepare($sql_filme_salvar);
      if ($filme_salvar_prepara->execute(array(
                "nome" => $_POST['nome'],
                "resumo" => $_POST['resumo'],
                "ano" => $_POST['ano']
                
       ))) {
               echo "
               <br>
                <div class=\"alert alert-success\">
                    Filme cadastrado com sucesso!
                </div>
               "; 
       }
   } else {
?>

<form method="POST">

<div class="form-floating mb-3">
  <input type="text" name="nome" class="form-control" id="floatingInput" placeholder="Nome">
  <label for="floatingInput">Nome</label>
</div>

<div class="form-floating mb-3">
  <input type="text" name="ano"  class="form-control" id="floatingInput" placeholder="Ano">
  <label for="floatingInput">Ano</label>
</div>

<div class="form-floating">
  <textarea  class="form-control" name="    resumo" placeholder="Digite o resumo" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Resumo</label><br>
</div>

    <input class="btn btn-primary" type="submit" name="gravar" value="Gravar"><br><br>
</div>

</form>
<?php
   }
?>