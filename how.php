<?php 

include './parts/header.php';

 ?>

 <div class="container">
	<h1 class="h1 align-center text--purple">how vendible works</h1>

<div class="container full">

<!---
	Divs for clickable poster
!-->

	<div class="half left">
		<div class="poster-piece" data-for="shop-url">
		<img src="media/shop-owner.png" width="220">
		</div>

		<div class="poster-piece hidden" data-name="shop-url" data-for="pick">
		<img src="media/site-url.png" width="300">
		</div>

		<div class="poster-piece hidden" data-name="pick" data-for="set-up">
		<img src="media/pick-product.png" width="300">
		</div>

	</div>

	<div class="half left">
		<div class="poster-piece" data-for="artist-url">
		<img src="media/artist.png" width="220">
		</div>

		<div class="poster-piece hidden" data-name="artist-url" data-for="upload">
		<img src="media/site-url.png" width="300">
		</div>

		<div class="poster-piece hidden" data-name="upload" data-for="make">
		<img src="media/upload.png" width="300">
		</div>

		<div class="poster-piece hidden" data-name="make" data-for="buy">
		<img src="media/make.png" width="300">
		</div>

		<div class="poster-piece hidden" data-name="buy" data-for="set-up">
		<img src="media/buy.png" width="300">
		</div>
	</div>
</div>

<div class="container full">

	<div class="poster-piece hidden" data-name="set-up" data-for="experience">
	<img src="media/set-up.png" width="300">
	</div>

	<div class="poster-piece hidden" data-name="experience">
	<img src="media/experience.png" width="300">
	</div>
</div>

<!--
Text starts here
 !-->
	
	<p class="left">Our aim is to give customers an experience, making their time physically shopping memorable. 
		This is something that is not possible online. Vendible products are interactive and have a place in any shop.</p>

</div>

<div class="container">

<p class="left half">
	Over 73% of people said yes or maybe when asked the question, "Would an interactive art installation in a shop, make you more likely 
	to physically shop?"
</br></br>

	Modern society is used to living in a digital world. Online shopping is more convenient and easier for a lot of civilisation. Vendible products
	give the public an experience which is not possible online. This will change the nature of physically shopping and encourage society to go
	back to visiting the high street.
</br></br>

    This is what makes Vendible perfect for small stores with or without an online presence.
</p>

<img src="media/piechart.jpg" class="half right pad-image">
</div>


 <?php

include './parts/footer.php';

?>