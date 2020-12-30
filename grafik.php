<?php
include 'corona.php';
$page = "Grafik";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Corona</title>
  </head>
<body>
<?php 
    include 'header.php'; 

    $prov_meni = array() ;    
    for ($x = 0; $x <= 10; $x++) {
        array_push($prov_meni, array("label"=> $data_prov[$x]->attributes->Provinsi, "y"=> $data_prov[$x]->attributes->Kasus_Meni)) ;
    }

    $prov_semb = array() ;    
    for ($x = 0; $x <= 10; $x++) {
        array_push($prov_semb, array("label"=> $data_prov[$x]->attributes->Provinsi, "y"=> $data_prov[$x]->attributes->Kasus_Semb)) ;
    }

    $prov_pos = array() ;    
    for ($x = 0; $x <= 10; $x++) {
        array_push($prov_pos, array("label"=> $data_prov[$x]->attributes->Provinsi, "y"=> $data_prov[$x]->attributes->Kasus_Posi)) ;
    }

?>


<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "10 PROVINSI DENGAN KASUS COVID-19 TERBANYAK"
	},
	axisX:{
		reversed: true
	},
	axisY:{
		includeZero: true
	},
	toolTip:{
		shared: true
	},
	data: [{
		type: "stackedBar",
        name: "Sembuh",
        dataPoints: <?php echo json_encode($prov_semb, JSON_NUMERIC_CHECK);?>
    },{
		type: "stackedBar",
		name: "Meninggal",
		dataPoints: <?php echo json_encode($prov_meni, JSON_NUMERIC_CHECK); ?>
    },{
		type: "stackedBar",
		name: "Positif",
		dataPoints: <?php echo json_encode($prov_pos, JSON_NUMERIC_CHECK); ?>
	}
]
});
chart.render();
 
}
</script>

<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>               