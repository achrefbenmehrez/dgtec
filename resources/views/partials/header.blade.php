<?php
    $categories = App\Models\Category::all();
    $brands = App\Models\Brand::all();
?>
<header class="fixed z-30 w-full pb-4 -relative bg-secondary-700 sm:pb-0">
    <div class="mx-auto max-w-big">
        <div class="flex flex-wrap items-center justify-between sm:h-16 md:justify-start">
            <div class="flex justify-center w-full px-4 py-4 sm:w-auto sm:py-0 sm:justify-start sm:px-6">
                <a href="{{ route('home') }}">
                    <span class="sr-only">SQP</span>
                    <img class="w-auto h-8 " src="{{ asset('storage/img/logo_white.png') }}" alt="">
                </a>
            </div>

            <div class="hidden mr-8 lg:flex lg:flex-1">
                <form class="relative w-full text-secondary-700" action="https://sqp.fr/recherche">
                    <button class="absolute inset-y-0 flex items-center right-2" aria-hidden="true">
                        <svg class="w-6 h-6 text-primary-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg> </button>
                    <input id="query" name="query"
                        class="block w-full h-full py-2 pl-8 pr-8 placeholder-opacity-50 border-transparent rounded-sm text-secondary-300 placeholder-secondary-300 focus:outline-none focus:ring-0 focus:border-transparent sm:text-sm bg-secondary-600"
                        placeholder="Rechercher parmi plus de 13000 références..." type="search">
                </form>
            </div>

            <div class="flex items-center justify-around flex-1 h-full lg:justify-end" x-data>
                <a href="https://sqp.fr/recherche"
                    class="inline-flex items-center justify-center h-full px-8 py-2 text-xs font-semibold text-white uppercase transition border border-transparent shadow-sm lg:hidden whitespace-nowra hover:bg-black hover:bg-opacity-25">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg> <span class="sr-only">Rechercher</span>
                </a>

                <a href="tel:0472138383"
                    class="inline-flex items-center justify-center flex-1 h-full px-8 py-2 text-sm font-semibold text-white uppercase transition border border-transparent shadow-sm whitespace-nowrap hover:bg-black hover:bg-opacity-25">
                    <svg class="w-8 h-8 xl:mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg> <span class="sr-only xl:not-sr-only whitespace-nowrap">04 72 13 83 83</span>
                </a>




                <div class="relative h-full group">
                    <a href="{{ route('connexion') }}"
                        class="relative inline-flex items-center justify-center h-full px-8 py-2 text-xs font-semibold text-white uppercase transition border border-transparent shadow-sm whitespace-nowrap hover:bg-black hover:bg-opacity-25">
                        <svg class="w-6 h-6 shrink-0 lg:mr-2" transform="scale(1.2,1.2)"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.727 31.727">
                            <path fill="currentColor"
                                d="M27.08 4.646A15.863 15.863 0 0 0 4.646 27.08 15.863 15.863 0 0 0 27.08 4.646ZM7.953 27.413a8.033 8.033 0 0 1 15.821 0 13.974 13.974 0 0 1-15.821 0Zm2.867-13.541a5.044 5.044 0 1 1 5.044 5.044 5.05 5.05 0 0 1-5.045-5.044Zm14.564 12.252a9.907 9.907 0 0 0-5.759-6.466 6.9 6.9 0 1 0-7.523 0 9.906 9.906 0 0 0-5.759 6.466 14 14 0 1 1 19.042 0Zm0 0" />
                        </svg> <span class="sr-only lg:not-sr-only xl:whitespace-nowrap">Mon compte</span>
                    </a>
                </div>


                <div wire:id="bD6b1YTtJ4U8BfxTkdWR"
                    wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;bD6b1YTtJ4U8BfxTkdWR&quot;,&quot;name&quot;:&quot;website.cart.cart&quot;,&quot;locale&quot;:&quot;fr&quot;,&quot;path&quot;:&quot;\/&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[&quot;cart.updateProducts&quot;]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;30a63869&quot;,&quot;data&quot;:{&quot;comment&quot;:&quot;&quot;,&quot;viewName&quot;:&quot;website._layouts.components.cart&quot;},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;fbec6cf4e062794ebea67fe0c977c78e302b360b58dee931417cbcac7d57a2ee&quot;}}"
                    class="relative h-full">
                    <a href="https://sqp.fr/mon-panier"
                        class="relative inline-flex items-center justify-center h-full px-8 py-2 text-xs font-semibold text-white uppercase transition border border-transparent shadow-sm whitespace-nowrap hover:bg-black hover:bg-opacity-25">
                        <svg class="w-8 h-8 shrink-0 xl:mr-2" transform="scale(-1,1)" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M19.029 13H22l-.266 1h-2.992l.287-1zm.863-3h2.812L23 9h-2.821l-.287 1zm-.576 2h4.387L24 11h-4.396l-.288 1zM22 3l-.743 2h-1.929l-3.474 12H4.615L0 6h14.812l-.564 2H3.008l2.938 7h8.428l3.432-12H22zM7.5 18c-.828 0-1.5.672-1.5 1.5 0 .829.672 1.5 1.5 1.5S9 20.329 9 19.5c0-.828-.672-1.5-1.5-1.5zm5.9-7-.9 7c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5z" />
                        </svg> <span class="sr-only xl:not-sr-only xl:whitespace-nowrap">Mon panier</span>
                    </a>

                </div>

                <!-- Livewire Component wire-end:bD6b1YTtJ4U8BfxTkdWR -->
                <a href="#"
                    class="items-center justify-center hidden h-full px-4 py-2 text-xs font-semibold text-white uppercase border border-transparent shadow-sm sm:inline-flex whitespace-nowrap hover:bg-black hover:bg-opacity-25">
                    🇫🇷
                    <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg> </a>

                <a href="#" @click.prevent="$dispatch('togglemegamenu')"
                    class="inline-flex items-center justify-center h-full px-4 py-2 text-xs font-semibold text-white uppercase transition border border-transparent shadow-sm md:hidden whitespace-nowrap hover:bg-black hover:bg-opacity-25">
                    <svg class="w-6 h-6 shrink-0 lg:mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg> <span class="sr-only xl:not-sr-only">Menu</span>
                </a>

            </div>
        </div>
    </div>
