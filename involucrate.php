<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="es"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="es"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html  lang="es"> <!--<![endif]-->
<!--[if lt IE 9]>
<script type="text/javascript">
   document.createElement("nav");
   document.createElement("header");
   document.createElement("footer");
   document.createElement("section");
   document.createElement("article");
   document.createElement("aside");
   document.createElement("hgroup");
</script>
<![endif]-->
<head>
  <meta charset="utf-8" />
  <meta name="keywords" content="Fundación,Comunitaria,Oaxaca,Fundacion, México,Fundación Comunitaria Oaxaca,AC,A.C." />
  <meta name="Description" content="Sitio de Fundación Comunitaria Oaxaca A.C. Aqui encontrarás información de nosotros y del o que tú y/o 
  tu empresa pueden hacer para mejorar la vida de las personas  y las comunidades en Oaxaca" />
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width"  />

  <title>Fundación Comunitaria Oaxaca A.C.</title>
   
  <link rel="stylesheet" href="stylesheets/normalize.css">
  <link rel="stylesheet" href="stylesheets/estilos.css" />
  <link rel="stylesheet" href="stylesheets/docs.css" />
  <link type="image/x-icon" href="favicon.ico" rel="shortcut icon" />

  <script  src="js/prefixfree.min.js"></script>
	<script  src="js/modernizr.js"></script>
  <script src="js/vendor/jquery.js"></script> <!-- version 1.9.1-->
<!-- Set the viewport width to device width for mobile -->
<!--  IE Fix for HTML5 Tags -->
<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!-- <link rel="stylesheet" href="css/foundation.css" /> -->
</head> 
<div class="row" >
    <div class="large-12 columns">
      <header>
        <div class="row" >
        <div class="large-4 columns">  
          <a href="http://www.fundacion-oaxaca.org"><center><img src="images/fundoax.png"/></center></a>
        </div>
        <div class="large-8 columns">
          <div id="sociales-top">
            <a href="http://www.facebook.com/FundacionComunitariaOaxaca" target="_blank"><img src="images/logo_fb.png" /></a>
            <a href="https://twitter.com/FundOax" target="_blank"><img src="images/logo_twitter.png"  /></a>
            <a href="http://www.youtube.com/user/fundoax" target="_blank"><img src="images/logo_toutube.png" width="36" height="37" /></a>
            <a href="http://pinterest.com/fundoax" target="_blank"><img src="images/logo_pinterest.png" width="35" height="37"  /></a>
            <img id="hueco" src="images/espacio.png"/>
            <a href="http://www.fundacion-oaxaca.org/correo" target="_blank"><img src="images/email3.png" width="35" height="37"  /></a>
            <a href="http://www.fundacion-oaxaca.org/blog" target="_blank"><img src="images/blog.png" width="42"  /></a>
            </br></br>
          </div>
          <nav> 
            <div class="menugrande">
              <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="nosotros.php">Nosotros</a></li>
                <li><a href="programas.php">Programas</a></li>
                <li><a href="fondos.php">Fondos</a></li>
                <li><a href="involucrate.php"><u>Involúcrate</u></a></li>
                <li><a href="contacto.php">Contacto</a></li>
              </ul>
            </div>
            <div class="top-bar">
              <ul class="title-area">
              <!-- Title Area -->
                <li class="name">
                <h1><a href="index.php"></a></h1>
                </li>
              <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                <li class="toggle-topbar menu-icon"><a href=""><span>Menú</span></a></li>
              </ul>
              <section class="top-bar-section">
                <ul class="right">
                  <li><a href="index.php">Inicio</a></li>
	                <li><a href="nosotros.php">Nosotros</a></li>
	                <li><a href="programas.php">Programas</a></li>
	                <li><a href="fondos.php">Fondos</a></li>
	                <li><a href="involucrate.php">Involúcrate</a></li>
	                <li><a href="contacto.php">Contacto</a></li>
                </ul>
              <!-- Right Nav Section -->
              </section>
            </div>
          </nav>
        </div>
      </div>
      </header>
    </div>
  </div>
<body>

<?php include("modulos/involucrate/involucrateredux.php") ?>

<?php include_once("modulos/convocatorias.php") ?>

<?php include_once("analyticstracking.php") ?>

</body>
</html>
