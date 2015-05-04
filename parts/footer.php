		<footer>
			<div class="container align-center">							
<!--
Footer links to social media account
-->
				<p>

				<a href="https://www.facebook.com/pages/Vendible/329195953957460?ref=bookmarks">
					<img src="media/facebooklogo.png">
				</a>

			    <a href="http://vendiblevisual.tumblr.com/">
					<img src="media/tumblrlogo.png">
				</a>

				 <a href="https://github.com/nicoleee/vendible">
					<img src="media/github.png">
				</a>

			    </p>

<!--
Footer text
-->

				<p class="copyright">
				<a href="http://www.nicolecookdesigns.co.uk">www.nicolecookdesigns.co.uk</a>
				</br>
					<img src="media/email.jpg">
				</br>
					&copy; Nicole Cook 2015 | All Rights Reserved</p>

			</div>
		</footer>

<!--
 JS for homepage slider
-->
		<script src="js/bower_components/jquery/dist/jquery.min.js"></script>
		<script src="js/slider.js"></script>
		<script src="js/main.js"></script>
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
