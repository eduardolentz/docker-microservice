<?php
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=iso-8859-1');

$servername = "db";
$username = getenv("MYSQL_USER") ?: "root";
$password = getenv("MYSQL_PASSWORD") ?: "Senha123";
$database = getenv("MYSQL_DATABASE") ?: "meubanco";

$link = new mysqli($servername, $username, $password, $database);

if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

$result = $link->query("SELECT * FROM dados ORDER BY AlunoID DESC");
?>

<html>
<head>
<title>Registros</title>
</head>
<body>
<h2>Registros no Banco de Dados</h2>
<table border="1">
    <tr>
        <th>ID</th><th>Nome</th><th>Sobrenome</th><th>Endereço</th><th>Cidade</th><th>Host</th>
    </tr>
    <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row["AlunoID"] ?></td>
            <td><?= $row["Nome"] ?></td>
            <td><?= $row["Sobrenome"] ?></td>
            <td><?= $row["Endereco"] ?></td>
            <td><?= $row["Cidade"] ?></td>
            <td><?= $row["Host"] ?></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>
