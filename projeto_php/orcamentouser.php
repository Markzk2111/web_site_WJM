<?php  

include "database.php";

$cod=$_POST['cod'];
$qtd=$_POST['qtd'];
$endereco=$_POST['endereco'];
$complemento=$_POST['complemento'];
$cidade=$_POST['cidade'];
$estado=$_POST['estado'];
$cep=$_POST['cep'];


$sql="INSERT INTO `marcus_wjm_produtos` (cod, qtd, endereco, complemento, cidade, estado, cep) VALUES ('$cod', '$qtd', '$endereco', '$complemento', '$cidade', '$estado', '$cep'); ";

if(mysqli_query($conexao,$sql))
{
    header("Location: index.php");
}
else
{
    echo "Falha ao enviar orçamento";
}
?>