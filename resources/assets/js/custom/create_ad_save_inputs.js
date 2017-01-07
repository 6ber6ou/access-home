// *********************
// CREATE AD SAVE INPUTS
// *********************

$( document ).ready( function()
	{

	var referrer = document.referrer;

	if( referrer.match(/ads\/create/) )
		{

		// console.log( 'String matches!' );

		$( '#title' ).blur( function() { Cookies.set( 'create_ad_title', $( this ).val() ); } );
		$( '#subtitle' ).blur( function() { Cookies.set( 'create_ad_subtitle', $( this ).val() ); } );
		$( '#description' ).blur( function() { Cookies.set( 'create_ad_description', $( this ).val() ); } );
		$( '#country' ).blur( function() { Cookies.set( 'create_ad_country', $( this ).val() ); } );
		$( '#city' ).blur( function() { Cookies.set( 'create_ad_city', $( this ).val() ); } );
		$( '#zip' ).blur( function() { Cookies.set( 'create_ad_zip', $( this ).val() ); } );
		$( '#address' ).blur( function() { Cookies.set( 'create_ad_address', $( this ).val() ); } );
		$( '#ramp' ).blur( function()
			{

			if( $( this ).is( ':checked' ) ) Cookies.set( 'create_ad_ramp', true );
			else Cookies.remove( 'create_ad_ramp' );

			} );
		$( '#lift' ).blur( function()
			{

			if( $( this ).is( ':checked' ) ) Cookies.set( 'create_ad_lift', true );
			else Cookies.remove( 'create_ad_lift' );

			} );
		$( '#parking' ).blur( function()
			{

			if( $( this ).is( ':checked' ) ) Cookies.set( 'create_ad_parking', true );
			else Cookies.remove( 'create_ad_parking' );

			} );
		$( '#garden' ).blur( function()
			{

			if( $( this ).is( ':checked' ) ) Cookies.set( 'create_ad_garden', true );
			else Cookies.remove( 'create_ad_garden' );

			} );
		$( '#bedroom' ).blur( function()
			{

			if( $( this ).is( ':checked' ) ) Cookies.set( 'create_ad_bedroom', true );
			else Cookies.remove( 'create_ad_bedroom' );

			} );
		$( '#circulation' ).blur( function()
			{

			if( $( this ).is( ':checked' ) ) Cookies.set( 'create_ad_circulation', true );
			else Cookies.remove( 'create_ad_circulation' );

			} );
		$( '#kitchen_acessible' ).blur( function()
			{

			if( $( this ).is( ':checked' ) ) Cookies.set( 'create_ad_kitchen_acessible', true );
			else Cookies.remove( 'create_ad_kitchen_acessible' );

			} );
		$( '#bathroom_acessible' ).blur( function()
			{

			if( $( this ).is( ':checked' ) ) Cookies.set( 'create_ad_bathroom_acessible', true );
			else Cookies.remove( 'create_ad_bathroom_acessible' );

			} );
		$( '#shower_1' ).blur( function()
			{

			if( $( this ).is( ':checked' ) ) Cookies.set( 'create_ad_shower_1', true );
			else Cookies.remove( 'create_ad_shower_1' );

			} );
		$( '#shower_2' ).blur( function()
			{

			if( $( this ).is( ':checked' ) ) Cookies.set( 'create_ad_shower_2', true );
			else Cookies.remove( 'create_ad_shower_2' );

			} );
		$( '#wc' ).blur( function()
			{

			if( $( this ).is( ':checked' ) ) Cookies.set( 'create_ad_wc', true );
			else Cookies.remove( 'create_ad_wc' );

			} );
		$( '#transports' ).blur( function()
			{

			if( $( this ).is( ':checked' ) ) Cookies.set( 'create_ad_transports', true );
			else Cookies.remove( 'create_ad_transports' );

			} );
		$( '#tv' ).blur( function()
			{

			if( $( this ).is( ':checked' ) ) Cookies.set( 'create_ad_tv', true );
			else Cookies.remove( 'create_ad_tv' );

			} );
		$( '#home_cinema' ).blur( function()
			{

			if( $( this ).is( ':checked' ) ) Cookies.set( 'create_ad_home_cinema', true );
			else Cookies.remove( 'create_ad_home_cinema' );

			} );
		$( '#computer' ).blur( function()
			{

			if( $( this ).is( ':checked' ) ) Cookies.set( 'create_ad_computer', true );
			else Cookies.remove( 'create_ad_computer' );

			} );
		$( '#internet' ).blur( function()
			{

			if( $( this ).is( ':checked' ) ) Cookies.set( 'create_ad_internet', true );
			else Cookies.remove( 'create_ad_internet' );

			} );
		$( '#wifi' ).blur( function()
			{

			if( $( this ).is( ':checked' ) ) Cookies.set( 'create_ad_wifi', true );
			else Cookies.remove( 'create_ad_wifi' );

			} );
		$( '#phone' ).blur( function()
			{

			if( $( this ).is( ':checked' ) ) Cookies.set( 'create_ad_phone', true );
			else Cookies.remove( 'create_ad_phone' );

			} );
		$( '#dishwasher' ).blur( function()
			{

			if( $( this ).is( ':checked' ) ) Cookies.set( 'create_ad_dishwasher', true );
			else Cookies.remove( 'create_ad_dishwasher' );

			} );
		$( '#washing_machine' ).blur( function()
			{

			if( $( this ).is( ':checked' ) ) Cookies.set( 'create_ad_washing_machine', true );
			else Cookies.remove( 'create_ad_washing_machine' );

			} );
		$( '#dryer' ).blur( function()
			{

			if( $( this ).is( ':checked' ) ) Cookies.set( 'create_ad_dryer', true );
			else Cookies.remove( 'create_ad_dryer' );

			} );
		$( '#oven' ).blur( function()
			{

			if( $( this ).is( ':checked' ) ) Cookies.set( 'create_ad_oven', true );
			else Cookies.remove( 'create_ad_oven' );

			} );
		$( '#fridge' ).blur( function()
			{

			if( $( this ).is( ':checked' ) ) Cookies.set( 'create_ad_fridge', true );
			else Cookies.remove( 'create_ad_fridge' );

			} );
		$( '#freezer' ).blur( function()
			{

			if( $( this ).is( ':checked' ) ) Cookies.set( 'create_ad_freezer', true );
			else Cookies.remove( 'create_ad_freezer' );

			} );
		$( '#microwave' ).blur( function()
			{

			if( $( this ).is( ':checked' ) ) Cookies.set( 'create_ad_microwave', true );
			else Cookies.remove( 'create_ad_microwave' );

			} );
		$( '#coffee_machine' ).blur( function()
			{

			if( $( this ).is( ':checked' ) ) Cookies.set( 'create_ad_coffee_machine', true );
			else Cookies.remove( 'create_ad_coffee_machine' );

			} );
		$( '#livingroom' ).blur( function() { Cookies.set( 'create_ad_livingroom', $( this ).val() ); } );
		$( '#dining_room' ).blur( function() { Cookies.set( 'create_ad_dining_room', $( this ).val() ); } );
		$( '#kitchen' ).blur( function() { Cookies.set( 'create_ad_kitchen', $( this ).val() ); } );
		$( '#kitchenette' ).blur( function() { Cookies.set( 'create_ad_kitchenette', $( this ).val() ); } );
		$( '#bathroom' ).blur( function() { Cookies.set( 'create_ad_bathroom', $( this ).val() ); } );
		$( '#separed_wc' ).blur( function() { Cookies.set( 'create_ad_separed_wc', $( this ).val() ); } );
		$( '#garage' ).blur( function() { Cookies.set( 'create_ad_garage', $( this ).val() ); } );
		$( '#cave' ).blur( function() { Cookies.set( 'create_ad_cave', $( this ).val() ); } );
		$( '#double_bedroom' ).blur( function() { Cookies.set( 'create_ad_double_bedroom', $( this ).val() ); } );
		$( '#simple_bedroom' ).blur( function() { Cookies.set( 'create_ad_simple_bedroom', $( this ).val() ); } );
		$( '#nb_double_bed' ).blur( function() { Cookies.set( 'create_ad_nb_double_bed', $( this ).val() ); } );
		$( '#nb_simple_bed' ).blur( function() { Cookies.set( 'create_ad_nb_simple_bed', $( this ).val() ); } );
		$( '#nb_baby_bed' ).blur( function() { Cookies.set( 'create_ad_nb_baby_bed', $( this ).val() ); } );
		$( '#nb_sofa_bed' ).blur( function() { Cookies.set( 'create_ad_nb_sofa_bed', $( this ).val() ); } );
		$( '#housing_area' ).blur( function() { Cookies.set( 'create_ad_housing_area', $( this ).val() ); } );
		$( '#rules' ).blur( function() { Cookies.set( 'create_ad_rules', $( this ).val() ); } );

		}
	else
		{

		Cookies.remove( 'create_ad_title' );
		Cookies.remove( 'create_ad_subtitle' );
		Cookies.remove( 'create_ad_description' );
		Cookies.remove( 'create_ad_country' );
		Cookies.remove( 'create_ad_city' );
		Cookies.remove( 'create_ad_zip' );
		Cookies.remove( 'create_ad_address' );
		Cookies.remove( 'create_ad_ramp' );
		Cookies.remove( 'create_ad_lift' );
		Cookies.remove( 'create_ad_parking' );
		Cookies.remove( 'create_ad_garden' );
		Cookies.remove( 'create_ad_bedroom' );
		Cookies.remove( 'create_ad_circulation' );
		Cookies.remove( 'create_ad_kitchen_acessible' );
		Cookies.remove( 'create_ad_bathroom_acessible' );
		Cookies.remove( 'create_ad_shower_1' );
		Cookies.remove( 'create_ad_shower_2' );
		Cookies.remove( 'create_ad_wc' );
		Cookies.remove( 'create_ad_transports' );
		Cookies.remove( 'create_ad_tv' );
		Cookies.remove( 'create_ad_home_cinema' );
		Cookies.remove( 'create_ad_computer' );
		Cookies.remove( 'create_ad_internet' );
		Cookies.remove( 'create_ad_wifi' );
		Cookies.remove( 'create_ad_phone' );
		Cookies.remove( 'create_ad_dishwasher' );
		Cookies.remove( 'create_ad_washing_machine' );
		Cookies.remove( 'create_ad_dryer' );
		Cookies.remove( 'create_ad_oven' );
		Cookies.remove( 'create_ad_fridge' );
		Cookies.remove( 'create_ad_freezer' );
		Cookies.remove( 'create_ad_microwave' );
		Cookies.remove( 'create_ad_coffee_machine' );
		Cookies.remove( 'create_ad_livingroom' );
		Cookies.remove( 'create_ad_dining_room' );
		Cookies.remove( 'create_ad_kitchen' );
		Cookies.remove( 'create_ad_kitchenette' );
		Cookies.remove( 'create_ad_bathroom' );
		Cookies.remove( 'create_ad_separed_wc' );
		Cookies.remove( 'create_ad_garage' );
		Cookies.remove( 'create_ad_cave' );
		Cookies.remove( 'create_ad_double_bedroom' );
		Cookies.remove( 'create_ad_simple_bedroom' );
		Cookies.remove( 'create_ad_nb_double_bed' );
		Cookies.remove( 'create_ad_nb_simple_bed' );
		Cookies.remove( 'create_ad_nb_baby_bed' );
		Cookies.remove( 'create_ad_nb_sofa_bed' );
		Cookies.remove( 'create_ad_housing_area' );
		Cookies.remove( 'create_ad_rules' );

		}

	} );
