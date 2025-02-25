<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compartible"content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LOGIN</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71)); 
        }
        div{
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }
            
        
       input{
        padding: 15px;
        border: none;
        outline: none;
        font-size: 15px ;
       }

      .inputSubmit{
        background-color: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: dodgerblue;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
       }
       .inputSubmit:hover{
        background-color: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        cursor:pointer;
    
       }
        </style>
</head>
<body>
    <a href="intro.php">VOLTAR</a>
    <div>
        <h1>LOGIN</h1>
        <form action="test_login.php" method="POST">
        <input type="text" name="email" placeholder="Email">
        <br><br>
        <input type="password" name="senha" placeholder="Senha">
        <br><br>
        <input class="inputSubmit" type="submit" name="submit" value="Enviar">
    </div>
</form>
</body>
</html>