// **********************
// HIDDEN FIELD ANTI SPAM
// **********************

$( document ).ready( function()
	{

	var address_field = $( '.address_field' );
	var address_input = $( '.address_input' );

	address_input.removeAttr( 'required' );
	address_field.hide();

	} );
