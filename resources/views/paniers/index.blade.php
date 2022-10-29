@extends('layouts.app')

@section('content')
    <?php $total = 0; ?>
    <div class="w-full py-8 mx-auto mt-4 mb-4 max-w-7xl">
        <header class="flex flex-col items-center w-full px-2">
            <h1 class="text-3xl font-bold uppercase text-primary-500">
                Panier
            </h1>
            <hr class="w-16 mt-4 border-primary-500">
        </header>

        <nav aria-label="Progress" class="mx-auto mt-4 mb-8">
            <ol role="list" class="flex items-center justify-between w-full p-2 sm:justify-center">
                <li class="relative sm:mx-4">
                    <a href="{{ route('mon-panier') }}"
                        class="relative flex items-center justify-center w-24 h-24 rounded-full pointer-events-none bg-primary-500 hover:bg-primary-600">
                        <svg class="w-10 h-10 text-white" transform="scale(-1,1)" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M19.029 13H22l-.266 1h-2.992l.287-1zm.863-3h2.812L23 9h-2.821l-.287 1zm-.576 2h4.387L24 11h-4.396l-.288 1zM22 3l-.743 2h-1.929l-3.474 12H4.615L0 6h14.812l-.564 2H3.008l2.938 7h8.428l3.432-12H22zM7.5 18c-.828 0-1.5.672-1.5 1.5 0 .829.672 1.5 1.5 1.5S9 20.329 9 19.5c0-.828-.672-1.5-1.5-1.5zm5.9-7-.9 7c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5z">
                            </path>
                        </svg> </a>
                    <div class="mt-4 text-xs font-medium text-center uppercase">
                        Panier
                    </div>
                </li>

                <li class="relative sm:mx-4">
                    <a href="#"
                        class="relative flex items-center justify-center w-24 h-24 rounded-full bg-secondary-600 pointer-events-none">
                        <svg class="w-10 h-10 text-secondary-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24">
                            <path
                                d="m17.677 16.879-.343.195v-1.717l.343-.195v1.717zm2.823-3.324-.342.195v1.717l.342-.196v-1.716zM24 5.953V17.46L14.25 23 4 18.011V6.504L13.767 1 24 5.953zM12.154 4.196l7.022 3.2 1.7-.917-7.113-3.193-1.609.91zM13 11.899l-7-3.24v8.19l7 3.148v-8.098zm3.021-2.809L9.203 5.85 7.158 7.018l6.859 3.161 2.004-1.089zM22 8.147l-2 1.078v2.786l-3 1.688v-2.856l-2 1.078v8.362l7-3.985V8.147zm-4.907 7.348-.349.199v1.713l.349-.195v-1.717zm1.405-.8-.344.196v1.717l.344-.196v-1.717zm.574-.327-.343.195v1.717l.343-.195v-1.717zm.584-.332-.35.199v1.717l.35-.199v-1.717zM3 10H1v1h2v-1zm0 2H0v1h3v-1zm0 2H1v1h2v-1z">
                            </path>
                        </svg> </a>
                    <div class="mt-4 text-xs font-medium text-center uppercase">
                        Livraison
                    </div>
                </li>

                <li class="relative sm:mx-4">
                    <a href="#"
                        class="relative flex items-center justify-center w-24 h-24 rounded-full bg-secondary-600 pointer-events-none">
                        <svg class="w-10 h-10 text-secondary-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24">
                            <path
                                d="M21.5 6c.276 0 .5.224.5.5v11c0 .276-.224.5-.5.5h-19c-.276 0-.5-.224-.5-.5v-11c0-.276.224-.5.5-.5h19zM24 6c0-1.104-.896-2-2-2H2C.896 4 0 4.896 0 6v12c0 1.104.896 2 2 2h20c1.104 0 2-.896 2-2V6zM4 9.78c0-.431.349-.78.78-.78h.427v1.125H4V9.78zm0 .764h1.208v.968H4v-.968zm0 1.388h1.208V13H4.78c-.431 0-.78-.349-.78-.78v-.288zm4 .288c0 .431-.349.78-.78.78h-.429v-1.068H8v.288zm0-.708H6.791v-.968H8v.968zm0-1.387H6.371V13h-.744V9H7.22c.431 0 .78.349.78.78v.345zM13.5 13c-1.381 0-2.5-1.119-2.5-2.5S12.119 8 13.5 8c.484 0 .937.138 1.32.377-.53.552-.856 1.3-.856 2.123 0 .824.326 1.571.856 2.123-.383.239-.836.377-1.32.377zm1.5-2.5C15 9.119 16.12 8 17.5 8c1.381 0 2.5 1.119 2.5 2.5S18.881 13 17.5 13c-1.38 0-2.5-1.119-2.5-2.5zM7 15H4v1h3v-1zm4 0H8v1h3v-1zm5 0h-3v1h3v-1zm4 0h-3v1h3v-1z">
                            </path>
                        </svg> </a>
                    <div class="mt-4 text-xs font-medium text-center uppercase">
                        Paiement
                    </div>
                </li>

                <li class="relative sm:mx-4">
                    <a href="#"
                        class="relative flex items-center justify-center w-24 h-24 rounded-full pointer-events-none bg-secondary-600"
                        aria-current="step">
                        <svg class="w-10 h-10 text-secondary-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg> </a>
                    <div class="mt-4 text-xs font-medium text-center uppercase">
                        Validation
                    </div>
                </li>
            </ol>
        </nav>

        <div wire:id="WzCoRI0bJEBhvOkjrRMD" class="p-2">

            <div class="flex flex-wrap">

                <div class="w-full">
                    <table class="hidden w-full rounded lg:table" style="">
                        <tbody>
                            <tr>
                                <th class="text-xs font-medium text-left uppercase">
                                    <div class="px-4 py-2">Produit</div>
                                </th>
                                <th class="text-xs font-medium text-center uppercase">
                                    <div class="px-4 py-2">Disponibilité</div>
                                </th>
                                <th class="text-xs font-medium text-center uppercase">
                                    <div class="px-4 py-2 whitespace-nowrap">
                                        Prix unitaire HT
                                    </div>
                                </th>
                                <th class="text-xs font-medium text-center uppercase">
                                    <div class="px-4 py-2">
                                        Quantité
                                    </div>
                                </th>
                                <th class="text-xs font-medium text-center uppercase">
                                    <div class="px-4 py-2">
                                        Total HT
                                    </div>
                                </th>
                            </tr>

                            @if (session('cart'))
                                @foreach ((array) session('cart') as $id => $details)
                                    <?php $total += $details['prix']; ?>

                                    <tr class="mb-2 bg-opacity-50 bg-secondary-600">
                                        <td>
                                            <a class="flex px-4 py-8"
                                                href="https://sqp.fr/distributeur-25/ssd-samsung-870-qvo-25-1tb-sata-6gbps-033-dwpd-promo-jusquau-3108-sur-stock-dispo">
                                                <div
                                                    class="flex-shrink-0 w-32 h-32 p-2 mr-4 bg-white border border-gray-200">
                                                    <img src="{{ asset('storage/' . $details['photosUrl'][0]) }}"
                                                        class="object-contain w-full h-full">
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                    <p class="mb-1 text-xl font-medium text-primary-500">
                                                        {{ $details['nom'] }}</p>
                                                    <p class="max-w-lg text-xs font-bold text-white uppercase">
                                                        {{ $details['description'] }}</p>
                                                    <p class="mt-2 text-xs font-bold uppercase text-primary-500">+0,02€
                                                        d'éco-participation</p>
                                                </div>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="px-4 py-8">
                                                <p class="text-sm font-semibold text-center text-white uppercase">
                                                    @if ($details['quantiteStock'] > 0)
                                                        En stock
                                                    @else
                                                        Stock Epuisé
                                                    @endif
                                                </p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-4 py-8 whitespace-nowrap">
                                                <p class="text-base font-bold text-right uppercase text-primary-500">
                                                    {{ $details['prix'] }}
                                                    <span class="text-sm">HT</span>
                                                </p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-4 py-8 text-sm text-center">
                                                <input
                                                    class="w-16 py-2 pl-3 text-center text-white border-transparent bg-secondary-600"
                                                    type="number" value="3"
                                                    wire:change="update('40a297d3c005654391d127a675b3f9a0', $event.target.value)">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-4 py-8 whitespace-nowrap">
                                                <p class="text-base font-bold text-right text-white uppercase">184,50€ <span
                                                        class="text-sm">HT</span></p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-4 py-8">
                                                <button type="button" data-id="{{ $id }}"
                                                    class="text-white transition-colors hover:text-primary-500 remove-from-cart">
                                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                        </path>
                                                    </svg> </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif

                        </tbody>
                    </table>

                    <div class="lg:hidden">
                        <ul class="grid gap-8 mx-auto mt-4 sm:grid-cols-2">
                        </ul>
                    </div>
                </div>

                <div class="w-full p-4 mt-4 rounded-sm bg-primary-500" id="lessThan150">
                    <div class="flex">
                        <div class="mx-4 shrink-0">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="flex-1 ml-3 md:flex md:justify-between">
                            <p class="text-sm font-medium">
                                Attention, le minimum de commande est de 150 € HT
                            </p>
                        </div>
                    </div>
                </div>


                <div class="flex flex-col justify-center w-full md:flex-row md:justify-between" id="lessThan150">
                    <a class="button group --has-leading mt-4 --is-secondary --translate-icon-on-hover"
                        href="{{ route('home') }}">

                        <div class="button__leading">
                            <svg class="h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>

                        <span class="button__caption">
                            Continuer mes achats
                        </span>


                        <span class="button__spinner">
                            <svg class="w-4 h-4 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10"
                                    stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                </path>
                            </svg>
                        </span>
                    </a>

                </div>

                <div class="w-full p-4 mt-4 rounded-sm bg-secondary-600" id="moreThan150">
                    <div class="flex">
                        <div class="mx-4 shrink-0">
                            <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="flex-1 ml-3 md:flex md:justify-between">
                            <p class="text-sm font-light text-white">
                                <span class="font-bold">Vous souhaitez obtenir un devis ? </span>Créez un devis à l'étape
                                suivante !
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w-full p-4 mt-4 rounded-sm bg-secondary-600" id="moreThan150">
                    <div class="flex">
                        <div class="mx-4 shrink-0">
                            <svg class="w-5 h-5 text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="m17.677 16.879-.343.195v-1.717l.343-.195v1.717zm2.823-3.324-.342.195v1.717l.342-.196v-1.716zM24 5.953V17.46L14.25 23 4 18.011V6.504L13.767 1 24 5.953zM12.154 4.196l7.022 3.2 1.7-.917-7.113-3.193-1.609.91zM13 11.899l-7-3.24v8.19l7 3.148v-8.098zm3.021-2.809L9.203 5.85 7.158 7.018l6.859 3.161 2.004-1.089zM22 8.147l-2 1.078v2.786l-3 1.688v-2.856l-2 1.078v8.362l7-3.985V8.147zm-4.907 7.348-.349.199v1.713l.349-.195v-1.717zm1.405-.8-.344.196v1.717l.344-.196v-1.717zm.574-.327-.343.195v1.717l.343-.195v-1.717zm.584-.332-.35.199v1.717l.35-.199v-1.717zM3 10H1v1h2v-1zm0 2H0v1h3v-1zm0 2H1v1h2v-1z">
                                </path>
                            </svg>
                        </div>
                        <div class="flex-1 ml-3 md:flex md:justify-between">
                            <p class="text-sm text-white">
                                <b>En cas d'indisponibilité de certains produits, </b>vous pourrez choisir une livraison
                                partielle à l'étape suivante.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w-full col-span-2" id="moreThan150">

                    <button class="button group --has-leading w-full mt-4 --is-primary md:--is-secondary lg:w-auto"
                        type="button" wire:loading.class="--is-loading">

                        <div class="button__leading">
                            <svg class="h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512">
                                <!-- Font Awesome Free 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) -->
                                <path
                                    d="M433.941 129.941l-83.882-83.882A48 48 0 0 0 316.118 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h352c26.51 0 48-21.49 48-48V163.882a48 48 0 0 0-14.059-33.941zM272 80v80H144V80h128zm122 352H54a6 6 0 0 1-6-6V86a6 6 0 0 1 6-6h42v104c0 13.255 10.745 24 24 24h176c13.255 0 24-10.745 24-24V83.882l78.243 78.243a6 6 0 0 1 1.757 4.243V426a6 6 0 0 1-6 6zM224 232c-48.523 0-88 39.477-88 88s39.477 88 88 88 88-39.477 88-88-39.477-88-88-88zm0 128c-22.056 0-40-17.944-40-40s17.944-40 40-40 40 17.944 40 40-17.944 40-40 40z">
                                </path>
                            </svg>
                        </div>

                        <span class="button__caption">
                            Enregistrer mon panier
                        </span>


                        <span class="button__spinner">
                            <svg class="w-4 h-4 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10"
                                    stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                </path>
                            </svg>
                        </span>
                    </button>

                    <button class="button group --has-leading w-full mt-4 --is-secondary lg:w-auto lg:ml-4"
                        type="button">

                        <div class="button__leading">
                            <svg class="h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <!--! Font Awesome Free 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M144 208C126.3 208 112 222.2 112 239.1C112 257.7 126.3 272 144 272s31.1-14.25 31.1-32S161.8 208 144 208zM256 207.1c-17.75 0-31.1 14.25-31.1 32s14.25 31.1 31.1 31.1s31.1-14.25 31.1-31.1S273.8 207.1 256 207.1zM368 208c-17.75 0-31.1 14.25-31.1 32s14.25 32 31.1 32c17.75 0 31.99-14.25 31.99-32C400 222.2 385.8 208 368 208zM256 31.1c-141.4 0-255.1 93.12-255.1 208c0 47.62 19.91 91.25 52.91 126.3c-14.87 39.5-45.87 72.88-46.37 73.25c-6.624 7-8.373 17.25-4.624 26C5.818 474.2 14.38 480 24 480c61.49 0 109.1-25.75 139.1-46.25c28.87 9 60.16 14.25 92.9 14.25c141.4 0 255.1-93.13 255.1-207.1S397.4 31.1 256 31.1zM256 400c-26.75 0-53.12-4.125-78.36-12.12l-22.75-7.125L135.4 394.5c-14.25 10.12-33.87 21.38-57.49 29c7.374-12.12 14.37-25.75 19.87-40.25l10.62-28l-20.62-21.87C69.81 314.1 48.06 282.2 48.06 240c0-88.25 93.24-160 207.1-160s207.1 71.75 207.1 160S370.8 400 256 400z">
                                </path>
                            </svg>
                        </div>

                        <span class="button__caption">
                            Ajouter un commentaire
                        </span>


                        <span class="button__spinner">
                            <svg class="w-4 h-4 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10"
                                    stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                </path>
                            </svg>
                        </span>
                    </button>

                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
                        aria-modal="true" x-show="commentModal">
                        <div
                            class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                            <div class="fixed inset-0 transition-opacity bg-gray-900 bg-opacity-75" x-show="commentModal"
                                x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                                x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                aria-hidden="true"></div>

                            <!-- This element is to trick the browser into centering the modal contents. -->
                            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>

                            <div class="inline-block px-4 pt-5 pb-4 overflow-hidden text-left text-white align-bottom transition-all transform rounded-lg shadow-xl bg-secondary-700 sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6"
                                x-show="commentModal" x-transition:enter="ease-out duration-300"
                                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                x-transition:leave="ease-in duration-200"
                                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                @click.outside="commentModal = false">
                                <div>
                                    <div class="text-center sm:mt-4">
                                        <h3 class="text-lg font-medium leading-6" id="modal-title">
                                            Ajouter un commentaire
                                        </h3>
                                        <div class="mt-4">
                                            <textarea wire:model.defer="comment"
                                                class="block w-full h-full px-3 py-2 placeholder-opacity-50 border-transparent rounded-sm text-secondary-300 placeholder-secondary-300 focus:outline-none focus:ring-0 focus:border-transparent sm:text-sm bg-secondary-600"
                                                name="" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-5 sm:mt-6">
                                    <button class="button group --has-leading block mx-auto --is-primary"
                                        @click="await $wire.updateComment(); commentModal = false;" type="button"
                                        wire:loading.class="--is-loading">

                                        <div class="button__leading">
                                            <svg class="h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 448 512">
                                                <!-- Font Awesome Free 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) -->
                                                <path
                                                    d="M433.941 129.941l-83.882-83.882A48 48 0 0 0 316.118 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h352c26.51 0 48-21.49 48-48V163.882a48 48 0 0 0-14.059-33.941zM272 80v80H144V80h128zm122 352H54a6 6 0 0 1-6-6V86a6 6 0 0 1 6-6h42v104c0 13.255 10.745 24 24 24h176c13.255 0 24-10.745 24-24V83.882l78.243 78.243a6 6 0 0 1 1.757 4.243V426a6 6 0 0 1-6 6zM224 232c-48.523 0-88 39.477-88 88s39.477 88 88 88 88-39.477 88-88-39.477-88-88-88zm0 128c-22.056 0-40-17.944-40-40s17.944-40 40-40 40 17.944 40 40-17.944 40-40 40z">
                                                </path>
                                            </svg>
                                        </div>

                                        <span class="button__caption">
                                            Enregistrer le commentaire
                                        </span>


                                        <span class="button__spinner">
                                            <svg class="w-4 h-4 animate-spin" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24">
                                                <circle class="opacity-25" cx="12" cy="12" r="10"
                                                    stroke="currentColor" stroke-width="4">
                                                </circle>
                                                <path class="opacity-75" fill="currentColor"
                                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Livewire Component wire-end:WzCoRI0bJEBhvOkjrRMD -->
    </div>

    <script>
        var total = "<?php echo $total; ?>";
        console.log(parseInt(total) >= 0)
        console.log($("#moreThan150"));
        if (parseInt(total) > 150) {
            $("[id=moreThan150]").removeClass('hidden');
            $("[id=lessThan150]").addClass('hidden');
        } else {
            $("[id=moreThan150]").addClass('hidden');
            $("[id=lessThan150]").removeClass('hidden');
        }


        $(document).ajaxStart(function() {
            $("#loader").show();
        });

        $(document).ajaxComplete(function() {
            $("#loader").hide();
        });

        $(".remove-from-cart").click(function(e) {
            e.preventDefault();

            var ele = $(this);

            var parent_row = ele.parents("tr");

            var cart_total = $(".cart-total");

            if (confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.attr("data-id")
                    },
                    dataType: "json",
                    success: function(response) {
                        parent_row.remove();

                        $("span#status").html('<div class="alert alert-success">' + response.msg +
                            '</div>');

                        $("#header-bar").html(response.data);

                        cart_total.text(response.total);
                    },
                });
            }
        });
    </script>
@endsection
