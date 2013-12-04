<!DOCTYPE html>

    <head>
       
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> 

        <link rel="stylesheet" type="text/css" href="modulos/programas/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="modulos/programas/css/style.css" />
		<link rel="stylesheet" type="text/css" href="modulos/programas/css/elastislide.css" />
		
		<style>
			.es-carousel ul{
				display:block;
			}
		</style>
		
		<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
			<div class="rg-image-wrapper">
				{{if itemsCount > 1}}
					<div class="rg-image-nav">
						<a href="#" class="rg-image-nav-prev">Previous Image</a>
						<a href="#" class="rg-image-nav-next">Next Image</a>
					</div>
				{{/if}}
				<div class="rg-image"></div>
				<div class="rg-loading"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
					</div>
				</div>
			</div>
		</script>
    </head>

		<!-- <div class="contenedor"> -->
					
			<div class="carruselin">
				<div id="rg-gallery" class="rg-gallery">
					<div class="rg-thumbs">
						<!-- Elastislide Carousel Thumbnail Viewer -->
						<div class="es-carousel-wrapper">
							<div class="es-nav">
								<span class="es-nav-prev">Previous</span>
								<span class="es-nav-next">Next</span>
							</div>
							<div class="es-carousel">
								<ul>
									<li><a href="#"><img src="images/programas/GalleryProgramas/thumbs/postal1.jpg" data-large="images/programas/GalleryProgramas/postal1.jpg" alt="image01" data-description="" /></a></li>
									<li><a href="#"><img src="images/programas/GalleryProgramas/thumbs/postal2.jpg" data-large="images/programas/GalleryProgramas/postal2.jpg" alt="image02" data-description="" /></a></li>
									<li><a href="#"><img src="images/programas/GalleryProgramas/thumbs/postal3.jpg" data-large="images/programas/GalleryProgramas/postal3.jpg" alt="image03" data-description="" /></a></li>
									<li><a href="#"><img src="images/programas/GalleryProgramas/thumbs/postal4.jpg" data-large="images/programas/GalleryProgramas/postal4.jpg" alt="image04" data-description="" /></a></li>
									<li><a href="#"><img src="images/programas/GalleryProgramas/thumbs/casadebarro.jpg" data-large="images/programas/GalleryProgramas/casadebarro.jpg" alt="image05" data-description="" /></a></li>
									<li><a href="#"><img src="images/programas/GalleryProgramas/thumbs/casadebarro1.jpg" data-large="images/programas/GalleryProgramas/casadebarro1.jpg" alt="image06" data-description="" /></a></li>
									<li><a href="#"><img src="images/programas/GalleryProgramas/thumbs/casadebarro2.jpg" data-large="images/programas/GalleryProgramas/casadebarro2.jpg" alt="image07" data-description="" /></a></li>
									<li><a href="#"><img src="images/programas/GalleryProgramas/thumbs/casadebarro3.jpg" data-large="images/programas/GalleryProgramas/casadebarro3.jpg" alt="image08" data-description="" /></a></li>
									<li><a href="#"><img src="images/programas/GalleryProgramas/thumbs/casadebarro4.jpg" data-large="images/programas/GalleryProgramas/casadebarro4.jpg" alt="image09" data-description="" /></a></li>
									<li><a href="#"><img src="images/programas/GalleryProgramas/thumbs/casadebarro5.jpg" data-large="images/programas/GalleryProgramas/casadebarro5.jpg" alt="image10" data-description="" /></a></li>
									<li><a href="#"><img src="images/programas/GalleryProgramas/thumbs/chilatecatejedoras.jpg" data-large="images/programas/GalleryProgramas/chilatecatejedoras.jpg" alt="image11" data-description="" /></a></li>
									<li><a href="#"><img src="images/programas/GalleryProgramas/thumbs/chilatecatejedoras1.jpg" data-large="images/programas/GalleryProgramas/chilatecatejedoras1.jpg" alt="image12" data-description="" /></a></li>
									<li><a href="#"><img src="images/programas/GalleryProgramas/thumbs/colibriartesanos.jpg" data-large="images/programas/GalleryProgramas/colibriartesanos.jpg" alt="image01" data-description="" /></a></li>
									<li><a href="#"><img src="images/programas/GalleryProgramas/thumbs/colibriartesanos1.jpg" data-large="images/programas/GalleryProgramas/colibriartesanos1.jpg" alt="image02" data-description="" /></a></li>
									<li><a href="#"><img src="images/programas/GalleryProgramas/thumbs/galvaincuytejido.jpg" data-large="images/programas/GalleryProgramas/galvaincuytejido.jpg" alt="image03" data-description="" /></a></li>
									<li><a href="#"><img src="images/programas/GalleryProgramas/thumbs/tiltepecbarro.jpg" data-large="images/programas/GalleryProgramas/tiltepecbarro.jpg" alt="image04" data-description="" /></a></li>
									<li><a href="#"><img src="images/programas/GalleryProgramas/thumbs/tiltepecbarro1.jpg" data-large="images/programas/GalleryProgramas/tiltepecbarro1.jpg" alt="image05" data-description="" /></a></li>
									<li><a href="#"><img src="images/programas/GalleryProgramas/thumbs/tiltepecbarro2.jpg" data-large="images/programas/GalleryProgramas/tiltepecbarro2.jpg" alt="image06" data-description="" /></a></li>
									<li><a href="#"><img src="images/programas/GalleryProgramas/thumbs/yaitepecbordados.jpg" data-large="images/programas/GalleryProgramas/yaitepecbordados.jpg" alt="image07" data-description="" /></a></li>
									<li><a href="#"><img src="images/programas/GalleryProgramas/thumbs/yaitepecbordados1.jpg" data-large="images/programas/GalleryProgramas/yaitepecbordados1.jpg" alt="image08" data-description="" /></a></li>
									<li><a href="#"><img src="images/programas/GalleryProgramas/thumbs/yaitepecbordados2.jpg" data-large="images/programas/GalleryProgramas/yaitepecbordados2.jpg" alt="image09" data-description="" /></a></li>
								</ul>	
							</div>
						</div>
						<!-- End Elastislide Carousel Thumbnail Viewer -->
					</div><!-- rg-thumbs -->
				</div><!-- rg-gallery -->
			</div><!-- content -->
		<!-- </div>container 
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>-->
		<script src="js/vendor/jquery.js"></script>
		<script type="text/javascript" src="modulos/programas/js/jquery.tmpl.min.js"></script>
		<script type="text/javascript" src="modulos/programas/js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="modulos/programas/js/jquery.elastislide.js"></script>
		<script type="text/javascript" src="modulos/programas/js/gallery.js"></script>

</html>