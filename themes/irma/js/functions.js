var $=jQuery.noConflict();
 
(function($){
	"use strict";
	$(function(){
 
		/*------------------------------------*\
			#GLOBAL
		\*------------------------------------*/

		$(document).ready(function() {
			footerBottom();

			/* VIDEO */
			if ($("#videoHome")[0]){
				console.log('Hay video');
				runVideo();
			}
		});
 
		$(window).on('resize', function(){
			footerBottom();
		});
 
		$(document).scroll(function() {

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