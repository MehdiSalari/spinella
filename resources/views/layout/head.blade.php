<head>
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('assets/images/icon.png') }}" type="image/gif" sizes="16x16">
    <title>Spinella</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">    
    <link rel="stylesheet" href="{{ asset('assets/css/coloring.css') }}" type="text/css">

    <!-- css for scheme color -->
    <link rel="stylesheet" href="{{ asset('assets/css/colors/maroon-gold.css') }}" type="text/css" id="colors">

    <!-- Slider Revolution Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/navigation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rev-settings.css') }}">

    @stack('style')

    {{-- <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="<?=asset('assets/admin/css/bootstrap.min.css') ?>">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?=asset('assets/admin/css/font-awesome.min.css') ?>"> --}}

</head>