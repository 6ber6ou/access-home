// **************
// NO YES BUTTONS
// **************

$( document ).ready( function()
	{

	$( '.no_yes_buttons' ).hide();

	// ------------------------------------------------------------

	$( '.delete_button a' ).on( 'click', function( e )
		{

		e.preventDefault();

		$( '.no_yes_buttons' ).hide();
		$( '.delete_button' ).show();

		$( this ).parent().hide();
		$( this ).parent().next().show();

		} );

	// ------------------------------------------------------------

	$( '.no_button' ).on( 'click', function( e )
		{

		e.preventDefault();

		$( '.no_yes_buttons' ).hide();
		$( '.delete_button' ).show();

		} );

	} );

