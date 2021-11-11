
<footer class="layout-dark">
	&nbsp;
	<div class="container padding-tb-30px">
		<div class="row">

			<div class="col-lg-3 col-md-6">
				<div class="nile-widget widget_nav_menu sm-mb-45px">
					<h2 class="title">H.Ayuntamiento de <br>Villa de Álvarez</h2><br>
					<div class="about-us sm-mb-45px">
						<div class="text margin-bottom-10px">
							<span class="icon_pin_alt"></span>  J. Merced Cabrera #55 C.P.28970 Centro, Villa de Álvarez, Col.
						</div>

						<div class="text margin-bottom-10px">
							<span class="icon_home"></span> RFC: MVA850101-4HA
						</div>
						
							<div class="text margin-bottom-35px">
							<span class="icon_phone"></span>  Teléfono: 01 (312) 316 27 00 
						</div>
					</div>
				</div>
			</div>				
			
			<div class="col-lg-3 col-md-6">
				<div class="nile-widget widget_nav_menu sm-mb-45px">
					<h2 class="title">Avisos</h2>
					<ul class="footer-menu">
						<li><a href="http://villadealvarez.gob.mx/transparencia/aviso-de-privacidad/">Aviso de Privacidad</a></li>
				
							<li><a href="http://www.villadealvarez.gob.mx/noticias/">Noticias</a></li>
					</ul>
				</div>
			</div>
			

			<div class="col-lg-3 col-md-6">
				<div class="nile-widget widget_nav_menu sm-mb-45px">
					<h2 class="title">Destacados</h2>
					<ul class="footer-menu">
						<li><a href="http://villadealvarez.gob.mx/home/pagos">Pagos en Línea</a></li>
						<li><a href="https://www.empress.mx/cfdimunicipios/Index.php">Comprobante Fiscal</a></li>
						<li><a href="http://villadealvarez.gob.mx/transparencia/">Transparencia</a></li>
						<li><a href="http://villadealvarez.gob.mx/transparencia/directorio-de-servidores-publicos/">Directorio Telefónico</a></li>
						
						
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="copy-right">
		<div class="container padding-tb-50px">
			<div class="row">
				<div class="col-lg-6">
					<div class="copy-right-text text-lg-left text-center sm-mb-15px">© 2021 Villa de Álvarez - Todos los derechos reservados </div>
				</div>
				<div class="col-lg-6">
					<!--  Social -->
					<ul class="social-media list-inline text-lg-right text-center margin-0px text-white">
						<li class="list-inline-item"><a class="facebook" href="https://www.facebook.com/AyuntamientoVDA/"><i class="i-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a class="twitter" href="https://twitter.com/villadealvarez"><i class="i-twitter" aria-hidden="true"></i></a></li>
					</ul>
					<!-- // Social -->
				</div>
			</div>
		</div>
	</div>
</footer>



    <!-- jquery library  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="<?php echo base_url() ?>/javascript/main.js"></script>
	<?php 

$jsfile = strtolower("javascript/metodos/".METODO.".js");

if(file_exists($jsfile)){
	echo "\n<script type=\"text/javascript\" src=\"".base_url()."/{$jsfile}?".filemtime($jsfile)."\"></script>";
}
?>
</html>
