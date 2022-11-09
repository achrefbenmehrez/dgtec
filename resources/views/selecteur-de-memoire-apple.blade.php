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
                            wire:loading.class="opacity-50" id="iMac" data-name="iMac">
                            <img src="https://sqp.fr/web/img/apple/imac.png?id=b937fb7ad0654f562ad3" alt="iMac"
                                class="h-12" />
                            <p class="mt-4 text-xs font-bold uppercase">iMac</p>
                        </div>
                        <div class="cursor-pointer flex flex-col items-center justify-center w-full h-full p-4 bg-secondary-700 hover:bg-opacity-50"
                            wire:loading.class="opacity-50" id="iMacPro" data-name="iMac Pro">
                            <img src="https://sqp.fr/web/img/apple/imac-pro.png?id=93021ff1a951b7df55d4" alt="iMac Pro"
                                class="h-12" />
                            <p class="mt-4 text-xs font-bold uppercase">iMac Pro</p>
                        </div>
                        <div class="cursor-pointer flex flex-col items-center justify-center w-full h-full p-4 bg-secondary-700 hover:bg-opacity-50"
                            wire:loading.class="opacity-50" id="macMini" data-name="Mac Mini">
                            <img src="https://sqp.fr/web/img/apple/mac-mini.png?id=9c962d5da8a61037b60e" alt="Mac Mini"
                                class="h-12" />
                            <p class="mt-4 text-xs font-bold uppercase">Mac Mini</p>
                        </div>
                        <div class="cursor-pointer flex flex-col items-center justify-center w-full h-full p-4 bg-secondary-700 hover:bg-opacity-50"
                            wire:loading.class="opacity-50" id="macPro" data-name="Mac Pro">
                            <img src="https://sqp.fr/web/img/apple/mac-pro.png?id=eedf50bc95719228451f" alt="Mac Pro"
                                class="h-12" />
                            <p class="mt-4 text-xs font-bold uppercase">Mac Pro</p>
                        </div>
                        <div class="cursor-pointer flex flex-col items-center justify-center w-full h-full p-4 bg-secondary-700 hover:bg-opacity-50"
                            wire:loading.class="opacity-50" id="macBook" data-name="MacBook">
                            <img src="https://sqp.fr/web/img/apple/macbook.png?id=e1e0da7e4e85327fafe9" alt="MacBook"
                                class="h-12" />
                            <p class="mt-4 text-xs font-bold uppercase">MacBook</p>
                        </div>
                        <div class="cursor-pointer flex flex-col items-center justify-center w-full h-full p-4 bg-secondary-700 hover:bg-opacity-50"
                            wire:loading.class="opacity-50" id="macBookPro" data-name="MacBook Pro">
                            <img src="https://sqp.fr/web/img/apple/macbook-pro.png?id=18d515eace959728bd7c"
                                alt="MacBook Pro" class="h-12" />
                            <p class="mt-4 text-xs font-bold uppercase">MacBook Pro</p>
                        </div>
                    </div>
                    <div id="selecteur"
                        class="grid flex-wrap items-center justify-between w-full grid-cols-1 gap-4 mb-4 text-white lg:grid-cols-4">
                        <div>
                            <h6 class="mt-10 mb-2 text-sm text-secondary-300">Année de production :</h6>
                            <select id="anneeProduction"
                                class="w-full border-transparent rounded-sm shadow-sm bg-secondary-700 focus:ring-primary-500 focus:border-primary-500 sm:text-sm">
                            </select>
                        </div>
                        <div>
                            <h6 class="mt-10 mb-2 text-sm text-secondary-300">Modèle exact :</h6>
                            <select id="product"
                                class="w-full border-transparent rounded-sm shadow-sm bg-secondary-700 focus:ring-primary-500 focus:border-primary-500 sm:text-sm">
                            </select>
                        </div>
                    </div>
                </div>

                <div class="p-4 mt-4 bg-secondary-600" id="caracteristiques">
                    <h6 class="mb-6 text-xl font-bold text-secondary-300">Caractéristiques de la machine</h6>
                    <div
                        class="grid flex-wrap items-center justify-between w-full grid-cols-1 gap-4 text-white lg:grid-cols-4">
                        <p class="col-span-4 font-thin text-secondary-300">Série: <span id="serieProduct"
                                class="font-bold text-secondary-100"></span></p>
                        <p class="col-span-4 font-thin text-secondary-300">Modèle: <span id="nomProduct"
                                class="font-bold text-secondary-100"></span></p>
                        <p class="col-span-4 font-thin text-secondary-300">Emplacements mémoire: <span
                                class="font-bold text-secondary-100" id="emplacementsMemoire"></span></p>
                        <p class="col-span-4 font-thin text-secondary-300">Taille mémoire de base: <span
                                class="font-bold text-secondary-100" id="tailleMemoireBase"></span></p>
                        <p class="col-span-4 font-thin text-secondary-300">Taille mémoire max: <span
                                class="font-bold text-secondary-100" id="tailleMemoireMax"></span></p>
                    </div>
                </div>

                <div class="p-4 mt-8 mb-8 bg-secondary-600" id="trierPar">
                    <h6 class="mb-6 text-xl font-bold text-secondary-300">Tier par</h6>
                    <div
                        class="grid flex-wrap items-center justify-between w-full grid-cols-1 gap-4 text-white lg:grid-cols-4">
                        <select wire:model="sortBy"
                            class="border-transparent rounded-sm shadow-sm bg-secondary-700 focus:ring-primary-500 focus:border-primary-500 sm:text-sm">
                            <option value="capacity">Capacité RAM</option>
                            <option value="frequency">Fréquence Mhz / bande passante</option>
                            <option value="type">Type</option>
                        </select>
                        <select wire:model="sortDirection"
                            class="border-transparent rounded-sm shadow-sm bg-secondary-700 focus:ring-primary-500 focus:border-primary-500 sm:text-sm">
                            <option value="asc">Croissant</option>
                            <option value="desc">Décroissant</option>
                        </select>
                    </div>
                </div>

                <div class="w-full" id="resultats">
                    <h3 class="hidden px-4 pt-8 pb-4 text-base text-center uppercase lg:block text-secondary-300">Mémoires
                        1866 MHz - PC3-14900 - ECC</h3>
                    <table class="hidden w-full mb-8 border-separate rounded lg:table" style="border-spacing: 0 .5rem">
                        <tbody id="products_header">
                            <tr>
                                <th class="text-xs font-medium text-left text-white uppercase">
                                    <div class="px-4 py-2">Ref. DGTEC</div>
                                </th>
                                <th class="text-xs font-medium text-center text-white uppercase">
                                    <div class="px-4 py-2">Capacité RAM</div>
                                </th>
                                <th class="text-xs font-medium text-center text-white uppercase">
                                    <div class="px-4 py-2 whitespace-nowrap">
                                        Catégorie RAM
                                    </div>
                                </th>
                                <th class="text-xs font-medium text-center text-white uppercase">
                                    <div class="px-4 py-2">
                                        Format RAM
                                    </div>
                                </th>
                                <th class="text-xs font-medium text-center text-white uppercase">
                                    <div class="px-4 py-2">
                                        Fréquence Mhz / bande passante
                                    </div>
                                </th>
                                <th class="text-xs font-medium text-center text-white uppercase">
                                    <div class="px-4 py-2">
                                        Type
                                    </div>
                                </th>
                                <th class="text-xs font-medium text-center text-white uppercase">
                                    <div class="px-4 py-2">
                                        Organisation
                                    </div>
                                </th>
                                <th class="text-xs font-medium text-center text-white uppercase">
                                    <div class="px-4 py-2">
                                        Voltage
                                    </div>
                                </th>
                                <th class="text-xs font-medium text-center text-white uppercase">
                                    <div class="px-4 py-2">
                                        <span class="sr-only">Stock</span>
                                    </div>
                                </th>
                                <th class="text-xs font-medium text-center text-white uppercase">
                                    <div class="px-4 py-2">
                                        <span class="sr-only">Quantité</span>
                                    </div>
                                </th>
                            </tr>

                            <!-- Livewire Component wire-end:SdfRL1sBdyi2crLWuEfC -->
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>

    <script>
        var products = [];
        $("#selecteur").hide();
        $("#caracteristiques").hide();
        $("#trierPar").hide();
        $("#resultats").hide();
        $("#iMac").click(function() {
            if (!$(this).hasClass('selected')) {
                $(this).removeClass('bg-secondary-700');
                $(this).addClass('bg-primary-400');
                $(this).addClass('pointer-events-none');
            }
            $(".selected").addClass('bg-secondary-700');
            $(".selected").removeClass('bg-primary-400');
            $(".selected").removeClass('pointer-events-none');

            $(".selected").removeClass('selected');
            $(this).addClass('selected');
            $("#selecteur").show();
            getAnneeProduction();
        });

        $("#iMacPro").click(function() {
            if (!$(this).hasClass('selected')) {
                $(this).removeClass('bg-secondary-700');
                $(this).addClass('bg-primary-400');
                $(this).addClass('pointer-events-none');
            }
            $(".selected").addClass('bg-secondary-700');
            $(".selected").removeClass('bg-primary-400');
            $(".selected").removeClass('pointer-events-none');

            $(".selected").removeClass('selected');
            $(this).addClass('selected');
            $("#selecteur").show();
            getAnneeProduction();
        });

        $("#macMini").click(function() {
            if (!$(this).hasClass('selected')) {
                $(this).removeClass('bg-secondary-700');
                $(this).addClass('bg-primary-400');
                $(this).addClass('pointer-events-none');
            }
            $(".selected").addClass('bg-secondary-700');
            $(".selected").removeClass('bg-primary-400');
            $(".selected").removeClass('pointer-events-none');

            $(".selected").removeClass('selected');
            $(this).addClass('selected');
            $("#selecteur").show();
            getAnneeProduction();
        });

        $("#macPro").click(function() {
            if (!$(this).hasClass('selected')) {
                $(this).removeClass('bg-secondary-700');
                $(this).addClass('bg-primary-400');
                $(this).addClass('pointer-events-none');
            }
            $(".selected").addClass('bg-secondary-700');
            $(".selected").removeClass('bg-primary-400');
            $(".selected").removeClass('pointer-events-none');

            $(".selected").removeClass('selected');
            $(this).addClass('selected');
            $("#selecteur").show();
            getAnneeProduction();
        });

        $("#macBook").click(function() {
            if (!$(this).hasClass('selected')) {
                $(this).removeClass('bg-secondary-700');
                $(this).addClass('bg-primary-400');
                $(this).addClass('pointer-events-none');
            }
            $(".selected").addClass('bg-secondary-700');
            $(".selected").removeClass('bg-primary-400');
            $(".selected").removeClass('pointer-events-none');

            $(".selected").removeClass('selected');
            $(this).addClass('selected');
            $("#selecteur").show();
            getAnneeProduction();
        });

        $("#macBookPro").click(function() {
            if (!$(this).hasClass('selected')) {
                $(this).removeClass('bg-secondary-700');
                $(this).addClass('bg-primary-400');
                $(this).addClass('pointer-events-none');
            }
            $(".selected").addClass('bg-secondary-700');
            $(".selected").removeClass('bg-primary-400');
            $(".selected").removeClass('pointer-events-none');

            $(".selected").removeClass('selected');
            $(this).addClass('selected');
            $("#selecteur").show();
            getAnneeProduction();
        });

        $('#anneeProduction').change(function() {
            var anneeProduct = this.value;
            $("#product").html('');
            $.ajax({
                url: "{{ route('getProductsParAnneeProd') }}",
                type: "POST",
                data: {
                    anneeProd: $(this).val(),
                    nomFamille: $(".selected").attr('id'),
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(res) {
                    products = res.products;
                    $('#product').html(
                        '<option value="">-- Select Product --</option>');
                    $.each(res.products, function(key, value) {
                        $("#product").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                }
            });
        });

        const getAnneeProduction = () => {
            $.ajax({
                url: "{{ route('getAnneeProd') }}",
                type: "POST",
                data: {
                    name: $(".selected").data('name'),
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(res) {
                    $('#anneeProduction').html(
                        '<option value="">-- Select Annee de production --</option>');
                    $.each(res.annee_production, function(key, value) {
                        $("#anneeProduction").append('<option value="' + value.annee_production +
                            '">' + value.annee_production + '</option>');
                    });
                }
            });
        }

        $('#product').change(function() {
            $.ajax({
                url: "{{ route('getProduct') }}",
                type: "POST",
                data: {
                    product_id: $(this).val(),
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(response) {
                    $("#serieProduct").text(response.nomFamille);
                    $("#nomProduct").text(response.product.name);
                    $('#emplacementsMemoire').text(response.emplacements_memoire);
                    $('#tailleMemoireBase').text(response.taille_memoire_base) + 'GB';
                    $('#tailleMemoireMax').text(response.taille_memoire_max) + 'GB';

                    $.ajax({
                        url: "{{ route('getProductsByCapacite') }}",
                        type: "POST",
                        data: {
                            emplacements: response.emplacements_memoire,
                            min: response.taille_memoire_base,
                            max: response.taille_memoire_max,
                            _token: '{{ csrf_token() }}'
                        },
                        dataType: 'json',
                        success: function(response) {
                            $.each(response.products, function(key, value) {
                                var id = value[1]['id'];
                                var capacite = value[0]['capacite'] + "GB";
                                var categorie = value[0]['categorie'];
                                var format = value[0]['format'];
                                var frequence = value[0]['frequence'] + "MHZ";
                                var type = value[0]['type'];
                                var organisation = value[0]['organisation'];
                                var voltage = value[0]['voltage'] + "V";
                                var stock = value[1]['quantiteStock'] > 0 ?
                                    'En stock' : 'Stock Epuisé';

                                var element = `<tr id="products${key}" class="shadow-lg bg-secondary-600">
                                <td>
                                    <a class="flex px-4 py-2"
                                        href="https://sqp.fr/distributeur-ram-pour-apple/memoire-sqp-specifique-pour-apple-16-gb-ddr3-dimm-1866-mhz-pc3-14900-eccregistered-2r4-15v-cl13">
                                        <div class="flex flex-col justify-center">
                                            <p class="mb-1 font-medium text-md text-primary-500" id="ref${key}">${id}</p>
                                        </div>
                                    </a>
                                </td>

                                <th class="text-xs font-medium text-center text-white uppercase">
                                    <div class="px-4 py-2" id="capacite${key}">${capacite}</div>
                                </th>
                                <th class="text-xs font-medium text-center text-white uppercase">
                                    <div class="px-4 py-2 whitespace-nowrap" id="categorie${key}">
                                        ${categorie}
                                    </div>
                                </th>
                                <th class="text-xs font-medium text-center text-white uppercase">
                                    <div class="px-4 py-2" id="format${key}">
                                        ${format}
                                    </div>
                                </th>
                                <th class="text-xs font-medium text-center text-white uppercase">
                                    <div class="px-4 py-2" id="frequence${key}">
                                        ${frequence}
                                    </div>
                                </th>
                                <th class="text-xs font-medium text-center text-white uppercase">
                                    <div class="px-4 py-2" id="type${key}">
                                        ${type}
                                    </div>
                                </th>
                                <th class="text-xs font-medium text-center text-white uppercase">
                                    <div class="px-4 py-2" id="organisation${key}">
                                        ${organisation}
                                    </div>
                                </th>
                                <th class="text-xs font-medium text-center text-white uppercase">
                                    <div class="px-4 py-2" id="voltage${key}">
                                        ${voltage}
                                    </div>
                                </th>


                                <td class="w-0">
                                    <div class="px-4 py-2 whitespace-nowrap">
                                        <p class="text-xs font-bold text-center uppercase text-primary-500"
                                        id="stock${key}">${stock}</p>
                                    </div>
                                </td>

                                <td class="w-0">
                                    <div class="flex justify-end px-4 py-2 text-sm text-center">
                                        <input
                                            class="w-16 py-2 pl-3 text-center text-white border-transparent bg-secondary-600"
                                            type="number" wire:model="quantity">
                                        <button class="button group px-4 --is-small --is-tertiary"
                                            wire:click.prevent="addToCart" wire:loading.class="--is-loading"
                                            type="button">


                                            <span class="button__caption">
                                                <span class="sr-only">Ajouter au panier</span>
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
                                                        r="10" stroke="currentColor" stroke-width="4"></circle>
                                                    <path class="opacity-75" fill="currentColor"
                                                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>`;
                                $('#products_header').append(element);
                            });
                        }
                    });
                }
            });
            $("#caracteristiques").show();
            $("#trierPar").show();
            $("#resultats").show();
        });
    </script>
@endsection
