// Import the apps styles
import sass from "../scss/app.scss";

// Import our modules
import "./modules/_header.js";

console.log("hello");

$(document).ready(function() {
	$(".slider-wrap").slick({
		dots: true,
		infinite: false,
		speed: 500,
		cssEase: "linear",
		autoplay: true,
		autoplaySpeed: 4000
	});

	document.querySelector("body").classList.add("fade-in");

	$(".scrolling-wrapper").slick({
		dots: true,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		adaptiveHeight: true
	});
});
