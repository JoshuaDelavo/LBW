<?php
include 'corona.php';
$page = "Hospital";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" href=" https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap.min.css">

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
    //echo build_table($res);

?>

<div class="container"> 
    <table id="example" class="table table-striped">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Region</th>
                <th scope="col">Phone</th>
                <th scope="col">Province</th>
            </tr>
        </thead>
            <tbody>
                <?php 
                $no=1;
                foreach ($res as $rows) { ?>
                    <tr>
                        <th scope="row"><?php  echo $no;?></th>
                        <td><?php echo $rows->name;?></td>
                        <td><?php echo $rows->address;?></td>
                        <td><?php echo $rows->region;?></td>
                        <td><?php echo $rows->phone;?></td>
                        <td><?php echo $rows->province;?></td>
                    </tr>
                    <?php 
                    $no++;
                } ?>
            </tbody>
    </table>
</div> 
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap.min.js  "></script>

    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable( {
                responsive: true
            } );
        
            new $.fn.dataTable.FixedHeader( table );
        } );
    </script>

</body>
</html>
