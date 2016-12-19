jQuery( document ).ready(function() {

	// ---------------------------------------------------------
	// Back to Top
	// ---------------------------------------------------------
	jQuery( window ).scroll(function() {

		if ( jQuery( this ).scrollTop() > 100 ) {
			jQuery( '#back-top' ).addClass( 'show-totop' );
		} else {
			jQuery( '#back-top' ).removeClass( 'show-totop' );
		}
	});

	jQuery( '#back-top a' ).click(function() {
		jQuery( 'body,html' ).stop( false, false ).animate({
			scrollTop: 0
		}, 800 );
		return false;
	});

	jQuery(".nav-links .page-numbers").prepend(function(){
	     txt = jQuery(this).text();
	     n = parseFloat(txt);
	     if(n<10){
	      return '<span>0</span>';
	     }
    });


	jQuery('.main_page_show_more_text').click(function(e) {
		e.preventDefault();
		var text = jQuery('.main_page_more_text');
        text.toggleClass('hide');

		if (!text.hasClass('hide')) {
			jQuery('html, body').animate({
				scrollTop: text.offset().top + 200
			}, 2000);
		}
	});

	jQuery('.site-info a:contains("Privacy Policy")').remove();
});
