;(function () {

	'use strict';



	// iPad and iPod detection
	var isiPad = function(){
		return (navigator.platform.indexOf("iPad") != -1);
	};

	var isiPhone = function(){
	    return (
			(navigator.platform.indexOf("iPhone") != -1) ||
			(navigator.platform.indexOf("iPod") != -1)
	    );
	};

	// Main Menu Superfish
	var mainMenu = function() {

		$('#fh5co-primary-menu').superfish({
			delay: 0,
			animation: {
				opacity: 'show'
			},
			speed: 'fast',
			cssArrows: true,
			disableHI: true
		});

	};

	//Date Picker

   $('#date-start, #date-end').datepicker();

   [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
      new SelectFx(el);
   } );

	// Parallax
	var parallax = function() {
		if ( !isiPad() || !isiPhone() ) {
			$(window).stellar();
		}
	};


	// Offcanvas and cloning of the main menu
	var offcanvas = function() {

		var $clone = $('#fh5co-menu-wrap').clone();
		$clone.attr({
			'id' : 'offcanvas-menu'
		});
		$clone.find('> ul').attr({
			'class' : '',
			'id' : ''
		});

		$('#fh5co-page').prepend($clone);

		// click the burger
		$('.js-fh5co-nav-toggle').on('click', function(){

			if ( $('body').hasClass('fh5co-offcanvas') ) {
				$('body').removeClass('fh5co-offcanvas');
			} else {
				$('body').addClass('fh5co-offcanvas');
			}
			// event.preventDefault();

		});

		$('#offcanvas-menu').css('height', $(window).height());

		$(window).resize(function(){
			var w = $(window);


			$('#offcanvas-menu').css('height', w.height());

			if ( w.width() > 769 ) {
				if ( $('body').hasClass('fh5co-offcanvas') ) {
					$('body').removeClass('fh5co-offcanvas');
				}
			}

		});

	}



	// Click outside of the Mobile Menu
	var mobileMenuOutsideClick = function() {
		$(document).click(function (e) {
	    var container = $("#offcanvas-menu, .js-fh5co-nav-toggle");
	    if (!container.is(e.target) && container.has(e.target).length === 0) {
	      if ( $('body').hasClass('fh5co-offcanvas') ) {
				$('body').removeClass('fh5co-offcanvas');
			}
	    }
		});
	};


	// Animations

	var contentWayPoint = function() {
		var i = 0;
		$('.animate-box').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('animated') ) {

				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function(){

					$('body .animate-box.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							el.addClass('fadeInUp animated');
							el.removeClass('item-animate');
						},  k * 50, 'easeInOutExpo' );
					});

				}, 100);

			}

		} , { offset: '85%' } );
	};

	var stickyBanner = function() {
		var $stickyElement = $('.sticky-banner');
		var sticky;
		if ($stickyElement.length) {
		  sticky = new Waypoint.Sticky({
		      element: $stickyElement[0],
		      offset: 0
		  })
		}
	};

	// Document on load.
	$(function(){
		mainMenu();
		parallax();
		offcanvas();
		mobileMenuOutsideClick();
		contentWayPoint();
		stickyBanner();
	});
}());

//Range Slider Index

// EL INPUT
var slider = document.querySelector('#myRange');
if (slider) {
  var w = parseInt(window.getComputedStyle(slider, null).getPropertyValue('width'));

  // LA ETIQUETA
  var etq = document.querySelector('#tools');
  if (etq) {
    // el valor de la etiqueta (el tooltip)
    etq.innerHTML = slider.value;

    // calcula la posición inicial de la etiqueta (el tooltip);
    var pxls = w / 100;

    etq.style.left = ((slider.value * pxls)) + 'px';

    slider.addEventListener('input', function() {
      // cambia el valor de la etiqueta (el tooltip)
      etq.innerHTML = slider.value;
      // cambia la posición de la etiqueta (el tooltip)
      etq.style.left = ((slider.value * pxls)) + 'px';

    }, false);
  }
}

/* EL INPUT */



var sliderMes = document.querySelector("#myRangeMes");
if (sliderMes) {
	var w = parseInt(window.getComputedStyle(sliderMes, null).getPropertyValue("width"));
/* LA ETIQUETA */
	var etq1 = document.querySelector('#tools1');
	if (etq1) {
		/* el valor de la etiqueta (el tooltip) */
		etq1.innerHTML = sliderMes.value;



		/* calcula la posición inicial de la etiqueta (el tooltip) */
		var inputMin = sliderMes.getAttribute('min');
		var inputMax = sliderMes.getAttribute('max');
		var step = sliderMes.getAttribute('step');




		var pxls = w/100;
		var k = (inputMax - inputMin)/100;


		var valorCalculado = ((sliderMes.value-inputMin)/k)*pxls;
		etq1.style.left =  valorCalculado+"px";
		sliderMes.addEventListener('input',function(){
			if (sliderMes.value == 0) {
				step = 3;
			}else if(sliderMes.value == 1){
				step = 3;
			}else if(sliderMes.value == 3){
				step = 3;
			}else if(sliderMes.value == 6){
				step = 6;
			}else if(sliderMes.value == 12){
				step = 6;
			}else if(sliderMes.value == 18){
				step = 6;
			}

			sliderMes.step = step;
			/* cambia el valor de la etiqueta (el tooltip) */
			etq1.innerHTML =this.value;
			/* cambia la posición de la etiqueta (el tooltip) */
			var nuevoValorCalculado = ((this.value-inputMin)/k)*pxls;
			etq1.style.left =  nuevoValorCalculado+"px";
		}, false);
	}
}

$("#slide").roundSlider({
    radius: 70,
    width: 10,
    handleSize: "+13",
    handleShape: "dot",
    min: 10000,
    max: 100000,
    step: 1000,
    value: 75000,
    editableTooltip: false,
    tooltipFormat: "changeTooltip"
});

function changeTooltip(e) {
    var val = e.value, speed;
    return	"<div style='overflow:hidden;'><span style='color: black; font-size: 15px; line-height:18px;'><b><span style='font-size: 9px;'>Quiero</span><br>invertir</span><br><span style='color: black; font-size:20px'>$ " + val + "</span></b><br><span style='color: orange;font-size:10px'>Tasa 16%</span></div>";
}
