<?php
session_start();
//print_r($_REQUEST);
if(isset($_POST['submit']) && !empty($_POST['email'] ) && !empty($_POST['senha']))
{
include_once('config.php');
$email = $_POST['email'];
$senha = $_POST['senha'];

//print_r('email: ' . $email);
//print_r('<br>');
//print_r('senha ' . $senha);

$sql = "SELECT * FROM usuario WHERE email = '$email' and  senha = '$senha'";
$result = $conexao->query($sql);
//print_r($sql);
//print_r($result);


if(mysqli_num_rows($result) < 1)
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location: login.php');
}
else
{
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;

    header('location: sistema.php');
}
}
else
{
header('location: login.php');
}
?>