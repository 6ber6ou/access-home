<?php

// *****************
// SHOW NOTIFICATION
// *****************

function show_notification()
	{

	if( session()->has( 'message' ) )
		{

		JavaScript::put(
			[

			'message' => session( 'message' )

			] );

		}

	}
