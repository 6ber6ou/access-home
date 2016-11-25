// *******************************
// RECAPTCHA DISABLE SUBMIT BUTTON
// *******************************

$( document ).ready( function()
	{

	$( '#contact-form' ).submit( function( e )
		{

		var verified = grecaptcha.getResponse();

		if( verified.length === 0 )
			{

			e.preventDefault();

			}

		} );

	} );
