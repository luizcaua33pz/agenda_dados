<?php

 if(isset($_POST['submit']))
 {
    //print_r('nome' . $_POST['nome']);
     //print_r('<br>');
    //print_r('email' . $_POST['email']);
     //print_r('<br>');
    //print_r('telefone' = $_POST['telefone']);
     //print_r('<br>');
    //print_r('senha' .  $_POST['senha']);
     //print_r('<br>');
    //print_r('sexo' . $_POST['sexo']);
     //print_r('<br>');
    //print_r('estado' . $_POST['estado']);
    //print_r('<br>');
    //print_r('endereco' . $_POST['endereco']);

   include_once('config.php');

   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $telefone = $_POST['telefone'];
   $senha = $_POST['senha'];
   $sexo = $_POST['genero'];
   $estado = $_POST['estado'];
   $endereco = $_POST['endereco'];

   $result = mysqli_query($conexao, "INSERT INTO usuario (nome, email, telefone, senha, sexo, estado, endereco) 
   VALUES ('$nome', '$email' , '$telefone', '$senha', '$sexo', '$estado', '$endereco')");

   header('location: login.php');
  
}
   
?>  

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compartible" content="IE=edge">
    <title> AGENDA DE CONTATOS </title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba( 0, 0, 0, 0.8);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color:dodgerblue ;
            border-radius: 8px ;
    
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px ; 
            width: 100%;
            letter-spacing: 2px;

        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        i.inputUser:valid ~ .labelInput {
            top: -20px;
            font-size: 12px;
            color: dodgerblue;

        }
        #submit {
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover {
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        }

    </style>
</head>
<body>
<a href="intro.php">VOLTAR</a>
    <div class="box">
        <form action="test1.php" method="POST">
            <fieldset>
       <legend><b>AGENDA DE CONTATOS</b> </legend>
       
        <br>
     <legend>   

        <div class="inputBox">
        <input type="text" name="nome" id="nome" class="inputUser"required>
        <label for="nome" class="labelInput">Nome Completo </label>
</div>
<br><br>
        <div class="inputBox">
        <input type="text" name="email" id="email" class="inputUser"  required>
        <label for="email"  class="labelInput">Email </label>
 </div>
<br><br>
 <div class="inputBox">
        <input type="tel" name="telefone" id="telefone" class="inputUser"  required>
        <label for="telefone"  class="labelInput">insira o numero </label>
 </div>
 <br><br>
 <div class="inputBox">
        <input type="text" name="senha" id="senha" class="inputUser" required>
        <label for="senha"  class="labelInput">Senha </label>
 </div>
 <br>
 <p>Sexo:</p>
 <input type="radio" id="feminino" name="genero" value="feminino"  required>
 <label for="feminino">Feminino</label>
<br>
 <input type="radio" id="masculino" name="genero" value="masculino" required>
 <label for="masculino">Masculino</label>

 <br><br>
 <div class="inputBox">
        <input type="text" name="estado" id="estado" class="inputUser" required>
        <label for="estado" class="labelInput">Estado</label>
 </div>
 <br><br>
 <div class="inputBox">
        <input type="text" name="endereco" id="endereco" class="inputUser"  required>
        <label for="endereco"  class="labelInput">Endereço</label>
         <br><br>
 </div>
  
       <input type="submit" name="submit" id="submit">
</class>

</div>
</body>
</html>
        