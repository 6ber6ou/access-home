<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ trans( 'webpage-text.meta-description' ) }}">

    <!--[if lte IE 8]>
        <script src="{{ asset( 'js/ie/html5shiv.js' ) }}"></script>
    <![endif]-->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ config( 'app.name', 'Access Home' ) }}
    </title>

    <!-- Styles -->
    <link href="/css/all.css" rel="stylesheet">

    <!-- Google Recaptcha -->
    <script src='https://www.google.com/recaptcha/api.js?hl={{ app()->getLocale() }}'></script>

    <!--[if lte IE 8]>
        <link rel="stylesheet" href="{{ asset( 'css/ie/ie8.css' ) }}">
    <![endif]-->

    <!--[if lte IE 9]>
        <link rel="stylesheet" href="{{ asset( 'css/ie/ie9.css' ) }}">
    <![endif]-->

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">

    <!-- Scripts -->
    <script>

        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>

    </script>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/favicons/manifest.json">
    {{-- <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5"> --}}
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg">
    <link rel="shortcut icon" href="/favicons/favicon.ico">
    <meta name="msapplication-config" content="/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

</head>
