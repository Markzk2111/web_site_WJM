<?php 

include "database.php";

$login=$_POST['username'];
$senha=$_POST['userpassword'];
$email=$_POST['useremail'];
$cel=$_POST['usercel'];

$sql="INSERT INTO `marcus_wjm_user` (username, useremail, usercel, userpassword) VALUES ('$login', '$email', '$cel', '$senha'); ";

if(mysqli_query($conexao,$sql))
{
    header("Location: index.php");
}
else
{
    echo "Falha ao cadastrar usuário";
}

?>