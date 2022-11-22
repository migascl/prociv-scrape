<?php

error_reporting(0);

$connection = mysqli_connect('localhost','root','', 'dados');
$result1 = mysqli_query($connection, "
SELECT count(id) as Ocorrencias, 
    CASE
    WHEN data_O >= '2019.01.01 00:00' and data_O <= '2019.01.31 23:59' THEN count(id)/31
    WHEN data_O >= '2019.02.01 00:00' and data_O <= '2019.02.28 23:59' THEN count(id)/28
    WHEN data_O >= '2019.03.01 00:00' and data_O <= '2019.03.31 23:59' THEN count(id)/31
    WHEN data_O >= '2019.04.01 00:00' and data_O <= '2019.04.30 23:59' THEN count(id)/30
    WHEN data_O >= '2019.05.01 00:00' and data_O <= '2019.05.31 23:59' THEN count(id)/31
    WHEN data_O >= '2019.06.01 00:00' and data_O <= '2019.06.30 23:59' THEN count(id)/30
    WHEN data_O >= '2019.07.01 00:00' and data_O <= '2019.07.31 23:59' THEN count(id)/31
    WHEN data_O >= '2019.08.01 00:00' and data_O <= '2019.08.31 23:59' THEN count(id)/31
    WHEN data_O >= '2019.09.01 00:00' and data_O <= '2019.09.30 23:59' THEN count(id)/30
    WHEN data_O >= '2019.10.01 00:00' and data_O <= '2019.10.31 23:59' THEN count(id)/31
    WHEN data_O >= '2019.11.01 00:00' and data_O <= '2019.11.30 23:59' THEN count(id)/30
    WHEN data_O >= '2019.12.01 00:00' and data_O <= '2019.12.31 23:59' THEN count(id)/31
    END AS Media_Diaria,
      
    CASE
    WHEN data_O >= '2019.01.01 00:00' and data_O <= '2019.01.31 23:59' THEN 'A'
    WHEN data_O >= '2019.02.01 00:00' and data_O <= '2019.02.28 23:59' THEN 'B'
    WHEN data_O >= '2019.03.01 00:00' and data_O <= '2019.03.31 23:59' THEN 'C'
    WHEN data_O >= '2019.04.01 00:00' and data_O <= '2019.04.30 23:59' THEN 'D'
    WHEN data_O >= '2019.05.01 00:00' and data_O <= '2019.05.31 23:59' THEN 'E'
    WHEN data_O >= '2019.06.01 00:00' and data_O <= '2019.06.30 23:59' THEN 'F'
    WHEN data_O >= '2019.07.01 00:00' and data_O <= '2019.07.31 23:59' THEN 'G'
    WHEN data_O >= '2019.08.01 00:00' and data_O <= '2019.08.31 23:59' THEN 'H'
    WHEN data_O >= '2019.09.01 00:00' and data_O <= '2019.09.30 23:59' THEN 'I'
    WHEN data_O >= '2019.10.01 00:00' and data_O <= '2019.10.31 23:59' THEN 'J'
    WHEN data_O >= '2019.11.01 00:00' and data_O <= '2019.11.30 23:59' THEN 'K'
    WHEN data_O >= '2019.12.01 00:00' and data_O <= '2019.12.31 23:59' THEN 'L'
    END AS Mes      
FROM dados
WHERE natureza = 'Protecção e Assistência a Pessoas e Bens / Intervenção em conflitos legais / Agressão/Violação' 
OR natureza = 'Protecção e Assistência a Pessoas e Bens / Intervenção em conflitos legais / Suicídio/Homicídio consumado'
OR natureza = 'Protecção e Assistência a Pessoas e Bens / Intervenção em conflitos legais / Suicídio/Homicídio na forma tentada'
GROUP BY Mes
ORDER BY Mes
");

$result2 = mysqli_query($connection, "
SELECT count(id) as Ocorrencias, CASE
    WHEN data_O >= '2019.01.01 00:00' and data_O <= '2019.01.31 23:59' THEN count(id)/31
    WHEN data_O >= '2019.02.01 00:00' and data_O <= '2019.02.28 23:59' THEN count(id)/28
    WHEN data_O >= '2019.03.01 00:00' and data_O <= '2019.03.31 23:59' THEN count(id)/31
    WHEN data_O >= '2019.04.01 00:00' and data_O <= '2019.04.30 23:59' THEN count(id)/30
    WHEN data_O >= '2019.05.01 00:00' and data_O <= '2019.05.31 23:59' THEN count(id)/31
    WHEN data_O >= '2019.06.01 00:00' and data_O <= '2019.06.30 23:59' THEN count(id)/30
    WHEN data_O >= '2019.07.01 00:00' and data_O <= '2019.07.31 23:59' THEN count(id)/31
    WHEN data_O >= '2019.08.01 00:00' and data_O <= '2019.08.31 23:59' THEN count(id)/31
    WHEN data_O >= '2019.09.01 00:00' and data_O <= '2019.09.30 23:59' THEN count(id)/30
    WHEN data_O >= '2019.10.01 00:00' and data_O <= '2019.10.31 23:59' THEN count(id)/31
    WHEN data_O >= '2019.11.01 00:00' and data_O <= '2019.11.30 23:59' THEN count(id)/30
    WHEN data_O >= '2019.12.01 00:00' and data_O <= '2019.12.31 23:59' THEN count(id)/31
    END AS Media_Diaria,
      
    CASE
    WHEN data_O >= '2019.01.01 00:00' and data_O <= '2019.01.31 23:59' THEN 'A'
    WHEN data_O >= '2019.02.01 00:00' and data_O <= '2019.02.28 23:59' THEN 'B'
    WHEN data_O >= '2019.03.01 00:00' and data_O <= '2019.03.31 23:59' THEN 'C'
    WHEN data_O >= '2019.04.01 00:00' and data_O <= '2019.04.30 23:59' THEN 'D'
    WHEN data_O >= '2019.05.01 00:00' and data_O <= '2019.05.31 23:59' THEN 'E'
    WHEN data_O >= '2019.06.01 00:00' and data_O <= '2019.06.30 23:59' THEN 'F'
    WHEN data_O >= '2019.07.01 00:00' and data_O <= '2019.07.31 23:59' THEN 'G'
    WHEN data_O >= '2019.08.01 00:00' and data_O <= '2019.08.31 23:59' THEN 'H'
    WHEN data_O >= '2019.09.01 00:00' and data_O <= '2019.09.30 23:59' THEN 'I'
    WHEN data_O >= '2019.10.01 00:00' and data_O <= '2019.10.31 23:59' THEN 'J'
    WHEN data_O >= '2019.11.01 00:00' and data_O <= '2019.11.30 23:59' THEN 'K'
    WHEN data_O >= '2019.12.01 00:00' and data_O <= '2019.12.31 23:59' THEN 'L'
    END AS Mes    
FROM dados
WHERE natureza = 'Riscos Tecnológicos / Acidentes / Colisão rodoviária' 
OR natureza = 'Riscos Tecnológicos / Acidentes / Atropelamento rodoviário'
OR natureza = 'Riscos Tecnológicos / Acidentes / Despiste'
GROUP BY Mes
ORDER BY Mes
");

$result3 = mysqli_query($connection, "
SELECT count(id) as Ocorrencias, CASE
    WHEN data_O >= '2019.01.01 00:00' and data_O <= '2019.01.31 23:59' THEN count(id)/31
    WHEN data_O >= '2019.02.01 00:00' and data_O <= '2019.02.28 23:59' THEN count(id)/28
    WHEN data_O >= '2019.03.01 00:00' and data_O <= '2019.03.31 23:59' THEN count(id)/31
    WHEN data_O >= '2019.04.01 00:00' and data_O <= '2019.04.30 23:59' THEN count(id)/30
    WHEN data_O >= '2019.05.01 00:00' and data_O <= '2019.05.31 23:59' THEN count(id)/31
    WHEN data_O >= '2019.06.01 00:00' and data_O <= '2019.06.30 23:59' THEN count(id)/30
    WHEN data_O >= '2019.07.01 00:00' and data_O <= '2019.07.31 23:59' THEN count(id)/31
    WHEN data_O >= '2019.08.01 00:00' and data_O <= '2019.08.31 23:59' THEN count(id)/31
    WHEN data_O >= '2019.09.01 00:00' and data_O <= '2019.09.30 23:59' THEN count(id)/30
    WHEN data_O >= '2019.10.01 00:00' and data_O <= '2019.10.31 23:59' THEN count(id)/31
    WHEN data_O >= '2019.11.01 00:00' and data_O <= '2019.11.30 23:59' THEN count(id)/30
    WHEN data_O >= '2019.12.01 00:00' and data_O <= '2019.12.31 23:59' THEN count(id)/31
    END AS Media_Diaria,
      
    CASE
    WHEN data_O >= '2019.01.01 00:00' and data_O <= '2019.01.31 23:59' THEN 'A'
    WHEN data_O >= '2019.02.01 00:00' and data_O <= '2019.02.28 23:59' THEN 'B'
    WHEN data_O >= '2019.03.01 00:00' and data_O <= '2019.03.31 23:59' THEN 'C'
    WHEN data_O >= '2019.04.01 00:00' and data_O <= '2019.04.30 23:59' THEN 'D'
    WHEN data_O >= '2019.05.01 00:00' and data_O <= '2019.05.31 23:59' THEN 'E'
    WHEN data_O >= '2019.06.01 00:00' and data_O <= '2019.06.30 23:59' THEN 'F'
    WHEN data_O >= '2019.07.01 00:00' and data_O <= '2019.07.31 23:59' THEN 'G'
    WHEN data_O >= '2019.08.01 00:00' and data_O <= '2019.08.31 23:59' THEN 'H'
    WHEN data_O >= '2019.09.01 00:00' and data_O <= '2019.09.30 23:59' THEN 'I'
    WHEN data_O >= '2019.10.01 00:00' and data_O <= '2019.10.31 23:59' THEN 'J'
    WHEN data_O >= '2019.11.01 00:00' and data_O <= '2019.11.30 23:59' THEN 'K'
    WHEN data_O >= '2019.12.01 00:00' and data_O <= '2019.12.31 23:59' THEN 'L'
    END AS Mes    
FROM dados
WHERE natureza = 'Riscos Tecnológicos / Incêndios Urbanos ou em Área Urbanizável / Habitacional'
OR natureza = 'Riscos Mistos / Incêndios Rurais / Mato'
GROUP BY Mes
ORDER BY Mes
");

if(mysqli_num_rows($result1)>0){	
    while($row1 = mysqli_fetch_array($result1)){
        $output1[] = $row1['Media_Diaria'];
				}
			}	
if(mysqli_num_rows($result2)>0){	
    while($row2 = mysqli_fetch_array($result2)){
        $output2[] = $row2['Media_Diaria'];
				}
			}	
if(mysqli_num_rows($result3)>0){	
    while($row3 = mysqli_fetch_array($result3)){
        $output3[] = $row3['Media_Diaria'];
				}
			}	

$dataPoints1 = array(
	array("label"=> "Janeiro", "y"=> $output1[1]),
	array("label"=> "Fevereiro", "y"=> $output1[2]),
	array("label"=> "Março", "y"=> $output1[3]),
	array("label"=> "Abril", "y"=> $output1[4]),
	array("label"=> "Maio", "y"=> $output1[5]),
	array("label"=> "Junho", "y"=> $output1[6]),
	array("label"=> "Julho", "y"=> $output1[7]),
	array("label"=> "Agosto", "y"=> $output1[8]),
	array("label"=> "Setembro", "y"=> $output1[9]),
	array("label"=> "Outubro", "y"=> $output1[10]),
	array("label"=> "Novembro", "y"=> $output1[11]),
	array("label"=> "Dezembro", "y"=> $output1[12])
);
 
$dataPoints2 = array(
	array("label"=> "Janeiro", "y"=> $output2[1]),
	array("label"=> "Fevereiro", "y"=> $output2[2]),
	array("label"=> "Março", "y"=> $output2[3]),
	array("label"=> "Abril", "y"=> $output2[4]),
	array("label"=> "Maio", "y"=> $output2[5]),
	array("label"=> "Junho", "y"=> $output2[6]),
	array("label"=> "Julho", "y"=> $output2[7]),
	array("label"=> "Agosto", "y"=> $output2[8]),
	array("label"=> "Setembro", "y"=> $output2[9]),
	array("label"=> "Outubro", "y"=> $output2[10]),
	array("label"=> "Novembro", "y"=> $output2[11]),
	array("label"=> "Dezembro", "y"=> $output2[12])
);
 
$dataPoints3 = array(
	array("label"=> "Janeiro", "y"=> $output3[1]),
	array("label"=> "Fevereiro", "y"=> $output3[2]),
	array("label"=> "Março", "y"=> $output3[3]),
	array("label"=> "Abril", "y"=> $output3[4]),
	array("label"=> "Maio", "y"=> $output3[5]),
	array("label"=> "Junho", "y"=> $output3[6]),
	array("label"=> "Julho", "y"=> $output3[7]),
	array("label"=> "Agosto", "y"=> $output3[8]),
	array("label"=> "Setembro", "y"=> $output3[9]),
	array("label"=> "Outubro", "y"=> $output3[10]),
	array("label"=> "Novembro", "y"=> $output3[11]),
	array("label"=> "Dezembro", "y"=> $output3[12])
);
 
?>
<!DOCTYPE HTML>

<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		text: "Media de Casos Mensais em 2019"
	},
	theme: "light1",
	animationEnabled: true,
	toolTip:{
		shared: true,
		reversed: true
	},
	axisY: {
		title: "Casos/Mês",
		suffix: " Casos"
	},
	legend: {
		cursor: "pointer",
		itemclick: toggleDataSeries
	},
	data: [
		{
			type: "stackedColumn",
			name: "Crimes",
			showInLegend: true,
			yValueFormatString: "#,##0 Casos",
			dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
		},{
			type: "stackedColumn",
			name: "Acidentes Rodoviarios",
			showInLegend: true,
			yValueFormatString: "#,##0 Casos",
			dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
		},{
			type: "stackedColumn",
			name: "Incêndios",
			showInLegend: true,
			yValueFormatString: "#,##0 Casos",
			dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
		}
	]
});
 
