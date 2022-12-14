@extends('layouts.app')

@section('content')
    <div class="w-full py-8 mx-auto mt-4 mb-4 max-w-7xl">
        <header class="flex flex-col items-center w-full px-2">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif

            <ol class="flex text-xs uppercase jusitfy-center">
                <li class="flex items-center h-8">
                    <a href="{{ route('home') }}">Accueil</a>
                </li>

                <li class="flex items-center h-8 pl-2">
                    <span class="pr-2">
                        <svg class="h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg> </span>
                    <a href="{{ route('client.index') }}">Mon compte</a>
                </li>
            </ol>

            <h1 class="text-2xl font-bold uppercase text-primary-500">
                Mon compte
            </h1>

            <p class="mt-4 text-sm font-bold uppercase text-secondary-300">
                ({{ Auth::user()->login }})
            </p>
        </header>

        <div class="grid grid-cols-1 gap-8 px-4 mt-12 mb-12 sm:grid-cols-2 lg:grid-cols-4">
            <a href="{{ route('client.commandes') }}" target="_self" rel=""
                class="flex flex-col px-4 pt-8 pb-12 transition rounded-sm shadow-md bg-secondary-600 hover:!bg-primary-500">
                <svg class="w-10 h-10 mx-auto text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                    fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 24 24">
                    <path
                        d="M2.978 8.358 0 5.74 8.707 1l3.341 2.345L15.258 1 24 5.639l-3.014 2.68.014.008 3 4.115-3 1.634v4.122L12 23l-9-4.802v-4.115l1 .544v2.971l7.501 4.002v-7.889L9 17.345l-9-4.893 2.978-4.094zm9.523 5.366v7.875L20 17.598v-2.977l-5 2.724-2.499-3.621zM1.479 12.118l7.208 3.918 1.847-2.684L3.303 9.61l-1.824 2.508zm11.989 1.247 1.844 2.671 7.208-3.927-1.822-2.498-7.23 3.754zM3.991 8.84l8.01-4.43L20 8.847 12.029 13 3.991 8.84zM1.735 5.934l2.106 1.851 7.16-3.953L8.64 2.175 1.735 5.934zm11.273-2.052 7.076 3.901 2.176-1.935-6.918-3.671-2.334 1.705z">
                    </path>
                </svg>
                <p class="mt-8 text-xs font-semibold text-center text-white uppercase">Historique de commande</p>
            </a>
            <a href="{{ route('client.paniers') }}" target="_self" rel=""
                class="flex flex-col px-4 pt-8 pb-12 transition rounded-sm shadow-md bg-secondary-600 hover:!bg-primary-500">
                <svg class="w-10 h-10 mx-auto text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path
                        d="M19.029 13H22l-.266 1h-2.992l.287-1zm.863-3h2.812L23 9h-2.821l-.287 1zm-.576 2h4.387L24 11h-4.396l-.288 1zM22 3l-.743 2h-1.929l-3.474 12H4.615L0 6h14.812l-.564 2H3.008l2.938 7h8.428l3.432-12H22zM7.5 18c-.828 0-1.5.672-1.5 1.5 0 .829.672 1.5 1.5 1.5S9 20.329 9 19.5c0-.828-.672-1.5-1.5-1.5zm5.9-7-.9 7c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5z">
                    </path>
                </svg>
                <p class="mt-8 text-xs font-semibold text-center text-white uppercase">Paniers</p>
            </a>
            <a href="{{ route('client.devis') }}" target="_self" rel=""
                class="flex flex-col px-4 pt-8 pb-12 transition rounded-sm shadow-md bg-secondary-600 hover:!bg-primary-500">
                <svg class="w-10 h-10 mx-auto text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path
                        d="M13 6c3.469 0 2 5 2 5s5-1.594 5 2v9H8V6h5zm.827-2H6v20h16V12.158C22 9.766 16.989 4 13.827 4zM14 2l-3-2H2v22h2V2h10z">
                    </path>
                </svg>
                <p class="mt-8 text-xs font-semibold text-center text-white uppercase">Devis</p>
            </a>
            <a href="{{ route('client.cataloguesTarifs') }}" target="_self" rel=""
                class="flex flex-col px-4 pt-8 pb-12 transition rounded-sm shadow-md bg-secondary-600 hover:!bg-primary-500">
                <svg class="w-10 h-10 mx-auto text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path
                        d="m23 19.586-2.832-2.832c.524-.79.832-1.735.832-2.754 0-2.761-2.239-5-5-5s-5 2.239-5 5 2.239 5 5 5c1.019 0 1.964-.308 2.754-.832L21.586 21 23 19.586zM16 17c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3zm7-2V3h1v12h-1zm-4-7.315V3h2v6.11c-.574-.586-1.251-1.068-2-1.425zM9 3v12H8V3h1zM4 3h2v12H4V3zM0 3h2v12H0V3zm17 4.08c-.328-.047-.66-.08-1-.08V3h1v4.08zm-6 2.03V3h3v4.295c-1.152.344-2.18.977-3 1.815z">
                    </path>
                </svg>
                <p class="mt-8 text-xs font-semibold text-center text-white uppercase">Tarifs et catalogues</p>
            </a>
            <a href="{{ route('client.adresses') }}" target="_self" rel=""
                class="flex flex-col px-4 pt-8 pb-12 transition rounded-sm shadow-md bg-secondary-600 hover:!bg-primary-500">
                <svg class="w-10 h-10 mx-auto text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path
                        d="M17.492 15.432c-.433 0-.855-.087-1.253-.259l.467-1.082c.25.107.514.162.786.162.222 0 .441-.037.651-.11l.388 1.112c-.334.118-.683.177-1.039.177zM6.57 15.41c-.373 0-.741-.066-1.093-.195l.407-1.105c.221.081.451.122.686.122.26 0 .514-.05.754-.148l.447 1.09c-.382.157-.786.236-1.201.236zm8.67-.783-1.659-.945.583-1.024 1.66.945-.584 1.024zm-6.455-.02-.605-1.011 1.639-.981.605 1.011-1.639.981zm3.918-1.408c-.243-.101-.5-.153-.764-.153-.23 0-.457.04-.674.119l-.401-1.108c.346-.125.708-.188 1.075-.188.42 0 .83.082 1.217.244l-.453 1.086zm7.327-.163c-.534 0-.968.433-.968.968 0 .535.434.968.968.968.535 0 .969-.434.969-.968 0-.535-.434-.968-.969-.968zm-16.061 0c-.535 0-.969.433-.969.968 0 .535.434.968.969.968s.969-.434.969-.968c0-.535-.434-.968-.969-.968zM22 12.204v6.683l-4 2.479V17h-1v4.141l-4-2.885V15h-2v3.255L7 21.14V17H6v4.365l-4-2.479V5.592l4 2.479V12h1V8.073l4-2.886V10h2V5.187l1.577 1.138C14.238 5.624 14 4.807 14 3.801l.019-.345L12 2 6.455 6 0 2v18l6.455 4L12 20l5.545 4L24 20V8.382l-.039.047c-.831.982-1.614 1.918-1.961 3.775zm2-8.403C24 1.702 22.1 0 20 0s-4 1.702-4 3.801c0 3.121 3.188 3.451 4 8.199.812-4.748 4-5.078 4-8.199zM18.5 4c0-.829.672-1.5 1.5-1.5s1.5.671 1.5 1.5-.672 1.5-1.5 1.5-1.5-.671-1.5-1.5zm-.548 8c-.212-.992-.547-1.724-.952-2.334V12h.952z">
                    </path>
                </svg>
                <p class="mt-8 text-xs font-semibold text-center text-white uppercase">Adresses de livraison</p>
            </a>
            <a href="{{ route('client.factures') }}" target="_self" rel=""
                class="flex flex-col px-4 pt-8 pb-12 transition rounded-sm shadow-md bg-secondary-600 hover:!bg-primary-500">
                <svg class="w-10 h-10 mx-auto text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path
                        d="M6 12h10v1H6v-1zm7.816-3H6v1h9.047c-.45-.283-.863-.618-1.231-1zM6 7h6.5c-.134-.32-.237-.656-.319-1H6v1zm13 3.975v2.568C19 17.65 13 16 13 16s1.518 6-2.638 6H3V2h9.5c.312-.749.763-1.424 1.316-2H1v24h10.189C14.352 24 21 16.777 21 14.386V10.5c-.623.26-1.297.421-2 .475zM23 4.5C23 6.985 20.985 9 18.5 9S14 6.985 14 4.5 16.015 0 18.5 0 23 2.015 23 4.5zm-2.156-.882-.696-.696-2.116 2.169-.992-.941-.696.697 1.688 1.637 2.812-2.866z">
                    </path>
                </svg>
                <p class="mt-8 text-xs font-semibold text-center text-white uppercase">Factures, avoirs et ??ch??ances</p>
            </a>
            <a href="{{ route('client.informationsSociete') }}" target="_self" rel=""
                class="flex flex-col px-4 pt-8 pb-12 transition rounded-sm shadow-md bg-secondary-600 hover:!bg-primary-500">
                <svg class="w-10 h-10 mx-auto text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                    fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 24 24">
                    <path
                        d="M21 22h2v2H1v-2h2V0h18v22zm-10-3H9v4h2v-4zm4 0h-2v4h2v-4zm4-17H5v20h2v-5h10v5h2V2zM7 13h2v2H7v-2zm4 0h2v2h-2v-2zm4 0h2v2h-2v-2zm-8-3h2v2H7v-2zm4 0h2v2h-2v-2zm4 0h2v2h-2v-2zM7 7h2v2H7V7zm4 0h2v2h-2V7zm4 0h2v2h-2V7zM7 4h2v2H7V4zm4 0h2v2h-2V4zm4 0h2v2h-2V4z">
                    </path>
                </svg>
                <p class="mt-8 text-xs font-semibold text-center text-white uppercase">Informations soci??t??</p>
            </a>
            <a href="{{ route('client.utilisateurs') }}" target="_self" rel=""
                class="flex flex-col px-4 pt-8 pb-12 transition rounded-sm shadow-md bg-secondary-600 hover:!bg-primary-500">
                <svg class="w-10 h-10 mx-auto text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path
                        d="M17.997 18h-.998c0-1.552.06-1.775-.88-1.993-1.438-.332-2.797-.645-3.293-1.729-.18-.396-.301-1.048.155-1.907 1.021-1.929 1.277-3.583.702-4.538-.672-1.115-2.707-1.12-3.385.017-.576.968-.316 2.613.713 4.512.465.856.348 1.51.168 1.908-.49 1.089-1.836 1.4-3.262 1.728-.982.227-.92.435-.92 2.002h-.995L6 17.377c0-1.259.1-1.985 1.588-2.329 1.682-.389 3.344-.736 2.545-2.209C7.767 8.474 9.457 6 11.998 6c2.492 0 4.227 2.383 1.867 6.839-.775 1.464.824 1.812 2.545 2.209 1.49.344 1.589 1.072 1.589 2.333l-.002.619zm4.81-2.214c-1.289-.298-2.489-.559-1.908-1.657 1.77-3.342.47-5.129-1.4-5.129-1.265 0-2.248.817-2.248 2.325 0 1.269.574 2.175.904 2.925h1.048c-.17-.75-1.466-2.562-.766-3.736.412-.692 1.704-.693 2.114-.012.38.631.181 1.812-.534 3.161-.388.733-.28 1.301-.121 1.648.305.666.977.987 1.737 1.208 1.507.441 1.368.042 1.368 1.48h.997l.002-.463c0-.945-.074-1.492-1.193-1.75zM.002 18h.997c0-1.438-.139-1.039 1.368-1.48.761-.221 1.433-.542 1.737-1.208.159-.348.267-.915-.121-1.648-.715-1.349-.914-2.53-.534-3.161.41-.682 1.702-.681 2.114.012.7 1.175-.596 2.986-.766 3.736h1.048c.33-.75.904-1.656.904-2.925C6.75 9.817 5.767 9 4.502 9c-1.87 0-3.17 1.787-1.4 5.129.581 1.099-.619 1.359-1.908 1.657C.074 16.044 0 16.591 0 17.537L.002 18z">
                    </path>
                </svg>
                <p class="mt-8 text-xs font-semibold text-center text-white uppercase">Gestion des utilisateurs</p>
            </a>
            <a href="{{ route('client.sav') }}" target="_self" rel=""
                class="flex flex-col px-4 pt-8 pb-12 transition rounded-sm shadow-md bg-secondary-600 hover:!bg-primary-500">
                <svg class="w-10 h-10 mx-auto text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path
                        d="M23.27 19.743l-11.946-11.945c-.557-.557-.842-1.331-.783-2.115.115-1.485-.395-3.009-1.529-4.146-1.03-1.028-2.376-1.537-3.723-1.537-.507 0-1.015.072-1.505.216l3.17 3.17c.344 1.589-1.959 3.918-3.567 3.567l-3.169-3.17c-.145.492-.218 1-.218 1.509 0 1.347.51 2.691 1.538 3.721 1.135 1.136 2.66 1.646 4.146 1.53.783-.06 1.557.226 2.113.783l11.946 11.944c.468.468 1.103.73 1.763.73 1.368 0 2.494-1.108 2.494-2.494 0-.638-.244-1.276-.73-1.763zm-1.77 2.757c-.553 0-1-.448-1-1s.447-1 1-1 1 .448 1 1-.447 1-1 1zm-7.935-15.289l5.327-5.318c.584-.584 1.348-.877 2.113-.877.764 0 1.529.292 2.113.877.589.587.882 1.357.882 2.125 0 .764-.291 1.528-.873 2.11l-5.326 5.318-1.039-1.039 5.067-5.059c.169-.168.167-.441-.001-.609-.169-.169-.441-.17-.61-.001l-5.068 5.058-.89-.89 5.067-5.059c.169-.169.168-.441 0-.611-.169-.168-.443-.17-.611 0l-5.067 5.058-1.084-1.083zm-3.53 9.18l-5.227 5.185c-.227.229-.423.488-.574.774l-.301.58-2.1 1.07-.833-.834 1.025-2.146.58-.302c.286-.15.561-.329.79-.558l5.227-5.185 1.413 1.416z">
                    </path>
                </svg>
                <p class="mt-8 text-xs font-semibold text-center text-white uppercase">Service apr??s-vente</p>
            </a>

            <a href="{{ route('logout') }}"
                class="flex flex-col px-4 pt-8 pb-12 transition rounded-sm shadow-md bg-secondary-500 hover:bg-primary-500">
                <svg class="w-10 h-10 mx-auto text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                    fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 24 24">
                    <path
                        d="M11 21h8.033v-2l1-1v4H11v2L1 21V3l10-3v2h9.033v5l-1-1V3H11v18zm-1 1.656V1.344l-8 2.4v16.512l8 2.4zM21.086 12l-3.293-3.293L18.5 8l4.5 4.5-4.5 4.5-.707-.707L21.086 13h-9.053v-1h9.053z">
                    </path>
                </svg>
                <p class="mt-8 text-xs font-semibold text-center text-white uppercase">D??connexion</p>
            </a>
        </div>


        <div class="relative z-10 px-4 py-8 mb-16 bg-secondary-700">
            <div class="relative mx-auto max-w-big" x-data="{ tab: 0, swiper: null }" x-init="swiper = new Swiper($refs.container, { loop: true, allowTouchMove: false })">
                <div class="relative flex justify-center w-full lg:justify-start">
                    <hr class="absolute w-full border-secondary-600" style="z-index: -1">
                    <a href="#" @click.prevent="tab = 0; swiper.slideTo(1)"
                        class="inline-flex items-center h-8 px-4 mx-2 -mt-4 text-sm font-bold uppercase lg:pr-4 lg:px-0 lg:mx-0 bg-secondary-700"
                        :class="tab == 0 ? 'text-tertiary-500' : 'text-gray-300 hover:text-white'" x-cloak>Promotions</a>
                    <a href="#" @click.prevent="tab = 1; swiper.slideTo(2)"
                        class="inline-flex items-center h-8 px-4 mx-2 -mt-4 text-sm font-bold uppercase lg:pr-4 lg:px-0 lg:mx-0 bg-secondary-700"
                        :class="tab == 1 ? 'text-tertiary-500' : 'text-gray-300 hover:text-white'" x-cloak>Nouveaut??s</a>
                </div>

                <div class="overflow-x-hidden swiper-container" x-ref="container">
                    <div class="swiper-wrapper">
                        <div class="grid grid-cols-1 gap-8 mt-8 swiper-slide sm:grid-cols-2 lg:grid-cols-4">

                            @foreach ($homePromos as $promo)
                                <a href="https://sqp.fr/distributeur-25/ssd-samsung-870-qvo-25-1tb-sata-6gbps-033-dwpd-promo-jusquau-3108-sur-stock-dispo"
                                    class="flex flex-col h-full max-w-full overflow-hidden rounded-sm shadow-lg bg-secondary-600 hover:bg-secondary-700">
                                    <div class="relative h-48 p-2 bg-white sm:h-64 lg:max-h-full">
                                        <img class="h-full w-full object-contain"
                                            srcset="https://sqp.fr/storage/products/products/60604/medias/43297/responsive-images/ssd1t-sam870qvopromo-60604___media_library_original_768_768.jpg 768w, https://sqp.fr/storage/products/products/60604/medias/43297/responsive-images/ssd1t-sam870qvopromo-60604___media_library_original_642_642.jpg 642w, https://sqp.fr/storage/products/products/60604/medias/43297/responsive-images/ssd1t-sam870qvopromo-60604___media_library_original_537_537.jpg 537w, https://sqp.fr/storage/products/products/60604/medias/43297/responsive-images/ssd1t-sam870qvopromo-60604___media_library_original_449_449.jpg 449w, https://sqp.fr/storage/products/products/60604/medias/43297/responsive-images/ssd1t-sam870qvopromo-60604___media_library_original_376_376.jpg 376w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNzY4IDc2OCI+Cgk8aW1hZ2Ugd2lkdGg9Ijc2OCIgaGVpZ2h0PSI3NjgiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvanBlZztiYXNlNjQsLzlqLzRBQVFTa1pKUmdBQkFRRUFZQUJnQUFELy9nQTdRMUpGUVZSUFVqb2daMlF0YW5CbFp5QjJNUzR3SUNoMWMybHVaeUJKU2tjZ1NsQkZSeUIyT0RBcExDQnhkV0ZzYVhSNUlEMGdPVEFLLzlzQVF3QURBZ0lEQWdJREF3TURCQU1EQkFVSUJRVUVCQVVLQndjR0NBd0tEQXdMQ2dzTERRNFNFQTBPRVE0TEN4QVdFQkVURkJVVkZRd1BGeGdXRkJnU0ZCVVUvOXNBUXdFREJBUUZCQVVKQlFVSkZBMExEUlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVS84QUFFUWdBSUFBZ0F3RVJBQUlSQVFNUkFmL0VBQjhBQUFFRkFRRUJBUUVCQUFBQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVFBQUlCQXdNQ0JBTUZCUVFFQUFBQmZRRUNBd0FFRVFVU0lURkJCaE5SWVFjaWNSUXlnWkdoQ0NOQ3NjRVZVdEh3SkROaWNvSUpDaFlYR0JrYUpTWW5LQ2txTkRVMk56ZzVPa05FUlVaSFNFbEtVMVJWVmxkWVdWcGpaR1ZtWjJocGFuTjBkWFozZUhsNmc0U0Zob2VJaVlxU2s1U1ZscGVZbVpxaW82U2xwcWVvcWFxeXM3UzF0cmU0dWJyQ3c4VEZ4c2ZJeWNyUzA5VFYxdGZZMmRyaDR1UGs1ZWJuNk9ucThmTHo5UFgyOS9qNSt2L0VBQjhCQUFNQkFRRUJBUUVCQVFFQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVJBQUlCQWdRRUF3UUhCUVFFQUFFQ2R3QUJBZ01SQkFVaE1RWVNRVkVIWVhFVElqS0JDQlJDa2FHeHdRa2pNMUx3RldKeTBRb1dKRFRoSmZFWEdCa2FKaWNvS1NvMU5qYzRPVHBEUkVWR1IwaEpTbE5VVlZaWFdGbGFZMlJsWm1kb2FXcHpkSFYyZDNoNWVvS0RoSVdHaDRpSmlwS1RsSldXbDVpWm1xS2pwS1dtcDZpcHFyS3p0TFcydDdpNXVzTER4TVhHeDhqSnl0TFQxTlhXMTlqWjJ1TGo1T1htNStqcDZ2THo5UFgyOS9qNSt2L2FBQXdEQVFBQ0VRTVJBRDhBL1JMeEY4WXREOE5YWnQ3dTRWSkIySnFsRnNEbjUvMmxmQ2x1UG12Rkg0MCtSaU0rWDlyRHdaRVNHdmsvNzZvNVdNMS9DZjdSZmhmeGhxSzJWamRxOHpkQURTY1dnUGtYOXBUVjJnOFp6TDVoSHRtdWlHeExQblB4RDRvTWU1VE13UDFxd09JdU5Za3ZKU0VtWS9qU0E5dy9aSk0vL0N5TGZkSXhIb1RVVDJCSFFmdFdhaE5INCtuVlZZajJGRU5nWjgzNjlPU2hrbGpjajZWYkFUUWRPKzJoWkk0bXdmYWdSOUwvQUxLK2d5UWVPN2VReGtmaFV6MkdqN244Vy9zN2VHZkdPb3RlWDFxcnlucVNLNTFKb281dTUvWTc4RDNTYlpMQkdIMHA4ekFtc1AyUnZCV25vRmlzVVVEL0FHYVhNd09zOEwvQXp3LzRVdkZ1Yk8yVkpCMElGRGsyQi8vWiI+Cgk8L2ltYWdlPgo8L3N2Zz4= 32w"
                                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                            sizes="1px"
                                            src="https://sqp.fr/storage/products/products/60604/medias/43297/ssd1t-sam870qvopromo-60604.jpg"
                                            width="768" height="768">

                                        <div class="absolute h-6 bg-gray-100 bottom-2 left-2">
                                            <img class="block object-contain object-left w-auto h-full mb-2"
                                                srcset="https://sqp.fr/storage/products/brands/11/medias/30/responsive-images/samsung___media_library_original_290_96.png 290w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMjkwIDk2Ij4KCTxpbWFnZSB3aWR0aD0iMjkwIiBoZWlnaHQ9Ijk2IiB4bGluazpocmVmPSJkYXRhOmltYWdlL2pwZWc7YmFzZTY0LC85ai80QUFRU2taSlJnQUJBUUVBWUFCZ0FBRC8vZ0E3UTFKRlFWUlBVam9nWjJRdGFuQmxaeUIyTVM0d0lDaDFjMmx1WnlCSlNrY2dTbEJGUnlCMk9EQXBMQ0J4ZFdGc2FYUjVJRDBnT1RBSy85c0FRd0FEQWdJREFnSURBd01EQkFNREJBVUlCUVVFQkFVS0J3Y0dDQXdLREF3TENnc0xEUTRTRUEwT0VRNExDeEFXRUJFVEZCVVZGUXdQRnhnV0ZCZ1NGQlVVLzlzQVF3RURCQVFGQkFVSkJRVUpGQTBMRFJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVUvOEFBRVFnQUNnQWRBd0VSQUFJUkFRTVJBZi9FQUI4QUFBRUZBUUVCQVFFQkFBQUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVRQUFJQkF3TUNCQU1GQlFRRUFBQUJmUUVDQXdBRUVRVVNJVEZCQmhOUllRY2ljUlF5Z1pHaENDTkNzY0VWVXRId0pETmljb0lKQ2hZWEdCa2FKU1luS0NrcU5EVTJOemc1T2tORVJVWkhTRWxLVTFSVlZsZFlXVnBqWkdWbVoyaHBhbk4wZFhaM2VIbDZnNFNGaG9lSWlZcVNrNVNWbHBlWW1acWlvNlNscHFlb3FhcXlzN1MxdHJlNHVickN3OFRGeHNmSXljclMwOVRWMXRmWTJkcmg0dVBrNWVibjZPbnE4Zkx6OVBYMjkvajUrdi9FQUI4QkFBTUJBUUVCQVFFQkFRRUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVSQUFJQkFnUUVBd1FIQlFRRUFBRUNkd0FCQWdNUkJBVWhNUVlTUVZFSFlYRVRJaktCQ0JSQ2thR3h3UWtqTTFMd0ZXSnkwUW9XSkRUaEpmRVhHQmthSmljb0tTbzFOamM0T1RwRFJFVkdSMGhKU2xOVVZWWlhXRmxhWTJSbFptZG9hV3B6ZEhWMmQzaDVlb0tEaElXR2g0aUppcEtUbEpXV2w1aVptcUtqcEtXbXA2aXBxckt6dExXMnQ3aTV1c0xEeE1YR3g4akp5dExUMU5YVzE5aloydUxqNU9YbTUranA2dkx6OVBYMjkvajUrdi9hQUF3REFRQUNFUU1SQUQ4QS9RdXp0dkhHdkkyN1dwTkV0OGdvL3dCa2dhNWJCT2R3S3NpZzhjRGNSajczUEFCcitGZmg5QjRZbFc0azFQVk5WdUZVcUpkVHY1YmtwbkdkdTlqdHpnWnhqb0tBTlBWdkdPa2FLam04djRJTm5VTTRCb0E4NTFqKzFQRk9yUzMrbTZacU9tUk1nVDdTODk1Wm01QUxZK1dHTmlRT2NGd09IeXVRU2FBUFh3T2FBR3ovQU9xYjZVQWMvd0NIdkNlaG1KTlRPamFmL2FVOFpTVzgreXA1MGk3czRaOFpJNEhVOWhRQnB0NFcwVmlTZElzQ1QzTnNuK0ZBSC8vWiI+Cgk8L2ltYWdlPgo8L3N2Zz4= 32w"
                                                onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                                sizes="1px"
                                                src="https://sqp.fr/storage/products/brands/11/medias/30/samsung.png"
                                                width="290" height="96">

                                        </div>
                                    </div>
                                    <div class="flex flex-col flex-1 px-4 pt-4 pb-8">
                                        <div
                                            class="w-full px-4 py-2 mb-4 text-xs font-medium text-right border-l-4 rounded-sm bg-secondary-700 border-primary-500 text-primary-500">
                                            Promo jusqu&#039;au 04/11/2022
                                        </div>

                                        <table class="w-full text-xs uppercase border-separate"
                                            style="border-spacing: 0 .25rem">
                                            <tr class="text-primary-500">
                                                <td class="w-0 pr-2 whitespace-nowrap">Ref. SQP:</td>
                                                <th>SSD1T-SAM870QVO/PROMO</th>
                                            </tr>
                                            <tr class="text-secondary-300">
                                                <td class="w-0 pr-2 whitespace-nowrap">Ref. Fabricant:</td>
                                                <th>MZ-77Q1T0BW-PROMO</th>
                                            </tr>
                                        </table>

                                        <span
                                            class="flex-1 mt-2 mb-4 overflow-hidden text-xs text-white uppercase break-all ">SSD
                                            Samsung 870 QVO - 2,5&quot; 1TB - SATA 6Gbps - 0.33 DWPD - Promo jusqu&#039;au
                                            31/08 sur stock dispo</span>


                                        <div class="mb-2">
                                            <p class="text-xs font-bold text-center uppercase text-primary-500">En stock
                                            </p>
                                        </div>

                                        <div class="flex justify-between w-full mt-auto mb-0 space-x-2">
                                            <button class="button group --is-outlined --is-small --is-tertiary"
                                                wire:click.prevent="toggleCompare" wire:loading.class="--is-loading"
                                                type="button">


                                                <span class="button__caption">
                                                    Comparer
                                                </span>


                                                <span class="button__spinner">
                                                    <svg class="w-4 h-4 animate-spin" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 24 24">
                                                        <circle class="opacity-25" cx="12" cy="12"
                                                            r="10" stroke="currentColor" stroke-width="4">
                                                        </circle>
                                                        <path class="opacity-75" fill="currentColor"
                                                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </button>

                                            <a class="button group w-full px-4 text-center --is-small --is-tertiary"
                                                wire:loading.class="--is-loading" type="button"
                                                href="{{ route('addToCart', $promo->slug) }}">


                                                <span class="button__caption">
                                                    <span class="sr-only">Ajouter au panier</span>
                                                    <svg class="h-6 mx-auto" transform="scale(-1,1)" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M19.029 13H22l-.266 1h-2.992l.287-1zm.863-3h2.812L23 9h-2.821l-.287 1zm-.576 2h4.387L24 11h-4.396l-.288 1zM22 3l-.743 2h-1.929l-3.474 12H4.615L0 6h14.812l-.564 2H3.008l2.938 7h8.428l3.432-12H22zM7.5 18c-.828 0-1.5.672-1.5 1.5 0 .829.672 1.5 1.5 1.5S9 20.329 9 19.5c0-.828-.672-1.5-1.5-1.5zm5.9-7-.9 7c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5z" />
                                                    </svg>
                                                </span>


                                                <span class="button__spinner">
                                                    <svg class="w-4 h-4 animate-spin" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 24 24">
                                                        <circle class="opacity-25" cx="12" cy="12"
                                                            r="10" stroke="currentColor" stroke-width="4">
                                                        </circle>
                                                        <path class="opacity-75" fill="currentColor"
                                                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </a>
                            @endforeach

                            <!-- Livewire Component wire-end:PDNgyxQn71w9dxjF72qM -->
                            <div class="grid col-span-full">
                                <a class="button group --has-trailing w-full mx-auto mt-4 lg:w-auto --translate-icon-on-hover  "
                                    href="https://sqp.fr/promotions-stockage-professionnel">


                                    <span class="button__caption">
                                        Toutes les promotions ({{ $promosCount }} produits)
                                    </span>

                                    <span class="button__trailing">
                                        <svg class="h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>

                                    <span class="button__spinner">
                                        <svg class="w-4 h-4 animate-spin" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10"
                                                stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor"
                                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                            </path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-8 mt-8 swiper-slide sm:grid-cols-2 lg:grid-cols-4">

                            @foreach ($homeNouveautes as $nouveaute)
                                <a href="https://sqp.fr/distributeur-m2/ssd-crucial-p3-plus-m2-2280-1tb-pcie-40-x4-nvme-012-dwpd"
                                    class="flex flex-col h-full max-w-full overflow-hidden rounded-sm shadow-lg bg-secondary-600 hover:bg-secondary-700">
                                    <div class="relative h-48 p-2 bg-white sm:h-64 lg:max-h-full">
                                        <img class="h-full w-full object-contain"
                                            srcset="https://sqp.fr/storage/products/products/65278/medias/46580/responsive-images/ssd1t-crucp3-65278___media_library_original_1024_768.jpg 1024w, https://sqp.fr/storage/products/products/65278/medias/46580/responsive-images/ssd1t-crucp3-65278___media_library_original_856_642.jpg 856w, https://sqp.fr/storage/products/products/65278/medias/46580/responsive-images/ssd1t-crucp3-65278___media_library_original_716_537.jpg 716w, https://sqp.fr/storage/products/products/65278/medias/46580/responsive-images/ssd1t-crucp3-65278___media_library_original_599_449.jpg 599w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMTAyNCA3NjgiPgoJPGltYWdlIHdpZHRoPSIxMDI0IiBoZWlnaHQ9Ijc2OCIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJPREFwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FHQUFnQXdFUkFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEEvVEMvOGQ2SnBrdmwzT29RUlA2TTRGSzQ3RlVmRTN3MmYrWXJiZjhBZndVWEVJZmloNGFCL3dDUXRiZjkvQlRBdWFiNDUwWFY1Zkx0TCtHWi9SSEJwWEhZL0xmOXF3ZVBMbjRqeXBwajNxV2c3eDV4VVJSVFBCdFRnK0tsdS84QW84bXBPUDhBZ1ZhRUZPMWgrSzhrbjcwNmt2OEEzMVFCOUwvc2EyWGo5ZkhLTnFyWGh0eC96MXppc2Fua2F3dDFQMDB2dkFXaDZsTVpiblQ0SlhQOFRJRFd4a1Z2K0ZZK0cvOEFvRlczL2ZBb0FQOEFoV0hodi9vRTIzL2ZzVUFYdE44RjZQcEQ3N1N4aGhiMVZRS1ZyZ2YvMlE9PSI+Cgk8L2ltYWdlPgo8L3N2Zz4= 32w"
                                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                            sizes="1px"
                                            src="https://sqp.fr/storage/products/products/65278/medias/46580/ssd1t-crucp3-65278.jpg"
                                            width="1024" height="768">

                                    </div>
                                    <div class="flex flex-col flex-1 px-4 pt-4 pb-8">

                                        <table class="w-full text-xs uppercase border-separate"
                                            style="border-spacing: 0 .25rem">
                                            <tr class="text-primary-500">
                                                <td class="w-0 pr-2 whitespace-nowrap">Ref. SQP:</td>
                                                <th>SSD1T-CRUCP3+</th>
                                            </tr>
                                            <tr class="text-secondary-300">
                                                <td class="w-0 pr-2 whitespace-nowrap">Ref. Fabricant:</td>
                                                <th>CT1000P3PSSD8</th>
                                            </tr>
                                        </table>

                                        <span
                                            class="flex-1 mt-2 mb-4 overflow-hidden text-xs text-white uppercase break-all ">SSD
                                            Crucial P3 Plus - M.2 2280 1TB - PCIe 4.0 x4 NVMe - 0.12 DWPD</span>


                                        <div class="mb-2">
                                            <p class="text-xs font-bold text-center uppercase text-secondary-300">??puis??
                                                provisoirement</p>
                                        </div>

                                        <div class="flex justify-between w-full mt-auto mb-0 space-x-2">
                                            <button class="button group --is-outlined --is-small --is-tertiary"
                                                wire:click.prevent="toggleCompare" wire:loading.class="--is-loading"
                                                type="button">


                                                <span class="button__caption">
                                                    Comparer
                                                </span>


                                                <span class="button__spinner">
                                                    <svg class="w-4 h-4 animate-spin" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 24 24">
                                                        <circle class="opacity-25" cx="12" cy="12"
                                                            r="10" stroke="currentColor" stroke-width="4">
                                                        </circle>
                                                        <path class="opacity-75" fill="currentColor"
                                                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </button>

                                            <a class="button group w-full px-4 text-center --is-small --is-tertiary"
                                                wire:loading.class="--is-loading"
                                                href="{{ route('addToCart', $nouveaute->slug) }}" type="button">


                                                <span class="button__caption">
                                                    <span class="sr-only">Ajouter au panier</span>
                                                    <svg class="h-6 mx-auto" transform="scale(-1,1)" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M19.029 13H22l-.266 1h-2.992l.287-1zm.863-3h2.812L23 9h-2.821l-.287 1zm-.576 2h4.387L24 11h-4.396l-.288 1zM22 3l-.743 2h-1.929l-3.474 12H4.615L0 6h14.812l-.564 2H3.008l2.938 7h8.428l3.432-12H22zM7.5 18c-.828 0-1.5.672-1.5 1.5 0 .829.672 1.5 1.5 1.5S9 20.329 9 19.5c0-.828-.672-1.5-1.5-1.5zm5.9-7-.9 7c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5z" />
                                                    </svg>
                                                </span>


                                                <span class="button__spinner">
                                                    <svg class="w-4 h-4 animate-spin" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 24 24">
                                                        <circle class="opacity-25" cx="12" cy="12"
                                                            r="10" stroke="currentColor" stroke-width="4">
                                                        </circle>
                                                        <path class="opacity-75" fill="currentColor"
                                                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </a>
                            @endforeach

                            <div class="grid col-span-full">
                                <a class="button group --has-trailing w-full mx-auto mt-4 lg:w-auto --translate-icon-on-hover  "
                                    href="https://sqp.fr/nouveautes-stockage-professionnel">


                                    <span class="button__caption">
                                        Toutes les nouveaut??s ({{ $nouveautesCount }} Produits)
                                    </span>

                                    <span class="button__trailing">
                                        <svg class="h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>

                                    <span class="button__spinner">
                                        <svg class="w-4 h-4 animate-spin" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10"
                                                stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor"
                                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                            </path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
