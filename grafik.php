<?php
include 'corona.php';
$page = "Grafik";

$url_global="https://api.kawalcorona.com/";
	$result2=ambil_url($url_global);
	
$url_RS_Rujukan="https://dekontaminasi.com/api/id/covid19/hospitals";
$res=ambil_url($url_RS_Rujukan);

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
    for ($x = 0; $x < 10; $x++) {
        array_push($prov_meni, array("label"=> $data_prov[$x]->attributes->Provinsi, "y"=> $data_prov[$x]->attributes->Kasus_Meni)) ;
    }

    $prov_semb = array() ;    
    for ($x = 0; $x < 10; $x++) {
        array_push($prov_semb, array("label"=> $data_prov[$x]->attributes->Provinsi, "y"=> $data_prov[$x]->attributes->Kasus_Semb)) ;
    }

    $prov_pos = array() ;    
    for ($x = 0; $x < 10; $x++) {
        array_push($prov_pos, array("label"=> $data_prov[$x]->attributes->Provinsi, "y"=> ($data_prov[$x]->attributes->Kasus_Posi - $data_prov[$x]->attributes->Kasus_Meni - $data_prov[$x]->attributes->Kasus_Semb))) ;
    }



	$global_pos = array() ;    
    for ($x = 0; $x < 10; $x++) {
        array_push($global_pos, array("label"=> $result2[$x]->attributes->Country_Region, "y"=> $result2[$x]->attributes->Confirmed)) ;
	}
	
	$hospital_arr = array() ;
	$hospital_arr2 = array() ;
	for ($x = 0; $x < count($res) ; $x++) {
		array_push($hospital_arr, $res[$x]->province);
	}

	$temp = array_count_values($hospital_arr) ;
	arsort($temp) ;
	$coba = $temp ;

	foreach($coba as $key=>$value){
		array_push($hospital_arr2, array("label" => $key, "y" => $value )) ;
	  }
	$rs10 =array();
	  for ($x = 0; $x < 10; $x++) {
        array_push($rs10, $hospital_arr2[$x]) ;
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
 
 var chart2 = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	exportEnabled: true,
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


var chart3 = new CanvasJS.Chart("chartContainer3", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "10 PROVINSI DI INDONESIA DENGAN RUMAH SAKIT RUJUKAN TERBANYAK"
	},
	axisX:{
		reversed: true
	},
	axisY: {
		title: "Jumlah Rumah Sakit",
		includeZero: true,
	},
	data: [{
		type: "bar",
//		yValueFormatString: "$#,##0K",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($rs10, JSON_NUMERIC_CHECK); ?>
	}]
});
chart3.render(); 

} 
</script>

<div id="chartContainer2" style="height: 370px; width: 100%;"></div> <br> <br>
<div id="chartContainer" style="height: 370px; width: 100%;"></div> <br>
<div id="chartContainer3" style="height: 370px; width: 100%;"> </div> <br> <br>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>               