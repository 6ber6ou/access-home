// ***************
// UPLOAD AD PHOTO
// ***************

$( document ).ready( function()
	{

	$( '.progress-primary-photo' ).hide();

	// ------------------------------------------------------------

	$( '#ad-primary-photo-form' ).ajaxForm(
		{

		beforeSend : function()
			{

			$( '.progress-primary-photo' ).show();

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

	$( '#ad-primary-photo' ).on( 'change', function()
		{

		$( '#ad-primary-photo-form' ).submit();

		} );

	} );
