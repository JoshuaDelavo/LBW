<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Corona Virus Data</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item <?php if($page == "Home") echo " active";?>" >
            <a class="nav-link" href="index.php">Beranda <!--<span class="sr-only">(current)</span> --> </a>
        </li>
        <li class="nav-item  <?php if($page == "Grafik") echo " active";?>">
            <a class="nav-link" href="grafik.php">Grafik</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Rumah Sakit</a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> -->
        </ul>
    </div>
    </nav>