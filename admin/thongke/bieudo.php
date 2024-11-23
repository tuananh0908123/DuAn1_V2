<div class="row">
    <div id="myChart" style="width:100%; max-width: 600px; height:500px;"></div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            const data = google.visualization.arrayToDataTable([ 
                ['Danh mục', 'Số lượng'],
                <?php
                    $tongdm = count($listbieudo);
                    $i = 0; // Bắt đầu từ 0
                    foreach ($listbieudo as $bieudo) {
                        extract($bieudo);
                        $dauphay = ($i == $tongdm - 1) ? "" : ",";
                        echo "['" . $bieudo['tendm'] . "', " . $bieudo['countsp'] . "]" . $dauphay; 
                        $i++;
                    }
                ?>
            ]);

            const options = {
                title: 'Biểu đồ thống kê'
            };

            const chart = new google.visualization.PieChart(document.getElementById('myChart')); 
            chart.draw(data, options);
        }
    </script>
</div>