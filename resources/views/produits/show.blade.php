@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('dist/css/jquery.toast.min.css') }}">
    <div wire:id="WbQYIh1tEmlDU9uIrTUy" class="relative w-full px-4" x-data="{ hideConfigurationPopup: localStorage.getItem('hideConfigurationPopup') === 'true' }" x-init="$watch('hideConfigurationPopup', (val) => localStorage.setItem('hideConfigurationPopup', val))">


        <div class="grid grid-cols-1 mx-auto mt-8 md:gap-8 gap-y-8 xl:grid-cols-2 max-w-big" x-data="{ tab: 'general' }">

            <div class="hidden xl:block" wire:ignore="">
                <div class="relative grid grid-cols-4 gap-4 overflow-hidden" x-data="{ swiperFull: null, swiperThumb: null }" wire:ignore="">

                    <div class="h-full col-span-1">
                        <div class="h-full">
                            <div
                                class="swiper swiper-init h-full swiper-container swiper-initialized swiper-vertical swiper-pointer-events swiper-watch-progress swiper-backface-hidden swiper-thumbs">

                                <div class="w-full h-32 swiper-wrapper" aria-live="polite"
                                    style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                    <div class="w-full h-full overflow-hidden bg-white rounded-sm shadow-lg swiper-slide swiper-slide-visible swiper-slide-active swiper-slide-thumb-active border-4 border-primary-500 opacity-100"
                                        style="height: 148px; margin-bottom: 16px;" role="group"
                                        aria-label="1 / {{ count($product->photosUrl) }}">
                                        <img class="h-full w-full object-contain"
                                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                            sizes="11vw" src="{{ asset($product->photosUrl[0]) }}" width="1024"
                                            height="645">
                                    </div>
                                </div>

                                @for ($i = 1; $i < count($product->photosUrl); $i++)
                                    <div class="w-full h-32 swiper-wrapper" aria-live="polite"
                                        style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                        <div class="w-full h-full overflow-hidden bg-white rounded-sm shadow-lg swiper-slide swiper-slide-visible swiper-slide-active swiper-slide opacity-100 swiper-slide-next"
                                            style="height: 148px; margin-bottom: 16px;" role="group"
                                            aria-label="{{ $i }} / {{ count($product->photosUrl) }}">
                                            <img class="h-full w-full object-contain"
                                                onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                                sizes="11vw" src="{{ asset($product->photosUrl[$i]) }}" width="1024"
                                                height="645">
                                        </div>
                                    </div>
                                @endfor

                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-3 overflow-hidden rounded-sm h-96 xl:h-160">
                        <div>
                            <div
                                class="swiper swiper-init swiper-container swiper-initialized swiper-vertical swiper-pointer-events swiper-backface-hidden">
                                <div class="w-full rounded-sm h-96 swiper-wrapper xl:h-160"
                                    style="transition-duration: 0ms; transform: translate3d(0px, -640px, 0px);"
                                    aria-live="polite">
                                    @foreach ($product->photosUrl as $key => $photo)
                                        <div class="w-full h-full bg-white shadow-lg swiper-slide"
                                            data-swiper-slide-index="{{ $key }}" style="height: 640px;"
                                            role="group"
                                            aria-label="{{ $key + 1 }} / {{ count($product->photosUrl) }}">
                                            <img class="h-full w-full object-contain"
                                                onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                                sizes="35vw" src="{{ asset($photo) }}" width="1024" height="644">

                                        </div>
                                    @endforeach
                                </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div>
                <ol class="flex text-xs text-white uppercase jusitfy-center">
                    <li class="flex items-center h-8">
                        <a href="{{ route('home') }}">Accueil</a>
                    </li>

                    @if ($product->category->children)
                        @foreach ($product->category->children as $child)
                            <li class="flex items-center h-8 pl-2">
                                <span class="pr-2">
                                    <svg class="h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg> </span>
                                <a href="{{ route('produits.index', $child->slug) }}">{{ $child->title }}</a>
                            </li>
                        @endforeach
                    @endif

                    <li class="flex items-center h-8 pl-2">
                        <span class="pr-2">
                            <svg class="h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg> </span>
                        <a
                            href="{{ route('produits.index', $product->category->slug) }}">{{ $product->category->title }}</a>
                    </li>
                </ol>

                <h2 class="mb-4 text-2xl font-bold uppercase text-primary-500">{{ $product->description }}</h2>

                <div class="h-16">
                    <img class="block object-contain object-left w-auto h-full mb-2"
                        onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                        sizes="15vw" src="{{ asset($product->brand->logo_url) }}" width="290"
                        height="96">

                </div>

                <div class="block xl:hidden">
                    <div class="relative grid grid-cols-4 gap-4 overflow-hidden" x-data="{ swiperFull: null, swiperThumb: null }" wire:ignore="">

                        <div class="h-full col-span-1">
                            <div class="h-full" x-init="swiperThumb = new Swiper($refs.swiperThumbContainer, {
                                direction: 'vertical',
                                spaceBetween: 16,
                                slidesPerView: 4,
                                watchSlidesProgress: true,
                            })">
                                <div class="h-full swiper-container swiper-initialized swiper-vertical swiper-pointer-events swiper-watch-progress swiper-thumbs"
                                    x-ref="swiperThumbContainer">
                                    <div class="w-full h-32 swiper-wrapper" style="transition-duration: 0ms;"
                                        id="swiper-wrapper-1424a15a563d862a" aria-live="polite">
                                        <div
                                            class="w-full h-full overflow-hidden bg-white rounded-sm shadow-lg swiper-slide">
                                            <img class="h-full w-full object-contain"
                                                srcset="https://sqp.fr/storage/products/products/60604/medias/43297/responsive-images/ssd1t-sam870qvopromo-60604___media_library_original_768_768.jpg 768w, https://sqp.fr/storage/products/products/60604/medias/43297/responsive-images/ssd1t-sam870qvopromo-60604___media_library_original_642_642.jpg 642w, https://sqp.fr/storage/products/products/60604/medias/43297/responsive-images/ssd1t-sam870qvopromo-60604___media_library_original_537_537.jpg 537w, https://sqp.fr/storage/products/products/60604/medias/43297/responsive-images/ssd1t-sam870qvopromo-60604___media_library_original_449_449.jpg 449w, https://sqp.fr/storage/products/products/60604/medias/43297/responsive-images/ssd1t-sam870qvopromo-60604___media_library_original_376_376.jpg 376w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNzY4IDc2OCI+Cgk8aW1hZ2Ugd2lkdGg9Ijc2OCIgaGVpZ2h0PSI3NjgiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvanBlZztiYXNlNjQsLzlqLzRBQVFTa1pKUmdBQkFRRUFZQUJnQUFELy9nQTdRMUpGUVZSUFVqb2daMlF0YW5CbFp5QjJNUzR3SUNoMWMybHVaeUJKU2tjZ1NsQkZSeUIyT0RBcExDQnhkV0ZzYVhSNUlEMGdPVEFLLzlzQVF3QURBZ0lEQWdJREF3TURCQU1EQkFVSUJRVUVCQVVLQndjR0NBd0tEQXdMQ2dzTERRNFNFQTBPRVE0TEN4QVdFQkVURkJVVkZRd1BGeGdXRkJnU0ZCVVUvOXNBUXdFREJBUUZCQVVKQlFVSkZBMExEUlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVS84QUFFUWdBSUFBZ0F3RVJBQUlSQVFNUkFmL0VBQjhBQUFFRkFRRUJBUUVCQUFBQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVFBQUlCQXdNQ0JBTUZCUVFFQUFBQmZRRUNBd0FFRVFVU0lURkJCaE5SWVFjaWNSUXlnWkdoQ0NOQ3NjRVZVdEh3SkROaWNvSUpDaFlYR0JrYUpTWW5LQ2txTkRVMk56ZzVPa05FUlVaSFNFbEtVMVJWVmxkWVdWcGpaR1ZtWjJocGFuTjBkWFozZUhsNmc0U0Zob2VJaVlxU2s1U1ZscGVZbVpxaW82U2xwcWVvcWFxeXM3UzF0cmU0dWJyQ3c4VEZ4c2ZJeWNyUzA5VFYxdGZZMmRyaDR1UGs1ZWJuNk9ucThmTHo5UFgyOS9qNSt2L0VBQjhCQUFNQkFRRUJBUUVCQVFFQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVJBQUlCQWdRRUF3UUhCUVFFQUFFQ2R3QUJBZ01SQkFVaE1RWVNRVkVIWVhFVElqS0JDQlJDa2FHeHdRa2pNMUx3RldKeTBRb1dKRFRoSmZFWEdCa2FKaWNvS1NvMU5qYzRPVHBEUkVWR1IwaEpTbE5VVlZaWFdGbGFZMlJsWm1kb2FXcHpkSFYyZDNoNWVvS0RoSVdHaDRpSmlwS1RsSldXbDVpWm1xS2pwS1dtcDZpcHFyS3p0TFcydDdpNXVzTER4TVhHeDhqSnl0TFQxTlhXMTlqWjJ1TGo1T1htNStqcDZ2THo5UFgyOS9qNSt2L2FBQXdEQVFBQ0VRTVJBRDhBL1JMeEY4WXREOE5YWnQ3dTRWSkIySnFsRnNEbjUvMmxmQ2x1UG12Rkg0MCtSaU0rWDlyRHdaRVNHdmsvNzZvNVdNMS9DZjdSZmhmeGhxSzJWamRxOHpkQURTY1dnUGtYOXBUVjJnOFp6TDVoSHRtdWlHeExQblB4RDRvTWU1VE13UDFxd09JdU5Za3ZKU0VtWS9qU0E5dy9aSk0vL0N5TGZkSXhIb1RVVDJCSFFmdFdhaE5INCtuVlZZajJGRU5nWjgzNjlPU2hrbGpjajZWYkFUUWRPKzJoWkk0bXdmYWdSOUwvQUxLK2d5UWVPN2VReGtmaFV6MkdqN244Vy9zN2VHZkdPb3RlWDFxcnlucVNLNTFKb281dTUvWTc4RDNTYlpMQkdIMHA4ekFtc1AyUnZCV25vRmlzVVVEL0FHYVhNd09zOEwvQXp3LzRVdkZ1Yk8yVkpCMElGRGsyQi8vWiI+Cgk8L2ltYWdlPgo8L3N2Zz4= 32w"
                                                onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                                sizes="1px"
                                                src="https://sqp.fr/storage/products/products/60604/medias/43297/ssd1t-sam870qvopromo-60604.jpg"
                                                width="768" height="768">

                                        </div>
                                    </div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-3 overflow-hidden rounded-sm h-96 xl:h-160">
                            <div x-init="swiperFull = new Swiper($refs.swiperFullContainer, {
                                loop: true,
                                direction: 'vertical',
                                thumbs: {
                                    slideThumbActiveClass: 'swiper-slide-thumb-active border-4 border-primary-500 opacity-100',
                                    swiper: swiperThumb,
                                },
                            })">
                                <div class="swiper-container swiper-initialized swiper-vertical swiper-pointer-events"
                                    x-ref="swiperFullContainer">
                                    <div class="w-full rounded-sm h-96 swiper-wrapper xl:h-160"
                                        style="transition-duration: 0ms;" id="swiper-wrapper-b7d9b6d6a6a753ca"
                                        aria-live="polite">
                                        @foreach ($product->photosUrl as $photo)
                                            <div class="w-full h-full bg-white shadow-lg swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                                data-swiper-slide-index="0">
                                                <img class="h-full w-full object-contain"
                                                    onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                                    sizes="1px" src="{{ asset($photo) }}" width="768"
                                                    height="768">

                                            </div>
                                        @endforeach
                                    </div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="hidden lg:block">
                    <p class="mt-4 text-justify text-white">

                    </p>

                    <a class="button group mt-4 --is-small --is-rounded --is-secondary" href="#specs">


                        <span class="button__caption">
                            <span>Lire la description</span>
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
                </div>

                <div class="grid grid-cols-2 gap-8 mt-8">
                    <ul
                        class="flex justify-between col-span-2 space-x-4 text-xs font-light text-white md:justify-around lg:space-x-0 lg:space-y-1 lg:block lg:col-span-1 ">
                        <li class="flex flex-col lg:block">
                            Ref. DGTEC: <span class="text-sm font-bold">{{ $product->id }}</span>
                        </li>
                        <li class="flex flex-col lg:block">
                            Ref. Fabricant: <span class="text-sm font-bold">{{ $product->ref_fabricant }}</span>
                        </li>
                        <li class="flex flex-col lg:block">
                            EAN: <span class="text-sm font-bold">{{ $product->EAN }}</span>
                        </li>
                    </ul>

                    <ul class="grid grid-cols-2 col-span-2 text-white lg:col-span-1 lg:space-y-4 lg:grid-cols-1">
                        <li class="flex flex-col items-center space-x-4 space-y-4 text-sm md:space-y-0 md:flex-row">
                            <svg class="w-12 h-12 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 40">
                                <defs>
                                    <clipPath id="a">
                                        <path data-name="Rectangle 269" fill="currentColor" d="M0 0h31.25v37.097H0z">
                                        </path>
                                    </clipPath>
                                    <clipPath id="b">
                                        <path data-name="Rectangle 267" fill="currentColor" d="M0 0h23.832v28.371H0z">
                                        </path>
                                    </clipPath>
                                </defs>
                                <g data-name="Groupe 368">
                                    <g data-name="Groupe 359">
                                        <g data-name="Groupe 358" clip-path="url(#a)">
                                            <g data-name="Groupe 357">
                                                <g data-name="Groupe 356" clip-path="url(#a)">
                                                    <path data-name="Tracé 243"
                                                        d="M15.625 36.823a2.17 2.17 0 0 1-.892-.19c-.59-.261-14.459-6.584-14.459-21V6.859a2.183 2.183 0 0 1 1.993-2.184c.814-.034 7.506-.409 12.058-3.967a2.057 2.057 0 0 1 1.28-.434 2.088 2.088 0 0 1 1.319.434c4.552 3.558 11.244 3.933 11.992 3.964a2.2 2.2 0 0 1 2.059 2.187v8.77c0 14.42-13.87 20.743-14.461 21a2.166 2.166 0 0 1-.89.189m.019-35.087a.643.643 0 0 0-.418.124C10.414 5.62 3.691 6.079 2.393 6.133a.725.725 0 0 0-.657.726v8.77c0 13.48 13.036 19.422 13.59 19.669a.738.738 0 0 0 .594 0c.556-.247 13.593-6.189 13.593-19.669v-8.77a.727.727 0 0 0-.666-.727c-1.29-.053-8.012-.512-12.824-4.272a.611.611 0 0 0-.38-.124"
                                                        fill="currentColor"></path>
                                                    <path data-name="Tracé 244"
                                                        d="M15.625 36.823a2.17 2.17 0 0 1-.892-.19c-.59-.261-14.459-6.584-14.459-21V6.859a2.183 2.183 0 0 1 1.993-2.184c.814-.034 7.506-.409 12.058-3.967a2.057 2.057 0 0 1 1.28-.434 2.088 2.088 0 0 1 1.319.434c4.552 3.558 11.244 3.933 11.992 3.964a2.2 2.2 0 0 1 2.059 2.187v8.77c0 14.42-13.87 20.743-14.461 21a2.166 2.166 0 0 1-.889.194Zm.019-35.087a.643.643 0 0 0-.418.124C10.414 5.62 3.691 6.079 2.393 6.133a.725.725 0 0 0-.657.726v8.77c0 13.48 13.036 19.422 13.59 19.669a.738.738 0 0 0 .594 0c.556-.247 13.593-6.189 13.593-19.669v-8.77a.727.727 0 0 0-.666-.727c-1.29-.053-8.012-.512-12.824-4.272a.611.611 0 0 0-.379-.124Z"
                                                        fill="currentColor"></path>
                                                    <g data-name="Groupe 355" opacity=".2">
                                                        <g data-name="Groupe 354">
                                                            <g data-name="Groupe 353" clip-path="url(#b)"
                                                                transform="translate(3.709 4.363)">
                                                                <path data-name="Tracé 245"
                                                                    d="M22.234 3.414c-.58-.024-5.775-.315-9.308-3.077A1.621 1.621 0 0 0 11.902 0a1.6 1.6 0 0 0-.994.337C7.374 3.099 2.18 3.39 1.548 3.417A1.694 1.694 0 0 0 0 5.111v6.808c0 11.194 10.766 16.1 11.224 16.3a1.7 1.7 0 0 0 1.383 0c.459-.2 11.225-5.111 11.225-16.305V5.111a1.7 1.7 0 0 0-1.6-1.7"
                                                                    fill="currentColor"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <div class="font-bold">
                                <div class="font-bold">
                                    {{ $product->description }}
                                </div>
                                <div class="font-thin">
                                    {{ $product->ansGarantie }} {{ $product->ref_fabricant }}
                                </div>
                            </div>
                        </li>

                    </ul>

                    <div class="grid-cols-1 col-span-2 pl-4 border-l-8 md:col-span-1 border-primary-500">
                        <div class="w-auto py-2 mt-2 text-xs font-medium text-white rounded-sm ">
                            @if ($product->dateFinPromo)
                                En promotion jusqu'au {{ $product->dateFinPromo }}
                            @endif
                        </div>
                        <ul class="mt-4 space-y-4 text-white">
                            <li class="flex items-center space-x-4 text-sm">
                                <div class="w-12">
                                    <svg class="h-8" id="Groupe_363" data-name="Groupe 363"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.432 27.389">
                                        <defs>
                                            <clipPath id="clip-path">
                                                <path id="Rectangle_275" data-name="Rectangle 275" fill="none"
                                                    d="M0 0h39.432v27.389H0z"></path>
                                            </clipPath>
                                        </defs>
                                        <g id="Groupe_362" data-name="Groupe 362" clip-path="url(#clip-path)">
                                            <path id="Tracé_246" data-name="Tracé 246"
                                                d="M10.217 29H5.652a.652.652 0 0 0-.652.652v3.913a.652.652 0 0 0 .652.652h4.565a.652.652 0 0 0 .652-.652v-3.913a.652.652 0 0 0-.652-.652m-.652 3.913H6.3V30.3h3.265Z"
                                                transform="translate(-1.739 -10.088)" fill="#fff"></path>
                                            <path id="Tracé_247" data-name="Tracé 247"
                                                d="M26.286 26.085H1.956a.653.653 0 0 1-.652-.652V7.173h11.738v2.609a1.306 1.306 0 0 0 1.3 1.3h3.913a1.306 1.306 0 0 0 1.3-1.3V7.173h8.078a9.314 9.314 0 0 1 4.537-1.349L26.928.573A1.943 1.943 0 0 0 25.545 0H7.061a1.942 1.942 0 0 0-1.383.573L.191 6.06A.65.65 0 0 0 0 6.521v18.912a1.959 1.959 0 0 0 1.956 1.956h26.5a11.55 11.55 0 0 1-2.166-1.3M19.564 1.3h5.981a.659.659 0 0 1 .461.191l4.374 4.378H19.564Zm-5.217 0h3.913v4.569h-3.913Zm0 5.869h3.913v2.613h-3.913ZM6.6 1.5a.657.657 0 0 1 .461-.2h5.981v4.569H2.226Z"
                                                fill="#fff"></path>
                                            <path id="Tracé_248" data-name="Tracé 248"
                                                d="M22.521 29h-5.869a.652.652 0 1 0 0 1.3h5.869a.652.652 0 1 0 0-1.3"
                                                transform="translate(-5.566 -10.088)" fill="#fff"></path>
                                            <path id="Tracé_249" data-name="Tracé 249"
                                                d="M20.565 33h-3.913a.652.652 0 1 0 0 1.3h3.913a.652.652 0 1 0 0-1.3"
                                                transform="translate(-5.566 -11.48)" fill="#fff"></path>
                                            <path id="Tracé_250" data-name="Tracé 250"
                                                d="M46.648 26.588a.513.513 0 0 1-.365-.151l-3.1-3.1a.517.517 0 1 1 .731-.731l2.736 2.736 6.871-6.871a.517.517 0 0 1 .731.73l-7.237 7.237a.513.513 0 0 1-.365.151"
                                                transform="translate(-14.969 -6.373)" fill="#60bb77"></path>
                                            <path id="Tracé_251" data-name="Tracé 251"
                                                d="M40.386 30.3a.546.546 0 0 1-.413-.027A11.485 11.485 0 1 1 50.227 9.721a.547.547 0 0 1-.5.974 10.391 10.391 0 1 0-9.277 18.6.547.547 0 0 1-.066 1.011"
                                                transform="translate(-11.658 -2.941)" fill="#fff"></path>
                                        </g>
                                    </svg>
                                </div>

                                <div class="font-bold">
                                    <div class="font-bold">
                                        @if ($product->quantiteStock > 0)
                                            En stock
                                        @else
                                            Stock Epuisé
                                        @endif
                                    </div>
                                    <div class="font-thin">
                                        Livré sous 24/48h
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>

                    <div class="grid-cols-1 col-span-2 md:col-span-1">
                        <button id="{{ $product->id }}"
                            class="addToCart button group --has-trailing w-full --is-large --is-tertiary addToCart"
                            type="button">


                            <span class="button__caption">
                                <span>Ajouter au panier</span>
                            </span>

                            <span class="button__trailing">
                                <svg class="h-8 mr-2" transform="scale(-1,1)" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M19.029 13H22l-.266 1h-2.992l.287-1zm.863-3h2.812L23 9h-2.821l-.287 1zm-.576 2h4.387L24 11h-4.396l-.288 1zM22 3l-.743 2h-1.929l-3.474 12H4.615L0 6h14.812l-.564 2H3.008l2.938 7h8.428l3.432-12H22zM7.5 18c-.828 0-1.5.672-1.5 1.5 0 .829.672 1.5 1.5 1.5S9 20.329 9 19.5c0-.828-.672-1.5-1.5-1.5zm5.9-7-.9 7c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5z">
                                    </path>
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

                        <div class="flex items-center mt-4">
                            <button class="button group --is-small --is-rounded --is-secondary"
                                wire:click.prevent="toggleCompare" wire:loading.class="--is-loading" type="button">


                                <span class="button__caption">
                                    <span>
                                        Comparer
                                    </span>
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
                            <button class="px-4 ml-auto mr-1" wire:click="downloadPdf">
                                <svg wire:loading.class="hidden" wire:target="downloadPdf" class="w-8"
                                    id="Groupe_400" data-name="Groupe 400" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 32 28">
                                    <defs>
                                        <clipPath id="clip-path">
                                            <path id="Rectangle_308" data-name="Rectangle 308" fill="#fff"
                                                d="M0 0h32v28H0z"></path>
                                        </clipPath>
                                    </defs>
                                    <g id="Groupe_399" data-name="Groupe 399" clip-path="url(#clip-path)"
                                        fill="#fff">
                                        <path id="Tracé_271" data-name="Tracé 271"
                                            d="M29.826 6.484h-3.242V1.945A1.948 1.948 0 0 0 24.638 0H7.781a1.948 1.948 0 0 0-1.946 1.945v4.539H2.594A2.6 2.6 0 0 0 0 9.077v10.374a2.6 2.6 0 0 0 2.594 2.594h3.241v3.242a1.948 1.948 0 0 0 1.945 1.945h16.858a1.948 1.948 0 0 0 1.945-1.945v-3.242h3.242a2.6 2.6 0 0 0 2.594-2.594V9.077a2.6 2.6 0 0 0-2.594-2.594M7.132 1.945a.649.649 0 0 1 .649-.645h16.857a.649.649 0 0 1 .648.648v4.536H7.132Zm18.155 23.342a.649.649 0 0 1-.648.648H7.781a.649.649 0 0 1-.648-.648v-8.429h18.154Zm5.835-5.835a1.3 1.3 0 0 1-1.3 1.3h-3.238v-3.89a1.3 1.3 0 0 0-1.3-1.3H7.132a1.3 1.3 0 0 0-1.3 1.3v3.89H2.594a1.3 1.3 0 0 1-1.3-1.3V9.077a1.3 1.3 0 0 1 1.3-1.3h27.232a1.3 1.3 0 0 1 1.3 1.3Z"
                                            transform="translate(0 .334)"></path>
                                        <path id="Tracé_272" data-name="Tracé 272"
                                            d="M15.648 31.3h11.671a.648.648 0 0 0 0-1.3H15.648a.648.648 0 0 0 0 1.3"
                                            transform="translate(-5.274 -10.214)"></path>
                                        <path id="Tracé_273" data-name="Tracé 273"
                                            d="M15.648 35.3h8.429a.648.648 0 0 0 0-1.3h-8.429a.648.648 0 0 0 0 1.3"
                                            transform="translate(-5.274 -11.621)"></path>
                                        <path id="Tracé_274" data-name="Tracé 274"
                                            d="M39.594 17.3A1.3 1.3 0 1 1 38.3 16a1.3 1.3 0 0 1 1.3 1.3"
                                            transform="translate(-13.01 -5.292)"></path>
                                    </g>
                                </svg> <svg class="hidden w-5 h-5 mr-3 -ml-1 text-white animate-spin"
                                    wire:loading.class.remove="hidden" wire:target="downloadPdf"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10"
                                        stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor"
                                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                    </path>
                                </svg>
                            </button>
                            <button class="px-4">
                                <svg class="w-8" data-name="Groupe 398" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 30.478 22.048">
                                    <defs>
                                        <clipPath id="a">
                                            <path data-name="Rectangle 307" fill="#fff" d="M0 0h30.478v22.048H0z">
                                            </path>
                                        </clipPath>
                                    </defs>
                                    <g data-name="Groupe 398" clip-path="url(#a)" fill="#fff">
                                        <path data-name="Tracé 265"
                                            d="M15.219 18.535a.656.656 0 0 1-.343-.1.68.68 0 0 1-.141-.119 51.017 51.017 0 0 1-5.852-6.472 3.771 3.771 0 0 1 1.141-5.151 3.661 3.661 0 0 1 5.1 1.157l.116.182.117-.182a3.661 3.661 0 0 1 5.1-1.157 3.771 3.771 0 0 1 1.141 5.151 50.962 50.962 0 0 1-5.855 6.474.666.666 0 0 1-.134.113.627.627 0 0 1-.359.1h-.028M11.999 7.41a2.352 2.352 0 0 0-1.274.377 2.469 2.469 0 0 0-.742 3.373 55.967 55.967 0 0 0 5.255 5.9 55.9 55.9 0 0 0 5.256-5.9 2.469 2.469 0 0 0-.742-3.373 2.364 2.364 0 0 0-3.3.754c-.057.092-.11.173-.159.247-.267.408-.357.546-.41 1.63a.65.65 0 0 1-1.3 0c-.053-1.084-.143-1.222-.41-1.63l-.159-.247a2.376 2.376 0 0 0-2.023-1.131">
                                        </path>
                                        <path data-name="Tracé 266"
                                            d="M28.316 22.048H2.162A2.164 2.164 0 0 1 0 19.886V2.162A2.164 2.164 0 0 1 2.162 0h26.154a2.164 2.164 0 0 1 2.162 2.162v17.724a2.165 2.165 0 0 1-2.162 2.162M2.162 1.3a.865.865 0 0 0-.865.865v17.721a.866.866 0 0 0 .865.865h26.154a.866.866 0 0 0 .865-.865V2.162a.865.865 0 0 0-.865-.865Z">
                                        </path>
                                        <path data-name="Tracé 267"
                                            d="M6.339 9.595a.646.646 0 0 1-.376-.121L.494 5.57a.648.648 0 0 1 .753-1.055l5.47 3.9a.648.648 0 0 1-.377 1.176">
                                        </path>
                                        <path data-name="Tracé 268"
                                            d="M24.508 9.331a.648.648 0 0 1-.377-1.176l5.091-3.635a.648.648 0 0 1 .754 1.055l-5.092 3.636a.646.646 0 0 1-.376.121">
                                        </path>
                                        <path data-name="Tracé 269"
                                            d="M1.459 21.508a.648.648 0 0 1-.458-1.107l5.079-5.08a.648.648 0 0 1 .917.917l-5.08 5.08a.647.647 0 0 1-.458.19">
                                        </path>
                                        <path data-name="Tracé 270"
                                            d="M29.4 21.508a.647.647 0 0 1-.458-.19l-5.08-5.08a.648.648 0 0 1 .917-.917l5.079 5.08a.648.648 0 0 1-.458 1.107">
                                        </path>
                                    </g>
                                </svg> </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col col-span-2 md:space-x-4 md:flex-row" id="specs">
                <button class="button group --has-leading h-full  " type="button"
                    @click.prevent="tab = 'general'" :class="tab == 'general' ? ' ' : '--is-secondary'">

                    <div class="button__leading">
                        <svg class="h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13">
                            </path>
                        </svg>
                    </div>

                    <span class="button__caption">
                        Description
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
                <button class="button group --has-leading h-full --is-secondary" type="button"
                    @click.prevent="tab = 'features'" :class="tab == 'features' ? ' ' : '--is-secondary'">

                    <div class="button__leading">
                        <svg class="h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                    </div>

                    <span class="button__caption">
                        Fiche technique
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
                <button class="button group --has-leading h-full --is-secondary" type="button"
                    @click.prevent="tab = 'downloads'" :class="tab == 'downloads' ? ' ' : '--is-secondary'">

                    <div class="button__leading">
                        <svg class="h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                    </div>

                    <span class="button__caption">
                        Téléchargements
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

            <h3 class="text-xl font-bold uppercase text-primary-500">{{ $product->description }}</h3>


            <div class="flex col-span-2" x-show="tab == 'general'">

            </div>

            <div class="grid col-span-2 gap-16 md:grid-cols-2" x-show="tab == 'features'" style="display: none;">
                <div>
                    <h3 class="mb-4 uppercase md:overflow-hidden text-primary-500 md:whitespace-nowrap md:text-ellipsis">
                        {{ $product->name }}</h3>
                    <table class="w-full max-w-md">
                        <tbody>
                            @if ($product->ficheTechnique->capacite)
                                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                                    <th class="py-2 whitespace-nowrap">Capacité de stockage</th>
                                    <td class="py-2 text-right whitespace-nowrap">
                                        {{ $product->ficheTechnique->capacite }}
                                    @else
                                        -
                                    </td>
                                </tr>
                            @endif
                            @if ($product->ficheTechnique->DWPD)
                                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                                    <th class="py-2 whitespace-nowrap">DWPD</th>
                                    <td class="py-2 text-right whitespace-nowrap">
                                        {{ $product->ficheTechnique->DWPD }}
                                    @else
                                        -
                                    </td>
                                </tr>
                            @endif
                            @if ($product->ficheTechnique->format)
                                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                                    <th class="py-2 whitespace-nowrap">Format Du Disque</th>
                                    <td class="py-2 text-right whitespace-nowrap">
                                        {{ $product->ficheTechnique->format }}
                                    @else
                                        -
                                    </td>
                                </tr>
                            @endif
                            @if ($product->ficheTechnique->interfaceInterne)
                                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                                    <th class="py-2 whitespace-nowrap">Interface disque interne</th>
                                    <td class="py-2 text-right whitespace-nowrap">
                                        {{ $product->ficheTechnique->interfaceInterne }}
                                    @else
                                        -
                                    </td>
                                </tr>
                            @endif
                            @if ($product->ficheTechnique->SerieHDD)
                                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                                    <th class="py-2 whitespace-nowrap">Série HDD</th>
                                    <td class="py-2 text-right whitespace-nowrap">
                                        {{ $product->ficheTechnique->SerieHDD }}
                                    @else
                                        -
                                    </td>
                                </tr>
                            @endif
                            <tr class="w-full mb-4 text-sm text-left text-white align-top">
                                <th class="py-2 whitespace-nowrap">SMART Technology</th>
                                <td class="py-2 text-right whitespace-nowrap">
                                    @if ($product->ficheTechnique->SMART)
                                        Oui
                                    @else
                                        Non
                                    @endif
                                </td>
                            </tr>
                            @if ($product->ficheTechnique->interfaceDisque)
                                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                                    <th class="py-2 whitespace-nowrap">Iinterface disque</th>
                                    <td class="py-2 text-right whitespace-nowrap">
                                        {{ $product->ficheTechnique->interfaceDisque }}
                                    @else
                                        -
                                    </td>
                                </tr>
                            @endif
                            @if ($product->ficheTechnique->TBW)
                                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                                    <th class="py-2 whitespace-nowrap">TBW</th>
                                    <td class="py-2 text-right whitespace-nowrap">
                                        {{ $product->ficheTechnique->TBW }}
                                    @else
                                        -
                                    </td>
                                </tr>
                            @endif
                            @if ($product->ficheTechnique->tempsEntrePannes)
                                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                                    <th class="py-2 whitespace-nowrap">Temps moyen entre deux pannes (heures)</th>
                                    <td class="py-2 text-right whitespace-nowrap">
                                        {{ $product->ficheTechnique->tempsEntrePannes }}
                                    @else
                                        -
                                    </td>
                                </tr>
                            @endif
                            @if ($product->ficheTechnique->typeDD)
                                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                                    <th class="py-2 whitespace-nowrap">Type Disque Dur interne</th>
                                    <td class="py-2 text-right whitespace-nowrap">
                                        {{ $product->ficheTechnique->typeDD }}
                                    @else
                                        -
                                    </td>
                                </tr>
                            @endif
                            @if ($product->ficheTechnique->type)
                                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                                    <th class="py-2 whitespace-nowrap">Type</th>
                                    <td class="py-2 text-right whitespace-nowrap">
                                        {{ $product->ficheTechnique->type }}
                                    @else
                                        -
                                    </td>
                                </tr>
                            @endif
                            @if ($product->ficheTechnique->alimentationDD)
                                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                                    <th class="py-2 whitespace-nowrap">Alimentation Disque Dur</th>
                                    <td class="py-2 text-right whitespace-nowrap">
                                        {{ $product->ficheTechnique->alimentationDD }}
                                    @else
                                        -
                                    </td>
                                </tr>
                            @endif
                            @if ($product->ficheTechnique->plateformeCompatible)
                                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                                    <th class="py-2 whitespace-nowrap">Plateforme compatible</th>
                                    <td class="py-2 text-right whitespace-nowrap">
                                        {{ $product->ficheTechnique->plateformeCompatible }}
                                    @else
                                        -
                                    </td>
                                </tr>
                            @endif
                            @if ($product->ficheTechnique->voltage)
                                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                                    <th class="py-2 whitespace-nowrap">Voltage</th>
                                    <td class="py-2 text-right whitespace-nowrap">
                                        {{ $product->ficheTechnique->voltage }}
                                    @else
                                        -
                                    </td>
                                </tr>
                            @endif
                            @if ($product->ficheTechnique->organisation)
                                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                                    <th class="py-2 whitespace-nowrap">Organisation</th>
                                    <td class="py-2 text-right whitespace-nowrap">
                                        {{ $product->ficheTechnique->organisation }}
                                    @else
                                        -
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>

            </div>

            <div class="col-span-2" x-show="tab == 'downloads'" style="display: none;">
                <ul class="w-full max-w-5xl space-y-4">
                    @foreach ($product->telechargement->attachementsUrl as $attachment)
                        <li>
                            <a href="{{ asset($attachment) }}"
                                class="button group --has-trailing w-full pl-4 --is-secondary" typue="button"
                                wire:loading.class="--is-loading" download>


                                <span class="button__caption">
                                    <span class="block w-full text-left normal-case">
                                        {{ explode('/', $attachment)[count(explode('/', $attachment)) - 1] }}
                                    </span>
                                </span>

                                <span class="button__trailing">
                                    <svg class="h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
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
                            </a>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>

    </div>
    <script src="{{ asset('dist/js/jquery.toast.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.js"
        integrity="sha512-k2o1KZdvUi59PUXirfThShW9Gdwtk+jVYum6t7RmyCNAVyF9ozijFpvLEWmpgqkHuqSWpflsLf5+PEW6Lxy/wA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('.addToCart').on('click', function() {
            var product_id = $(this).attr('id');
            $.ajax({
                type: 'POST',
                url: "{{ route('addToCart') }}",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: {
                    'product_id': product_id
                },
                success: function(data) {
                    $.toast({
                        text: data.message, // Text that is to be shown in the toast
                        heading: 'Panier', // Optional heading to be shown on the toast
                        icon: 'success', // Type of toast icon
                        showHideTransition: 'fade', // fade, slide or plain
                        allowToastClose: true, // Boolean value true or false
                        hideAfter: 3000, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
                        stack: 5, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
                        position: 'bottom-left', // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values



                        textAlign: 'center', // Text alignment i.e. left, right or center
                        loader: true, // Whether to show loader or not. True by default
                        loaderBg: '#9EC600', // Background color of the toast loader
                        beforeShow: function() {}, // will be triggered before the toast is shown
                        afterShown: function() {}, // will be triggered after the toat has been shown
                        beforeHide: function() {}, // will be triggered before the toast gets hidden
                        afterHidden: function() {} // will be triggered after the toast has been hidden
                    });
                    $('#lblCartCount').html(<?php count((array) session('cart')); ?>);
                },
                error: function(data) {
                    $.toast({
                        text: data.error, // Text that is to be shown in the toast
                        heading: 'Panier', // Optional heading to be shown on the toast
                        icon: 'error', // Type of toast icon
                        showHideTransition: 'fade', // fade, slide or plain
                        allowToastClose: true, // Boolean value true or false
                        hideAfter: 3000, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
                        stack: 5, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
                        position: 'bottom-left', // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values



                        textAlign: 'center', // Text alignment i.e. left, right or center
                        loader: true, // Whether to show loader or not. True by default
                        loaderBg: '#9EC600', // Background color of the toast loader
                        beforeShow: function() {}, // will be triggered before the toast is shown
                        afterShown: function() {}, // will be triggered after the toat has been shown
                        beforeHide: function() {}, // will be triggered before the toast gets hidden
                        afterHidden: function() {} // will be triggered after the toast has been hidden
                    });
                }
            });
        })
    </script>
@endsection
