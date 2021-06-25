<?php 

//$mensagem = "Olá Mundo"; //declarando variavel

//echo $mensagem;

$endereco = 'localhost';
$usuario = 'root';
$senha = 'senac';
$banco = 'amparo';

$link = mysqli_connect($endereco, $usuario, $senha, $banco)
or die('Erro: ' .mysqli_error($link));

$sql = "insert into cadastro values";
$sql .= "(null,";
$sql .= "'".$_POST['nome']."',"; 
$sql .= "'".$_POST['tel']."',"; 
$sql .= "'".$_POST['email']."',"; 
$sql .= "'".$_POST['senha']."',"; 
$sql .= "'".$_POST['cep']."',"; 
$sql .= "'".$_POST['endereco']."',";
$sql .= "'".$_POST['complemento']."',";
$sql .= "'".$_POST['cidade']."',";
$sql .= "'".$_POST['estado']."')";


$consulta = mysqli_query($link, $sql);

if (!$consulta) {
    
    die('Erro: '.mysqli_error($link));

}else {
    
    echo "Matricula efetuada com sucesso.";
}



?>