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
  
<!--
  IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!-- <link rel="stylesheet" href="css/foundation.css" /> -->

</head>
<body >
  <div class="row" >
    <div class="espaciocolor"></div>
    <div class="large-10 columns">
      <section id="cuerpoo">
        <div class="section-container vertical-tabs" data-section="vertical-tabs">
          <section>
            <p class="title" data-section-title><a href="#">Nuestra Historia</a></p>
            <div class="content" data-section-content back>
              <br id="nos">
              <br id="hueco">
             
              <p>Fundación Comunitaria Oaxaca A.C. nace en 1996 como una iniciativa concebida por un grupo de empresarios y representantes 
                de organizaciones de la sociedad civil de la Ciudad de México y de Oaxaca, con el apoyo de representantes de  fundaciones 
                internacionales. </p>

              <p>A dicha iniciativa se suman periódicamente
                empresarios, líderes de organizaciones civiles, representantes de grupos indígenas y demás personalidades representativas de
                la comunidad oaxaqueña. Todos unidos por un mismo objetivo: el desarrollo sustentable de los pueblos de Oaxaca y el beneficio
                para su gente.</p>

              <img src="images/cantaritos_fco.png"  id="jarritos" align="right"/>
              
              <p>En este recorrido de casi 17 años de trabajo, la Fundación ha adquirido un sin número de experiencias y aprendizajes.</p>

              <p>La Fundación Comunitaria Oaxaca se ha posicionado como una organización de carácter social, en beneficio de grupos vulnerables
                  y del medio ambiente, a través de programas que impulsan el desarrollo sostenible de comunidades.</p>
              
              <br id="nos">
              <br id="nos">
              <br id="nos">
              <br id="nos">

                
            </div>
          </section>
          <section>
            <p class="title" data-section-title><a href="#">Misión</a></p>
            <div class="content" data-section-content>
              <br id="hueco">
             
              <p>Impulsar la participación social dentro y fuera de Oaxaca para lograr el bienestar y 
                mejorar la calidad de vida de los núcleos de población vulnerable y marginada de la comunidad 
                oaxaqueña, mediante iniciativas que generen cambios fundamentales y perdurables.</p>
              <img src="images/nosotros/mision.jpg"   />
           
              <br id="hueco">

            </div>
          </section>
          <section>
            <p class="title" data-section-title><a href="#">Visión</a></p>
            <div class="content" data-section-content>
              <br id="hueco">
             
              <p>Ser la organización líder en el impulso a proyectos sustentables que creen oportunidades 
                para la generación de ingresos y desarrollo en las comunidades de Oaxaca.</p>
              <br id="hueco">
              <br id="hueco">
              <img src="images/nosotros/vision.jpg"   />
             
            </div>
          </section>
          <section>
            <p class="title" data-section-title><a href="#">Valores</a></p>
            <div class="content" data-section-content>
             
              <p>Pensamos que las estrategias de mejoramiento de la calidad de vida deben partir de que la pobreza es un fenómeno complejo
                que varía según el área geográfica, modificándose en el tiempo y trasciende de generación en generación.</p>
              <ul id="valores">
                <li>Creemos que el desarrollo social de una comunidad debe
                    estar basado en la dignidad, identidad y autonomía de
                    todos sus miembros.</li>
                <li> Consideramos que la toma de decisiones participativa e
                    incluyente, es una condición necesaria para generar un impacto
                    social positivo y perdurable.</li>
                <li>Consideramos prioritario distinguir nuestras acciones a las
                    causas de los problemas más que a sus efectos.</li>
              </ul>
              <img src="images/nosotros/Valores.jpg"   />
             
            </div>
          </section>
          <section>
            <p class="title" data-section-title><a href="#">Organigrama</a></p>
            <div class="content" data-section-content>
              <p>
              </p>
              <div id="contenidonos">
              <a href="images/nosotros/organigrama.png" data-reveal-id="organigrama" ><img src="images/nosotros/organigrama.png"   /></a>
              </div>
            </div>
          </section>

          
        </div>
      </section>
    </div>
    <div class="large-2 columns">
      <div id="barranoslateral">
      <h6>También descarga</h6>
      <ul class="nosdescargas"> 
        <li><a href="http://www.fundacion-oaxaca.org/documentos/InformeAnual2012.pdf" target="_blank" class="noselementos">
            Informe Anual 2012<img src="images/nosotros/imagenInforme.jpg"  class="noselementos" />
            </a>
        </li>
      </ul>
      <ul>
        <li><a href="#" data-reveal-id="boletineslist" target="_blank"  class="medium button success radius" >Boletines Informativos 2013</a></li>
      </ul>
      </div>
    </div>
    
    <?php include_once("modulos/boletines.php") ?>


<div id="organigrama" class="reveal-modal large">
  <img src="images/nosotros/organigrama.png" />
   <a class="close-reveal-modal">&#215;</a>
</div>




  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src="js/foundation.min.js"></script>

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

<?php include_once("modulos/convocatorias.php") ?>

</body>
</html>
<!--aroldo acosta -->