@extends('layouts.app')

@section('content')
    <div class="w-full px-4 py-8 mx-auto max-w-big">
        <header class="flex flex-col items-center w-full px-2 mb-8">
            <ol class="flex justify-center text-xs uppercase">
                <li class="flex items-center h-8">
                    <a href="https://sqp.fr">Accueil</a>
                </li>

                <li class="flex items-center h-8 pl-2">
                    <span class="pr-2">
                        <svg class="h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg> </span>
                    <a href="https://sqp.fr/espace-client">Mon compte</a>
                </li>
            </ol>

            <h1 class="text-2xl font-bold uppercase text-primary-500">
                Factures, avoirs et échéances
            </h1>
        </header>

        <div class="grid grid-cols-4">
            <div class="hidden lg:block lg:col-span-1">
                <a href="{{ route("client.commandes") }}" target="_self" rel=""
                    class="flex items-center px-4 py-4 mb-1 transition rounded-sm shadow-md hover:!bg-primary-500 bg-secondary-600">
                    <svg class="w-10 h-10 mr-auto text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 24 24">
                        <path
                            d="M2.978 8.358 0 5.74 8.707 1l3.341 2.345L15.258 1 24 5.639l-3.014 2.68.014.008 3 4.115-3 1.634v4.122L12 23l-9-4.802v-4.115l1 .544v2.971l7.501 4.002v-7.889L9 17.345l-9-4.893 2.978-4.094zm9.523 5.366v7.875L20 17.598v-2.977l-5 2.724-2.499-3.621zM1.479 12.118l7.208 3.918 1.847-2.684L3.303 9.61l-1.824 2.508zm11.989 1.247 1.844 2.671 7.208-3.927-1.822-2.498-7.23 3.754zM3.991 8.84l8.01-4.43L20 8.847 12.029 13 3.991 8.84zM1.735 5.934l2.106 1.851 7.16-3.953L8.64 2.175 1.735 5.934zm11.273-2.052 7.076 3.901 2.176-1.935-6.918-3.671-2.334 1.705z">
                        </path>
                    </svg>
                    <p class="text-xs font-semibold text-center text-white uppercase ">Historique de commande</p>
                </a>
                <a href="{{ route("client.paniers") }}" target="_self" rel=""
                    class="flex items-center px-4 py-4 mb-1 transition rounded-sm shadow-md hover:!bg-primary-500 bg-secondary-600">
                    <svg class="w-10 h-10 mr-auto text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <path
                            d="M19.029 13H22l-.266 1h-2.992l.287-1zm.863-3h2.812L23 9h-2.821l-.287 1zm-.576 2h4.387L24 11h-4.396l-.288 1zM22 3l-.743 2h-1.929l-3.474 12H4.615L0 6h14.812l-.564 2H3.008l2.938 7h8.428l3.432-12H22zM7.5 18c-.828 0-1.5.672-1.5 1.5 0 .829.672 1.5 1.5 1.5S9 20.329 9 19.5c0-.828-.672-1.5-1.5-1.5zm5.9-7-.9 7c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5z">
                        </path>
                    </svg>
                    <p class="text-xs font-semibold text-center text-white uppercase ">Paniers</p>
                </a>
                <a href="{{ route("client.devis") }}" target="_self" rel=""
                    class="flex items-center px-4 py-4 mb-1 transition rounded-sm shadow-md hover:!bg-primary-500 bg-secondary-600">
                    <svg class="w-10 h-10 mr-auto text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <path
                            d="M13 6c3.469 0 2 5 2 5s5-1.594 5 2v9H8V6h5zm.827-2H6v20h16V12.158C22 9.766 16.989 4 13.827 4zM14 2l-3-2H2v22h2V2h10z">
                        </path>
                    </svg>
                    <p class="text-xs font-semibold text-center text-white uppercase ">Devis</p>
                </a>
                <a href="{{ route("client.cataloguesTarifs") }}" target="_self" rel=""
                    class="flex items-center px-4 py-4 mb-1 transition rounded-sm shadow-md hover:!bg-primary-500 bg-secondary-600">
                    <svg class="w-10 h-10 mr-auto text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <path
                            d="m23 19.586-2.832-2.832c.524-.79.832-1.735.832-2.754 0-2.761-2.239-5-5-5s-5 2.239-5 5 2.239 5 5 5c1.019 0 1.964-.308 2.754-.832L21.586 21 23 19.586zM16 17c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3zm7-2V3h1v12h-1zm-4-7.315V3h2v6.11c-.574-.586-1.251-1.068-2-1.425zM9 3v12H8V3h1zM4 3h2v12H4V3zM0 3h2v12H0V3zm17 4.08c-.328-.047-.66-.08-1-.08V3h1v4.08zm-6 2.03V3h3v4.295c-1.152.344-2.18.977-3 1.815z">
                        </path>
                    </svg>
                    <p class="text-xs font-semibold text-center text-white uppercase ">Tarifs et catalogues</p>
                </a>
                <a href="{{ route("client.adresses") }}" target="_self" rel=""
                    class="flex items-center px-4 py-4 mb-1 transition rounded-sm shadow-md hover:!bg-primary-500 bg-secondary-600">
                    <svg class="w-10 h-10 mr-auto text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <path
                            d="M17.492 15.432c-.433 0-.855-.087-1.253-.259l.467-1.082c.25.107.514.162.786.162.222 0 .441-.037.651-.11l.388 1.112c-.334.118-.683.177-1.039.177zM6.57 15.41c-.373 0-.741-.066-1.093-.195l.407-1.105c.221.081.451.122.686.122.26 0 .514-.05.754-.148l.447 1.09c-.382.157-.786.236-1.201.236zm8.67-.783-1.659-.945.583-1.024 1.66.945-.584 1.024zm-6.455-.02-.605-1.011 1.639-.981.605 1.011-1.639.981zm3.918-1.408c-.243-.101-.5-.153-.764-.153-.23 0-.457.04-.674.119l-.401-1.108c.346-.125.708-.188 1.075-.188.42 0 .83.082 1.217.244l-.453 1.086zm7.327-.163c-.534 0-.968.433-.968.968 0 .535.434.968.968.968.535 0 .969-.434.969-.968 0-.535-.434-.968-.969-.968zm-16.061 0c-.535 0-.969.433-.969.968 0 .535.434.968.969.968s.969-.434.969-.968c0-.535-.434-.968-.969-.968zM22 12.204v6.683l-4 2.479V17h-1v4.141l-4-2.885V15h-2v3.255L7 21.14V17H6v4.365l-4-2.479V5.592l4 2.479V12h1V8.073l4-2.886V10h2V5.187l1.577 1.138C14.238 5.624 14 4.807 14 3.801l.019-.345L12 2 6.455 6 0 2v18l6.455 4L12 20l5.545 4L24 20V8.382l-.039.047c-.831.982-1.614 1.918-1.961 3.775zm2-8.403C24 1.702 22.1 0 20 0s-4 1.702-4 3.801c0 3.121 3.188 3.451 4 8.199.812-4.748 4-5.078 4-8.199zM18.5 4c0-.829.672-1.5 1.5-1.5s1.5.671 1.5 1.5-.672 1.5-1.5 1.5-1.5-.671-1.5-1.5zm-.548 8c-.212-.992-.547-1.724-.952-2.334V12h.952z">
                        </path>
                    </svg>
                    <p class="text-xs font-semibold text-center text-white uppercase ">Adresses de livraison</p>
                </a>
                <a href="{{ route("client.factures") }}" target="_self" rel=""
                    class="flex items-center px-4 py-4 mb-1 transition rounded-sm shadow-md hover:!bg-primary-500 bg-primary-500 pointer-events-none">
                    <svg class="w-10 h-10 mr-auto" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <path
                            d="M6 12h10v1H6v-1zm7.816-3H6v1h9.047c-.45-.283-.863-.618-1.231-1zM6 7h6.5c-.134-.32-.237-.656-.319-1H6v1zm13 3.975v2.568C19 17.65 13 16 13 16s1.518 6-2.638 6H3V2h9.5c.312-.749.763-1.424 1.316-2H1v24h10.189C14.352 24 21 16.777 21 14.386V10.5c-.623.26-1.297.421-2 .475zM23 4.5C23 6.985 20.985 9 18.5 9S14 6.985 14 4.5 16.015 0 18.5 0 23 2.015 23 4.5zm-2.156-.882-.696-.696-2.116 2.169-.992-.941-.696.697 1.688 1.637 2.812-2.866z">
                        </path>
                    </svg>
                    <p class="text-xs font-semibold text-center uppercase ">Factures, avoirs et
                        échéances</p>
                </a>
                <a href="{{ route("client.informationsSociete") }}" target="_self" rel=""
                    class="flex items-center px-4 py-4 mb-1 transition rounded-sm shadow-md hover:!bg-primary-500 bg-secondary-600">
                    <svg class="w-10 h-10 mr-auto text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 24 24">
                        <path
                            d="M21 22h2v2H1v-2h2V0h18v22zm-10-3H9v4h2v-4zm4 0h-2v4h2v-4zm4-17H5v20h2v-5h10v5h2V2zM7 13h2v2H7v-2zm4 0h2v2h-2v-2zm4 0h2v2h-2v-2zm-8-3h2v2H7v-2zm4 0h2v2h-2v-2zm4 0h2v2h-2v-2zM7 7h2v2H7V7zm4 0h2v2h-2V7zm4 0h2v2h-2V7zM7 4h2v2H7V4zm4 0h2v2h-2V4zm4 0h2v2h-2V4z">
                        </path>
                    </svg>
                    <p class="text-xs font-semibold text-center text-white uppercase ">Informations société</p>
                </a>
                <a href="{{ route("client.utilisateurs") }}" target="_self" rel=""
                    class="flex items-center px-4 py-4 mb-1 transition rounded-sm shadow-md hover:!bg-primary-500 bg-secondary-600">
                    <svg class="w-10 h-10 mr-auto text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <path
                            d="M17.997 18h-.998c0-1.552.06-1.775-.88-1.993-1.438-.332-2.797-.645-3.293-1.729-.18-.396-.301-1.048.155-1.907 1.021-1.929 1.277-3.583.702-4.538-.672-1.115-2.707-1.12-3.385.017-.576.968-.316 2.613.713 4.512.465.856.348 1.51.168 1.908-.49 1.089-1.836 1.4-3.262 1.728-.982.227-.92.435-.92 2.002h-.995L6 17.377c0-1.259.1-1.985 1.588-2.329 1.682-.389 3.344-.736 2.545-2.209C7.767 8.474 9.457 6 11.998 6c2.492 0 4.227 2.383 1.867 6.839-.775 1.464.824 1.812 2.545 2.209 1.49.344 1.589 1.072 1.589 2.333l-.002.619zm4.81-2.214c-1.289-.298-2.489-.559-1.908-1.657 1.77-3.342.47-5.129-1.4-5.129-1.265 0-2.248.817-2.248 2.325 0 1.269.574 2.175.904 2.925h1.048c-.17-.75-1.466-2.562-.766-3.736.412-.692 1.704-.693 2.114-.012.38.631.181 1.812-.534 3.161-.388.733-.28 1.301-.121 1.648.305.666.977.987 1.737 1.208 1.507.441 1.368.042 1.368 1.48h.997l.002-.463c0-.945-.074-1.492-1.193-1.75zM.002 18h.997c0-1.438-.139-1.039 1.368-1.48.761-.221 1.433-.542 1.737-1.208.159-.348.267-.915-.121-1.648-.715-1.349-.914-2.53-.534-3.161.41-.682 1.702-.681 2.114.012.7 1.175-.596 2.986-.766 3.736h1.048c.33-.75.904-1.656.904-2.925C6.75 9.817 5.767 9 4.502 9c-1.87 0-3.17 1.787-1.4 5.129.581 1.099-.619 1.359-1.908 1.657C.074 16.044 0 16.591 0 17.537L.002 18z">
                        </path>
                    </svg>
                    <p class="text-xs font-semibold text-center text-white uppercase ">Gestion des utilisateurs
                    </p>
                </a>
                <a href="{{ route("client.sav") }}" target="_self" rel=""
                    class="flex items-center px-4 py-4 mb-1 transition rounded-sm shadow-md hover:!bg-primary-500 bg-secondary-600">
                    <svg class="w-10 h-10 mr-auto text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24">
                        <path
                            d="M23.27 19.743l-11.946-11.945c-.557-.557-.842-1.331-.783-2.115.115-1.485-.395-3.009-1.529-4.146-1.03-1.028-2.376-1.537-3.723-1.537-.507 0-1.015.072-1.505.216l3.17 3.17c.344 1.589-1.959 3.918-3.567 3.567l-3.169-3.17c-.145.492-.218 1-.218 1.509 0 1.347.51 2.691 1.538 3.721 1.135 1.136 2.66 1.646 4.146 1.53.783-.06 1.557.226 2.113.783l11.946 11.944c.468.468 1.103.73 1.763.73 1.368 0 2.494-1.108 2.494-2.494 0-.638-.244-1.276-.73-1.763zm-1.77 2.757c-.553 0-1-.448-1-1s.447-1 1-1 1 .448 1 1-.447 1-1 1zm-7.935-15.289l5.327-5.318c.584-.584 1.348-.877 2.113-.877.764 0 1.529.292 2.113.877.589.587.882 1.357.882 2.125 0 .764-.291 1.528-.873 2.11l-5.326 5.318-1.039-1.039 5.067-5.059c.169-.168.167-.441-.001-.609-.169-.169-.441-.17-.61-.001l-5.068 5.058-.89-.89 5.067-5.059c.169-.169.168-.441 0-.611-.169-.168-.443-.17-.611 0l-5.067 5.058-1.084-1.083zm-3.53 9.18l-5.227 5.185c-.227.229-.423.488-.574.774l-.301.58-2.1 1.07-.833-.834 1.025-2.146.58-.302c.286-.15.561-.329.79-.558l5.227-5.185 1.413 1.416z">
                        </path>
                    </svg>
                    <p class="text-xs font-semibold text-center text-white uppercase ">Service après-vente</p>
                </a>
                <a href="https://sqp.fr/espace-client/nasexchange" target="_blank" rel="noopener noreferrer"
                    class="flex items-center px-4 py-4 mb-1 transition rounded-sm shadow-md hover:!bg-primary-500 bg-secondary-600"
                    style="background-color: #299E8E">
                    <svg class="w-10 h-10 mr-auto text-white" height="473pt" viewBox="-17 0 473 473.54" width="473pt"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                        <path
                            d="m438.46875 187.96875v64.589844l-47.859375 4.601562c-4.640625 20.945313-13.039063 40.878906-24.789063 58.828125l30.558594 36.902344-34.558594 30.539063-51.398437-71.238282c50.765625-50.769531 50.765625-133.082031-.003906-183.847656-50.765625-50.769531-133.078125-50.769531-183.847657 0-50.765624 50.765625-50.765624 133.078125 0 183.847656l-49.660156 71.25-34.550781-30.5625 30.5625-36.898437c-11.753906-17.949219-20.152344-37.875-24.792969-58.820313l-47.859375-4.601562v-64.578125l47.859375-4.621094c4.53125-20.976563 12.945313-40.921875 24.800782-58.808594l-30.558594-36.902343 45.550781-45.558594 36.898437 30.570312c17.941407-11.757812 37.867188-20.160156 58.808594-24.800781l4.621094-47.859375h62.25l4.609375 47.859375c20.945313 4.640625 40.875 13.042969 58.820313 24.800781l36.898437-30.558594 45.550781 45.546876-30.558594 36.902343c11.851563 17.890625 20.257813 37.835938 24.789063 58.808594zm0 0">
                        </path>
                        <path
                            d="m239.269531 366.710938c24.25 7.320312 38.441407 28.367187 38.441407 53.527343-.230469 24.941407-14.191407 46.210938-38.660157 53.300781l3.230469-38.890624-.292969-.21875c-11.171875-8.5-26.667969-8.410157-37.738281.21875h-.011719l3.011719 38.671874c-27.460938-6.871093-40.949219-28.140624-40.949219-53.308593-.230469-23.101563 15.089844-43.011719 33.167969-51.472657v-131.507812c-24.25-7.320312-38.4375-28.359375-38.4375-53.53125s13.957031-46.441406 38.4375-53.53125l-3.238281 38.890625.300781.230469c11.167969 8.5 26.660156 8.410156 37.730469-.21875l.007812-.011719-3.007812-38.660156c27.910156 6.410156 41.410156 27.679687 41.410156 52.851562 0 22.871094-15.101563 43.007813-33.402344 51.699219zm0 0">
                        </path>
                    </svg>
                    <p class="text-xs font-semibold text-center text-white uppercase ">NASEXCHANGE</p>
                </a>

                <a href="{{ route("logout") }}"
                    class="flex items-center px-4 py-4 mb-1 transition rounded-sm shadow-md bg-secondary-600 hover:bg-primary-500">
                    <svg class="w-10 h-10 mr-auto text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 24 24">
                        <path
                            d="M11 21h8.033v-2l1-1v4H11v2L1 21V3l10-3v2h9.033v5l-1-1V3H11v18zm-1 1.656V1.344l-8 2.4v16.512l8 2.4zM21.086 12l-3.293-3.293L18.5 8l4.5 4.5-4.5 4.5-.707-.707L21.086 13h-9.053v-1h9.053z">
                        </path>
                    </svg>
                    <p class="text-xs font-semibold text-center text-white uppercase">Déconnexion</p>
                </a>
            </div>


            <div class="px-4 col-span-full lg:col-span-3">
                <div wire:id="9E88EXvXCos9vKwQ1S8L" class="grid items-center w-full grid-cols-2 gap-4"
                    x-data="{ view_details: false }" x-init="$wire.loadItems = true">

                    <div class="grid items-center justify-between w-full grid-cols-1 gap-4 xl:grid-cols-5 col-span-full">
                        <div class="flex items-end justify-center h-full pb-4 space-x-8 xl:justify-start xl:col-span-2">
                            <div class="flex items-center">
                                <span class="inline-block w-4 h-4 rounded-full bg-primary-400"></span>
                                <span class="ml-2 text-xs uppercase">Réglée</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-4 h-4 rounded-full bg-tertiary-400"></span>
                                <span class="ml-2 text-xs uppercase">En cours</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-4 h-4 bg-red-400 rounded-full"></span>
                                <span class="ml-2 text-xs uppercase">Non réglée</span>
                            </div>
                        </div>

                        <div class="w-full col-span-full xl:col-span-1">
                            <label class="flex flex-col py-2 text-xs font-medium uppercase sm:mt-px"
                                for="month">Mois</label>
                            <input
                                class="block w-full h-8 px-4 py-2 placeholder-opacity-50 border-transparent rounded-sm text-secondary-300 placeholder-secondary-300 focus:outline-none focus:ring-0 focus:border-transparent sm:text-sm bg-secondary-600 flatpickr-input"
                                id="month" wire:model="month" x-monthpicker=""
                                placeholder="website/customer_area/livewire/invoices/listing.actions.monthfilter"
                                type="text" readonly="readonly">
                        </div>

                        <div class="w-full col-span-full xl:col-span-1">
                            <label class="flex flex-col py-2 text-xs font-medium uppercase sm:mt-px"
                                for="state">Type</label>
                            <select
                                class="block w-full h-8 px-4 py-2 placeholder-opacity-50 border-transparent rounded-sm text-secondary-300 placeholder-secondary-300 focus:outline-none focus:ring-0 focus:border-transparent sm:text-sm bg-secondary-600"
                                id="state" wire:model="filters.state">
                                <option value=""></option>
                                <option value="Facture">Facture</option>
                                <option value="Avoir">Avoir</option>
                            </select>
                        </div>

                        <div class="w-full col-span-full xl:col-span-1">
                            <label class="flex flex-col py-2 text-xs font-medium text-white uppercase sm:mt-px"
                                for="search">Recherche</label>
                            <input
                                class="block w-full h-8 px-4 py-2 placeholder-opacity-50 border-transparent rounded-sm col-span-full lg:col-span-1 text-secondary-300 placeholder-secondary-300 focus:outline-none focus:ring-0 focus:border-transparent sm:text-sm bg-secondary-600"
                                id="search" wire:model="search" type="text"
                                placeholder="Ex: n° facture, référence, ...">
                        </div>
                    </div>

                    <div class="relative mt-4 overflow-y-auto col-span-full">

                        <table class="w-full mb-4">
                            <tbody>
                                <tr>
                                    <td colspan="5">
                                        <div
                                            class="flex flex-col items-center justify-center w-full mb-16 bg-secondary-700">
                                            <span class="mt-4 text-sm">Aucune facture</span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="p-2 overflow-x-hidden">
                        </div>

                    </div>


                    <div class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
                        aria-modal="true" x-show="view_details" style="display: none;">
                        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:p-0">

                            <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true"
                                @click.self="view_details = !view_details; $wire.closeDetails()" x-show="view_details"
                                x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                                x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                style="display: none;"></div>

                            <!-- This element is to trick the browser into centering the modal contents. -->
                            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>

                            <div wire:id="jw7sAAy84qzm8c6JIvII"
                                class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-sm shadow-xl sm:my-8 sm:align-middle sm:max-w-7xl sm:w-full"
                                x-show="view_details" @invoice-opened="view_details=true"
                                x-transition:enter="ease-out duration-300"
                                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                x-transition:leave="ease-in duration-200"
                                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                style="display: none">
                                <div class="px-4 pt-5 pb-4 bg-secondary-700 sm:p-6 sm:pb-4">

                                    <h3 class="text-lg font-medium leading-6 text-center" id="modal-title">
                                        Détails de la facture n.
                                    </h3>

                                    <div class="flex flex-wrap justify-between mt-4 space-y-4">

                                        <div class="flex justify-center w-full space-x-2 md:w-auto">
                                            <button class="button group px-4 --is-secondary md:w-auto" type="button"
                                                wire:click="downloadInvoice([])" wire:target="downloadInvoice"
                                                wire:loading.class="--is-loading" title="Télécharger la facture">


                                                <span class="button__caption">
                                                    <span class="sr-only">Télécharger la facture</span>
                                                    <svg class="w-6 h-6" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M6 12h10v1H6v-1zm7.816-3H6v1h9.047c-.45-.283-.863-.618-1.231-1zM6 7h6.5c-.134-.32-.237-.656-.319-1H6v1zm13 3.975v2.568C19 17.65 13 16 13 16s1.518 6-2.638 6H3V2h9.5c.312-.749.763-1.424 1.316-2H1v24h10.189C14.352 24 21 16.777 21 14.386V10.5c-.623.26-1.297.421-2 .475zM23 4.5C23 6.985 20.985 9 18.5 9S14 6.985 14 4.5 16.015 0 18.5 0 23 2.015 23 4.5zm-2.156-.882-.696-.696-2.116 2.169-.992-.941-.696.697 1.688 1.637 2.812-2.866z">
                                                        </path>
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
                                            </button>
                                        </div>

                                    </div>

                                    <div class="grid grid-cols-1 mt-4 gap-y-6 gap-x-4">

                                        <div class="w-full">
                                            <div class="w-full">
                                                <table class="hidden w-full rounded md:table" style="">
                                                    <tbody>
                                                        <tr>
                                                            <th class="text-xs font-medium text-left text-white uppercase">
                                                                <div class="px-4 py-2">Produit</div>
                                                            </th>
                                                            <th
                                                                class="text-xs font-medium text-right text-white uppercase whitespace-nowrap">
                                                                <div class="px-4 py-2">
                                                                    Prix unitaire HT
                                                                </div>
                                                            </th>
                                                            <th
                                                                class="text-xs font-medium text-center text-white uppercase">
                                                                <div class="px-4 py-2">
                                                                    Quantité
                                                                </div>
                                                            </th>
                                                            <th
                                                                class="text-xs font-medium text-right text-white uppercase">
                                                                <div class="px-4 py-2">
                                                                    Total HT
                                                                </div>
                                                            </th>
                                                        </tr>

                                                    </tbody>
                                                </table>

                                                <div class="block md:hidden">
                                                    <ul class="grid gap-4 mx-auto mt-4">
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="w-full mt-8 ml-auto lg:w-1/3">
                                            <div class="w-full px-4 py-4 text-white rounded-sm shadow-md bg-secondary-600">
                                                <table class="w-full">
                                                    <tbody>
                                                        <tr>
                                                            <td class="py-2">Total HT</td>
                                                            <th class="text-right"> € HT</th>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-2 text-xl">Total TTC</td>
                                                            <th class="text-xl text-right"> € TTC</th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div
                                    class="flex items-center justify-between w-full px-4 py-8 bg-secondary-600 sm:px-6 sm:flex-row-reverse">
                                    <button class="button group --has-trailing --is-primary --is-small" id="order-again-"
                                        wire:click="orderAgain([])" wire:target="orderAgain"
                                        wire:loading.class="--is-loading">


                                        <span class="button__caption">
                                            <span class="w-full">
                                                Créer un panier à partir de cette facture
                                            </span>
                                        </span>

                                        <span class="button__trailing">
                                            <svg class="h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
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

                                    <button class="button group --has-leading mt-4 --is-secondary --is-small sm:mt-0"
                                        @click.prevent="view_details = !view_details; $wire.cancel()">

                                        <div class="button__leading">
                                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>

                                        <span class="button__caption">
                                            <span class="w-full">
                                                Annuler
                                            </span>
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

                            <!-- Livewire Component wire-end:jw7sAAy84qzm8c6JIvII -->
                        </div>
                    </div>

                </div>

                <!-- Livewire Component wire-end:9E88EXvXCos9vKwQ1S8L -->
            </div>
        </div>
    </div>
@endsection
