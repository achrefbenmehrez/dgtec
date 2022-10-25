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
    <title>SQP, leader français de la mémoire spécifique</title>
    <meta name="description"
        content="Depuis 1986, nous sommes leader français de la mémoire spécifique. Nous sommes également spécialistes en solution stockage, sauvegarde et archivage de l&#039;information.">

    <meta property="og:title" content="SQP, leader français de la mémoire spécifique" />
    <meta property="og:description"
        content="Depuis 1986, nous sommes leader français de la mémoire spécifique. Nous sommes également spécialistes en solution stockage, sauvegarde et archivage de l&#039;information." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ route('home') }}" />
    <meta property="og:image" content="{{ asset('storage/img/logo_primary.png') }}" />
    <meta property="og:locale" content="fr" />
    <meta property="og:site_name" content="SQP" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="SQP, leader français de la mémoire spécifique">
    <meta name=" twitter:description"
        content="Depuis 1986, nous sommes leader français de la mémoire spécifique. Nous sommes également spécialistes en solution stockage, sauvegarde et archivage de l&#039;information.">
    <meta name="twitter:image:src" content="{{ asset('storage/img/logo_primary.png') }}">


    <link rel="stylesheet" href="{{ asset('storage/css/inter.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link href="{{ asset('storage/css/flatpickr.css') }}" rel="stylesheet" />
    <link href="{{ asset('storage/css/nouislider.css') }}" rel="stylesheet" />
    <link href="{{ asset('storage/css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('storage/css/cms.css') }}" rel="stylesheet" />

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('storage/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('storage/favicon/site.webmanifest') }}">

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

    <script src="{{ asset('storage/js/index.js') }}"></script>

    <script defer src="{{ asset('storage/dist/cdn.min.js') }}"></script>


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
</head>

<body class="bg-secondary-700">
    <div class="relative">

        <div wire:id="9JWpcMsvd3I9NjaIVMBi"
            wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;9JWpcMsvd3I9NjaIVMBi&quot;,&quot;name&quot;:&quot;website.core.notificationBag&quot;,&quot;locale&quot;:&quot;fr&quot;,&quot;path&quot;:&quot;\/&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[&quot;notification&quot;]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;28be57e1&quot;,&quot;data&quot;:{&quot;notifications&quot;:[]},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;772979995dee5ede43b302a9688b8b593efb8c544c083d60590c71fe4e94f82a&quot;}}"
            aria-live="assertive"
            class="fixed inset-0 z-50 flex items-end px-4 py-6 pointer-events-none sm:p-6 sm:items-start">
            <div class="flex flex-col items-center w-full space-y-4 sm:items-end">
            </div>
        </div>

        <!-- Livewire Component wire-end:9JWpcMsvd3I9NjaIVMBi -->

        @include('partials.header')

        @yield('content')

        @include('partials.footer')

    </div>

</body>
