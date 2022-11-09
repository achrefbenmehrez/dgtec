<div class="grid flex-wrap items-center justify-between w-full grid-cols-1 gap-4 lg:flex">
    <div class="text-lg text-white"><span class="text-primary-500">1</span>
        produits</div>

    <div class="relative text-left lg:ml-4">
        <button class="button group w-full px-4 --is-secondary" type="button">


            <span class="button__caption">
                <div class="w-full pr-4 overflow-hidden text-left normal-case text-ellipsis whitespace-nowrap">
                    20 produits par page</div>
                <span
                    class="absolute top-0 inline-flex items-center justify-center h-full ml-2 -mr-2 transition-transform transform right-4">
                    <svg class="h-5 text-primary-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg> </span>
            </span>


            <span class="button__spinner">
                <svg class="w-4 h-4 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                        stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg>
            </span>
        </button>

        <div x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100"
            x-transition:leave=" transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end=" transform opacity-0 scale-95" style="display: none"
            class="absolute right-0 z-10 mt-2 origin-top-left rounded-sm shadow-lg bg-secondary-600 ring-1 ring-black ring-opacity-5 focus:outline-none"
            role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">

            <div class="">
                <button type="button" for="per-page-10"
                    class="flex items-center justify-between px-4 py-3 text-sm text-left cursor-pointer w-52 text-secondary-300 hover:bg-secondary-700">
                    <div class="w-full pr-2 text-right">
                        <span class="font-bold text-white">10</span> produits par page
                    </div>
                    <div class="w-4 mr-0 shrink-0">
                    </div>
                </button>
                <button type="button" for="per-page-20"
                    class="flex items-center justify-between px-4 py-3 text-sm text-left cursor-pointer w-52 text-secondary-300 hover:bg-secondary-700">
                    <div class="w-full pr-2 text-right">
                        <span class="font-bold text-white">20</span> produits par page
                    </div>
                    <div class="w-4 mr-0 shrink-0">
                        <svg class="h-4 text-primary-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                </button>
                <button type="button" for="per-page-50"
                    class="flex items-center justify-between px-4 py-3 text-sm text-left cursor-pointer w-52 text-secondary-300 hover:bg-secondary-700">
                    <div class="w-full pr-2 text-right">
                        <span class="font-bold text-white">50</span> produits par page
                    </div>
                    <div class="w-4 mr-0 shrink-0">
                    </div>
                </button>
                <button type="button" for="per-page-100"
                    class="flex items-center justify-between px-4 py-3 text-sm text-left cursor-pointer w-52 text-secondary-300 hover:bg-secondary-700">
                    <div class="w-full pr-2 text-right">
                        <span class="font-bold text-white">100</span> produits par page
                    </div>
                    <div class="w-4 mr-0 shrink-0">
                    </div>
                </button>
            </div>
        </div>
    </div>

    <div class="relative text-left lg:mr-auto lg:ml-4" x-data="{ 'open': false }">
        <button class="button group w-full px-4 --is-secondary" type="button">


            <span class="button__caption">
                <div class="w-full pr-4 overflow-hidden text-left normal-case text-ellipsis whitespace-nowrap">
                    Tri: Par défaut</div>
                <span
                    class="absolute top-0 inline-flex items-center justify-center h-full ml-2 -mr-2 transition-transform transform right-4">
                    <svg class="h-5 text-primary-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg> </span>
            </span>


            <span class="button__spinner">
                <svg class="w-4 h-4 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                        stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg>
            </span>
        </button>

        <div @click.outside="open = false" x-show="open" x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100" "="" x-transition:leave=" transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end=" transform opacity-0 scale-95" style="display: none" class="absolute left-0 z-10 mt-2 origin-top-left rounded-sm shadow-lg bg-secondary-600 ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">

            <div class="">
                <button type="button" class="flex items-center justify-between px-4 py-3 text-sm text-left cursor-pointer w-52 text-secondary-300 hover:bg-secondary-700">
                    <div class="w-full pr-2 text-right">
                        Tri: <span class="font-bold text-white">Par défaut</span>
                    </div>
                    <div class="w-4 mr-0 shrink-0">
                        <svg class="h-4 text-primary-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                </button>
                <button type="button" class="flex items-center justify-between px-4 py-3 text-sm text-left cursor-pointer w-52 text-secondary-300 hover:bg-secondary-700">
                    <div class="w-full pr-2 text-right">
                        Tri: <span class="font-bold text-white">Prix croissant</span>
                    </div>
                    <div class="w-4 mr-0 shrink-0">
                    </div>
                </button>
                <button type="button" class="flex items-center justify-between px-4 py-3 text-sm text-left cursor-pointer w-52 text-secondary-300 hover:bg-secondary-700">
                    <div class="w-full pr-2 text-right">
                        Tri: <span class="font-bold text-white">Prix décroissant</span>
                    </div>
                    <div class="w-4 mr-0 shrink-0">
                    </div>
                </button>
                <button type="button" class="flex items-center justify-between px-4 py-3 text-sm text-left cursor-pointer w-52 text-secondary-300 hover:bg-secondary-700">
                    <div class="w-full pr-2 text-right">
                        Tri: <span class="font-bold text-white">Nom de A à Z</span>
                    </div>
                    <div class="w-4 mr-0 shrink-0">
                    </div>
                </button>
                <button type="button" class="flex items-center justify-between px-4 py-3 text-sm text-left cursor-pointer w-52 text-secondary-300 hover:bg-secondary-700">
                    <div class="w-full pr-2 text-right">
                        Tri: <span class="font-bold text-white">Nom de Z à A</span>
                    </div>
                    <div class="w-4 mr-0 shrink-0">
                    </div>
                </button>
                <button type="button" class="flex items-center justify-between px-4 py-3 text-sm text-left cursor-pointer w-52 text-secondary-300 hover:bg-secondary-700">
                    <div class="w-full pr-2 text-right">
                        Tri: <span class="font-bold text-white">Référence de A à Z</span>
                    </div>
                    <div class="w-4 mr-0 shrink-0">
                    </div>
                </button>
                <button type="button" class="flex items-center justify-between px-4 py-3 text-sm text-left cursor-pointer w-52 text-secondary-300 hover:bg-secondary-700">
                    <div class="w-full pr-2 text-right">
                        Tri: <span class="font-bold text-white">Référence de Z à A</span>
                    </div>
                    <div class="w-4 mr-0 shrink-0">
                    </div>
                </button>
            </div>
        </div>
    </div>

    <div class="hidden grid-cols-2 gap-2 lg:grid">
        <button class="button group --has-trailing h-full --is-small  " type="button" wire:click="setDisplay('grid')">


            <span class="button__caption">
                Grille
            </span>

            <span class="button__trailing">
                <svg class="h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                </svg>
            </span>

            <span class="button__spinner">
                <svg class="w-4 h-4 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg>
            </span>
        </button>
        <button class="button group --has-trailing h-full --is-small --is-secondary" type="button" wire:click="setDisplay('list')">


            <span class="button__caption">
                Liste
            </span>

            <span class="button__trailing">
                <svg class="h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                </svg>
            </span>

            <span class="button__spinner">
                <svg class="w-4 h-4 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg>
            </span>
        </button>
    </div>
