<h1>Lista de Filmes</h1>

<a class = "btn btn-primary" href="?pagina=filmes_cadastro">Cadastro</a>
<br><br>

<?php
  $sql_filmes =  "SELECT * FROM filmes";
  $filmes_prepara = $conn->prepare($sql_filmes);
  $filmes_prepara->execute();

?>


<table class="table table-striped">
<thead>
    <tr>
      <th>#</th>
      <th>Nome</th>
      <th>Resumo</th>
      <th>Ano</th>
      <th>Ações</th>
    </tr>
  </thead>
 <tbody>
    <?php
      while ($filme = $filmes_prepara->fetch()) {
       echo "<tr>";
       echo "<td>".$filme['codigo']."</td>";
       echo "<td>".$filme['nome']."</td>";
       echo "<td>".$filme['resumo']."</td>";
       echo "<td>".$filme['ano']."</td>";
       echo "
            <td>
                <a class=\"btn btn-info\" href=\"?pagina=filmes_editar&codigo=".$filme['codigo']."\">Editar</a>
                <br><br>
                <a class=\"btn btn-danger\" href=\"?pagina=filmes_deletar&codigo=".$filme['codigo']."\">Deletar</a>
            </td>
       ";
       echo "</tr>";
      }
    ?>

 </tbody>
</table>