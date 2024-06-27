// overlay menu
function openNav() {
	document.getElementById("myNav").classList.toggle("menu_width");
	document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style");
}

// display current year

function displayYear() {
	var d = new Date();
	var currentYear = d.getFullYear();

	document.querySelector("#displayDate").innerHTML = currentYear;
}
displayYear();

// client section owl carousel
$(".owl-carousel").owlCarousel({
	loop: true,
	margin: 0,
	navText: [],
	dots: false,
	autoplay: true,
	autoplayHoverPause: true,
	navText: [
		'<span class="fa fa-arrow-left "></span>',
		'<span class="fa fa-arrow-right"></span>',
	],
	responsive: {
		0: {
			items: 1,
		},
		991: {
			items: 2,
		},
	},
});

/** google_map js **/

function myMap() {
	var mapProp = {
		center: new google.maps.LatLng(-6.190762223794342, 107.0342793258609),
		zoom: 18,
	};
	var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
}

// Smooth scroll
document.querySelectorAll("a.cta").forEach(function (a) {
	a.addEventListener("click", function (event) {
		event.preventDefault();
		const hash = event.target.getAttribute("href");
		const scrollTarget = document.querySelector(hash);

		// Some additional logic
		const headerHeight = 90;
		window.scrollTo(0, scrollTarget.getBoundingClientRect().top);
	});
});
