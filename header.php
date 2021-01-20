<nav class="navbar navbar-expand-lg navbar bg" style="height: 100px;background-color:#eeeee4;margin-top:20px">
    <!-- <a class="navbar-brand" href="#">Corona Virus Data</a> -->
    <img src="img/logo.png" style="width: 200px;height:100px;margin-left:100px">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item <?php if($page == "Home") echo " active";?>" >
            <a class="nav-link" href="index.php"><h4><b>Beranda</b></h4> <!--<span class="sr-only">(current)</span> --> </a>
        </li>
        <li class="nav-item  <?php if($page == "Grafik") echo " active";?>">
            <a class="nav-link" href="grafik.php" style="margin-left: 30px;"><h4><b>Grafik</b></h4></a>
        </li>
        <li class="nav-item <?php if($page == "Hospital") echo " active";?>">
            <a class="nav-link" href="hospital.php" style="margin-left: 30px;"><h4><b>Rumah Sakit</b></h4></a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> -->
        </ul>
    </div>
</nav>