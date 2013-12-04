<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="es"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="es"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="es"> 
<!--<![endif]-->
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

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Fundación Comunitaria Oaxaca A.C.</title>
   
  <link rel="stylesheet" href="stylesheets/normalize.css">
  <link rel="stylesheet" type="text/css" href="stylesheets/estilos.css" />
  <link rel="stylesheet" href="stylesheets/foundation.css">
  <link rel="stylesheet" href="stylesheets/app.css">
  
  <link type="image/x-icon" href="favicon.ico" rel="shortcut icon" />

  <script type="text/javascript" async src="javascripts/prefixfree.min.js"></script>
  <script type="text/javascript" async src="javascripts/modernizr.js"></script>
  <script async src="javascripts/jquery.foundation.orbit.js"></script>

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head> 
<body>

<div class="row" >
    <div class="large-12 columns">
      <header>
        <div class="row" >
        <div class="large-4 columns">  
          <a href="http://www.fundacion-oaxaca.org"><img src="images/fundoax.png"/></a>
        </div>
        <div class="large-8 columns">
            <a href="http://www.facebook.com/FundacionComunitariaOaxaca" target="_blank"><img src="images/logo_fb.png" align="right"/></a>
            <a href="https://twitter.com/FundOax" target="_blank"><img src="images/logo_twitter.png" align="right" /></a>
            <a href="http://www.youtube.com/user/fundoax" target="_blank"><img src="images/logo_toutube.png" width="36" height="37"  align="right"/></a>
            <a href="http://pinterest.com/fundoax" target="_blank"><img src="images/logo_pinterest.png" width="36" height="37"  align="right"/></a><br />
          <nav>
            <ul>
              <li><a href="index.php">Inicio</a></li>
              <li><a href="modulos/nosotros/nosotros.php">Nosotros</a></li>
              <li><a href="modulos/programas/programas.php">Programas</a></li>
              <li><a href="modulos/fondos/fondos.php">Fondos</a></li>
              <li><a href="modulos/involucrate/involucrate.php">Involúcrate</a></li>
              <li><a href="modulos/contacto/contacto.php">Contacto</a></li>
            </ul>
          </nav>
        </div>
      </div>
      </header>
    </div>
  </div>
  
<!-- End Header and Nav -->
 
<!-- First Band (Slider) -->
 
  <div class="row">
      <div class="large-12 columns">
        <h2>Orbit</h2>
        <h4 class="subheader">Orbit is an easy to use, powerful image slider that's responsive, allowing you to swipe on a touch-enabled device.</h4>

        <ul id="featured1" data-orbit data-options="timer_speed:5000;">
          <li>
            <img src="../img/demos/demo1.jpg" />
            <div class="orbit-caption">
              Caption One. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
            </div>
          </li>
          <li>
            <img src="../img/demos/demo2.jpg" />
            <div class="orbit-caption">
              Caption Two. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
            </div>
          </li>
          <li>
            <img src="../img/demos/demo3.jpg" />
            <div class="orbit-caption">
              Caption Three. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
            </div>
          </li>
        </ul>

        <hr>

      </div>
    </div>
  
<!-- Three-up Content Blocks -->
 
  <div class="row">
    <div class="large-4 columns">
      <img src="http://placehold.it/400x300&text=[img]" />
      <h4>This is a content section.</h4>
      <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
    </div>
    
    <div class="large-4 columns">
      <img src="http://placehold.it/400x300&text=[img]" />
      <h4>This is a content section.</h4>
      <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
    </div>
    
    <div class="large-4 columns">
      <img src="http://placehold.it/400x300&text=[img]" />
      <h4>This is a content section.</h4>
      <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
    </div>
  
    </div>
    
<!-- Call to Action Panel -->
<div class="row">
    <div class="large-12 columns">
    
      <div class="panel">
        <h4>Get in touch!</h4>
            
        <div class="row">
          <div class="large-9 columns">
            <p>We'd love to hear from you, you attractive person you.</p>
          </div>
          <div class="large-3 columns">
            <a href="#" class="radius button right">Contact Us</a>
          </div>
        </div>
      </div>
      
    </div>
  </div>
 
  <!-- Footer -->
  
  <footer class="row">
    <div class="large-12 columns">
      <hr />
      <div class="row">
        <div class="large-6 columns">
          <p>&copy; Copyright no one at all. Go to town.</p>
        </div>
        <div class="large-6 columns">
          <ul class="inline-list right">
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
            <li><a href="#">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div> 
  </footer>

    <script>

      // Google Analytics
      var _gaq = _gaq || [];
      _gaq.push(
        ['_setAccount', 'UA-2195009-2'],
        ['_trackPageview'],
        ['b._setAccount', 'UA-2195009-27'],
        ['b._trackPageview']
      );

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

      document.write('<script src="http://foundation.zurb.com/docs/assets/vendor/'
        + ('__proto__' in {} ? 'zepto' : 'jquery')
        + '.js"><\/script>');
    </script>
    <script src="http://foundation.zurb.com/docs/assets/docs.js"></script>
    <script>
      $(document)
      
        .foundation();
      

      // For Kitchen Sink Page
      $('#start-jr').on('click', function() {
        $(document).foundation('joyride','start');
      });
    </script>
</body>
</html>