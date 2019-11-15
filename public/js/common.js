"use strict";

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

var $ = jQuery;
var btnToggle = $(".toggle-menu-mobile--js"),
		menu = $(".menu-mobile--js");
jQuery(document).ready(function ($) {
	var _$$slick;

	// полифил для object-fit
	objectFitImages(); // Picture element HTML5 shiv

	document.createElement("picture"); // для свг

	svg4everybody({});
	JSCCommon.magnificPopupCall();
	JSCCommon.tabscostume('tabs');
	JSCCommon.mobileMenu();
	JSCCommon.inputMask();
	JSCCommon.CustomInputFile(); // добавляет подложку для pixel perfect
	// $(".main-wrapper").after('<div class="screen" style="background-image: url(screen/5.png);"></div>')
	// /добавляет подложку для pixel perfect
	// /закрыть/открыть мобильное меню

	function heightses() {
		var w = $(window).width(); // $(".main-wrapper").css("margin-bottom", $('footer').height())
		// $(".otz__item .text-wrap ").height('auto').equalHeights();
		//
		// скрывает моб меню

		var topH = $("header ").innerHeight();
		$(window).scroll(function () {
			if ($(this).scrollTop() > topH) {
				$('.top-nav  ').addClass('fixed');
			} else {
				$('.top-nav  ').removeClass('fixed');
			}
		}); // конец добавил

		if (window.matchMedia("(min-width: 992px)").matches) {
			btnToggle.removeClass("on"); // $("body").removeClass("fixed");

			menu.removeClass("active");
			$("body").removeClass("fixed");
		}
	}

	$(window).resize(function () {
		heightses();
	});
	heightses(); // листалка по стр

	$(" .top-nav li a, .scroll-link").click(function () {
		var elementClick = $(this).attr("href");
		var destination = $(elementClick).offset().top;
		$('html, body').animate({
			scrollTop: destination
		}, 1100);
		return false;
	});
	var icon = '<svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 492.004 492.004;" xml:space="preserve" ><path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12    c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028    c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265    c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z" ></path>';
	var arrl2 = ' <div class="r">' + icon,
			arrr2 = ' <div class="l">' + icon; // // карусель
	// // карусель

	$('.s-catalog__slider--js').slick({
		slidesToShow: 1,
		dots: false,
		speed: 600,
		infinite: true,
		arrows: true,
		mobileFirst: true,
		prevArrow: arrr2,
		nextArrow: arrl2,
		responsive: [{
			breakpoint: 1200,
			settings: {
				slidesToShow: 4
			}
		}, {
			breakpoint: 767.98,
			settings: {
				slidesToShow: 3 // infinite: false,

			}
		}, {
			breakpoint: 575.98,
			settings: {
				slidesToShow: 2 // infinite: false,

			}
		}]
	});
	$('.s-rew__slider--js').slick({
		appendArrows: ".control-wrap",
		slidesToShow: 1,
		speed: 600,
		infinite: true,
		mobileFirst: true,
		arrows: true,
		dots: true,
		prevArrow: arrr2,
		nextArrow: arrl2
	});
	$('.slider-for').slick((_$$slick = {
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		asNavFor: '.slider-nav',
		mobileFirst: true
	}, _defineProperty(_$$slick, "arrows", true), _defineProperty(_$$slick, "dots", false), _defineProperty(_$$slick, "prevArrow", arrr2), _defineProperty(_$$slick, "nextArrow", arrl2), _defineProperty(_$$slick, "infinite", true), _defineProperty(_$$slick, "mobileFirst", true), _$$slick));
	$('.slider-nav').slick({
		slidesToShow: 2,
		slidesToScroll: 1,
		asNavFor: '.slider-for',
		dots: false,
		arrows: false,
		mobileFirst: true,
		focusOnSelect: true,
		infinite: true,
		responsive: [{
			breakpoint: 1200,
			settings: {
				slidesToShow: 6
			}
		}, {
			breakpoint: 767.98,
			settings: {
				slidesToShow: 4 // infinite: false,

			}
		}, {
			breakpoint: 575.98,
			settings: {
				slidesToShow: 3 // infinite: false,

			}
		}]
	});
	$('.custom-input-time__input').change(function () {
		$(this).parents('form').find('.toggle-wrap-input-js').toggle().toggleClass('active');
	}); // калькулятор

	function getCost(x) {
		switch (x) {
			case 'Стеновой камень 30% пустотности серый':
				return 1800;

			case 'Стеновой камень 30% пустотности красный':
				return 2100;

			case 'Стеновой камень 50% пустотности серый':
				return 1600;

			case 'Стеновой камень 50% пустотности красный':
				return 1900;

			case 'Перегородочный камень 90 мм серый':
				return 2100;

			case 'Перегородочный камень 120 мм серый':
				return 2100;

			case 'Стеновой камень рубленый серый':
				return 2500;

			case 'Стеновой камень рубленый красный':
				return 2900;

			case 'Стеновой камень рубленый фиолетовый':
				return 3100;

			case 'Стеновой камень рубленый желтый':
				return 3500;

			case 'Стеновой камень рубленый с мрамором серый':
				return 3100;

			case 'Стеновой камень рубленый с мрамором красный':
				return 3500;

			case 'Стеновой камень рубленый с мрамором желтый':
				return 4100;

			case 'Стеновой камень рубленый угол серый':
				return 2800;

			case 'Стеновой камень рубленый угол красный':
				return 3200;

			case 'Стеновой камень рубленый угол фиолетовый':
				return 3800;

			case 'Стеновой камень рубленый угол желтый':
				return 3400;

			case 'Стеновой камень рубленый угол с мрамором серый':
				return 3400;

			case 'Стеновой камень рубленый угол с мрамором красный':
				return 3800;

			case 'Стеновой камень рубленый угол с мрамором желтый':
				return 4000;
		}
	}

	function getImage(x) {
		switch (x) {
			case 'Стеновой камень 30% пустотности серый':
				return "https://static.tildacdn.com/tild6130-6463-4264-b961-636637336234/shlak-30-square.jpg";

			case 'Стеновой камень 30% пустотности красный':
				return "https://static.tildacdn.com/tild6130-6463-4264-b961-636637336234/shlak-30-square.jpg";

			case 'Стеновой камень 50% пустотности серый':
				return "https://static.tildacdn.com/tild3637-6564-4866-b661-363465303731/shlak-50-square.jpg";

			case 'Стеновой камень 50% пустотности красный':
				return "https://static.tildacdn.com/tild3637-6564-4866-b661-363465303731/shlak-50-square.jpg";

			case 'Перегородочный камень 90 мм серый':
				return "https://static.tildacdn.com/tild6136-6535-4362-b231-643933356562/shlak-90mm-square.jpg";

			case 'Перегородочный камень 120 мм серый':
				return "https://static.tildacdn.com/tild3039-6261-4661-b639-363762323537/shlak-120mm-square.jpg";

			case 'Стеновой камень рубленый серый':
				return "https://static.tildacdn.com/tild3766-3837-4637-b365-633938353833/shlak-uglovoy-aquare.jpg";

			case 'Стеновой камень рубленый красный':
				return "https://static.tildacdn.com/tild3766-3837-4637-b365-633938353833/shlak-uglovoy-aquare.jpg";

			case 'Стеновой камень рубленый фиолетовый':
				return "https://static.tildacdn.com/tild3766-3837-4637-b365-633938353833/shlak-uglovoy-aquare.jpg";

			case 'Стеновой камень рубленый желтый':
				return "https://static.tildacdn.com/tild3766-3837-4637-b365-633938353833/shlak-uglovoy-aquare.jpg";

			case 'Стеновой камень рубленый с мрамором серый':
				return "https://static.tildacdn.com/tild3537-3430-4533-b332-613162343039/shlak-rubl-ugl-mramo.jpg";

			case 'Стеновой камень рубленый с мрамором красный':
				return "https://static.tildacdn.com/tild3537-3430-4533-b332-613162343039/shlak-rubl-ugl-mramo.jpg";

			case 'Стеновой камень рубленый с мрамором желтый':
				return "https://static.tildacdn.com/tild3537-3430-4533-b332-613162343039/shlak-rubl-ugl-mramo.jpg";

			case 'Стеновой камень рубленый угол серый':
				return "https://static.tildacdn.com/tild3332-3465-4439-a638-353530366361/shlak-rubl-square.jpg";

			case 'Стеновой камень рубленый угол красный':
				return "https://static.tildacdn.com/tild3332-3465-4439-a638-353530366361/shlak-rubl-square.jpg";

			case 'Стеновой камень рубленый угол фиолетовый':
				return "https://static.tildacdn.com/tild3332-3465-4439-a638-353530366361/shlak-rubl-square.jpg";

			case 'Стеновой камень рубленый угол желтый':
				return "https://static.tildacdn.com/tild3332-3465-4439-a638-353530366361/shlak-rubl-square.jpg";

			case 'Стеновой камень рубленый угол с мрамором серый':
				return "https://static.tildacdn.com/tild3064-3262-4633-a562-313362636264/shlak-mramor-square.jpg";

			case 'Стеновой камень рубленый угол с мрамором красный':
				return "https://static.tildacdn.com/tild3064-3262-4633-a562-313362636264/shlak-mramor-square.jpg";

			case 'Стеновой камень рубленый угол с мрамором желтый':
				return "https://static.tildacdn.com/tild3064-3262-4633-a562-313362636264/shlak-mramor-square.jpg";
		}
	}

	function getThickness() {
		var x = document.getElementById("choose-type-2").value;

		switch (x) {
			case 'Перегородочный камень 90 мм серый':
				return 9;

			case 'Перегородочный камень 120 мм серый':
				return 12;

			case 'Стеновой камень 30% пустотности серый':
				return 20;

			case 'Стеновой камень 50% пустотности серый':
				return 20;
		}
	}

	if ($("section").is(".s-calc")) {
		var change = function change() {
			var length, width, thickness, height, windows, result, cost;
			length = parseFloat(document.getElementById("length").value);
			width = parseFloat(document.getElementById("width").value);
			thickness = parseInt(document.getElementById("thickness").value) / 100;
			height = parseInt(document.getElementById("height").value) / 100;
			windows = parseInt(document.getElementById("windows").value);

			if (isNaN(windows)) {
				windows = 0;
			}

			result = Math.ceil(2 * width * thickness * height + (length - 2 * thickness) * thickness * height * 2 - windows * 3 * thickness - 2 * thickness);

			if (isNaN(result)) {
				result = 0;
			}

			document.getElementById("result").innerText = result;
			cost = getCost(document.getElementById("choose-type").value) * result;
			document.getElementById("cost").innerText = cost;
			var link = "#order:";
			var type = document.getElementById("choose-type").value;
			link = link + type + "=" + cost + ":::image=" + getImage(document.getElementById("choose-type").value);
			var a = document.getElementById("add-cart-1");
			a.href = link;
		};

		var change2 = function change2() {
			var length_2, thickness_2, height_2, doors, result_2, cost;
			length_2 = parseFloat(document.getElementById("length-2").value);
			thickness_2 = getThickness() / 100;
			height_2 = parseInt(document.getElementById("height-2").value) / 100;
			doors = parseInt(document.getElementById("doors").value);

			if (isNaN(doors)) {
				doors = 0;
			}

			result_2 = Math.ceil(length_2 * thickness_2 * height_2 - 2 * thickness_2 * doors);

			if (isNaN(result_2)) {
				result_2 = 0;
			}

			document.getElementById("result-2").innerText = result_2;
			cost = getCost(document.getElementById("choose-type-2").value) * result_2;
			document.getElementById("cost-2").innerText = cost;
			var link = "#order:";
			var type = document.getElementById("choose-type-2").value;
			link = link + type + "=" + cost + ":::image=" + getImage(document.getElementById("choose-type-2").value);
			var a = document.getElementById("add-cart-2");
			a.href = link;
		};

		change();
		change2();
		$(".s-calc ").on('input change input cut copy paste', 'input, select', function () {
			change();
			change2();
		});
		$(".s-calc  .link-modal").click(function () {
			function parentVal(value, value2, value3) {
				$('#modal-order').find(value2).val(!value ? '' : $(value).val() + ' ' + value3);
			}

			function parentText(value, value2, value3) {
				$('#modal-order').find(value2).val(!value ? '' : $(value).text() + ' ' + value3);
			}

			parentVal(".choose-type", ".choose-type", '');
			parentText(".value-js", ".result", 'м3');
			parentText(".cost", ".cost", 'рублей');
			parentVal(".length", ".length", 'м');
			parentVal(".height", ".height", 'cм');

			if ($(this).is('#add-cart-1')) {
				parentVal("#width", ".width", 'м');
				parentVal("#thickness", ".thickness", 'cм');
				parentVal("#windows", ".windows", '');
				parentVal(null, ".doors", '');
			}

			if ($(this).is('#add-cart-2')) {
				parentVal("#doors", ".doors", '');
				parentVal(null, ".width", '');
				parentVal(null, ".thickness", '');
				parentVal(null, ".windows", '');
			}
		});
	}

	var gets = function () {
		var a = window.location.search;
		var b = new Object();
		a = a.substring(1).split("&");

		for (var i = 0; i < a.length; i++) {
			var c = a[i].split("=");
			b[c[0]] = c[1];
		}

		return b;
	}(); // form


	$("form").each(function () {
		//Change
		var th = $(this);
		th.find('.utm_source').val(decodeURIComponent(gets['utm_source'] || ''));
		th.find('.utm_term').val(decodeURIComponent(gets['utm_term'] || ''));
		th.find('.utm_medium').val(decodeURIComponent(gets['utm_medium'] || ''));
		th.find('.utm_campaign').val(decodeURIComponent(gets['utm_campaign'] || ''));
		$(this).attr({
			"action": 'thanks.php',
			"method": "post"
		});
	}); // $(".form-wrap__toggle").click(function () {
	//     $(".form-wrap__toggle-block").toggle()
	// })

	$(".s-catalog__btn--foot-js").click(function (e) {
		e.preventDefault();
		$(this).addClass("disabled").parents(".s-catalog--page").find(".s-catalog__col:hidden").fadeIn();
	});
	$(".s-prod-head .radio-input__input").change(function () {
		$($(this).data("price")).show().siblings().hide();
	});
});
var JSCCommon = {
	// часть вызов скриптов здесь, для использования при AJAX
	// функции для запуска lazy
	// /LazyFunction
	magnificPopupCall: function magnificPopupCall() {
		$(".link-modal").click(function () {
			$($(this).data("src")).find(".order").val($(this).data("order"));
			$(this).parents('.s-prod-head') ? $($(this).data("src")).find(".color").val($(this).parents('.s-prod-head').find(".radio-input__input:checked").val()) : $($(this).data("src")).find(".color").val('');
		});
		$(".link-modal").fancybox({
			arrows: false,
			infobar: false,
			touch: false // type : 'inline',

		});
		$(".modal-close-js").click(function () {
			$.fancybox.close();
		}); // /modal галерея
	},
	// /magnificPopupCall
	mobileMenu: function mobileMenu() {
		// закрыть/открыть мобильное меню
		btnToggle.click(function () {
			btnToggle.toggleClass("on"); // $("body").toggleClass("fixed");

			menu.toggleClass("active");
			$("body, html").toggleClass("fixed");
			return false;
		}); // $('.menu-mobile--js ul li a').on('click', function () {
		// 	$(".menu-mobile--js .toggle-mnu").click();
		// });

		$(document).mouseup(function (e) {
			var container = $(".menu-mobile--js.active");

			if (container.has(e.target).length === 0) {
				btnToggle.removeClass("on"); // $("body").toggleClass("fixed");

				menu.removeClass("active");
				$("body, html").removeClass("fixed");
			}
		});
	},
	// /mobileMenu
	// табы  .
	tabscostume: function tabscostume(tab) {
		$('.' + tab + '__caption').on('click', '.' + tab + '__btn:not(.active)', function (e) {
			$(this).addClass('active').siblings().removeClass('active').closest('.' + tab).find('.' + tab + '__content').removeClass('active').hide(function () {
				$(this).find('input').attr('required', false);
			}).eq($(this).index()).addClass('active').show(function () {
				$(this).find('input').attr('required', true);
			});
		});
	},
	// /табы  .
	// /nlineSVG
	CustomInputFile: function CustomInputFile() {
		var file = $(".add-file input[type=file]");
		file.change(function () {
			var filename = $(this).val().replace(/.*\\/, "");
			var name = $(".add-file__filename  ");
			name.text(filename);
		});
	},
	// /CustomYoutubeBlock
	inputMask: function inputMask() {
		// mask for input
		$('input[type="tel"]').attr("pattern", "[+]7[(][0-9]{3}[)][0-9]{3}-[0-9]{2}-[0-9]{2}").inputmask("+7(999)999-99-99");
	} // /inputMask

}; // JSCCommon.LazyFunction();

/***/