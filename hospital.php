<?php
include 'corona.php';
$page = "Hospital";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
    table{
        margin: 5px;
    }
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th{
        text-transform: uppercase;
    }
</style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
<?php
    include 'header.php';

    //Ambil Data RS
    $url_RS_Rujukan="https://dekontaminasi.com/api/id/covid19/hospitals";
    $res=ambil_url($url_RS_Rujukan);

    function build_table($res){
        // start table
        $html = '<table>';
        // header row
        $html .= '<tr>';
        foreach($res[0] as $key=>$value){
                $html .= '<th>' . htmlspecialchars($key) . '</th>';
            }
        $html .= '</tr>';
    
        // data rows
        foreach( $res as $key=>$value){
            $html .= '<tr>';
            foreach($value as $key2=>$value2){
                $html .= '<td>' . htmlspecialchars($value2) . '</td>';
            }
            $html .= '</tr>';
        }
    
        // finish table and return it
    
        $html .= '</table>';
        return $html;
    }
    echo build_table($res);

?>

</body>
</html>
