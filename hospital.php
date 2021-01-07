<?php
include 'corona.php';
$page = "Hospital";
?>
<!DOCTYPE html>
<html lang="en">
<head>

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
    $nama=$res->name;
    $alamat=$res->address;
    $daerah=$res->region;
    $tlp=$res->phone;
    $provinsi=$res->province;

?>
</body>
</html>
