<?php
include 'conexao.php';

$nm_pessoa = $_POST['nm_pessoa'];
$nr_CPF = $_POST['nr_CPF'];
$nr_telefone = $_POST['nr_telefone'];
$nr_cartao = $_POST['nr_cartao'];
$data_nascimento = $_POST['data_nascimento'];
$endereco = $_POST['endereco'];
$duvidas=$_POST['duvidas'];

echo$duvidas;

$sql = "iNSERT INTO hospede (nm_pessoa, nr_CPF, nr_telefone, nr_cartao, data_nascimento, endereco,duvidas)
        VALUES ('". $nm_pessoa . "', '". $nr_CPF ."', '" . $nr_telefone ."', '" . $nr_cartao ."', '" . $data_nascimento ."', '" . $endereco ."','". $duvidas ."')"; 


mysqli_query($conexao, $sql);

header ('location: website.php');