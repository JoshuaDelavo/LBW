<?php
include 'corona.php';
$page = "Grafik";

$url_global="https://api.kawalcorona.com/";
    $result2=ambil_url($url_global);
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
        array_push($prov_pos, array("label"=> $data_prov[$x]->attributes->Provinsi, "y"=> ($data_prov[$x]->attributes->Kasus_Posi - $data_prov[$x]->attributes->Kasus_Meni - $data_prov[$x]->attributes->Kasus_Semb))) ;
    }

//    $dataPerbandingan = array(array("y"=> 268583016, "label"=> "Jumlah Total Penduduk Indonesia"),
// 	array("y"=> 790000, "label"=> "Jumlah Kasus Positif COVID-19")
//    )

	$global_pos = array() ;    
    for ($x = 0; $x <= 10; $x++) {
        array_push($global_pos, array("label"=> $result2[$x]->attributes->Country_Region, "y"=> $result2[$x]->attributes->Confirmed)) ;
    }

?>

<br>
<script>
window.onload = function() {
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "10 PROVINSI DI INDONESIA DENGAN KASUS COVID-19 TERBANYAK"
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
		name: "Aktif",
		dataPoints: <?php echo json_encode($prov_pos, JSON_NUMERIC_CHECK); ?>
	}
]
});
chart.render();
 
//  var chart2 = new CanvasJS.Chart("chartContainer2", {
// 	animationEnabled: true,
// 	theme: "light2",
// 	title:{
// 		text: "Perbandingan Total Penduduk dan Jumlah Kasus Positif COVID-19 di Indonesia"
// 	},
// 	axisY: {
// 		title: "Jumlah"
// 	},
// 	data: [{
// 		type: "column",
		// dataPoints:  <--?php echo json_encode($dataPerbandingan, JSON_NUMERIC_CHECK); ?>
// 	}]
// });
// chart2.render();
 
var chart2 = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	title:{
		text: "10 NEGARA DENGAN KASUS COVID-19 TERBANYAK"
	},
	axisX:{
		reversed: true
	},
	axisY: {
		title: "Confirmed Case",
		includeZero: true,
	},
	data: [{
		type: "bar",
//		yValueFormatString: "$#,##0K",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($global_pos, JSON_NUMERIC_CHECK); ?>
	}]
});
chart2.render(); 
} 
</script>

<div id="chartContainer" style="height: 370px; width: 100%;"></div> <br> <br>
<div id="chartContainer2" style="height: 370px; width: 100%;"></div> <br>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>               