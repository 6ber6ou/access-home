// ***************
// INIT PEEK A BAR
// ***************

// http://kunalnagar.github.io/jquery.peekABar/

$( document ).ready( function()
	{

	if( typeof window.message !== 'undefined' )
		{

		var res = window.message.split( '|' );
		var type = res [ 0 ];
		var message = res [ 1 ];

		if( type == 'success' )
			{

			var cls = 'peek-a-bar-success';

			}
		else if( type == 'error' )
			{

			var cls = 'peek-a-bar-error';

			}

		var bar = new $.peekABar(
			{

		    autohide : true,
		    delay : 5000,
		    cssClass : cls,
		    opacity : 0.9

			} );

		bar.show( { html : message } );

		}

	} );