chart.render();
 
function toggleDataSeries(e) {
	if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	} else {
		e.dataSeries.visible = true;
	}
	e.chart.render();
}
 
}
</script>
<div class="navbar">
    <a href="/home/index.php">Ínicio</a>
    <div class="dropdown">
        <button class="dropbtn">2019
            <i class="fa fa-caret-down"></i>
        </button>
            <div class="dropdown-content">
                <a href="/home/graphs/2019/total.php">Casos Baseados em Mês</a>
                <a href="/home/graphs/2019/local.php">Casos Baseados em Localizacoes</a>
                <a href="/home/graphs/2019/media.php">Media de Casos</a>
            </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">2020
            <i class="fa fa-caret-down"></i>
        </button>
            <div class="dropdown-content">
                <a href="/home/graphs/2020/total.php">Casos Baseados em Mês</a>
                <a href="/home/graphs/2020/local.php">Casos Baseados em Localizacoes</a>
                <a href="/home/graphs/2020/media.php">Media de Casos</a>
            </div>
    </div>
    <a href="/home/sobre.php">Sobre</a>

</div>
<style>
    /* Navbar container */
    
    .navbar {
      overflow: hidden;
      background-color: #333;
      font-family: Arial;
    }

    /* Links inside the navbar */
    .navbar a {
      float: left;
      font-size: 16px;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    /* The dropdown container */
    .dropdown {
      float: left;
      overflow: hidden;
    }

    /* Dropdown button */
    .dropdown .dropbtn {
      font-size: 16px;
      border: none;
      outline: none;
      color: white;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit; /* Important for vertical align on mobile phones */
      margin: 0; /* Important for vertical align on mobile phones */
    }

    /* Add a red background color to navbar links on hover */
    .navbar a:hover, .dropdown:hover .dropbtn {
      background-color: #7EA8F8;
    }

    /* Dropdown content (hidden by default) */
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
      float: none;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    /* Add a grey background color to dropdown links on hover */
    .dropdown-content a:hover {
      background-color: #ddd;
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
      display: block;
    }
</style>

<div id="chartContainer" style="height: 350px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>