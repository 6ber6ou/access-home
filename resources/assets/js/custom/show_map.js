// ********
// SHOW MAP
// ********

$( document ).ready( function()
	{

	$( '#map' ).css( { 'position' : 'absolute', 'top' : '-9999px' } );

	// ------------------------------------------------------------

	$( '#tab_5' ).on( 'click', function()
		{

		$( '#map' ).css( { 'position' : 'relative', 'top' : '0' } );

		} );

	// ------------------------------------------------------------

	$( '#tab_1, #tab_2, #tab_3, #tab_4' ).on( 'click', function()
		{

		$( '#map' ).css( { 'position' : 'absolute', 'top' : '-9999px' } );

		} );

	} );
