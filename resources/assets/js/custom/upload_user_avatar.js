// ******************
// UPLOAD USER AVATAR
// ******************

//https://www.youtube.com/watch?v=flaiEXVkdgE

$( document ).ready( function()
	{

	$( '.progress' ).hide();

	$( '#avatar-form' ).ajaxForm(
		{

		beforeSend : function()
			{

			$( '.progress' ).show();

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

			// $( '#image-avatar' ).attr( 'src', response.responseText );

			$( '.progress-bar' ).width( '0%' );
			$( '.progress-bar .sr-only' ).html( '0%' );

			window.location = '/profile';

			}

		} );

	$( '#avatar' ).on( 'change', function()
		{

		$( '#avatar-form' ).submit();

		} );

	} );