</div>


<ul class="gap-4 mt-8 mb-8 grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

     @foreach ($produits as $produit)
     <li>
        <a href="{{ route('produits.show', $produit->slug) }}"
            class="productLink flex flex-col h-full max-w-full overflow-hidden rounded-sm shadow-lg bg-secondary-600 hover:bg-secondary-700">
            <div class="relative h-48 p-2 bg-white sm:h-64 lg:max-h-full">
                <img class="h-full w-full object-contain" sizes="1px"
                    src="{{ $produit->photosUrl[0] }}" width="1024" height="645">

                <div class="absolute h-6 bg-gray-100 bottom-2 left-2">
                    <img class="block object-contain object-left w-auto h-full mb-2" sizes="1px"
                        src="{{ asset($produit->brand->logo_url) }}" width="289"
                        height="82">

                </div>
            </div>
            <div class="flex flex-col flex-1 px-4 pt-4 pb-8">

                <table class="w-full text-xs uppercase border-separate"
                    style="border-spacing: 0 .25rem">
                    <tr class="text-primary-500">
                        <td class="w-0 pr-2 whitespace-nowrap">Ref. DGTEC:</td>
                        <th>{{ $produit->id }}</th>
                    </tr>
                    <tr class="text-secondary-300">
                        <td class="w-0 pr-2 whitespace-nowrap">Ref. Fabricant:</td>
                        <th>{{ $produit->ref_fabricant }}</th>
                    </tr>
                </table>

                <span
                    class="flex-1 mt-2 mb-4 overflow-hidden text-xs text-white uppercase break-all ">QSAN
                    {{ $produit->description }}</span>

                <div class="mb-4">
                    <p class="text-2xl font-bold text-center uppercase text-primary-500">
                        {{ $produit->price }} DT HT</p>
                    <p class="mt-1 text-xs font-bold text-center uppercase text-secondary-300">+0,02DT
                        d'éco-participation</p>
                </div>

                <div class="mb-2">
                    <p class="text-xs font-bold text-center uppercase text-secondary-300">
                        @if ($produit->quantiteStock > 0)
                            En stock
                        @else
                            Épuisé
                            provisoirement
                        @endif
                    </p>
                </div>

                <div class="flex justify-between w-full mt-auto mb-0 space-x-2">
                    <button class="button group --is-outlined --is-small --is-tertiary"
                        wire:loading.class="--is-loading" type="button">


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

                    <button id="{{ $produit->id }}"
                        class="addToCart button group w-full px-4 text-center --is-small --is-tertiary"
                        wire:loading.class="--is-loading" type="button">


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
                    </button>
                </div>
            </div>
        </a>

    </li>
    @endforeach
</ul>
