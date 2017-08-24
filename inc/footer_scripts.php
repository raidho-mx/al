<script>
	// ACCORDION & TOGGLE CONTENT 
	jQuery("a.display_content").click(function(event) {
		event.preventDefault();
		var $e = $(this);
		$(this).parent().toggleClass("display");
		if ($e.parent().hasClass("display")){
			$(this).parent().removeClass("opacity_accordion");
			$(this).parent().siblings().addClass("opacity_accordion");
		} else {
			$(this).parent().siblings().removeClass("opacity_accordion");
		}
		$(this).parent().siblings().removeClass("display");
	});

	
	// ENABLE & DISABLE BLOCKS
	jQuery(".edit-button").click(function(event) {
		event.preventDefault();
		var $e = $(this);
		$(this).parent().toggleClass("visible");
		if ($e.parent().hasClass("visible")){
			$(this).parent().parent().addClass("enable-inputs");
			$(this).parent().parent().siblings().addClass("opacity");
		} else {
			$(this).parent().parent().removeClass("enable-inputs");
			$(this).parent().parent().siblings().removeClass("opacity");
		}
	});

	$(document).keyup(function(e) {
		if (e.keyCode == 27) {
			$(".edit-button").parent().removeClass("visible");
			$(".edit-button").parent().parent().removeClass("enable-inputs");
			$(".edit-button").parent().parent().siblings().removeClass("opacity");
			// Cerrar Popups
			$(".popup, .popup_mask").removeClass("display");
			$("body").removeClass("overflow_hidden");
		}
	});

	// Popup Crear Cliente
	jQuery("#client-form").click(function(event) {
		$(".popup, .popup_mask").toggleClass("display");
		$(".close_btn").click(function(event){
			$(".popup, .popup_mask").removeClass("display");
			$("body").removeClass("overflow_hidden");
		})
		$("body").addClass("overflow_hidden");
	});


	// Popup Crear Contrato
	jQuery("#signing").click(function(event) {
		$(".popup, .popup_mask").toggleClass("display");
		$(".close_btn, .save-signature").click(function(event){
			$(".popup, .popup_mask").removeClass("display");
			$("body").removeClass("overflow_hidden");
		})
		$("body").addeClass("overflow_hidden");
	});


	// Popup Perfil
	jQuery(".edit-profile").click(function(event) {
		$(".credit-card, .popup_mask").toggleClass("display");
		$(".close_btn").click(function(event){
			$(".popup, .popup_mask").removeClass("display");
			$("body").removeClass("overflow_hidden");
		})
		$("body").addClass("overflow_hidden");
	});


	// Popup Perfil Contraseña
	jQuery(".edit-password").click(function(event) {
		$(".password_form, .popup_mask").toggleClass("display");
		$(".close_btn").click(function(event){
			$(".popup, .popup_mask").removeClass("display");
			$("body").removeClass("overflow_hidden");
		})
		$("body").addClass("overflow_hidden");
	});


	// TABS W/BIG CIRCLE BUTTONS
	$(document).ready(function() {
		$(".plan-menu a").click(function(event) {
		event.preventDefault();
			$(this).parent().addClass("current");
			$(this).parent().siblings().removeClass("current");
			var tab = $(this).attr("href");
			$(".plan-content > div").not(tab).css("display", "none");
			$(tab).fadeIn();
		});
	});


	// Filter Tabs
	$(document).ready(function() {
		$(".contract_block .tabs a").click(function(event) {
		event.preventDefault();
			$(this).parent().addClass("current");
			$(this).parent().siblings().removeClass("current");
			var tab = $(this).attr("href");
			$(".contract_block .tabs-content .content").not(tab).css("display", "none");
			$(tab).fadeIn();
		});
	});


	// Contrato entregas (close red button)
	$(document).ready(function(){
		$(".deliveries .close_red_btn").click(function(event){
			$(this).siblings().remove();
			$(this).parent().remove();
		});
	});


	// POP CALENDAR
	$(function() {
		$( ".open-datepicker" ).datepicker({
			dateFormat: 'd M, y'
		});

		$( ".datepicker" ).datepicker({
			dateFormat: 'd M, y'
		});
	});


	// RESIZE INPUT:T W/SPAN
	$(document).ready(function () {
		var $inputs = $('.create_contract');

		function resizeForText(text) {
		    var $this = $(this);
		    if (!text.trim()) {
		        text = $this.attr('placeholder').trim();
		    }
		    var $span = $this.parent().find('span');
		    $span.text(text);
		    var $inputSize = $span.width();
		    $this.css("width", $inputSize);
		}

		$inputs.find('input#edita').keypress(function (e) {
		    if (e.which && e.charCode) {
		        var c = String.fromCharCode(e.keyCode | e.charCode);
		        var $this = $(this);
		        resizeForText.call($this, $this.val() + c);
		    }
		});

		$inputs.find('input#edita').keyup(function (e) { 
		    if (e.keyCode === 8 || e.keyCode === 46) {
		        resizeForText.call($(this), $(this).val());
		    }
		});

		$inputs.find('input#edita').each(function () {
		    var $this = $(this);
		    resizeForText.call($this, $this.val())
		});
	});
	

	// Enable Comments
	jQuery("#viaticos").click(function(event) {
		event.preventDefault();
		$(".agregar_viaticos").toggleClass("enable-comments");
	});

	jQuery("#comments").click(function(event) {
		event.preventDefault();
		$(".comentarios").toggleClass("show_comments");
	});

	jQuery("#entregas").click(function(event) {
		event.preventDefault();
		$(".comentarios_entregas").toggleClass("show_comments");
	});


	// Show Buttons (Save & Download)
	$(window).scroll(function() {    
		var scroll = $(window).scrollTop();
			if (scroll >= 500) {
			$(".fixed_btn").addClass("show_btn");
			} else {
			$(".fixed_btn").removeClass("show_btn");
		}
	});


	// Show Buttons (Save & Download)
	$(window).scroll(function() {    
		var scroll = $(window).scrollTop();
			if (scroll >= 300) {
			$(".message_block_fixed").css("position", "fixed");
			} else {
			$(".message_block_fixed").css("position", "relative");
		}
	});


	// OPEN MENU ON DEVICES
	jQuery(".perfil_movil").click(function(event) {
		$(".perfil_movil div ul").addClass("show_menu");
		$(this).click(function(event){
			$("div ul").toggleClass("show_menu");
		})
	});


	// DRAWING ON CANVAS
	var sktch = $('#simple_sketch').sketch();
	var cleanCanvas = $('#simple_sketch')[0];

	$('.save-signature').click(function(){
	    var canvas = document.getElementById("simple_sketch");
	    var img    = canvas.toDataURL("image/png");
	    $('.info .perfil_frame > #persona1').replaceWith('<div class="perfil_img"><img src="'+img+'" class="firma"/></div>');
	});

	$('.reset-canvas').click(function(){
		sktch.sketch().actions = [];
		var myCanvas = document.getElementById("simple_sketch");
		var ctx = myCanvas.getContext('2d');

		ctx.clearRect(0, 0, myCanvas.width, myCanvas.height);
	});

</script>