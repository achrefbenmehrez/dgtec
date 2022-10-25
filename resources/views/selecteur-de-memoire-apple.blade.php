@extends('layouts.app')

@section('content')
    <div wire:id="xugLV3boYzGV1s9TioAc"
        wire:initial-data='{"fingerprint":{"id":"xugLV3boYzGV1s9TioAc","name":"website.products.ramSelectorApple","locale":"fr","path":"selecteur-de-memoire-apple","method":"GET","v":"acj"},"effects":{"listeners":[],"path":"https:\/\/sqp.fr\/selecteur-de-memoire-apple?"},"serverMemo":{"children":[],"errors":[],"htmlHash":"b1468782","data":{"viewName":"website.products.livewire.ram_selector.apple","filters":[],"form":[],"sortBy":"","sortDirection":"","sortableFields":["capacity","frequency","type"]},"dataMeta":[],"checksum":"c1e366877112c1cfbabb06e979839b9f8b2a18d543cc13bdd7a096c8d420f3e7"}}'
        class="w-full px-4">
        <div class="gap-8 mx-auto mt-8 sm:grid sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 max-w-big">
            <div class="col-span-full">
                <div>
                    <ol class="flex text-xs text-white uppercase jusitfy-center" wire:ignore>
                        <li class="flex items-center h-8">
                            <a href="https://sqp.fr/">Accueil</a>
                        </li>
                    </ol>

                    <h2 class="mb-4 text-2xl font-bold uppercase text-primary-500">
                        Sélecteur de mémoire Apple
                    </h2>
                </div>

                <div class="p-4 bg-secondary-600">
                    <h6 class="mb-6 text-xl font-bold text-secondary-300">
                        Rechercher par machine
                    </h6>

                    <div
                        class="grid flex-wrap items-center justify-between w-full grid-cols-1 gap-4 text-white lg:grid-cols-6 xl:grid-cols-8">
                        <div class="cursor-pointer flex flex-col items-center justify-center w-full h-full p-4 bg-secondary-700 hover:bg-opacity-50"
                            wire:loading.class="opacity-50" wire:click="setSerie('iMac')">
                            <img src="https://sqp.fr/web/img/apple/imac.png?id=b937fb7ad0654f562ad3" alt="iMac"
                                class="h-12" />
                            <p class="mt-4 text-xs font-bold uppercase">iMac</p>
                        </div>
                        <div class="cursor-pointer flex flex-col items-center justify-center w-full h-full p-4 bg-secondary-700 hover:bg-opacity-50"
                            wire:loading.class="opacity-50" wire:click="setSerie('iMac Pro')">
                            <img src="https://sqp.fr/web/img/apple/imac-pro.png?id=93021ff1a951b7df55d4" alt="iMac Pro"
                                class="h-12" />
                            <p class="mt-4 text-xs font-bold uppercase">iMac Pro</p>
                        </div>
                        <div class="cursor-pointer flex flex-col items-center justify-center w-full h-full p-4 bg-secondary-700 hover:bg-opacity-50"
                            wire:loading.class="opacity-50" wire:click="setSerie('Mac Mini')">
                            <img src="https://sqp.fr/web/img/apple/mac-mini.png?id=9c962d5da8a61037b60e" alt="Mac Mini"
                                class="h-12" />
                            <p class="mt-4 text-xs font-bold uppercase">Mac Mini</p>
                        </div>
                        <div class="cursor-pointer flex flex-col items-center justify-center w-full h-full p-4 bg-secondary-700 hover:bg-opacity-50"
                            wire:loading.class="opacity-50" wire:click="setSerie('Mac Pro')">
                            <img src="https://sqp.fr/web/img/apple/mac-pro.png?id=eedf50bc95719228451f" alt="Mac Pro"
                                class="h-12" />
                            <p class="mt-4 text-xs font-bold uppercase">Mac Pro</p>
                        </div>
                        <div class="cursor-pointer flex flex-col items-center justify-center w-full h-full p-4 bg-secondary-700 hover:bg-opacity-50"
                            wire:loading.class="opacity-50" wire:click="setSerie('MacBook')">
                            <img src="https://sqp.fr/web/img/apple/macbook.png?id=e1e0da7e4e85327fafe9" alt="MacBook"
                                class="h-12" />
                            <p class="mt-4 text-xs font-bold uppercase">MacBook</p>
                        </div>
                        <div class="cursor-pointer flex flex-col items-center justify-center w-full h-full p-4 bg-secondary-700 hover:bg-opacity-50"
                            wire:loading.class="opacity-50" wire:click="setSerie('MacBook Pro')">
                            <img src="https://sqp.fr/web/img/apple/macbook-pro.png?id=18d515eace959728bd7c"
                                alt="MacBook Pro" class="h-12" />
                            <p class="mt-4 text-xs font-bold uppercase">MacBook Pro</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Livewire Component wire-end:xugLV3boYzGV1s9TioAc -->
@endsection
