<?php
$username = 'root';
$password = '';
//conexão
try {
    $conn = new PDO('mysql:host=localhost;dbname=aula', $username, $password);
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PODException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
//listartodos
if (isset($_GET['listartodos'])) {
    $dados = $conn->query('SELECT * FROM pessoas');

    foreach($dados as $linha) {
        print_r($linha);
    }
}
//listar 1
if (isset($_GET['listar1'])) {
  $stmt = $conn ->prepare('SELECT * From pessoas  WHERE codigo = :codigo');
  $stmt ->execute(array('codigo' => $_GET['listar1']));

  while($row = $stmt->fetch()) {
    print_r ($row);
  }
}
//gravar
if (isset($_GET['gravar'])) {
    $stmt = $conn ->prepare('INSERT into pessoas(nome) values (:nome)');
    $stmt ->execute(array('nome' => $_GET['nome']));
}
//atualizar
if (isset($_GET['atualizar'])) {
    $stmt = $conn ->prepare('UPDATE pessoas set nome = :nome where codigo = :codigo');
    $stmt ->execute(array('codigo' => $_GET['codigo'], 'nome' => $_GET['nome']));
}
//remover
if (isset($_GET['remover'])) {
    $stmt = $conn ->prepare("DELETE from pessoas where codigo = :codigo");
    $stmt ->execute(array('codigo' => $_GET['codigo']));
}
?>
