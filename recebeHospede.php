<?php
include 'conexao.php';

$nm_pessoa = $_POST['nm_pessoa'];
$nr_CPF = $_POST['nr_CPF'];
$nr_telefone = $_POST['nr_telefone'];
$email = $_POST['email'];
$duvidas=$_POST['duvidas'];

echo$duvidas;

$sql = "iNSERT INTO hospede (nm_pessoa, nr_CPF, nr_telefone, email,duvidas)
        VALUES ('". $nm_pessoa . "', '". $nr_CPF ."', '" . $nr_telefone ."', '" . $email ."','". $duvidas ."')"; 


mysqli_query($conexao, $sql);

header ('location: website.php');