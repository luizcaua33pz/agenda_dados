<?php
session_start();
include_once('config.php');
//print_r($_SESSION);
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['Senha']) == true))
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location: login.php');
}
$logado = $_SESSION['email'];
$sql = "SELECT * FROM usuario ORDER BY id DESC";
$result = $conexao->query($sql);


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-compartible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title> sistema|pz</title>
    <style>
         body{
      
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));   
            color: white;
            text-align: center;
        }
        .table-bg {
            background: rgba(0, 0, 0, 5);
            border-radius: 15px 15px 0 0;
            
        }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand"href="#" >AGENDA DE DADOS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" arial aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="d-flex">
                <a href="sair.php" class="btn btn-danger me-5">SAIR</a>
            </div>
        </nav>
        <br>
         <?php 
      echo "<h1>Bem vindo <u>$logado</u></h1>";
     
?>
<div class="m-5">
<table class="table text-white table-bg">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nome</th>
      <th scope="col">email</th>
      <th scope="col">senha</th>
      <th scope="col">sexo</th>
      <th scope="col">estado</th>
      <th scope="col">endereco</th>
      <th scope="col">...</th>
    </tr>
  </thead>
  <tbody>   
        <?php
    while($user_data = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>".$user_data['id'] . "</td>";
        echo "<td>".$user_data['nome'] . "</td>";
        echo "<td>".$user_data['email'] . "</td>";
        echo "<td>".$user_data['senha'] . "</td>";
        echo "<td>".$user_data['sexo'] . "</td>";
        echo "<td>".$user_data['estado'] . "</td>";
        echo "<td>".$user_data['endereco'] . "</td>";
        echo "</tr>";
    }
        ?>
  </tbody>
</table>
</div>
    </body>
    </html>