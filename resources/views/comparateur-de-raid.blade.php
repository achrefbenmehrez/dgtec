@extends('layouts.app')

@section('content')
    <div wire:id="LgqPgheDoiptbttG9IwQ"
        wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;LgqPgheDoiptbttG9IwQ&quot;,&quot;name&quot;:&quot;website.products.raidSelector&quot;,&quot;locale&quot;:&quot;fr&quot;,&quot;path&quot;:&quot;comparateur-de-raid&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[],&quot;path&quot;:&quot;https:\/\/sqp.fr\/comparateur-de-raid?&quot;},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;fca9227a&quot;,&quot;data&quot;:{&quot;disks&quot;:[],&quot;slots&quot;:null,&quot;queryString&quot;:{&quot;slots&quot;:{&quot;except&quot;:&quot;&quot;},&quot;disks&quot;:{&quot;except&quot;:[]}}},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;63852c59203945d43180e9d9970e58a9d67be0db5d84eb24dc2f26f16b0c1132&quot;}}"
        class="w-full px-4">
        <div class="gap-8 mx-auto mt-8 sm:grid sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 max-w-big">

            <div class="col-span-full">
                <div>
                    <ol class="flex text-xs text-white uppercase jusitfy-center" wire:ignore>
                        <li class="flex items-center h-8">
                            <a href="https://sqp.fr/">Accueil</a>
                        </li>

                    </ol>

                    <h2 class="mb-4 text-2xl font-bold uppercase text-primary-500">Comparateur RAID</h2>
                </div>

                <div class="w-full p-4 mt-8 mb-4 rounded-sm bg-secondary-600">
                    <div class="flex">
                        <div class="shrink-0">
                            <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="flex-1 ml-3 md:flex md:justify-between">
                            <p class="text-sm text-white">
                                Sélectionnez le nombre et la capacité des disques de votre NAS pour comparer les différents
                                niveaux de RAID disponibles.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="relative mb-3 text-left">
                    <div class="px-2 py-4 rounded-sm bg-secondary-600">
                        <div
                            class="w-full px-2 mb-4 overflow-hidden text-xl font-medium text-left text-white normal-case text-ellipsis whitespace-nowrap">
                            Nombre de disques</div>

                        <div class="grid py-4 pt-2 sm:grid-cols-2 md:grid-cols-4">
                            <label for='slots-2'class="flex items-center px-3 py-2 text-sm cursor-pointer">
                                <input id='slots-2' name='slots' type="radio" wire:model='slots'
                                    class="w-4 h-4 border-gray-300 rounded-full text-primary-600 focus:ring-primary-500"
                                    value="2" wire:change="changeSlots">
                                <span
                                    class="pl-4 mx-3 overflow-hidden font-medium text-white text-ellipsis whitespace-nowrap">2
                                </span>
                            </label>
                            <label for='slots-3'class="flex items-center px-3 py-2 text-sm cursor-pointer">
                                <input id='slots-3' name='slots' type="radio" wire:model='slots'
                                    class="w-4 h-4 border-gray-300 rounded-full text-primary-600 focus:ring-primary-500"
                                    value="3" wire:change="changeSlots">
                                <span
                                    class="pl-4 mx-3 overflow-hidden font-medium text-white text-ellipsis whitespace-nowrap">3
                                </span>
                            </label>
                            <label for='slots-4'class="flex items-center px-3 py-2 text-sm cursor-pointer">
                                <input id='slots-4' name='slots' type="radio" wire:model='slots'
                                    class="w-4 h-4 border-gray-300 rounded-full text-primary-600 focus:ring-primary-500"
                                    value="4" wire:change="changeSlots">
                                <span
                                    class="pl-4 mx-3 overflow-hidden font-medium text-white text-ellipsis whitespace-nowrap">4
                                </span>
                            </label>
                            <label for='slots-6'class="flex items-center px-3 py-2 text-sm cursor-pointer">
                                <input id='slots-6' name='slots' type="radio" wire:model='slots'
                                    class="w-4 h-4 border-gray-300 rounded-full text-primary-600 focus:ring-primary-500"
                                    value="6" wire:change="changeSlots">
                                <span
                                    class="pl-4 mx-3 overflow-hidden font-medium text-white text-ellipsis whitespace-nowrap">6
                                </span>
                            </label>
                            <label for='slots-8'class="flex items-center px-3 py-2 text-sm cursor-pointer">
                                <input id='slots-8' name='slots' type="radio" wire:model='slots'
                                    class="w-4 h-4 border-gray-300 rounded-full text-primary-600 focus:ring-primary-500"
                                    value="8" wire:change="changeSlots">
                                <span
                                    class="pl-4 mx-3 overflow-hidden font-medium text-white text-ellipsis whitespace-nowrap">8
                                </span>
                            </label>
                            <label for='slots-9'class="flex items-center px-3 py-2 text-sm cursor-pointer">
                                <input id='slots-9' name='slots' type="radio" wire:model='slots'
                                    class="w-4 h-4 border-gray-300 rounded-full text-primary-600 focus:ring-primary-500"
                                    value="9" wire:change="changeSlots">
                                <span
                                    class="pl-4 mx-3 overflow-hidden font-medium text-white text-ellipsis whitespace-nowrap">9
                                </span>
                            </label>
                            <label for='slots-10'class="flex items-center px-3 py-2 text-sm cursor-pointer">
                                <input id='slots-10' name='slots' type="radio" wire:model='slots'
                                    class="w-4 h-4 border-gray-300 rounded-full text-primary-600 focus:ring-primary-500"
                                    value="10" wire:change="changeSlots">
                                <span
                                    class="pl-4 mx-3 overflow-hidden font-medium text-white text-ellipsis whitespace-nowrap">10
                                </span>
                            </label>
                            <label for='slots-12'class="flex items-center px-3 py-2 text-sm cursor-pointer">
                                <input id='slots-12' name='slots' type="radio" wire:model='slots'
                                    class="w-4 h-4 border-gray-300 rounded-full text-primary-600 focus:ring-primary-500"
                                    value="12" wire:change="changeSlots">
                                <span
                                    class="pl-4 mx-3 overflow-hidden font-medium text-white text-ellipsis whitespace-nowrap">12
                                </span>
                            </label>
                            <label for='slots-16'class="flex items-center px-3 py-2 text-sm cursor-pointer">
                                <input id='slots-16' name='slots' type="radio" wire:model='slots'
                                    class="w-4 h-4 border-gray-300 rounded-full text-primary-600 focus:ring-primary-500"
                                    value="16" wire:change="changeSlots">
                                <span
                                    class="pl-4 mx-3 overflow-hidden font-medium text-white text-ellipsis whitespace-nowrap">16
                                </span>
                            </label>
                            <label for='slots-18'class="flex items-center px-3 py-2 text-sm cursor-pointer">
                                <input id='slots-18' name='slots' type="radio" wire:model='slots'
                                    class="w-4 h-4 border-gray-300 rounded-full text-primary-600 focus:ring-primary-500"
                                    value="18" wire:change="changeSlots">
                                <span
                                    class="pl-4 mx-3 overflow-hidden font-medium text-white text-ellipsis whitespace-nowrap">18
                                </span>
                            </label>
                            <label for='slots-20'class="flex items-center px-3 py-2 text-sm cursor-pointer">
                                <input id='slots-20' name='slots' type="radio" wire:model='slots'
                                    class="w-4 h-4 border-gray-300 rounded-full text-primary-600 focus:ring-primary-500"
                                    value="20" wire:change="changeSlots">
                                <span
                                    class="pl-4 mx-3 overflow-hidden font-medium text-white text-ellipsis whitespace-nowrap">20
                                </span>
                            </label>
                            <label for='slots-24'class="flex items-center px-3 py-2 text-sm cursor-pointer">
                                <input id='slots-24' name='slots' type="radio" wire:model='slots'
                                    class="w-4 h-4 border-gray-300 rounded-full text-primary-600 focus:ring-primary-500"
                                    value="24" wire:change="changeSlots">
                                <span
                                    class="pl-4 mx-3 overflow-hidden font-medium text-white text-ellipsis whitespace-nowrap">24
                                </span>
                            </label>
                            <label for='slots-30'class="flex items-center px-3 py-2 text-sm cursor-pointer">
                                <input id='slots-30' name='slots' type="radio" wire:model='slots'
                                    class="w-4 h-4 border-gray-300 rounded-full text-primary-600 focus:ring-primary-500"
                                    value="30" wire:change="changeSlots">
                                <span
                                    class="pl-4 mx-3 overflow-hidden font-medium text-white text-ellipsis whitespace-nowrap">30
                                </span>
                            </label>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- Livewire Component wire-end:LgqPgheDoiptbttG9IwQ -->
@endsection
