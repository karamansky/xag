$(function() {
	$(document).ready(function(){

		$('.header__videoplay').on('click', function(e){
			e.preventDefault();
			let video_frame = $(this).data('video');
			let popup = $(this).attr('href');
			$(popup).arcticmodal();
		});

		$('.nav-hamburger').on('click', function(e){
			e.preventDefault();
			$('.nav-mob').toggleClass('open');
		});

		//добавляем кнопку НАЗАД во второй уровень мобильного меню
		$('.nav-mob .sub-menu').prepend('<a href="#" class="sub-menu__back">&larr;&nbsp;'+ translate.back +'</a>');

		$('.nav-mob .menu-item-has-children > a').on('click', function(e){
			e.preventDefault();
			$(this).parent().find('.sub-menu').addClass('open');
		});

		$('.nav-mob .sub-menu__back').on('click', function(e){
			e.preventDefault();
			$(this).parents('.sub-menu').removeClass('open');
		});

		if( $('.timeline').length ){
			$('.timeline').slick({
				slidesToShow: 4,
				slidesToScroll: 2,
				swipeToSlide: true,
				infinite: false,
				dots: true,
			});
		}

		//клик по ссылке открывает попап. В href ссылки должен быть ID нужного попапа
		$('.open-popup').on('click', function(e){
			e.preventDefault();
			var id = $(this).attr('href');
			if(id != '' && id != '#'){
				$(id).arcticmodal();
			}else{
				console.log('Укажите в ссылке идентифкатор попап окна');
			}
		});


		if( $(".download .tab").length ){
			$(".tab_item").not(":first").hide();
			$(".download .tab").click(function() {
				$(".download .tab").removeClass("active").eq($(this).index()).addClass("active");
				$(".tab_item").hide().eq($(this).index()).fadeIn()
			}).eq(0).addClass("active");
		}

	});


	if (screen.width <= 768){

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


	$('.slider__items').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		adaptiveHeight: true,
		dots: true,
		autoplay: false,
	});


	$('.slider-full__inner').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		speed: 2000,
		dots: true,
		autoplay: false,
	});


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


	//drone page tabs 1
	$(".propellers__tabs .tab_item").not(":first").hide();
	$(".propellers__tabs .tab").click(function() {
		$(".propellers__tabs .tab").removeClass("active").eq($(this).index()).addClass("active");
		$(".propellers__tabs .tab_item").hide().eq($(this).index()).fadeIn()
	}).eq(0).addClass("active");

	//tabs 2
	$(".radar__tabs .tab_item").not(":first").hide();
	$(".radar__tabs .tab").click(function() {
		$(".radar__tabs .tab").removeClass("active").eq($(this).index()).addClass("active");
		$(".radar__tabs .tab_item").hide().eq($(this).index()).fadeIn()
	}).eq(0).addClass("active");

	//tabs 3
	$(".control__tabs .tab_item").not(":first").hide();
	$(".control__tabs .tab").click(function() {
		$(".control__tabs .tab").removeClass("active").eq($(this).index()).addClass("active");
		$(".control__tabs .tab_item").hide().eq($(this).index()).fadeIn()
	}).eq(0).addClass("active");


});


//video lazy load
document.addEventListener("DOMContentLoaded", function() {
	var lazyVideos = [].slice.call(document.querySelectorAll("video.vLazy"));

	if ("IntersectionObserver" in window) {
		var lazyVideoObserver = new IntersectionObserver(function(entries, observer) {
			entries.forEach(function(video) {
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

		lazyVideos.forEach(function(lazyVideo) {
			lazyVideoObserver.observe(lazyVideo);
		});
	}
});