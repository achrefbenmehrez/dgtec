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

                <div class="relative mb-3 text-left" id="capaciteDD">
                    <div class="px-2 py-4 rounded-sm bg-secondary-600">
                        <div
                            class="w-full px-2 mb-4 overflow-hidden text-xl font-medium text-left text-white normal-case text-ellipsis whitespace-nowrap">
                            Capacité des disques durs</div>

                        <p class="px-2 mt-8 text-sm text-white">Choisisez les disques à utiliser</p>
                        <div class="flex flex-wrap">
                            <div class="p-2">
                                <div class="flex items-center justify-center w-12 h-16 text-sm text-white cursor-pointer bg-primary-500 hover:bg-primary-600"
                                    wire:click="selectDisk(1000)" onClick="addDisk(this.innerHTML)">1 TB</div>
                            </div>
                            <div class="p-2">
                                <div class="flex items-center justify-center w-12 h-16 text-sm text-white cursor-pointer bg-primary-500 hover:bg-primary-600"
                                    wire:click="selectDisk(2000)" onClick="addDisk(this.innerHTML)"">2 TB</div>
                            </div>
                            <div class="p-2">
                                <div class="flex items-center justify-center w-12 h-16 text-sm text-white cursor-pointer bg-primary-500 hover:bg-primary-600"
                                    wire:click="selectDisk(3000)" onClick="addDisk(this.innerHTML)"">3 TB</div>
                            </div>
                            <div class="p-2">
                                <div class="flex items-center justify-center w-12 h-16 text-sm text-white cursor-pointer bg-primary-500 hover:bg-primary-600"
                                    wire:click="selectDisk(4000)" onClick="addDisk(this.innerHTML)"">4 TB</div>
                            </div>
                            <div class="p-2">
                                <div class="flex items-center justify-center w-12 h-16 text-sm text-white cursor-pointer bg-primary-500 hover:bg-primary-600"
                                    wire:click="selectDisk(6000)" onClick="addDisk(this.innerHTML)"">6 TB</div>
                            </div>
                            <div class="p-2">
                                <div class="flex items-center justify-center w-12 h-16 text-sm text-white cursor-pointer bg-primary-500 hover:bg-primary-600"
                                    wire:click="selectDisk(8000)" onClick="addDisk(this.innerHTML)"">8 TB</div>
                            </div>
                            <div class="p-2">
                                <div class="flex items-center justify-center w-12 h-16 text-sm text-white cursor-pointer bg-primary-500 hover:bg-primary-600"
                                    wire:click="selectDisk(10000)" onClick="addDisk(this.innerHTML)"">10 TB</div>
                            </div>
                            <div class="p-2">
                                <div class="flex items-center justify-center w-12 h-16 text-sm text-white cursor-pointer bg-primary-500 hover:bg-primary-600"
                                    wire:click="selectDisk(12000)" onClick="addDisk(this.innerHTML)">12 TB</div>
                            </div>
                            <div class="p-2">
                                <div class="flex items-center justify-center w-12 h-16 text-sm text-white cursor-pointer bg-primary-500 hover:bg-primary-600"
                                    wire:click="selectDisk(14000)" onClick="addDisk(this.innerHTML)">14 TB</div>
                            </div>
                            <div class="p-2">
                                <div class="flex items-center justify-center w-12 h-16 text-sm text-white cursor-pointer bg-primary-500 hover:bg-primary-600"
                                    wire:click="selectDisk(16000)" onClick="addDisk(this.innerHTML)">16 TB</div>
                            </div>
                            <div class="p-2">
                                <div class="flex items-center justify-center w-12 h-16 text-sm text-white cursor-pointer bg-primary-500 hover:bg-primary-600"
                                    wire:click="selectDisk(18000)" onClick="addDisk(this.innerHTML)">18 TB</div>
                            </div>
                            <div class="p-2">
                                <div class="flex items-center justify-center w-12 h-16 text-sm text-white cursor-pointer bg-primary-500 hover:bg-primary-600"
                                    wire:click="selectDisk(20000)" onClick="addDisk(this.innerHTML)">20 TB</div>
                            </div>
                        </div>
                        <p class="px-2 mt-8 text-sm text-white">Disques sélectionnés</p>
                        <p class="px-2 text-xs text-white">(Cliquer sur un disque pour le retirer)</p>
                        <div class="flex flex-wrap" id="selectedDiskWrapper">

                        </div>
                    </div>
                </div>

                <div class="relative mb-3 text-left" id="comparatifRaid">
                    <div class="px-2 py-4 rounded-sm bg-secondary-600">
                        <div
                            class="w-full px-2 mb-4 overflow-hidden text-xl font-medium text-left text-white normal-case text-ellipsis whitespace-nowrap">
                            Comparatif RAID</div>

                        <ul class="grid gap-4 px-2 mt-8 mb-8 text-xs text-white md:grid-cols-5">
                            <li class="flex items-center space-x-4">
                                <div class="w-5 h-5 border border-white rounded-full bg-primary-500"></div>
                                <div> Espace disponible *</div>
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

                        <p class="px-2 text-xs text-secondary-100">* Capacité de stockage disponible avant formatage,
                            capacité brute. Pour avoir une capacité de stockage utile, prévoir la perte d’espace dûe au
                            formatage (environ 10%)</p>

                        <ul class="grid gap-4 px-2 mt-8 mb-8">
                            <li class="flex items-center gap-4">
                                <label for="raid-0"
                                    class="items-center w-full px-3 py-2 space-y-2 text-sm cursor-pointer sm:flex">
                                    <div class="flex">
                                        <div class="w-48 pl-2 text-white">
                                            RAID 0
                                        </div>
                                    </div>
                                    <div class="flex w-full">
                                        <div class="flex items-center justify-center flex-1 h-8 text-sm text-white md:flex-auto bg-primary-500"
                                            style="width: 100%" id="raid-0">
                                            14 TB
                                        </div>
                                    </div>
                                </label>
                            </li>
                            <li class="flex items-center gap-4">
                                <label for="raid-1"
                                    class="items-center w-full px-3 py-2 space-y-2 text-sm cursor-pointer sm:flex">
                                    <div class="flex">
                                        <div class="w-48 pl-2 text-white">
                                            RAID 1
                                        </div>
                                    </div>
                                    <div class="flex w-full">
                                        <div class="flex items-center justify-center flex-1 h-8 text-sm text-white md:flex-auto bg-primary-500"
                                            style="width: 42.857142857143%">
                                            6 TB
                                        </div>
                                    </div>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        $("#capaciteDD").hide();
        $("#comparatifRaid").hide();

        var lastIndex = 0;
        var totalValue = 0;

        var addDisk = (value) => {
            var intVal = parseInt(value.split(" ")[0])
            totalValue += intVal;

            $(`#selectedDisk${lastIndex}`).empty();
            $(`#selectedDisk${lastIndex}`).append(
                `<div class="flex items-center justify-center w-12 h-16 text-sm text-white cursor-pointer bg-secondary-500 hover:bg-secondary-700" onClick="removeDisk(this.innerHTML)" wire:click="removeDisk(1)">${value}</div>`
            );
            lastIndex++;

            $("#raid-0").text(totalValue + " TB");
        }

        var removeDisk = (value) => {
            var intVal = parseInt(value.split(" ")[0])
            totalValue -= intVal;

            if (!lastIndex == 0) {
                $(`#selectedDisk${lastIndex}`).empty();
                lastIndex--;
            }

            $("#raid-0").text(totalValue + " TB");
        }

        $("input[name=slots]").change(function() {
            $("#selectedDiskWrapper").empty();
            lastIndex = 0;
            for (var index = 0; index < $(this).val(); index++) {
                var element = `<div class="p-2" id="selectedDisk${index}">
                                <div
                                    class="flex items-center justify-center w-12 h-16 text-sm text-white bg-opacity-25 cursor-pointer bg-secondary-500">
                                </div>
                            </div>`;
                $('#selectedDiskWrapper').append(element);
            }

            $("#capaciteDD").show();
            $("#comparatifRaid").show();
        });
    </script>
@endsection
