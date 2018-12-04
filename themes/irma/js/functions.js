var $=jQuery.noConflict();
 
(function($){
	"use strict";
	$(function(){
 
		/*------------------------------------*\
			#GLOBAL
		\*------------------------------------*/

		$(document).ready(function() {
			footerBottom();
			fixedSubmenu();
			/* Templete Content Complete */
			if ($('#header-page-complete').length > 0) {
				contentComplete();
			}
			/* VIDEO */
			if ($("#videoHome")[0]){
				console.log('Hay video');
				runVideo();
			}			
		});
 
		$(window).on('resize', function(){
			footerBottom();
			fixedSubmenu();
			/* Templete Content Complete */
			if ($('#header-page-complete').length > 0) {
				contentComplete();
			}
		});
 
		$(document).scroll(function() {
			fixedSubmenu();
		});
 
		// Nav
		$(".open-nav").click(function() {
			$('#top-menu').addClass('active');
			$('body').addClass('overflow-hide');
		});

		$(".close-nav").click(function() {
			$('#top-menu').removeClass('active');
			$('body').removeClass('overflow-hide');
		});

		/* VIDEO */
		if ($("#videoHome")[0]){
			$('#videoPlay, #buttonPlay').on('click', function(e){
				$('#videoPlay, #videoPortada').addClass('hide');
				$('#videoControles, #videoPause').removeClass('hide');
				document.getElementById('videoHome').play();
			});
			$('#videoStop').on('click', function(e){
				$('#videoControles').addClass('hide');				
				$('#videoPortada').removeClass('hide');
				document.getElementById('videoHome').pause();
				document.getElementById('videoHome').currentTime = 0;
			});
			$('#videoPause').on('click', function(e){
				$('#videoPause').addClass('hide');
				$('#videoPlay').removeClass('hide');
				document.getElementById('videoHome').pause();
			});

			/* Quitar audio */
			$('#videoMute').on('click', function(e){
				$(this).addClass('hide');
				$('#videoVolumen').removeClass('hide');
				$('video').prop('muted', true);
			});
			/* Activar audio */
			//unmuteButton.addEventListener('click', function() {
			$('#videoVolumen').on('click', function() {
				$(this).addClass('hide');
				$('#videoMute').removeClass('hide');
				videoHome.muted = false;
			});
		}

		/* Preguntas frecuentes */
		$("#preguntasFrecuentes h2").click(function() {
			if($(this).hasClass('active')){
				$(this).removeClass('active');
			} else {
				$(this).addClass('active');
			}			
		});

	});
})(jQuery);
 
/**
 * Fija el footer abajo
 */
function footerBottom(){
	var alturaFooter   = getFooterHeight();
	var heightMainBody = $(window).height() - getHeaderHeight();
	$('.main-body').css({
		'padding-bottom': alturaFooter,
		'min-height': heightMainBody,
	});
}
function getHeaderHeight(){
	return $('.js-header').outerHeight();
}// getHeaderHeight
function getFooterHeight(){
	return $('footer').outerHeight();
}// getFooterHeight

/* Fijar sub menú desktop */
function fixedSubmenu(){
	var topSubmenu = $('#sub-menu').offset();
	var topWindow = $(window).scrollTop();
    if(topWindow >= topSubmenu.top){
        $('#sub-menu').addClass('menuFixed');
    } else {
        $('#sub-menu').removeClass('menuFixed');
    }
}

/* VIDEO */
function runVideo(){
	var promise = document.getElementById('videoHome').play();
	if (promise !== undefined) {
		promise.then(_ => {
			// Autoplay started!
			$('#videoPortada').addClass('hide');
		}).catch(error => {
			// Autoplay was prevented.
			$('#videoControles').addClass('hide');
			$('#videoPortada').removeClass('hide');
		});
	}	
	//Al terminar el video
	$('#videoHome').on('ended',function(){
		$('#videoControles').addClass('hide');
		$('#videoPortada').removeClass('hide');
	});
}

/* Template Complete content */
function contentComplete(){
	var heightHeaderFooter  = getFooterHeight() + getHeaderHeight();
	var heightWindow 		= $(window).height();
	if (heightWindow > heightHeaderFooter) {
		heightContent		= heightWindow - heightHeaderFooter;
		$('#header-page-complete').css({
			'min-height': heightContent,
		});
		/* Verificar si el contenido puede tener center full */
		heightConteiner 	= $('.container-limit').outerHeight();
		heightConteiner 	= heightConteiner + 65; /* Padding y border (30 + 30 + 5) */
		if (heightConteiner < heightContent) {
			$('.container-limit').addClass('content-center');
		} else {
			$('.container-limit').removeClass('content-center');
		}
	}
}

