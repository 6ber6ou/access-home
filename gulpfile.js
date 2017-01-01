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
        'bootstrap/bootstrap.js',
        'waypoints/lib/jquery.waypoints.js',
        'custom/init_waypoint.js',
        'custom/scroll-to.js',
        'custom/animation_on_scroll.js',
        'custom/mobile_navigation.js',
        'custom/hidden_field_anti_spam.js',
        'custom/recaptcha_disable_submit_button.js',
        'jquery-peek-a-bar/dist/js/jquery.peekabar.js',
        'custom/init_peek_a_bar.js',
        'custom/sticky_footer.js',
        'jquery-form/jquery-form.js',
        'custom/upload_user_avatar.js',
        'illbeback/illbeback.min.js',
        'custom/init_illbeback.js',
        'custom/show_map.js',
        'custom/upload_ad_photo.js',
        'custom/upload_ad_photo_1.js',
        'custom/upload_ad_photo_2.js',
        'custom/upload_ad_photo_3.js',
        'custom/upload_ad_photo_4.js',
        'custom/upload_ad_photo_5.js',
        'custom/upload_ad_photo_6.js',
        'cookie/cookie.js',
        'custom/create_ad_save_inputs.js',
        'custom/no_yes_buttons.js',
        'imagelightbox/imagelightbox.js',
        'custom/init_imagelightbox.js'

        ], 'public/js/custom.js' );

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

    mix.webpack(
    	[

        'app.js'

    	], 'public/js/all.js' );

	} );
