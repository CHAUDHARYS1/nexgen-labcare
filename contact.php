<!doctype html>
<html lang="en">

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
	<title>Nexgen Labcare</title>

</head>

<body>
	<?php include('fragments/nav.php'); ?>

	<div class="container" id="contactHeader">
		<!-- Remove Style attribute in this h3 -->
		<!-- add p in class name -->
		<h3 class="font-weight-normal p">Your satisfaction is important to us. If you would like more information or
			just want to tell us about your experience with our products, please
			contact us and we will do our absolute best to get back to you within 24-48
			business hours.</h3>
	</div>
	<div class="cotainer-fluid pt-5 mt-5" style="background: #4F7ED5">
		<div class="container pt-5 pb-5 ">
			<form method="post">
				<div class="form-group">
					<label class="form-label" for="emailInput">Email</label>
					<input type="email" class="form-control" name="email" id="emailInput" placeholder="name@mail.com" required>
				</div>
				<div class="form-group">
					<label class="form-label" for="nameInput">Full Name</label>
					<input type="text" class="form-control" name="name" id="nameInput" placeholder="John Doe" required>
				</div>
				<div class="form-group">
					<label class="form-label" for="phoneInput">Phone Number</label>
					<input type="number" class="form-control" name="phone" id="phoneInput" placeholder="ex. 123 456 7890" required>
				</div>
				<div class="form-group">
					<label class="form-label" for="inquiryInput">Inquiry</label>
					<input type="text" class="form-control" name="inquiry" id="inquiryInput" placeholder="ex. Bulk purchase orders">
				</div>
				<div class="form-group">
					<label class="form-label" for="messageInput">Message</label>
					<textarea class="form-control" name="message" id="messageInput" placeholder="Let us know" required style="height: 200px;"></textarea>
				</div>

				<!-- Remove class name for this button -->
				<button type="submit">Sumbit</button>
				<!-- Remove class name for this button -->

			</form>
		</div>
	</div>
	<div class="container-fluid text-white pt-3 pb-3" style="background: #24375A">
		<div class="row">
			<div class="col-md-6 instagram-dontforget">
				<p><img src="img/icon-instagram.png" class="p-2 mr-1 mb-2" alt="Instagram Icon">Don’t forget to follow us on instagram!</p>
			</div>
			<div class="col-md-6 mb-2 instagram-weblink">
				<a href="http://www.instagram.com/nexgenlabcare/" style="font-weight: 200" target="_blank" class="text-white text-decoration-underline"><u>www.instagram.com/nexgenlabcare/</u></a>
			</div>
		</div>
	</div>
	<footer class="container-fluid" style="background: #132038">

		<div style="font-size: 14px;">
			<ul class="nav justify-content-center">
				<li class="nav-item">
					<a class="nav-link text-muted p-2" href="#">Contact Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-muted p-2" href="#">Privacy Policy</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-muted p-2" href="#">Terms of Service</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-muted p-2" href="#">Legal</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-muted p-2" href="#">Site map</a>
				</li>

			</ul>
		</div>
		<div class="text-center text-muted mt-2 p-2">
			<p style="font-size: 14px;">&copy 2020 Nexgen Labcare. All right reserved.</p>
		</div>
	</footer>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
