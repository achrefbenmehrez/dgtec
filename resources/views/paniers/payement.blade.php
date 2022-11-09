@extends('layouts.app')

@section('content')
    <?php $total = 0; ?>
    @if (session('cart'))
        @foreach ((array) session('cart') as $id => $details)
            <?php $total += $details['price']; ?>
        @endforeach
    @endif
    <nav aria-label="Progress" class="mx-auto mt-4 mb-8">
        <ol role="list" class="flex items-center justify-between w-full p-2 sm:justify-center">
            <li class="relative sm:mx-4">
                <a href="{{ route('mon-panier') }}"
                    class="relative flex items-center justify-center w-24 h-24 rounded-full bg-secondary-600">
                    <svg class="w-10 h-10 text-white" transform="scale(-1,1)" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M19.029 13H22l-.266 1h-2.992l.287-1zm.863-3h2.812L23 9h-2.821l-.287 1zm-.576 2h4.387L24 11h-4.396l-.288 1zM22 3l-.743 2h-1.929l-3.474 12H4.615L0 6h14.812l-.564 2H3.008l2.938 7h8.428l3.432-12H22zM7.5 18c-.828 0-1.5.672-1.5 1.5 0 .829.672 1.5 1.5 1.5S9 20.329 9 19.5c0-.828-.672-1.5-1.5-1.5zm5.9-7-.9 7c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5z">
                        </path>
                    </svg> </a>
                <div class="mt-4 text-xs font-medium text-center text-white uppercase">
                    Panier
                </div>
            </li>

            <li class="relative sm:mx-4">
                <a href="{{ route('livraison') }}"
                    class="relative flex items-center justify-center w-24 h-24 rounded-full bg-secondary-600 ">
                    <svg class="w-10 h-10 text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <path
                            d="m17.677 16.879-.343.195v-1.717l.343-.195v1.717zm2.823-3.324-.342.195v1.717l.342-.196v-1.716zM24 5.953V17.46L14.25 23 4 18.011V6.504L13.767 1 24 5.953zM12.154 4.196l7.022 3.2 1.7-.917-7.113-3.193-1.609.91zM13 11.899l-7-3.24v8.19l7 3.148v-8.098zm3.021-2.809L9.203 5.85 7.158 7.018l6.859 3.161 2.004-1.089zM22 8.147l-2 1.078v2.786l-3 1.688v-2.856l-2 1.078v8.362l7-3.985V8.147zm-4.907 7.348-.349.199v1.713l.349-.195v-1.717zm1.405-.8-.344.196v1.717l.344-.196v-1.717zm.574-.327-.343.195v1.717l.343-.195v-1.717zm.584-.332-.35.199v1.717l.35-.199v-1.717zM3 10H1v1h2v-1zm0 2H0v1h3v-1zm0 2H1v1h2v-1z">
                        </path>
                    </svg> </a>
                <div class="mt-4 text-xs font-medium text-center text-white uppercase">
                    Livraison
                </div>
            </li>

            <li class="relative sm:mx-4">
                <a href="#"
                    class="relative flex items-center justify-center w-24 h-24 rounded-full bg-primary-400 hover:bg-primary-500 pointer-events-none">
                    <svg class="w-10 h-10 text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <path
                            d="M21.5 6c.276 0 .5.224.5.5v11c0 .276-.224.5-.5.5h-19c-.276 0-.5-.224-.5-.5v-11c0-.276.224-.5.5-.5h19zM24 6c0-1.104-.896-2-2-2H2C.896 4 0 4.896 0 6v12c0 1.104.896 2 2 2h20c1.104 0 2-.896 2-2V6zM4 9.78c0-.431.349-.78.78-.78h.427v1.125H4V9.78zm0 .764h1.208v.968H4v-.968zm0 1.388h1.208V13H4.78c-.431 0-.78-.349-.78-.78v-.288zm4 .288c0 .431-.349.78-.78.78h-.429v-1.068H8v.288zm0-.708H6.791v-.968H8v.968zm0-1.387H6.371V13h-.744V9H7.22c.431 0 .78.349.78.78v.345zM13.5 13c-1.381 0-2.5-1.119-2.5-2.5S12.119 8 13.5 8c.484 0 .937.138 1.32.377-.53.552-.856 1.3-.856 2.123 0 .824.326 1.571.856 2.123-.383.239-.836.377-1.32.377zm1.5-2.5C15 9.119 16.12 8 17.5 8c1.381 0 2.5 1.119 2.5 2.5S18.881 13 17.5 13c-1.38 0-2.5-1.119-2.5-2.5zM7 15H4v1h3v-1zm4 0H8v1h3v-1zm5 0h-3v1h3v-1zm4 0h-3v1h3v-1z">
                        </path>
                    </svg> </a>
                <div class="mt-4 text-xs font-medium text-center text-white uppercase">
                    Paiement
                </div>
            </li>

            <li class="relative sm:mx-4">
                <a href="#"
                    class="relative flex items-center justify-center w-24 h-24 rounded-full pointer-events-none bg-secondary-600"
                    aria-current="step">
                    <svg class="w-10 h-10 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd"></path>
                    </svg> </a>
                <div class="mt-4 text-xs font-medium text-center text-white uppercase">
                    Validation
                </div>
            </li>
        </ol>
    </nav>
    <div wire:id="SLb8TZiqvk5mP4HhQ6gu" class="p-2">

        <form class="" method="POST" action="{{ route('commandes.save') }}">
            @csrf
            <div class="flex flex-wrap w-full mx-auto mt-4 mb-8 lg:w-2/3">
                <div class="flex flex-col items-center w-full px-2 mb-4">
                    <h3 class="text-lg font-bold text-white uppercase">
                        Montant à régler
                    </h3>
                    <p class="mt-2 text-2xl uppercase font- text-primary-500">
                        {{ session()->get('total') }} DT
                    </p>
                    <hr class="w-12 mt-4 border-primary-500">
                </div>
            </div>
            <div class="flex flex-wrap w-full mx-auto mt-4 mb-16 lg:w-2/3">
                <div class="flex flex-col items-center w-full px-2 mb-4">
                    <h3 class="text-lg text-white">
                        Choisissez un mode de paiement:
                    </h3>
                </div>

                <div class="grid w-full gap-8 sm:grid-cols-2">
                    <label wire:click.prevent="changeMethod(29)" for="collecting"
                        class="relative flex flex-col items-center pt-8 pb-12 col-span-1 shadow-lg rounded-sm pointer-events-none bg-primary-400 hover:bg-primary-600">
                        <div class="flex items-center justify-center w-32 h-32 mb-4 rounded-full  bg-secondary-500">
                            <svg class="w-12 h-12 text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <!--! Font Awesome Free 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M240.1 4.216C249.1-1.405 262-1.405 271.9 4.216L443.6 102.4L447.1 104V104.9L495.9 132.2C508.5 139.4 514.6 154.2 510.9 168.2C507.2 182.2 494.5 192 479.1 192H31.1C17.49 192 4.795 182.2 1.071 168.2C-2.653 154.2 3.524 139.4 16.12 132.2L63.1 104.9V104L68.37 102.4L240.1 4.216zM64 224H128V416H168V224H232V416H280V224H344V416H384V224H448V420.3C448.6 420.6 449.2 420.1 449.8 421.4L497.8 453.4C509.5 461.2 514.7 475.8 510.6 489.3C506.5 502.8 494.1 512 480 512H32C17.9 512 5.46 502.8 1.373 489.3C-2.713 475.8 2.517 461.2 14.25 453.4L62.25 421.4C62.82 420.1 63.41 420.6 64 420.3V224z">
                                </path>
                            </svg>
                        </div>
                        <p class="my-2 font-bold text-white uppercase">CB</p>
                        <p class="text-sm italic text-white">(Mode habituel)</p>
                        <div class="absolute bottom-0 flex w-10 h-10 -mb-5 bg-white rounded-full">
                            <svg class="w-8 h-8 m-auto text-primary-500" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </label>

                </div>
            </div>

            <div class="w-full mt-8">
                <div class="w-full">
                    <table class="hidden w-full rounded lg:table">
                        <tbody>
                            <tr>
                                <th class="text-xs font-medium text-left text-white uppercase">
                                    <div class="px-4 py-2">Produit</div>
                                </th>
                                <th class="text-xs font-medium text-center text-white uppercase">
                                    <div class="px-4 py-2">Disponibilité</div>
                                </th>
                                <th class="text-xs font-medium text-center text-white uppercase whitespace-nowrap">
                                    <div class="px-4 py-2">
                                        Prix unitaire HT
                                    </div>
                                </th>
                                <th class="text-xs font-medium text-center text-white uppercase">
                                    <div class="px-4 py-2">
                                        Quantité
                                    </div>
                                </th>
                                <th class="text-xs font-medium text-center text-white uppercase">
                                    <div class="px-4 py-2">
                                        Total HT
                                    </div>
                                </th>
                            </tr>

                            @if (session('cart'))
                                @foreach ((array) session('cart') as $id => $details)
                                    <tr class="bg-opacity-50 bg-secondary-600">
                                        <td>
                                            <a class="flex px-4 py-8"
                                                href="https://sqp.fr/distributeur-25/ssd-samsung-870-qvo-25-1tb-sata-6gbps-033-dwpd-promo-jusquau-3108-sur-stock-dispo">
                                                <div class="w-32 h-32 p-2 mr-4 bg-white border border-gray-200">
                                                    <img class="h-full w-full object-contain"
                                                        onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                                        sizes="9vw" src="{{ asset($details['photo'][0]) }}"
                                                        width="768" height="768">

                                                </div>
                                                <div class="flex flex-col justify-center">
                                                    <p class="mb-1 text-xl font-medium text-primary-500">
                                                        {{ $details['name'] }}</p>
                                                    <p class="max-w-lg text-xs font-bold text-white uppercase">
                                                        {{ $details['description'] }}</p>
                                                    <p class="mt-2 text-xs font-bold uppercase text-primary-500">+0,02 DT
                                                        d'éco-participation</p>
                                                </div>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="px-4 py-8">
                                                <p class="text-sm font-semibold text-center text-white uppercase">
                                                    @if ($details['quantite'] > $details['stock'])
                                                        En stock
                                                    @else
                                                        Epuisé provisoirement
                                                    @endif
                                                </p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-4 py-8 whitespace-nowrap">
                                                <p class="text-base font-bold text-right uppercase text-primary-500">
                                                    {{ $details['price'] }} DT
                                                    <span class="text-sm">HT</span>
                                                </p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-4 py-8 text-sm text-center">
                                                <span
                                                    class="w-16 px-3 py-2 text-center text-white border-transparent">{{ $details['quantite'] }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-4 py-8 whitespace-nowrap">
                                                <p class="text-base font-bold text-right text-white uppercase">
                                                    {{ $details['quantite'] * $details['price'] }}
                                                    <span class="text-sm">HT</span>
                                                </p>
                                            </div>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif


                            <tr>
                                <td>
                                    <div class="h-4"></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="lg:hidden">
                        <ul class="grid gap-8 mx-auto mt-4 sm:grid-cols-2">
                            @if (session('cart'))
                                @foreach ((array) session('cart') as $id => $details)
                                    <li
                                        class="block h-auto overflow-hidden bg-opacity-50 rounded-sm shadow-lg bg-secondary-600">
                                        <div class="relative h-full group">
                                            <div class="relative h-80">
                                                <div class="absolute top-0 left-0 w-1/3 p-2">
                                                    <img srcset="https://sqp.fr/storage/products/brands/11/medias/30/responsive-images/samsung___media_library_original_290_96.png 290w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMjkwIDk2Ij4KCTxpbWFnZSB3aWR0aD0iMjkwIiBoZWlnaHQ9Ijk2IiB4bGluazpocmVmPSJkYXRhOmltYWdlL2pwZWc7YmFzZTY0LC85ai80QUFRU2taSlJnQUJBUUVBWUFCZ0FBRC8vZ0E3UTFKRlFWUlBVam9nWjJRdGFuQmxaeUIyTVM0d0lDaDFjMmx1WnlCSlNrY2dTbEJGUnlCMk9EQXBMQ0J4ZFdGc2FYUjVJRDBnT1RBSy85c0FRd0FEQWdJREFnSURBd01EQkFNREJBVUlCUVVFQkFVS0J3Y0dDQXdLREF3TENnc0xEUTRTRUEwT0VRNExDeEFXRUJFVEZCVVZGUXdQRnhnV0ZCZ1NGQlVVLzlzQVF3RURCQVFGQkFVSkJRVUpGQTBMRFJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVUvOEFBRVFnQUNnQWRBd0VSQUFJUkFRTVJBZi9FQUI4QUFBRUZBUUVCQVFFQkFBQUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVRQUFJQkF3TUNCQU1GQlFRRUFBQUJmUUVDQXdBRUVRVVNJVEZCQmhOUllRY2ljUlF5Z1pHaENDTkNzY0VWVXRId0pETmljb0lKQ2hZWEdCa2FKU1luS0NrcU5EVTJOemc1T2tORVJVWkhTRWxLVTFSVlZsZFlXVnBqWkdWbVoyaHBhbk4wZFhaM2VIbDZnNFNGaG9lSWlZcVNrNVNWbHBlWW1acWlvNlNscHFlb3FhcXlzN1MxdHJlNHVickN3OFRGeHNmSXljclMwOVRWMXRmWTJkcmg0dVBrNWVibjZPbnE4Zkx6OVBYMjkvajUrdi9FQUI4QkFBTUJBUUVCQVFFQkFRRUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVSQUFJQkFnUUVBd1FIQlFRRUFBRUNkd0FCQWdNUkJBVWhNUVlTUVZFSFlYRVRJaktCQ0JSQ2thR3h3UWtqTTFMd0ZXSnkwUW9XSkRUaEpmRVhHQmthSmljb0tTbzFOamM0T1RwRFJFVkdSMGhKU2xOVVZWWlhXRmxhWTJSbFptZG9hV3B6ZEhWMmQzaDVlb0tEaElXR2g0aUppcEtUbEpXV2w1aVptcUtqcEtXbXA2aXBxckt6dExXMnQ3aTV1c0xEeE1YR3g4akp5dExUMU5YVzE5aloydUxqNU9YbTUranA2dkx6OVBYMjkvajUrdi9hQUF3REFRQUNFUU1SQUQ4QS9RdXp0dkhHdkkyN1dwTkV0OGdvL3dCa2dhNWJCT2R3S3NpZzhjRGNSajczUEFCcitGZmg5QjRZbFc0azFQVk5WdUZVcUpkVHY1YmtwbkdkdTlqdHpnWnhqb0tBTlBWdkdPa2FLam04djRJTm5VTTRCb0E4NTFqKzFQRk9yUzMrbTZacU9tUk1nVDdTODk1Wm01QUxZK1dHTmlRT2NGd09IeXVRU2FBUFh3T2FBR3ovQU9xYjZVQWMvd0NIdkNlaG1KTlRPamFmL2FVOFpTVzgreXA1MGk3czRaOFpJNEhVOWhRQnB0NFcwVmlTZElzQ1QzTnNuK0ZBSC8vWiI+Cgk8L2ltYWdlPgo8L3N2Zz4= 32w"
                                                        onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                                        sizes="1px"
                                                        src="https://sqp.fr/storage/products/brands/11/medias/30/samsung.png"
                                                        width="290" height="96">

                                                </div>
                                                <div class="w-full h-full p-4 bg-white">
                                                    <img class="h-full w-full object-contain"
                                                        srcset="https://sqp.fr/storage/products/products/60604/medias/43297/responsive-images/ssd1t-sam870qvopromo-60604___media_library_original_768_768.jpg 768w, https://sqp.fr/storage/products/products/60604/medias/43297/responsive-images/ssd1t-sam870qvopromo-60604___media_library_original_642_642.jpg 642w, https://sqp.fr/storage/products/products/60604/medias/43297/responsive-images/ssd1t-sam870qvopromo-60604___media_library_original_537_537.jpg 537w, https://sqp.fr/storage/products/products/60604/medias/43297/responsive-images/ssd1t-sam870qvopromo-60604___media_library_original_449_449.jpg 449w, https://sqp.fr/storage/products/products/60604/medias/43297/responsive-images/ssd1t-sam870qvopromo-60604___media_library_original_376_376.jpg 376w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNzY4IDc2OCI+Cgk8aW1hZ2Ugd2lkdGg9Ijc2OCIgaGVpZ2h0PSI3NjgiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvanBlZztiYXNlNjQsLzlqLzRBQVFTa1pKUmdBQkFRRUFZQUJnQUFELy9nQTdRMUpGUVZSUFVqb2daMlF0YW5CbFp5QjJNUzR3SUNoMWMybHVaeUJKU2tjZ1NsQkZSeUIyT0RBcExDQnhkV0ZzYVhSNUlEMGdPVEFLLzlzQVF3QURBZ0lEQWdJREF3TURCQU1EQkFVSUJRVUVCQVVLQndjR0NBd0tEQXdMQ2dzTERRNFNFQTBPRVE0TEN4QVdFQkVURkJVVkZRd1BGeGdXRkJnU0ZCVVUvOXNBUXdFREJBUUZCQVVKQlFVSkZBMExEUlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVS84QUFFUWdBSUFBZ0F3RVJBQUlSQVFNUkFmL0VBQjhBQUFFRkFRRUJBUUVCQUFBQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVFBQUlCQXdNQ0JBTUZCUVFFQUFBQmZRRUNBd0FFRVFVU0lURkJCaE5SWVFjaWNSUXlnWkdoQ0NOQ3NjRVZVdEh3SkROaWNvSUpDaFlYR0JrYUpTWW5LQ2txTkRVMk56ZzVPa05FUlVaSFNFbEtVMVJWVmxkWVdWcGpaR1ZtWjJocGFuTjBkWFozZUhsNmc0U0Zob2VJaVlxU2s1U1ZscGVZbVpxaW82U2xwcWVvcWFxeXM3UzF0cmU0dWJyQ3c4VEZ4c2ZJeWNyUzA5VFYxdGZZMmRyaDR1UGs1ZWJuNk9ucThmTHo5UFgyOS9qNSt2L0VBQjhCQUFNQkFRRUJBUUVCQVFFQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVJBQUlCQWdRRUF3UUhCUVFFQUFFQ2R3QUJBZ01SQkFVaE1RWVNRVkVIWVhFVElqS0JDQlJDa2FHeHdRa2pNMUx3RldKeTBRb1dKRFRoSmZFWEdCa2FKaWNvS1NvMU5qYzRPVHBEUkVWR1IwaEpTbE5VVlZaWFdGbGFZMlJsWm1kb2FXcHpkSFYyZDNoNWVvS0RoSVdHaDRpSmlwS1RsSldXbDVpWm1xS2pwS1dtcDZpcHFyS3p0TFcydDdpNXVzTER4TVhHeDhqSnl0TFQxTlhXMTlqWjJ1TGo1T1htNStqcDZ2THo5UFgyOS9qNSt2L2FBQXdEQVFBQ0VRTVJBRDhBL1JMeEY4WXREOE5YWnQ3dTRWSkIySnFsRnNEbjUvMmxmQ2x1UG12Rkg0MCtSaU0rWDlyRHdaRVNHdmsvNzZvNVdNMS9DZjdSZmhmeGhxSzJWamRxOHpkQURTY1dnUGtYOXBUVjJnOFp6TDVoSHRtdWlHeExQblB4RDRvTWU1VE13UDFxd09JdU5Za3ZKU0VtWS9qU0E5dy9aSk0vL0N5TGZkSXhIb1RVVDJCSFFmdFdhaE5INCtuVlZZajJGRU5nWjgzNjlPU2hrbGpjajZWYkFUUWRPKzJoWkk0bXdmYWdSOUwvQUxLK2d5UWVPN2VReGtmaFV6MkdqN244Vy9zN2VHZkdPb3RlWDFxcnlucVNLNTFKb281dTUvWTc4RDNTYlpMQkdIMHA4ekFtc1AyUnZCV25vRmlzVVVEL0FHYVhNd09zOEwvQXp3LzRVdkZ1Yk8yVkpCMElGRGsyQi8vWiI+Cgk8L2ltYWdlPgo8L3N2Zz4= 32w"
                                                        onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                                        sizes="1px"
                                                        src="https://sqp.fr/storage/products/products/60604/medias/43297/ssd1t-sam870qvopromo-60604.jpg"
                                                        width="768" height="768">

                                                </div>
                                            </div>
                                            <div class="px-2 py-4 text-center ">
                                                <p class="text-lg font-bold text-primary-500">
                                                    {{ $details['name'] }}
                                                </p>
                                                <p class="mt-2 text-sm font-bold text-white uppercase ">
                                                    {{ $details['price'] }}</p>

                                                <p class="mt-2 text-sm font-bold uppercase text-primary-500">
                                                    @if ($details['quantite'] > $details['stock'])
                                                        En stock
                                                    @else
                                                        Epuisé provisoirement
                                                    @endif
                                                </p>

                                                <div class="flex flex-col items-center px-4 py-2 mt-2 text-sm">
                                                    <p class="text-xl font-bold text-white uppercase ">
                                                        {{ $details['price'] }} DT<span class="text-base">HT</span></p>
                                                </div>

                                                <p class="text-xs font-bold uppercase text-primary-500 ">+0,02 DT
                                                    d'éco-participation
                                                </p>


                                                <div class="flex flex-col items-center px-4 py-2 mt-4 text-sm">
                                                    <span
                                                        class="mb-1 text-xs font-bold text-white uppercase">Quantité</span>
                                                    <span
                                                        class="w-20 px-3 py-2 text-center text-white bg-transparent border-transparent"
                                                        type="number">{{ $details['quantite'] }}</span>
                                                </div>

                                                <div class="flex flex-col items-center px-4 py-2 mt-2 text-sm">
                                                    <p class="text-3xl font-bold text-white uppercase ">
                                                        {{ $details['price'] * $details['quantite'] }} DT<span
                                                            class="text-base">HT</span></p>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>

            <div class="w-full mt-8 ml-auto lg:w-1/3">
                <div class="w-full py-4 text-white rounded-sm shadow-lg bg-secondary-600">
                    <table class="w-full">
                        <tbody>
                            <tr>
                                <td class="text-xs font-medium text-left uppercase text-secondary-300">
                                    <div class="px-4 py-2">Total HT</div>
                                </td>
                                <td class="text-base font-bold text-right text-white uppercase">
                                    <div class="px-4 py-2">{{ $total }}</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-xs font-medium text-left uppercase text-secondary-300">
                                    <div class="px-4 py-2">FDP HT</div>
                                </td>
                                <td class="text-base font-bold text-right text-white uppercase">
                                    <div class="px-4 py-2">12,00 DT</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-xs font-medium text-left uppercase text-secondary-300">
                                    <div class="px-4 py-2">Taxes HT</div>
                                </td>
                                <td class="text-base font-bold text-right text-white uppercase">
                                    <div class="px-4 py-2">2%</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-xs font-medium text-left uppercase text-secondary-300">
                                    <div class="px-4 py-2">Total HT</div>
                                </td>
                                <td class="text-base font-bold text-right text-white uppercase">
                                    <div class="px-4 py-2">{{ $total + 12 }} DT</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-xs font-medium text-left uppercase text-secondary-300">
                                    <div class="px-4 py-2 pb-8">Total TTC</div>
                                </td>
                                <td class="text-xl font-medium text-right uppercase text-primary-500">
                                    <div class="px-4 py-2 pb-8">
                                        {{ $total + 12 + $total * 0.02 }} DT</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="flex flex-col items-center w-full mt-12 lg:items-end">
                <div class="flex items-center">
                    <input wire:model.defer="form.accept_terms" id="accept_terms" name="accept_terms" type="checkbox"
                        class="w-5 h-5 border-transparent rounded bg-secondary-600 text-primary-600 focus:ring-primary-500">
                    <label for="accept_terms" class="block ml-2 text-base text-white">
                        J'ai lu et j'accepte les <a target="__blank" class="underline" href="/cgv.pdf"> conditions
                            générales de vente </a>
                    </label>
                </div>
            </div>

            <div class="flex flex-col-reverse justify-center mt-8 col-span-full sm:flex-row sm:justify-between">
                <a class="button group --has-leading mt-4 --is-secondary --translate-icon-on-hover"
                    href="{{ route('livraison') }}">

                    <div class="button__leading">
                        <svg class="h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>

                    <span class="button__caption">
                        <span class="w-full">Retour</span>
                    </span>


                    <span class="button__spinner">
                        <svg class="w-4 h-4 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10"
                                stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor"
                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                            </path>
                        </svg>
                    </span>
                </a>

                <button class="button group --has-trailing mt-4 --is-tertiary --translate-icon-on-hover" type="submit"
                    wire:loading.class="--is-loading">


                    <span class="button__caption">
                        Valider et payer
                    </span>

                    <span class="button__trailing">
                        <svg class="h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </span>

                    <span class="button__spinner">
                        <svg class="w-4 h-4 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10"
                                stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor"
                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                            </path>
                        </svg>
                    </span>
                </button>
            </div>

        </form>

    </div>
@endsection
