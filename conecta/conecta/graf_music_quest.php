<?php
    include 'conecta.php';

    // Força a conexão a usar UTF-8
    $conn->set_charset("utf8");

    // Tratamento de erro de conexão
    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }

    $sql = "SELECT musicas, COUNT(*) as total FROM quest GROUP BY musicas ORDER BY total DESC";
    $resultado2 = $conn->query($sql);

    if (!$resultado2) {
        die("Erro na consulta: " . $conn->error);
    }

    $dados_grafico2 = [['Músicas', 'Total']];
    if ($resultado2->num_rows > 0) {
        while($linha = $resultado2->fetch_assoc()) {
            $dados_grafico2[] = [$linha['musicas'], (int)$linha['total']];
        }
    }

    $conn->close();
    $dados_json = json_encode($dados_grafico2, JSON_UNESCAPED_UNICODE);
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable(<?php echo $dados_json; ?>);
            var options = {
                title: 'Preferência Musical',
                width: 400,
                height: 150,
                bar: {groupWidth: "85%"},
                legend: { position: 'none' },
                hAxis: {
                    title: 'Músicas'
                },
                vAxis: {
                    title: 'Total de votos'
                }
            };
            var chart = new google.visualization.ColumnChart(document.getElementById('grafico_coluna'));
            chart.draw(data, options);
        }
    </script>
  </head>
  <body>
    <div id="grafico_coluna" style="width: 400%; height: 150px;"></div>
  </body>
</html>