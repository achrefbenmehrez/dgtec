<!DOCTYPE html>
<html lang="fr">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-V4P7T731G9"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-V4P7T731G9');
    </script>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex,nofollow">
    <title>DGTEC, leader Tunisien de la mémoire spécifique</title>
    <meta name="description"
        content="Depuis 1986, nous sommes leader français de la mémoire spécifique. Nous sommes également spécialistes en solution stockage, sauvegarde et archivage de l&#039;information.">

    <meta property="og:title" content="DGTEC, leader français de la mémoire spécifique" />
    <meta property="og:description"
        content="Depuis 1986, nous sommes leader français de la mémoire spécifique. Nous sommes également spécialistes en solution stockage, sauvegarde et archivage de l&#039;information." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ route('home') }}" />
    <meta property="og:image" content="{{ asset('assets/img/logo_primary.png') }}" />
    <meta property="og:locale" content="fr" />
    <meta property="og:site_name" content="DGTEC" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="DGTEC, leader français de la mémoire spécifique">
    <meta name=" twitter:description"
        content="Depuis 1986, nous sommes leader français de la mémoire spécifique. Nous sommes également spécialistes en solution stockage, sauvegarde et archivage de l&#039;information.">
    <meta name="twitter:image:src" content="{{ asset('assets/img/logo_primary.png') }}">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/inter.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link href="{{ asset('assets/css/flatpickr.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nouislider.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/cms.css') }}" rel="stylesheet" />

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}">

    <style>
        [wire\:loading],
        [wire\:loading\.delay],
        [wire\:loading\.inline-block],
        [wire\:loading\.inline],
        [wire\:loading\.block],
        [wire\:loading\.flex],
        [wire\:loading\.table],
        [wire\:loading\.grid],
        [wire\:loading\.inline-flex] {
            display: none;
        }

        [wire\:loading\.delay\.shortest],
        [wire\:loading\.delay\.shorter],
        [wire\:loading\.delay\.short],
        [wire\:loading\.delay\.long],
        [wire\:loading\.delay\.longer],
        [wire\:loading\.delay\.longest] {
            display: none;
        }

        [wire\:offline] {
            display: none;
        }

        [wire\:dirty]:not(textarea):not(input):not(select) {
            display: none;
        }

        input:-webkit-autofill,
        select:-webkit-autofill,
        textarea:-webkit-autofill {
            animation-duration: 50000s;
            animation-name: livewireautofill;
        }

        @keyframes livewireautofill {
            from {}
        }
    </style>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="{{ asset('assets/js/index.js') }}"></script>

    <script defer src="{{ asset('assets/dist/cdn.min.js') }}"></script>


    <style>
        .no-scrollbar {
            scrollbar-width: none;
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .grecaptcha-badge {
            visibility: hidden !important;
        }
    </style>
    @livewireStyles
</head>

<body class="bg-secondary-700">
    <div class="relative">

        <div aria-live="assertive"
            class="fixed inset-0 z-50 flex items-end px-4 py-6 pointer-events-none sm:p-6 sm:items-start">
            <div class="flex flex-col items-center w-full space-y-4 sm:items-end">
            </div>
        </div>

        <!-- Livewire Component wire-end:9JWpcMsvd3I9NjaIVMBi -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
            integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        @include('partials.header')

        @yield('content')

        @include('partials.footer')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
            integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
        </script>
    </div>

    @livewireScripts
</body>
