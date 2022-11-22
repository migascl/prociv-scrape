<?php
if($_POST["dados"]){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "prociv_data";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	$dados = explode("||",$_POST["dados"]);
	mysqli_query($conn,"INSERT INTO `dados`(`id`, `data_o`, `data_f`, `natureza`, `estado`, `distrito`, `cncelho`, `freguesia`, `localidade`, `latitude`, `longitude`, `rec_hum_ter`, `rec_tec_ter`, `rec_hum_aer`, `rec_tec_aer`) VALUES ('".$dados[0]."','".$dados[1]."','".$dados[2]."','".$dados[3]."','".$dados[4]."','".$dados[5]."','".$dados[6]."','".$dados[7]."','".$dados[8]."','".$dados[9]."','".$dados[10]."',".$dados[11].",".$dados[12].",".$dados[13].",".$dados[14].")") or die(mysqli_error($conn)."INSERT INTO `dados`(`id`, `data_o`, `data_f`, `natureza`, `estado`, `distrito`, `cncelho`, `freguesia`, `localidade`, `latitude`, `longitude`, `rec_hum_ter`, `rec_tec_ter`, `rec_hum_aer`, `rec_tec_aer`) VALUES ('".$dados[0]."','".$dados[1]."','".$dados[2]."','".$dados[3]."','".$dados[4]."','".$dados[5]."','".$dados[6]."','".$dados[7]."','".$dados[8]."','".$dados[9]."','".$dados[10]."',".$dados[11].",".$dados[12].",".$dados[13].",".$dados[14].")");
	
	mysqli_close($conn);
}
?>