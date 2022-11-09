@extends('layouts.app')

@section('content')
    <div class="w-full px-4">
        <div class="gap-8 mx-auto mt-8 sm:grid sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 max-w-big">

            <div class="col-span-full">
                <div>
                    <ol class="flex text-xs text-white uppercase jusitfy-center" wire:ignore>
                        <li class="flex items-center h-8">
                            <a href="{{ route('home') }}">Accueil</a>
                        </li>

                    </ol>

                    <h2 class="mb-4 text-2xl font-bold uppercase text-primary-500">Configurateur de NAS</h2>
                </div>

                <div class="relative mb-3 text-left">
                    <div class="px-2 py-4 rounded-sm bg-secondary-600">
                        <div
                            class="w-full px-2 mb-4 overflow-hidden text-xl font-medium text-left text-white normal-case text-ellipsis whitespace-nowrap">
                            Type de boitier</div>

                        <div class="grid py-4 pt-2 sm:grid-flow-col sm:grid-rows-1">
                            <label for='casing-type-tour'class="flex items-center px-3 py-2 text-sm cursor-pointer">
                                <input id='casing-type-tour' name="filters1" type="radio"
                                    class="w-4 h-4 border-gray-300 rounded-full text-primary-600 focus:ring-primary-500"
                                    value="Tour">
                                <span
                                    class="pl-4 mx-3 overflow-hidden font-medium text-white text-ellipsis whitespace-nowrap">Tour
                                </span>
                                <small class="text-xs text-center opacity-50 text-secondary-300">{{ $countTour }}
                                    boitiers</small>
                            </label>
                            <label for='casing-type-rack'class="flex items-center px-3 py-2 text-sm cursor-pointer">
                                <input id='casing-type-rack' type="radio" name="filters1"
                                    class="w-4 h-4 border-gray-300 rounded-full text-primary-600 focus:ring-primary-500"
                                    value="Rack">
                                <span
                                    class="pl-4 mx-3 overflow-hidden font-medium text-white text-ellipsis whitespace-nowrap">Rack
                                </span>
                                <small class="text-xs text-center opacity-50 text-secondary-300">{{ $countRacks }}
                                    boitiers</small>
                            </label>
                        </div>
                    </div>
                </div>


                <div class="relative mb-3 text-left" id="nombreBaies">
                    <div class="px-2 py-4 rounded-sm bg-secondary-600">
                        <div
                            class="w-full px-2 mb-4 overflow-hidden text-xl font-medium text-left text-white normal-case text-ellipsis whitespace-nowrap">
                            Nombre de baies</div>

                        <div class="grid py-4 pt-2 sm:grid-cols-2" id="nbreBaiesWrapper">
                        </div>
                    </div>
                </div>

                <div class="relative mb-3 text-left" id="typeDD">
                    <div class="px-2 py-4 rounded-sm bg-secondary-600">
                        <div
                            class="flex items-center w-full px-2 mb-4 overflow-hidden text-xl font-medium text-left text-white normal-case text-ellipsis whitespace-nowrap">
                            <span>Type des disques durs</span>
                            <a target="_blank" class="inline text-sm text-primary-500"
                                href="https://sqp.fr/types-de-disque-sqp">
                                <svg class="w-5 h-5 ml-4 text-primary-500" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg> </a>
                        </div>
                        <div class="grid py-4 pt-2 md:grid-cols-2" id="typeDDWrapper">

                        </div>
                    </div>
                </div>

                <div class="relative mb-3 text-left" id="marqueDD">
                    <div class="px-2 py-4 rounded-sm bg-secondary-600">
                        <div
                            class="w-full px-2 mb-4 overflow-hidden text-xl font-medium text-left text-white normal-case text-ellipsis whitespace-nowrap">
                            Marque des disques durs</div>

                        <div class="grid grid-flow-col grid-rows-4 py-4 pt-2" id="marqueDDWrapper">

                        </div>
                    </div>
                </div>

                <div class="relative mb-3 text-left" id="choixDD">
                    <div class="px-2 py-4 rounded-sm bg-secondary-600">
                        <div
                            class="w-full px-2 mb-4 overflow-hidden text-xl font-medium text-left text-white normal-case text-ellipsis whitespace-nowrap">
                            Choix des disques durs</div>

                        <div class="px-2 space-y-2 text-white">
                            <h5 class="flex items-center font-bold">
                                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg> Important :
                            </h5>
                            <p class="text-sm font-medium">
                                Le fabricant QNAP ou Synology ne fournira pas d'assistance technique si votre disque dur ne
                                figure pas dans la liste de compatibilité NAS <a
                                    class="text-base font-bold underline text-primary-500 hover:text-primary-700"
                                    target="_blank" href="https://www.qnap.com/fr-fr/compatibility">QNAP</a> ou <a
                                    class="text-base font-bold underline text-primary-500 hover:text-primary-700"
                                    target="_blank" href="https://www.synology.com/fr-fr/compatibility">Synology</a>
                                (listes mises à jour le 16/10/2022)
                            </p>
                        </div>

                        <div class="px-2 mt-4 text-white">
                            <p class="text-sm font-medium">
                                Vous pouvez ajouter jusqu'à <span id="DDNumber"></span> disque(s) à votre configuration en
                                cliquant sur les baies
                                matérialisées ci-dessous.
                            </p>
                        </div>

                        <ul class="grid gap-4 px-2 mt-4 mb-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6"
                            id="addDDWrapper">

                        </ul>


                        <div class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
                            aria-modal="true" x-show="add_disk" style="display: none;">
                            <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:p-0">

                                <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true"
                                    @click.self="add_disk = 0" x-show="add_disk" x-transition:enter="ease-out duration-300"
                                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                    x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                                    x-transition:leave-end="opacity-0" style="display: none;"></div>

                                <!-- This element is to trick the browser into centering the modal contents. -->
                                <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                    aria-hidden="true">​</span>

                                <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-sm shadow-xl sm:my-8 sm:align-middle sm:max-w-7xl sm:w-full"
                                    x-show="add_disk" x-transition:enter="ease-out duration-300"
                                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                    x-transition:leave="ease-in duration-200"
                                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                    style="display: none;">
                                    <div class="px-4 pt-5 pb-4 bg-secondary-700 sm:p-6 sm:pb-4">
                                        <ul
                                            class="grid gap-4 mt-8 mb-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-6">

                                            <li>
                                                <a href="#" target="_blank"
                                                    class="flex flex-col h-full max-w-full overflow-hidden rounded-sm shadow-lg min-h-80 bg-secondary-600 hover:bg-secondary-700">
                                                    <div class="relative h-48 p-2 bg-white sm:h-40 lg:max-h-full">
                                                        <img src="https://sqp.fr/storage/products/products/50866/medias/23148/st14000ne0008-50866.jpg"
                                                            alt="" class="object-contain w-full h-full">
                                                    </div>
                                                    <div class="flex flex-col flex-1 px-4 pt-4 pb-8">
                                                        <span
                                                            class="mt-2 text-xs font-bold text-center uppercase text-primary-500">ST14000NE0008</span>
                                                        <span
                                                            class="flex-1 mt-2 mb-4 overflow-hidden text-xs text-white uppercase break-all ">Disque
                                                            dur Seagate IronWolf Pro - 3,5" 14TB - 7200rpm - SATA 6Gbps -
                                                            256MB</span>
                                                        <div class="mb-2">
                                                            <p
                                                                class="text-xs font-bold text-center uppercase text-primary-500">
                                                                En stock</p>
                                                        </div>
                                                        <div class="flex justify-between w-full mt-auto mb-0">
                                                            <button
                                                                class="button group --has-trailing w-full px-4 --is-small --is-tertiary"
                                                                @click.prevent="$wire.selectDisk(8, add_disk); add_disk = 0"
                                                                wire:loading.class="--is-loading"
                                                                wire:target="selectDisk(8)" type="button">


                                                                <span class="button__caption">
                                                                    <span>Sélectionner</span>
                                                                </span>

                                                                <span class="button__trailing">
                                                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 20 20" fill="currentColor"
                                                                        aria-hidden="true">
                                                                        <path fill-rule="evenodd"
                                                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                                                                            clip-rule="evenodd"></path>
                                                                    </svg>
                                                                </span>

                                                                <span class="button__spinner">
                                                                    <svg class="w-4 h-4 animate-spin"
                                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 24 24">
                                                                        <circle class="opacity-25" cx="12"
                                                                            cy="12" r="10"
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
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" target="_blank"
                                                    class="flex flex-col h-full max-w-full overflow-hidden rounded-sm shadow-lg min-h-80 bg-secondary-600 hover:bg-secondary-700">
                                                    <div class="relative h-48 p-2 bg-white sm:h-40 lg:max-h-full">
                                                        <img src="https://sqp.fr/storage/products/products/63687/medias/42098/st10000ne000-63687.jpg"
                                                            alt="" class="object-contain w-full h-full">
                                                    </div>
                                                    <div class="flex flex-col flex-1 px-4 pt-4 pb-8">
                                                        <span
                                                            class="mt-2 text-xs font-bold text-center uppercase text-primary-500">ST10000NE000</span>
                                                        <span
                                                            class="flex-1 mt-2 mb-4 overflow-hidden text-xs text-white uppercase break-all ">Disque
                                                            dur Seagate IronWolf Pro - 3,5" 10TB - 7200rpm - SATA 6Gbps -
                                                            256MB</span>
                                                        <div class="mb-2">
                                                            <p
                                                                class="text-xs font-bold text-center uppercase text-secondary-300">
                                                                Épuisé provisoirement</p>
                                                        </div>
                                                        <div class="flex justify-between w-full mt-auto mb-0">
                                                            <button
                                                                class="button group --has-trailing w-full px-4 --is-small --is-tertiary"
                                                                @click.prevent="$wire.selectDisk(37, add_disk); add_disk = 0"
                                                                wire:loading.class="--is-loading"
                                                                wire:target="selectDisk(37)" type="button">


                                                                <span class="button__caption">
                                                                    <span>Sélectionner</span>
                                                                </span>

                                                                <span class="button__trailing">
                                                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 20 20" fill="currentColor"
                                                                        aria-hidden="true">
                                                                        <path fill-rule="evenodd"
                                                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                                                                            clip-rule="evenodd"></path>
                                                                    </svg>
                                                                </span>

                                                                <span class="button__spinner">
                                                                    <svg class="w-4 h-4 animate-spin"
                                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 24 24">
                                                                        <circle class="opacity-25" cx="12"
                                                                            cy="12" r="10"
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
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" target="_blank"
                                                    class="flex flex-col h-full max-w-full overflow-hidden rounded-sm shadow-lg min-h-80 bg-secondary-600 hover:bg-secondary-700">
                                                    <div class="relative h-48 p-2 bg-white sm:h-40 lg:max-h-full">
                                                        <img src="https://sqp.fr/storage/products/products/56523/medias/26994/st8000ne001-56523.jpg"
                                                            alt="" class="object-contain w-full h-full">
                                                    </div>
                                                    <div class="flex flex-col flex-1 px-4 pt-4 pb-8">
                                                        <span
                                                            class="mt-2 text-xs font-bold text-center uppercase text-primary-500">ST8000NE001</span>
                                                        <span
                                                            class="flex-1 mt-2 mb-4 overflow-hidden text-xs text-white uppercase break-all ">Disque
                                                            dur Seagate IronWolf Pro - 3,5" 8TB - 7200rpm - SATA 6Gbps -
                                                            256MB</span>
                                                        <div class="mb-2">
                                                            <p
                                                                class="text-xs font-bold text-center uppercase text-primary-500">
                                                                En stock</p>
                                                        </div>
                                                        <div class="flex justify-between w-full mt-auto mb-0">
                                                            <button
                                                                class="button group --has-trailing w-full px-4 --is-small --is-tertiary"
                                                                @click.prevent="$wire.selectDisk(38, add_disk); add_disk = 0"
                                                                wire:loading.class="--is-loading"
                                                                wire:target="selectDisk(38)" type="button">


                                                                <span class="button__caption">
                                                                    <span>Sélectionner</span>
                                                                </span>

                                                                <span class="button__trailing">
                                                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 20 20" fill="currentColor"
                                                                        aria-hidden="true">
                                                                        <path fill-rule="evenodd"
                                                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                                                                            clip-rule="evenodd"></path>
                                                                    </svg>
                                                                </span>

                                                                <span class="button__spinner">
                                                                    <svg class="w-4 h-4 animate-spin"
                                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 24 24">
                                                                        <circle class="opacity-25" cx="12"
                                                                            cy="12" r="10"
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
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" target="_blank"
                                                    class="flex flex-col h-full max-w-full overflow-hidden rounded-sm shadow-lg min-h-80 bg-secondary-600 hover:bg-secondary-700">
                                                    <div class="relative h-48 p-2 bg-white sm:h-40 lg:max-h-full">
                                                        <img src="https://sqp.fr/storage/products/products/56410/medias/26905/st4000ne001-56410.jpg"
                                                            alt="" class="object-contain w-full h-full">
                                                    </div>
                                                    <div class="flex flex-col flex-1 px-4 pt-4 pb-8">
                                                        <span
                                                            class="mt-2 text-xs font-bold text-center uppercase text-primary-500">ST4000NE001</span>
                                                        <span
                                                            class="flex-1 mt-2 mb-4 overflow-hidden text-xs text-white uppercase break-all ">Disque
                                                            dur Seagate IronWolf Pro - 3,5" 4TB - 7200rpm - SATA 6Gbps -
                                                            128MB</span>
                                                        <div class="mb-2">
                                                            <p
                                                                class="text-xs font-bold text-center uppercase text-primary-500">
                                                                En stock</p>
                                                        </div>
                                                        <div class="flex justify-between w-full mt-auto mb-0">
                                                            <button
                                                                class="button group --has-trailing w-full px-4 --is-small --is-tertiary"
                                                                @click.prevent="$wire.selectDisk(39, add_disk); add_disk = 0"
                                                                wire:loading.class="--is-loading"
                                                                wire:target="selectDisk(39)" type="button">


                                                                <span class="button__caption">
                                                                    <span>Sélectionner</span>
                                                                </span>

                                                                <span class="button__trailing">
                                                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 20 20" fill="currentColor"
                                                                        aria-hidden="true">
                                                                        <path fill-rule="evenodd"
                                                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                                                                            clip-rule="evenodd"></path>
                                                                    </svg>
                                                                </span>

                                                                <span class="button__spinner">
                                                                    <svg class="w-4 h-4 animate-spin"
                                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 24 24">
                                                                        <circle class="opacity-25" cx="12"
                                                                            cy="12" r="10"
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
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" target="_blank"
                                                    class="flex flex-col h-full max-w-full overflow-hidden rounded-sm shadow-lg min-h-80 bg-secondary-600 hover:bg-secondary-700">
                                                    <div class="relative h-48 p-2 bg-white sm:h-40 lg:max-h-full">
                                                        <img src="https://sqp.fr/storage/products/products/55926/medias/26434/st12000ne0008-55926.jpg"
                                                            alt="" class="object-contain w-full h-full">
                                                    </div>
                                                    <div class="flex flex-col flex-1 px-4 pt-4 pb-8">
                                                        <span
                                                            class="mt-2 text-xs font-bold text-center uppercase text-primary-500">ST12000NE0008</span>
                                                        <span
                                                            class="flex-1 mt-2 mb-4 overflow-hidden text-xs text-white uppercase break-all ">Disque
                                                            dur Seagate IronWolf Pro - 3,5" 12TB - 7200rpm - SATA 6Gbps -
                                                            256MB</span>
                                                        <div class="mb-2">
                                                            <p
                                                                class="text-xs font-bold text-center uppercase text-primary-500">
                                                                En stock</p>
                                                        </div>
                                                        <div class="flex justify-between w-full mt-auto mb-0">
                                                            <button
                                                                class="button group --has-trailing w-full px-4 --is-small --is-tertiary"
                                                                @click.prevent="$wire.selectDisk(40, add_disk); add_disk = 0"
                                                                wire:loading.class="--is-loading"
                                                                wire:target="selectDisk(40)" type="button">


                                                                <span class="button__caption">
                                                                    <span>Sélectionner</span>
                                                                </span>

                                                                <span class="button__trailing">
                                                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 20 20" fill="currentColor"
                                                                        aria-hidden="true">
                                                                        <path fill-rule="evenodd"
                                                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                                                                            clip-rule="evenodd"></path>
                                                                    </svg>
                                                                </span>

                                                                <span class="button__spinner">
                                                                    <svg class="w-4 h-4 animate-spin"
                                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 24 24">
                                                                        <circle class="opacity-25" cx="12"
                                                                            cy="12" r="10"
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
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" target="_blank"
                                                    class="flex flex-col h-full max-w-full overflow-hidden rounded-sm shadow-lg min-h-80 bg-secondary-600 hover:bg-secondary-700">
                                                    <div class="relative h-48 p-2 bg-white sm:h-40 lg:max-h-full">
                                                        <img src="https://sqp.fr/storage/products/products/55619/medias/26245/st16000ne000-55619.jpg"
                                                            alt="" class="object-contain w-full h-full">
                                                    </div>
                                                    <div class="flex flex-col flex-1 px-4 pt-4 pb-8">
                                                        <span
                                                            class="mt-2 text-xs font-bold text-center uppercase text-primary-500">ST16000NE000</span>
                                                        <span
                                                            class="flex-1 mt-2 mb-4 overflow-hidden text-xs text-white uppercase break-all ">Disque
                                                            dur Seagate IronWolf Pro - 3,5" 16TB - 7200rpm - SATA 6Gbps -
                                                            256MB</span>
                                                        <div class="mb-2">
                                                            <p
                                                                class="text-xs font-bold text-center uppercase text-primary-500">
                                                                En stock</p>
                                                        </div>
                                                        <div class="flex justify-between w-full mt-auto mb-0">
                                                            <button
                                                                class="button group --has-trailing w-full px-4 --is-small --is-tertiary"
                                                                @click.prevent="$wire.selectDisk(41, add_disk); add_disk = 0"
                                                                wire:loading.class="--is-loading"
                                                                wire:target="selectDisk(41)" type="button">


                                                                <span class="button__caption">
                                                                    <span>Sélectionner</span>
                                                                </span>

                                                                <span class="button__trailing">
                                                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 20 20" fill="currentColor"
                                                                        aria-hidden="true">
                                                                        <path fill-rule="evenodd"
                                                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                                                                            clip-rule="evenodd"></path>
                                                                    </svg>
                                                                </span>

                                                                <span class="button__spinner">
                                                                    <svg class="w-4 h-4 animate-spin"
                                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 24 24">
                                                                        <circle class="opacity-25" cx="12"
                                                                            cy="12" r="10"
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
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" target="_blank"
                                                    class="flex flex-col h-full max-w-full overflow-hidden rounded-sm shadow-lg min-h-80 bg-secondary-600 hover:bg-secondary-700">
                                                    <div class="relative h-48 p-2 bg-white sm:h-40 lg:max-h-full">
                                                        <img src="https://sqp.fr/storage/products/products/56411/medias/26906/st6000ne000-56411.jpg"
                                                            alt="" class="object-contain w-full h-full">
                                                    </div>
                                                    <div class="flex flex-col flex-1 px-4 pt-4 pb-8">
                                                        <span
                                                            class="mt-2 text-xs font-bold text-center uppercase text-primary-500">ST6000NE000</span>
                                                        <span
                                                            class="flex-1 mt-2 mb-4 overflow-hidden text-xs text-white uppercase break-all ">Disque
                                                            dur Seagate IronWolf Pro - 3,5" 6TB - 7200rpm - SATA 6Gbps -
                                                            256MB</span>
                                                        <div class="mb-2">
                                                            <p
                                                                class="text-xs font-bold text-center uppercase text-primary-500">
                                                                En stock</p>
                                                        </div>
                                                        <div class="flex justify-between w-full mt-auto mb-0">
                                                            <button
                                                                class="button group --has-trailing w-full px-4 --is-small --is-tertiary"
                                                                @click.prevent="$wire.selectDisk(44, add_disk); add_disk = 0"
                                                                wire:loading.class="--is-loading"
                                                                wire:target="selectDisk(44)" type="button">


                                                                <span class="button__caption">
                                                                    <span>Sélectionner</span>
                                                                </span>

                                                                <span class="button__trailing">
                                                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 20 20" fill="currentColor"
                                                                        aria-hidden="true">
                                                                        <path fill-rule="evenodd"
                                                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                                                                            clip-rule="evenodd"></path>
                                                                    </svg>
                                                                </span>

                                                                <span class="button__spinner">
                                                                    <svg class="w-4 h-4 animate-spin"
                                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 24 24">
                                                                        <circle class="opacity-25" cx="12"
                                                                            cy="12" r="10"
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
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" target="_blank"
                                                    class="flex flex-col h-full max-w-full overflow-hidden rounded-sm shadow-lg min-h-80 bg-secondary-600 hover:bg-secondary-700">
                                                    <div class="relative h-48 p-2 bg-white sm:h-40 lg:max-h-full">
                                                        <img src="https://sqp.fr/storage/products/products/60117/medias/34975/st18000ne000-60117.jpg"
                                                            alt="" class="object-contain w-full h-full">
                                                    </div>
                                                    <div class="flex flex-col flex-1 px-4 pt-4 pb-8">
                                                        <span
                                                            class="mt-2 text-xs font-bold text-center uppercase text-primary-500">ST18000NE000</span>
                                                        <span
                                                            class="flex-1 mt-2 mb-4 overflow-hidden text-xs text-white uppercase break-all ">Disque
                                                            dur Seagate IronWolf Pro - 3,5" 18TB - 7200rpm - SATA 6Gbps -
                                                            256MB</span>
                                                        <div class="mb-2">
                                                            <p
                                                                class="text-xs font-bold text-center uppercase text-primary-500">
                                                                En stock</p>
                                                        </div>
                                                        <div class="flex justify-between w-full mt-auto mb-0">
                                                            <button
                                                                class="button group --has-trailing w-full px-4 --is-small --is-tertiary"
                                                                @click.prevent="$wire.selectDisk(47, add_disk); add_disk = 0"
                                                                wire:loading.class="--is-loading"
                                                                wire:target="selectDisk(47)" type="button">


                                                                <span class="button__caption">
                                                                    <span>Sélectionner</span>
                                                                </span>

                                                                <span class="button__trailing">
                                                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 20 20" fill="currentColor"
                                                                        aria-hidden="true">
                                                                        <path fill-rule="evenodd"
                                                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                                                                            clip-rule="evenodd"></path>
                                                                    </svg>
                                                                </span>

                                                                <span class="button__spinner">
                                                                    <svg class="w-4 h-4 animate-spin"
                                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 24 24">
                                                                        <circle class="opacity-25" cx="12"
                                                                            cy="12" r="10"
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
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div
                                        class="flex flex-col items-center justify-between w-full px-4 py-8 bg-secondary-600 sm:px-6 sm:flex-row-reverse">
                                        <button class="button group --has-leading mt-4 --is-secondary --is-small sm:mt-0"
                                            @click.prevent="add_disk = 0">

                                            <div class="button__leading">
                                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
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
                                                    <circle class="opacity-25" cx="12" cy="12"
                                                        r="10" stroke="currentColor" stroke-width="4"></circle>
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

                <div class="relative mb-3 text-left" id="choixTypeRaid">
                    <div class="px-2 py-4 rounded-sm bg-secondary-600">
                        <div
                            class="w-full px-2 mb-4 overflow-hidden text-xl font-medium text-left text-white normal-case text-ellipsis whitespace-nowrap">
                            Choix du type de RAID</div>

                        <ul class="grid gap-4 px-2 mt-8 mb-8 text-xs text-white md:grid-cols-5">
                            <li class="flex items-center space-x-4">
                                <div class="w-5 h-5 border border-white rounded-full bg-primary-500"></div>
                                <div> Espace disponible</div>
                            </li>
                            <li class="flex items-center space-x-4">
                                <div class="w-5 h-5 border border-white rounded-full bg-primary-700"></div>
                                <div> Espace de protection</div>
                            </li>
                            <li class="flex items-center space-x-4">
                                <div class="w-5 h-5 border border-white rounded-full bg-secondary-500"></div>
                                <div> Espace inutilisé</div>
                            </li>
                        </ul>

                        <ul class="grid gap-4 px-2 mt-8 mb-8">
                            <li class="flex items-center gap-4">
                                <label for="no-raid"
                                    class="items-center w-full px-3 py-2 space-y-2 text-sm cursor-pointer sm:flex">
                                    <div class="flex">
                                        <input id="no-raid" type="radio" name="raid"
                                            wire:model="configuration.raid"
                                            class="w-4 h-4 border-gray-300 rounded-full text-primary-600 focus:ring-primary-500"
                                            value="no-raid">
                                        <div class="w-48 pl-2 text-white">
                                            Pas d'option RAID
                                        </div>
                                    </div>
                                    <div class="flex w-full">
                                    </div>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="relative mb-3 text-left bg-secondary-600" id="choixBoitier">
                    <div class="px-2 py-4 rounded-sm">
                        <div
                            class="w-full px-2 mb-4 overflow-hidden text-xl font-medium text-left text-white normal-case text-ellipsis whitespace-nowrap">
                            Choix du boitier</div>
                        <div class="px-2 space-y-2 text-white">
                            <h5 class="flex items-center font-bold">
                                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg> Important :
                            </h5>
                            <p class="text-sm font-medium">
                                Le fabricant QNAP ou Synology ne fournira pas d'assistance technique si votre disque dur ne
                                figure pas dans la liste de compatibilité NAS <a
                                    class="text-base font-bold underline text-primary-500 hover:text-primary-700"
                                    target="_blank" href="https://www.qnap.com/fr-fr/compatibility">QNAP</a> ou <a
                                    class="text-base font-bold underline text-primary-500 hover:text-primary-700"
                                    target="_blank" href="https://www.synology.com/fr-fr/compatibility">Synology</a>
                                (listes mises à jour le 16/10/2022)
                            </p>
                        </div>
                        <ul class="grid gap-4 px-2 mt-8 mb-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5">
                            <li class="flex rounded-sm cursor-pointer min-h-40 bg-secondary-700">

                                <a href="https://sqp.fr/distributeur-tour-vide-10/nas-qnap-tour-ts-364-4g-boitier-nu-3-baies-3525-adapteur-secteur"
                                    class="flex flex-col h-full max-w-full overflow-hidden rounded-sm shadow-lg bg-secondary-600 hover:bg-secondary-700">
                                    <div class="relative h-48 p-2 bg-white sm:h-64 lg:max-h-full">
                                        <img class="h-full w-full object-contain"
                                            srcset="https://sqp.fr/storage/products/products/63730/medias/42153/responsive-images/ts-364-4g-63730___media_library_original_1024_640.jpg 1024w, https://sqp.fr/storage/products/products/63730/medias/42153/responsive-images/ts-364-4g-63730___media_library_original_856_535.jpg 856w, https://sqp.fr/storage/products/products/63730/medias/42153/responsive-images/ts-364-4g-63730___media_library_original_716_447.jpg 716w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMTAyNCA2NDAiPgoJPGltYWdlIHdpZHRoPSIxMDI0IiBoZWlnaHQ9IjY0MCIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJPREFwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FGQUFnQXdFUkFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEEvVVhVcFREYk80NmdVQWM5b09veTM4MGdmc2FTQTE1VmxWd1Y2VXdMOXNTVUdldEFGZlZ5Qlp5RTlNR2dEa3ZDbDlFMTFNQXd5RFJhd2tkVkxkSVJqY0tCbHExT1VGQUVPcW9IczVRZW1LQVBPZE10VXRycVl4NVVsdldnU05CNXBCTkdONXhuMW9HZHpwLy9BQjdwOUtBUC85az0iPgoJPC9pbWFnZT4KPC9zdmc+ 32w"
                                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                            sizes="22vw"
                                            src="https://sqp.fr/storage/products/products/63730/medias/42153/ts-364-4g-63730.jpg"
                                            width="1024" height="640">

                                        <div class="absolute h-6 bg-gray-100 bottom-2 left-2">
                                            <img class="block object-contain object-left w-auto h-full mb-2"
                                                srcset="https://sqp.fr/storage/products/brands/3/medias/3/responsive-images/qnap___media_library_original_296_53.png 296w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMjk2IDU0Ij4KCTxpbWFnZSB3aWR0aD0iMjk2IiBoZWlnaHQ9IjU0IiB4bGluazpocmVmPSJkYXRhOmltYWdlL2pwZWc7YmFzZTY0LC85ai80QUFRU2taSlJnQUJBUUVBWUFCZ0FBRC8vZ0E3UTFKRlFWUlBVam9nWjJRdGFuQmxaeUIyTVM0d0lDaDFjMmx1WnlCSlNrY2dTbEJGUnlCMk9EQXBMQ0J4ZFdGc2FYUjVJRDBnT1RBSy85c0FRd0FEQWdJREFnSURBd01EQkFNREJBVUlCUVVFQkFVS0J3Y0dDQXdLREF3TENnc0xEUTRTRUEwT0VRNExDeEFXRUJFVEZCVVZGUXdQRnhnV0ZCZ1NGQlVVLzlzQVF3RURCQVFGQkFVSkJRVUpGQTBMRFJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVUvOEFBRVFnQUJRQWJBd0VSQUFJUkFRTVJBZi9FQUI4QUFBRUZBUUVCQVFFQkFBQUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVRQUFJQkF3TUNCQU1GQlFRRUFBQUJmUUVDQXdBRUVRVVNJVEZCQmhOUllRY2ljUlF5Z1pHaENDTkNzY0VWVXRId0pETmljb0lKQ2hZWEdCa2FKU1luS0NrcU5EVTJOemc1T2tORVJVWkhTRWxLVTFSVlZsZFlXVnBqWkdWbVoyaHBhbk4wZFhaM2VIbDZnNFNGaG9lSWlZcVNrNVNWbHBlWW1acWlvNlNscHFlb3FhcXlzN1MxdHJlNHVickN3OFRGeHNmSXljclMwOVRWMXRmWTJkcmg0dVBrNWVibjZPbnE4Zkx6OVBYMjkvajUrdi9FQUI4QkFBTUJBUUVCQVFFQkFRRUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVSQUFJQkFnUUVBd1FIQlFRRUFBRUNkd0FCQWdNUkJBVWhNUVlTUVZFSFlYRVRJaktCQ0JSQ2thR3h3UWtqTTFMd0ZXSnkwUW9XSkRUaEpmRVhHQmthSmljb0tTbzFOamM0T1RwRFJFVkdSMGhKU2xOVVZWWlhXRmxhWTJSbFptZG9hV3B6ZEhWMmQzaDVlb0tEaElXR2g0aUppcEtUbEpXV2w1aVptcUtqcEtXbXA2aXBxckt6dExXMnQ3aTV1c0xEeE1YR3g4akp5dExUMU5YVzE5aloydUxqNU9YbTUranA2dkx6OVBYMjkvajUrdi9hQUF3REFRQUNFUU1SQUQ4QS9TaFhlMGE3bUIzRkVac0hQUDYveW9BNC9Udkc5M2IrRGRiMW93eG01dGJXSzVSUmtMKzh0MG4yOStoa3hudmpQR2NVQWFROFM2elpMcmVuM04xQmMzdGhkUld5M2FRR05XOHlPTnczbDdqakhtWXh1NXgyendBU1A0TThmczdGZkhlbktwUEEvc0Jqai95YW9BLy8yUT09Ij4KCTwvaW1hZ2U+Cjwvc3ZnPg== 32w"
                                                onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                                sizes="10vw"
                                                src="https://sqp.fr/storage/products/brands/3/medias/3/qnap.png"
                                                width="296" height="53">

                                        </div>
                                    </div>
                                    <div class="flex flex-col flex-1 px-4 pt-4 pb-8">

                                        <span
                                            class="mt-2 text-xs font-bold text-center uppercase text-primary-500">TS-364-4G</span>
                                        <span
                                            class="flex-1 mt-2 mb-4 overflow-hidden text-xs text-white uppercase break-all ">NAS
                                            QNAP Tour TS-364-4G - Boitier nu - 3 baies 3.5"/2.5" - Adapteur secteur</span>


                                        <div class="mb-2">
                                            <p class="text-xs font-bold text-center uppercase text-primary-500">En stock
                                            </p>
                                        </div>
                                        <div class="flex justify-between w-full mt-auto mb-0">
                                            <button class="button group --has-trailing px-4 mx-auto --is-tertiary"
                                                wire:click.prevent="addToCart(161)" wire:loading.class="--is-loading"
                                                type="button">


                                                <span class="button__caption">
                                                    <span>Ajouter au panier</span>
                                                </span>

                                                <span class="button__trailing">
                                                    <svg class="h-6" transform="scale(-1,1)" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M19.029 13H22l-.266 1h-2.992l.287-1zm.863-3h2.812L23 9h-2.821l-.287 1zm-.576 2h4.387L24 11h-4.396l-.288 1zM22 3l-.743 2h-1.929l-3.474 12H4.615L0 6h14.812l-.564 2H3.008l2.938 7h8.428l3.432-12H22zM7.5 18c-.828 0-1.5.672-1.5 1.5 0 .829.672 1.5 1.5 1.5S9 20.329 9 19.5c0-.828-.672-1.5-1.5-1.5zm5.9-7-.9 7c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5z">
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
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        $("#nombreBaies").hide();
        $("#typeDD").hide();
        $("#marqueDD").hide();
        $("#choixDD").hide();
        $("#choixTypeRaid").hide();
        $("#choixBoitier").hide();

        $("input[name=filters1]").change(function() {
            $('#nbreBaiesWrapper').empty();
            $.ajax({
                url: "{{ route('getNbresBaies') }}",
                type: "POST",
                dataType: 'json',
                data: {
                    typeBoitier: $(this).val(),
                    _token: '{{ csrf_token() }}'
                },
                success: function(result) {
                    $.each(result.nbresBaies, function(key, value) {
                        var element = `<label for="slots-${key}" class="flex items-center px-3 py-2 text-sm cursor-pointer">
                        <input id="slots-${key}" name="filters2" type="radio" class="w-4 h-4 border-gray-300 rounded-full text-primary-600 focus:ring-primary-500" value="${value.nbreBaies}" onChange="getTypeDD(this.value)">
                            <span class="pl-4 mx-3 overflow-hidden font-medium text-white text-ellipsis whitespace-nowrap">${value.nbreBaies}
                            </span>
                            <small class="text-xs text-center opacity-50 text-secondary-300">3 boitiers</small>
                    </label>`;
                        $('#nbreBaiesWrapper').append(element);

                    });
                    $("#nombreBaies").show();
                }
            });
        });

        var getTypeDD = (nbreBaies) => {
            $('#typeDDWrapper').empty();
            $.ajax({
                url: "{{ route('getProductsByNbreBaies') }}",
                type: "POST",
                data: {
                    nbreBaies: nbreBaies,
                    typeBoitier: $("input[name=filters1]").val(),
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(result) {
                    $.each(result.products, function(key, value) {
                        var element = `<label for="typeDD${key}" class="flex items-center px-3 py-2 text-sm cursor-pointer">
                                <input id="hdd-serial-seagate-exos" name="filters3" type="radio"
                                    class="w-4 h-4 border-gray-300 rounded-full text-primary-600 focus:ring-primary-500"
                                    value="${value.typeDD}" onChange="getMarqueDD(this.value)">
                                <span
                                    class="pl-4 mx-3 overflow-hidden font-medium text-white text-ellipsis whitespace-nowrap">${value.typeDD}
                                </span>
                                <small class="text-xs text-center opacity-50 text-secondary-300">7 disques</small>
                            </label>`;
                        $('#typeDDWrapper').append(element);

                    });
                    $("#typeDD").show();
                }
            });
        }

        var getMarqueDD = (typeDD) => {
            $('#marqueDDWrapper').empty();
            $.ajax({
                url: "{{ route('getProductsByTypeDD') }}",
                type: "POST",
                data: {
                    typeDD: typeDD,
                    nbreBaies: $("input[name=filters2]").val(),
                    typeBoitier: $("input[name=filters1]").val(),
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(result) {
                    $.each(result.brands, function(key, value) {
                        var element = `<label for="hdd-brand-seagate" class="flex items-center px-3 py-2 text-sm cursor-pointer">
                                <input id="hdd-brand-seagate" name="filters4" type="radio" wire:model="filters.hdd_brand"
                                    class="w-4 h-4 border-gray-300 rounded-full text-primary-600 focus:ring-primary-500"
                                    value="${value.title}"
                                    onChange="getProducts(this.value)">
                                <span
                                    class="pl-4 mx-3 overflow-hidden font-medium text-white text-ellipsis whitespace-nowrap">${value.title}
                                </span>
                                <small class="text-xs text-center opacity-50 text-secondary-300">8 disques</small>
                            </label>`;
                        $('#marqueDDWrapper').append(element);
                    });
                    $("#marqueDD").show();
                }
            });
        }

        var getProducts = (marqueDD) => {
            $("#DDNumber").text($("input[name=filters2]").val());
            for (var i = 0; i < $("input[name=filters2]").val(); i++) {
                var element =
                    `<li class="flex flex-col items-center justify-center p-4 rounded-sm cursor-pointer min-h-80 bg-secondary-700" id="addDisk${i}">
                <span class="mb-2 text-sm text-center uppercase text-secondary-300">Ajouter un disque</span>
                 <svg aria-hidden="true" class="w-8 h-8 text-secondary-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></li>`;
                $("#addDDWrapper").append(element);
            }

            $("#choixDD").show();
        }

        $("input[name=filters5]").change(function() {
            $.ajax({
                url: "{{ route('getProductsByTypeDD') }}",
                type: "POST",
                data: {
                    typeBoitier: $(this).val(),
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(result) {
                    $("#choixTypeRaid").show();
                }
            });
        });

        $("input[name=filters6]").change(function() {
            $.ajax({
                url: "{{ route('getProductsByTypeDD') }}",
                type: "POST",
                data: {
                    typeBoitier: $(this).val(),
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(result) {
                    $("#choixBoitier").show();
                }
            });
        });
    </script>
@endsection
