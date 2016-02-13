$(document).ready(function() {
	// Mobile menu

	var navContainer = $(".nav");

	navContainer.children().addClass("main-nav");

	var mobileMenu = $(".mobile-menu");
	var mainNav = $(".main-nav");
	var mobileIconSecond = $(".mobile-icon-second");
	var mobileIconThird = $(".mobile-icon-third");

	navContainer.css({
		"transform":"translate(" + navContainer.outerWidth() + "px, 0px)",
		"-webkit-transform":"translate(" + navContainer.outerWidth() + "px, 0px)"
	});

	$(window).resize(function() {

		navContainer.addClass("position");

		navContainer.css({
			"transform":"translate(" + navContainer.outerWidth() + "px, 0px)",
			"-webkit-transform":"translate(" + navContainer.outerWidth() + "px, 0px)"
		});

		mobileIconSecond.css({"width":"38px"});

		mobileIconThird.css({"width":"28px"});
	});

	mobileMenu.click(function() {

		if (navContainer.hasClass("position")) {

			navContainer.removeClass("position");

			navContainer.css({
				"transform":"translate(0px, 0px)",
				"-webkit-transform":"translate(0px, 0px)"
			});

			mobileIconSecond.css({"width":"48px"});

			mobileIconThird.css({"width":"48px"});
		} 

		else{

			navContainer.addClass("position");

			navContainer.css({
				"transform":"translate(" + navContainer.outerWidth() + "px, 0px)",
				"-webkit-transform":"translate(" + navContainer.outerWidth() + "px, 0px)"
			});

			mobileIconSecond.css({"width":"38px"});

			mobileIconThird.css({"width":"28px"});
		};
	});

	// Scroll animations

	$(window).scroll(function() {

		if( $(this).scrollTop() > 80 ) {

			mobileMenu.css({"background-color":"rgba(60,60,60,0.6)"});
		} 
		else {

			mobileMenu.css({"background-color":"transparent"});
		}
	});

	// Contact Form

	var contactSection = $("#contact");
	var contactButton = $("#contact-button");
	var contactForm = $(".contact-form");

	contactButton.click(function () {

		var contactSectionHeight = contactSection.height();

		if (contactSection.hasClass("open")) {

			contactSection.removeClass("open");
			contactSectionHeight -= 260;

			contactSection.css({"height": "" + contactSectionHeight + "px"});
			contactForm.css({"height": "0", "opacity": "0"});
		}
		else{

			contactSection.addClass("open");
			contactSectionHeight += 260;
			
			contactSection.css({"height": "" + contactSectionHeight + "px"});
			contactForm.css({"height": "auto", "opacity": "1"});
		};
	});

	$("#form").submit(function(e) {
		// Stop the browser from submitting the form.
		e.preventDefault();

		// Serialize the form data.
		var formData = $(form).serialize();

		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $("#form").attr('action'),
			data: formData
		})

		.done(function(response) {

			// Set the message text.
			contactButton.text(response);

			// Clear the form.
			$('#name').val('');
			$('#email').val('');
			$('#message').val('');
		});
	});

	// hover effects

	var work = $(".work");

	work.hover( function () {
		var workHeight = $(this).height();
		var workWidth = $(this).width();
		$(this).prepend("<div style='width:" + workWidth + "px; height:" + workHeight + "px; background-color:#3c3c3c; display:none; position:absolute;'></div>");
		$(this).find( "div" ).fadeTo( 200, 0.6);
	}, function () {
		$(this).find( "div" ).fadeOut( 200, function() {
			$(this).remove();
		});
	});
});