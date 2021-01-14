<?php
include 'corona.php'; 
$page = "Home";
?>

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
    <title>Corona</title>
  </head>
  <body>
  <?php include 'header.php'; ?>
    
  <main role="main" class="flex-shrink-0">
        <div class="jumbotron text-center">
                    <h1>SEBARAN COVID19</h1>
        </div>
        
        <div class="container">

            <h6>GLOBAL</h6>
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

            <h6>INDONESIA</h6>
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

            <h6>PROVINSI</h6>
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

        <div class="jumbotron text-center">
           <h1>Apa yang Harus Diketahui</h1>
        </div>  

        <div class="container mb-5">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <div class="row mb-4 ml-2 mr-2 ">
                    <h2 class="card-title">Apa Itu COVID-19?</h2>
                    <div class="card-text">
                    <p>
                    COVID-19 adalah penyakit yang disebabkan oleh Novel Coronavirus (2019-nCoV), 
                    jenis baru coronavirus pada manusia menyebabkan penyakit mulai dari flu biasa 
                    hingga penyakit yang serius seperti Middle East Respiratory Syndrome (MERS)
                    dan Sindrom Pernapasan Akut Berat/ Severe Acute Respiratory Syndrome (SARS).
                    WHO mengumumkan nama penyakit yang disebabkan 2019-nCov, yaitu Coronavirus Disease (COVID-19).
                    </p>
                    </div>
                    <h2 class="card-title">Gejala</h2>
                    <div class="card-text">
                    <p>Gejala umum berupa demam ≥38°C, batuk kering, dan sesak napas. 
                    Jika ada orang yang dalam 14 hari sebelum muncul gejala tersebut pernah melakukan perjalanan ke negara 
                    terjangkit, atau pernah merawat/kontak erat dengan penderita COVID-19, maka terhadap orang tersebut akan 
                    dilakukan pemeriksaan laboratorium lebih lanjut untuk memastikan diagnosisnya. 
                    </p>
                    <h2 class="card-title">Penularan</h2>
                    <div class="card-text">
                    <p>
                    Seseorang dapat terinfeksi dari penderita COVID-19. Penyakit ini dapat menyebar melalui tetesan kecil (droplet) 
                    dari hidung atau mulut pada saat batuk atau bersin. Droplet tersebut kemudian jatuh pada benda di sekitarnya. 
                    Kemudian jika ada orang lain menyentuh benda yang sudah terkontaminasi dengan droplet tersebut, lalu orang itu menyentuh mata, 
                    hidung atau mulut, maka orang itu dapat terinfeksi COVID-19. 
                    Seseorang juga bisa terinfeksi COVID-19 ketika tidak sengaja menghirup droplet dari penderita. 
                    Inilah sebabnya mengapa kita penting untuk menjaga jarak hingga kurang lebih satu meter dari orang yang sakit. 
                    </p>

                    </div>    
                </div>
             </div>
            </div>
            </div>
        </div>


        <div class="jumbotron text-center">
           <h1>Sejarah COVID-19</h1>
        </div>  
         
        
        <div class="containertime mb-5">
        <div class="timeline">
        <div class="containers left">
            <div class="content">
                <h2>31 Desember 2019</h2>
                <p>Kasus pneumonia yang terdeteksi di Wuhan, China pertama kali dilaporkan ke WHO.
                Selama periode yang dilaporkan ini, virus belum diketahui.</p>
            </div>
        </div>
        <div class="containers right">
            <div class="content">
            <h2>1 Januari 2020</h2>
            <p>Otoritas kesehatan China menutup Pasar Grosir Makanan laut Huanan setelah ditemukan
                bahwa hewan liar yang dijual di sana mungkin merupakan sumber virus.
            </p>
            </div>
        </div>
        <div class="containers left">
            <div class="content">
            <h2>7 Januari 2020</h2>
            <p>Pihak berwenang China mengkonfirmasi bahwa telah mengidentifikasi virus tersebut sebagai virus corona
                baru, yang awalnya oleh WHO disebut sebagai 2019-nCoV.
            </p>
        </div>
        </div>
        <div class="containers right">
            <div class="content">
            <h2>11 Januari 2020</h2>
            <p>Komisi Kesehatan Wuhan mengumumkan kematian pertama yang disebabkan corona virus.</p>
        </div>
        </div>
        <div class="containers left">
            <div class="content">
            <h2>13 Januari 2020</h2>
            <p>Pemerintah Thailang melaporkan kasus infeksi yang disebabkan oleh virus corona.</p>
        </div>
        </div>
        <div class="containers right">
            <div class="content">
            <h2>16 Januari 2020</h2>
            <p>Pihan berwenang Jepang mengonfirmasi seorang pria Jepang yang bepergian ke Wuhan
                terinfeksi virus corona.
            </p>
        </div>
        </div>
        <div class="containers left">
            <div class="content">
            <h2>17 Januari 2020</h2>
            <p>Kasus kematian kedua dikonfirmasi oleh Pejabat Kesehatan China.</p>
        </div>
        </div>
        <div class="containers right">
            <div class="content">
            <h2>20 Januari 2020</h2>
            <p>China melaporkan 139 Kasus penyakit baru, termasuk kematian ketiga yang terjadi di wilayahnya.</p>
        </div>
        </div>
        <div class="containers left">
            <div class="content">
            <h2>21 Januari 2020</h2>
            <p>Para pejabat di negara bagian Washington mengonfirmasi kasus pertama di wilayah Amerika Serikat</p>
        </div>
        </div>
        <div class="containers right">
            <div class="content">
            <h2>22 Januari 2020</h2>
            <p>Pemerintah Wuhan sementara waktu menutup bandara dan stasiun kereta api
                setelah jumlah korban tewas virus corona telah meningkat menjadi 17 orang.
            </p>
        </div>
        </div>
        <div class="containers left">
            <div class="content">
            <h2>26 Januari 2020</h2>
            <p>Asosiasi Layanan Perjalanan China menangguhkan semua tur, termasuk tur internasional.</p>
        </div>
        </div>
        <div class="containers right">
            <div class="content">
            <h2>30 Januari 2020</h2>
            <p>Amerika Serikat melaporkan kasus penularan pertama dari orang ke orang atas virus corona Wuhan
                WHO menetapkan bahwa wabah tersebut menjadi Darurat Kesehatan Internasional dan Kepedulian
                Internasional(PHEIC).
            </p>
        </div>
        </div>
        <div class="containers left">
            <div class="content">
            <h2>2 Februari 2020</h2>
            <p>Kasus kematian pertama di luar China karena virus corona Wuhan, tepatnya di Filipina</p>
        </div>
        </div>
        <div class="containers right">
            <div class="content">
            <h2>4 Februari 2020</h2>
            <p>Kementerian Kesehatan Jepang mengumumkan sepuluh orang di atas kapal pesiar Diamond Princess
                yang berlabuh di Yokohama Bay dipastikan memiliki virus corona.
            </p>
        </div>
        </div>
        <div class="containers left">
            <div class="content">
            <h2>7 Februari 2020</h2>
            <p>Li Wenliang, seorang dokter Wuhan yang menjadi target polisi karena berusaha menyembunyikan
                alarm pada virus mirip SARS pada Desember, meninggal karena virus corona.
            </p>
        </div>
        </div>
        <div class="containers right">
            <div class="content">
            <h2>11 Februari 2020</h2>
            <p>Penyakit akibat virus ini diberi nama oleh WHO sebagai Covid-19.</p>
        </div>
        </div>
        <div class="containers left">
            <div class="content">
            <h2>14 Februari 2020</h2>
            <p>Seorang turis China yang tes pemeriksaannya menunjukkan hasil positif terpapar
                virus meninggal di Perancis, Mesir mengumumkan kasus pertama virus corona di wilayahnya.
            </p>
        </div>
        </div>
        <div class="containers right">
            <div class="content">
            <h2>29 Februari 2020</h2>
            <p>Amerika mengumumkan kematian pertama akibat virus corona di Amerika Serikat.</p>
        </div>
        </div>
        <div class="containers left">
            <div class="content">
            <h2>2 Maret 2020</h2>
            <p>Pemerintah Indonesia secara resmi mengumumkan dua WNI positif terpapar
                virus corona. Keduanya menjadi kasus pertama yang dilaporkan di Indonesia.
            </p>
        </div>
        </div>
        <div class="containers right">
            <div class="content">
            <h2>3 Maret 2020</h2>
            <p>Pemerintah Iran mengumumkan bahwa 23 anggota parlemen Iran dinyatakan positif terpapar virus.</p>
        </div>
        </div>
        <div class="containers left">
            <div class="content">
            <h2>8 Maret 2020</h2>
            <p>Perdana menteri Italia Giuseppe Conte menandatangani keputusan yang menetapkan
                pembatasan perjalanan di seluruh wilayah Lombardy dan 14 provinsi lainnya.
            </p>
        </div>
        </div>
        <div class="containers right">
            <div class="content">
            <h2>11 Maret 2020</h2>
            <p>Indonesia mengumumkan kematian pertama akibat virus corona yaitu pasien kasus 25,
                seorang WNA yang menjalani perawatan di RS Sanglah, Bali.
            </p>
        </div>
        </div>
        <div class="containers right">
            <div class="content">
            <h2>11 Maret 2020</h2>
            <p>WHO menyatakan wabah corona virus sebagai pandemi saat Turki, Pantai, Gading, Honduras,
                dan Bolivia mengonfirmasi kasus pertama di wilayahnya.
            </p>
        </div>
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