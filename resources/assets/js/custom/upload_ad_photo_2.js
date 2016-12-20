// ***************
// UPLOAD AD PHOTO
// ***************

$( document ).ready( function()
	{

	$( '.progress-photo-2' ).hide();

	// ------------------------------------------------------------

	$( '#ad-photo-2-form' ).ajaxForm(
		{

		beforeSend : function()
			{

			$( '.progress-photo-2' ).show();

			},
		uploadProgress : function( event, position, total, percentComplete )
			{

			$( '.progress-bar' ).width( percentComplete + '%' );
			$( '.progress-bar .sr-only' ).html( percentComplete + '%' );

			},
		success : function()
			{

			$( '.progress' ).hide();

			},
		complete : function( response )
			{

			$( '.progress-bar' ).width( '0%' );
			$( '.progress-bar .sr-only' ).html( '0%' );

			window.location = $( '#redirect' ).val();

			}

		} );

	// ------------------------------------------------------------

	$( '#ad-photo-2' ).on( 'change', function()
		{

		$( '#ad-photo-2-form' ).submit();

		} );

	} );
