<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="style/style.css"type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" href=" https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap.min.css">
    
    
    <title>Beranda</title>
  </head>
  <body>
    <?php
    include 'corona.php'; 
    $page = "Home";
    include 'header.php';
    ?>

<!-- slider -->
    <div class="container-fluid">
		<div data-ride="carousel" class="carousel slide" id="carousel">
			<ul class="carousel-indicators">
				<li data-slide-to="0" class="active" data-target="#carousel"></li>
				<li data-slide-to="1" data-target="#carousel"></li>
				<li data-slide-to="2" data-target="#carousel"></li>
                <li data-slide-to="3" data-target="#carousel"></li>
			</ul>
			<div class="carousel-inner">
				<div class="active carousel-item">
                    <a href="index.php">
                        <img alt="Slide1" src="img/Gambar1.png" style="width: 1500px; height:560px">
                        <!-- <div class="carousel-caption">
                            <h2>Slide 1</h2>
                        </div> -->
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="grafik.php">
                        <img alt="Slide2" src="img/Gambar2.jpg" style="width: 1500px; height:560px">
                        <!-- <div class="carousel-caption">
                            <h2>Slide 2</h2>
                        </div> -->
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="hospital.php">
                        <img alt="Slide3" src="img/Gambar3.jpg" style="width: 1500px; height:560px">
                        <!-- <div class="carousel-caption">
                            <h2>Slide 3</h2>
                        </div> -->
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="">
                        <img alt="Slide4" src="img/Gambar4.jpg" style="width: 1500px; height:560px">
                        <!-- <div class="carousel-caption">
                            <h2>Slide 3</h2>
                        </div> -->
                    </a>
                </div>
            </div>
            <a href="#carousel" class="carousel-control-prev" data-slide="prev">
                Prev
            </a>
            <a href="#carousel" class="carousel-control-next" data-slide="next">
                Next
            </a>
        </div>
    </div>
<!-- slider -->

  <main role="main" class="flex-shrink-0">
        <!-- <div class="jumbotron text-center">
                    <h1>SEBARAN COVID19</h1>
        </div> -->
        
        <div class="container mb-5">
            <br>
            <h3><b>GLOBAL</b></h3>
            <hr/>
            <div class="row mb-5"> 
                <div class="col-sm-4">
                    <div class="card text-white bg-danger">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h5 class="card-title">TOTAL POSITIF</h5>
                                <H1><?= $jumlah_positif;?></H1>
                                <p class="card-text">ORANG</p>
                            </div>
                            <div class="col-md-4">
                                <img src="img/emoji-04.png" alt="" heigth="100" width="100">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-white bg-success">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h5 class="card-title">TOTAL SEMBUH</h5>
                                <H1><?= $jumlah_sembuh;?></H1>
                                <p class="card-text">ORANG</p>
                            </div>
                            <div class="col-md-4">
                                <img src="img/emoji-01.png" alt="" heigth="100" width="100">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-white bg-info">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h5 class="card-title">TOTAL MENINGGAL</h5>
                                <H1><?= $jumlah_meninggal;?></H1>
                                <p class="card-text">ORANG</p>
                            </div>
                            <div class="col-md-4">
                                <img src="img/emoji-03.png" alt="" heigth="100" width="100">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div> 

            <h3><b>INDONESIA</b></h3>
            <hr/>
            <div class="row mt-5 mb-5"> 
                <div class="col-sm-4">
                    <div class="card text-white bg-danger">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h5 class="card-title">TOTAL POSITIF</h5>
                                <H1><?= $positif;?></H1>
                                <p class="card-text">ORANG</p>
                            </div>
                            <div class="col-md-4">
                                <img src="img/emoji-04.png" alt="" heigth="100" width="100">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-white bg-success">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h5 class="card-title">TOTAL SEMBUH</h5>
                                <H1><?= $sembuh;?></H1>
                                <p class="card-text">ORANG</p>
                            </div>
                            <div class="col-md-4">
                                <img src="img/emoji-01.png" alt="" heigth="100" width="100">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-white bg-info">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h5 class="card-title">TOTAL MENINGGAL</h5>
                                <H1><?= $meninggal;?></H1>
                                <p class="card-text">ORANG</p>
                            </div>
                            <div class="col-md-4">
                                <img src="img/emoji-03.png" alt="" heigth="100" width="100">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <h3><b>PROVINSI</b></h3>
            <hr/>
            <div class="col-md-10"> 
                <table id="example" class="table table-striped table-bordered nowrap" style="width:126%">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Provinsi</th>
                        <th scope="col">Positif</th>
                        <th scope="col">Sembuh</th>
                        <th scope="col">Meninggal</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $no=1;
                    foreach ($data_prov as $rows) { ?>
                    <tr>
                        <th scope="row"><?php  echo $no;?></th>
                        <td><?php echo $rows->attributes->Provinsi;?></td>
                        <td><?php echo $rows->attributes->Kasus_Posi;?></td>
                        <td><?php echo $rows->attributes->Kasus_Semb;?></td>
                        <td><?php echo $rows->attributes->Kasus_Meni;?></td>
                    </tr>
                <?php 
                $no++;
                } ?>
            </tbody>
            </table>
            </div> 
        </div>

    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap.min.js  "></script>

    <!-- Slider -->
    
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
	 crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
	 crossorigin="anonymous">
	</script>
	<script type="text/javascript" src="scripts.js">
	</script>
    <!-- Slider -->

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