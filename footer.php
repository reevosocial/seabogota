	<!-- Footer -->


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

		<!-- Visor de Fotos -->

<script type="text/javascript">

$(function () {
    var viewer = ImageViewer();
    $('.gallery-items').click(function () {
        var imgSrc = $(this).data('low-src'),
            highResolutionImage = $(this).data('high-res-src');
        viewer.show(imgSrc, highResolutionImage);
    });
});
</script>


