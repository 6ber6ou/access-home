/* ***************** */
/* MOBILE NAVIGATION */
/* ***************** */

$( document ).ready( function()
	{

	$( '.js--nav-icon' ).on( 'click', function()
		{

		var nav = $( '.js--main-nav' );
		var icon = $( '.js--nav-icon i' );
		var logoText = $( '.logo-text' );

		nav.slideToggle( 200 );

		if( icon.hasClass( 'ion-navicon-round' )  )
			{

			icon.addClass( 'ion-close-round' );
			icon.removeClass( 'ion-navicon-round' );

			logoText.hide();

			}
		else
			{

			icon.addClass( 'ion-navicon-round' );
			icon.removeClass( 'ion-close-round' );

			logoText.slideDown();

			}

		} );

	} );
