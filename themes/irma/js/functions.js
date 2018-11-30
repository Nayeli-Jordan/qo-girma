var $=jQuery.noConflict();
 
(function($){
	"use strict";
	$(function(){
 
		/*------------------------------------*\
			#GLOBAL
		\*------------------------------------*/

		$(document).ready(function() {
			footerBottom();
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
