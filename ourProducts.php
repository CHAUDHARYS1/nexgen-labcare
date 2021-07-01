<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org">

<head>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="icon" href="img/dark-favicon.png" type="image/gif" sizes="16x16">

	<!-- Stylesheet -->
	<link rel="stylesheet" href="css/styles.css">

	<!-- Font Stylesheet -->
	<link rel="stylesheet" href="https://use.typekit.net/nck5uye.css">

	<title>About | Nexgen Labcare</title>

</head>

<body>
	<!-- Nav Begins Here -->
	<?php include('fragments/nav.php'); ?>
	<!-- End -->
	<!-- Attention Grabber Here | Section One -->
	<div class="container-fluid" style="background: #2F4D84;" id="wipeoutSectionOne">
		<div class="container" id="attentionGrabberContainer">
			<div class="row">
				<div class="col-lg-4 col-md-0" id="modelBackpack">
					<img src="img/packet-bag.png" alt="">
				</div>
				<div class="col-md-4 offset-1">
					<div class="attention-grabber">
						<h2 class="display-4" style="">Our Wipeout Hand Sanitizer. <br> <span style="font-weight: 700;color:white;background: black;line-height:1.5;">Confidence You Can Carry.</span></h2>
						<br>
						<p class="text-white">Wipeout Hand Sanitizer is the perfect pocket size packet you never leave home without. </p>

						<p class="font-weight-bold text-white mt-4" style="font-size: 20px;">Easy to use and easy to carry.</p>

						<p class="text-white" style="font-size:15px;">All of our products are blended, packed, and distributed here in the U.S.</p>
						<a href="http://www.amazon.com" class="btn btn-lg btn-scale shadow mt-4" style="min-width:50%;"><img src="img/whit-cart.png" alt="Icon of a cart" class="mr-2">Buy Now</a>
					</div>
				</div>
				<div class="col-md-3 order-first order-lg-last">
					<img src="img/og-wipeout-packet-xl.png" class="attention-grabber-img" alt="">
				</div>
			</div>
		</div>
	</div>
	<!-- End -->
	<!-- Section Two -->
	<div class="container">
		<div class="row" id="ourProductSectionTwo">
			<div class="col-md-7 mt-5 pl-5">
				<h2>Our Flagship Product -
					Wipeout Hand Sanitizer</h2>
				<p class="p-two font-weight-bold mt-5"> Our single-use hand sanitizer can be used by a single individual OR by 2-3 people. </p>
				<p class="p-two mt-5">In this post-COVID-19 world, it’s not enough to keep yourself safe – whether you’re with friends or family, you should have an easy way to keep those around you safe too.</p>
			</div>
			<div class=" col-md-4 offset-1" id="backPocket">
			</div>
		</div>
	</div>
	<!-- End -->
	<!-- Section Three -->
	<div class="container-fluid bg-grey">
		<div class="container">
			<div class="row" id="ourProductSectionThree">
				<div class="col-lg-3 offset-2" id="packetSize"></div>
				<div class="col-lg-6" style="margin-top:100px;" id="ourProductContent">
					<h2>Perfect Size <br>for your Pocket</h2>
					<br>
					<p class="p-two">Wipeout Gel Packets are ideal for many occasions where carrying a bottle is not practical.</p>
					<br>
					<p class="p-two">
						Each packet is 4.5 inches tall by 2.5 inches in width. Making it the <b>perfect size to carry in your hand.</b></p>
				</div>
			</div>
		</div>
	</div>
	<!-- End -->
	<!-- Section Four | Coming Soon | Unique Section -->
	<div class="container" style="margin-top:50px; margin-bottom:50px;">
		<div class="row">
			<div class="col-md-8" id="comingSoonGraphic"></div>
			<div class="col-md-4" id="comingSoonRightContainer">
				<div class="comingSoonContent text-center">
					<h2>Our Other Products</h2>
					<p class="p-two">Hand Sanitizer by the Gallon, Hand Sanitizer Spray Bottles, Disinfectant Wipes, and more.</p>
					<br>
					<a href="http://www.amazon.com" class="btn btn-lg btn-scale shadow mt-4" style="min-width:40%;"><img src="img/whit-cart.png" alt="Icon of a cart" class="mr-2">Buy Now</a>

				</div>
			</div>
		</div>
	</div>
	<!-- End -->
	<!-- Section Five Mini | Unique Section -->
	<div class="container-fluid bg-grey text-center pt-4 pb-2">
		<h4 style="font-weight:700">All of our products are blended, packed, and distributed here in the U.S.</h4>
	</div>
	<!-- End -->
	<!--  -->
	<!-- Social Media Footer -->
	<?php include('fragments/social-footer.php');?>
	<!-- End -->
	<!-- Website Footer -->
	<?php include('fragments/footer.php');?>
	<!-- End -->
	<!-- Add JavaScript Below If Needed -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
