		<footer>
			<div class="container align-center">
				<a href="http://www.nicolecookdesigns.co.uk">www.nicolecookdesigns.co.uk</a>
				<p class="copyright">&copy; Nicole Cook 2015 | All Rights Reserved</p>
			</div>
		</footer>
		<script src="js/bower_components/jquery/dist/jquery.min.js"></script>
		<script src="js/slider.js"></script>
		<script>
			Slider.init({
				domElement: '#slider'
			});

			var delay = 5;

			var slideTimer = setInterval(function() {
				if (Slider.index >= Slider.slidesAmount - 1) {
					Slider.goTo(0);
				} else {
					Slider.next();
				}
			}, delay*1000);
		</script>
	</body>
</html>
