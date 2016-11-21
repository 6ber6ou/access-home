/* ********* */
/* SCROLL TO */
/* ********* */

$( document ).ready( function()
	{

	/* Scroll to features */
	/* ------------------ */

	$( '.js--scroll-to-start' ).on( 'click', function()
		{

		$( 'hyml, body' ).animate(
			{

			scrollTop : $( '.js--section-features' ).offset().top

			}, 1000 );

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

		} );

	} );
