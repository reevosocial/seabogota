
<?php
error_reporting(E_ALL);
ini_set('display_errors', false);
// Si no se define el idioma en la URL, se intenta usar el idioma del navegador
global $url;
$url="http://" . $_SERVER['SERVER_NAME'];
include('include/lang.php');
include("header.php");
include("menu.php");

if (!$_GET['p']) {
    ?>


		<div id="fh5co-main">
			<div class="fh5co-narrow-content">
				<div class="row">

					<div class="col-md-12 ">
						<h1 class="fh5co-heading-colored"><?php echo _('Semana Internacional de las Educaciones Alternativas'); ?></h1>
						</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
						<p class="fh5co-lead"><?php echo _('En Agosto de 2015 la ciudad de Bogotá fue sede del primer encuentro internacional de educación alternativa de habla hispana. Un evento gratuito que se desplegó por toda la ciudad, con más de 50 invitados internacionales y el propósito de fomentar la transformación educativa.'); ?></p>
						<!--  <p><a href="#" class="btn btn-primary btn-outline"><?php echo _('Leer más'); ?></a></p>  -->
					</div>

				</div>
			</div>

			<?php include("gallery.php"); ?>

			<div class="fh5co-narrow-content">
				<!-- <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Services</h2> -->
				<div class="row">
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-lightbulb"></i>
							</div>
							<div class="fh5co-text">
								<h3><?php echo _('Transformación'); ?></h3>
								<p><?php echo _('Un llamado a que juntos reconozcamos y reflexionemos con los colegios públicos que se han interesado por transformar y transformarse; fortaleciendo educaciones alternativas e innovadoras; y construyendo nuevos puentes entre las escuelas y sus territorios.'); ?> </p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-puzzle"></i>
							</div>
							<div class="fh5co-text">
								<h3><?php echo _('Territorio'); ?></h3>
								<p><?php echo _('Propuestas desde las nuevas ciudadanías en sus territorios, que ocurrieron simultáneamente en toda la ciudad. Niños, jóvenes, adultos, fueron parte de escenarios de aprendizaje creativo, vivo y consiente mediante encuentros abiertos, talleres, conversatorios, muestras e intervenciones con un enfoque experiencial y activo.'); ?></p>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-megaphone"></i>
							</div>
							<div class="fh5co-text">
								<h3><?php echo _('Comunicación'); ?></h3>
								<p><?php echo _('Pensadores, educadores, investigadores y emprendedores sociales de Colombia y el mundo participaron de espacios de intercambio y debate en torno a problemáticas que atraviesan la realidad de la educación en la región. Compartieron sus propuestas e ideas a través de paneles temáticos, talleres participativos de reflexión y formación.'); ?> </p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-chat"></i>
							</div>
							<div class="fh5co-text">
								<h3><?php echo _('Encuentro'); ?></h3>
								<p><?php echo _('Referentes internacionales y colombianos del campo de la educación alternativa que portan experiencias y puntos de vista disidentes, críticos, alternativos, contrahegemónicos se reunieron en diálogos participativos sobre los principales temas en torno a la educación.'); ?></p>
							</div>
						</div>
					</div>

				</div>
			</div>

			<!--
			<div class="fh5co-testimonial" >
				<div class="fh5co-narrow-content">
					<div class="owl-carousel-fullwidth animate-box" data-animate-effect="fadeInLeft">
		            <div class="item">
		            	<figure>
		            		<img src="images/testimonial_person2.jpg" alt="Free HTML5 Bootstrap Template">
		            	</figure>
		              	<p class="text-center quote">&ldquo;Design must be functional and functionality must be translated into visual aesthetics, without any reliance on gimmicks that have to be explained. &rdquo; <cite class="author">&mdash; Ferdinand A. Porsche</cite></p>
		            </div>
		            <div class="item">
		            	<figure>
		            		<img src="images/testimonial_person3.jpg" alt="Free HTML5 Bootstrap Template">
		            	</figure>
		              	<p class="text-center quote">&ldquo;Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after a while. &rdquo;<cite class="author">&mdash; Steve Jobs</cite></p>
		            </div>
		            <div class="item">
		            	<figure>
		            		<img src="images/testimonial_person4.jpg" alt="Free HTML5 Bootstrap Template">
		            	</figure>
		              	<p class="text-center quote">&ldquo;I think design would be better if designers were much more skeptical about its applications. If you believe in the potency of your craft, where you choose to dole it out is not something to take lightly. &rdquo;<cite class="author">&mdash; Frank Chimero</cite></p>
		            </div>
		          </div>
				</div>
			</div>
			-->

			<div class="fh5co-counters" style="background-image: url(images/hero.jpg);" data-stellar-background-ratio="0.5" id="counter-animate">
				<div class="fh5co-narrow-content animate-box">
					<div class="row" >
						<div class="col-md-3 text-center">
<span class="fh5co-counter js-counter" data-from="0" data-to="305" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label"><?php echo _('Actividades gratuitas realizadas'); ?></span>
						</div>
						<div class="col-md-3 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="50" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label"><?php echo _('Invitados internacionales convocados'); ?></span>
						</div>
						<div class="col-md-3 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="5430" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label"><?php echo _('Personas asistieron'); ?></span>
						</div>
						<div class="col-md-3 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="30" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label"><?php echo _('Escuelas locales participaron'); ?></span>
						</div>
					</div>
				</div>
			</div>


			<div class="fh5co-narrow-content">
				<div class="row">
					<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
						<h1 class="fh5co-heading-colored"><?php echo _('Carta Abierta'); ?></h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
						<p class="fh5co-lead"><?php echo _('Durante la SEA se realizó un Encuentro Latinoamericano con participantes de todo el continente, en el cual se acordó en la escritura colectiva de una Carta Abierta que reflejara las posturas mayoritarias. Compartimos aquí el resultado de ese proceso.'); ?></p>
						<p><a href="/?p=carta" class="btn btn-primary btn-outline"><?php echo _('Ver más'); ?></a></p>
					</div>

				</div>
			</div>

		</div>



<?php } else { $page = $_GET['p']; ?>

    <?php include('locale/'.$lang.'/'.$page.'.php'); ?>

<?php } ?>


	</div>

	<?php include("footer.php");?>

	</body>
</html>
