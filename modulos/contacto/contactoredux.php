<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="es"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="es"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->

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
</head>
<body>
  <!-- ///////////////////////////////////////////-->
  <div class="row">
    <div class="large-12 columns"> 
      <div class="espaciocolor"></div>
      <div class="large-8 columns"> 
        <div class="divcurved"> 
          <h4>Contacto</h4>
          <p>La Fundación Comuniaria Oaxaca A.C. se ubica al norte de la ciudad de Oaxaca de 
            Juárez, en el número 103 de la calle Alonso Garcia Bravo, en el Fraccionamiento 
            Villa de Antequera, a un costado de la sub estación de bomberos norte.</p>
          <iframe width="100%" height="500px"  align="middle" frameborder="0" scrolling="no" 
            marginheight="0" marginwidth="0" src="https://maps.google.com.mx/maps/ms?msa=0&amp;msid=215173929783585390232.0004cba67b16fabcd4d21&amp;ie=UTF8&amp;t=h&amp;iwloc=0004cba67b1b7c0bc99ab&amp;ll=17.089788,-96.712464&amp;spn=0,0&amp;output=embed">
          </iframe><br />
          <small>Ver <a href="https://maps.google.com.mx/maps/ms?msa=0&amp;msid=215173929783585390232.0004cba67b16fabcd4d21&amp;ie=UTF8&amp;t=h&amp;iwloc=0004cba67b1b7c0bc99ab&amp;ll=17.089788,-96.712464&amp;spn=0,0&amp;source=embed"  
            target="_new" style="color:#0000FF;text-align:left">Fundación Comunitaria Oaxaca A.C.</a> en un mapa ampliado</small>
          <p>Llámanos a los télefonos (+52 01 951) 132 6918 y 133 6045.</p>
          <p>Email: info@fundacion-oaxaca.org</p>
        </div>
      </div>
      <div class="large-4 columns"> 
        <article id="organizacionesred">
          <a href="#" data-reveal-id="boletineslist" target="_blank"  class="large button success radius" >Boletines Informativos 2013</a>
        </article>
        <div id="twitter">
          <center>
          <a class="twitter-timeline" width="100%" height="auto" href="https://twitter.com/FundOax" data-widget-id="248469835753865216">Tweets por @FundOax</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          </center>
        </div>
      </div>
    </div>
  </div>  
<?php include("modulos/orgaredcomer.php") ?>
<?php include_once("modulos/boletines.php") ?>
 <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
<script src="js/docs.js"></script>
<script src="js/codiguito.js"></script>
<script>
  $(document).foundation();
</script>
<script type="text/javascript">
  $(document).ready(function()
  {
    $("body").append("<a href='#' class='volverarriba'>Volver arriba</a>"); // Agregamos el bot?n con la flecha
    $(window).scroll(function()
    {
      if ($(this).scrollTop() > 70) $('.volverarriba').fadeIn();
      else $('.volverarriba').fadeOut();
    });
    /* IMPORTANTE: si usas jQuery <1.7 esto de abajo no funcionar? */
    $(document).on("click",".volverarriba",function(e)
    {
      e.preventDefault();
      $("html, body").stop().animate({ scrollTop: 0 }, "slow");
    });
  });
</script>

</body>
</html>
