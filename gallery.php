<!DOCTYPE html>
<html lang="en">

<head>
	<title>Dream Place Hotel</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php require('Include/links.php'); ?>

	<style>
		/* Add horizontal space between images */
		.gallery-container {
			display: flex;
			flex-wrap: wrap;
			gap: 20px;
			/* Add 20px horizontal and vertical space between images */
			justify-content: flex-start;
			/* Align images to the left */
		}

		.gallery-item {
			flex: 0 0 250px;
			/* Each image container will take up 250px */
			height: 250px;
		}

		.gallery-item img {
			width: 100%;
			height: 100%;
			object-fit: cover;
		}
	</style>
</head>

<body>
	<?php require_once('Include/Header.php'); ?>

	<div class="container-dflex Align-items-center" style="margin-left: 0;">
		<div class="panel panel-default">
			<div class="panel-body">
				<strong>
					<h3>GALLERY</h3>
				</strong>
				<br />
				<!-- Gallery container with flexbox for horizontal spacing -->
				<div class="gallery-container">
					<div class="gallery-item">
						<img src="Images/images/gallery/1.jpg" alt="Gallery Image 1" />
					</div>
					<div class="gallery-item">
						<img src="Images/images/gallery/2.jpg" alt="Gallery Image 2" />
					</div>
					<div class="gallery-item">
						<img src="Images/images/gallery/3.jpg" alt="Gallery Image 3" />
					</div>
					<div class="gallery-item">
						<img src="Images/images/gallery/4.jpg" alt="Gallery Image 4" />
					</div>
					<div class="gallery-item">
						<img src="Images/images/gallery/5.jpg" alt="Gallery Image 5" />
					</div>
					<div class="gallery-item">
						<img src="Images/images/gallery/6.jpg" alt="Gallery Image 6" />
					</div>
					<div class="gallery-item">
						<img src="Images/images/gallery/7.jpg" alt="Gallery Image 7" />
					</div>
					<div class="gallery-item">
						<img src="Images/images/gallery/8.jpg" alt="Gallery Image 8" />
					</div>
					<div class="gallery-item">
						<img src="Images/images/gallery/9.jpg" alt="Gallery Image 9" />
					</div>
					<div class="gallery-item">
						<img src="Images/images/gallery/10.jpg" alt="Gallery Image 10" />
					</div>
					<div class="gallery-item">
						<img src="Images/images/gallery/11.jpg" alt="Gallery Image 11" />
					</div>
					<div class="gallery-item">
						<img src="Images/images/gallery/12.jpg" alt="Gallery Image 12" />
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--footer start-->
	<?php require_once('Include/Footer.php'); ?>
	<!--footer end-->

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
</body>

</html>