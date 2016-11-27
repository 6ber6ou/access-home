const elixir = require( 'laravel-elixir' );

require( 'laravel-elixir-vue-2' );

// ------------------------------------------------------------

elixir( ( mix ) =>
	{

    mix.sass(
        [

        'app.scss',
        'queries.scss'

        ] );

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

    mix.styles(
    	[

    	'./resources/assets/css/normalize/normalize.css',
    	'./resources/assets/bootstrap/dist/css/bootstrap.css',
    	'./public/css/app.css',
        './resources/assets/css/font-awesome/font-awesome.min.css',
        './resources/assets/css/ionicons/ionicons.css',
        './resources/assets/css/animate/animate.css',
    	'./resources/assets/css/jquery-peek-a-bar/dist/css/jquery.peekabar.css'

    	], 'public/css/all.css' );

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

    mix.scripts(
        [

        'jquery/dist/jquery.js',
        'waypoints/lib/jquery.waypoints.js',
        'custom/init_waypoint.js',
        'custom/scroll-to.js',
        'custom/animation_on_scroll.js',
        'custom/mobile_navigation.js',
        'custom/hidden_field_anti_spam.js',
        'custom/recaptcha_disable_submit_button.js',
        'jquery-peek-a-bar/dist/js/jquery.peekabar.js',
        'custom/init_peek_a_bar.js',
        'custom/sticky_footer.js'

        ], 'public/js/custom.js' );

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

    mix.webpack(
    	[

        'app.js'

    	], 'public/js/all.js' );

	} );
