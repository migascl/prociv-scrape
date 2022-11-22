<?php

error_reporting(0);

$connection = mysqli_connect('localhost','root','', 'dados');
$result1 = mysqli_query($connection, "
SELECT distrito, count(natureza) as Ocorrencias
FROM dados
WHERE natureza = 'Protecção e Assistência a Pessoas e Bens / Intervenção em conflitos legais / Agressão/Violação' 
OR natureza = 'Protecção e Assistência a Pessoas e Bens / Intervenção em conflitos legais / Suicídio/Homicídio consumado'
OR natureza = 'Protecção e Assistência a Pessoas e Bens / Intervenção em conflitos legais / Suicídio/Homicídio na forma tentada'
AND data_O >= '2019.01.01 00:00' and data_O <= '2019.12.31 23:59'
GROUP BY distrito
ORDER BY Ocorrencias DESC;
");

$result2 = mysqli_query($connection, "
SELECT distrito, count(natureza) as Ocorrencias
FROM dados
WHERE natureza = 'Riscos Tecnológicos / Acidentes / Colisão rodoviária' 
OR natureza = 'Riscos Tecnológicos / Acidentes / Atropelamento rodoviário'
OR natureza = 'Riscos Tecnológicos / Acidentes / Despiste'
AND data_O >= '2019.01.01 00:00' and data_O <= '2019.12.31 23:59'
GROUP BY distrito
ORDER BY Ocorrencias DESC;
");

$result3 = mysqli_query($connection, "
SELECT distrito, count(natureza) as Ocorrencias
FROM dados
WHERE natureza = 'Riscos Tecnológicos / Incêndios Urbanos ou em Área Urbanizável / Habitacional'
OR natureza = 'Riscos Mistos / Incêndios Rurais / Mato'
AND data_O >= '2019.01.01 00:00' and data_O <= '2019.12.31 23:59'
GROUP BY distrito
ORDER BY Ocorrencias DESC;
");

$result4 = mysqli_query($connection, "
SELECT distrito, count(natureza) as Ocorrencias
FROM dados
WHERE natureza = 'Protecção e Assistência a Pessoas e Bens / Intervenção em conflitos legais / Agressão/Violação' 
OR natureza = 'Protecção e Assistência a Pessoas e Bens / Intervenção em conflitos legais / Suicídio/Homicídio consumado'
OR natureza = 'Protecção e Assistência a Pessoas e Bens / Intervenção em conflitos legais / Suicídio/Homicídio na forma tentada'
OR natureza = 'Riscos Tecnológicos / Acidentes / Colisão rodoviária' 
OR natureza = 'Riscos Tecnológicos / Acidentes / Atropelamento rodoviário'
OR natureza = 'Riscos Tecnológicos / Acidentes / Despiste'
OR natureza = 'Riscos Tecnológicos / Incêndios Urbanos ou em Área Urbanizável / Habitacional'
OR natureza = 'Riscos Mistos / Incêndios Rurais / Mato'
AND data_O >= '2019.01.01 00:00' and data_O <= '2019.12.31 23:59'
GROUP BY distrito
ORDER BY Ocorrencias DESC;
");


if(mysqli_num_rows($result1)>0){	
    while($row1 = mysqli_fetch_array($result1)){
        $output1[] = $row1['Ocorrencias'];
				}
			}	
if(mysqli_num_rows($result2)>0){	
    while($row2 = mysqli_fetch_array($result2)){
        $output2[] = $row2['Ocorrencias'];
				}
			}	
if(mysqli_num_rows($result3)>0){	
    while($row3 = mysqli_fetch_array($result3)){
        $output3[] = $row3['Ocorrencias'];
				}
			}	
if(mysqli_num_rows($result4)>0){	
    while($row4 = mysqli_fetch_array($result4)){
        $output4[] = $row4['distrito'];
				}
			}

$dataPoints1 = array(
	array("label"=> $output4[0], "y"=> $output1[0]),
	array("label"=> $output4[1], "y"=> $output1[1]),
	array("label"=> $output4[2], "y"=> $output1[2]),
	array("label"=> $output4[3], "y"=> $output1[3]),
	array("label"=> $output4[4], "y"=> $output1[4]),
	array("label"=> $output4[5], "y"=> $output1[5]),
	array("label"=> $output4[6], "y"=> $output1[6]),
	array("label"=> $output4[7], "y"=> $output1[7]),
	array("label"=> $output4[8], "y"=> $output1[8]),
	array("label"=> $output4[9], "y"=> $output1[9]),
	array("label"=> $output4[10], "y"=> $output1[10]),
	array("label"=> $output4[11], "y"=> $output1[11]),
	array("label"=> $output4[12], "y"=> $output1[12]),
	array("label"=> $output4[13], "y"=> $output1[13]),
	array("label"=> $output4[14], "y"=> $output1[14]),
	array("label"=> $output4[15], "y"=> $output1[15]),
	array("label"=> $output4[16], "y"=> $output1[16]),
	array("label"=> $output4[17], "y"=> $output1[17])
);
 
$dataPoints2 = array(
	array("label"=> $output4[0], "y"=> $output2[0]),
	array("label"=> $output4[1], "y"=> $output2[1]),
	array("label"=> $output4[2], "y"=> $output2[2]),
	array("label"=> $output4[3], "y"=> $output2[3]),
	array("label"=> $output4[4], "y"=> $output2[4]),
	array("label"=> $output4[5], "y"=> $output2[5]),
	array("label"=> $output4[6], "y"=> $output2[6]),
	array("label"=> $output4[7], "y"=> $output2[7]),
	array("label"=> $output4[8], "y"=> $output2[8]),
	array("label"=> $output4[9], "y"=> $output2[9]),
	array("label"=> $output4[10], "y"=> $output2[10]),
	array("label"=> $output4[11], "y"=> $output2[11]),
	array("label"=> $output4[12], "y"=> $output2[12]),
	array("label"=> $output4[13], "y"=> $output2[13]),
	array("label"=> $output4[14], "y"=> $output2[14]),
	array("label"=> $output4[15], "y"=> $output2[15]),
	array("label"=> $output4[16], "y"=> $output2[16]),
	array("label"=> $output4[17], "y"=> $output2[17])
);
 
$dataPoints3 = array(
	array("label"=> $output4[0], "y"=> $output3[0]),
	array("label"=> $output4[1], "y"=> $output3[1]),
	array("label"=> $output4[2], "y"=> $output3[2]),
	array("label"=> $output4[3], "y"=> $output3[3]),
	array("label"=> $output4[4], "y"=> $output3[4]),
	array("label"=> $output4[5], "y"=> $output3[5]),
	array("label"=> $output4[6], "y"=> $output3[6]),
	array("label"=> $output4[7], "y"=> $output3[7]),
	array("label"=> $output4[8], "y"=> $output3[8]),
	array("label"=> $output4[9], "y"=> $output3[9]),
	array("label"=> $output4[10], "y"=> $output3[10]),
	array("label"=> $output4[11], "y"=> $output3[11]),
	array("label"=> $output4[12], "y"=> $output3[12]),
	array("label"=> $output4[13], "y"=> $output3[13]),
	array("label"=> $output4[14], "y"=> $output3[14]),
	array("label"=> $output4[15], "y"=> $output3[15]),
	array("label"=> $output4[16], "y"=> $output3[16]),
	array("label"=> $output4[17], "y"=> $output3[17])
);
 
?>
<!DOCTYPE HTML>
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

<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		text: "Casos Baseados em Localizações em 2019"
	},
	theme: "light1",
	animationEnabled: true,
	toolTip:{
		shared: true,
		reversed: true
	},
	axisY: {
		title: "Número de Casos",
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
<div id="chartContainer" style="height: 350px; width: 100%;"></div>
<a href="/home/index.php">Voltar</a>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>