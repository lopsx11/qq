

<?php
    include 'conecta.php';
    $sql = "SELECT 
                esportes, 
                COUNT(*) as total 
            FROM quest 
            GROUP BY esportes 
            ORDER BY total DESC";
    
    $resultado1 = $conn->query($sql);

    $dados_grafico1 = [['quest', 'Total de esportes']];
    if ($resultado1->num_rows > 0) {
        while($linha = $resultado1->fetch_assoc()) {
            $dados_grafico1[] = [$linha['esportes'], (int)$linha['total']];
        }
    }
    $conn->close();
    $dados_json = json_encode($dados_grafico1);
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
                width: 400,
                height: 150,
                bar: {groupWidth: "85%"},
                legend: { position: 'none' }
            };
            var chart = new google.visualization.ColumnChart(document.getElementById('grafico_coluna'));
            chart.draw(data, options);
        }
    </script>
  </head>
  <body>
    <div id="grafico_coluna" style="width: 400px; height: 150px;"></div>
  </body>
</html>