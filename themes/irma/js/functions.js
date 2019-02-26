var $=jQuery.noConflict();
 
(function($){
	"use strict";
	$(function(){
 
		/*------------------------------------*\
			#GLOBAL
		\*------------------------------------*/

		$(document).ready(function() {
			footerBottom();
			if ($('#intro-video').length === 0){
				fixedMenu();
			}
			/* Templete Content Complete */
			if ($('#header-page-complete').length > 0) {
				contentComplete();
				$('.main-body').addClass('bg-orange');
			}
			/* Validación form */
			$('form.validation').parsley();
			/* VIDEO */
			if ($("#videoHome")[0]){
				console.log('Hay video');
				runVideo();
			}

			/* Sub page active */
			if(window.location.href.indexOf("donador-frecuente") > -1) {
				$('#sub-menu li.itemDonativos a').addClass('active');
			}
			if(window.location.href.indexOf("historias-de-vida") > -1) {
				$('#sub-menu li.itemIrmaTransforma a').addClass('active');
			}
			if(window.location.href.indexOf("gi_articulo") > -1) {
				$('#sub-menu li.itemIrmaComunica a').addClass('active');
			}

			/* Si se ha enviado el formulario de donador */
			if(window.location.href.indexOf("#donador-enviado") > -1) {
				$('#modal-donador').show();
				$('body').addClass('overflow-hide');
			}
			/* Si se ha enviado el formulario de necesitas ayuda */
			if(window.location.href.indexOf("#ayuda-enviado") > -1) {
				$('#modal-ayuda').show();
				$('body').addClass('overflow-hide');
			}
		});
 
		$(window).on('resize', function(){
			footerBottom();
			if ($('#intro-video').length === 0){
				fixedMenu();
			}
			/* Templete Content Complete */
			if ($('#header-page-complete').length > 0) {
				contentComplete();
			}
		});
 
		$(document).scroll(function() {
			if ($('#intro-video').length === 0){
				fixedMenu();
			}
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
			var idPregunta = $(this).attr('id');
			$("#preguntasFrecuentes h2").removeClass('active');
			$("#preguntasFrecuentes h2#" + idPregunta).addClass('active');
		});

		/* Linea tiempo */
		$(".content-urlTiempo div").click(function() {
			var idDate = $(this).attr('id');
			console.log(idDate );
			$(".infoDate div").addClass('hide');
			$(".infoDate #Info" + idDate).removeClass('hide');
		});

	});
})(jQuery);
 
/**
 * Fija el footer abajo
 */
function footerBottom(){
	var alturaFooter   = getFooterHeight();
	var heightMainBody = $(window).height() - getHeaderHeight();

	/* Verificar que sub-menu no sea más grande que el cuerpo de la página */
	var heightSubmenu 	= getSubmenuHeight() - 45; /* Margin-top negativo a 45px */
	var heightBodyPage 	= heightMainBody - getFooterHeight();
	if (heightSubmenu > heightBodyPage){
		var diffHeights			= heightSubmenu - heightBodyPage;
		var heightMainBody		= heightMainBody + diffHeights + 20; /*20 como margin extra*/
	}

	$('.main-body').css({
		'padding-bottom': alturaFooter,
		'min-height': heightMainBody,
	});
}
function getSubmenuHeight(){
	return $('#sub-menu').outerHeight();
}// get #sub-menu Height
function getHeaderHeight(){
	return $('.js-header').outerHeight();
}// getHeaderHeight
function getFooterHeight(){
	return $('footer').outerHeight();
}// getFooterHeight

/* Fijar sub menú desktop */
function fixedMenu(){
	var topHeaderScroll 	= getHeaderHeight() - 117; /* Menos altura header fijo para evitar salto */
	var topWindow 			= $(window).scrollTop();
    if(topWindow >= topHeaderScroll){
        $('#content-header').addClass('nav-fixed');
    } else {
        $('#content-header').removeClass('nav-fixed');
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
	/* Eliminar min-height previa si se está cambiando el tamaño de la pantalla*/
	$('#header-page-complete').css({ 'min-height': '' });
	
	var heightHeaderFooter  = getFooterHeight() + getHeaderHeight();
	var pageHeight			= $('body').outerHeight();
	var heightContent		= pageHeight - heightHeaderFooter;
	console.log(heightHeaderFooter);
	console.log(heightContent);
	$('#header-page-complete').css({ 'min-height': heightContent });

	/* Verificar si el contenido puede tener center full */
	heightConteiner 	= $('.container-limit').outerHeight();
	heightConteiner 	= heightConteiner + 65; /* Padding y border (30 + 30 + 5) */
	if (heightConteiner < heightContent) {
		$('.container-limit').addClass('content-center');
	} else {
		$('.container-limit').removeClass('content-center');
	}
}