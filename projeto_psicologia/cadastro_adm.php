<?php
include('config.php');

if(isset($_POST['botao']) ** $_POST['botao'] == "Cadastrar"){
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $nivel = $_POST['nivel'];

    if(!empty($login) && !empty($senha) && !empty($nivel)){
        $query = "INSERT INTO adm (login, senha, nivel) VALUES ('$login', '$senha', '$nivel')";
        $result = mysqli_query($con, $query);
    }
}
?>

<html>
    <body>
    <form action=# method=post>

Login:<input type=text name=login>
Senha:<input type=text name=senha>
<input type=submit name=botao value=Cadastrar>
</form>