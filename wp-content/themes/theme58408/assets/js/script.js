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
		jQuery('.main_page_more_text').toggleClass('hide');
	});
});
