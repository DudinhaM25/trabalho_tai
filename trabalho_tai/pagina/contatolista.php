<?php
include "../database/bd.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Lista Contatos</h2>
    <form action="./contatolista.php" method="post">
        <input type="search" name="nome" placeholder="Pesquisar nome">
        <input type="search" name="sobrenome" placeholder="Pesquisar sobrenome">
        <input type="search" name="telefone01" placeholder="Pesquisar telefone01">
        <input type="search" name="tipo_telefone01" placeholder="Pesquisar tipo_telefone01">
        <input type="search" name="telefone02" placeholder="Pesquisar telefone02">
        <input type="search" name="tipo_telefone02" placeholder="Pesquisar tipo_telefone02">
        <input type="search" name="email" placeholder="Pesquisar email">
        <input type="submit" value="Pesquisar">
    </form>
    <a href="./contatoformulario.php">Cadastrar</a> <br>
    <?php
    $objBD = new BD();
    $objBD->conn();

    if (!empty($_POST['nome'])) {
        $result = $objBD->pesquisar($_POST);
    } else {
        $result = $objBD->select();
    }

    if (!empty($_GET['id'])) {
        $objBD->remover($_GET['id']);
        header("location: contatolista.php");
    }

    echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Telefone01</th>
                    <th>tipo_telefone01</th>
                    <th>Telefone02</th>
                    <th>tipo_telefone02</th>
                    <th>email</th>
                </tr>
            ";
    foreach ($result as $item) {
        echo "
        <tr>
            <td>" . $item['id'] . "</td>
            <td>" . $item['nome'] . "</td>
            <td>" . $item['sobrenome'] . "</td>
            <td>" . $item['telefone01'] . "</td>
            <td>" . $item['tipo_telefone01'] . "</td>
            <td>" . $item['telefone02'] . "</td>
            <td>" . $item['tipo_telefone02'] . "</td>
            <td>" . $item['email'] . "</td>
            <td><a href='./contatoformulario.php?id=" . $item['id'] . "'>Editar</a></td>
            <td><a href='./contatolista.php?id=" . $item['id'] . "'
                   onclick=\"return confirm('Deseja remover o registro?') \" >Deletar</a></td>
        </tr>";
    }
    echo "</table>";
    ?>

    <a href="../index.php">Voltar</a>
</body>

</html>