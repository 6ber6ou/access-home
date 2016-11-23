/* ********* */
/* SCROLL TO */
/* ********* */

$( document ).ready( function()
	{

	var nav = $( '.js--main-nav' );
	var icon = $( '.js--nav-icon i' );
	var logoText = $( '.logo-text' );

	/* ------------------------------------------------------------ */

	/* Scroll to features */
	/* ------------------ */

	$( '.js--scroll-to-start' ).on( 'click', function()
		{

		$( 'hyml, body' ).animate(
			{

			scrollTop : $( '.js--section-features' ).offset().top

			}, 1000 );

		close_sticky_menu();

		} );

	/* ------------------------------------------------------------ */

	/* Scroll to how it works */
	/* ---------------------- */

	$( '.js--scroll-to-how-it-works' ).on( 'click', function()
		{

		$( 'hyml, body' ).animate(
			{

			scrollTop : $( '.js--section-how-it-works' ).offset().top

			}, 1000 );

		close_sticky_menu();

		} );

	/* ------------------------------------------------------------ */

	/* Scroll to cities */
	/* ---------------- */

	$( '.js--scroll-to-cities' ).on( 'click', function()
		{

		$( 'hyml, body' ).animate(
			{

			scrollTop : $( '.js--section-cities' ).offset().top

			}, 1000 );

		close_sticky_menu();

		} );

	/* ------------------------------------------------------------ */

	/* Scroll to testimonials */
	/* ---------------------- */

	$( '.js--scroll-to-testimonials' ).on( 'click', function()
		{

		$( 'hyml, body' ).animate(
			{

			scrollTop : $( '.js--section-testimonials' ).offset().top

			}, 1000 );

		close_sticky_menu();

		} );

	/* ------------------------------------------------------------ */

	/* Scroll to contact */
	/* ----------------- */

	$( '.js--scroll-to-contact' ).on( 'click', function()
		{

		$( 'hyml, body' ).animate(
			{

			scrollTop : $( '.js--section-contact' ).offset().top

			}, 1000 );

		close_sticky_menu();

		} );

	/* ------------------------------------------------------------ */

	/* Scroll to footer */
	/* ----------------- */

	$( '.js--scroll-to-footer' ).on( 'click', function()
		{

		$( 'hyml, body' ).animate(
			{

			scrollTop : $( '.js--section-footer' ).offset().top

			}, 1000 );

		close_sticky_menu();

		} );

	/* ============================================================ */

	function close_sticky_menu()
		{

		if( ! $( '.mobile-nav-icon i' ).hasClass( 'ion-navicon-round' ) )
			{

			nav.slideToggle( 200 );
			icon.addClass( 'ion-navicon-round' );
			icon.removeClass( 'ion-close-round' );
			logoText.slideDown();

			}

		}

	} );
