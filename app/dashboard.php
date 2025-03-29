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

$data = [];
$result = $link->query("SELECT Host, COUNT(*) as total FROM dados GROUP BY Host");
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}
?>

<html>
<head>
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<h2>Quantidade de registros por Host</h2>
<canvas id="myChart" width="400" height="200"></canvas>
<script>
const labels = <?= json_encode(array_column($data, 'Host')) ?>;
const values = <?= json_encode(array_column($data, 'total')) ?>;

new Chart(document.getElementById("myChart"), {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [{
            label: 'Total por Host',
            data: values,
            borderWidth: 1
        }]
    }
});
</script>
</body>
</html>
