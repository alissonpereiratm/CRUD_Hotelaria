<?php
include "conexao.php";
$sql = "DELETE FROM hospede WHERE id_hospede = ". $_GET['cod'];
mysqli_query($conexao, $sql);
header('location: listaHospede.php');
?>