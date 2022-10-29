@extends('layouts.app')

@section('content')
    <div>
        <ol class="flex text-xs text-white uppercase jusitfy-center">
            <li class="flex items-center h-8">
                <a href="https://sqp.fr/">Accueil</a>
            </li>

            <li class="flex items-center h-8 pl-2">
                <span class="pr-2">
                    <svg class="h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg> </span>
                <a href="https://sqp.fr/distributeur-stockage-san">Stockage SAN</a>
            </li>
        </ol>

        <h2 class="mb-4 text-2xl font-bold uppercase text-primary-500">QSAN XCubeSAN XS3212S - 2U 12 baies - Simple
            contrôleur - Châssis nu</h2>

        <div class="h-16">
            <img class="block object-contain object-left w-auto h-full mb-2"
                srcset="https://sqp.fr/storage/products/brands/39/medias/29/responsive-images/qsan___media_library_original_289_82.png 289w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMjg5IDgyIj4KCTxpbWFnZSB3aWR0aD0iMjg5IiBoZWlnaHQ9IjgyIiB4bGluazpocmVmPSJkYXRhOmltYWdlL2pwZWc7YmFzZTY0LC85ai80QUFRU2taSlJnQUJBUUVBWUFCZ0FBRC8vZ0E3UTFKRlFWUlBVam9nWjJRdGFuQmxaeUIyTVM0d0lDaDFjMmx1WnlCSlNrY2dTbEJGUnlCMk9EQXBMQ0J4ZFdGc2FYUjVJRDBnT1RBSy85c0FRd0FEQWdJREFnSURBd01EQkFNREJBVUlCUVVFQkFVS0J3Y0dDQXdLREF3TENnc0xEUTRTRUEwT0VRNExDeEFXRUJFVEZCVVZGUXdQRnhnV0ZCZ1NGQlVVLzlzQVF3RURCQVFGQkFVSkJRVUpGQTBMRFJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVUvOEFBRVFnQUNRQWdBd0VSQUFJUkFRTVJBZi9FQUI4QUFBRUZBUUVCQVFFQkFBQUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVRQUFJQkF3TUNCQU1GQlFRRUFBQUJmUUVDQXdBRUVRVVNJVEZCQmhOUllRY2ljUlF5Z1pHaENDTkNzY0VWVXRId0pETmljb0lKQ2hZWEdCa2FKU1luS0NrcU5EVTJOemc1T2tORVJVWkhTRWxLVTFSVlZsZFlXVnBqWkdWbVoyaHBhbk4wZFhaM2VIbDZnNFNGaG9lSWlZcVNrNVNWbHBlWW1acWlvNlNscHFlb3FhcXlzN1MxdHJlNHVickN3OFRGeHNmSXljclMwOVRWMXRmWTJkcmg0dVBrNWVibjZPbnE4Zkx6OVBYMjkvajUrdi9FQUI4QkFBTUJBUUVCQVFFQkFRRUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVSQUFJQkFnUUVBd1FIQlFRRUFBRUNkd0FCQWdNUkJBVWhNUVlTUVZFSFlYRVRJaktCQ0JSQ2thR3h3UWtqTTFMd0ZXSnkwUW9XSkRUaEpmRVhHQmthSmljb0tTbzFOamM0T1RwRFJFVkdSMGhKU2xOVVZWWlhXRmxhWTJSbFptZG9hV3B6ZEhWMmQzaDVlb0tEaElXR2g0aUppcEtUbEpXV2w1aVptcUtqcEtXbXA2aXBxckt6dExXMnQ3aTV1c0xEeE1YR3g4akp5dExUMU5YVzE5aloydUxqNU9YbTUranA2dkx6OVBYMjkvajUrdi9hQUF3REFRQUNFUU1SQUQ4QSs2L0ZuaVpOSlZaWXJtNXVJNXB4RkJhUWdNbHdDUnVYN3ZNaCtZS29ZRm1BVlZabUFJQmExaSt0ZFJ0azAvVDQ1cnFXOFVNNi9hRERKa2JzcVdJTEw5d2duYWR2QTRKRkFFVUF0Ym1mTDMwSzN5YWhrUjV6dGorNzVlZWdjeG42YmpuR09LQU15WHdYNUZscGZoOFhrRGZiRlF1R0pVdEpCTEU3RmZYN3FncWZWRG5nZ2dDZkZiL2tVTlUvN0N6L0FQbytnRHViUC9rWWIvOEE2K1pmNTBBWWYvTkd6LzJHdi9jdFFCYXV2K1BmdzMvMk1jbi9BS1QzRkFILzJRPT0iPgoJPC9pbWFnZT4KPC9zdmc+ 32w"
                onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                sizes="1px" src="https://sqp.fr/storage/products/brands/39/medias/29/qsan.png" width="289"
                height="82">

        </div>

        <div class="block xl:hidden">
            <div class="relative grid grid-cols-4 gap-4 overflow-hidden" x-data="{ swiperFull: null, swiperThumb: null }" wire:ignore>

                <div class="h-full col-span-1">
                    <div class="h-full" x-init="swiperThumb = new Swiper($refs.swiperThumbContainer, {
                        direction: 'vertical',
                        spaceBetween: 16,
                        slidesPerView: 4,
                        watchSlidesProgress: true,
                    })">
                        <div class="h-full swiper-container" x-ref="swiperThumbContainer">
                            <div class="w-full h-32 swiper-wrapper">
                                <div class="w-full h-full overflow-hidden bg-white rounded-sm shadow-lg swiper-slide">
                                    <img class="h-full w-full object-contain"
                                        srcset="https://sqp.fr/storage/products/products/39128/medias/17927/responsive-images/qs-xs3212s-39128___media_library_original_1024_645.jpg 1024w, https://sqp.fr/storage/products/products/39128/medias/17927/responsive-images/qs-xs3212s-39128___media_library_original_856_539.jpg 856w, https://sqp.fr/storage/products/products/39128/medias/17927/responsive-images/qs-xs3212s-39128___media_library_original_716_450.jpg 716w, https://sqp.fr/storage/products/products/39128/medias/17927/responsive-images/qs-xs3212s-39128___media_library_original_599_377.jpg 599w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMTAyNCA2NDUiPgoJPGltYWdlIHdpZHRoPSIxMDI0IiBoZWlnaHQ9IjY0NSIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJPREFwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FGQUFnQXdFUkFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEEvVTR1QjFOQUI1aSt0QUI1aSt0QUJ2QjcwQWZGMzdTUDdXZXZmRFRYenArbmFmSk1vL2lWU2FRSGpjSDdmM2pCTnU3U1p6bi9BR1RSY0IwLzdmM2k5M0lUU1p4L3dFMEFldS9zNGZ0YmVJUGlYNG1HbTZqcDhrS2YzbVVpbUI5RStMdmhsNGI4UTN4bXY5TWl1SlA3ekFVZ01EL2hTSGd3Zjh3U0RqL1pIK0ZNQlA4QWhTUGd6T2Y3RWcvNzVGQUc3NFArR1hodncvZmlldzB5SzNsL3ZLQlFCLy9aIj4KCTwvaW1hZ2U+Cjwvc3ZnPg== 32w"
                                        onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                        sizes="1px"
                                        src="https://sqp.fr/storage/products/products/39128/medias/17927/qs-xs3212s-39128.jpg"
                                        width="1024" height="645">

                                </div>
                                <div class="w-full h-full overflow-hidden bg-white rounded-sm shadow-lg swiper-slide">
                                    <img class="h-full w-full object-contain"
                                        srcset="https://sqp.fr/storage/products/products/39128/medias/17928/responsive-images/qs-xs3212s-39128-2___media_library_original_1024_645.jpg 1024w, https://sqp.fr/storage/products/products/39128/medias/17928/responsive-images/qs-xs3212s-39128-2___media_library_original_856_539.jpg 856w, https://sqp.fr/storage/products/products/39128/medias/17928/responsive-images/qs-xs3212s-39128-2___media_library_original_716_450.jpg 716w, https://sqp.fr/storage/products/products/39128/medias/17928/responsive-images/qs-xs3212s-39128-2___media_library_original_599_377.jpg 599w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMTAyNCA2NDUiPgoJPGltYWdlIHdpZHRoPSIxMDI0IiBoZWlnaHQ9IjY0NSIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJPREFwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FGQUFnQXdFUkFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEEvVS9jUFdnQTNqMW9BVHpGOVJRQW9ZR2dENU8rUFh4azhmOEFnL3hJTGZRdEtsdXJYKzhxazFTU1lIazEzKzFQOFU3UlNYME9jZjhBQURWV1F6SWcvYkkrSkExV0NDWFI1MVJtQUpLR3FVVXhIMlI4THZIR3MrSnROczdpOHQyajh4QVRrVlVvUlNNVkp0MlBTYnJScks4WW1hMmprUHF5NXJuTmpQbjhGNkxPUG4wK0J2cWdvQXlybjRaK0dwV0ROcE52dUJ6bllLZHdPbDAzUzdYVDRFaXQ0VmpSUmdBRHBSZGlzZi9aIj4KCTwvaW1hZ2U+Cjwvc3ZnPg== 32w"
                                        onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                        sizes="1px"
                                        src="https://sqp.fr/storage/products/products/39128/medias/17928/qs-xs3212s-39128-2.jpg"
                                        width="1024" height="645">

                                </div>
                                <div class="w-full h-full overflow-hidden bg-white rounded-sm shadow-lg swiper-slide">
                                    <img class="h-full w-full object-contain"
                                        srcset="https://sqp.fr/storage/products/products/39128/medias/17929/responsive-images/qs-xs3212s-39128-3___media_library_original_1024_644.jpg 1024w, https://sqp.fr/storage/products/products/39128/medias/17929/responsive-images/qs-xs3212s-39128-3___media_library_original_856_538.jpg 856w, https://sqp.fr/storage/products/products/39128/medias/17929/responsive-images/qs-xs3212s-39128-3___media_library_original_716_450.jpg 716w, https://sqp.fr/storage/products/products/39128/medias/17929/responsive-images/qs-xs3212s-39128-3___media_library_original_599_376.jpg 599w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMTAyNCA2NDQiPgoJPGltYWdlIHdpZHRoPSIxMDI0IiBoZWlnaHQ9IjY0NCIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJPREFwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FGQUFnQXdFUkFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEEvVHZVZkVsbHBmOEF4OFRwSDlUUUJCSDR2MDJSUXd1RUlQdlFLNURMNDcwbUY5clhhQSttYUF1WGROOFIyV3EvOGUwNnlIL1pOQXp5ejRsZkM3V1BGbXNwTmIzalJXNFBLZzBFbWxwZndzbXRMS09LU1ptZFJnbk5PNFdLV3JmQmszcU95VE9zaEhCelFGckVmd3orRjJyK0VkWmxtdUx4cGJjOUZKcEFlemJSNlVGQmdVQUdCUUFiUjZVQWYvL1oiPgoJPC9pbWFnZT4KPC9zdmc+ 32w"
                                        onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                        sizes="1px"
                                        src="https://sqp.fr/storage/products/products/39128/medias/17929/qs-xs3212s-39128-3.jpg"
                                        width="1024" height="644">

                                </div>
                            </div>
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
                        <div class="swiper-container" x-ref="swiperFullContainer">
                            <div class="w-full rounded-sm h-96 swiper-wrapper xl:h-160">
                                <div class="w-full h-full bg-white shadow-lg swiper-slide">
                                    <img class="h-full w-full object-contain"
                                        srcset="https://sqp.fr/storage/products/products/39128/medias/17927/responsive-images/qs-xs3212s-39128___media_library_original_1024_645.jpg 1024w, https://sqp.fr/storage/products/products/39128/medias/17927/responsive-images/qs-xs3212s-39128___media_library_original_856_539.jpg 856w, https://sqp.fr/storage/products/products/39128/medias/17927/responsive-images/qs-xs3212s-39128___media_library_original_716_450.jpg 716w, https://sqp.fr/storage/products/products/39128/medias/17927/responsive-images/qs-xs3212s-39128___media_library_original_599_377.jpg 599w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMTAyNCA2NDUiPgoJPGltYWdlIHdpZHRoPSIxMDI0IiBoZWlnaHQ9IjY0NSIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJPREFwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FGQUFnQXdFUkFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEEvVTR1QjFOQUI1aSt0QUI1aSt0QUJ2QjcwQWZGMzdTUDdXZXZmRFRYenArbmFmSk1vL2lWU2FRSGpjSDdmM2pCTnU3U1p6bi9BR1RSY0IwLzdmM2k5M0lUU1p4L3dFMEFldS9zNGZ0YmVJUGlYNG1HbTZqcDhrS2YzbVVpbUI5RStMdmhsNGI4UTN4bXY5TWl1SlA3ekFVZ01EL2hTSGd3Zjh3U0RqL1pIK0ZNQlA4QWhTUGd6T2Y3RWcvNzVGQUc3NFArR1hodncvZmlldzB5SzNsL3ZLQlFCLy9aIj4KCTwvaW1hZ2U+Cjwvc3ZnPg== 32w"
                                        onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                        sizes="1px"
                                        src="https://sqp.fr/storage/products/products/39128/medias/17927/qs-xs3212s-39128.jpg"
                                        width="1024" height="645">

                                </div>
                                <div class="w-full h-full bg-white shadow-lg swiper-slide">
                                    <img class="h-full w-full object-contain"
                                        srcset="https://sqp.fr/storage/products/products/39128/medias/17928/responsive-images/qs-xs3212s-39128-2___media_library_original_1024_645.jpg 1024w, https://sqp.fr/storage/products/products/39128/medias/17928/responsive-images/qs-xs3212s-39128-2___media_library_original_856_539.jpg 856w, https://sqp.fr/storage/products/products/39128/medias/17928/responsive-images/qs-xs3212s-39128-2___media_library_original_716_450.jpg 716w, https://sqp.fr/storage/products/products/39128/medias/17928/responsive-images/qs-xs3212s-39128-2___media_library_original_599_377.jpg 599w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMTAyNCA2NDUiPgoJPGltYWdlIHdpZHRoPSIxMDI0IiBoZWlnaHQ9IjY0NSIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJPREFwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FGQUFnQXdFUkFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEEvVS9jUFdnQTNqMW9BVHpGOVJRQW9ZR2dENU8rUFh4azhmOEFnL3hJTGZRdEtsdXJYKzhxazFTU1lIazEzKzFQOFU3UlNYME9jZjhBQURWV1F6SWcvYkkrSkExV0NDWFI1MVJtQUpLR3FVVXhIMlI4THZIR3MrSnROczdpOHQyajh4QVRrVlVvUlNNVkp0MlBTYnJScks4WW1hMmprUHF5NXJuTmpQbjhGNkxPUG4wK0J2cWdvQXlybjRaK0dwV0ROcE52dUJ6bllLZHdPbDAzUzdYVDRFaXQ0VmpSUmdBRHBSZGlzZi9aIj4KCTwvaW1hZ2U+Cjwvc3ZnPg== 32w"
                                        onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                        sizes="1px"
                                        src="https://sqp.fr/storage/products/products/39128/medias/17928/qs-xs3212s-39128-2.jpg"
                                        width="1024" height="645">

                                </div>
                                <div class="w-full h-full bg-white shadow-lg swiper-slide">
                                    <img class="h-full w-full object-contain"
                                        srcset="https://sqp.fr/storage/products/products/39128/medias/17929/responsive-images/qs-xs3212s-39128-3___media_library_original_1024_644.jpg 1024w, https://sqp.fr/storage/products/products/39128/medias/17929/responsive-images/qs-xs3212s-39128-3___media_library_original_856_538.jpg 856w, https://sqp.fr/storage/products/products/39128/medias/17929/responsive-images/qs-xs3212s-39128-3___media_library_original_716_450.jpg 716w, https://sqp.fr/storage/products/products/39128/medias/17929/responsive-images/qs-xs3212s-39128-3___media_library_original_599_376.jpg 599w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMTAyNCA2NDQiPgoJPGltYWdlIHdpZHRoPSIxMDI0IiBoZWlnaHQ9IjY0NCIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJPREFwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FGQUFnQXdFUkFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEEvVHZVZkVsbHBmOEF4OFRwSDlUUUJCSDR2MDJSUXd1RUlQdlFLNURMNDcwbUY5clhhQSttYUF1WGROOFIyV3EvOGUwNnlIL1pOQXp5ejRsZkM3V1BGbXNwTmIzalJXNFBLZzBFbWxwZndzbXRMS09LU1ptZFJnbk5PNFdLV3JmQmszcU95VE9zaEhCelFGckVmd3orRjJyK0VkWmxtdUx4cGJjOUZKcEFlemJSNlVGQmdVQUdCUUFiUjZVQWYvL1oiPgoJPC9pbWFnZT4KPC9zdmc+ 32w"
                                        onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                        sizes="1px"
                                        src="https://sqp.fr/storage/products/products/39128/medias/17929/qs-xs3212s-39128-3.jpg"
                                        width="1024" height="644">

                                </div>
                            </div>
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
                    <svg class="w-4 h-4 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                            stroke-width="4"></circle>
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
                    Ref. SQP: <span class="text-sm font-bold">QS-XS3212S</span>
                </li>
                <li class="flex flex-col lg:block">
                    Ref. Fabricant: <span class="text-sm font-bold">90-S3212S00-EU</span>
                </li>
                <li class="flex flex-col lg:block">
                    EAN: <span class="text-sm font-bold">4710474327867</span>
                </li>
            </ul>

            <ul class="grid grid-cols-2 col-span-2 text-white lg:col-span-1 lg:space-y-4 lg:grid-cols-1">
                <li class="flex flex-col items-center space-x-4 space-y-4 text-sm md:space-y-0 md:flex-row">
                    <svg class="w-12 h-12 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 40">
                        <defs>
                            <clipPath id="a">
                                <path data-name="Rectangle 269" fill="currentColor" d="M0 0h31.25v37.097H0z" />
                            </clipPath>
                            <clipPath id="b">
                                <path data-name="Rectangle 267" fill="currentColor" d="M0 0h23.832v28.371H0z" />
                            </clipPath>
                        </defs>
                        <g data-name="Groupe 368">
                            <g data-name="Groupe 359">
                                <g data-name="Groupe 358" clip-path="url(#a)">
                                    <g data-name="Groupe 357">
                                        <g data-name="Groupe 356" clip-path="url(#a)">
                                            <path data-name="Tracé 243"
                                                d="M15.625 36.823a2.17 2.17 0 0 1-.892-.19c-.59-.261-14.459-6.584-14.459-21V6.859a2.183 2.183 0 0 1 1.993-2.184c.814-.034 7.506-.409 12.058-3.967a2.057 2.057 0 0 1 1.28-.434 2.088 2.088 0 0 1 1.319.434c4.552 3.558 11.244 3.933 11.992 3.964a2.2 2.2 0 0 1 2.059 2.187v8.77c0 14.42-13.87 20.743-14.461 21a2.166 2.166 0 0 1-.89.189m.019-35.087a.643.643 0 0 0-.418.124C10.414 5.62 3.691 6.079 2.393 6.133a.725.725 0 0 0-.657.726v8.77c0 13.48 13.036 19.422 13.59 19.669a.738.738 0 0 0 .594 0c.556-.247 13.593-6.189 13.593-19.669v-8.77a.727.727 0 0 0-.666-.727c-1.29-.053-8.012-.512-12.824-4.272a.611.611 0 0 0-.38-.124"
                                                fill="currentColor" />
                                            <path data-name="Tracé 244"
                                                d="M15.625 36.823a2.17 2.17 0 0 1-.892-.19c-.59-.261-14.459-6.584-14.459-21V6.859a2.183 2.183 0 0 1 1.993-2.184c.814-.034 7.506-.409 12.058-3.967a2.057 2.057 0 0 1 1.28-.434 2.088 2.088 0 0 1 1.319.434c4.552 3.558 11.244 3.933 11.992 3.964a2.2 2.2 0 0 1 2.059 2.187v8.77c0 14.42-13.87 20.743-14.461 21a2.166 2.166 0 0 1-.889.194Zm.019-35.087a.643.643 0 0 0-.418.124C10.414 5.62 3.691 6.079 2.393 6.133a.725.725 0 0 0-.657.726v8.77c0 13.48 13.036 19.422 13.59 19.669a.738.738 0 0 0 .594 0c.556-.247 13.593-6.189 13.593-19.669v-8.77a.727.727 0 0 0-.666-.727c-1.29-.053-8.012-.512-12.824-4.272a.611.611 0 0 0-.379-.124Z"
                                                fill="currentColor" />
                                            <g data-name="Groupe 355" opacity=".2">
                                                <g data-name="Groupe 354">
                                                    <g data-name="Groupe 353" clip-path="url(#b)"
                                                        transform="translate(3.709 4.363)">
                                                        <path data-name="Tracé 245"
                                                            d="M22.234 3.414c-.58-.024-5.775-.315-9.308-3.077A1.621 1.621 0 0 0 11.902 0a1.6 1.6 0 0 0-.994.337C7.374 3.099 2.18 3.39 1.548 3.417A1.694 1.694 0 0 0 0 5.111v6.808c0 11.194 10.766 16.1 11.224 16.3a1.7 1.7 0 0 0 1.383 0c.459-.2 11.225-5.111 11.225-16.305V5.111a1.7 1.7 0 0 0-1.6-1.7"
                                                            fill="currentColor" />
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
                            QSAN XCubeSAN XS3212S - 2U 12 baies - Simple contrôleur - Châssis nu
                        </div>
                        <div class="font-thin">
                            3 ans de garantie QS-XS3212S
                        </div>
                    </div>
                </li>

            </ul>

            <div class="grid-cols-1 col-span-2 pl-4 border-l-8 md:col-span-1 border-primary-500">
                <ul class="mt-4 space-y-4 text-white">
                    <li class="flex items-center space-x-4 text-sm">
                        <div class="w-12">
                            <svg class="h-10" id="Groupe_363" data-name="Groupe 363"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.432 27.389">
                                <defs>
                                    <clipPath id="clip-path">
                                        <path id="Rectangle_275" data-name="Rectangle 275" fill="none"
                                            d="M0 0h39.432v27.389H0z" />
                                    </clipPath>
                                </defs>
                                <g id="Groupe_362" data-name="Groupe 362" clip-path="url(#clip-path)">
                                    <path id="Tracé_246" data-name="Tracé 246"
                                        d="M10.217 29H5.652a.652.652 0 0 0-.652.652v3.913a.652.652 0 0 0 .652.652h4.565a.652.652 0 0 0 .652-.652v-3.913a.652.652 0 0 0-.652-.652m-.652 3.913H6.3V30.3h3.265Z"
                                        transform="translate(-1.739 -10.088)" fill="#fff" />
                                    <path id="Tracé_247" data-name="Tracé 247"
                                        d="M26.286 26.085H1.956a.653.653 0 0 1-.652-.652V7.173h11.738v2.609a1.306 1.306 0 0 0 1.3 1.3h3.913a1.306 1.306 0 0 0 1.3-1.3V7.173h8.078a9.314 9.314 0 0 1 4.537-1.349L26.928.573A1.943 1.943 0 0 0 25.545 0H7.061a1.942 1.942 0 0 0-1.383.573L.191 6.06A.65.65 0 0 0 0 6.521v18.912a1.959 1.959 0 0 0 1.956 1.956h26.5a11.55 11.55 0 0 1-2.166-1.3M19.564 1.3h5.981a.659.659 0 0 1 .461.191l4.374 4.378H19.564Zm-5.217 0h3.913v4.569h-3.913Zm0 5.869h3.913v2.613h-3.913ZM6.6 1.5a.657.657 0 0 1 .461-.2h5.981v4.569H2.226Z"
                                        fill="#fff" />
                                    <path id="Tracé_248" data-name="Tracé 248"
                                        d="M22.521 29h-5.869a.652.652 0 1 0 0 1.3h5.869a.652.652 0 1 0 0-1.3"
                                        transform="translate(-5.566 -10.088)" fill="#fff" />
                                    <path id="Tracé_249" data-name="Tracé 249"
                                        d="M20.565 33h-3.913a.652.652 0 1 0 0 1.3h3.913a.652.652 0 1 0 0-1.3"
                                        transform="translate(-5.566 -11.48)" fill="#fff" />
                                    <path id="Tracé_253" data-name="Tracé 253"
                                        d="M14.173 21.284a.557.557 0 0 1-.394-.951l4.291-4.291V7.365a.557.557 0 1 1 1.114 0v8.908a.557.557 0 0 1-.164.394l-4.454 4.454a.556.556 0 0 1-.394.163"
                                        transform="translate(19.707 4.354) scale(0.8)" fill="#60bb77" />
                                    <path id="Tracé_251" data-name="Tracé 251"
                                        d="M40.386 30.3a.546.546 0 0 1-.413-.027A11.485 11.485 0 1 1 50.227 9.721a.547.547 0 0 1-.5.974 10.391 10.391 0 1 0-9.277 18.6.547.547 0 0 1-.066 1.011"
                                        transform="translate(-11.658 -2.941)" fill="#fff" />
                                </g>
                            </svg>
                        </div>

                        <div class="font-bold">
                            <div class="font-bold">
                                Épuisé provisoirement
                            </div>
                            <div class="font-thin">
                                Livraison sur commande
                            </div>
                        </div>
                    </li>

                    <li class="flex items-center space-x-4 text-sm">
                        <div class="w-12">
                            <svg class="h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.839 27.839">
                                <defs>
                                    <clipPath id="clip-path">
                                        <path id="Rectangle_276" data-name="Rectangle 276" fill="none"
                                            d="M0 0h27.839v27.839H0z" />
                                    </clipPath>
                                </defs>
                                <g id="Groupe_369" data-name="Groupe 369" transform="translate(-1218 -533.206)">
                                    <g id="Groupe_366" data-name="Groupe 366" transform="translate(1218 533.206)">
                                        <g id="Groupe_366-2" data-name="Groupe 366" clip-path="url(#clip-path)">
                                            <path id="Tracé_252" data-name="Tracé 252"
                                                d="M13.919 27.839A13.919 13.919 0 1 1 27.838 13.92a13.935 13.935 0 0 1-13.919 13.919m0-26.781A12.861 12.861 0 1 0 26.781 13.92 12.876 12.876 0 0 0 13.919 1.058"
                                                fill="#fff" />
                                            <path id="Tracé_253" data-name="Tracé 253"
                                                d="M14.173 21.284a.557.557 0 0 1-.394-.951l4.291-4.291V7.365a.557.557 0 1 1 1.114 0v8.908a.557.557 0 0 1-.164.394l-4.454 4.454a.556.556 0 0 1-.394.163"
                                                transform="translate(-4.707 -2.354)" fill="#60bb77" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>

                        <div class="font-bold">
                            <div class="font-thin">
                                Pour les solutions de stockage (NAS…)
                            </div>
                            <div class="font-bold">
                                Comptez 24/48h de délai supplémentaire.
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="grid-cols-1 col-span-2 md:col-span-1">
                <div class="flex items-center justify-center mb-4">
                    <span class="mr-2 text-xs font-bold text-white uppercase">quantité</span>
                    <input class="w-20 py-2 pl-3 text-center text-white border-transparent bg-secondary-600"
                        type="number" wire:model="quantity">
                </div>
                <button class="button group --has-trailing w-full --is-large --is-tertiary" wire:click.prevent="addToCart"
                    wire:loading.class="--is-loading" type="button">


                    <span class="button__caption">
                        <span>Ajouter au panier</span>
                    </span>

                    <span class="button__trailing">
                        <svg class="h-8 mr-2" transform="scale(-1,1)" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M19.029 13H22l-.266 1h-2.992l.287-1zm.863-3h2.812L23 9h-2.821l-.287 1zm-.576 2h4.387L24 11h-4.396l-.288 1zM22 3l-.743 2h-1.929l-3.474 12H4.615L0 6h14.812l-.564 2H3.008l2.938 7h8.428l3.432-12H22zM7.5 18c-.828 0-1.5.672-1.5 1.5 0 .829.672 1.5 1.5 1.5S9 20.329 9 19.5c0-.828-.672-1.5-1.5-1.5zm5.9-7-.9 7c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5z" />
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
                    <button class="button group --is-small --is-rounded --is-secondary" wire:click.prevent="toggleCompare"
                        wire:loading.class="--is-loading" type="button">


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
                        <svg wire:loading.class="hidden" wire:target="downloadPdf" class="w-8" id="Groupe_400"
                            data-name="Groupe 400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 28">
                            <defs>
                                <clipPath id="clip-path">
                                    <path id="Rectangle_308" data-name="Rectangle 308" fill="#fff"
                                        d="M0 0h32v28H0z" />
                                </clipPath>
                            </defs>
                            <g id="Groupe_399" data-name="Groupe 399" clip-path="url(#clip-path)" fill="#fff">
                                <path id="Tracé_271" data-name="Tracé 271"
                                    d="M29.826 6.484h-3.242V1.945A1.948 1.948 0 0 0 24.638 0H7.781a1.948 1.948 0 0 0-1.946 1.945v4.539H2.594A2.6 2.6 0 0 0 0 9.077v10.374a2.6 2.6 0 0 0 2.594 2.594h3.241v3.242a1.948 1.948 0 0 0 1.945 1.945h16.858a1.948 1.948 0 0 0 1.945-1.945v-3.242h3.242a2.6 2.6 0 0 0 2.594-2.594V9.077a2.6 2.6 0 0 0-2.594-2.594M7.132 1.945a.649.649 0 0 1 .649-.645h16.857a.649.649 0 0 1 .648.648v4.536H7.132Zm18.155 23.342a.649.649 0 0 1-.648.648H7.781a.649.649 0 0 1-.648-.648v-8.429h18.154Zm5.835-5.835a1.3 1.3 0 0 1-1.3 1.3h-3.238v-3.89a1.3 1.3 0 0 0-1.3-1.3H7.132a1.3 1.3 0 0 0-1.3 1.3v3.89H2.594a1.3 1.3 0 0 1-1.3-1.3V9.077a1.3 1.3 0 0 1 1.3-1.3h27.232a1.3 1.3 0 0 1 1.3 1.3Z"
                                    transform="translate(0 .334)" />
                                <path id="Tracé_272" data-name="Tracé 272"
                                    d="M15.648 31.3h11.671a.648.648 0 0 0 0-1.3H15.648a.648.648 0 0 0 0 1.3"
                                    transform="translate(-5.274 -10.214)" />
                                <path id="Tracé_273" data-name="Tracé 273"
                                    d="M15.648 35.3h8.429a.648.648 0 0 0 0-1.3h-8.429a.648.648 0 0 0 0 1.3"
                                    transform="translate(-5.274 -11.621)" />
                                <path id="Tracé_274" data-name="Tracé 274"
                                    d="M39.594 17.3A1.3 1.3 0 1 1 38.3 16a1.3 1.3 0 0 1 1.3 1.3"
                                    transform="translate(-13.01 -5.292)" />
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
                                    <path data-name="Rectangle 307" fill="#fff" d="M0 0h30.478v22.048H0z" />
                                </clipPath>
                            </defs>
                            <g data-name="Groupe 398" clip-path="url(#a)" fill="#fff">
                                <path data-name="Tracé 265"
                                    d="M15.219 18.535a.656.656 0 0 1-.343-.1.68.68 0 0 1-.141-.119 51.017 51.017 0 0 1-5.852-6.472 3.771 3.771 0 0 1 1.141-5.151 3.661 3.661 0 0 1 5.1 1.157l.116.182.117-.182a3.661 3.661 0 0 1 5.1-1.157 3.771 3.771 0 0 1 1.141 5.151 50.962 50.962 0 0 1-5.855 6.474.666.666 0 0 1-.134.113.627.627 0 0 1-.359.1h-.028M11.999 7.41a2.352 2.352 0 0 0-1.274.377 2.469 2.469 0 0 0-.742 3.373 55.967 55.967 0 0 0 5.255 5.9 55.9 55.9 0 0 0 5.256-5.9 2.469 2.469 0 0 0-.742-3.373 2.364 2.364 0 0 0-3.3.754c-.057.092-.11.173-.159.247-.267.408-.357.546-.41 1.63a.65.65 0 0 1-1.3 0c-.053-1.084-.143-1.222-.41-1.63l-.159-.247a2.376 2.376 0 0 0-2.023-1.131" />
                                <path data-name="Tracé 266"
                                    d="M28.316 22.048H2.162A2.164 2.164 0 0 1 0 19.886V2.162A2.164 2.164 0 0 1 2.162 0h26.154a2.164 2.164 0 0 1 2.162 2.162v17.724a2.165 2.165 0 0 1-2.162 2.162M2.162 1.3a.865.865 0 0 0-.865.865v17.721a.866.866 0 0 0 .865.865h26.154a.866.866 0 0 0 .865-.865V2.162a.865.865 0 0 0-.865-.865Z" />
                                <path data-name="Tracé 267"
                                    d="M6.339 9.595a.646.646 0 0 1-.376-.121L.494 5.57a.648.648 0 0 1 .753-1.055l5.47 3.9a.648.648 0 0 1-.377 1.176" />
                                <path data-name="Tracé 268"
                                    d="M24.508 9.331a.648.648 0 0 1-.377-1.176l5.091-3.635a.648.648 0 0 1 .754 1.055l-5.092 3.636a.646.646 0 0 1-.376.121" />
                                <path data-name="Tracé 269"
                                    d="M1.459 21.508a.648.648 0 0 1-.458-1.107l5.079-5.08a.648.648 0 0 1 .917.917l-5.08 5.08a.647.647 0 0 1-.458.19" />
                                <path data-name="Tracé 270"
                                    d="M29.4 21.508a.647.647 0 0 1-.458-.19l-5.08-5.08a.648.648 0 0 1 .917-.917l5.079 5.08a.648.648 0 0 1-.458 1.107" />
                            </g>
                        </svg> </button>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col col-span-2 md:space-x-4 md:flex-row" id="specs">
        <button class="button group --has-leading h-full" type="button" @click.prevent="tab = 'configure'"
            :class="tab == 'configure' ? '--is-primary' : '--is-secondary'">

            <div class="button__leading">
                <svg class="h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </div>

            <span class="button__caption">
                Configurer
            </span>


            <span class="button__spinner">
                <svg class="w-4 h-4 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                        stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg>
            </span>
        </button>
        <button class="button group --has-leading h-full" type="button" @click.prevent="tab = 'general'"
            :class="tab == 'general' ? '--is-primary' : '--is-secondary'">

            <div class="button__leading">
                <svg class="h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                </svg>
            </div>

            <span class="button__caption">
                Description
            </span>


            <span class="button__spinner">
                <svg class="w-4 h-4 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                        stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg>
            </span>
        </button>
        <button class="button group --has-leading h-full" type="button" @click.prevent="tab = 'features'"
            :class="tab == 'features' ? '--is-primary' : '--is-secondary'">

            <div class="button__leading">
                <svg class="h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
            </div>

            <span class="button__caption">
                Fiche technique
            </span>


            <span class="button__spinner">
                <svg class="w-4 h-4 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                        stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg>
            </span>
        </button>
        <button class="button group --has-leading h-full" type="button" @click.prevent="tab = 'downloads'"
            :class="tab == 'downloads' ? '--is-primary' : '--is-secondary'">

            <div class="button__leading">
                <svg class="h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                </svg>
            </div>

            <span class="button__caption">
                Téléchargements
            </span>


            <span class="button__spinner">
                <svg class="w-4 h-4 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                        stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg>
            </span>
        </button>
    </div>

    <h3 class="text-xl font-bold uppercase text-primary-500">QSAN XCubeSAN XS3212S - 2U 12 baies - Simple contrôleur -
        Châssis nu</h3>

    <div id="configure-tab" class="col-span-2" x-show="tab == 'configure'">
        <div wire:id="HtI9NLU1Z8H9isjrZMf6"
            wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;HtI9NLU1Z8H9isjrZMf6&quot;,&quot;name&quot;:&quot;website.products.singleConfigurator&quot;,&quot;locale&quot;:&quot;fr&quot;,&quot;path&quot;:&quot;distributeur-san-simple-controleur\/qsan-xcubesan-xs3212s-2u-12-baies-simple-controleur-chassis-nu&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;76b955fe&quot;,&quot;data&quot;:{&quot;product&quot;:[],&quot;configuration&quot;:{&quot;additionals&quot;:[]},&quot;filters&quot;:[],&quot;casing&quot;:null,&quot;disks&quot;:[]},&quot;dataMeta&quot;:{&quot;models&quot;:{&quot;product&quot;:{&quot;class&quot;:&quot;App\\Domain\\Products\\Models\\Product&quot;,&quot;id&quot;:39128,&quot;relations&quot;:[&quot;internalProduct&quot;,&quot;type&quot;,&quot;media&quot;,&quot;media.model&quot;,&quot;family&quot;,&quot;brand&quot;,&quot;brand.media&quot;,&quot;promotion&quot;,&quot;arrival&quot;],&quot;connection&quot;:&quot;mysql&quot;}},&quot;collections&quot;:[&quot;disks&quot;]},&quot;checksum&quot;:&quot;170fd16d82a5e0a1d51d1256d7f60bfa463b341a620739998bd69479f69da234&quot;}}">


            <div class="w-full bg-secondary-600">
                <div class="relative mb-3 text-left">
                    <div class="px-2 py-4 rounded-sm bg-secondary-600">
                        <div
                            class="w-full px-2 mb-4 overflow-hidden text-xl font-medium text-left text-white normal-case text-ellipsis whitespace-nowrap">
                            Ajouter des accessoires</div>

                        <div class="py-4 pt-2">
                            <div
                                class="w-full px-2  mb-4 overflow-hidden text-base font-medium text-left normal-case text-primary-500 text-ellipsis whitespace-nowrap">
                                Accessoires SAN / Cartes reseaux</div>
                            <div class="flex items-start w-full px-3 py-2 mb-4 text-sm cursor-pointer ">
                                <input
                                    class="w-16 py-2 pl-3 text-center text-white placeholder-gray-100 border-transparent bg-secondary-700 lg:mt-1"
                                    id="additional-46881" name="configuration[additionals-46881]" type="number"
                                    wire:model="configuration.additionals.46881" min=0 placeholder=0>
                                <label for="additional-46881" class="flex flex-col ml-4">
                                    <span class="overflow-hidden text-base font-medium text-white text-ellipsis ">
                                        Qsan XCubeSAN/DAS Spare HQ-10G2T : Carte 2 ports 10GbE iSCSI RJ45 pour châssis XCube
                                        compatibles
                                    </span>
                                    <span
                                        class="mt-1 overflow-hidden text-xs uppercase text-secondary-100 text-ellipsis whitespace-nowrap">
                                        Ref. SQP: <span class="text-sm font-bold">QS-XSA-CARD210G</span>
                                    </span>
                                </label>
                            </div>
                            <div class="flex items-start w-full px-3 py-2 mb-4 text-sm cursor-pointer ">
                                <input
                                    class="w-16 py-2 pl-3 text-center text-white placeholder-gray-100 border-transparent bg-secondary-700 lg:mt-1"
                                    id="additional-46876" name="configuration[additionals-46876]" type="number"
                                    wire:model="configuration.additionals.46876" min=0 placeholder=0>
                                <label for="additional-46876" class="flex flex-col ml-4">
                                    <span class="overflow-hidden text-base font-medium text-white text-ellipsis ">
                                        Qsan XCubeSAN/DAS Spare HQ-16F2S2 : Carte 2 ports Fibre Channel 16Gb SFP+ pour
                                        XCubeSAN compatibles
                                    </span>
                                    <span
                                        class="mt-1 overflow-hidden text-xs uppercase text-secondary-100 text-ellipsis whitespace-nowrap">
                                        Ref. SQP: <span class="text-sm font-bold">QS-XSA-CARD2FC16</span>
                                    </span>
                                </label>
                            </div>
                            <div class="flex items-start w-full px-3 py-2 mb-4 text-sm cursor-pointer ">
                                <input
                                    class="w-16 py-2 pl-3 text-center text-white placeholder-gray-100 border-transparent bg-secondary-700 lg:mt-1"
                                    id="additional-46880" name="configuration[additionals-46880]" type="number"
                                    wire:model="configuration.additionals.46880" min=0 placeholder=0>
                                <label for="additional-46880" class="flex flex-col ml-4">
                                    <span class="overflow-hidden text-base font-medium text-white text-ellipsis ">
                                        QSAN XCube Spare HQ-10G4S2 : Carte 4 ports 10GbE iSCSI SFP+ pour châssis XCube
                                        compatibles
                                    </span>
                                    <span
                                        class="mt-1 overflow-hidden text-xs uppercase text-secondary-100 text-ellipsis whitespace-nowrap">
                                        Ref. SQP: <span class="text-sm font-bold">QS-XSA-CARD410G</span>
                                    </span>
                                </label>
                            </div>
                            <div class="flex items-start w-full px-3 py-2 mb-4 text-sm cursor-pointer ">
                                <input
                                    class="w-16 py-2 pl-3 text-center text-white placeholder-gray-100 border-transparent bg-secondary-700 lg:mt-1"
                                    id="additional-46882" name="configuration[additionals-46882]" type="number"
                                    wire:model="configuration.additionals.46882" min=0 placeholder=0>
                                <label for="additional-46882" class="flex flex-col ml-4">
                                    <span class="overflow-hidden text-base font-medium text-white text-ellipsis ">
                                        QSAN XCubeSAN/DAS Spare HQ-01G4T : Carte 4 ports 1GbE Base-T iSCSI RJ45 pour
                                        XCubeSAN compatibles
                                    </span>
                                    <span
                                        class="mt-1 overflow-hidden text-xs uppercase text-secondary-100 text-ellipsis whitespace-nowrap">
                                        Ref. SQP: <span class="text-sm font-bold">QS-XSA-CARD41G</span>
                                    </span>
                                </label>
                            </div>
                            <div class="flex items-start w-full px-3 py-2 mb-4 text-sm cursor-pointer ">
                                <input
                                    class="w-16 py-2 pl-3 text-center text-white placeholder-gray-100 border-transparent bg-secondary-700 lg:mt-1"
                                    id="additional-46879" name="configuration[additionals-46879]" type="number"
                                    wire:model="configuration.additionals.46879" min=0 placeholder=0>
                                <label for="additional-46879" class="flex flex-col ml-4">
                                    <span class="overflow-hidden text-base font-medium text-white text-ellipsis ">
                                        Qsan XCubeSAN/DAS Spare HQ-16F4S2 : Carte 4 ports Fibre Channel 16Gb SFP+ pour
                                        XCubeSAN compatibles
                                    </span>
                                    <span
                                        class="mt-1 overflow-hidden text-xs uppercase text-secondary-100 text-ellipsis whitespace-nowrap">
                                        Ref. SQP: <span class="text-sm font-bold">QS-XSA-CARD4FC16</span>
                                    </span>
                                </label>
                            </div>
                            <div
                                class="w-full px-2 mt-8 mb-4 overflow-hidden text-base font-medium text-left normal-case text-primary-500 text-ellipsis whitespace-nowrap">
                                Accessoires SAN / Divers</div>
                            <div class="flex items-start w-full px-3 py-2 mb-4 text-sm cursor-pointer ">
                                <input
                                    class="w-16 py-2 pl-3 text-center text-white placeholder-gray-100 border-transparent bg-secondary-700 lg:mt-1"
                                    id="additional-46864" name="configuration[additionals-46864]" type="number"
                                    wire:model="configuration.additionals.46864" min=0 placeholder=0>
                                <label for="additional-46864" class="flex flex-col ml-4">
                                    <span class="overflow-hidden text-base font-medium text-white text-ellipsis ">
                                        Qsan XCubeSAN/DAS Spare : Licence QCache pour activer cache SSD sur un SAN
                                    </span>
                                    <span
                                        class="mt-1 overflow-hidden text-xs uppercase text-secondary-100 text-ellipsis whitespace-nowrap">
                                        Ref. SQP: <span class="text-sm font-bold">QS-XSA-LICCACHE</span>
                                    </span>
                                </label>
                            </div>
                            <div class="flex items-start w-full px-3 py-2 mb-4 text-sm cursor-pointer ">
                                <input
                                    class="w-16 py-2 pl-3 text-center text-white placeholder-gray-100 border-transparent bg-secondary-700 lg:mt-1"
                                    id="additional-46865" name="configuration[additionals-46865]" type="number"
                                    wire:model="configuration.additionals.46865" min=0 placeholder=0>
                                <label for="additional-46865" class="flex flex-col ml-4">
                                    <span class="overflow-hidden text-base font-medium text-white text-ellipsis ">
                                        Qsan XCubeSAN/DAS Spare : Licence QTiering pour activer auto-tiering sur un SAN
                                    </span>
                                    <span
                                        class="mt-1 overflow-hidden text-xs uppercase text-secondary-100 text-ellipsis whitespace-nowrap">
                                        Ref. SQP: <span class="text-sm font-bold">QS-XSA-LICTIER</span>
                                    </span>
                                </label>
                            </div>
                            <div
                                class="w-full px-2 mt-8 mb-4 overflow-hidden text-base font-medium text-left normal-case text-primary-500 text-ellipsis whitespace-nowrap">
                                Accessoires SAN / Mémoires</div>
                            <div class="flex items-start w-full px-3 py-2 mb-4 text-sm cursor-pointer ">
                                <input
                                    class="w-16 py-2 pl-3 text-center text-white placeholder-gray-100 border-transparent bg-secondary-700 lg:mt-1"
                                    id="additional-46874" name="configuration[additionals-46874]" type="number"
                                    wire:model="configuration.additionals.46874" min=0 placeholder=0>
                                <label for="additional-46874" class="flex flex-col ml-4">
                                    <span class="overflow-hidden text-base font-medium text-white text-ellipsis ">
                                        QSAN XCube Spare DIM-D432GB : module RAM DDR4 ECC 32GB pour châssis XCube
                                        compatibles
                                    </span>
                                    <span
                                        class="mt-1 overflow-hidden text-xs uppercase text-secondary-100 text-ellipsis whitespace-nowrap">
                                        Ref. SQP: <span class="text-sm font-bold">QS-XSA-RAMD432GB</span>
                                    </span>
                                </label>
                            </div>
                            <div class="flex items-start w-full px-3 py-2 mb-4 text-sm cursor-pointer ">
                                <input
                                    class="w-16 py-2 pl-3 text-center text-white placeholder-gray-100 border-transparent bg-secondary-700 lg:mt-1"
                                    id="additional-46871" name="configuration[additionals-46871]" type="number"
                                    wire:model="configuration.additionals.46871" min=0 placeholder=0>
                                <label for="additional-46871" class="flex flex-col ml-4">
                                    <span class="overflow-hidden text-base font-medium text-white text-ellipsis ">
                                        QSAN XCube Spare DIM-D44GB : module RAM DDR4 ECC 4GB pour châssis XCube compatibles
                                    </span>
                                    <span
                                        class="mt-1 overflow-hidden text-xs uppercase text-secondary-100 text-ellipsis whitespace-nowrap">
                                        Ref. SQP: <span class="text-sm font-bold">QS-XSA-RAMD44GB</span>
                                    </span>
                                </label>
                            </div>
                            <div class="flex items-start w-full px-3 py-2 mb-4 text-sm cursor-pointer ">
                                <input
                                    class="w-16 py-2 pl-3 text-center text-white placeholder-gray-100 border-transparent bg-secondary-700 lg:mt-1"
                                    id="additional-46872" name="configuration[additionals-46872]" type="number"
                                    wire:model="configuration.additionals.46872" min=0 placeholder=0>
                                <label for="additional-46872" class="flex flex-col ml-4">
                                    <span class="overflow-hidden text-base font-medium text-white text-ellipsis ">
                                        QSAN XCube Spare DIM-D48GB : module RAM DDR4 ECC 8GB pour châssis XCube compatibles
                                    </span>
                                    <span
                                        class="mt-1 overflow-hidden text-xs uppercase text-secondary-100 text-ellipsis whitespace-nowrap">
                                        Ref. SQP: <span class="text-sm font-bold">QS-XSA-RAMD48GB</span>
                                    </span>
                                </label>
                            </div>
                            <div
                                class="w-full px-2 mt-8 mb-4 overflow-hidden text-base font-medium text-left normal-case text-primary-500 text-ellipsis whitespace-nowrap">
                                Accessoires SAN / Rails</div>
                            <div class="flex items-start w-full px-3 py-2 mb-4 text-sm cursor-pointer ">
                                <input
                                    class="w-16 py-2 pl-3 text-center text-white placeholder-gray-100 border-transparent bg-secondary-700 lg:mt-1"
                                    id="additional-46875" name="configuration[additionals-46875]" type="number"
                                    wire:model="configuration.additionals.46875" min=0 placeholder=0>
                                <label for="additional-46875" class="flex flex-col ml-4">
                                    <span class="overflow-hidden text-base font-medium text-white text-ellipsis ">
                                        QSAN XCube Spare SLR-RM3640 : Kit rails pour SAN/DAS rackables et NAS
                                        XN7016R/24R/8016R/24R
                                    </span>
                                    <span
                                        class="mt-1 overflow-hidden text-xs uppercase text-secondary-100 text-ellipsis whitespace-nowrap">
                                        Ref. SQP: <span class="text-sm font-bold">QS-XSA-RAILKIT</span>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Livewire Component wire-end:HtI9NLU1Z8H9isjrZMf6 -->
    </div>

    <div class="flex col-span-2" x-show="tab == 'general'">

    </div>

    <div class="grid col-span-2 gap-16 md:grid-cols-2" x-show="tab == 'features'">
        <div>
            <h3 class="mb-4 uppercase md:overflow-hidden text-primary-500 md:whitespace-nowrap md:text-ellipsis">QSAN
                XCubeSAN XS3212S - 2U 12 baies - Simple contrôleur - Châssis nu</h3>
            <table class="w-full max-w-md">
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Alimentation redondante</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        Oui
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Boitier nu</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        Oui
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Capacité disque brute</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        Boitier nu
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Capacité total</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        0
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Double controleur</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        Non
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Fabricant processeur</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        Intel Pentium
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Format NAS</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        Rack (2U)
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Format disque</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        2,5&quot;/3,5&quot;
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">HDMI</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        Non
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Mémoire maxi</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        64 Go
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Mémoire standard</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        4 Go
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Nbre coeurs du processeur</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        4
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Nbre de baies disques</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        12
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Nbre ports 10GbE</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        2 X 10Gb/s Base-T par contrôler
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Nbre ports eSATA</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        0
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Nbre ports GbE</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        1 (Administration) par contrôler
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Nbre slot</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        4
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Nbre slot dédié cache</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        4
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Nbre baies d&#039;extension</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        10
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Nbre ports mini SAS</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        2 X 12Gb/s SAS par contrôler
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Nbre total ports USB</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        0
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Nbre total ports USB 2.0</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        0
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Nbre total ports USB 3.0</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        1
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Niveaux RAID du NAS</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        0, 1, 3, 5, 6, 10, 30, 50, 60
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Puissance en Watts</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        770
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Rack ou Tour</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        Rack
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">RAID</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        Oui
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Réseau (RJ45)</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        Oui
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Slots d&#039;extension</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        2 slots Host par contrôleur
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Support iSCSI</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        Oui
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Technologie Ethernet NAS</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        Gigabit Ethernet
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Tension d&#039;entrée NAS</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        100-240
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Type alimentation</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        Interne
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Type de contrôle NAS</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        SAS 12Gb/s
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Type de mémoire</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        DDR4 ECC RDIMM
                    </td>
                </tr>
                <tr class="w-full mb-4 text-sm text-left text-white align-top">
                    <th class="py-2 whitespace-nowrap">Vitesse du processeur (Ghz)</th>
                    <td class="py-2 text-right whitespace-nowrap">
                        1.6
                    </td>
                </tr>
            </table>
        </div>

    </div>

    <div class="col-span-2" x-show="tab == 'downloads'">
        <ul class="w-full max-w-5xl space-y-4">
            <li>
                <button class="button group --has-trailing w-full pl-4 --is-secondary" typue="button"
                    wire:loading.class="--is-loading" wire:click="downloadPdf">


                    <span class="button__caption">
                        <span class="block w-full text-left normal-case">
                            Fiche web QS-XS3212S
                        </span>
                    </span>

                    <span class="button__trailing">
                        <svg class="h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
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
            </li>

            <li>
                <a class="button group --has-trailing w-full pl-4 --is-secondary"
                    href="https://docs.sqp.fr/index.php/s/5VB9hQjkzuUNZUu" target="_blank">


                    <span class="button__caption">
                        <span class="block w-full text-left normal-case">
                            Documentation fabricant QS-XS3212S
                        </span>
                    </span>

                    <span class="button__trailing">
                        <svg class="h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
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
        </ul>
    </div>
    </div>

    </div>
@endsection
