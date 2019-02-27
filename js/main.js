/**
 * Passa os dados do cliente para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget);
  var id = button.data('customer');

  var modal = $(this);
  modal.find('.modal-title').text('Excluir Cliente #' + id);
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
});

$('#delete-modal2').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget);
  var id = button.data('mesa');

  var modal = $(this);
  modal.find('.modal-title').text('Excluir Mesa #' + id);
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
});

$('#delete-modal3').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget);
  var id = button.data('msg');

  var modal = $(this);
  modal.find('.modal-title').text('Excluir Mensagem #' + id);
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
});


$('#delete-modal4').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget);
  var id = button.data('reserva');

  var modal = $(this);
  modal.find('.modal-title').text('Excluir Reserva #' + id);
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
});

// scrooll

jQuery(function($) {'use strict',


	// all Parallax Section
	$(window).load(function(){'use strict',
		$("#services").parallax("50%", 0.3);
		$("#clients").parallax("50%", 0.3);
	});





	// Contact form validation
	var form = $('.contact-form');
	form.submit(function () {'use strict',
		$this = $(this);
		$.post($(this).attr('action'), function(data) {
			$this.prev().text(data.message).fadeIn().delay(3000).fadeOut();
		},'json');
		return false;
	});



		// Navigation Scroll
		$(window).scroll(function(event) {
			Scroll();
		});

		$('.navbar-collapse ul li a').click(function() {
			$('html, body').animate({scrollTop: $(this.hash).offset().top - 79}, 1000);
			return false;
		});

	});

	// User define function
	function Scroll() {
		var contentTop      =   [];
		var contentBottom   =   [];
		var winTop      =   $(window).scrollTop();
		var rangeTop    =   200;
		var rangeBottom =   500;
		$('.navbar-collapse').find('.scroll a').each(function(){
			contentTop.push( $( $(this).attr('href') ).offset().top);
			contentBottom.push( $( $(this).attr('href') ).offset().top + $( $(this).attr('href') ).height() );
		})
		$.each( contentTop, function(i){
			if ( winTop > contentTop[i] - rangeTop ){
				$('.navbar-collapse li.scroll')
				.removeClass('active')
				.eq(i).addClass('active');
			}
		})

	};


		// Skill bar Function

		jQuery(document).ready(function(){
		jQuery('.skillbar').each(function(){
			jQuery(this).find('.skillbar-bar').animate({
				width:jQuery(this).attr('data-percent')
			},6000);
		});
	});


// Preloder script
jQuery(window).load(function(){'use strict';
	$(".preloader").delay(1600).fadeOut("slow").remove();
});

//Preloder script
jQuery(window).load(function(){'use strict';

	// Slider Height
	var slideHeight = $(window).height();
	$('#home .carousel-inner .item, #home .video-container').css('height',slideHeight);

	$(window).resize(function(){'use strict',
		$('#home .carousel-inner .item, #home .video-container').css('height',slideHeight);
	});

});
