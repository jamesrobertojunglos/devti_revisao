<?php
include "bibliotecas/conexao.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
   <div class="container">
        <div class="row">
            <div class="col-12 bg-primary">Cabeçalho</div>      
            </div>  
        <div class="row">
            <div class="col-2 bg-danger">
                <?php
               include "menu.php";
               ?>
            </div>
        <div class="col-10">
            <?php
                if(isset($_GET['pagina'])) {
                include $_GET['pagina'].".php";
                } else {
                    include "home.php";
                    
                }
                            ?>
        </div>
        </div>
    </div class="row">
    <div class="container col-12 bg-warning text-center">@Devti 2022 - Unidavi</div>
</div>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
