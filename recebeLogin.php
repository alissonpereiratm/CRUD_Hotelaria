<?php
include 'conexao.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "SELECT login,senha FROM administrador WHERE login='$login'";

$resultado = mysqli_query($conexao, $sql);

while ($linha = mysqli_fetch_array($resultado)) {


    


    mysqli_query($conexao, $sql);
    
    if ($linha['senha'] == $senha) {

        header('location: listaHospede.php');
    }else{
        header('location: adm.php');
    }
}