@extends('layouts.app')

@section('content')
    <?php $selectedAddress = auth()
        ->user()
        ->adressesLivraison->first(); ?>
    <link rel="stylesheet" href="{{ asset('dist/css/jquery.toast.min.css') }}">
    <nav aria-label="Progress" class="mx-auto mt-4 mb-8">
        <ol role="list" class="flex items-center justify-between w-full p-2 sm:justify-center">
            <li class="relative sm:mx-4">
                <a href="{{ route('mon-panier') }}"
                    class="relative flex items-center justify-center w-24 h-24 rounded-full pointer-events-none bg-secondary-600">
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
                    class="relative flex items-center justify-center w-24 h-24 rounded-full bg-primary-400 pointer-events-none hover:bg-primary-600">
                    <svg class="w-10 h-10 text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
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
                    <svg class="w-10 h-10 text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
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
                    <svg class="w-10 h-10 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
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
    <form action="{{ route('commandes.store') }}" method="post">
        @csrf
        <div wire:id="cXJf8GL7qfqpiGoSCPWu" class="grid grid-cols-2 gap-4 px-4 mr-4 ml-4">
            <div class="grid items-center grid-cols-2 gap-4 text-sm col-span-full">
                <label class="col-span-2 text-white md:col-span-1" for="reference">Vous souhaitez définir <b>une référence
                        client à votre commande</b> ?</label>
                <div class="col-span-2 md:col-span-1">
                    <input
                        class="block w-full h-full px-4 py-2 placeholder-opacity-50 border-transparent rounded-sm text-secondary-300 placeholder-secondary-300 focus:outline-none focus:ring-0 focus:border-transparent sm:text-sm bg-secondary-600"
                        id="reference" type="text" placeholder="Ex: Commande XXX/2021" name="referenceClient">
                </div>
            </div>
            <div class="grid items-center grid-cols-2 gap-4 mt-8 text-sm col-span-full">
                <label class="col-span-2 text-white md:col-span-1" for="partialShipping">En cas d'indisponibilité de
                    certains
                    produits, <b>acceptez-vous une livraison partielle</b> ?</label>
                <div class="flex col-span-2 md:col-span-1">
                    <div class="flex items-center mr-8">
                        <input value="1" id="partialShipping" name="livraisonPartielle" type="radio"
                            class="w-4 h-4 border-gray-300 text-primary-600 focus:ring-primary-500">
                        <label for="partialShipping" class="block ml-2 text-sm font-medium text-white">
                            Oui
                        </label>
                    </div>
                    <div class="flex items-center">
                        <input value="0" id="partialShipping" name="livraisonPartielle" type="radio"
                            class="w-4 h-4 border-gray-300 text-primary-600 focus:ring-primary-500">
                        <label for="partialShipping" class="block ml-2 text-sm font-medium text-white">
                            Non
                        </label>
                    </div>
                </div>
            </div>

            <div class="col-span-2 mt-12 lg:col-span-1">
                <div class="flex flex-col items-center w-full px-2 md:items-start">
                    <h3 class="text-lg font-bold text-white uppercase">
                        Mode de livraison
                    </h3>
                    <hr class="w-16 mt-2 border-primary-400">
                </div>

                <div wire:id="PMFLy0YYHi9IKlUR2eeY" class="grid grid-cols-2 gap-4 mt-4">
                    <input type="text" id="type" name="type" hidden value="Livraison" />
                    <input type="text" name="adresse_livraison_id" id="adresseLivraisonId" hidden
                        value="{{ auth()->user()->adressesLivraison->first()->id }}">
                    <label id="locale" for="collecting"
                        class="relative flex flex-col items-center col-span-full sm:col-span-1 rounded-sm py-8 cursor-pointer bg-secondary-600 shadow-lg hover:bg-secondary-700">
                        <div class="flex items-center justify-center w-32 h-32 mb-4 rounded-full  bg-secondary-700">
                            <img class="w-auto h-8" src="{{ asset('assets/img/DGTEC Logo blue.png') }}" alt="">
                        </div>
                        <p class="my-2 text-sm font-medium text-white uppercase">Enlèvement entrepôt DGTEC</p>
                        <p class="mt-auto text-2xl font-normal text-white uppercase">Gratuit</p>
                    </label>

                    <label for="shipping" id="livraison"
                        class="mt-8 sm:mt-0 relative flex flex-col items-center col-span-full sm:col-span-1 rounded-sm py-8 pointer-events-none bg-primary-400">
                        <div class="flex items-center justify-center w-32 h-32 mb-4 rounded-full  bg-secondary-500">
                            <svg class="w-12 h-12 text-primary-100" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"
                                viewBox="0 0 24 24">
                                <path
                                    d="M5 11v1h8V5H3V4c0-.552.448-1 1-1h10c.552 0 1 .448 1 1v2h4.667c1.117 0 1.6.576 1.936 1.107.594.94 1.536 2.432 2.109 3.378.188.312.288.67.288 1.035V16c0 1.089-.743 2-2 2h-1c0 1.656-1.344 3-3 3s-3-1.344-3-3h-4c0 1.656-1.344 3-3 3s-3-1.344-3-3H4c-.552 0-1-.448-1-1v-6H1V9h7v2H5zm3 5.8c.662 0 1.2.538 1.2 1.2 0 .662-.538 1.2-1.2 1.2-.662 0-1.2-.538-1.2-1.2 0-.662.538-1.2 1.2-1.2zm10 0c.662 0 1.2.538 1.2 1.2 0 .662-.538 1.2-1.2 1.2-.662 0-1.2-.538-1.2-1.2 0-.662.538-1.2 1.2-1.2zM15 14H5v2h.765c.549-.614 1.347-1 2.235-1 .888 0 1.686.386 2.235 1h5.53c.549-.614 1.347-1 2.235-1 .888 0 1.686.386 2.235 1H22v-4.575l-1.711-2.929C20.11 8.189 19.781 8 19.426 8H15v6zm1-5v3h5l-1.427-2.496c-.178-.312-.509-.504-.868-.504H16zM0 6h8v2H0V6z">
                                </path>
                            </svg>
                        </div>
                        <p class="mt-2 text-sm font-medium text-white uppercase">Livraison express 24/48h</p>
                        <p class="my-2 text-xs font-medium text-white  uppercase">CHRONOPOST</p>
                        <p class="mt-auto text-2xl font-normal text-white uppercase"> 12 DT </p>
                    </label>
                </div>

                <!-- Livewire Component wire-end:PMFLy0YYHi9IKlUR2eeY -->
            </div>

            <div class="col-span-2 mt-12 lg:col-span-1">
                <div class="flex flex-col items-center w-full px-2 md:items-start">
                    <h3 class="text-lg font-bold text-white uppercase">
                        Adresse
                    </h3>
                    <hr class="w-16 mt-2 border-primary-500">

                    <div class="flex flex-col items-center w-full mt-4 text-white">
                        <table class="w-full text-xs font-medium uppercase">
                            <tbody>
                                <tr>
                                    <td class="py-1 opacity-75">Destinataire</td>
                                    <td id="destinataire">
                                        @if (auth()->user()->adressesLivraison->first())
                                            {{ auth()->user()->adressesLivraison->first()->destinataire }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-1 opacity-75">Adresse</td>
                                    <td id="adresse">
                                        @if (auth()->user()->adressesLivraison->first())
                                            {{ auth()->user()->adressesLivraison->first()->adresse }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-1 opacity-75">Complément</td>
                                    <td id="complement">
                                        @if (auth()->user()->adressesLivraison->first())
                                            {{ auth()->user()->adressesLivraison->first()->complement }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-1 opacity-75">Code postal</td>
                                    <td id="code_postal">
                                        @if (auth()->user()->adressesLivraison->first())
                                            {{ auth()->user()->adressesLivraison->first()->code_postal }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-1 opacity-75">Ville</td>
                                    <td id="ville">
                                        @if (auth()->user()->adressesLivraison->first())
                                            {{ auth()->user()->adressesLivraison->first()->ville }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-1 opacity-75">Pays</td>
                                    <td id="pays">
                                        @if (auth()->user()->adressesLivraison->first())
                                            {{ auth()->user()->adressesLivraison->first()->pays }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

            <div class="mt-8 col-span-full" id="gestionAdresses">
                <div class="flex flex-col items-center w-full mb-8 text-white col-span-full md:items-start">
                    <h3 class="text-lg font-bold uppercase">
                        Gestion des adresses
                    </h3>
                    <hr class="w-16 mt-2 border-primary-500">
                </div>

                <div wire:id="Qi7qQpuQpCjJQJ8uhPK9" class="grid items-center grid-cols-2 gap-4 text-white">

                    <div class="order-first col-span-full sm:col-span-1">
                        <input
                            class="block w-full h-full px-4 py-2 placeholder-opacity-50 border-transparent rounded-sm text-secondary-300 placeholder-secondary-300 focus:outline-none focus:ring-0 focus:border-transparent sm:text-sm bg-secondary-600"
                            id="search" wire:model="searchAddress" type="text" placeholder="Rechercher">
                    </div>

                    <div class="flex order-last col-span-full md:order-first md:col-span-1">
                        <button class="button group --has-trailing ml-auto  " id="addAddressButton"
                            onclick="return false;">


                            <span class="button__caption">
                                <span class="w-full">Ajouter une adresse de dropshipment</span>
                            </span>

                            <span class="button__trailing">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path>
                                </svg>
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
                    </div>

                    <div class="flex mt-4 overflow-y-auto h-96 col-span-full">
                        <table class="w-full">
                            <tbody>
                                @foreach (auth()->user()->adressesLivraison as $adresse)
                                    <tr
                                        class="w-full bg-secondary-600 @if (auth()->user()->adressesLivraison->first() == $adresse) bg-opacity-75 @else bg-opacity-50 @endif ">
                                        <td>
                                            <div class="py-8 pl-12 text-center md:text-left">

                                                {{ $adresse->destinataire }}


                                                <div class="mt-4 text-xs text-secondary-300 md:hidden">
                                                    {{ $adresse->destinataire }} <br>
                                                    {{ $adresse->adresse }} <br>
                                                    {{ $adresse->complement }} <br>
                                                    {{ $adresse->code_postal }} / {{ $adresse->ville }} /
                                                    {{ $adresse->pays }}
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                        </td>

                                        <td class="text-xs text-secondary-300">
                                            <div class="hidden md:block">
                                                {{ $adresse->destinataire }} <br>
                                                {{ $adresse->adresse }} <br>
                                                {{ $adresse->complement }} <br>
                                                {{ $adresse->code_postal }} / {{ $adresse->ville }} /
                                                {{ $adresse->pays }}
                                            </div>
                                        </td>

                                        <td class="w-0">
                                            <div class="flex justify-center w-64 py-8 pr-12">
                                                @if ($selectedAddress == $adresse)
                                                    <div id="selectedAddress">
                                                        <svg class="w-8 h-8 text-green-500"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                            aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M5 13l4 4L19 7">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                @else
                                                    <button id="selectAddress"
                                                        class="button group whitespace-nowrap --is-secondary --is-small --is-rounded"
                                                        data-destinataire="{{ $adresse->destinataire }}"
                                                        data-adresse="{{ $adresse->adresse }}"
                                                        data-complement="{{ $adresse->complement }}"
                                                        data-code_postal="{{ $adresse->code_postal }}"
                                                        data-ville="{{ $adresse->ville }}" data-pays={{ $adresse->pays }}
                                                        data-id={{ $adresse->id }}>


                                                        <span class="button__caption">
                                                            <span class="w-full">Choisir cette adresse</span>
                                                        </span>


                                                        <span class="button__spinner">
                                                            <svg class="w-4 h-4 animate-spin"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24">
                                                                <circle class="opacity-25" cx="12" cy="12"
                                                                    r="10" stroke="currentColor"
                                                                    stroke-width="4">
                                                                </circle>
                                                                <path class="opacity-75" fill="currentColor"
                                                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                @endif

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>

            </div>

            <div class="flex flex-col justify-center mt-8 col-span-full sm:flex-row sm:justify-between">
                <button id="saveDevis" class="button group --has-leading mt-4 --is-secondary"
                    wire:loading.class="--is-loading">

                    <div class="button__leading">
                        <svg class="h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512">
                            <path
                                d="M433.941 129.941l-83.882-83.882A48 48 0 0 0 316.118 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h352c26.51 0 48-21.49 48-48V163.882a48 48 0 0 0-14.059-33.941zM272 80v80H144V80h128zm122 352H54a6 6 0 0 1-6-6V86a6 6 0 0 1 6-6h42v104c0 13.255 10.745 24 24 24h176c13.255 0 24-10.745 24-24V83.882l78.243 78.243a6 6 0 0 1 1.757 4.243V426a6 6 0 0 1-6 6zM224 232c-48.523 0-88 39.477-88 88s39.477 88 88 88 88-39.477 88-88-39.477-88-88-88zm0 128c-22.056 0-40-17.944-40-40s17.944-40 40-40 40 17.944 40 40-17.944 40-40 40z">
                            </path>
                        </svg>
                    </div>

                    <span class="button__caption">
                        <span class="w-full">Enregistrer le devis</span>
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

                <button class="button group --has-trailing mt-4 --is-tertiary --translate-icon-on-hover"
                    wire:loading.class="--is-loading">


                    <span class="button__caption">
                        Terminer la commande
                    </span>

                    <span class="button__trailing">
                        <svg class="h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
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
            </div>
        </div>
    </form>

    <!-- Modal -->
    <form action="{{ route('adresseLivraison.store') }}" method="post" id="addAddressForm" class="container">
        @csrf
        <div class="form-group container">
            <label for="formGroupExampleInput">Destinataire</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Destinataire"
                name="name">
        </div>

        <div class="form-group container">
            <label for="formGroupExampleInput2">Adresse</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Adresse"
                name="address1">
        </div>

        <div class="form-group container">
            <label for="formGroupExampleInput2">Complément</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Complément"
                name="address2">
        </div>

        <div class="form-group container">
            <label for="formGroupExampleInput2">Code Postal</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Code Postal"
                name="postcode">
        </div>

        <div class="form-group container">
            <label for="formGroupExampleInput2">Ville</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ville" name="city">
        </div>

        <div class="form-group container">
            <label for="formGroupExampleInput2">Pays</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Pays" name="country">
        </div>
        <button type="submit" id="submitAddressForm" class="btn button bg-primary-400 flex mt-4 ml-4">Ajouter</button>
    </form>

    <script src="{{ asset('dist/js/jquery.toast.min.js') }}"></script>

    <script>
        $("#addAddressForm").hide();
        $("#livraison").append(
            '<div class="absolute bottom-0 flex w-10 h-10 -mb-5 bg-white rounded-full"> <svg class="w-8 h-8 m-auto text-primary-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg></div>'
        )
        $('#locale').click(function(e) {
            e.preventDefault();
            $('#gestionAdresses').hide();
            $('#locale').removeClass('cursor-pointer bg-secondary-600 shadow-lg hover:bg-secondary-700');
            $('#locale').addClass('bg-primary-400 pointer-events-none');
            $('#livraison').removeClass('bg-primary-400 pointer-events-none');
            $('#livraison').addClass('cursor-pointer bg-secondary-600 shadow-lg hover:bg-secondary-700');
            $("#locale").append(
                '<div class="absolute bottom-0 flex w-10 h-10 -mb-5 bg-white rounded-full"> <svg class="w-8 h-8 m-auto text-primary-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg></div>'
            )
            $('#livraison').find('div:last').remove();
            $("#type").val("En Local");
        });

        $('#livraison').click(function(e) {
            e.preventDefault();
            $('#gestionAdresses').show();
            $('#livraison').removeClass('cursor-pointer bg-secondary-600 shadow-lg hover:bg-secondary-700');
            $('#livraison').addClass('bg-primary-400 pointer-events-none');
            $('#locale').removeClass('bg-primary-400 pointer-events-none');
            $('#locale').addClass('cursor-pointer bg-secondary-600 shadow-lg hover:bg-secondary-700');
            $("#livraison").append(
                '<div class="absolute bottom-0 flex w-10 h-10 -mb-5 bg-white rounded-full"> <svg class="w-8 h-8 m-auto text-primary-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg></div>'
            )
            $('#locale').find('div:last').remove();
            $("#type").val("Livraison");
        });

        $('#addAddressButton').click(function() {
            $("#addAddressForm").show();
        });

        $('#submitAddressForm').click(function() {
            $("addAddressForm").submit();
        });

        $("#saveDevis").click(function(e) {
            e.preventDefault();
            $.ajax({
                url: '{{ route('devis.store') }}',
                method: "POST",
                data: {
                    _token: '{{ csrf_token() }}'
                },
                dataType: "json",
                success: function(response) {
                    $.toast({
                        text: response.msg, // Text that is to be shown in the toast
                        heading: 'Panier', // Optional heading to be shown on the toast
                        icon: 'success', // Type of toast icon
                        showHideTransition: 'fade', // fade, slide or plain
                        allowToastClose: true, // Boolean value true or false
                        hideAfter: 3000, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
                        stack: 5, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
                        position: 'top-right', // top-right or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values



                        textAlign: 'center', // Text alignment i.e. left, right or center
                        loader: true, // Whether to show loader or not. True by default
                        loaderBg: '#9EC600', // Background color of the toast loader
                        beforeShow: function() {}, // will be triggered before the toast is shown
                        afterShown: function() {}, // will be triggered after the toat has been shown
                        beforeHide: function() {}, // will be triggered before the toast gets hidden
                        afterHidden: function() {} // will be triggered after the toast has been hidden
                    });
                },
                error: function(response) {
                    $.toast({
                        text: response.msg, // Text that is to be shown in the toast
                        heading: 'Panier', // Optional heading to be shown on the toast
                        icon: 'error', // Type of toast icon
                        showHideTransition: 'fade', // fade, slide or plain
                        allowToastClose: true, // Boolean value true or false
                        hideAfter: 3000, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
                        stack: 5, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
                        position: 'top-right', // top-right or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values



                        textAlign: 'center', // Text alignment i.e. left, right or center
                        loader: true, // Whether to show loader or not. True by default
                        loaderBg: '#9EC600', // Background color of the toast loader
                        beforeShow: function() {}, // will be triggered before the toast is shown
                        afterShown: function() {}, // will be triggered after the toat has been shown
                        beforeHide: function() {}, // will be triggered before the toast gets hidden
                        afterHidden: function() {} // will be triggered after the toast has been hidden
                    });
                }
            });
        });

        $("#selectAddress").click(function(e) {
            e.preventDefault();
            $('#adresse').html($(this).data('adresse'));
            $('#code_postal').html($(this).data('code_postal'));
            $('#ville').html($(this).data('ville'));
            $('#pays').html($(this).data('pays'));
            $('#complement').html($(this).data('complement'));
            $("#destinataire").html($(this).data('destinataire'));

            $("#selectAddress").html(
                '<svg class="w-8 h-8 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>'
            )
            $("#selectAddress").removeAttr('id');
            $("#selectedAddress").html(`<button id="selectAddress" onClick="return false;" class="button group whitespace-nowrap --is-secondary --is-small --is-rounded" data-id="${$(this).data('id')}" data-destinataire="${$(this).data('destinataire')}" data-adresse="${$(this).data('adresse')}" data-complement="${$(this).data('complement')}" data-code_postal="${$(this).data('code_postal')}" data-ville="${$(this).data('ville')}" data-pays="${$(this).data('adresse')}">                                                    <span class="button__caption"><span class="w-full">Choisir cette adresse</span></span> <span class="button__spinner"> <svg class="w-4 h-4 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg></span></button>
            `);
            $("#adresseLivraisonId").val($(this).data('id'));
        })
    </script>
@endsection
