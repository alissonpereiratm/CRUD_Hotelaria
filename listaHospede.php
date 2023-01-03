<?php
include 'conexao.php';
$sql = "SELECT id_hospede, nm_pessoa, nr_CPF, nr_telefone,email,duvidas
FROM hospede";
$resultado = mysqli_query($conexao, $sql);
?>

<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/4d0cdf4c93.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="imagens/LOGO.png" type="image/x-icon">
    <title>Lista de Cadastro</title>
</head>
<div class="logoLista">
   
        <img src="imagens/LOGO.png" />
    </a>
</div>

<body id="lista">
    <div class="topoLista">


        <ul>
            <li class="ativo"> <a href="http://localhost/CrudFinal/website.php">HOME</a></li>

        </ul>
    </div>

    <h1><strong> LISTA DE CADASTRO</strong></h1>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOME</th>
                <th scope="col">CPF</th>
                <th scope="col">TELEFONE</th>
                <th scope="col">EMAIL</th>
                <th scope="col">DUVIDAS</th>
                <th scope="col">DELETAR</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($linha = mysqli_fetch_array($resultado)) {
                echo "<tr>";
                echo "<td>$linha[id_hospede]</td>";
                echo "<td>$linha[nm_pessoa]</td>";
                echo "<td>$linha[nr_CPF]</td>";
                echo "<td>$linha[nr_telefone]</td>";
                echo "<td>$linha[email]</td>";
                echo "<td>$linha[duvidas]</td>";
                echo "<td>";
                echo "<a href='excluir.php?cod=$linha[id_hospede]'><img width='40px' src='imagens/lixo.png'/></a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>