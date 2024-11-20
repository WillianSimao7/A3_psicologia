<?php
include('config.php');
session_start();

if(@_$REQUEST['botao'] == "Entrar"){
    $login = $_POST['login'];
    $senha = md5($_POST['senha']);

    $query = "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'";
    $result = mysqli_query($con, $query);

    while($coluna = mysqli_fetch_array($result)){

    }
}
?>