<?php
include('config.php');

//Verifica se o formulário foi enviado
if(!isset($_POST['botao']) && $_POST['botao']=="Gerar"){
    $nome = $_POST['nome'] ?? '';
    $ra = $_POST['ra'] ?? '';

    //Monta query com as condições corretas
    $query = "SELECT * FROM alunos WHERE id > 0";

    if(!empty($nome)){
        $query .= " AND nome LIKE '%$nome'";
    }
    if(!empty($ra)){
        $query .= " AND ra LIKE '%$ra'";
    }

    //Executa query
    $result = mysqli_query($con, $query);

    if(!$result){
        echo "Erro na consulta: " . mysqli_error($con);
    }else{
        
        while($coluna = mysqli_fetch_array($result)){
?>
            <?php echo $coluna['id'];?>
            <?php echo $coluna['nome'];?>
            <?php echo $coluna['ra'];?>

<?php
        }//fim while
?>

<?php
    }//fim else
}
?>

<?php //criar botao chamado "Gerar" no html para poder gerar a lista ?>