<head>
    @stack('head_start')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>@yield('title')</title>

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('public/img/favicon.ico') }}" type="image/png">

        <!-- Font -->
        <link rel="stylesheet" href="{{ asset('public/vendor/opensans/css/opensans.css') }}" type="text/css">

        <!-- Icons -->
        <link rel="stylesheet" href="{{ asset('public/vendor/nucleo/css/nucleo.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('public/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">

        <!-- Css -->
        <link rel="stylesheet" href="{{ asset('public/css/argon.css?v=1.1.0') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('public/css/akaunting-color.css?v=' . version('short')) }}">
        <link rel="stylesheet" href="{{ asset('public/css/custom.css?v=' . version('short')) }}">

        @stack('css')

        @stack('stylesheet')

        <script type="text/javascript"><!--
            var app_url = '{{ env("APP_URL") }}';
        //--></script>

        @stack('js')

        <script type="text/javascript"><!--
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>

            var aka_currency = 'false';

            var flash_notification = {!! (session()->has('flash_notification')) ? json_encode(session()->get('flash_notification')) : 'false' !!};
        //--></script>

        {{ session()->forget('flash_notification') }}

        @stack('scripts')

    @stack('head_end')
</head>
