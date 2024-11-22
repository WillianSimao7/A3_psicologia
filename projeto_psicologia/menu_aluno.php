<?php
include('config.php');

//verifica se o formulario foi enviado
if(isset($_POST['botao']) && $_POST['botao'] == "Gerar"){

    //Pega os dados do formulário
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';

    //Monta a query com as condições corretas
    $query = "SELECT * FROM paciente WHERE id > 0";

    if(!empty($nome)){
        $query .= " AND nome LIKE '%$nome%'";
    }

    if(!empty($email)){
        $query .= " AND email LIKE '%$email%'";
    }

    //Executa query
    $result = mysqli_query($con, $query);

    if(!$result){

        echo "Erro na consulta " . mysqli_error($con);

    } else{

        //Exibe resultados
        while($coluna = mysqli_fetch_array($result)){
?>

            <?php echo $coluna['id'];?>
            <?php echo $coluna['nome']?>
            <?php echo $coluna['email']?>

        <?php
        }//fim whilw
        ?>

        <?php
    }//fim else
}
?>

<?php //criar botao "Gerar" no html ?>
    
