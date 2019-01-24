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
		autoplaySpeed: 4000,
		vertical: true,
		verticalSwiping: true
	});

	document.querySelector("body").classList.add("fade-in");
});
