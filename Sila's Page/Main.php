							<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<title>Home - Sila's Art Corner</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Main_Page_R_CSS.css">
	<script src="https://kit.fontawesome.com/9bc6bdb290.js" crossorigin="anonymous"></script>
	</head>

	<body>
		<!-- Page start-->
	<div class="M_Page">
		<!--Incluse of header.php file-->
		<?php include 'Header.php';?>
	<br>
				<!--Intro Text div beggining-->
	<div  id="Content"id=Intro_Div class="card" >
				<!--Intro Text-->
	<span id=S_Text class="bg-light rounded border">
	Welcome to my website! I am an artist-in-progress and keen to keep learning. Feel free to follow my journey here or at the other websites listed below. If you like what you see I also have some online shops available.<br>
	</span>
	</div>
	<!--intro text div end-->

		<!--Slideshow gallery start-->
	<div class="slideshow-container ">
	<div class="mySlides animated">
		<div class="slide-number">1/8</div>
		<img src="./img/Slideshow/Image1.png">
		<div class="slide-text text-body">"Summer of 2019" Collection</div>
	</div>

	<div class="mySlides animated">
		<div class="slide-number">2/8</div>
		<img src="./img/Slideshow/Image2.png">
		<div class="slide-text text-body">"Summer of 2019" Collection</div>
	</div>

	<div class="mySlides animated">
		<div class="slide-number">3/8</div>
		<img src="./img/Slideshow/Image3.png">
		<div class="slide-text text-body">"Summer of 2019" Collection</div>
	</div>

		<div class="mySlides animated">
		<div class="slide-number">4/8</div>
		<img src="./img/Slideshow/Image4.png">
		<div class="slide-text text-body">"Summer of 2019" Collection</div>
	</div>

		<div class="mySlides animated">
		<div class="slide-number">5/8</div>
		<img src="./img/Slideshow/Image5.png">
		<div class="slide-text text-body">"Summer of 2019" Collection</div>
	</div>

		<div class="mySlides animated">
		<div class="slide-number">6/8</div>
		<img src="./img/Slideshow/Image6.png">
		<div class="slide-text text-body">"Summer of 2019" Collection</div>
	</div>

		<div class="mySlides animated">
		<div class="slide-number">7/8</div>
		<img src="./img/Slideshow/Image7.png">
		<div class="slide-text text-body">"Summer of 2019" Collection</div>
	</div>

		<div class="mySlides animated">
		<div class="slide-number">8/8</div>
		<img src="./img/Slideshow/Image8.png">
		<div class="slide-text text-body">"Summer of 2019" Collection</div>
	</div>

	<a class="slide-prev" onclick="plusSlides(-1)">❮</a>
	<a class="slide-next" onclick="plusSlides(1)">❯</a>
</div>
<!--Slideshow pictures end-->
<!--Slideshow picture selection buttons-->
<div class="slide-dot-control">
	<span class="slide-dot" onclick="currentSlide(1)"></span>
	<span class="slide-dot" onclick="currentSlide(2)"></span>
	<span class="slide-dot" onclick="currentSlide(3)"></span>
	<span class="slide-dot" onclick="currentSlide(4)"></span>
	<span class="slide-dot" onclick="currentSlide(5)"></span>
	<span class="slide-dot" onclick="currentSlide(6)"></span>
	<span class="slide-dot" onclick="currentSlide(7)"></span>
	<span class="slide-dot" onclick="currentSlide(8)"></span>
</div>
	<!--Slideshow gallery script using the slide dots to change the images on the slideshow-->
<script>
var slideIndex = 1;
function showSlides() {
	var slides = document.getElementsByClassName("mySlides");
	if (slideIndex > slides.length) {slideIndex = 1;}
	if (slideIndex < 1) {slideIndex = slides.length;}
	for (var i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	slides[slideIndex-1].style.display = "block";
	var dots = document.getElementsByClassName("slide-dot");
	for (var i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" slide-dot-active", "");
	}
	dots[slideIndex-1].className += " slide-dot-active";
 }
function plusSlides(n) {
	slideIndex += n;
	showSlides();
}
function currentSlide(n) {
	slideIndex = n;
	showSlides();
}
window.onload = showSlides;
</script>
	</div>
	<!--Main page body end-->
	</body>
		<?php include 'Footer.php';?>
