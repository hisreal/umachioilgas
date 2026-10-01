/*
  Theme Name: Fossil | Gas Station & Petrol Pump HTML Template
  Author: Capricorn_Theme
  Creation Date: 07 Feb 2024
  Version: 1.0
*/

/* [Table of Contents]

* 01. Mobile Menu 
  02. Header Search Form 

  03. Owl Carousel
        - Hero Area Slider
        - Testimonial Carousel
		- Client Carousel
  04. Sticky Area
  05. Progress Bar 
  06. Counter Up 
  07. Wow Animation 
  08. Scroll to the Top
  09. Active & Remove Class
  10. Menu Active Color
  11. Preloader 

*/
(function ($) {
	"use strict";

	// Mobile Menu

	$(".navbar-toggler").on("click", function () {
		$(this).toggleClass("active");
	});

	$(".navbar-nav li a").on("click", function () {
		$(".sub-nav-toggler").removeClass("active");
	});

	var subMenu = $(".navbar-nav .sub-menu");

	if (subMenu.length) {
		subMenu
			.parent("li")
			.children("a")
			.append(function () {
				return '<button class="sub-nav-toggler"> <i class="fa fa-angle-down"></i> </button>';
			});

		var subMenuToggler = $(".navbar-nav .sub-nav-toggler");

		subMenuToggler.on("click", function () {
			$(this).parent().parent().children(".sub-menu").slideToggle();
			return false;
		});
	}

	//Header Search Form
	if ($(".search-btn").length) {
		$(".search-btn").on("click", function () {
			$("body").addClass("search-active");
		});
		$(".close-search, .search-back-drop").on("click", function () {
			$("body").removeClass("search-active");
		});
	}

	// Hero Area Slider

	$('.homepage-slides').owlCarousel({
		items: 1,
		dots: false,
		nav: true,
		loop: true,
		autoplay: false,
		autoplayTimeout: 5000,
		smartSpeed: 2000,
		slideSpeed: 600,
		animateOut: 'fadeOut',
		navText: ["<i class='la la-angle-left'></i>", "<i class='la la-angle-right'></i>"],
		responsive: {
			0: {
				items: 1,
				nav: false,
				dots: false,
			},
			600: {
				items: 1,
				nav: false,
				dots: false,
			},
			768: {
				items: 1,
				nav: false,
				dots: false,
			},
			1100: {
				items: 1,
				nav: true,
				dots: false,
			}
		}
	});


	$(".homepage-slides").on("translate.owl.carousel", function () {
		$(".single-slide-item h1").removeClass("animated fadeInUp").css("opacity", "1");
		$(".single-slide-item h6").removeClass("animated fadeInDown").css("opacity", "1");
		$(".single-slide-item p").removeClass("animated fadeInDown").css("opacity", "1");
		$(".single-slide-item a.main-btn").removeClass("animated fadeInDown").css("opacity", "1");
	});

	$(".homepage-slides").on("translated.owl.carousel", function () {
		$(".single-slide-item h1").addClass("animated fadeInUp").css("opacity", "1");
		$(".single-slide-item h6").addClass("animated fadeInDown").css("opacity", "1");
		$(".single-slide-item p").addClass("animated fadeInDown").css("opacity", "1");
		$(".single-slide-item a.main-btn").addClass("animated fadeInDown").css("opacity", "1");
	});


	// Testimonial Carousel

	// Advances slowly on its own, pauses while hovered, and stays still for
	// visitors who've asked for reduced motion.
	var prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

	$('.client-carousel').owlCarousel({
		items: 1,
		margin: 30,
		dots: true,
		nav: false,
		loop: true,
		autoplay: !prefersReducedMotion,
		autoplayTimeout: 7000,
		autoplayHoverPause: true,
		smartSpeed: 600,
		responsiveClass: true,
		responsive: {
			575: {
				items: 1,
				nav: false,
				dots: false,
			},

			767: {
				items: 1,
				nav: false
			},

			990: {
				items: 2,
				loop: true,

			},
			1200: {
				items: 2,
				dots: true,
				loop: true,
			}
		}
	});


	// Client Carousel 

	$('.logo-carousel').owlCarousel({
		items: 5,
		margin: 30,
		dots: false,
		nav: false,
		loop: true,
		autoplay: true,
		responsive: {
			0: {
				items: 2,
				nav: false,
				dots: false,
			},
			600: {
				items: 2,
				nav: false,
				dots: false,
			},
			768: {
				items: 4,
				nav: false,
				dots: false,
			},
			1100: {
				items: 5,
				nav: false,
				dots: true,
			}
		}
	})

	// Service Slider

	$(".service-item-wrap").owlCarousel({
		items: 1,
		margin: 30,
		dots: true,
		nav: false,
		loop: true,
		autoplay: true,
		responsiveClass: true,
		responsive: {
		  0: {
			items: 1,
			nav: false,
			dots: false,
		  },
	
		  575: {
			items: 1,
			nav: false,
			dots: false,
		  },
	
		  767: {
			items: 2,
			nav: false,
		  },
	
		  990: {
			items: 3,
			loop: true,
		  },
		  1200: {
			items: 3,
			dots: true,
			loop: true,
		  },
		},
	  });

	// Sticky header. The bar is always position:fixed (see style.css);
	// the <header> reserves the bar's full, unscrolled height so content
	// never jumps when the bar condenses, and .is-scrolled drives the
	// condensed/translucent state.
	var header = document.querySelector('.header-area');
	var stickyArea = header && header.querySelector('.sticky-area');

	if (stickyArea) {
		var SCROLL_THRESHOLD = 10;
		var remeasureAtTop = false;
		var ticking = false;

		var reserveHeaderSpace = function () {
			// Only measure the full-height bar, never the condensed one.
			if (header.classList.contains('is-scrolled')) {
				remeasureAtTop = true;
				return;
			}
			var height = stickyArea.offsetHeight;
			header.style.minHeight = height + 'px';
			// Used by scroll-padding-top so anchor targets clear the bar.
			document.documentElement.style.setProperty('--header-height', height + 'px');
		};

		var updateHeaderState = function () {
			ticking = false;
			var scrolled = window.scrollY > SCROLL_THRESHOLD;
			if (scrolled === header.classList.contains('is-scrolled')) {
				return;
			}
			header.classList.toggle('is-scrolled', scrolled);
			if (!scrolled && remeasureAtTop) {
				remeasureAtTop = false;
				// Wait for the expand transition to finish before measuring.
				setTimeout(reserveHeaderSpace, 350);
			}
		};

		reserveHeaderSpace();
		updateHeaderState();
		$(window).on('load resize', reserveHeaderSpace);
		window.addEventListener('scroll', function () {
			if (!ticking) {
				ticking = true;
				window.requestAnimationFrame(updateHeaderState);
			}
		}, { passive: true });
	}

	//Progress Bar JS

	$("#bar1").barfiller({
		barColor: "#FFD857",
		duration: 5000,
	});

	$("#bar2").barfiller({
		barColor: "#FFD857",
		duration: 6000,
	});

	$("#bar3").barfiller({
		barColor: "#FFD857",
		duration: 7000,
	});

	$("#bar4").barfiller({
		barColor: "#FFD857",
		duration: 5000,
	});

	$("#bar5").barfiller({
		barColor: "#FFD857",
		duration: 6000,
	});

	$("#bar6").barfiller({
		barColor: "#FFD857",
		duration: 7000,
	});

	//Counter Up

	$(".counter-number span").counterUp({
		delay: 10,
		time: 1000,
	});

	// magnific popup

	  $(".video-play-btn").magnificPopup({
		type: "iframe",
	  });


	// Scroll reveals (replaces WOW.js + animate.css). Reuses the existing
	// .wow markup; each element is revealed once as it enters the viewport.
	// header.php only adds .js-reveal when motion is allowed and
	// IntersectionObserver exists, so check that rather than re-deciding.
	(function () {
		var root = document.documentElement;
		var targets = document.querySelectorAll('.wow');
		if (!root.classList.contains('js-reveal') || !targets.length) {
			return;
		}

		var REVEAL_MS = 600; // matches --dur-slow

		var reveal = function (el) {
			el.classList.add('is-revealed');
			var delayMs = (parseFloat(el.style.transitionDelay) || 0) * 1000;
			// Once the entrance has played, drop the reveal classes so the
			// element's own transitions (hover effects etc.) apply again.
			setTimeout(function () {
				el.classList.remove('wow', 'is-revealed', 'fadeInUp', 'fadeInLeft', 'fadeInRight');
				el.style.transitionDelay = '';
			}, REVEAL_MS + delayMs + 50);
		};

		targets.forEach(function (el) {
			// Legacy delays were tuned for 1s animations; keep their order
			// but halve and cap them so nothing waits long to appear.
			var delay = parseFloat(el.getAttribute('data-wow-delay')) || 0;
			if (delay) {
				el.style.transitionDelay = Math.min(delay * 0.5, 0.3) + 's';
			}
		});

		var observer = new IntersectionObserver(function (entries) {
			entries.forEach(function (entry) {
				if (entry.isIntersecting) {
					reveal(entry.target);
					observer.unobserve(entry.target);
				}
			});
		}, { rootMargin: '0px 0px -8% 0px', threshold: 0.05 });

		targets.forEach(function (el) {
			observer.observe(el);
		});
		window.revealReady = true;
	})();

	// SCROLLTO THE TOP

	// Show or hide the sticky footer button
	$(window).on("scroll", function () {
		if ($(this).scrollTop() > 600) {
			$('.go-top').fadeIn(200);
		} else {
			$('.go-top').fadeOut(200);
		}
	});


	// Animate the scroll to top
	// Native smooth scroll (jQuery's scrollTop animation fights CSS
	// scroll-behavior: smooth and stutters). Instant under reduced motion.
	$('.go-top').on("click", function (event) {
		event.preventDefault();
		var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
		window.scrollTo({ top: 0, behavior: reduceMotion ? 'auto' : 'smooth' });
	});

	// Active & Remove Class 

	//	$(".single-serv-item").on("mouseover", function () {
	//		$(".single-serv-item").removeClass("active");
	//		$(this).addClass("active");
	//	});

	$(".single-price-item").on("mouseover", function () {
		$(".single-price-item").removeClass("active");
		$(this).addClass("active");
	});

	// Menu Active Color 

	$(".main-menu .navbar-nav .nav-link").on("mouseover", function () {
		$(".main-menu .navbar-nav .nav-link").removeClass("active");
		$(this).addClass("active");
	});

}(jQuery));
