@extends('layouts.app')

@section('content')
    <div wire:id="BmlG6uvIJEkXWJlpvxNL"
        wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;BmlG6uvIJEkXWJlpvxNL&quot;,&quot;name&quot;:&quot;website.products.nasConfigurator&quot;,&quot;locale&quot;:&quot;fr&quot;,&quot;path&quot;:&quot;configurateur-de-nas&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[],&quot;path&quot;:&quot;https:\/\/sqp.fr\/configurateur-de-nas?&quot;},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;8a7a947d&quot;,&quot;data&quot;:{&quot;disks&quot;:[],&quot;type&quot;:&quot;NAS&quot;,&quot;filters&quot;:[],&quot;configuration&quot;:[],&quot;diskSelector&quot;:{&quot;show&quot;:false,&quot;slot&quot;:0},&quot;sortBy&quot;:null,&quot;sortDirection&quot;:null,&quot;display&quot;:&quot;grid&quot;,&quot;perPage&quot;:20,&quot;page&quot;:1,&quot;paginators&quot;:{&quot;page&quot;:1}},&quot;dataMeta&quot;:{&quot;collections&quot;:[&quot;disks&quot;]},&quot;checksum&quot;:&quot;89a17ee8015bfae11110bae434eb45d9ba2d1e41f308c39655e89481d1b3a500&quot;}}"
        class="w-full px-4">
        <div class="gap-8 mx-auto mt-8 sm:grid sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 max-w-big">

            <div class="col-span-full">
                <div>
                    <ol class="flex text-xs text-white uppercase jusitfy-center" wire:ignore>
                        <li class="flex items-center h-8">
                            <a href="https://sqp.fr/">Accueil</a>
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
                                <input id='casing-type-tour' name='filters[casing_type]' type="radio"
                                    wire:model='filters.casing_type'
                                    class="w-4 h-4 border-gray-300 rounded-full text-primary-600 focus:ring-primary-500"
                                    value="Tour" wire:change="filter('casing_type')">
                                <span
                                    class="pl-4 mx-3 overflow-hidden font-medium text-white text-ellipsis whitespace-nowrap">Tour
                                </span>
                                <small class="text-xs text-center opacity-50 text-secondary-300">58 boitiers</small>
                            </label>
                            <label for='casing-type-rack'class="flex items-center px-3 py-2 text-sm cursor-pointer">
                                <input id='casing-type-rack' name='filters[casing_type]' type="radio"
                                    wire:model='filters.casing_type'
                                    class="w-4 h-4 border-gray-300 rounded-full text-primary-600 focus:ring-primary-500"
                                    value="Rack" wire:change="filter('casing_type')">
                                <span
                                    class="pl-4 mx-3 overflow-hidden font-medium text-white text-ellipsis whitespace-nowrap">Rack
                                </span>
                                <small class="text-xs text-center opacity-50 text-secondary-300">43 boitiers</small>
                            </label>
                        </div>
                    </div>
                </div>







            </div>
        </div>
    </div>

    <!-- Livewire Component wire-end:BmlG6uvIJEkXWJlpvxNL -->
@endsection
