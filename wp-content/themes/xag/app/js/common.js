$(function () {
	$(document).ready(function () {


		if( $('.p100pro .s1').length ){
			let section = $('.p100pro .s1');
			let innerHeight = $('.s1__inner').outerHeight(true);
			let item = $('.s1__item');
			let itemCount = item.length;
			let sectionHeightPart = innerHeight / itemCount;

			$(window).scroll(function(){
				let scrollTop = $(this).scrollTop();
				let sectionOffset = section.offset().top;

				if (scrollTop >= sectionOffset) {
					$(item).removeClass('s1__item--active');
					$(item[0]).addClass('s1__item--active');

					for( let i=1; i<itemCount; i++ ){
						if( (scrollTop - sectionOffset) >= i*sectionHeightPart ){
							$(item).removeClass('s1__item--active');
							$(item[i]).addClass('s1__item--active');
						}
					}
				} else {
					$(item).removeClass('s1__item--active');
				}
			})
		}



		if( $('.p100pro .s2').length ){
			$(window).scroll(function(){
				let windowHeight = $(window).height();
				let scrollTop = $(window).scrollTop();
				let elementTop = $('.s2__info-items').offset().top;
				let elementHeight = $('.s2__info-items').height();

				setTimeout(function(){
					if (elementTop + elementHeight > scrollTop && elementTop < scrollTop + windowHeight) {
						$('.s2').addClass('inview');
					} else {
						$('.s2').removeClass('inview');
					}
				}, 500)
			});
		}



		if( $('.p100pro .s3').length ){
			//s3 item scrolling
			let windowHeigth = $(window).height();
			let s3ContentBlock = $('.s3');
			let contentHeight = s3ContentBlock.outerHeight();
			s3ContentBlock.height(2 * contentHeight);
			let contentNewHeight = s3ContentBlock.outerHeight();
			let desc1Height = $('.s3__img--desc1').outerHeight();

			$(document).scroll(function () {
				if (screen.width > 768) {
					let scrollTop = $(document).scrollTop();
					let contentTop = s3ContentBlock.offset().top;
					let contentBottom = contentTop + contentNewHeight - 200;
					let breakPoints = {
						start: contentTop,
						middle: contentTop + contentHeight,
						end: contentBottom
					}

					if (scrollTop >= contentTop && scrollTop < contentBottom) {
						s3ContentBlock.addClass('s3-scrolling').removeClass('s3-fixed-end');
					} else {
						s3ContentBlock.addClass('s3-fixed-end').removeClass('s3-scrolling');
					}

					if (scrollTop > breakPoints.start && scrollTop < breakPoints.middle) {
						$('.s3__img--img1, .s3__img--desc1').addClass('active');
						$('.s3__img--img2, .s3__img--desc2').removeClass('active');
						$('.s3__img--desc2').removeAttr('style');
					} else if (scrollTop > breakPoints.middle) {
						$('.s3__img--img1, .s3__img--desc1').removeClass('active');
						$('.s3__img--img2, .s3__img--desc2').addClass('active');
						$('.s3__img--desc2').css({
							"transform": "translateY(-" + desc1Height + "px)"
						});
					} else {
						$('.s3__img--img1, .s3__img--desc1').removeClass('active');
						$('.s3__img--img2, .s3__img--desc2').removeClass('active');
						$('.s3__img--desc2').removeAttr('style');
					}
				}
			});



			//horizontall scroll in side-window
			$(".side-content").niceScroll();
		}



		if( $('.s5').length ){
			$(window).scroll(function(){
				let el = $('.s5');
				let wt = $(window).scrollTop();
				let wh = $(window).height();
				let et = el.offset().top;
				let eh = el.outerHeight();
				let dh = $(document).height();
				if (wt + wh >= et + wh/1.15 || wh + wt == dh || eh + et < wh){
					el.addClass('in-view');
				}else{
					el.removeClass('in-view');
				}
			});
		}



		if( $('.s8').length ){
			$(window).scroll(function(){
				let el = $('.s8');
				let wt = $(window).scrollTop();
				let wh = $(window).height();
				let et = el.offset().top;
				let eh = el.outerHeight();
				let dh = $(document).height();
				if (wt + wh >= et + wh/1.15 || wh + wt == dh || eh + et < wh){
					el.addClass('in-view');
				}else{
					el.removeClass('in-view');
				}
			});
		}



		if( $('.s11').length ){
			$(".s11 .tab_item").not(":first").hide();
			$(".s11__tabs-wrap .tab").click(function() {
				$(".s11__tabs-wrap .tab").removeClass("active").eq($(this).index()).addClass("active");
				$(".s11 .tab_item").hide().eq($(this).index()).fadeIn()
			}).eq(0).addClass("active");
		}



		if( $('.s12').length ){
			$(".s12 .tab_item:first-child").addClass('active');
			$(".s12__tabs-wrap .tab").click(function() {
				$(".s12__tabs-wrap .tab").removeClass("active").eq($(this).index()).addClass("active");
				$(".s12 .tab_item").removeClass('active').eq($(this).index()).addClass('active');
			}).eq(0).addClass("active");
		}



		if( $('.s14').length ){
			$(".s14 .tab_item").not(":first").hide();
			$(".s14__tabs-wrap .tab").click(function() {
				$(".s14__tabs-wrap .tab").removeClass("active").eq($(this).index()).addClass("active");
				$(".s14 .tab_item").hide().eq($(this).index()).fadeIn()
			}).eq(0).addClass("active");
		}



		if( $('.side-close').length ){
			$(document).on('click', '.side-close', function(e){
				e.preventDefault();
				$(this).parents('.side-window').removeClass('open');
			})
		}



		if( $('.open-side-window').length ){
			$(document).on('click', '.open-side-window', function(e){
				e.preventDefault();
				let id = $(this).attr('href');
				if( $(id).length ){
					$(id).addClass('open');
				}
			})
		}




		$('.header__videoplay').on('click', function (e) {
			e.preventDefault();
			let video_frame = $(this).data('video');
			let popup = $(this).attr('href');
			$(popup).arcticmodal();
		});

		$('.nav-hamburger').on('click', function (e) {
			e.preventDefault();
			$('.nav-mob').toggleClass('open');
		});

		//добавляем кнопку НАЗАД во второй уровень мобильного меню
		// $('.nav-mob .sub-menu').prepend('<a href="#" class="sub-menu__back">&larr;&nbsp;'+ translate.back +'</a>');

		$('.nav-mob .menu-item-has-children > a').on('click', function (e) {
			e.preventDefault();
			$(this).parent().find('.sub-menu').addClass('open');
		});

		$('.nav-mob .sub-menu__back').on('click', function (e) {
			e.preventDefault();
			$(this).parents('.sub-menu').removeClass('open');
		});

		if ($('.timeline').length) {
			$('.timeline').slick({
				slidesToShow: 4,
				slidesToScroll: 2,
				swipeToSlide: true,
				infinite: false,
				dots: true,
			});
		}

		//клик по ссылке открывает попап. В href ссылки должен быть ID нужного попапа
		$('.open-popup').on('click', function (e) {
			e.preventDefault();
			var id = $(this).attr('href');
			if (id != '' && id != '#') {
				$(id).arcticmodal();
			} else {
				console.log('Укажите в ссылке идентифкатор попап окна');
			}
		});


		if ($(".download .tab").length) {
			$(".tab_item").not(":first").hide();
			$(".download .tab").click(function () {
				$(".download .tab").removeClass("active").eq($(this).index()).addClass("active");
				$(".tab_item").hide().eq($(this).index()).fadeIn()
			}).eq(0).addClass("active");
		}

		//autopilot demo tractor
		if ($('.autopilot-demo').length) {

			let windowHeigth = $(window).height();
			let autopilotBlock = $('.autopilot-demo');
			let autopilotHeight = $('.autopilot-demo__inner').outerHeight();

			autopilotBlock.height(3 * autopilotHeight);
			let autopilotNewHeight = autopilotBlock.outerHeight();

			$(document).scroll(function () {

				if (screen.width > 768) {

					let scrollTop = $(document).scrollTop();
					let autopilotTop = autopilotBlock.offset().top;
					let autopilotBottom = autopilotTop + autopilotNewHeight;
					let topOffset = autopilotTop - scrollTop;
					let bottomOffset = autopilotBottom - scrollTop;

					let breakPoints = {
						toPlane: autopilotTop,
						toWheel: autopilotTop + autopilotHeight,
						toTablet: autopilotTop + autopilotHeight * 2,
						end: autopilotBottom
					}

					if (scrollTop >= autopilotTop && scrollTop < autopilotBottom) {
						autopilotBlock.addClass('demo-scrolling').removeClass('demo-fixed-end');
					} else {
						autopilotBlock.addClass('demo-fixed-end').removeClass('demo-scrolling');
					}

					if (bottomOffset <= windowHeigth) {
						autopilotBlock.addClass('demo-fixed-end');
					} else {
						autopilotBlock.removeClass('demo-fixed-end');
					}

					if (scrollTop > breakPoints.toPlane && scrollTop < breakPoints.toWheel) {
						$('.autopilot-demo__item').css('opacity', '0');
						$('.autopilot-demo__tractor-plane').css('opacity', '1');
						$('.autopilot-demo__plane').css('opacity', '1');
					} else {
						$('.autopilot-demo__tractor-plane').css('opacity', '0');
					}

					if (scrollTop > breakPoints.toWheel && scrollTop < breakPoints.toTablet) {
						$('.autopilot-demo__item').css('opacity', '0');
						$('.autopilot-demo__tractor-wheel').css('opacity', '1');
						$('.autopilot-demo__wheel').css('opacity', '1');
					} else {
						$('.autopilot-demo__tractor-wheel').css('opacity', '0');
					}

					if (scrollTop > breakPoints.toTablet) {
						$('.autopilot-demo__item').css('opacity', '0');
						$('.autopilot-demo__tractor-tablet').css('opacity', '1');
						$('.autopilot-demo__tablet').css('opacity', '1');
					} else {
						$('.autopilot-demo__tractor-tablet').css('opacity', '0');
					}

				}
			});
		}


		if ($('.left-tabs-with-img__tabs').length) {
			$(".tab_item").not(":first").hide();
			$(".left-tabs-wrapper .tab").click(function () {
				$(".left-tabs-wrapper .tab").removeClass("active").eq($(this).index()).addClass("active");
				$(".tab_item").hide().eq($(this).index()).fadeIn()
			}).eq(0).addClass("active");
		}


	});


	if (screen.width <= 768) {

	}


	// слайдер карточек товара на странице товара
	$('.prodCart-slider').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		dots: false,
		autoplay: false,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			}
		]
	});

	if ($('.slider__items').length) {
		$('.slider__items').slick({
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			adaptiveHeight: true,
			dots: true,
			autoplay: false,
		});
	}

	if ($('.slider-full__inner').length) {
		$('.slider-full__inner').slick({
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			speed: 2000,
			dots: true,
			autoplay: false,
		});
	}

	if ($('.img-left-with-icons__img-slider').length) {
		$('.img-left-with-icons__img-slider').slick({
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			speed: 150,
			dots: false,
			autoplay: true,
			autoplaySpeed: 2000,
		});
	}


	if ($('.r150-slider__items').length) {
		$('.r150-slider__items').slick({
			infinite: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			dots: true,
			autoplay: false,
			adaptiveHeight: true
		});
	}


	if ($('.r150-full-slider__items').length) {
		$('.r150-full-slider__items').slick({
			infinite: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			dots: false,
			autoplay: false,
			adaptiveHeight: false,
			responsive: [
				{
					breakpoint: 768,
					settings: {
						adaptiveHeight: true,
					}
				},
			]
		});
	}


	if ($('.simple-full-slider__items').length) {
		$('.simple-full-slider__items').slick({
			infinite: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			dots: false,
			autoplay: false,
			adaptiveHeight: true
		});
	}


	//drone page tabs 1
	$(".propellers__tabs .tab_item").not(":first").hide();
	$(".propellers__tabs .tab").click(function () {
		$(".propellers__tabs .tab").removeClass("active").eq($(this).index()).addClass("active");
		$(".propellers__tabs .tab_item").hide().eq($(this).index()).fadeIn()
	}).eq(0).addClass("active");

	//tabs 2
	$(".radar__tabs .tab_item").not(":first").hide();
	$(".radar__tabs .tab").click(function () {
		$(".radar__tabs .tab").removeClass("active").eq($(this).index()).addClass("active");
		$(".radar__tabs .tab_item").hide().eq($(this).index()).fadeIn()
	}).eq(0).addClass("active");

	//tabs 3
	$(".control__tabs .tab_item").not(":first").hide();
	$(".control__tabs .tab").click(function () {
		$(".control__tabs .tab").removeClass("active").eq($(this).index()).addClass("active");
		$(".control__tabs .tab_item").hide().eq($(this).index()).fadeIn()
	}).eq(0).addClass("active");


});


//video lazy load
document.addEventListener("DOMContentLoaded", function () {
	var lazyVideos = [].slice.call(document.querySelectorAll("video.vLazy"));

	if ("IntersectionObserver" in window) {
		var lazyVideoObserver = new IntersectionObserver(function (entries, observer) {
			entries.forEach(function (video) {
				if (video.isIntersecting) {
					for (var source in video.target.children) {
						var videoSource = video.target.children[source];
						if (typeof videoSource.tagName === "string" && videoSource.tagName === "SOURCE") {
							videoSource.src = videoSource.dataset.src;
						}
					}

					video.target.load();
					video.target.classList.remove("lazy");
					lazyVideoObserver.unobserve(video.target);
				}
			});
		});

		lazyVideos.forEach(function (lazyVideo) {
			lazyVideoObserver.observe(lazyVideo);
		});
	}
});