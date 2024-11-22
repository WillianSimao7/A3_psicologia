<?php
include("config.php");

//solicita as informações de cadastro e registra no banco
if (isset($_POST['botao']) && $_POST['botao'] == "Cadastrar"){
    $data_abertura = $_POST['data_abertura'];
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $genero = $_POST['genero'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $contato_emergencial = $_POST['contato_emergencial'];
    $escolaridade = $_POST['escolaridade'];
    $ocupacao = $_POST['ocupacao'];
    $necessidade = $_POST['necessidade'];
    $estagiario = $_POST['estagiario'];
    $orientador = $_POST['orientador'];

    //valida se todos os campos foram preenchidos
    if(!isset($data_abertura) && !isset($nome) && !isset($data_nascimento) && !isset($genero) && !isset($endereco) && !isset($telefone) && !isset($email) && !isset($contato_emergencial) && !isset($escolaridade) && !isset($ocupacao) && !isset($necessidade) && !isset($estagiario) && !isset($orientador)){

        $query = "INSERT INTO paciente (data_abertura, nome, data_nascimento, genero, endereco, telefone, email, contato_emergencial, escolaridade, ocupacao, necessidade, estagiario, orientador)
        VALUES ('$data_abertura', '$nome', '$data_nascimento', '$genero', '$endereco', '$telefone', '$email', '$contato_emergencial', '$escolaridade', '$ocupacao', '$estagiario', '$orientador')";

        $result = mysqli_query($con, $query);
    }
}
?>

<html>
    <body>
    <form action=# method=post>

Data de Abertura: <input type=date name=data_abertura>
Nome Completo:<input type=text name=nome>
Data de nascimento:<input type="date" name=data_nascimento>
Genero:<input type=text name=genero>
Endereço:<input type=text name=endereco>
Telefone:<input type=number name=telefone>
Email: <input type=text name=email>
Contato Emergencial: <input type=number name=contato_emergencial>
Escolaridade: <input type=text name=escolaridade>
Ocupação: <input type=text name=ocupacao>
Necessidade: <input type=text name=necessidade>
Estagiário: <input type=text name=estagiario>
Orientador: <input type=text name=orientador>
<input type=submit name=botao value=Cadastrar>
        </form>
