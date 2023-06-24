<?php include('inc/header.php');?>
    <title><?php echo $nazwa;?> - Strona główna</title>
  </head>
  <body data-bs-spy="scroll" data-bs-target="#nawigacja" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
  <?php include('inc/nawigacja.php');?>
  <?php include('inc/top-index.php');?>

  <!-- Artykuł początek -->
  <div class="container art1">
    <h2>Muzyka jaką możecie usłyszeć na antenie naszego radia.</h2>

    <p>W każdą sobotę o godzinie 20<sup>30</sup> serdecznie zapraszamy na audycję z nieco mocniejszą muzyką.</p>
    <p>Nie zabraknie dobrego rocka i metalu. 🤘</p>
    <p>Poniżej przykładowoa playlista, którą możecie posłuchać.</p>
  <iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1574646520&color=%23161616&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
  </div>
  <!-- Artykuł koniec -->

  <!-- Artykuł początek -->
  <div class="container art1">
    <img src="grafika/radioapp1.png" alt="radioapp" class="miniatura img-thumbnail float-start">
    <h2>Aplikacja dla Twojego radia.</h2>
    <p>Zachęcamy Was do słuchania radia w aplikacji progresywnej.</p>
    <p>Dostępna jest dla systemów Android, iOS i Windows.</p>
    <p>Apka istaluje się szybko, bez konieczności wchodzenia w Sklep Play, lub App Store.</p>
    <p>Po więcej szczegółów koniecznie zajrzyjcie na <a href="https://radioapp.pl" target="_blank">radioapp.pl</a></p>
    <p>Na stronie wydawcy można sprawdzić jak wygląda aplikacja w wersji podstawowej, jak i rozszerzonej. </p>
  </div>
  <!-- Artykuł koniec -->
  
  



<?php 
include('inc/blok-stale-audycje.php');
include('inc/modal-panelradiowy.php');
include('inc/footer.php');
include('inc/pozdrowienia.php');
?>