</header>

<div class="h-32 sm:h-16"></div>

<div class="fixed z-20 hidden w-full h-12 bg-gray-100 shadow-lg md:flex">
    <div class="relative flex flex-no-wrap items-center justify-center w-full h-full mx-auto">
        <div
            class="inline-flex items-center h-full px-4 py-2 text-xs font-semibold text-center uppercase border border-transparent shadow-sm whitespace-nowrap hover:bg-secondary-700 hover:text-white group">
            Nos marques

            <div
                class="absolute left-0 right-0 z-50 hidden pt-4 pb-8 text-white shadow-lg bg-secondary-700 group-hover:flex top-12">
                <div class="flex w-full mx-auto max-w-7xl">
                    @foreach ($brands as $brand)
                        <ul class="px-4 mx-auto overflow-hidden">
                            <li class="mb-4">
                                <a class="mb-2 font-bold"
                                    href="https://sqp.fr/distributeur-solutions-akitio">{{ $brand->title }}</a>
                            </li>
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>

        @foreach ($categories as $category)
            @if (!$category->parent_id)
                <div
                    class="hidden md:inline-flex items-center h-full px-4 py-2 text-xs font-semibold uppercase border border-transparent shadow-sm hover:bg-secondary-700 hover:text-white group text-center">
                    <a href="https://sqp.fr/distributeur-stockage-nas">{{ $category->title }}</a>
                    @if ($category->children->count())
                        <div
                            class="absolute left-0 right-0 z-50 hidden pt-4 pb-8 text-white shadow-lg bg-secondary-700 group-hover:flex top-12">
                            <div class="flex w-full mx-auto max-w-7xl">
                                <ul class="px-4 mx-auto overflow-hidden">
                                    @foreach ($category->children as $child)
                                        <li>
                                            <a class="font-bold"
                                                href="https://sqp.fr/distributeur-nas-1-disque">{{ $child->title }}</a>
                                            @if ($child->children->count())
                                                <ul class="mt-2">
                                                    @foreach ($child->children as $subChild)
                                                        <li class="mb-2 font-light">
                                                            <a
                                                                href="https://sqp.fr/distributeur-nas-1-disque">{{ $subChild->title }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                    @endif
                </div>
            @endif
        @endforeach

    </div>

</div>

<div class="md:h-12"></div>

<div x-data="{ display: false }" @togglemegamenu.window="display = !display"
    class="absolute top-0 left-0 right-0 z-50 mt-32 shadow-lg sm:mt-16" x-show="display" style="display: none">
    <div class="py-4 bg-gray-100 md:hidden" @click.outside="display = false">
        <ul class="p-4 space-y-2">
            <li>
                <a href="#"
                    class="block w-full px-2 py-2 text-lg font-bold text-center uppercase focus:bg-gray-100 hover:bg-gray-200">
                    Nos marques
                </a>
            </li>
            <li>
                <a href="https://sqp.fr/distributeur-stockage-nas"
                    class="block w-full px-2 py-2 text-lg font-bold text-center uppercase focus:bg-gray-100 hover:bg-gray-200">
                    Stockage NAS
                </a>
            </li>
            <li>
                <a href="https://sqp.fr/distributeur-stockage-san"
                    class="block w-full px-2 py-2 text-lg font-bold text-center uppercase focus:bg-gray-100 hover:bg-gray-200">
                    Stockage SAN
                </a>
            </li>
            <li>
                <a href="https://sqp.fr/distributeur-stockage-externe"
                    class="block w-full px-2 py-2 text-lg font-bold text-center uppercase focus:bg-gray-100 hover:bg-gray-200">
                    Stockage externe
                </a>
            </li>
            <li>
                <a href="https://sqp.fr/distributeur-stockage-interne"
                    class="block w-full px-2 py-2 text-lg font-bold text-center uppercase focus:bg-gray-100 hover:bg-gray-200">
                    Stockage interne
                </a>
            </li>
            <li>
                <a href="https://sqp.fr/distributeur-memoires"
                    class="block w-full px-2 py-2 text-lg font-bold text-center uppercase focus:bg-gray-100 hover:bg-gray-200">
                    Mémoires
                </a>
            </li>
            <li>
                <a href="https://sqp.fr/distributeur-connectiques"
                    class="block w-full px-2 py-2 text-lg font-bold text-center uppercase focus:bg-gray-100 hover:bg-gray-200">
                    Connectiques
                </a>
            </li>
            <li>
                <a href="https://sqp.fr/distributeur-reseau"
                    class="block w-full px-2 py-2 text-lg font-bold text-center uppercase focus:bg-gray-100 hover:bg-gray-200">
                    Réseau
                </a>
            </li>
            <li>
                <a href="https://sqp.fr/distributeur-accessoires"
                    class="block w-full px-2 py-2 text-lg font-bold text-center uppercase focus:bg-gray-100 hover:bg-gray-200">
                    Accessoires
                </a>
            </li>
            <li>
                <a href="https://sqp.fr/distributeur-autres"
                    class="block w-full px-2 py-2 text-lg font-bold text-center uppercase focus:bg-gray-100 hover:bg-gray-200">
                    Autres
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="relative hidden shadow-lg bg-primary-500 md:block" x-data="{ displayFeaturedPost: true }" x-show="displayFeaturedPost">
    <div class="flex items-center justify-center h-8 mx-auto max-w-big sm:px-6 lg:px-8">
        <div class="pr-16 sm:text-center sm:px-16">
            <p class="text-xs text-white">
                <span class="hidden md:inline">
                    La garantie J+1 et le service premium NASExchange
                </span>
                <span class="block sm:ml-2 sm:inline-block">
                    <a href="https://sqp.fr/la-garantie-j1-et-le-service-premium-nasexchange"
                        class="font-bold text-white underline"> Lire la suite <span
                            aria-hidden="true">&rarr;</span></a>
                </span>
            </p>
        </div>
        <div class="absolute inset-y-0 right-0 flex items-start">
            <button type="button"
                class="flex p-2 rounded-md hover:bg-primary-400 focus:outline-none focus:ring-2 focus:ring-white"
                @click="displayFeaturedPost = false">
                <span class="sr-only">Fermer</span>
                <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg> </button>
        </div>
    </div>
</div>
