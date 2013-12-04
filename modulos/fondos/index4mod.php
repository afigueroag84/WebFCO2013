<!DOCTYPE html>
	<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
	<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
	<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
	<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
    <head>
        <title>Elastislide - A Responsive Image Carousel</title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
       
       
		<link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="modulos/fondos/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="modulos/fondos/css/elastislide.css" />
		<link rel="stylesheet" type="text/css" href="modulos/fondos/css/custom.css" />
		<script src="modulos/fondos/js/modernizr.custom.17475.js"></script>
    </head>
    <body>
		<div class="contain demo-4">
			

            <div class="main">
				

				<div class="gallery">
					<!-- Elastislide Carousel -->
					<ul id="carousel" class="elastislide-list">
						<li data-preview="modulos/fondos/images/large/4.jpg"><a href="#"><img src="modulos/fondos/images/small/4.jpg" alt="image04" /></a></li>
						<li data-preview="modulos/fondos/images/large/5.jpg"><a href="#"><img src="modulos/fondos/images/small/5.jpg" alt="image05" /></a></li>
						<li data-preview="modulos/fondos/images/large/6.jpg"><a href="#"><img src="modulos/fondos/images/small/6.jpg" alt="image06" /></a></li>
						<li data-preview="modulos/fondos/images/large/7.jpg"><a href="#"><img src="modulos/fondos/images/small/7.jpg" alt="image07" /></a></li>
						<li data-preview="modulos/fondos/images/large/11.jpg"><a href="#"><img src="modulos/fondos/images/small/11.jpg" alt="image11" /></a></li>
						<li data-preview="modulos/fondos/images/large/12.jpg"><a href="#"><img src="modulos/fondos/images/small/12.jpg" alt="image12" /></a></li>
						<li data-preview="modulos/fondos/images/large/13.jpg"><a href="#"><img src="modulos/fondos/images/small/13.jpg" alt="image13" /></a></li>
						<li data-preview="modulos/fondos/images/large/14.jpg"><a href="#"><img src="modulos/fondos/images/small/14.jpg" alt="image14" /></a></li>
						<li data-preview="modulos/fondos/images/large/15.jpg"><a href="#"><img src="modulos/fondos/images/small/15.jpg" alt="image15" /></a></li>
						<li data-preview="modulos/fondos/images/large/16.jpg"><a href="#"><img src="modulos/fondos/images/small/16.jpg" alt="image16" /></a></li>
						<li data-preview="modulos/fondos/images/large/17.jpg"><a href="#"><img src="modulos/fondos/images/small/17.jpg" alt="image17" /></a></li>
						<li data-preview="modulos/fondos/images/large/18.jpg"><a href="#"><img src="modulos/fondos/images/small/18.jpg" alt="image18" /></a></li>
						<li data-preview="modulos/fondos/images/large/19.jpg"><a href="#"><img src="modulos/fondos/images/small/19.jpg" alt="image19" /></a></li>
						<li data-preview="modulos/fondos/images/large/20.jpg"><a href="#"><img src="modulos/fondos/images/small/20.jpg" alt="image20" /></a></li>
						<li data-preview="modulos/fondos/images/large/1.jpg"><a href="#"><img src="modulos/fondos/images/small/1.jpg" alt="image01" /></a></li>
						<li data-preview="modulos/fondos/images/large/2.jpg"><a href="#"><img src="modulos/fondos/images/small/2.jpg" alt="image02" /></a></li>
						<li data-preview="modulos/fondos/images/large/3.jpg"><a href="#"><img src="modulos/fondos/images/small/3.jpg" alt="image03" /></a></li>
						<li data-preview="modulos/fondos/images/large/8.jpg"><a href="#"><img src="modulos/fondos/images/small/8.jpg" alt="image08" /></a></li>
						<li data-preview="modulos/fondos/images/large/9.jpg"><a href="#"><img src="modulos/fondos/images/small/9.jpg" alt="image09" /></a></li>
						<li data-preview="modulos/fondos/images/large/10.jpg"><a href="#"><img src="modulos/fondos/images/small/10.jpg" alt="image10" /></a></li>
					</ul>
					<!-- End Elastislide Carousel -->
					<div class="image-preview">
						<img id="preview" src="modulos/fondos/images/large/4.jpg" />
					</div>
				</div>

				
			</div>
		</div>
		<!-- <script type="text/javascript" src="modulos/fondos/js/jquery-1.9.1.min.js"></script> -->
		<script type="text/javascript" src="js/vendor/jquery.js"></script> -->
		<script type="text/javascript" src="modulos/fondos/js/jquery.elastislide.js"></script>
		<script type="text/javascript">
			
			// example how to integrate with a previewer

			var current = 0,
				$preview = $( '#preview' ),
				$carouselEl = $( '#carousel' ),
				$carouselItems = $carouselEl.children(),
				carousel = $carouselEl.elastislide( {
					current : current,
					minItems : 4,
					onClick : function( el, pos, evt ) {

						changeImage( el, pos );
						evt.preventDefault();

					},
					onReady : function() {

						changeImage( $carouselItems.eq( current ), current );
						
					}
				} );

			function changeImage( el, pos ) {

				$preview.attr( 'src', el.data( 'preview' ) );
				$carouselItems.removeClass( 'current-img' );
				el.addClass( 'current-img' );
				carousel.setCurrent( pos );

			}

		</script>
    </body>
</html>
