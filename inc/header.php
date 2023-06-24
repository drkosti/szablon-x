<?php
// Adres URL do strony z szablonem BEZ '/' ukośnika na końcu. Np. https://jakiestamradio.pl lub https://jakiestamradio.pl/szablon-x
$link = '';
// Nazwa radia
$nazwa = 'Radio X Stacja';
// Opis radia
$opis = 'Opis radia, gatunek muzyki itp.';
// Nazwa panelu z serwisu panelradiowy.pl
$panel = '';
// IP lub host serwera Shoutcast
$ip = 'audio.tuxinfo.pl';
// Port serwera Shoutcast
$port = '8000';
// Bezpośredni link do tzw "odsłuchu" radia. 
$stream = 'https://audio.tuxinfo.pl/radio/8000/radio.mp3';
// Social Media
$facebook = 'https://www.facebook.com/tuxinfopl';
$twitter = 'https://twitter.com/TuxInfoPl';
$github = 'https://github.com/drkosti';
?>
<!doctype html>
<html lang="pl-PL">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/styl.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="grafika/ikona-bt.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"/></script>
	<meta name="description" content="<?php echo $opis ?>" />
    <!-- Tagi OG -->
    <!-- Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $nazwa ?>">
    <meta property="og:url" content="<?php echo $link ?>">
    <meta property="og:image" content="<?php echo $link ?>/grafika/og.png">
    <meta property="og:description" content="<?php echo $opis ?>">
    <!-- Twitter/Discord -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $nazwa ?>">
    <meta name="twitter:site" content="@<?php echo $link ?>">
    <meta name="twitter:description" content="<?php echo $opis ?>">
    <meta name="twitter:image" content="<?php echo $link ?>/grafika/og.png">
    <meta name="twitter:image:alt" content="<?php echo $nazwa ?>">