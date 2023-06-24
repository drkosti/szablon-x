<?php include('staty.php')?>
<div class="full-cont">
<div id="slider-top" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    
  <div class="carousel-item active inna-pozycja-1">
      <img src="grafika/slid3.png" class="d-block w-100 slidx" alt="slid3">
      <a href="index.php"><img src="grafika/logo-cz-male.png" class="img-fluid logo"></a>
      <div class="card promo1">
        <div class="card-body">
            <h5 class="card-title">Słuchaj</h5>
            <p class="card-text">
                Włącz radio w swoim odtwarzaczu, lub w naszej aplikacji.
            </p>
            <p class="text-center">
            <a href="#" class="winamp" target="_blank"></a>
            <a href="#" class="wmp" target="_blank"></a>
            <a href="https://radioapp.pl" class="app" target="_blank"></a>
            </p>
        </div>
        </div>
      
    </div>

    <div class="carousel-item">
      <img src="grafika/slid1.png" class="d-block w-100 slidx" alt="slid1">
      <a href="index.php"><img src="grafika/logo-b-male.png" class="img-fluid logo"></a>
      <div class="card promo2">
        <div class="card-body">
            <h5 class="card-title">Mocna Muza</h5>
            <p class="card-text">
                Przygotuj się na konkretną dawkę ROCKA, w każdą sobotę o 20<sup>30</sup>
            </p>
           
        </div>
        </div>
    </div>

    <div class="carousel-item inna-pozycja-3">
      <img src="grafika/slid2.png" class="d-block w-100 slidx" alt="slid2">
      <a href="index.php"><img src="grafika/logo-b-male.png" class="img-fluid logo"></a>
    </div>
    
  </div>
</div>

<div class="player-pasek">
  <div class="container">
    <div id="sc-info" class="staty">
  <div class="nazwa"><?php echo $stats->get('servertitle'); ?></div>
  <div class="piosenka"><?php echo $stats->get('songtitle'); ?></div>
    </div>
    <div class="player">
      <script>
        let audio = new Audio("<?php echo $stream;?>");
      </script>
        <input type="range" id="volume" value="60">
        <a type="button" id="play" onclick="odpal.call(this)" class="wlacz"></a>
    </div>
  </div>
</div>

<a data-bs-toggle="modal" data-bs-target="#ramowka" class="ramowka-przycisk"><i class="fa-solid fa-plane"></i> Ramówka</a>
</div>
