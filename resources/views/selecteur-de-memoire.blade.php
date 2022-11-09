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

                    <h2 class="mb-4 text-2xl font-bold uppercase text-primary-500">Sélecteur de mémoire</h2>
                </div>

                <div class="p-4 bg-secondary-600">
                    <h6 class="mb-6 text-xl font-bold text-secondary-300">Rechercher par machine</h6>
                    <div
                        class="grid flex-wrap items-center justify-between w-full grid-cols-1 gap-4 text-white lg:grid-cols-4">
                        <label class="flex flex-col" for="type">
                            <span class="mb-2 text-xs uppercase text-secondary-300">Type de machine</span>
                            <select id="machine"
                                class="border-transparent rounded-sm shadow-sm bg-secondary-700 focus:ring-primary-500 focus:border-primary-500 sm:text-sm">
                                <option value=""></option>
                                @foreach ($machines as $machine)
                                    <option value="{{ $machine->id }}">{{ $machine->name }}</option>
                                @endforeach
                            </select>
                        </label>
                        <label class="flex flex-col" for="manufacturer">
                            <span class="mb-2 text-xs uppercase text-secondary-300">Fabricant</span>
                            <select id="fabricant"
                                class="border-transparent rounded-sm shadow-sm bg-secondary-700 focus:ring-primary-500 focus:border-primary-500 sm:text-sm">
                            </select>
                        </label>
                        <label class="flex flex-col" for="serie">
                            <span class="mb-2 text-xs uppercase text-secondary-300">Famille</span>
                            <select name="" id="famille"
                                class="border-transparent rounded-sm shadow-sm bg-secondary-700 focus:ring-primary-500 focus:border-primary-500 sm:text-sm">
                            </select>
                        </label>
                    </div>

                    <h6 class="mt-8 mb-6 text-xl font-bold text-secondary-300">Rechercher par référence</h6>
                    <div
                        class="grid flex-wrap items-center justify-between w-full grid-cols-1 gap-4 text-white lg:grid-cols-4">

                        <label class="flex flex-col" for="machine">
                            <span class="mb-2 text-xs uppercase text-secondary-300">Référence machine du fabricant</span>
                            <input id="machine"
                                class="h-10 px-3 border-transparent rounded-sm shadow-sm bg-secondary-700 focus:ring-primary-500 focus:border-primary-500 sm:text-sm" />
                        </label>

                        <label class="flex flex-col" for="reference">
                            <span class="mb-2 text-xs uppercase text-secondary-300">Référence mémoire du fabricant</span>
                            <input id="reference"
                                class="h-10 px-3 border-transparent rounded-sm shadow-sm bg-secondary-700 focus:ring-primary-500 focus:border-primary-500 sm:text-sm" />
                        </label>

                    </div>

                    <h6 class="mt-10 mb-2 text-sm text-secondary-300" class="selectionnerProduct">Sélectionner le modèle
                        exact :
                    </h6>
                    <div
                        class="grid flex-wrap items-center justify-between w-full grid-cols-1 gap-4 mb-4 text-white lg:grid-cols-4">
                        <select
                            class="border-transparent rounded-sm shadow-sm bg-secondary-700 focus:ring-primary-500 focus:border-primary-500 sm:text-sm"
                            id="selectionnerProduct">
                        </select>
                    </div>

                    <div class="w-full p-4 mt-8 rounded-sm bg-primary-400" id="AucuneFamille">
                        <div class="flex">
                            <div class="mx-4 shrink-0">
                                <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="flex-1 ml-3 md:flex md:justify-between">
                                <p class="text-sm font-light text-white">
                                    <span class="font-bold">Nous n'avons pas trouvé de mémoire correspondante dans notre
                                        base de données</span>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="p-4 mt-4 bg-secondary-600" id="caracteristiques">
                    <h6 class="mb-6 text-xl font-bold text-secondary-300">Caractéristiques de la machine</h6>
                    <div
                        class="grid flex-wrap items-center justify-between w-full grid-cols-1 gap-4 text-white lg:grid-cols-4">
                        <p class="col-span-4 font-thin text-secondary-300">Série: <span class="font-bold text-secondary-100"
                                id="serieProduct"></span></p>
                        <p class="col-span-4 font-thin text-secondary-300">Modèle: <span
                                class="font-bold text-secondary-100" id="nomProduct"></span></p>
                        <p class="col-span-4 font-thin text-secondary-300">Emplacements mémoire: <span
                                class="font-bold text-secondary-100" id="emplacementsMemoire"></span></p>
                        <p class="col-span-4 font-thin text-secondary-300">Taille mémoire de base:
                            <span class="font-bold text-secondary-100" id="tailleMemoireBase"></span>
                        </p>
                        <p class="col-span-4 font-thin text-secondary-300">Taille mémoire max: <span
                                class="font-bold text-secondary-100" id="tailleMemoireMax"></span></p>
                    </div>
                </div>

                <div class="p-4 mt-8 mb-8 bg-secondary-600" id="trierPar">
                    <h6 class="mb-6 text-xl font-bold text-secondary-300">Trier par</h6>
                    <div
                        class="grid flex-wrap items-center justify-between w-full grid-cols-1 gap-4 text-white lg:grid-cols-4">
                        <select
                            class="border-transparent rounded-sm shadow-sm bg-secondary-700 focus:ring-primary-500 focus:border-primary-500 sm:text-sm">
                            <option value="capacity">Capacité RAM</option>
                            <option value="frequency">Fréquence Mhz / bande passante</option>
                            <option value="type">Type</option>
                        </select>
                        <select
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

                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#AucuneFamille").hide();
            $("#caracteristiques").hide();
            $("#trierPar").hide();
            $("#resultats").hide();
            $('#machine').on('change', function() {
                $('#products_header').empty();
                var idMachine = this.value;
                $("#fabricant").html('');
                $.ajax({
                    url: "{{ route('getFabricants') }}",
                    type: "POST",
                    data: {
                        machine_id: idMachine,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#fabricant').html(
                            '<option value="">-- Select Fabricant --</option>');
                        $.each(result.fabricants, function(key, value) {
                            $("#fabricant").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                        $('#famille').html('<option value="">-- Select Famille --</option>');
                    }
                });
            });

            $('#fabricant').on('change', function() {
                var idFabricant = this.value;
                $("#famille").html('');
                $.ajax({
                    url: "{{ route('getFamilles') }}",
                    type: "POST",
                    data: {
                        fabricant_id: idFabricant,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(res) {
                        $('#famille').html('<option value="">-- Select Famile --</option>');
                        if (res.familles.length > 0) {
                            $.each(res.familles, function(key, value) {
                                $("#famille").append('<option value="' + value
                                    .id + '">' + value.name + '</option>');
                            });
                        } else {
                            $('#AucuneFamille').show();
                        }
                    }
                });
            });

            $('#famille').on('change', function() {
                $('#selectionnerProduct').show();
                $(".selectionnerProduct").show();
                var idFamille = this.value;
                $("#selectionnerProduct").html('');
                $.ajax({
                    url: "{{ route('getProducts') }}",
                    type: "POST",
                    data: {
                        famille_id: idFamille,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(res) {
                        $('#selectionnerProduct').html(
                            '<option value="">-- Select Product --</option>');
                        $.each(res.products, function(key, value) {
                            $("#selectionnerProduct").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });

            $("#selectionnerProduct").on('change', function() {
                $("#caracteristiques").show();
                $("#trierPar").show();
                $("#resultats").show();
                var idProduct = this.value;
                $.ajax({
                    url: "{{ route('getProduct') }}",
                    type: "POST",
                    data: {
                        product_id: idProduct,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(response) {
                        $("#serieProduct").text(response.nomFamille);
                        $("#nomProduct").text(response.product.name);
                        $('#emplacementsMemoire').text(response.product.fiche_technique
                            .emplacements_memoire);
                        $('#tailleMemoireBase').text(response.product.fiche_technique
                                .taille_memoire_base) +
                            'GB';
                        $('#tailleMemoireMax').text(response.product.fiche_technique
                            .taille_memoire_max) + 'GB';

                        $.ajax({
                            url: "{{ route('getProductsByCapacite') }}",
                            type: "POST",
                            data: {
                                emplacements: response.product.fiche_technique
                                    .emplacements_memoire,
                                min: response.product.fiche_technique
                                    .taille_memoire_base,
                                max: response.product.fiche_technique
                                    .taille_memoire_max,
                                _token: '{{ csrf_token() }}'
                            },
                            dataType: 'json',
                            success: function(response) {
                                var element1 = `<tr>
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
                            </tr>`;
                            $('#products_header').append(element1);
                                $.each(response.products, function(key, value) {
                                    var id = value[1]['id'];
                                    var capacite = value[0]['capacite'] +
                                        "GB";
                                    var categorie = value[0]['categorie'];
                                    var format = value[0]['format'];
                                    var frequence = value[0]['frequence'] +
                                        "MHZ";
                                    var type = value[0]['type'];
                                    var organisation = value[0][
                                        'organisation'
                                    ];
                                    var voltage = value[0]['voltage'] + "V";
                                    var stock = value[1]['quantiteStock'] >
                                        0 ? 'En stock' : 'Stock Epuisé';
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
                                            type="number">
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
            });
        });
    </script>
@endsection
