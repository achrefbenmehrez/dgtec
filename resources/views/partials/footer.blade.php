<div class="relative z-10 px-4 py-8 mb-16 bg-secondary-700">
    <div class="mx-auto max-w-big">
        <div class="relative flex justify-center w-full lg:justify-start">
            <hr class="absolute w-full border-secondary-600" style="z-index: -1">
            <p
                class="inline-flex items-center h-8 px-4 mx-2 -mt-4 text-sm font-bold uppercase text-tertiary-500 lg:pr-4 lg:px-0 lg:mx-0 bg-secondary-700">
                Nos marques</p>
        </div>
        <div class="relative mt-8 overflow-hidden" x-data="{ swiper: null }" x-init="swiper = new Swiper($refs.container, {
            loop: true,
            freeMode: true,
            breakpoints: {
                340: {
                    slidesPerView: 2,
                },
                640: {
                    slidesPerView: 3,
                },
                768: {
                    slidesPerView: 4,
                },
                1024: {
                    slidesPerView: 5,
                }
            }
        })">
            <div x-ref="container" class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <a class="swiper-slide" href="https://sqp.fr/distributeur-solutions-synology">
                        <img class="object-contain w-full h-20 p-4" alt="Synology"
                            srcset="https://sqp.fr/storage/products/brands/2/medias/2/responsive-images/synology___media_library_original_295_79.png 295w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMjk1IDc5Ij4KCTxpbWFnZSB3aWR0aD0iMjk1IiBoZWlnaHQ9Ijc5IiB4bGluazpocmVmPSJkYXRhOmltYWdlL2pwZWc7YmFzZTY0LC85ai80QUFRU2taSlJnQUJBUUVBWUFCZ0FBRC8vZ0E3UTFKRlFWUlBVam9nWjJRdGFuQmxaeUIyTVM0d0lDaDFjMmx1WnlCSlNrY2dTbEJGUnlCMk9EQXBMQ0J4ZFdGc2FYUjVJRDBnT1RBSy85c0FRd0FEQWdJREFnSURBd01EQkFNREJBVUlCUVVFQkFVS0J3Y0dDQXdLREF3TENnc0xEUTRTRUEwT0VRNExDeEFXRUJFVEZCVVZGUXdQRnhnV0ZCZ1NGQlVVLzlzQVF3RURCQVFGQkFVSkJRVUpGQTBMRFJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVUvOEFBRVFnQUNBQWNBd0VSQUFJUkFRTVJBZi9FQUI4QUFBRUZBUUVCQVFFQkFBQUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVRQUFJQkF3TUNCQU1GQlFRRUFBQUJmUUVDQXdBRUVRVVNJVEZCQmhOUllRY2ljUlF5Z1pHaENDTkNzY0VWVXRId0pETmljb0lKQ2hZWEdCa2FKU1luS0NrcU5EVTJOemc1T2tORVJVWkhTRWxLVTFSVlZsZFlXVnBqWkdWbVoyaHBhbk4wZFhaM2VIbDZnNFNGaG9lSWlZcVNrNVNWbHBlWW1acWlvNlNscHFlb3FhcXlzN1MxdHJlNHVickN3OFRGeHNmSXljclMwOVRWMXRmWTJkcmg0dVBrNWVibjZPbnE4Zkx6OVBYMjkvajUrdi9FQUI4QkFBTUJBUUVCQVFFQkFRRUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVSQUFJQkFnUUVBd1FIQlFRRUFBRUNkd0FCQWdNUkJBVWhNUVlTUVZFSFlYRVRJaktCQ0JSQ2thR3h3UWtqTTFMd0ZXSnkwUW9XSkRUaEpmRVhHQmthSmljb0tTbzFOamM0T1RwRFJFVkdSMGhKU2xOVVZWWlhXRmxhWTJSbFptZG9hV3B6ZEhWMmQzaDVlb0tEaElXR2g0aUppcEtUbEpXV2w1aVptcUtqcEtXbXA2aXBxckt6dExXMnQ3aTV1c0xEeE1YR3g4akp5dExUMU5YVzE5aloydUxqNU9YbTUranA2dkx6OVBYMjkvajUrdi9hQUF3REFRQUNFUU1SQUQ4QS9SRzYxelR0WHVuVjB2ZFB2SE1zSVNXQXEwM2w0RW0zY01NbzNnRmh4eVJuclFCaVhUVzhseFBiM3JhdGYydHdDcHQ1YkJXVXRqY1JrSm5kdUw0QlAzdDRIekJxQUlkUTBPODEreWxPazY1ZmFmSnUrWkpiR0hNY2NtRmtkVmVQTEFvT09jSEhCNzBBWk9sNnpxSzJNVnpyZXFhbkhmWFdaRHRrRWU0S2ZMTGJkdUFDMGJFYlFBUVFRT2FBUC8vWiI+Cgk8L2ltYWdlPgo8L3N2Zz4= 32w"
                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                            sizes="1px"
                            src="https://sqp.fr/storage/products/brands/2/medias/2/synology.png"
                            width="295" height="79">

                    </a>
                    <a class="swiper-slide" href="https://sqp.fr/distributeur-solutions-qnap">
                        <img class="object-contain w-full h-20 p-4" alt="QNAP"
                            srcset="https://sqp.fr/storage/products/brands/3/medias/3/responsive-images/qnap___media_library_original_296_53.png 296w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMjk2IDU0Ij4KCTxpbWFnZSB3aWR0aD0iMjk2IiBoZWlnaHQ9IjU0IiB4bGluazpocmVmPSJkYXRhOmltYWdlL2pwZWc7YmFzZTY0LC85ai80QUFRU2taSlJnQUJBUUVBWUFCZ0FBRC8vZ0E3UTFKRlFWUlBVam9nWjJRdGFuQmxaeUIyTVM0d0lDaDFjMmx1WnlCSlNrY2dTbEJGUnlCMk9EQXBMQ0J4ZFdGc2FYUjVJRDBnT1RBSy85c0FRd0FEQWdJREFnSURBd01EQkFNREJBVUlCUVVFQkFVS0J3Y0dDQXdLREF3TENnc0xEUTRTRUEwT0VRNExDeEFXRUJFVEZCVVZGUXdQRnhnV0ZCZ1NGQlVVLzlzQVF3RURCQVFGQkFVSkJRVUpGQTBMRFJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVUvOEFBRVFnQUJRQWJBd0VSQUFJUkFRTVJBZi9FQUI4QUFBRUZBUUVCQVFFQkFBQUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVRQUFJQkF3TUNCQU1GQlFRRUFBQUJmUUVDQXdBRUVRVVNJVEZCQmhOUllRY2ljUlF5Z1pHaENDTkNzY0VWVXRId0pETmljb0lKQ2hZWEdCa2FKU1luS0NrcU5EVTJOemc1T2tORVJVWkhTRWxLVTFSVlZsZFlXVnBqWkdWbVoyaHBhbk4wZFhaM2VIbDZnNFNGaG9lSWlZcVNrNVNWbHBlWW1acWlvNlNscHFlb3FhcXlzN1MxdHJlNHVickN3OFRGeHNmSXljclMwOVRWMXRmWTJkcmg0dVBrNWVibjZPbnE4Zkx6OVBYMjkvajUrdi9FQUI4QkFBTUJBUUVCQVFFQkFRRUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVSQUFJQkFnUUVBd1FIQlFRRUFBRUNkd0FCQWdNUkJBVWhNUVlTUVZFSFlYRVRJaktCQ0JSQ2thR3h3UWtqTTFMd0ZXSnkwUW9XSkRUaEpmRVhHQmthSmljb0tTbzFOamM0T1RwRFJFVkdSMGhKU2xOVVZWWlhXRmxhWTJSbFptZG9hV3B6ZEhWMmQzaDVlb0tEaElXR2g0aUppcEtUbEpXV2w1aVptcUtqcEtXbXA2aXBxckt6dExXMnQ3aTV1c0xEeE1YR3g4akp5dExUMU5YVzE5aloydUxqNU9YbTUranA2dkx6OVBYMjkvajUrdi9hQUF3REFRQUNFUU1SQUQ4QS9TaFhlMGE3bUIzRkVac0hQUDYveW9BNC9Udkc5M2IrRGRiMW93eG01dGJXSzVSUmtMKzh0MG4yOStoa3hudmpQR2NVQWFROFM2elpMcmVuM04xQmMzdGhkUld5M2FRR05XOHlPTnczbDdqakhtWXh1NXgyendBU1A0TThmczdGZkhlbktwUEEvc0Jqai95YW9BLy8yUT09Ij4KCTwvaW1hZ2U+Cjwvc3ZnPg== 32w"
                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                            sizes="1px" src="https://sqp.fr/storage/products/brands/3/medias/3/qnap.png"
                            width="296" height="53">

                    </a>
                    <a class="swiper-slide" href="https://sqp.fr/distributeur-solutions-promise">
                        <img class="object-contain w-full h-20 p-4" alt="Promise"
                            srcset="https://sqp.fr/storage/products/brands/6/medias/4/responsive-images/promise___media_library_original_292_67.png 292w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMjkyIDY3Ij4KCTxpbWFnZSB3aWR0aD0iMjkyIiBoZWlnaHQ9IjY3IiB4bGluazpocmVmPSJkYXRhOmltYWdlL2pwZWc7YmFzZTY0LC85ai80QUFRU2taSlJnQUJBUUVBWUFCZ0FBRC8vZ0E3UTFKRlFWUlBVam9nWjJRdGFuQmxaeUIyTVM0d0lDaDFjMmx1WnlCSlNrY2dTbEJGUnlCMk9EQXBMQ0J4ZFdGc2FYUjVJRDBnT1RBSy85c0FRd0FEQWdJREFnSURBd01EQkFNREJBVUlCUVVFQkFVS0J3Y0dDQXdLREF3TENnc0xEUTRTRUEwT0VRNExDeEFXRUJFVEZCVVZGUXdQRnhnV0ZCZ1NGQlVVLzlzQVF3RURCQVFGQkFVSkJRVUpGQTBMRFJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVUvOEFBRVFnQUJ3QWdBd0VSQUFJUkFRTVJBZi9FQUI4QUFBRUZBUUVCQVFFQkFBQUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVRQUFJQkF3TUNCQU1GQlFRRUFBQUJmUUVDQXdBRUVRVVNJVEZCQmhOUllRY2ljUlF5Z1pHaENDTkNzY0VWVXRId0pETmljb0lKQ2hZWEdCa2FKU1luS0NrcU5EVTJOemc1T2tORVJVWkhTRWxLVTFSVlZsZFlXVnBqWkdWbVoyaHBhbk4wZFhaM2VIbDZnNFNGaG9lSWlZcVNrNVNWbHBlWW1acWlvNlNscHFlb3FhcXlzN1MxdHJlNHVickN3OFRGeHNmSXljclMwOVRWMXRmWTJkcmg0dVBrNWVibjZPbnE4Zkx6OVBYMjkvajUrdi9FQUI4QkFBTUJBUUVCQVFFQkFRRUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVSQUFJQkFnUUVBd1FIQlFRRUFBRUNkd0FCQWdNUkJBVWhNUVlTUVZFSFlYRVRJaktCQ0JSQ2thR3h3UWtqTTFMd0ZXSnkwUW9XSkRUaEpmRVhHQmthSmljb0tTbzFOamM0T1RwRFJFVkdSMGhKU2xOVVZWWlhXRmxhWTJSbFptZG9hV3B6ZEhWMmQzaDVlb0tEaElXR2g0aUppcEtUbEpXV2w1aVptcUtqcEtXbXA2aXBxckt6dExXMnQ3aTV1c0xEeE1YR3g4akp5dExUMU5YVzE5aloydUxqNU9YbTUranA2dkx6OVBYMjkvajUrdi9hQUF3REFRQUNFUU1SQUQ4QStvZEQ4TGFyOFpOWjhSK0lUcGxyZmFoZWZZYmMzMXhlYnBOTFNOZHhTMFl4b3lFTVdMQlBMVm5KNWNFc1FEMGFidzk4WlI0bWp1by9GQ25TWHZXbGV4TUZudGl0L01CU01ONU85enM0YmxTQ01CbSs5UUJONFZYeGpxbWk2UmYydmppV1d5bEtYRW4ybTFoZDVJaVlXS2h2SkJCK1NZYzlGbUl5U3Fzb0JyYVg0VjhiWGtDeVRmRUc5U2N3UXhzWXJLMEtsMWpBZHNHREFMUHViais4QndBQUFELy8yUT09Ij4KCTwvaW1hZ2U+Cjwvc3ZnPg== 32w"
                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                            sizes="1px"
                            src="https://sqp.fr/storage/products/brands/6/medias/4/promise.png"
                            width="292" height="67">

                    </a>
                    <a class="swiper-slide" href="https://sqp.fr/distributeur-solutions-sqp">
                        <img class="object-contain w-full h-20 p-4" alt="SQP"
                            srcset="https://sqp.fr/storage/products/brands/7/medias/5/responsive-images/sqp___media_library_original_211_63.png 211w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMjExIDYzIj4KCTxpbWFnZSB3aWR0aD0iMjExIiBoZWlnaHQ9IjYzIiB4bGluazpocmVmPSJkYXRhOmltYWdlL2pwZWc7YmFzZTY0LC85ai80QUFRU2taSlJnQUJBUUVBWUFCZ0FBRC8vZ0E3UTFKRlFWUlBVam9nWjJRdGFuQmxaeUIyTVM0d0lDaDFjMmx1WnlCSlNrY2dTbEJGUnlCMk9EQXBMQ0J4ZFdGc2FYUjVJRDBnT1RBSy85c0FRd0FEQWdJREFnSURBd01EQkFNREJBVUlCUVVFQkFVS0J3Y0dDQXdLREF3TENnc0xEUTRTRUEwT0VRNExDeEFXRUJFVEZCVVZGUXdQRnhnV0ZCZ1NGQlVVLzlzQVF3RURCQVFGQkFVSkJRVUpGQTBMRFJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVUvOEFBRVFnQUNRQWRBd0VSQUFJUkFRTVJBZi9FQUI4QUFBRUZBUUVCQVFFQkFBQUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVRQUFJQkF3TUNCQU1GQlFRRUFBQUJmUUVDQXdBRUVRVVNJVEZCQmhOUllRY2ljUlF5Z1pHaENDTkNzY0VWVXRId0pETmljb0lKQ2hZWEdCa2FKU1luS0NrcU5EVTJOemc1T2tORVJVWkhTRWxLVTFSVlZsZFlXVnBqWkdWbVoyaHBhbk4wZFhaM2VIbDZnNFNGaG9lSWlZcVNrNVNWbHBlWW1acWlvNlNscHFlb3FhcXlzN1MxdHJlNHVickN3OFRGeHNmSXljclMwOVRWMXRmWTJkcmg0dVBrNWVibjZPbnE4Zkx6OVBYMjkvajUrdi9FQUI4QkFBTUJBUUVCQVFFQkFRRUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVSQUFJQkFnUUVBd1FIQlFRRUFBRUNkd0FCQWdNUkJBVWhNUVlTUVZFSFlYRVRJaktCQ0JSQ2thR3h3UWtqTTFMd0ZXSnkwUW9XSkRUaEpmRVhHQmthSmljb0tTbzFOamM0T1RwRFJFVkdSMGhKU2xOVVZWWlhXRmxhWTJSbFptZG9hV3B6ZEhWMmQzaDVlb0tEaElXR2g0aUppcEtUbEpXV2w1aVptcUtqcEtXbXA2aXBxckt6dExXMnQ3aTV1c0xEeE1YR3g4akp5dExUMU5YVzE5aloydUxqNU9YbTUranA2dkx6OVBYMjkvajUrdi9hQUF3REFRQUNFUU1SQUQ4QStwdFYrUDhBb2ZqdlFyclRXOFVhSGNBaC9LdVpmdGx0SEtvT0VaMHpDNjdnYzdWa09NRUU5TWdGdUx4Sm91amVGalphSnJNTnZNaVBPWURkc3p3eFBiSDdGODdrTThhSzFzUVQ5NUVIQnpnZ0hKYUo4V2ZEdWkrTmJMV3RRMXEyV3lrMUxXRVM1TWcyT3kydWs3dHA3ODBBZlM2WFBqQzVWWDAzVHRMK3lzQXlTWHQ2NkZ3ZVFRRWpmakhyaWdDMzRiLzVEOTUvMThYdi9vY0ZBSEIvSDMva1BlQWYreHMwYi8wTzZvQTlwb0F6UERIL0FDTFdrLzhBWHBEL0FPZ0NnRC8vMlE9PSI+Cgk8L2ltYWdlPgo8L3N2Zz4= 32w"
                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                            sizes="1px" src="https://sqp.fr/storage/products/brands/7/medias/5/sqp.png"
                            width="211" height="63">

                    </a>
                    <a class="swiper-slide" href="https://sqp.fr/distributeur-solutions-wd">
                        <img class="object-contain w-full h-20 p-4" alt="WD"
                            srcset="https://sqp.fr/storage/products/brands/8/medias/6/responsive-images/westerdigital___media_library_original_288_39.png 288w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMjg4IDM5Ij4KCTxpbWFnZSB3aWR0aD0iMjg4IiBoZWlnaHQ9IjM5IiB4bGluazpocmVmPSJkYXRhOmltYWdlL2pwZWc7YmFzZTY0LC85ai80QUFRU2taSlJnQUJBUUVBWUFCZ0FBRC8vZ0E3UTFKRlFWUlBVam9nWjJRdGFuQmxaeUIyTVM0d0lDaDFjMmx1WnlCSlNrY2dTbEJGUnlCMk9EQXBMQ0J4ZFdGc2FYUjVJRDBnT1RBSy85c0FRd0FEQWdJREFnSURBd01EQkFNREJBVUlCUVVFQkFVS0J3Y0dDQXdLREF3TENnc0xEUTRTRUEwT0VRNExDeEFXRUJFVEZCVVZGUXdQRnhnV0ZCZ1NGQlVVLzlzQVF3RURCQVFGQkFVSkJRVUpGQTBMRFJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVUvOEFBRVFnQUJBQWdBd0VSQUFJUkFRTVJBZi9FQUI4QUFBRUZBUUVCQVFFQkFBQUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVRQUFJQkF3TUNCQU1GQlFRRUFBQUJmUUVDQXdBRUVRVVNJVEZCQmhOUllRY2ljUlF5Z1pHaENDTkNzY0VWVXRId0pETmljb0lKQ2hZWEdCa2FKU1luS0NrcU5EVTJOemc1T2tORVJVWkhTRWxLVTFSVlZsZFlXVnBqWkdWbVoyaHBhbk4wZFhaM2VIbDZnNFNGaG9lSWlZcVNrNVNWbHBlWW1acWlvNlNscHFlb3FhcXlzN1MxdHJlNHVickN3OFRGeHNmSXljclMwOVRWMXRmWTJkcmg0dVBrNWVibjZPbnE4Zkx6OVBYMjkvajUrdi9FQUI4QkFBTUJBUUVCQVFFQkFRRUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVSQUFJQkFnUUVBd1FIQlFRRUFBRUNkd0FCQWdNUkJBVWhNUVlTUVZFSFlYRVRJaktCQ0JSQ2thR3h3UWtqTTFMd0ZXSnkwUW9XSkRUaEpmRVhHQmthSmljb0tTbzFOamM0T1RwRFJFVkdSMGhKU2xOVVZWWlhXRmxhWTJSbFptZG9hV3B6ZEhWMmQzaDVlb0tEaElXR2g0aUppcEtUbEpXV2w1aVptcUtqcEtXbXA2aXBxckt6dExXMnQ3aTV1c0xEeE1YR3g4akp5dExUMU5YVzE5aloydUxqNU9YbTUranA2dkx6OVBYMjkvajUrdi9hQUF3REFRQUNFUU1SQUQ4QS9WQ2dDT2RBOFRLYzRJSTRvQXo5SDBXejBjeS9aWVJHWk5tNDl6dFJVWEo5bFZSK0ZBR3BRQi8vMlE9PSI+Cgk8L2ltYWdlPgo8L3N2Zz4= 32w"
                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                            sizes="1px"
                            src="https://sqp.fr/storage/products/brands/8/medias/6/westerdigital.png"
                            width="288" height="39">

                    </a>
                    <a class="swiper-slide" href="https://sqp.fr/distributeur-solutions-atto">
                        <img class="object-contain w-full h-20 p-4" alt="ATTO"
                            srcset="https://sqp.fr/storage/products/brands/10/medias/7/responsive-images/atto___media_library_original_262_107.png 262w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMjYyIDEwNyI+Cgk8aW1hZ2Ugd2lkdGg9IjI2MiIgaGVpZ2h0PSIxMDciIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvanBlZztiYXNlNjQsLzlqLzRBQVFTa1pKUmdBQkFRRUFZQUJnQUFELy9nQTdRMUpGUVZSUFVqb2daMlF0YW5CbFp5QjJNUzR3SUNoMWMybHVaeUJKU2tjZ1NsQkZSeUIyT0RBcExDQnhkV0ZzYVhSNUlEMGdPVEFLLzlzQVF3QURBZ0lEQWdJREF3TURCQU1EQkFVSUJRVUVCQVVLQndjR0NBd0tEQXdMQ2dzTERRNFNFQTBPRVE0TEN4QVdFQkVURkJVVkZRd1BGeGdXRkJnU0ZCVVUvOXNBUXdFREJBUUZCQVVKQlFVSkZBMExEUlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVS84QUFFUWdBRFFBZ0F3RVJBQUlSQVFNUkFmL0VBQjhBQUFFRkFRRUJBUUVCQUFBQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVFBQUlCQXdNQ0JBTUZCUVFFQUFBQmZRRUNBd0FFRVFVU0lURkJCaE5SWVFjaWNSUXlnWkdoQ0NOQ3NjRVZVdEh3SkROaWNvSUpDaFlYR0JrYUpTWW5LQ2txTkRVMk56ZzVPa05FUlVaSFNFbEtVMVJWVmxkWVdWcGpaR1ZtWjJocGFuTjBkWFozZUhsNmc0U0Zob2VJaVlxU2s1U1ZscGVZbVpxaW82U2xwcWVvcWFxeXM3UzF0cmU0dWJyQ3c4VEZ4c2ZJeWNyUzA5VFYxdGZZMmRyaDR1UGs1ZWJuNk9ucThmTHo5UFgyOS9qNSt2L0VBQjhCQUFNQkFRRUJBUUVCQVFFQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVJBQUlCQWdRRUF3UUhCUVFFQUFFQ2R3QUJBZ01SQkFVaE1RWVNRVkVIWVhFVElqS0JDQlJDa2FHeHdRa2pNMUx3RldKeTBRb1dKRFRoSmZFWEdCa2FKaWNvS1NvMU5qYzRPVHBEUkVWR1IwaEpTbE5VVlZaWFdGbGFZMlJsWm1kb2FXcHpkSFYyZDNoNWVvS0RoSVdHaDRpSmlwS1RsSldXbDVpWm1xS2pwS1dtcDZpcHFyS3p0TFcydDdpNXVzTER4TVhHeDhqSnl0TFQxTlhXMTlqWjJ1TGo1T1htNStqcDZ2THo5UFgyOS9qNSt2L2FBQXdEQVFBQ0VRTVJBRDhBL1ZDZ0FvQUtBQ2dBb0FLQUNnQW9BLy9aIj4KCTwvaW1hZ2U+Cjwvc3ZnPg== 32w"
                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                            sizes="1px" src="https://sqp.fr/storage/products/brands/10/medias/7/atto.png"
                            width="262" height="107">

                    </a>
                    <a class="swiper-slide" href="https://sqp.fr/distributeur-solutions-samsung">
                        <img class="object-contain w-full h-20 p-4" alt="Samsung"
                            srcset="https://sqp.fr/storage/products/brands/11/medias/30/responsive-images/samsung___media_library_original_290_96.png 290w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMjkwIDk2Ij4KCTxpbWFnZSB3aWR0aD0iMjkwIiBoZWlnaHQ9Ijk2IiB4bGluazpocmVmPSJkYXRhOmltYWdlL2pwZWc7YmFzZTY0LC85ai80QUFRU2taSlJnQUJBUUVBWUFCZ0FBRC8vZ0E3UTFKRlFWUlBVam9nWjJRdGFuQmxaeUIyTVM0d0lDaDFjMmx1WnlCSlNrY2dTbEJGUnlCMk9EQXBMQ0J4ZFdGc2FYUjVJRDBnT1RBSy85c0FRd0FEQWdJREFnSURBd01EQkFNREJBVUlCUVVFQkFVS0J3Y0dDQXdLREF3TENnc0xEUTRTRUEwT0VRNExDeEFXRUJFVEZCVVZGUXdQRnhnV0ZCZ1NGQlVVLzlzQVF3RURCQVFGQkFVSkJRVUpGQTBMRFJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVUvOEFBRVFnQUNnQWRBd0VSQUFJUkFRTVJBZi9FQUI4QUFBRUZBUUVCQVFFQkFBQUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVRQUFJQkF3TUNCQU1GQlFRRUFBQUJmUUVDQXdBRUVRVVNJVEZCQmhOUllRY2ljUlF5Z1pHaENDTkNzY0VWVXRId0pETmljb0lKQ2hZWEdCa2FKU1luS0NrcU5EVTJOemc1T2tORVJVWkhTRWxLVTFSVlZsZFlXVnBqWkdWbVoyaHBhbk4wZFhaM2VIbDZnNFNGaG9lSWlZcVNrNVNWbHBlWW1acWlvNlNscHFlb3FhcXlzN1MxdHJlNHVickN3OFRGeHNmSXljclMwOVRWMXRmWTJkcmg0dVBrNWVibjZPbnE4Zkx6OVBYMjkvajUrdi9FQUI4QkFBTUJBUUVCQVFFQkFRRUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVSQUFJQkFnUUVBd1FIQlFRRUFBRUNkd0FCQWdNUkJBVWhNUVlTUVZFSFlYRVRJaktCQ0JSQ2thR3h3UWtqTTFMd0ZXSnkwUW9XSkRUaEpmRVhHQmthSmljb0tTbzFOamM0T1RwRFJFVkdSMGhKU2xOVVZWWlhXRmxhWTJSbFptZG9hV3B6ZEhWMmQzaDVlb0tEaElXR2g0aUppcEtUbEpXV2w1aVptcUtqcEtXbXA2aXBxckt6dExXMnQ3aTV1c0xEeE1YR3g4akp5dExUMU5YVzE5aloydUxqNU9YbTUranA2dkx6OVBYMjkvajUrdi9hQUF3REFRQUNFUU1SQUQ4QS9RdXp0dkhHdkkyN1dwTkV0OGdvL3dCa2dhNWJCT2R3S3NpZzhjRGNSajczUEFCcitGZmg5QjRZbFc0azFQVk5WdUZVcUpkVHY1YmtwbkdkdTlqdHpnWnhqb0tBTlBWdkdPa2FLam04djRJTm5VTTRCb0E4NTFqKzFQRk9yUzMrbTZacU9tUk1nVDdTODk1Wm01QUxZK1dHTmlRT2NGd09IeXVRU2FBUFh3T2FBR3ovQU9xYjZVQWMvd0NIdkNlaG1KTlRPamFmL2FVOFpTVzgreXA1MGk3czRaOFpJNEhVOWhRQnB0NFcwVmlTZElzQ1QzTnNuK0ZBSC8vWiI+Cgk8L2ltYWdlPgo8L3N2Zz4= 32w"
                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                            sizes="1px"
                            src="https://sqp.fr/storage/products/brands/11/medias/30/samsung.png"
                            width="290" height="96">

                    </a>
                    <a class="swiper-slide" href="https://sqp.fr/distributeur-solutions-d-link">
                        <img class="object-contain w-full h-20 p-4" alt="D-LINK"
                            srcset="https://sqp.fr/storage/products/brands/19/medias/10/responsive-images/dlink___media_library_original_286_57.png 286w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMjg2IDU4Ij4KCTxpbWFnZSB3aWR0aD0iMjg2IiBoZWlnaHQ9IjU4IiB4bGluazpocmVmPSJkYXRhOmltYWdlL2pwZWc7YmFzZTY0LC85ai80QUFRU2taSlJnQUJBUUVBWUFCZ0FBRC8vZ0E3UTFKRlFWUlBVam9nWjJRdGFuQmxaeUIyTVM0d0lDaDFjMmx1WnlCSlNrY2dTbEJGUnlCMk9EQXBMQ0J4ZFdGc2FYUjVJRDBnT1RBSy85c0FRd0FEQWdJREFnSURBd01EQkFNREJBVUlCUVVFQkFVS0J3Y0dDQXdLREF3TENnc0xEUTRTRUEwT0VRNExDeEFXRUJFVEZCVVZGUXdQRnhnV0ZCZ1NGQlVVLzlzQVF3RURCQVFGQkFVSkJRVUpGQTBMRFJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVUvOEFBRVFnQUJnQWdBd0VSQUFJUkFRTVJBZi9FQUI4QUFBRUZBUUVCQVFFQkFBQUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVRQUFJQkF3TUNCQU1GQlFRRUFBQUJmUUVDQXdBRUVRVVNJVEZCQmhOUllRY2ljUlF5Z1pHaENDTkNzY0VWVXRId0pETmljb0lKQ2hZWEdCa2FKU1luS0NrcU5EVTJOemc1T2tORVJVWkhTRWxLVTFSVlZsZFlXVnBqWkdWbVoyaHBhbk4wZFhaM2VIbDZnNFNGaG9lSWlZcVNrNVNWbHBlWW1acWlvNlNscHFlb3FhcXlzN1MxdHJlNHVickN3OFRGeHNmSXljclMwOVRWMXRmWTJkcmg0dVBrNWVibjZPbnE4Zkx6OVBYMjkvajUrdi9FQUI4QkFBTUJBUUVCQVFFQkFRRUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVSQUFJQkFnUUVBd1FIQlFRRUFBRUNkd0FCQWdNUkJBVWhNUVlTUVZFSFlYRVRJaktCQ0JSQ2thR3h3UWtqTTFMd0ZXSnkwUW9XSkRUaEpmRVhHQmthSmljb0tTbzFOamM0T1RwRFJFVkdSMGhKU2xOVVZWWlhXRmxhWTJSbFptZG9hV3B6ZEhWMmQzaDVlb0tEaElXR2g0aUppcEtUbEpXV2w1aVptcUtqcEtXbXA2aXBxckt6dExXMnQ3aTV1c0xEeE1YR3g4akp5dExUMU5YVzE5aloydUxqNU9YbTUranA2dkx6OVBYMjkvajUrdi9hQUF3REFRQUNFUU1SQUQ4QS9TWDRpU3RIcE5xa1IyWE0xN2J3UVMvODhwSGxWVWYzd1NEajJvQTRMNGNXOXA0NHRkZnRiemJmTnB1cVgrbXlYTWxzSURMS0hlRzRrQ0IyeHVQbWpPN0pEWklCSlVBSGIzL3c0czc2V0dSTlExV3hNWXdGc2RSbXQxN1o0UmdPY0RQcmlnQ3Jydnc2MDF4RFBGZGFscDNsaEVrL3MzVUpyVnBVWE8xWE1iS1dBeTNYMU9NWm9BLy8yUT09Ij4KCTwvaW1hZ2U+Cjwvc3ZnPg== 32w"
                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                            sizes="1px"
                            src="https://sqp.fr/storage/products/brands/19/medias/10/dlink.png"
                            width="286" height="57">

                    </a>
                    <a class="swiper-slide" href="https://sqp.fr/distributeur-solutions-owc">
                        <img class="object-contain w-full h-20 p-4" alt="OWC"
                            srcset="https://sqp.fr/storage/products/brands/20/medias/28/responsive-images/owc___media_library_original_290_113.png 290w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMjkwIDExMyI+Cgk8aW1hZ2Ugd2lkdGg9IjI5MCIgaGVpZ2h0PSIxMTMiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvanBlZztiYXNlNjQsLzlqLzRBQVFTa1pKUmdBQkFRRUFZQUJnQUFELy9nQTdRMUpGUVZSUFVqb2daMlF0YW5CbFp5QjJNUzR3SUNoMWMybHVaeUJKU2tjZ1NsQkZSeUIyT0RBcExDQnhkV0ZzYVhSNUlEMGdPVEFLLzlzQVF3QURBZ0lEQWdJREF3TURCQU1EQkFVSUJRVUVCQVVLQndjR0NBd0tEQXdMQ2dzTERRNFNFQTBPRVE0TEN4QVdFQkVURkJVVkZRd1BGeGdXRkJnU0ZCVVUvOXNBUXdFREJBUUZCQVVKQlFVSkZBMExEUlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVS84QUFFUWdBREFBZ0F3RVJBQUlSQVFNUkFmL0VBQjhBQUFFRkFRRUJBUUVCQUFBQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVFBQUlCQXdNQ0JBTUZCUVFFQUFBQmZRRUNBd0FFRVFVU0lURkJCaE5SWVFjaWNSUXlnWkdoQ0NOQ3NjRVZVdEh3SkROaWNvSUpDaFlYR0JrYUpTWW5LQ2txTkRVMk56ZzVPa05FUlVaSFNFbEtVMVJWVmxkWVdWcGpaR1ZtWjJocGFuTjBkWFozZUhsNmc0U0Zob2VJaVlxU2s1U1ZscGVZbVpxaW82U2xwcWVvcWFxeXM3UzF0cmU0dWJyQ3c4VEZ4c2ZJeWNyUzA5VFYxdGZZMmRyaDR1UGs1ZWJuNk9ucThmTHo5UFgyOS9qNSt2L0VBQjhCQUFNQkFRRUJBUUVCQVFFQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVJBQUlCQWdRRUF3UUhCUVFFQUFFQ2R3QUJBZ01SQkFVaE1RWVNRVkVIWVhFVElqS0JDQlJDa2FHeHdRa2pNMUx3RldKeTBRb1dKRFRoSmZFWEdCa2FKaWNvS1NvMU5qYzRPVHBEUkVWR1IwaEpTbE5VVlZaWFdGbGFZMlJsWm1kb2FXcHpkSFYyZDNoNWVvS0RoSVdHaDRpSmlwS1RsSldXbDVpWm1xS2pwS1dtcDZpcHFyS3p0TFcydDdpNXVzTER4TVhHeDhqSnl0TFQxTlhXMTlqWjJ1TGo1T1htNStqcDZ2THo5UFgyOS9qNSt2L2FBQXdEQVFBQ0VRTVJBRDhBL1VUVDlQVFRrZFZaM0xzWFozYmNTVDcwQVd3UWFBRElGQUJrZXRBR1o0bHVKTFhTWjVJWE1jZ0dBdzZpZ0NoNEsxS2ZVclhVUFBiZVlOUXVyWkQvQUxFY3pvdWZmQ2lnQ3Y0OTFHNjA3U2IyYTFuYUNTM3NyaTZVcUFjdEdoWUE1SFFrYy96RkFGdTRubHViSFMxODE0amNTSUpHajRPTVpJL0dnRC8vMlE9PSI+Cgk8L2ltYWdlPgo8L3N2Zz4= 32w"
                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                            sizes="1px" src="https://sqp.fr/storage/products/brands/20/medias/28/owc.png"
                            width="290" height="113">

                    </a>
                    <a class="swiper-slide" href="https://sqp.fr/distributeur-solutions-highpoint">
                        <img class="object-contain w-full h-20 p-4" alt="Highpoint"
                            srcset="https://sqp.fr/storage/products/brands/22/medias/15/responsive-images/highpoint___media_library_original_295_51.png 295w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMjk1IDUxIj4KCTxpbWFnZSB3aWR0aD0iMjk1IiBoZWlnaHQ9IjUxIiB4bGluazpocmVmPSJkYXRhOmltYWdlL2pwZWc7YmFzZTY0LC85ai80QUFRU2taSlJnQUJBUUVBWUFCZ0FBRC8vZ0E3UTFKRlFWUlBVam9nWjJRdGFuQmxaeUIyTVM0d0lDaDFjMmx1WnlCSlNrY2dTbEJGUnlCMk9EQXBMQ0J4ZFdGc2FYUjVJRDBnT1RBSy85c0FRd0FEQWdJREFnSURBd01EQkFNREJBVUlCUVVFQkFVS0J3Y0dDQXdLREF3TENnc0xEUTRTRUEwT0VRNExDeEFXRUJFVEZCVVZGUXdQRnhnV0ZCZ1NGQlVVLzlzQVF3RURCQVFGQkFVSkJRVUpGQTBMRFJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVUvOEFBRVFnQUJRQWJBd0VSQUFJUkFRTVJBZi9FQUI4QUFBRUZBUUVCQVFFQkFBQUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVRQUFJQkF3TUNCQU1GQlFRRUFBQUJmUUVDQXdBRUVRVVNJVEZCQmhOUllRY2ljUlF5Z1pHaENDTkNzY0VWVXRId0pETmljb0lKQ2hZWEdCa2FKU1luS0NrcU5EVTJOemc1T2tORVJVWkhTRWxLVTFSVlZsZFlXVnBqWkdWbVoyaHBhbk4wZFhaM2VIbDZnNFNGaG9lSWlZcVNrNVNWbHBlWW1acWlvNlNscHFlb3FhcXlzN1MxdHJlNHVickN3OFRGeHNmSXljclMwOVRWMXRmWTJkcmg0dVBrNWVibjZPbnE4Zkx6OVBYMjkvajUrdi9FQUI4QkFBTUJBUUVCQVFFQkFRRUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVSQUFJQkFnUUVBd1FIQlFRRUFBRUNkd0FCQWdNUkJBVWhNUVlTUVZFSFlYRVRJaktCQ0JSQ2thR3h3UWtqTTFMd0ZXSnkwUW9XSkRUaEpmRVhHQmthSmljb0tTbzFOamM0T1RwRFJFVkdSMGhKU2xOVVZWWlhXRmxhWTJSbFptZG9hV3B6ZEhWMmQzaDVlb0tEaElXR2g0aUppcEtUbEpXV2w1aVptcUtqcEtXbXA2aXBxckt6dExXMnQ3aTV1c0xEeE1YR3g4akp5dExUMU5YVzE5aloydUxqNU9YbTUranA2dkx6OVBYMjkvajUrdi9hQUF3REFRQUNFUU1SQUQ4QSs4L0Uyb2VLZEM4T2F2ZXphNWEzaldOdk5POGYyQW9zcXhMZE15LzZ3bGQza0lBZWNaYmc4WUFLWHc3c05SaTBHMTFkTlNBYThzSUxvUnZHOGhoaE1IbkNCQzBod3E3aW93QUJuTzN0UUJCclh3ejhRK0kxdjlYSGlxM2dTMkJtZ2hiVHBHZUxLSk1Oamk0VUsyZG1XVlJrb0RnY0FBRzFiL0NUeGJCQ2tiK05yTzRaUmd5ejZOSkk3ZTdNMTBTVDdrMEFmLy9aIj4KCTwvaW1hZ2U+Cjwvc3ZnPg== 32w"
                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                            sizes="1px"
                            src="https://sqp.fr/storage/products/brands/22/medias/15/highpoint.png"
                            width="295" height="51">

                    </a>
                    <a class="swiper-slide" href="https://sqp.fr/distributeur-solutions-keyspan">
                        <img class="object-contain w-full h-20 p-4" alt="KEYSPAN"
                            srcset="https://sqp.fr/storage/products/brands/26/medias/20/responsive-images/keyspan___media_library_original_283_50.png 283w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMjgzIDUwIj4KCTxpbWFnZSB3aWR0aD0iMjgzIiBoZWlnaHQ9IjUwIiB4bGluazpocmVmPSJkYXRhOmltYWdlL2pwZWc7YmFzZTY0LC85ai80QUFRU2taSlJnQUJBUUVBWUFCZ0FBRC8vZ0E3UTFKRlFWUlBVam9nWjJRdGFuQmxaeUIyTVM0d0lDaDFjMmx1WnlCSlNrY2dTbEJGUnlCMk9EQXBMQ0J4ZFdGc2FYUjVJRDBnT1RBSy85c0FRd0FEQWdJREFnSURBd01EQkFNREJBVUlCUVVFQkFVS0J3Y0dDQXdLREF3TENnc0xEUTRTRUEwT0VRNExDeEFXRUJFVEZCVVZGUXdQRnhnV0ZCZ1NGQlVVLzlzQVF3RURCQVFGQkFVSkJRVUpGQTBMRFJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVUvOEFBRVFnQUJRQWJBd0VSQUFJUkFRTVJBZi9FQUI4QUFBRUZBUUVCQVFFQkFBQUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVRQUFJQkF3TUNCQU1GQlFRRUFBQUJmUUVDQXdBRUVRVVNJVEZCQmhOUllRY2ljUlF5Z1pHaENDTkNzY0VWVXRId0pETmljb0lKQ2hZWEdCa2FKU1luS0NrcU5EVTJOemc1T2tORVJVWkhTRWxLVTFSVlZsZFlXVnBqWkdWbVoyaHBhbk4wZFhaM2VIbDZnNFNGaG9lSWlZcVNrNVNWbHBlWW1acWlvNlNscHFlb3FhcXlzN1MxdHJlNHVickN3OFRGeHNmSXljclMwOVRWMXRmWTJkcmg0dVBrNWVibjZPbnE4Zkx6OVBYMjkvajUrdi9FQUI4QkFBTUJBUUVCQVFFQkFRRUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVSQUFJQkFnUUVBd1FIQlFRRUFBRUNkd0FCQWdNUkJBVWhNUVlTUVZFSFlYRVRJaktCQ0JSQ2thR3h3UWtqTTFMd0ZXSnkwUW9XSkRUaEpmRVhHQmthSmljb0tTbzFOamM0T1RwRFJFVkdSMGhKU2xOVVZWWlhXRmxhWTJSbFptZG9hV3B6ZEhWMmQzaDVlb0tEaElXR2g0aUppcEtUbEpXV2w1aVptcUtqcEtXbXA2aXBxckt6dExXMnQ3aTV1c0xEeE1YR3g4akp5dExUMU5YVzE5aloydUxqNU9YbTUranA2dkx6OVBYMjkvajUrdi9hQUF3REFRQUNFUU1SQUQ4QS9WQ2dBb0FLQUNnRC85az0iPgoJPC9pbWFnZT4KPC9zdmc+ 32w"
                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                            sizes="1px"
                            src="https://sqp.fr/storage/products/brands/26/medias/20/keyspan.png"
                            width="283" height="50">

                    </a>
                    <a class="swiper-slide" href="https://sqp.fr/distributeur-solutions-intel">
                        <img class="object-contain w-full h-20 p-4" alt="Intel"
                            srcset="https://sqp.fr/storage/products/brands/29/medias/19/responsive-images/intel___media_library_original_286_189.png 286w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMjg2IDE4OSI+Cgk8aW1hZ2Ugd2lkdGg9IjI4NiIgaGVpZ2h0PSIxODkiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvanBlZztiYXNlNjQsLzlqLzRBQVFTa1pKUmdBQkFRRUFZQUJnQUFELy9nQTdRMUpGUVZSUFVqb2daMlF0YW5CbFp5QjJNUzR3SUNoMWMybHVaeUJKU2tjZ1NsQkZSeUIyT0RBcExDQnhkV0ZzYVhSNUlEMGdPVEFLLzlzQVF3QURBZ0lEQWdJREF3TURCQU1EQkFVSUJRVUVCQVVLQndjR0NBd0tEQXdMQ2dzTERRNFNFQTBPRVE0TEN4QVdFQkVURkJVVkZRd1BGeGdXRkJnU0ZCVVUvOXNBUXdFREJBUUZCQVVKQlFVSkZBMExEUlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVS84QUFFUWdBRlFBZ0F3RVJBQUlSQVFNUkFmL0VBQjhBQUFFRkFRRUJBUUVCQUFBQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVFBQUlCQXdNQ0JBTUZCUVFFQUFBQmZRRUNBd0FFRVFVU0lURkJCaE5SWVFjaWNSUXlnWkdoQ0NOQ3NjRVZVdEh3SkROaWNvSUpDaFlYR0JrYUpTWW5LQ2txTkRVMk56ZzVPa05FUlVaSFNFbEtVMVJWVmxkWVdWcGpaR1ZtWjJocGFuTjBkWFozZUhsNmc0U0Zob2VJaVlxU2s1U1ZscGVZbVpxaW82U2xwcWVvcWFxeXM3UzF0cmU0dWJyQ3c4VEZ4c2ZJeWNyUzA5VFYxdGZZMmRyaDR1UGs1ZWJuNk9ucThmTHo5UFgyOS9qNSt2L0VBQjhCQUFNQkFRRUJBUUVCQVFFQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVJBQUlCQWdRRUF3UUhCUVFFQUFFQ2R3QUJBZ01SQkFVaE1RWVNRVkVIWVhFVElqS0JDQlJDa2FHeHdRa2pNMUx3RldKeTBRb1dKRFRoSmZFWEdCa2FKaWNvS1NvMU5qYzRPVHBEUkVWR1IwaEpTbE5VVlZaWFdGbGFZMlJsWm1kb2FXcHpkSFYyZDNoNWVvS0RoSVdHaDRpSmlwS1RsSldXbDVpWm1xS2pwS1dtcDZpcHFyS3p0TFcydDdpNXVzTER4TVhHeDhqSnl0TFQxTlhXMTlqWjJ1TGo1T1htNStqcDZ2THo5UFgyOS9qNSt2L2FBQXdEQVFBQ0VRTVJBRDhBKzh2aU44ZklOT09wNkg0TkZ2cTNpZTJtVzBlNnUxUDltYWZNWFJTYnFRT3JiRkROdU1lN2FVWU5nZ2lnRHpTNDBEdy9aV1Z6NGk4WGZGdlhmakJxbGswY2syaGVITlJ0N2FHUU84ZHNraVdjVW9FWlF6S1dkSkVCeWNna2tNQWVpV0hoVDRSWGk2YkVOVUZ0ZDZncU5iMk54NG51VXVHWnpnSjVadU03dDJWMmpuY0NPb29BNHp3RDR1bm5zTEhYN0dMWFBENnQ1TDNGazkyOS9ZUUIzaVVRUEs4YTVkdDhmWE1nRGtnaFJtZ0MzNFhzYm14Ync5cVZwcE0ycVJ4M3V0UTZ5MWd2bk90ekxOQ1lES2dKWWt3eHA4Mk1BQVpJeU1nQytCSnRZVHhGRFBxSGdqVkpJNTlQbHVGTGFhMFd4bHY3c0FNWENnUDVLMjVDRTdpQ3VBYUFPNWs4Uld1cDNGckMzZ0hXSG51MUVzSmswMG9NQW43N3RoWWo4cDRrS25wNmpJQndXaWFQckh4QTF5NzB6UklocEdpV210RzQxWm9iNjFuRnZjb2tjVHdFd3lTRHprUk1pSmdBck1HY2Zjb0E2RFZmZ3F2Z2Z4dS9pSHd6NGd2ZEN0ZFZuU045T3RRZGtjdTJVNUdXMk5HTXNWaWRHQ0YyMmxWMnFvQjBEYUY0dUNuL0FJdUhxbWYrd2ZZLy9HS0FPVDhVZkNuWGZpRmZ0cFYzNDV2NTNrc3lYKzN3ZVphT3FTQWdOYXd2REV4M1BuY3dKK1VEc01BSHAvd3YrRnVqZkNYUWJuU3RGYTRraXVydDcyZVc2WlM3eU1xcG5DS3FnQlkwVUFLUHU1T1NTU0FmLzlrPSI+Cgk8L2ltYWdlPgo8L3N2Zz4= 32w"
                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                            sizes="1px"
                            src="https://sqp.fr/storage/products/brands/29/medias/19/intel.png"
                            width="286" height="189">

                    </a>
                    <a class="swiper-slide" href="https://sqp.fr/distributeur-solutions-mobility-labs">
                        <img class="object-contain w-full h-20 p-4" alt="Mobility Labs"
                            srcset="https://sqp.fr/storage/products/brands/30/medias/25/responsive-images/mobility___media_library_original_292_101.png 292w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMjkyIDEwMSI+Cgk8aW1hZ2Ugd2lkdGg9IjI5MiIgaGVpZ2h0PSIxMDEiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvanBlZztiYXNlNjQsLzlqLzRBQVFTa1pKUmdBQkFRRUFZQUJnQUFELy9nQTdRMUpGUVZSUFVqb2daMlF0YW5CbFp5QjJNUzR3SUNoMWMybHVaeUJKU2tjZ1NsQkZSeUIyT0RBcExDQnhkV0ZzYVhSNUlEMGdPVEFLLzlzQVF3QURBZ0lEQWdJREF3TURCQU1EQkFVSUJRVUVCQVVLQndjR0NBd0tEQXdMQ2dzTERRNFNFQTBPRVE0TEN4QVdFQkVURkJVVkZRd1BGeGdXRkJnU0ZCVVUvOXNBUXdFREJBUUZCQVVKQlFVSkZBMExEUlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVS84QUFFUWdBQ3dBZ0F3RVJBQUlSQVFNUkFmL0VBQjhBQUFFRkFRRUJBUUVCQUFBQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVFBQUlCQXdNQ0JBTUZCUVFFQUFBQmZRRUNBd0FFRVFVU0lURkJCaE5SWVFjaWNSUXlnWkdoQ0NOQ3NjRVZVdEh3SkROaWNvSUpDaFlYR0JrYUpTWW5LQ2txTkRVMk56ZzVPa05FUlVaSFNFbEtVMVJWVmxkWVdWcGpaR1ZtWjJocGFuTjBkWFozZUhsNmc0U0Zob2VJaVlxU2s1U1ZscGVZbVpxaW82U2xwcWVvcWFxeXM3UzF0cmU0dWJyQ3c4VEZ4c2ZJeWNyUzA5VFYxdGZZMmRyaDR1UGs1ZWJuNk9ucThmTHo5UFgyOS9qNSt2L0VBQjhCQUFNQkFRRUJBUUVCQVFFQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVJBQUlCQWdRRUF3UUhCUVFFQUFFQ2R3QUJBZ01SQkFVaE1RWVNRVkVIWVhFVElqS0JDQlJDa2FHeHdRa2pNMUx3RldKeTBRb1dKRFRoSmZFWEdCa2FKaWNvS1NvMU5qYzRPVHBEUkVWR1IwaEpTbE5VVlZaWFdGbGFZMlJsWm1kb2FXcHpkSFYyZDNoNWVvS0RoSVdHaDRpSmlwS1RsSldXbDVpWm1xS2pwS1dtcDZpcHFyS3p0TFcydDdpNXVzTER4TVhHeDhqSnl0TFQxTlhXMTlqWjJ1TGo1T1htNStqcDZ2THo5UFgyOS9qNSt2L2FBQXdEQVFBQ0VRTVJBRDhBK3hXMUhXZmg3NHcxYTAwQVhkN1BxT3JXYlhrVnRiK2FubVhMWGJzMkR4RUdkUUM1d0FNWkl3S0FPdDBqeHhyR3BKSFBKcTJxd2ViRHRXRjlDWlZYSi8xcEpqNElQeThuYjZnbWdDNXJuaVh4SllXVWt0bHFrdHpJdHZMaFcwM0phUVJueXp3dmR3dWUyQ2ZhZ0RubThmOEFqRDdOQzBNK3FTWEYzZFdsZ2l5NktGamprdVlWbFY5d1RoVURiV1pzaFR3M1BGQUhvbWorR2ROOFFXMDgxL2JtZVJMbVZGYnpYWGpkL3NrVUFYaDhPL0Q2bklzV0IvNitKZjhBNHFnQ1QvaEF0RC81OUgvOENaZi9BSXFnQ0gvaFcvaDBrbit6ems5ZjlJbC8rS29BLzlrPSI+Cgk8L2ltYWdlPgo8L3N2Zz4= 32w"
                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                            sizes="1px"
                            src="https://sqp.fr/storage/products/brands/30/medias/25/mobility.png"
                            width="292" height="101">

                    </a>
                    <a class="swiper-slide" href="https://sqp.fr/distributeur-solutions-logitech">
                        <img class="object-contain w-full h-20 p-4" alt="Logitech"
                            srcset="https://sqp.fr/storage/products/brands/31/medias/23/responsive-images/logitech___media_library_original_270_82.png 270w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMjcwIDgyIj4KCTxpbWFnZSB3aWR0aD0iMjcwIiBoZWlnaHQ9IjgyIiB4bGluazpocmVmPSJkYXRhOmltYWdlL2pwZWc7YmFzZTY0LC85ai80QUFRU2taSlJnQUJBUUVBWUFCZ0FBRC8vZ0E3UTFKRlFWUlBVam9nWjJRdGFuQmxaeUIyTVM0d0lDaDFjMmx1WnlCSlNrY2dTbEJGUnlCMk9EQXBMQ0J4ZFdGc2FYUjVJRDBnT1RBSy85c0FRd0FEQWdJREFnSURBd01EQkFNREJBVUlCUVVFQkFVS0J3Y0dDQXdLREF3TENnc0xEUTRTRUEwT0VRNExDeEFXRUJFVEZCVVZGUXdQRnhnV0ZCZ1NGQlVVLzlzQVF3RURCQVFGQkFVSkJRVUpGQTBMRFJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVUvOEFBRVFnQUNRQWRBd0VSQUFJUkFRTVJBZi9FQUI4QUFBRUZBUUVCQVFFQkFBQUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVRQUFJQkF3TUNCQU1GQlFRRUFBQUJmUUVDQXdBRUVRVVNJVEZCQmhOUllRY2ljUlF5Z1pHaENDTkNzY0VWVXRId0pETmljb0lKQ2hZWEdCa2FKU1luS0NrcU5EVTJOemc1T2tORVJVWkhTRWxLVTFSVlZsZFlXVnBqWkdWbVoyaHBhbk4wZFhaM2VIbDZnNFNGaG9lSWlZcVNrNVNWbHBlWW1acWlvNlNscHFlb3FhcXlzN1MxdHJlNHVickN3OFRGeHNmSXljclMwOVRWMXRmWTJkcmg0dVBrNWVibjZPbnE4Zkx6OVBYMjkvajUrdi9FQUI4QkFBTUJBUUVCQVFFQkFRRUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVSQUFJQkFnUUVBd1FIQlFRRUFBRUNkd0FCQWdNUkJBVWhNUVlTUVZFSFlYRVRJaktCQ0JSQ2thR3h3UWtqTTFMd0ZXSnkwUW9XSkRUaEpmRVhHQmthSmljb0tTbzFOamM0T1RwRFJFVkdSMGhKU2xOVVZWWlhXRmxhWTJSbFptZG9hV3B6ZEhWMmQzaDVlb0tEaElXR2g0aUppcEtUbEpXV2w1aVptcUtqcEtXbXA2aXBxckt6dExXMnQ3aTV1c0xEeE1YR3g4akp5dExUMU5YVzE5aloydUxqNU9YbTUranA2dkx6OVBYMjkvajUrdi9hQUF3REFRQUNFUU1SQUQ4QSs4WHV0TzFuVkk1VXRmRUdrdUZLcXQvcDg4RnJseUR3SkZDYnlTT2Z2Y1k2REZBRjY0MUhUdkRvaTBtM3NkVzF5L0xSUjdiV0NTNGFQY3g4c3l2eXNZems3bklBd1NUZ0dnRGdOVThUWFVBaXY3THd2NDRsdEpia2VlcTZOY2VkRzdJN0p0UmxWL0wzSUEyMzVGQngxWlF3QmZzOWNHaFdWckxENFc4VnhRM2FPNjIwZWpYTW9oMnpTcXdLYkc4c3MyNStpN2c0YmtFR2dEcGZDUDhBeUlqZjloUS8raVJRQnQ2Vi9yZGQvd0N3cFlmK2pJcUFPZDAzL2thUEhYL1huZmYraGlnQStJbi9BQ0svZzMvcnpQOEE2QkZRQi8vWiI+Cgk8L2ltYWdlPgo8L3N2Zz4= 32w"
                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                            sizes="1px"
                            src="https://sqp.fr/storage/products/brands/31/medias/23/logitech.png"
                            width="270" height="82">

                    </a>
                    <a class="swiper-slide" href="https://sqp.fr/distributeur-solutions-finisar">
                        <img class="object-contain w-full h-20 p-4" alt="Finisar"
                            srcset="https://sqp.fr/storage/products/brands/33/medias/12/responsive-images/finisar___media_library_original_290_56.png 290w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMjkwIDU2Ij4KCTxpbWFnZSB3aWR0aD0iMjkwIiBoZWlnaHQ9IjU2IiB4bGluazpocmVmPSJkYXRhOmltYWdlL2pwZWc7YmFzZTY0LC85ai80QUFRU2taSlJnQUJBUUVBWUFCZ0FBRC8vZ0E3UTFKRlFWUlBVam9nWjJRdGFuQmxaeUIyTVM0d0lDaDFjMmx1WnlCSlNrY2dTbEJGUnlCMk9EQXBMQ0J4ZFdGc2FYUjVJRDBnT1RBSy85c0FRd0FEQWdJREFnSURBd01EQkFNREJBVUlCUVVFQkFVS0J3Y0dDQXdLREF3TENnc0xEUTRTRUEwT0VRNExDeEFXRUJFVEZCVVZGUXdQRnhnV0ZCZ1NGQlVVLzlzQVF3RURCQVFGQkFVSkJRVUpGQTBMRFJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVUvOEFBRVFnQUJnQWdBd0VSQUFJUkFRTVJBZi9FQUI4QUFBRUZBUUVCQVFFQkFBQUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVRQUFJQkF3TUNCQU1GQlFRRUFBQUJmUUVDQXdBRUVRVVNJVEZCQmhOUllRY2ljUlF5Z1pHaENDTkNzY0VWVXRId0pETmljb0lKQ2hZWEdCa2FKU1luS0NrcU5EVTJOemc1T2tORVJVWkhTRWxLVTFSVlZsZFlXVnBqWkdWbVoyaHBhbk4wZFhaM2VIbDZnNFNGaG9lSWlZcVNrNVNWbHBlWW1acWlvNlNscHFlb3FhcXlzN1MxdHJlNHVickN3OFRGeHNmSXljclMwOVRWMXRmWTJkcmg0dVBrNWVibjZPbnE4Zkx6OVBYMjkvajUrdi9FQUI4QkFBTUJBUUVCQVFFQkFRRUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVSQUFJQkFnUUVBd1FIQlFRRUFBRUNkd0FCQWdNUkJBVWhNUVlTUVZFSFlYRVRJaktCQ0JSQ2thR3h3UWtqTTFMd0ZXSnkwUW9XSkRUaEpmRVhHQmthSmljb0tTbzFOamM0T1RwRFJFVkdSMGhKU2xOVVZWWlhXRmxhWTJSbFptZG9hV3B6ZEhWMmQzaDVlb0tEaElXR2g0aUppcEtUbEpXV2w1aVptcUtqcEtXbXA2aXBxckt6dExXMnQ3aTV1c0xEeE1YR3g4akp5dExUMU5YVzE5aloydUxqNU9YbTUranA2dkx6OVBYMjkvajUrdi9hQUF3REFRQUNFUU1SQUQ4QS9RM3c1NDd1dFd2Tk84Nk5mcytwQzk4cFZIelIvWnBoRTI0OTl4T1JpZ0RXMEhXUHRQaUtleWFFS1JheDNNY2diT1kyWjF3ZlFoa2IxNHg5QUFXL0VmaEcxOFJ1RE96STIwSVdYcVYzSzIzOFNxKy9HT2hJSUJZOE8rSElkQVdVUnlQSzh1emM4aHlUdFJVQko3bkNqSjduSjcwQWYvL1oiPgoJPC9pbWFnZT4KPC9zdmc+ 32w"
                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                            sizes="1px"
                            src="https://sqp.fr/storage/products/brands/33/medias/12/finisar.png"
                            width="290" height="56">

                    </a>
                    <a class="swiper-slide" href="https://sqp.fr/distributeur-solutions-lmp">
                        <img class="object-contain w-full h-20 p-4" alt="LMP"
                            srcset="https://sqp.fr/storage/products/brands/36/medias/22/responsive-images/lmp___media_library_original_264_97.png 264w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMjY0IDk3Ij4KCTxpbWFnZSB3aWR0aD0iMjY0IiBoZWlnaHQ9Ijk3IiB4bGluazpocmVmPSJkYXRhOmltYWdlL2pwZWc7YmFzZTY0LC85ai80QUFRU2taSlJnQUJBUUVBWUFCZ0FBRC8vZ0E3UTFKRlFWUlBVam9nWjJRdGFuQmxaeUIyTVM0d0lDaDFjMmx1WnlCSlNrY2dTbEJGUnlCMk9EQXBMQ0J4ZFdGc2FYUjVJRDBnT1RBSy85c0FRd0FEQWdJREFnSURBd01EQkFNREJBVUlCUVVFQkFVS0J3Y0dDQXdLREF3TENnc0xEUTRTRUEwT0VRNExDeEFXRUJFVEZCVVZGUXdQRnhnV0ZCZ1NGQlVVLzlzQVF3RURCQVFGQkFVSkJRVUpGQTBMRFJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVUvOEFBRVFnQUN3QWRBd0VSQUFJUkFRTVJBZi9FQUI4QUFBRUZBUUVCQVFFQkFBQUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVRQUFJQkF3TUNCQU1GQlFRRUFBQUJmUUVDQXdBRUVRVVNJVEZCQmhOUllRY2ljUlF5Z1pHaENDTkNzY0VWVXRId0pETmljb0lKQ2hZWEdCa2FKU1luS0NrcU5EVTJOemc1T2tORVJVWkhTRWxLVTFSVlZsZFlXVnBqWkdWbVoyaHBhbk4wZFhaM2VIbDZnNFNGaG9lSWlZcVNrNVNWbHBlWW1acWlvNlNscHFlb3FhcXlzN1MxdHJlNHVickN3OFRGeHNmSXljclMwOVRWMXRmWTJkcmg0dVBrNWVibjZPbnE4Zkx6OVBYMjkvajUrdi9FQUI4QkFBTUJBUUVCQVFFQkFRRUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVSQUFJQkFnUUVBd1FIQlFRRUFBRUNkd0FCQWdNUkJBVWhNUVlTUVZFSFlYRVRJaktCQ0JSQ2thR3h3UWtqTTFMd0ZXSnkwUW9XSkRUaEpmRVhHQmthSmljb0tTbzFOamM0T1RwRFJFVkdSMGhKU2xOVVZWWlhXRmxhWTJSbFptZG9hV3B6ZEhWMmQzaDVlb0tEaElXR2g0aUppcEtUbEpXV2w1aVptcUtqcEtXbXA2aXBxckt6dExXMnQ3aTV1c0xEeE1YR3g4akp5dExUMU5YVzE5aloydUxqNU9YbTUranA2dkx6OVBYMjkvajUrdi9hQUF3REFRQUNFUU1SQUQ4QSs5cEpkTGh2Ymx0U1N6Ylpmek9EZFhVMFpWZGlaSUNLUXZPMDdtNmhTTzJRQWVYZUZGaXN2QnFMTnFsdGJYRnhwRVc4elR1cjJzaXVZMm1RSzRBYmFKUmtqNzBjWjZLUVFCTldzN21IUjdxRFRybU8xbmo4VVBGRmRtUS9KR3VubFNNWTI0RWdKem5QSFRGQUhvbmhQWE5PMVVYMDltMTJiQXlqN094dWMvSUJncjVoYjU4T0g3a2pnSG1nQ3Y0L3N0L2k4UUM2dm9yV2NFVFdzTjlOSEJMa1lPK05YQ3RrY0hJT1JRQnkvaHZ3MXArdCtDZkR1cFhrVWtsNW9PbzNVK25PazhrWWhkdFN1bkpLcXdWeHV0b1Rod3dHekdNTTJRRHo3eEJOSmRlSC9GclN5TXhrMXVlNGJuQTh3L2J3V0FIVDd4NmUzb0tBUG9UeFY0NDF2VGJXemUydmZMYVJzTWZLUTUvMGUzZnV2OTZSeitQc0tBUC8yUT09Ij4KCTwvaW1hZ2U+Cjwvc3ZnPg== 32w"
                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                            sizes="1px" src="https://sqp.fr/storage/products/brands/36/medias/22/lmp.png"
                            width="264" height="97">

                    </a>
                    <a class="swiper-slide" href="https://sqp.fr/distributeur-solutions-hp">
                        <img class="object-contain w-full h-20 p-4" alt="HP"
                            srcset="https://sqp.fr/storage/products/brands/38/medias/16/responsive-images/hp___media_library_original_147_146.png 147w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMTQ3IDE0NiI+Cgk8aW1hZ2Ugd2lkdGg9IjE0NyIgaGVpZ2h0PSIxNDYiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvanBlZztiYXNlNjQsLzlqLzRBQVFTa1pKUmdBQkFRRUFZQUJnQUFELy9nQTdRMUpGUVZSUFVqb2daMlF0YW5CbFp5QjJNUzR3SUNoMWMybHVaeUJKU2tjZ1NsQkZSeUIyT0RBcExDQnhkV0ZzYVhSNUlEMGdPVEFLLzlzQVF3QURBZ0lEQWdJREF3TURCQU1EQkFVSUJRVUVCQVVLQndjR0NBd0tEQXdMQ2dzTERRNFNFQTBPRVE0TEN4QVdFQkVURkJVVkZRd1BGeGdXRkJnU0ZCVVUvOXNBUXdFREJBUUZCQVVKQlFVSkZBMExEUlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVS84QUFFUWdBSHdBZkF3RVJBQUlSQVFNUkFmL0VBQjhBQUFFRkFRRUJBUUVCQUFBQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVFBQUlCQXdNQ0JBTUZCUVFFQUFBQmZRRUNBd0FFRVFVU0lURkJCaE5SWVFjaWNSUXlnWkdoQ0NOQ3NjRVZVdEh3SkROaWNvSUpDaFlYR0JrYUpTWW5LQ2txTkRVMk56ZzVPa05FUlVaSFNFbEtVMVJWVmxkWVdWcGpaR1ZtWjJocGFuTjBkWFozZUhsNmc0U0Zob2VJaVlxU2s1U1ZscGVZbVpxaW82U2xwcWVvcWFxeXM3UzF0cmU0dWJyQ3c4VEZ4c2ZJeWNyUzA5VFYxdGZZMmRyaDR1UGs1ZWJuNk9ucThmTHo5UFgyOS9qNSt2L0VBQjhCQUFNQkFRRUJBUUVCQVFFQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVJBQUlCQWdRRUF3UUhCUVFFQUFFQ2R3QUJBZ01SQkFVaE1RWVNRVkVIWVhFVElqS0JDQlJDa2FHeHdRa2pNMUx3RldKeTBRb1dKRFRoSmZFWEdCa2FKaWNvS1NvMU5qYzRPVHBEUkVWR1IwaEpTbE5VVlZaWFdGbGFZMlJsWm1kb2FXcHpkSFYyZDNoNWVvS0RoSVdHaDRpSmlwS1RsSldXbDVpWm1xS2pwS1dtcDZpcHFyS3p0TFcydDdpNXVzTER4TVhHeDhqSnl0TFQxTlhXMTlqWjJ1TGo1T1htNStqcDZ2THo5UFgyOS9qNSt2L2FBQXdEQVFBQ0VRTVJBRDhBKy9KWXB2RVpuMHZUSjVyT3lzL05obnZHdDRVYUlFa05IRGlKU2pNdjNqMVhjUVBtR1FBY1pvSlQvaEtySzNsdVZTVy92cExtUXlUZk9MTzNIbHdJNnN1U1pKWGxrREtjRUlNNVAzUUQxdnhsYTZicVZna056cWttbVRMODBOemIzSmhrUTR4a01DRDAvT2dEaGZDZW8yMnBhMWM2TjRpZEJxYTdwb3RVanRMUDdQZlE1NWtMR0w1WlFTQXlkeXdaZU40akFPcThielErRS9ETDJ1bmlPRzgxQ1lXOEFiSUR6U3R0R2NEUExOMkZBSGlkN29kdmYrS2JuVjVCWlgyaTZkWnZiMjloYzZkYStaTENzZmtReGkvV1B6NFM4emwwY1NGZ1R4dU9jZ0ZEWGhjWFBoVkp0V2x0WmI2NWs4aUMrMURUN2U4aml0YlNOdnRFMFFsVjFWMm1sU05neThoT09tUUFlcmZEUHdpSXJxT0M0dDRMZTQweXd0Ylc2K3oyOGNVYjNvaXpOTXFJcW9tOE9vS3FvQUlJd0tBTEhpUFdwdkVsL0ZjV0luZzFEVG51TGVEeTFabWh1K1lkeEdOcFZRem41enRJeHcyY1VBZVl6NlJONFYwNyt6WUxTNWx4Y29yd0lKVjNyRUFscGI0WmRraGFWaklwVThIaHVTTUFGZjdjamZFQ0N5Z3VvYjNTdERJc1hoc2JXKzgrUzZnbGtrbTJoclQ3T0drdUNWWStadEtnWlk0elFCN1Y0VHVoNFRnMC9USmtqbDE3V3JpZTdsaWkrVlRLMithVTk5cTUzWXo2Z1VBVFhYaExYZERrdWRTMHFhTFU5U0pFczBVcUxBbDVuT1ZCREVDUVlHQ1FGT1FDY2NxQWMzNDI4WENaN083a3Nvei9BR1ZheTYwOW5jQUVUU3dzaXhRN2dHQ2t5eUpoOE1GMjU3VUFhSGhleXUvQWZnSFNMSzFzcGZFR3ZYQ0ZpWG1YekxpWWd2Skk4a2pESkozTVNUazg5VFFBay9nNmZSaEpyR3MrSXhwK3UzTUwvYUo3V0Y1VWhnOHlQOTFDdzJzRkRGTW5ndVNNZ0JjQUEvL1oiPgoJPC9pbWFnZT4KPC9zdmc+ 32w"
                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                            sizes="1px" src="https://sqp.fr/storage/products/brands/38/medias/16/hp.png"
                            width="147" height="146">

                    </a>
                    <a class="swiper-slide" href="https://sqp.fr/distributeur-solutions-qsan">
                        <img class="object-contain w-full h-20 p-4" alt="QSAN"
                            srcset="https://sqp.fr/storage/products/brands/39/medias/29/responsive-images/qsan___media_library_original_289_82.png 289w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMjg5IDgyIj4KCTxpbWFnZSB3aWR0aD0iMjg5IiBoZWlnaHQ9IjgyIiB4bGluazpocmVmPSJkYXRhOmltYWdlL2pwZWc7YmFzZTY0LC85ai80QUFRU2taSlJnQUJBUUVBWUFCZ0FBRC8vZ0E3UTFKRlFWUlBVam9nWjJRdGFuQmxaeUIyTVM0d0lDaDFjMmx1WnlCSlNrY2dTbEJGUnlCMk9EQXBMQ0J4ZFdGc2FYUjVJRDBnT1RBSy85c0FRd0FEQWdJREFnSURBd01EQkFNREJBVUlCUVVFQkFVS0J3Y0dDQXdLREF3TENnc0xEUTRTRUEwT0VRNExDeEFXRUJFVEZCVVZGUXdQRnhnV0ZCZ1NGQlVVLzlzQVF3RURCQVFGQkFVSkJRVUpGQTBMRFJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVUvOEFBRVFnQUNRQWdBd0VSQUFJUkFRTVJBZi9FQUI4QUFBRUZBUUVCQVFFQkFBQUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVRQUFJQkF3TUNCQU1GQlFRRUFBQUJmUUVDQXdBRUVRVVNJVEZCQmhOUllRY2ljUlF5Z1pHaENDTkNzY0VWVXRId0pETmljb0lKQ2hZWEdCa2FKU1luS0NrcU5EVTJOemc1T2tORVJVWkhTRWxLVTFSVlZsZFlXVnBqWkdWbVoyaHBhbk4wZFhaM2VIbDZnNFNGaG9lSWlZcVNrNVNWbHBlWW1acWlvNlNscHFlb3FhcXlzN1MxdHJlNHVickN3OFRGeHNmSXljclMwOVRWMXRmWTJkcmg0dVBrNWVibjZPbnE4Zkx6OVBYMjkvajUrdi9FQUI4QkFBTUJBUUVCQVFFQkFRRUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVSQUFJQkFnUUVBd1FIQlFRRUFBRUNkd0FCQWdNUkJBVWhNUVlTUVZFSFlYRVRJaktCQ0JSQ2thR3h3UWtqTTFMd0ZXSnkwUW9XSkRUaEpmRVhHQmthSmljb0tTbzFOamM0T1RwRFJFVkdSMGhKU2xOVVZWWlhXRmxhWTJSbFptZG9hV3B6ZEhWMmQzaDVlb0tEaElXR2g0aUppcEtUbEpXV2w1aVptcUtqcEtXbXA2aXBxckt6dExXMnQ3aTV1c0xEeE1YR3g4akp5dExUMU5YVzE5aloydUxqNU9YbTUranA2dkx6OVBYMjkvajUrdi9hQUF3REFRQUNFUU1SQUQ4QSs2L0ZuaVpOSlZaWXJtNXVJNXB4RkJhUWdNbHdDUnVYN3ZNaCtZS29ZRm1BVlZabUFJQmExaSt0ZFJ0azAvVDQ1cnFXOFVNNi9hRERKa2JzcVdJTEw5d2duYWR2QTRKRkFFVUF0Ym1mTDMwSzN5YWhrUjV6dGorNzVlZWdjeG42YmpuR09LQU15WHdYNUZscGZoOFhrRGZiRlF1R0pVdEpCTEU3RmZYN3FncWZWRG5nZ2dDZkZiL2tVTlUvN0N6L0FQbytnRHViUC9rWWIvOEE2K1pmNTBBWWYvTkd6LzJHdi9jdFFCYXV2K1BmdzMvMk1jbi9BS1QzRkFILzJRPT0iPgoJPC9pbWFnZT4KPC9zdmc+ 32w"
                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                            sizes="1px"
                            src="https://sqp.fr/storage/products/brands/39/medias/29/qsan.png"
                            width="289" height="82">

                    </a>
                    <a class="swiper-slide" href="https://sqp.fr/distributeur-solutions-ibm">
                        <img class="object-contain w-full h-20 p-4" alt="IBM"
                            srcset="https://sqp.fr/storage/products/brands/40/medias/17/responsive-images/ibm___media_library_original_281_116.png 281w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMjgxIDExNiI+Cgk8aW1hZ2Ugd2lkdGg9IjI4MSIgaGVpZ2h0PSIxMTYiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvanBlZztiYXNlNjQsLzlqLzRBQVFTa1pKUmdBQkFRRUFZQUJnQUFELy9nQTdRMUpGUVZSUFVqb2daMlF0YW5CbFp5QjJNUzR3SUNoMWMybHVaeUJKU2tjZ1NsQkZSeUIyT0RBcExDQnhkV0ZzYVhSNUlEMGdPVEFLLzlzQVF3QURBZ0lEQWdJREF3TURCQU1EQkFVSUJRVUVCQVVLQndjR0NBd0tEQXdMQ2dzTERRNFNFQTBPRVE0TEN4QVdFQkVURkJVVkZRd1BGeGdXRkJnU0ZCVVUvOXNBUXdFREJBUUZCQVVKQlFVSkZBMExEUlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVS84QUFFUWdBRFFBZ0F3RVJBQUlSQVFNUkFmL0VBQjhBQUFFRkFRRUJBUUVCQUFBQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVFBQUlCQXdNQ0JBTUZCUVFFQUFBQmZRRUNBd0FFRVFVU0lURkJCaE5SWVFjaWNSUXlnWkdoQ0NOQ3NjRVZVdEh3SkROaWNvSUpDaFlYR0JrYUpTWW5LQ2txTkRVMk56ZzVPa05FUlVaSFNFbEtVMVJWVmxkWVdWcGpaR1ZtWjJocGFuTjBkWFozZUhsNmc0U0Zob2VJaVlxU2s1U1ZscGVZbVpxaW82U2xwcWVvcWFxeXM3UzF0cmU0dWJyQ3c4VEZ4c2ZJeWNyUzA5VFYxdGZZMmRyaDR1UGs1ZWJuNk9ucThmTHo5UFgyOS9qNSt2L0VBQjhCQUFNQkFRRUJBUUVCQVFFQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVJBQUlCQWdRRUF3UUhCUVFFQUFFQ2R3QUJBZ01SQkFVaE1RWVNRVkVIWVhFVElqS0JDQlJDa2FHeHdRa2pNMUx3RldKeTBRb1dKRFRoSmZFWEdCa2FKaWNvS1NvMU5qYzRPVHBEUkVWR1IwaEpTbE5VVlZaWFdGbGFZMlJsWm1kb2FXcHpkSFYyZDNoNWVvS0RoSVdHaDRpSmlwS1RsSldXbDVpWm1xS2pwS1dtcDZpcHFyS3p0TFcydDdpNXVzTER4TVhHeDhqSnl0TFQxTlhXMTlqWjJ1TGo1T1htNStqcDZ2THo5UFgyOS9qNSt2L2FBQXdEQVFBQ0VRTVJBRDhBL1FXTDRqRzYxZExFeUMzaTJ6dDlwT1NHOHVWRUE0VTlkMmVRT25PS0FPdDBUWHpxZmhlSFZDbUM4UG1iQVFlM3FLQU9XZzF1ZngzRmRhSkt4c3JpYXhTNUU5dElTWVM3T0ZBYkErWmRnT1JrWlBCUFdnRFNuQjhGMk1seEpLc2sxN2VMdmRWQ0xHSFlLQUFCMFVZQTZrZ2R6MUFOWWVGN2FLVlo0bmtodWdXUG5wamVTeHkzUHVhQU5LeDArQ3dzRXRJVUN3SXUwTDJ4UUJralJMUHcvSVo3U0VSeVNFUlpIWlM3TmdmOENkajlTYUFNWFFwNU5mbVNPNlluOTJ0d3JEcXJpUnNFZlRhUHlvQS8vOWs9Ij4KCTwvaW1hZ2U+Cjwvc3ZnPg== 32w"
                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                            sizes="1px" src="https://sqp.fr/storage/products/brands/40/medias/17/ibm.png"
                            width="281" height="116">

                    </a>
                    <a class="swiper-slide" href="https://sqp.fr/distributeur-solutions-dell">
                        <img class="object-contain w-full h-20 p-4" alt="Dell"
                            srcset="https://sqp.fr/storage/products/brands/48/medias/11/responsive-images/dell___media_library_original_268_86.png 268w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMjY4IDg2Ij4KCTxpbWFnZSB3aWR0aD0iMjY4IiBoZWlnaHQ9Ijg2IiB4bGluazpocmVmPSJkYXRhOmltYWdlL2pwZWc7YmFzZTY0LC85ai80QUFRU2taSlJnQUJBUUVBWUFCZ0FBRC8vZ0E3UTFKRlFWUlBVam9nWjJRdGFuQmxaeUIyTVM0d0lDaDFjMmx1WnlCSlNrY2dTbEJGUnlCMk9EQXBMQ0J4ZFdGc2FYUjVJRDBnT1RBSy85c0FRd0FEQWdJREFnSURBd01EQkFNREJBVUlCUVVFQkFVS0J3Y0dDQXdLREF3TENnc0xEUTRTRUEwT0VRNExDeEFXRUJFVEZCVVZGUXdQRnhnV0ZCZ1NGQlVVLzlzQVF3RURCQVFGQkFVSkJRVUpGQTBMRFJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVUvOEFBRVFnQUNnQWdBd0VSQUFJUkFRTVJBZi9FQUI4QUFBRUZBUUVCQVFFQkFBQUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVRQUFJQkF3TUNCQU1GQlFRRUFBQUJmUUVDQXdBRUVRVVNJVEZCQmhOUllRY2ljUlF5Z1pHaENDTkNzY0VWVXRId0pETmljb0lKQ2hZWEdCa2FKU1luS0NrcU5EVTJOemc1T2tORVJVWkhTRWxLVTFSVlZsZFlXVnBqWkdWbVoyaHBhbk4wZFhaM2VIbDZnNFNGaG9lSWlZcVNrNVNWbHBlWW1acWlvNlNscHFlb3FhcXlzN1MxdHJlNHVickN3OFRGeHNmSXljclMwOVRWMXRmWTJkcmg0dVBrNWVibjZPbnE4Zkx6OVBYMjkvajUrdi9FQUI4QkFBTUJBUUVCQVFFQkFRRUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVSQUFJQkFnUUVBd1FIQlFRRUFBRUNkd0FCQWdNUkJBVWhNUVlTUVZFSFlYRVRJaktCQ0JSQ2thR3h3UWtqTTFMd0ZXSnkwUW9XSkRUaEpmRVhHQmthSmljb0tTbzFOamM0T1RwRFJFVkdSMGhKU2xOVVZWWlhXRmxhWTJSbFptZG9hV3B6ZEhWMmQzaDVlb0tEaElXR2g0aUppcEtUbEpXV2w1aVptcUtqcEtXbXA2aXBxckt6dExXMnQ3aTV1c0xEeE1YR3g4akp5dExUMU5YVzE5aloydUxqNU9YbTUranA2dkx6OVBYMjkvajUrdi9hQUF3REFRQUNFUU1SQUQ4QS9RVHgzZmFoZWEwTktmenJUVEgyQTNsdXp4U0lDc202UlpWSTJGU3NZeDFQbVpIM1RRQmYwclJ0UDFlNnVMeTkxMmJXN29SbUVQSklxaUZDY2tLaUFLcDRHU0JrN1JrbkFvQXAvRUxTeE5vZW5YRnBOSmRHMTFHenVKTGdBek9xUnpvNWZBeVhLZ0U0NUp4aWdEbEk0THpTMDB2V3BacnExdDQ5WnY3dDcxTEtTV1JZNVJPRWN3QlMzemIxK1hIeTd1MktBUFYvRWRqYmFsOWp0YnUzaXVyYWFjSkpETWdkSFhCNElQQkhzYUFPVStJOWhhMk9zNmU5dGJRMjd6V04wa3JSSUZNaXEwTzBNUjFBM3RnSHB1UHFhQU90c0xXR3oxVzZ0WUlrZ3Rvb29ramhqVUtpREI0Q2pnRDZVQWFiSXBYQlVFZW1LQVAvMlE9PSI+Cgk8L2ltYWdlPgo8L3N2Zz4= 32w"
                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                            sizes="1px"
                            src="https://sqp.fr/storage/products/brands/48/medias/11/dell.png"
                            width="268" height="86">

                    </a>
                    <a class="swiper-slide" href="https://sqp.fr/distributeur-solutions-asus">
                        <img class="object-contain w-full h-20 p-4" alt="Asus"
                            srcset="https://sqp.fr/storage/products/brands/59/medias/8/responsive-images/asus___media_library_original_278_59.png 278w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMjc4IDU5Ij4KCTxpbWFnZSB3aWR0aD0iMjc4IiBoZWlnaHQ9IjU5IiB4bGluazpocmVmPSJkYXRhOmltYWdlL2pwZWc7YmFzZTY0LC85ai80QUFRU2taSlJnQUJBUUVBWUFCZ0FBRC8vZ0E3UTFKRlFWUlBVam9nWjJRdGFuQmxaeUIyTVM0d0lDaDFjMmx1WnlCSlNrY2dTbEJGUnlCMk9EQXBMQ0J4ZFdGc2FYUjVJRDBnT1RBSy85c0FRd0FEQWdJREFnSURBd01EQkFNREJBVUlCUVVFQkFVS0J3Y0dDQXdLREF3TENnc0xEUTRTRUEwT0VRNExDeEFXRUJFVEZCVVZGUXdQRnhnV0ZCZ1NGQlVVLzlzQVF3RURCQVFGQkFVSkJRVUpGQTBMRFJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVUvOEFBRVFnQUJnQWJBd0VSQUFJUkFRTVJBZi9FQUI4QUFBRUZBUUVCQVFFQkFBQUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVRQUFJQkF3TUNCQU1GQlFRRUFBQUJmUUVDQXdBRUVRVVNJVEZCQmhOUllRY2ljUlF5Z1pHaENDTkNzY0VWVXRId0pETmljb0lKQ2hZWEdCa2FKU1luS0NrcU5EVTJOemc1T2tORVJVWkhTRWxLVTFSVlZsZFlXVnBqWkdWbVoyaHBhbk4wZFhaM2VIbDZnNFNGaG9lSWlZcVNrNVNWbHBlWW1acWlvNlNscHFlb3FhcXlzN1MxdHJlNHVickN3OFRGeHNmSXljclMwOVRWMXRmWTJkcmg0dVBrNWVibjZPbnE4Zkx6OVBYMjkvajUrdi9FQUI4QkFBTUJBUUVCQVFFQkFRRUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVSQUFJQkFnUUVBd1FIQlFRRUFBRUNkd0FCQWdNUkJBVWhNUVlTUVZFSFlYRVRJaktCQ0JSQ2thR3h3UWtqTTFMd0ZXSnkwUW9XSkRUaEpmRVhHQmthSmljb0tTbzFOamM0T1RwRFJFVkdSMGhKU2xOVVZWWlhXRmxhWTJSbFptZG9hV3B6ZEhWMmQzaDVlb0tEaElXR2g0aUppcEtUbEpXV2w1aVptcUtqcEtXbXA2aXBxckt6dExXMnQ3aTV1c0xEeE1YR3g4akp5dExUMU5YVzE5aloydUxqNU9YbTUranA2dkx6OVBYMjkvajUrdi9hQUF3REFRQUNFUU1SQUQ4QSswdkJlcDZuYmVLYm5VcFpvNDB2dGFOZ0xLRUR5cmVKWVBOQ3J3T0FIaUdRRnlWa1lnbCtBRDF2eDdwTGE3NFExT3hTWHlYbmdaQkovZEpIV2dERitHMWpJMm9hOXE4a01ObWRUdUVrRm5idnZTRUpFa2VBMjFjNTJidWc1YjhhQU85b0EvL1oiPgoJPC9pbWFnZT4KPC9zdmc+ 32w"
                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                            sizes="1px" src="https://sqp.fr/storage/products/brands/59/medias/8/asus.png"
                            width="278" height="59">

                    </a>
                    <a class="swiper-slide" href="https://sqp.fr/distributeur-solutions-transcend">
                        <img class="object-contain w-full h-20 p-4" alt="Transcend"
                            srcset="https://sqp.fr/storage/products/brands/60/medias/32/responsive-images/transcend___media_library_original_300_56.png 300w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMzAwIDU2Ij4KCTxpbWFnZSB3aWR0aD0iMzAwIiBoZWlnaHQ9IjU2IiB4bGluazpocmVmPSJkYXRhOmltYWdlL2pwZWc7YmFzZTY0LC85ai80QUFRU2taSlJnQUJBUUVBWUFCZ0FBRC8vZ0E3UTFKRlFWUlBVam9nWjJRdGFuQmxaeUIyTVM0d0lDaDFjMmx1WnlCSlNrY2dTbEJGUnlCMk9EQXBMQ0J4ZFdGc2FYUjVJRDBnT1RBSy85c0FRd0FEQWdJREFnSURBd01EQkFNREJBVUlCUVVFQkFVS0J3Y0dDQXdLREF3TENnc0xEUTRTRUEwT0VRNExDeEFXRUJFVEZCVVZGUXdQRnhnV0ZCZ1NGQlVVLzlzQVF3RURCQVFGQkFVSkJRVUpGQTBMRFJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVUvOEFBRVFnQUJRQWJBd0VSQUFJUkFRTVJBZi9FQUI4QUFBRUZBUUVCQVFFQkFBQUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVRQUFJQkF3TUNCQU1GQlFRRUFBQUJmUUVDQXdBRUVRVVNJVEZCQmhOUllRY2ljUlF5Z1pHaENDTkNzY0VWVXRId0pETmljb0lKQ2hZWEdCa2FKU1luS0NrcU5EVTJOemc1T2tORVJVWkhTRWxLVTFSVlZsZFlXVnBqWkdWbVoyaHBhbk4wZFhaM2VIbDZnNFNGaG9lSWlZcVNrNVNWbHBlWW1acWlvNlNscHFlb3FhcXlzN1MxdHJlNHVickN3OFRGeHNmSXljclMwOVRWMXRmWTJkcmg0dVBrNWVibjZPbnE4Zkx6OVBYMjkvajUrdi9FQUI4QkFBTUJBUUVCQVFFQkFRRUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVSQUFJQkFnUUVBd1FIQlFRRUFBRUNkd0FCQWdNUkJBVWhNUVlTUVZFSFlYRVRJaktCQ0JSQ2thR3h3UWtqTTFMd0ZXSnkwUW9XSkRUaEpmRVhHQmthSmljb0tTbzFOamM0T1RwRFJFVkdSMGhKU2xOVVZWWlhXRmxhWTJSbFptZG9hV3B6ZEhWMmQzaDVlb0tEaElXR2g0aUppcEtUbEpXV2w1aVptcUtqcEtXbXA2aXBxckt6dExXMnQ3aTV1c0xEeE1YR3g4akp5dExUMU5YVzE5aloydUxqNU9YbTUranA2dkx6OVBYMjkvajUrdi9hQUF3REFRQUNFUU1SQUQ4QS9TcnhWcEs2K3lXYlhGeFp0dFpoY1drN3d5cjBIREl5c092clFCNS9iL0NlN2JXQ1c4YWVKVFpzU2doT3NYbThGVlVrN3ZQNkV0MHh4Nm1nRG81ZmhCQUlpVjhUK0tRd0hCT3ZYaEgvQUtOb0F3VnZMdnd3cTZiY1hkeHFVc1FERzVlNW1WbkREZU1ndXhKQVlET2VjWjR6aWdELzJRPT0iPgoJPC9pbWFnZT4KPC9zdmc+ 32w"
                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                            sizes="1px"
                            src="https://sqp.fr/storage/products/brands/60/medias/32/transcend.png"
                            width="300" height="56">

                    </a>
                    <a class="swiper-slide" href="https://sqp.fr/distributeur-solutions-liteon">
                        <img class="object-contain w-full h-20 p-4" alt="LiteOn"
                            srcset="https://sqp.fr/storage/products/brands/69/medias/21/responsive-images/liteon___media_library_original_286_60.png 286w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMjg2IDYxIj4KCTxpbWFnZSB3aWR0aD0iMjg2IiBoZWlnaHQ9IjYxIiB4bGluazpocmVmPSJkYXRhOmltYWdlL2pwZWc7YmFzZTY0LC85ai80QUFRU2taSlJnQUJBUUVBWUFCZ0FBRC8vZ0E3UTFKRlFWUlBVam9nWjJRdGFuQmxaeUIyTVM0d0lDaDFjMmx1WnlCSlNrY2dTbEJGUnlCMk9EQXBMQ0J4ZFdGc2FYUjVJRDBnT1RBSy85c0FRd0FEQWdJREFnSURBd01EQkFNREJBVUlCUVVFQkFVS0J3Y0dDQXdLREF3TENnc0xEUTRTRUEwT0VRNExDeEFXRUJFVEZCVVZGUXdQRnhnV0ZCZ1NGQlVVLzlzQVF3RURCQVFGQkFVSkJRVUpGQTBMRFJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVUvOEFBRVFnQUJnQWJBd0VSQUFJUkFRTVJBZi9FQUI4QUFBRUZBUUVCQVFFQkFBQUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVRQUFJQkF3TUNCQU1GQlFRRUFBQUJmUUVDQXdBRUVRVVNJVEZCQmhOUllRY2ljUlF5Z1pHaENDTkNzY0VWVXRId0pETmljb0lKQ2hZWEdCa2FKU1luS0NrcU5EVTJOemc1T2tORVJVWkhTRWxLVTFSVlZsZFlXVnBqWkdWbVoyaHBhbk4wZFhaM2VIbDZnNFNGaG9lSWlZcVNrNVNWbHBlWW1acWlvNlNscHFlb3FhcXlzN1MxdHJlNHVickN3OFRGeHNmSXljclMwOVRWMXRmWTJkcmg0dVBrNWVibjZPbnE4Zkx6OVBYMjkvajUrdi9FQUI4QkFBTUJBUUVCQVFFQkFRRUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVSQUFJQkFnUUVBd1FIQlFRRUFBRUNkd0FCQWdNUkJBVWhNUVlTUVZFSFlYRVRJaktCQ0JSQ2thR3h3UWtqTTFMd0ZXSnkwUW9XSkRUaEpmRVhHQmthSmljb0tTbzFOamM0T1RwRFJFVkdSMGhKU2xOVVZWWlhXRmxhWTJSbFptZG9hV3B6ZEhWMmQzaDVlb0tEaElXR2g0aUppcEtUbEpXV2w1aVptcUtqcEtXbXA2aXBxckt6dExXMnQ3aTV1c0xEeE1YR3g4akp5dExUMU5YVzE5aloydUxqNU9YbTUranA2dkx6OVBYMjkvajUrdi9hQUF3REFRQUNFUU1SQUQ4QS9RUDRhZUNYOE9hMWR6dk1zb0VEUUtBVHptNW5uejdmNi9iZ2YzYzk2QVBUVDBvQTg2K01QaWVid2Q0ZmZVTGZBa0laUVN1NzV0cmJlTWpndGdFNTRCSndjWUlCNWpvMHVtYXA0ZTBQVU5SdnRVVy92dE1zN3ljVzdTN044dHZISWNmNlFQNzNZQVo2QUNnRC85az0iPgoJPC9pbWFnZT4KPC9zdmc+ 32w"
                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                            sizes="1px"
                            src="https://sqp.fr/storage/products/brands/69/medias/21/liteon.png"
                            width="286" height="60">

                    </a>
                    <a class="swiper-slide" href="https://sqp.fr/distributeur-solutions-icydock">
                        <img class="object-contain w-full h-20 p-4" alt="IcyDock"
                            srcset="https://sqp.fr/storage/products/brands/73/medias/18/responsive-images/icydock___media_library_original_284_71.png 284w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMjg0IDcxIj4KCTxpbWFnZSB3aWR0aD0iMjg0IiBoZWlnaHQ9IjcxIiB4bGluazpocmVmPSJkYXRhOmltYWdlL2pwZWc7YmFzZTY0LC85ai80QUFRU2taSlJnQUJBUUVBWUFCZ0FBRC8vZ0E3UTFKRlFWUlBVam9nWjJRdGFuQmxaeUIyTVM0d0lDaDFjMmx1WnlCSlNrY2dTbEJGUnlCMk9EQXBMQ0J4ZFdGc2FYUjVJRDBnT1RBSy85c0FRd0FEQWdJREFnSURBd01EQkFNREJBVUlCUVVFQkFVS0J3Y0dDQXdLREF3TENnc0xEUTRTRUEwT0VRNExDeEFXRUJFVEZCVVZGUXdQRnhnV0ZCZ1NGQlVVLzlzQVF3RURCQVFGQkFVSkJRVUpGQTBMRFJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVUvOEFBRVFnQUNBQWdBd0VSQUFJUkFRTVJBZi9FQUI4QUFBRUZBUUVCQVFFQkFBQUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVRQUFJQkF3TUNCQU1GQlFRRUFBQUJmUUVDQXdBRUVRVVNJVEZCQmhOUllRY2ljUlF5Z1pHaENDTkNzY0VWVXRId0pETmljb0lKQ2hZWEdCa2FKU1luS0NrcU5EVTJOemc1T2tORVJVWkhTRWxLVTFSVlZsZFlXVnBqWkdWbVoyaHBhbk4wZFhaM2VIbDZnNFNGaG9lSWlZcVNrNVNWbHBlWW1acWlvNlNscHFlb3FhcXlzN1MxdHJlNHVickN3OFRGeHNmSXljclMwOVRWMXRmWTJkcmg0dVBrNWVibjZPbnE4Zkx6OVBYMjkvajUrdi9FQUI4QkFBTUJBUUVCQVFFQkFRRUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVSQUFJQkFnUUVBd1FIQlFRRUFBRUNkd0FCQWdNUkJBVWhNUVlTUVZFSFlYRVRJaktCQ0JSQ2thR3h3UWtqTTFMd0ZXSnkwUW9XSkRUaEpmRVhHQmthSmljb0tTbzFOamM0T1RwRFJFVkdSMGhKU2xOVVZWWlhXRmxhWTJSbFptZG9hV3B6ZEhWMmQzaDVlb0tEaElXR2g0aUppcEtUbEpXV2w1aVptcUtqcEtXbXA2aXBxckt6dExXMnQ3aTV1c0xEeE1YR3g4akp5dExUMU5YVzE5aloydUxqNU9YbTUranA2dkx6OVBYMjkvajUrdi9hQUF3REFRQUNFUU1SQUQ4QSs5L0dQd1kwN3hkTnJLWDJoNlRlUzM1THg2emNBaTl0ZmtVS3NUaFN3VU1nT053VTVZRldERVVBWXVqL0FBZEY2ZENnbXRwWWY3Tmd2VHFNOTR3a0dwWHR5cWI3amRrdWRyS3pLeEt1RHQ2WTVBS1dyL0MzV05aMTF0TkM2Y3R1alhFajZvbjJoYmk2UmhIdHQ1OEZCcys4QVVZdGdEQmpJWXlBR3hiL0FBdzFIVE5idWJ2U0xMVGZDMXJjUTIwWDlsYVJHRXM1R1NWek84d1dOVHZkSk1LeWNqWnllaEFCLzlrPSI+Cgk8L2ltYWdlPgo8L3N2Zz4= 32w"
                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                            sizes="1px"
                            src="https://sqp.fr/storage/products/brands/73/medias/18/icydock.png"
                            width="284" height="71">

                    </a>
                    <a class="swiper-slide" href="https://sqp.fr/distributeur-solutions-bestor">
                        <img class="object-contain w-full h-20 p-4" alt="BeStor"
                            srcset="https://sqp.fr/storage/products/brands/75/medias/9/responsive-images/bestor___media_library_original_294_75.png 294w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMjk0IDc1Ij4KCTxpbWFnZSB3aWR0aD0iMjk0IiBoZWlnaHQ9Ijc1IiB4bGluazpocmVmPSJkYXRhOmltYWdlL2pwZWc7YmFzZTY0LC85ai80QUFRU2taSlJnQUJBUUVBWUFCZ0FBRC8vZ0E3UTFKRlFWUlBVam9nWjJRdGFuQmxaeUIyTVM0d0lDaDFjMmx1WnlCSlNrY2dTbEJGUnlCMk9EQXBMQ0J4ZFdGc2FYUjVJRDBnT1RBSy85c0FRd0FEQWdJREFnSURBd01EQkFNREJBVUlCUVVFQkFVS0J3Y0dDQXdLREF3TENnc0xEUTRTRUEwT0VRNExDeEFXRUJFVEZCVVZGUXdQRnhnV0ZCZ1NGQlVVLzlzQVF3RURCQVFGQkFVSkJRVUpGQTBMRFJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVUvOEFBRVFnQUNBQWdBd0VSQUFJUkFRTVJBZi9FQUI4QUFBRUZBUUVCQVFFQkFBQUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVRQUFJQkF3TUNCQU1GQlFRRUFBQUJmUUVDQXdBRUVRVVNJVEZCQmhOUllRY2ljUlF5Z1pHaENDTkNzY0VWVXRId0pETmljb0lKQ2hZWEdCa2FKU1luS0NrcU5EVTJOemc1T2tORVJVWkhTRWxLVTFSVlZsZFlXVnBqWkdWbVoyaHBhbk4wZFhaM2VIbDZnNFNGaG9lSWlZcVNrNVNWbHBlWW1acWlvNlNscHFlb3FhcXlzN1MxdHJlNHVickN3OFRGeHNmSXljclMwOVRWMXRmWTJkcmg0dVBrNWVibjZPbnE4Zkx6OVBYMjkvajUrdi9FQUI4QkFBTUJBUUVCQVFFQkFRRUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVSQUFJQkFnUUVBd1FIQlFRRUFBRUNkd0FCQWdNUkJBVWhNUVlTUVZFSFlYRVRJaktCQ0JSQ2thR3h3UWtqTTFMd0ZXSnkwUW9XSkRUaEpmRVhHQmthSmljb0tTbzFOamM0T1RwRFJFVkdSMGhKU2xOVVZWWlhXRmxhWTJSbFptZG9hV3B6ZEhWMmQzaDVlb0tEaElXR2g0aUppcEtUbEpXV2w1aVptcUtqcEtXbXA2aXBxckt6dExXMnQ3aTV1c0xEeE1YR3g4akp5dExUMU5YVzE5aloydUxqNU9YbTUranA2dkx6OVBYMjkvajUrdi9hQUF3REFRQUNFUU1SQUQ4QSs0OUM4VVdYL0NBckZxbHJySjFEZmw3QkxXNEdvcFBqekNBbVRLejRHOE4xSUliQTVBQU16WFprWHhGZlN3TjhUYlc2dDcxMlZyZUxVcHJiY2toNVZNTkU4Wkk0R0NqTDJJTkFGT2E3YlVwNWJuVUxqNHBUM2N1TnoyOW5xTnBId0FCaUtGRVJlQi9Db3ljazhrbWdCRzhVZUw0MjB6VE5IMVR4N0dzczF2WXhQZStHaTZ3cXpMR0pKcDViVm1LcUR1WjNZbkFKSjZtZ0QvL1oiPgoJPC9pbWFnZT4KPC9zdmc+ 32w"
                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                            sizes="1px"
                            src="https://sqp.fr/storage/products/brands/75/medias/9/bestor.png"
                            width="294" height="75">

                    </a>
                    <a class="swiper-slide" href="https://sqp.fr/distributeur-solutions-nakivo">
                        <img class="object-contain w-full h-20 p-4" alt="Nakivo"
                            srcset="https://sqp.fr/storage/products/brands/77/medias/27/responsive-images/nakivo___media_library_original_285_79.png 285w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMjg1IDc5Ij4KCTxpbWFnZSB3aWR0aD0iMjg1IiBoZWlnaHQ9Ijc5IiB4bGluazpocmVmPSJkYXRhOmltYWdlL2pwZWc7YmFzZTY0LC85ai80QUFRU2taSlJnQUJBUUVBWUFCZ0FBRC8vZ0E3UTFKRlFWUlBVam9nWjJRdGFuQmxaeUIyTVM0d0lDaDFjMmx1WnlCSlNrY2dTbEJGUnlCMk9EQXBMQ0J4ZFdGc2FYUjVJRDBnT1RBSy85c0FRd0FEQWdJREFnSURBd01EQkFNREJBVUlCUVVFQkFVS0J3Y0dDQXdLREF3TENnc0xEUTRTRUEwT0VRNExDeEFXRUJFVEZCVVZGUXdQRnhnV0ZCZ1NGQlVVLzlzQVF3RURCQVFGQkFVSkJRVUpGQTBMRFJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVUvOEFBRVFnQUNBQWNBd0VSQUFJUkFRTVJBZi9FQUI4QUFBRUZBUUVCQVFFQkFBQUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVRQUFJQkF3TUNCQU1GQlFRRUFBQUJmUUVDQXdBRUVRVVNJVEZCQmhOUllRY2ljUlF5Z1pHaENDTkNzY0VWVXRId0pETmljb0lKQ2hZWEdCa2FKU1luS0NrcU5EVTJOemc1T2tORVJVWkhTRWxLVTFSVlZsZFlXVnBqWkdWbVoyaHBhbk4wZFhaM2VIbDZnNFNGaG9lSWlZcVNrNVNWbHBlWW1acWlvNlNscHFlb3FhcXlzN1MxdHJlNHVickN3OFRGeHNmSXljclMwOVRWMXRmWTJkcmg0dVBrNWVibjZPbnE4Zkx6OVBYMjkvajUrdi9FQUI4QkFBTUJBUUVCQVFFQkFRRUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVSQUFJQkFnUUVBd1FIQlFRRUFBRUNkd0FCQWdNUkJBVWhNUVlTUVZFSFlYRVRJaktCQ0JSQ2thR3h3UWtqTTFMd0ZXSnkwUW9XSkRUaEpmRVhHQmthSmljb0tTbzFOamM0T1RwRFJFVkdSMGhKU2xOVVZWWlhXRmxhWTJSbFptZG9hV3B6ZEhWMmQzaDVlb0tEaElXR2g0aUppcEtUbEpXV2w1aVptcUtqcEtXbXA2aXBxckt6dExXMnQ3aTV1c0xEeE1YR3g4akp5dExUMU5YVzE5aloydUxqNU9YbTUranA2dkx6OVBYMjkvajUrdi9hQUF3REFRQUNFUU1SQUQ4QSs0NC9BV3M2bFpTeTZuTVd1WGdTSXlTVzRrYUlobGQxQ2hnSFF5eHE2OHFlZ1BLN21BTmp3ejRmMTNSQWx2RkZENVVpS3J6ZVZzREJZekdoSTNFcVZWWXdGK2J2ODN5amNBWWtYdzU4U0pxVXQ2dXB5b1pka3pXZ2ovY202WkxkSjNKREJpaFdKd3B5R0dSZ0Q1dDRCMnVpZUdyL0FFK0NkYjY5L2ZTVE5JRXNWZFlVQkE0VU9YWWM1T04yQm5qQXdLQVAvOWs9Ij4KCTwvaW1hZ2U+Cjwvc3ZnPg== 32w"
                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                            sizes="1px"
                            src="https://sqp.fr/storage/products/brands/77/medias/27/nakivo.png"
                            width="285" height="79">

                    </a>
                    <a class="swiper-slide" href="https://sqp.fr/distributeur-solutions-terramaster">
                        <img class="object-contain w-full h-20 p-4" alt="TerraMaster"
                            srcset="https://sqp.fr/storage/products/brands/79/medias/31/responsive-images/terramaster___media_library_original_263_128.png 263w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMjYzIDEyOCI+Cgk8aW1hZ2Ugd2lkdGg9IjI2MyIgaGVpZ2h0PSIxMjgiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvanBlZztiYXNlNjQsLzlqLzRBQVFTa1pKUmdBQkFRRUFZQUJnQUFELy9nQTdRMUpGUVZSUFVqb2daMlF0YW5CbFp5QjJNUzR3SUNoMWMybHVaeUJKU2tjZ1NsQkZSeUIyT0RBcExDQnhkV0ZzYVhSNUlEMGdPVEFLLzlzQVF3QURBZ0lEQWdJREF3TURCQU1EQkFVSUJRVUVCQVVLQndjR0NBd0tEQXdMQ2dzTERRNFNFQTBPRVE0TEN4QVdFQkVURkJVVkZRd1BGeGdXRkJnU0ZCVVUvOXNBUXdFREJBUUZCQVVKQlFVSkZBMExEUlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVS84QUFFUWdBRHdBZUF3RVJBQUlSQVFNUkFmL0VBQjhBQUFFRkFRRUJBUUVCQUFBQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVFBQUlCQXdNQ0JBTUZCUVFFQUFBQmZRRUNBd0FFRVFVU0lURkJCaE5SWVFjaWNSUXlnWkdoQ0NOQ3NjRVZVdEh3SkROaWNvSUpDaFlYR0JrYUpTWW5LQ2txTkRVMk56ZzVPa05FUlVaSFNFbEtVMVJWVmxkWVdWcGpaR1ZtWjJocGFuTjBkWFozZUhsNmc0U0Zob2VJaVlxU2s1U1ZscGVZbVpxaW82U2xwcWVvcWFxeXM3UzF0cmU0dWJyQ3c4VEZ4c2ZJeWNyUzA5VFYxdGZZMmRyaDR1UGs1ZWJuNk9ucThmTHo5UFgyOS9qNSt2L0VBQjhCQUFNQkFRRUJBUUVCQVFFQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVJBQUlCQWdRRUF3UUhCUVFFQUFFQ2R3QUJBZ01SQkFVaE1RWVNRVkVIWVhFVElqS0JDQlJDa2FHeHdRa2pNMUx3RldKeTBRb1dKRFRoSmZFWEdCa2FKaWNvS1NvMU5qYzRPVHBEUkVWR1IwaEpTbE5VVlZaWFdGbGFZMlJsWm1kb2FXcHpkSFYyZDNoNWVvS0RoSVdHaDRpSmlwS1RsSldXbDVpWm1xS2pwS1dtcDZpcHFyS3p0TFcydDdpNXVzTER4TVhHeDhqSnl0TFQxTlhXMTlqWjJ1TGo1T1htNStqcDZ2THo5UFgyOS9qNSt2L2FBQXdEQVFBQ0VRTVJBRDhBKzBORzhPYTU4UjlUYStsOFphOWQyWGxLMFUxanFTV0NiSGpXV01OSGJRbzdqYklHQmFYby9BQk9hQUxtbmZBOWJQVjFmV3ZEM2g3eE5wMGtoODVOU1M3dlhDYkhQeWk2dUpsRG1UeXZueDkwT1A0Z1ZBSk5FK0J0eEhCRFBjSmI2SmZPbjc1dkRWN3FHbnh4c1MrNFF4cmNsRVhIbFlYYVFOcmNmTU5vQnErRlBBWGpYU1VtdHg0MjF1Q3lSajVVV29UMjJveUhKem56WkxjUGowVm1iSHJRQnpmdzkwZnhMOEw3U1BTWk5GR29MYXJhd1hNK21YNkJZWTB0b0xlSGNrcXFTVEhDbWRqTU4yNDhBaWdEYThYZkZRK0Y0SG0xSFdCbzBTc0VNbHhZdE1BYzRQRVRzZVBwK2RBR2xvUHhDdTcrdysyUVBOckVQbEdSZklnU0VTREhCRytRRURKSFVab0F2MmZpWHhYcTAweTJPaVF3dkNkczF2ZDNxbVNOdHhBQjJxVi9oUFJqUUIvLzJRPT0iPgoJPC9pbWFnZT4KPC9zdmc+ 32w"
                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                            sizes="1px"
                            src="https://sqp.fr/storage/products/brands/79/medias/31/terramaster.png"
                            width="263" height="128">

                    </a>
                    <a class="swiper-slide" href="https://sqp.fr/distributeur-solutions-micron">
                        <img class="object-contain w-full h-20 p-4" alt="Micron"
                            srcset="https://sqp.fr/storage/products/brands/92/medias/24/responsive-images/micron___media_library_original_271_75.png 271w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMjcxIDc1Ij4KCTxpbWFnZSB3aWR0aD0iMjcxIiBoZWlnaHQ9Ijc1IiB4bGluazpocmVmPSJkYXRhOmltYWdlL2pwZWc7YmFzZTY0LC85ai80QUFRU2taSlJnQUJBUUVBWUFCZ0FBRC8vZ0E3UTFKRlFWUlBVam9nWjJRdGFuQmxaeUIyTVM0d0lDaDFjMmx1WnlCSlNrY2dTbEJGUnlCMk9EQXBMQ0J4ZFdGc2FYUjVJRDBnT1RBSy85c0FRd0FEQWdJREFnSURBd01EQkFNREJBVUlCUVVFQkFVS0J3Y0dDQXdLREF3TENnc0xEUTRTRUEwT0VRNExDeEFXRUJFVEZCVVZGUXdQRnhnV0ZCZ1NGQlVVLzlzQVF3RURCQVFGQkFVSkJRVUpGQTBMRFJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVUvOEFBRVFnQUNBQWNBd0VSQUFJUkFRTVJBZi9FQUI4QUFBRUZBUUVCQVFFQkFBQUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVRQUFJQkF3TUNCQU1GQlFRRUFBQUJmUUVDQXdBRUVRVVNJVEZCQmhOUllRY2ljUlF5Z1pHaENDTkNzY0VWVXRId0pETmljb0lKQ2hZWEdCa2FKU1luS0NrcU5EVTJOemc1T2tORVJVWkhTRWxLVTFSVlZsZFlXVnBqWkdWbVoyaHBhbk4wZFhaM2VIbDZnNFNGaG9lSWlZcVNrNVNWbHBlWW1acWlvNlNscHFlb3FhcXlzN1MxdHJlNHVickN3OFRGeHNmSXljclMwOVRWMXRmWTJkcmg0dVBrNWVibjZPbnE4Zkx6OVBYMjkvajUrdi9FQUI4QkFBTUJBUUVCQVFFQkFRRUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVSQUFJQkFnUUVBd1FIQlFRRUFBRUNkd0FCQWdNUkJBVWhNUVlTUVZFSFlYRVRJaktCQ0JSQ2thR3h3UWtqTTFMd0ZXSnkwUW9XSkRUaEpmRVhHQmthSmljb0tTbzFOamM0T1RwRFJFVkdSMGhKU2xOVVZWWlhXRmxhWTJSbFptZG9hV3B6ZEhWMmQzaDVlb0tEaElXR2g0aUppcEtUbEpXV2w1aVptcUtqcEtXbXA2aXBxckt6dExXMnQ3aTV1c0xEeE1YR3g4akp5dExUMU5YVzE5aloydUxqNU9YbTUranA2dkx6OVBYMjkvajUrdi9hQUF3REFRQUNFUU1SQUQ4QSsrcmZTeDRaMVMvdWRRbnU3NXB2bWpzNFlqTHRHRnlTQUNYZGloYkRianVZaGV3b0E0M1hyeTgwdlJSYWFPZkV0bnB2Mm00TVZwRm9abVdTZnpQTUtGWGpQSG1PNUhCeVNSODJ3QlFERDhMYXA0cXZJWUxQWHBOZGFDVFRZZFFoWk5HaWFMWkpaS3plWnRRK1hOQmtSaEgyc1NpdHQvZURlQWR2Yno2eDVaQzZ6NHVrRzVtTFJhUnNHNWp2WVlTRURPNWpudURrSEdNQUEvL1oiPgoJPC9pbWFnZT4KPC9zdmc+ 32w"
                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                            sizes="1px"
                            src="https://sqp.fr/storage/products/brands/92/medias/24/micron.png"
                            width="271" height="75">

                    </a>
                </div>
            </div>

            <button class="absolute top-0 z-10 h-full" type="button" @click="swiper.slidePrev()">
                <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg> </button>

            <button class="absolute top-0 right-0 z-10 h-full" type="button" @click="swiper.slideNext()">
                <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg> </button>
        </div>
    </div>
</div>

<div class="relative py-8 mb-16 bg-secondary-600">
    <div class="mx-auto text-white max-w-big">
        <h3 class="text-xl font-semibold text-center">Pourquoi choisir <span
                class="text-primary-500">SQP</span>:</h3>

        <div class="flex flex-row flex-wrap w-full">
            <a href="#"
                class="flex flex-col items-center w-1/2 px-4 py-8 sm:w-1/3 lg:w-1/6 hover:bg-secondary-700">
                <div class="flex items-center justify-center h-20">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="56"
                        viewBox="0 0 64 56">
                        <g id="Groupe_196" data-name="Groupe 196" transform="translate(-291.781 -53.6)">
                            <g id="Groupe_108" data-name="Groupe 108">
                                <path id="Tracé_75" data-name="Tracé 75"
                                    d="M343.781,101.6h-40a1,1,0,0,1-1-1V96.723l-7.97-31.881a1,1,0,0,1,1.759-.856l13.211,16.985,13.21-16.985a1.037,1.037,0,0,1,1.579,0l13.211,16.985,13.21-16.985a1,1,0,0,1,1.76.856l-7.97,31.881V100.6A1,1,0,0,1,343.781,101.6Zm-39-2h38v-3a.983.983,0,0,1,.03-.242l6.851-27.4L338.57,83.214a1.036,1.036,0,0,1-1.579,0l-13.21-16.985L310.57,83.214a1.036,1.036,0,0,1-1.579,0L297.9,68.954l6.851,27.4a1.036,1.036,0,0,1,.03.242Z"
                                    fill="#fff" />
                            </g>
                            <g id="Groupe_109" data-name="Groupe 109">
                                <path id="Tracé_76" data-name="Tracé 76"
                                    d="M295.781,61.6a4,4,0,1,1,4-4A4,4,0,0,1,295.781,61.6Zm0-6a2,2,0,1,0,2,2A2,2,0,0,0,295.781,55.6Z"
                                    fill="#60ac78" />
                            </g>
                            <g id="Groupe_110" data-name="Groupe 110">
                                <path id="Tracé_77" data-name="Tracé 77"
                                    d="M351.781,61.6a4,4,0,1,1,4-4A4,4,0,0,1,351.781,61.6Zm0-6a2,2,0,1,0,2,2A2,2,0,0,0,351.781,55.6Z"
                                    fill="#60ac78" />
                            </g>
                            <g id="Groupe_111" data-name="Groupe 111">
                                <path id="Tracé_78" data-name="Tracé 78"
                                    d="M323.781,61.6a4,4,0,1,1,4-4A4,4,0,0,1,323.781,61.6Zm0-6a2,2,0,1,0,2,2A2,2,0,0,0,323.781,55.6Z"
                                    fill="#60ac78" />
                            </g>
                            <g id="Groupe_112" data-name="Groupe 112">
                                <path id="Tracé_79" data-name="Tracé 79"
                                    d="M323.781,91.6a1,1,0,0,1-.8-.4l-6-8a1,1,0,0,1,0-1.2l6-8a1.036,1.036,0,0,1,1.6,0l6,8a1,1,0,0,1,0,1.2l-6,8A1,1,0,0,1,323.781,91.6Zm-4.75-9,4.75,6.333,4.75-6.333-4.75-6.333Z"
                                    fill="#60ac78" />
                            </g>
                            <g id="Groupe_113" data-name="Groupe 113">
                                <path id="Tracé_80" data-name="Tracé 80"
                                    d="M343.781,109.6h-40a1,1,0,0,1-1-1v-5h2v4h38v-4h2v5A1,1,0,0,1,343.781,109.6Z"
                                    fill="#fff" />
                            </g>
                            <g id="Groupe_114" data-name="Groupe 114">
                                <rect id="Rectangle_121" data-name="Rectangle 121" width="2"
                                    height="2" transform="translate(306.781 103.6)" fill="#60ac78" />
                            </g>
                            <g id="Groupe_115" data-name="Groupe 115">
                                <rect id="Rectangle_122" data-name="Rectangle 122" width="2"
                                    height="2" transform="translate(310.781 103.6)" fill="#60ac78" />
                            </g>
                            <g id="Groupe_116" data-name="Groupe 116">
                                <rect id="Rectangle_123" data-name="Rectangle 123" width="2"
                                    height="2" transform="translate(314.781 103.6)" fill="#60ac78" />
                            </g>
                            <g id="Groupe_117" data-name="Groupe 117">
                                <rect id="Rectangle_124" data-name="Rectangle 124" width="2"
                                    height="2" transform="translate(318.781 103.6)" fill="#60ac78" />
                            </g>
                            <g id="Groupe_118" data-name="Groupe 118">
                                <rect id="Rectangle_125" data-name="Rectangle 125" width="2"
                                    height="2" transform="translate(322.781 103.6)" fill="#60ac78" />
                            </g>
                            <g id="Groupe_119" data-name="Groupe 119">
                                <rect id="Rectangle_126" data-name="Rectangle 126" width="2"
                                    height="2" transform="translate(326.781 103.6)" fill="#60ac78" />
                            </g>
                            <g id="Groupe_120" data-name="Groupe 120">
                                <rect id="Rectangle_127" data-name="Rectangle 127" width="2"
                                    height="2" transform="translate(330.781 103.6)" fill="#60ac78" />
                            </g>
                            <g id="Groupe_121" data-name="Groupe 121">
                                <rect id="Rectangle_128" data-name="Rectangle 128" width="2"
                                    height="2" transform="translate(334.781 103.6)" fill="#60ac78" />
                            </g>
                            <g id="Groupe_122" data-name="Groupe 122">
                                <rect id="Rectangle_129" data-name="Rectangle 129" width="2"
                                    height="2" transform="translate(338.781 103.6)" fill="#60ac78" />
                            </g>
                            <g id="Groupe_123" data-name="Groupe 123">
                                <rect id="Rectangle_130" data-name="Rectangle 130" width="1.999"
                                    height="18.358" transform="translate(295.291 65.471) rotate(-60.642)"
                                    fill="#fff" />
                            </g>
                            <g id="Groupe_124" data-name="Groupe 124">
                                <rect id="Rectangle_131" data-name="Rectangle 131" width="18.358"
                                    height="1.999" transform="translate(335.291 72.731) rotate(-29.368)"
                                    fill="#fff" />
                            </g>
                            <g id="Groupe_125" data-name="Groupe 125">
                                <rect id="Rectangle_132" data-name="Rectangle 132" width="40"
                                    height="2" transform="translate(303.781 95.6)" fill="#fff" />
                            </g>
                            <g id="Groupe_126" data-name="Groupe 126">
                                <rect id="Rectangle_133" data-name="Rectangle 133" width="2"
                                    height="2" transform="translate(322.781 81.6)" fill="#60ac78" />
                            </g>
                        </g>
                    </svg>
                </div>
                <p class="mt-2 text-sm text-center">Nous existons depuis 1986</p>
            </a>
            <a href="#"
                class="flex flex-col items-center w-1/2 px-4 py-8 sm:w-1/3 lg:w-1/6 hover:bg-secondary-700">
                <div class="flex items-center justify-center h-20">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="64"
                        viewBox="0 0 60 64">
                        <g id="Groupe_197" data-name="Groupe 197"
                            transform="translate(-347.781 -118.879)">
                            <g id="Groupe_148" data-name="Groupe 148">
                                <g id="Groupe_128" data-name="Groupe 128">
                                    <path id="Tracé_81" data-name="Tracé 81"
                                        d="M384.488,150.586l-1.414-1.414,6.293-6.293h15.414a1,1,0,0,0,1-1v-20a1,1,0,0,0-1-1h-32a1,1,0,0,0-1,1v9h-2v-9a3,3,0,0,1,3-3h32a3,3,0,0,1,3,3v20a3,3,0,0,1-3,3H390.2Z"
                                        fill="#60ac78" />
                                </g>
                                <g id="Groupe_129" data-name="Groupe 129">
                                    <rect id="Rectangle_134" data-name="Rectangle 134" width="2"
                                        height="2" transform="translate(383.781 130.879)"
                                        fill="#60ac78" />
                                </g>
                                <g id="Groupe_130" data-name="Groupe 130">
                                    <rect id="Rectangle_135" data-name="Rectangle 135" width="2"
                                        height="2" transform="translate(387.781 130.879)"
                                        fill="#60ac78" />
                                </g>
                                <g id="Groupe_131" data-name="Groupe 131">
                                    <rect id="Rectangle_136" data-name="Rectangle 136" width="2"
                                        height="2" transform="translate(391.781 130.879)"
                                        fill="#60ac78" />
                                </g>
                                <g id="Groupe_147" data-name="Groupe 147">
                                    <g id="Groupe_144" data-name="Groupe 144">
                                        <g id="Groupe_132" data-name="Groupe 132">
                                            <path id="Tracé_82" data-name="Tracé 82" d="M377.781,162.879"
                                                fill="#fff" />
                                        </g>
                                        <g id="Groupe_133" data-name="Groupe 133">
                                            <path id="Tracé_83" data-name="Tracé 83"
                                                d="M349.781,182.879h-2v-7c0-8.01,4.445-9.7,9.152-11.489a36.658,36.658,0,0,0,5.352-2.379l.992,1.736a38.928,38.928,0,0,1-5.633,2.513c-4.735,1.8-7.863,2.988-7.863,9.619Z"
                                                fill="#fff" />
                                        </g>
                                        <g id="Groupe_134" data-name="Groupe 134">
                                            <path id="Tracé_84" data-name="Tracé 84"
                                                d="M393.781,182.879h-2v-7c0-6.631-3.128-7.82-7.864-9.619a38.918,38.918,0,0,1-5.632-2.513l.992-1.736a36.6,36.6,0,0,0,5.351,2.379c4.707,1.789,9.153,3.479,9.153,11.489Z"
                                                fill="#fff" />
                                        </g>
                                        <g id="Groupe_135" data-name="Groupe 135">
                                            <path id="Tracé_85" data-name="Tracé 85"
                                                d="M374.978,168.1l-4.2-2.1-4.2,2.1-5.089-5.09,2.813-4.22,6.474,1.079,6.473-1.079,2.814,4.22Zm-4.2-4.335,3.8,1.9,2.911-2.91-1.187-1.78-5.526.92-5.527-.92-1.186,1.78,2.91,2.91Z"
                                                fill="#fff" />
                                        </g>
                                        <g id="Groupe_136" data-name="Groupe 136">
                                            <rect id="Rectangle_137" data-name="Rectangle 137"
                                                width="2" height="4"
                                                transform="translate(374.781 155.879)" fill="#fff" />
                                        </g>
                                        <g id="Groupe_137" data-name="Groupe 137">
                                            <rect id="Rectangle_138" data-name="Rectangle 138"
                                                width="2" height="4"
                                                transform="translate(364.781 155.879)" fill="#fff" />
                                        </g>
                                        <g id="Groupe_138" data-name="Groupe 138">
                                            <rect id="Rectangle_139" data-name="Rectangle 139"
                                                width="2" height="2"
                                                transform="translate(369.781 172.879)" fill="#fff" />
                                        </g>
                                        <g id="Groupe_139" data-name="Groupe 139">
                                            <rect id="Rectangle_140" data-name="Rectangle 140"
                                                width="2" height="2"
                                                transform="translate(369.781 168.879)" fill="#fff" />
                                        </g>
                                        <g id="Groupe_143" data-name="Groupe 143">
                                            <g id="Groupe_140" data-name="Groupe 140">
                                                <path id="Tracé_86" data-name="Tracé 86"
                                                    d="M370.781,157.879a14.293,14.293,0,0,1-5.448-1.106l-.107-.062c-.138-.092-3.384-2.333-4.435-9.691l-.01-.141v-4h2v3.928c.861,5.917,3.2,7.96,3.518,8.212a12.108,12.108,0,0,0,8.961,0c.313-.25,2.66-2.3,3.521-8.213v-3.928h2l-.01,4.141c-1.052,7.358-4.3,9.6-4.436,9.691l-.107.062A14.289,14.289,0,0,1,370.781,157.879Z"
                                                    fill="#fff" />
                                            </g>
                                            <g id="Groupe_141" data-name="Groupe 141">
                                                <path id="Tracé_87" data-name="Tracé 87"
                                                    d="M380.781,142.879h-2c0-5.532-2.468-8-8-8s-8,2.468-8,8h-2c0-6.636,3.364-10,10-10S380.781,136.243,380.781,142.879Z"
                                                    fill="#fff" />
                                            </g>
                                            <g id="Groupe_142" data-name="Groupe 142">
                                                <path id="Tracé_88" data-name="Tracé 88"
                                                    d="M375.827,145.974l-10-4-3.6,1.8-.895-1.789,4.4-2.2,10,4,3.6-1.8.895,1.789Z"
                                                    fill="#fff" />
                                            </g>
                                        </g>
                                    </g>
                                    <g id="Groupe_145" data-name="Groupe 145">
                                        <rect id="Rectangle_141" data-name="Rectangle 141" width="2"
                                            height="6" transform="translate(355.781 176.879)"
                                            fill="#fff" />
                                    </g>
                                    <g id="Groupe_146" data-name="Groupe 146">
                                        <rect id="Rectangle_142" data-name="Rectangle 142" width="2"
                                            height="6" transform="translate(383.781 176.879)"
                                            fill="#fff" />
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <p class="mt-2 text-sm text-center">Un conseiller dédié</p>
            </a>
            <a href="#"
                class="flex flex-col items-center w-1/2 px-4 py-8 sm:w-1/3 lg:w-1/6 hover:bg-secondary-700">
                <div class="flex items-center justify-center h-20">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="50"
                        viewBox="0 0 64 50">
                        <g id="Groupe_198" data-name="Groupe 198" transform="translate(-444 -137.011)">
                            <g id="Groupe_96" data-name="Groupe 96">
                                <path id="Tracé_71" data-name="Tracé 71"
                                    d="M452,173.011h-4a4,4,0,0,1-4-4v-28a4,4,0,0,1,4-4h46a4,4,0,0,1,4,4v8h-2v-8a2,2,0,0,0-2-2H448a2,2,0,0,0-2,2v28a2,2,0,0,0,2,2h4Z"
                                    fill="#fff" />
                            </g>
                            <g id="Groupe_97" data-name="Groupe 97">
                                <path id="Tracé_72" data-name="Tracé 72"
                                    d="M504,187.011H458a4,4,0,0,1-4-4v-28a4,4,0,0,1,4-4h46a4,4,0,0,1,4,4v28A4,4,0,0,1,504,187.011Zm-46-34a2,2,0,0,0-2,2v28a2,2,0,0,0,2,2h46a2,2,0,0,0,2-2v-28a2,2,0,0,0-2-2Z"
                                    fill="#fff" />
                            </g>
                            <g id="Groupe_98" data-name="Groupe 98">
                                <path id="Tracé_73" data-name="Tracé 73"
                                    d="M476,177.011a8,8,0,1,1,5.712-13.6l-1.428,1.4a6,6,0,1,0,0,8.4l1.428,1.4A7.938,7.938,0,0,1,476,177.011Z"
                                    fill="#60ac78" />
                            </g>
                            <g id="Groupe_99" data-name="Groupe 99">
                                <path id="Tracé_74" data-name="Tracé 74"
                                    d="M486,177.011a8,8,0,1,1,8-8A8.009,8.009,0,0,1,486,177.011Zm0-14a6,6,0,1,0,6,6A6.006,6.006,0,0,0,486,163.011Z"
                                    fill="#60ac78" />
                            </g>
                            <g id="Groupe_100" data-name="Groupe 100">
                                <rect id="Rectangle_114" data-name="Rectangle 114" width="52"
                                    height="2" transform="translate(445 141.011)" fill="#fff" />
                            </g>
                            <g id="Groupe_101" data-name="Groupe 101">
                                <rect id="Rectangle_115" data-name="Rectangle 115" width="7"
                                    height="2" transform="translate(445 151.011)" fill="#fff" />
                            </g>
                            <g id="Groupe_102" data-name="Groupe 102">
                                <rect id="Rectangle_116" data-name="Rectangle 116" width="4"
                                    height="2" transform="translate(448 159.011)" fill="#60ac78" />
                            </g>
                            <g id="Groupe_103" data-name="Groupe 103">
                                <rect id="Rectangle_117" data-name="Rectangle 117" width="2"
                                    height="2" transform="translate(462 168.011)" fill="#60ac78" />
                            </g>
                            <g id="Groupe_104" data-name="Groupe 104">
                                <rect id="Rectangle_118" data-name="Rectangle 118" width="2"
                                    height="2" transform="translate(498 168.011)" fill="#60ac78" />
                            </g>
                            <g id="Groupe_105" data-name="Groupe 105">
                                <rect id="Rectangle_119" data-name="Rectangle 119" width="10"
                                    height="2" transform="translate(482 145.011)" fill="#60ac78" />
                            </g>
                            <g id="Groupe_106" data-name="Groupe 106">
                                <rect id="Rectangle_120" data-name="Rectangle 120" width="4"
                                    height="2" transform="translate(476 145.011)" fill="#60ac78" />
                            </g>
                        </g>
                    </svg>
                </div>
                <p class="mt-2 text-sm text-center">Paiement 100% sécurisé</p>
            </a>
            <a href="#"
                class="flex flex-col items-center w-1/2 px-4 py-8 sm:w-1/3 lg:w-1/6 hover:bg-secondary-700">
                <div class="flex items-center justify-center h-20">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="52"
                        viewBox="0 0 64 52">
                        <g id="Groupe_199" data-name="Groupe 199" transform="translate(-373.75 -56.129)">
                            <g id="Groupe_177" data-name="Groupe 177">
                                <path id="Tracé_107" data-name="Tracé 107"
                                    d="M415.75,97.129h-20v-2h18v-37h-38v37h4v2h-6v-41h42Z" fill="#fff" />
                            </g>
                            <g id="Groupe_178" data-name="Groupe 178">
                                <rect id="Rectangle_149" data-name="Rectangle 149" width="30"
                                    height="2" transform="translate(381.75 83.129)" fill="#fff" />
                            </g>
                            <g id="Groupe_179" data-name="Groupe 179">
                                <rect id="Rectangle_150" data-name="Rectangle 150" width="16"
                                    height="2" transform="translate(395.75 87.129)" fill="#fff" />
                            </g>
                            <g id="Groupe_180" data-name="Groupe 180">
                                <path id="Tracé_108" data-name="Tracé 108"
                                    d="M400.75,78.129a1,1,0,0,1-1-1v-3h-24v-2h25a1,1,0,0,1,1,1v1.955l6.371-4.955-6.371-4.955v1.955a1,1,0,0,1-1,1h-25v-2h24v-3a1,1,0,0,1,1.614-.789l9,7a1,1,0,0,1,0,1.578l-9,7A1,1,0,0,1,400.75,78.129Z"
                                    fill="#60ac78" />
                            </g>
                            <g id="Groupe_181" data-name="Groupe 181">
                                <path id="Tracé_109" data-name="Tracé 109"
                                    d="M379.75,91.129h-6v-8h6Zm-4-2h2v-4h-2Z" fill="#fff" />
                            </g>
                            <g id="Groupe_182" data-name="Groupe 182">
                                <path id="Tracé_110" data-name="Tracé 110"
                                    d="M437.75,93.129h-6v-6h6Zm-4-2h2v-2h-2Z" fill="#fff" />
                            </g>
                            <g id="Groupe_183" data-name="Groupe 183">
                                <path id="Tracé_111" data-name="Tracé 111"
                                    d="M387.75,108.129a7,7,0,1,1,7-7A7.008,7.008,0,0,1,387.75,108.129Zm0-12a5,5,0,1,0,5,5A5.006,5.006,0,0,0,387.75,96.129Z"
                                    fill="#fff" />
                            </g>
                            <g id="Groupe_184" data-name="Groupe 184">
                                <circle id="Ellipse_5" data-name="Ellipse 5" cx="2"
                                    cy="2" r="2" transform="translate(385.75 99.129)"
                                    fill="#fff" />
                            </g>
                            <g id="Groupe_185" data-name="Groupe 185">
                                <path id="Tracé_112" data-name="Tracé 112"
                                    d="M425.75,108.129a7,7,0,1,1,7-7A7.008,7.008,0,0,1,425.75,108.129Zm0-12a5,5,0,1,0,5,5A5.006,5.006,0,0,0,425.75,96.129Z"
                                    fill="#fff" />
                            </g>
                            <g id="Groupe_186" data-name="Groupe 186">
                                <circle id="Ellipse_6" data-name="Ellipse 6" cx="2"
                                    cy="2" r="2" transform="translate(423.75 99.129)"
                                    fill="#fff" />
                            </g>
                            <g id="Groupe_187" data-name="Groupe 187">
                                <path id="Tracé_113" data-name="Tracé 113"
                                    d="M437.75,97.129h-4v-2h2V84.423L427.2,71.129H415.75v24h2v2h-4v-28H428.3l9.454,14.706Z"
                                    fill="#fff" />
                            </g>
                            <g id="Groupe_188" data-name="Groupe 188">
                                <rect id="Rectangle_151" data-name="Rectangle 151" width="18"
                                    height="2" transform="translate(418.75 83.129)" fill="#fff" />
                            </g>
                            <g id="Groupe_189" data-name="Groupe 189">
                                <path id="Tracé_114" data-name="Tracé 114"
                                    d="M419.75,93.129h-2v-20h12v2h-10Z" fill="#fff" />
                            </g>
                            <g id="Groupe_190" data-name="Groupe 190">
                                <rect id="Rectangle_152" data-name="Rectangle 152" width="2"
                                    height="2" transform="translate(421.75 87.129)" fill="#fff" />
                            </g>
                            <g id="Groupe_191" data-name="Groupe 191">
                                <rect id="Rectangle_153" data-name="Rectangle 153" width="64"
                                    height="2" transform="translate(373.75 106.129)" fill="#fff" />
                            </g>
                            <g id="Groupe_192" data-name="Groupe 192">
                                <rect id="Rectangle_154" data-name="Rectangle 154" width="2"
                                    height="2" transform="translate(392.75 76.129)" fill="#fff" />
                            </g>
                            <g id="Groupe_193" data-name="Groupe 193">
                                <rect id="Rectangle_155" data-name="Rectangle 155" width="2"
                                    height="2" transform="translate(388.75 76.129)" fill="#fff" />
                            </g>
                            <g id="Groupe_194" data-name="Groupe 194">
                                <rect id="Rectangle_156" data-name="Rectangle 156" width="2"
                                    height="2" transform="translate(384.75 76.129)" fill="#fff" />
                            </g>
                        </g>
                    </svg>
                </div>
                <p class="mt-2 text-sm text-center">Livraison sous 24h, avant 13h</p>
            </a>
            <a href="#"
                class="flex flex-col items-center w-1/2 px-4 py-8 sm:w-1/3 lg:w-1/6 hover:bg-secondary-700">
                <div class="flex items-center justify-center h-20">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64"
                        viewBox="0 0 64 64">
                        <g id="Groupe_200" data-name="Groupe 200" transform="translate(-451.375 -46.129)">
                            <g id="Groupe_167" data-name="Groupe 167">
                                <g id="Groupe_161" data-name="Groupe 161">
                                    <path id="Tracé_97" data-name="Tracé 97"
                                        d="M457.375,110.129h-5a1,1,0,0,1-1-1v-50a1,1,0,0,1,1-1h34a1,1,0,0,1,1,1v13h-2v-12h-32v48h4Z"
                                        fill="#fff" />
                                </g>
                                <g id="Groupe_162" data-name="Groupe 162">
                                    <path id="Tracé_98" data-name="Tracé 98"
                                        d="M514.375,110.129h-54v-2h53v-33h2v34A1,1,0,0,1,514.375,110.129Z"
                                        fill="#2a3132" />
                                </g>
                                <g id="Groupe_163" data-name="Groupe 163">
                                    <path id="Tracé_99" data-name="Tracé 99"
                                        d="M477.375,70.129h2v-14a10,10,0,0,0-20,0v14h2v-14a8,8,0,0,1,16,0Z"
                                        fill="#60ac78" />
                                    <path id="Tracé_100" data-name="Tracé 100"
                                        d="M495.375,80.129v8a8,8,0,0,1-16,0v-8h-2v8a10,10,0,0,0,20,0v-8Z"
                                        fill="#60ac78" />
                                </g>
                                <g id="Groupe_164" data-name="Groupe 164">
                                    <rect id="Rectangle_145" data-name="Rectangle 145" width="5"
                                        height="2" transform="translate(452.375 96.129)"
                                        fill="#fff" />
                                </g>
                                <g id="Groupe_165" data-name="Groupe 165">
                                    <path id="Tracé_101" data-name="Tracé 101"
                                        d="M514.375,110.129h-54a1,1,0,0,1-1-1v-34a1,1,0,0,1,1-1h54a1,1,0,0,1,1,1v34A1,1,0,0,1,514.375,110.129Zm-53-2h52v-32h-52Z"
                                        fill="#fff" />
                                </g>
                                <g id="Groupe_166" data-name="Groupe 166">
                                    <rect id="Rectangle_146" data-name="Rectangle 146" width="54"
                                        height="2" transform="translate(460.375 102.129)"
                                        fill="#fff" />
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <p class="mt-2 text-sm text-center">+ de 15 000 références produits</p>
            </a>
            <a href="#"
                class="flex flex-col items-center w-1/2 px-4 py-8 sm:w-1/3 lg:w-1/6 hover:bg-secondary-700">
                <div class="flex items-center justify-center h-20">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="58"
                        viewBox="0 0 64 58">
                        <g id="Groupe_201" data-name="Groupe 201" transform="translate(-550.009 -89.879)">
                            <g id="Groupe_159" data-name="Groupe 159">
                                <g id="Groupe_150" data-name="Groupe 150">
                                    <path id="Tracé_89" data-name="Tracé 89"
                                        d="M554.009,122.879a4,4,0,1,1,4-4A4,4,0,0,1,554.009,122.879Zm0-6a2,2,0,1,0,2,2A2,2,0,0,0,554.009,116.879Z"
                                        fill="#fff" />
                                </g>
                                <g id="Groupe_151" data-name="Groupe 151">
                                    <path id="Tracé_90" data-name="Tracé 90"
                                        d="M610.009,122.879a4,4,0,1,1,4-4A4,4,0,0,1,610.009,122.879Zm0-6a2,2,0,1,0,2,2A2,2,0,0,0,610.009,116.879Z"
                                        fill="#fff" />
                                </g>
                                <g id="Groupe_152" data-name="Groupe 152">
                                    <path id="Tracé_91" data-name="Tracé 91"
                                        d="M605.009,103.879h-6v-2h5v-5h2v6A1,1,0,0,1,605.009,103.879Z"
                                        fill="#fff" />
                                </g>
                                <g id="Groupe_153" data-name="Groupe 153">
                                    <path id="Tracé_92" data-name="Tracé 92"
                                        d="M560.009,140.879h-2v-6a1,1,0,0,1,1-1h6v2h-5Z" fill="#fff" />
                                </g>
                                <g id="Groupe_154" data-name="Groupe 154">
                                    <path id="Tracé_93" data-name="Tracé 93"
                                        d="M582.009,137.879a18.935,18.935,0,0,1-2.673-.209,1,1,0,0,1-.819-.708l-1.134-3.846-3.192,2.456a1,1,0,0,1-1.079.09,18.95,18.95,0,0,1-4.315-3.146,1,1,0,0,1-.246-1.052l1.347-3.786-4.012.111a1,1,0,0,1-.926-.56,18.922,18.922,0,0,1-1.652-5.086,1,1,0,0,1,.42-1l3.311-2.268-3.311-2.269a1,1,0,0,1-.42-1,18.933,18.933,0,0,1,1.652-5.086,1.046,1.046,0,0,1,.926-.559l4.012.111-1.347-3.786a1,1,0,0,1,.246-1.053,18.946,18.946,0,0,1,4.315-3.145,1,1,0,0,1,1.079.089l3.192,2.456,1.134-3.845a1,1,0,0,1,.819-.708,16.82,16.82,0,0,1,5.346,0,1,1,0,0,1,.819.708l1.134,3.845,3.192-2.456a1,1,0,0,1,1.078-.089,18.974,18.974,0,0,1,4.316,3.145,1,1,0,0,1,.246,1.053l-1.347,3.786,4.011-.111a1.022,1.022,0,0,1,.926.559,18.9,18.9,0,0,1,1.653,5.086,1,1,0,0,1-.42,1l-3.312,2.269,3.312,2.268a1,1,0,0,1,.42,1,18.89,18.89,0,0,1-1.653,5.086.979.979,0,0,1-.926.56l-4.011-.111,1.347,3.786a1,1,0,0,1-.246,1.052,18.979,18.979,0,0,1-4.316,3.146,1,1,0,0,1-1.078-.09l-3.192-2.456-1.134,3.846a1,1,0,0,1-.819.708A18.957,18.957,0,0,1,582.009,137.879Zm-1.759-2.109a14.079,14.079,0,0,0,3.517,0l1.362-4.619a1,1,0,0,1,1.569-.511l3.827,2.946a16.972,16.972,0,0,0,2.838-2.07l-1.617-4.543a1,1,0,0,1,.133-.923,1.018,1.018,0,0,1,.837-.412l4.815.133a16.906,16.906,0,0,0,1.087-3.344l-3.974-2.723a1,1,0,0,1,0-1.65l3.974-2.723a16.894,16.894,0,0,0-1.087-3.345l-4.815.134a1.041,1.041,0,0,1-.837-.412,1,1,0,0,1-.133-.923l1.617-4.544a17.023,17.023,0,0,0-2.838-2.069l-3.827,2.945a1,1,0,0,1-1.569-.511l-1.362-4.619a14.176,14.176,0,0,0-3.517,0l-1.361,4.619a1,1,0,0,1-1.569.511l-3.828-2.945a16.975,16.975,0,0,0-2.837,2.069l1.616,4.544a1,1,0,0,1-.133.923,1.05,1.05,0,0,1-.837.412l-4.815-.134a16.89,16.89,0,0,0-1.087,3.345l3.975,2.723a1,1,0,0,1,0,1.65l-3.975,2.723a16.9,16.9,0,0,0,1.087,3.344l4.815-.133a1.027,1.027,0,0,1,.837.412,1,1,0,0,1,.133.923l-1.616,4.543a16.925,16.925,0,0,0,2.837,2.07l3.828-2.946a1,1,0,0,1,1.569.511Z"
                                        fill="#60ac78" />
                                </g>
                                <g id="Groupe_155" data-name="Groupe 155">
                                    <rect id="Rectangle_143" data-name="Rectangle 143" width="2"
                                        height="2" transform="translate(555.009 127.879)"
                                        fill="#fff" />
                                </g>
                                <g id="Groupe_156" data-name="Groupe 156">
                                    <rect id="Rectangle_144" data-name="Rectangle 144" width="2"
                                        height="2" transform="translate(607.009 107.879)"
                                        fill="#fff" />
                                </g>
                                <g id="Groupe_157" data-name="Groupe 157">
                                    <path id="Tracé_94" data-name="Tracé 94"
                                        d="M582.009,147.879a29.047,29.047,0,0,1-23.8-12.426l1.641-1.145a27,27,0,0,0,49.02-12.667l1.99.2A28.9,28.9,0,0,1,582.009,147.879Z"
                                        fill="#fff" />
                                </g>
                                <g id="Groupe_158" data-name="Groupe 158">
                                    <path id="Tracé_95" data-name="Tracé 95"
                                        d="M555.162,115.991l-1.99-.211a29,29,0,0,1,52.638-13.475l-1.641,1.144a27,27,0,0,0-49.007,12.542Z"
                                        fill="#fff" />
                                </g>
                                <path id="Tracé_96" data-name="Tracé 96"
                                    d="M581.949,124.27a4.724,4.724,0,0,1-4.317-3.37h4.317v-1.347H577.33a5.558,5.558,0,0,1,0-1.348h4.619v-1.348h-4.317a4.725,4.725,0,0,1,4.317-3.369,4.621,4.621,0,0,1,4.175,3l1.043-.6a5.776,5.776,0,0,0-5.218-3.743,6,6,0,0,0-5.556,4.717H574.96v1.348h1.194c-.019.222-.029.446-.029.674s.01.452.029.674H574.96V120.9h1.433a6,6,0,0,0,5.556,4.718,5.777,5.777,0,0,0,5.218-3.744l-1.043-.6A4.622,4.622,0,0,1,581.949,124.27Z"
                                    fill="#fff" />
                            </g>
                        </g>
                    </svg>
                </div>
                <p class="mt-2 text-sm text-center">Des prix personnalisés</p>
            </a>
        </div>
    </div>
</div>

<div class="relative py-8 mb-16 bg-secondary-700">
    <div class="mx-auto text-white max-w-big">
        <div class="grid grid-cols-none gap-8 lg:grid-cols-3">
            <div class="px-16 py-8 shadow-xl bg-secondary-600">
                <svg class="w-16 h-16 m-auto transition-transform transform text-primary-500 featured-icon-translate-top"
                    id="Groupe_331" data-name="Groupe 331" xmlns="http://www.w3.org/2000/svg"
                    width="68.525" height="72.875" viewBox="0 0 68.525 72.875">
                    <rect id="Rectangle_231" data-name="Rectangle 231" width="2.687" height="70.005"
                        transform="translate(30.903 1.435)" fill="#fff" />
                    <path id="Tracé_231" data-name="Tracé 231"
                        d="M2.686,59.669V13.2L32.211,2.871l18.846,7.667V62.332L32.211,70.005ZM32.282,0,0,11.3V61.573l32.282,11.3,21.462-8.734V8.729Z"
                        fill="#fff" />
                    <rect id="Rectangle_232" data-name="Rectangle 232" width="3" height="16"
                        transform="translate(5 15.256)" fill="#fff" />
                    <rect id="Rectangle_233" data-name="Rectangle 233" width="3" height="6"
                        transform="translate(5 34.256)" fill="#fff" />
                    <rect id="Rectangle_234" data-name="Rectangle 234" width="2" height="3"
                        transform="translate(46 34.256)" fill="#68ba8c" />
                    <rect id="Rectangle_235" data-name="Rectangle 235" width="2.689" height="12.382"
                        transform="translate(36.094 11.168) rotate(-67.86)" fill="#68ba8c" />
                    <rect id="Rectangle_236" data-name="Rectangle 236" width="2.686" height="12.382"
                        transform="translate(36.095 17.868) rotate(-67.855)" fill="#68ba8c" />
                    <rect id="Rectangle_237" data-name="Rectangle 237" width="2.689" height="12.382"
                        transform="translate(36.094 24.588) rotate(-67.86)" fill="#68ba8c" />
                    <rect id="Rectangle_238" data-name="Rectangle 238" width="3" height="3"
                        transform="translate(60 42.256)" fill="#68ba8c" />
                    <path id="Tracé_232" data-name="Tracé 232"
                        d="M41.8,16.552l9.673,3.934v31.64l-9.649,3.929,1.013,2.488,11.324-4.609V18.677L42.814,14.061Z"
                        transform="translate(14.363 4.832)" fill="#fff" />
                    <rect id="Rectangle_239" data-name="Rectangle 239" width="2.689" height="6.676"
                        transform="translate(56.159 29.443) rotate(-67.865)" fill="#68ba8c" />
                    <rect id="Rectangle_240" data-name="Rectangle 240" width="2.689" height="6.653"
                        transform="matrix(0.379, -0.925, 0.925, 0.379, 56.184, 36.137)" fill="#68ba8c" />
                </svg>
                <h4 class="mt-2 font-semibold text-center">NAS</h4>
                <div class="grid grid-cols-2 gap-8 ">
                    <ul class="mx-auto mt-4 space-y-1">

                        <li>
                            <a href="https://sqp.fr/distributeur-nas-reconditionnes"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                NAS reconditionnés
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-accessoires-nas"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                Accessoires NAS
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-contrat-de-service-nas"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                Contrat de service NAS
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-unites-dextension"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                Unités d&#039;extension
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-nas-12-disques"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                NAS 12 disques
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-nas-4-disques"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                NAS 4 disques
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-nas-8-disques"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                NAS 8 disques
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-nas-1-disque"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                NAS 1 disque
                            </a>
                        </li>
                    </ul>
                    <ul class="mx-auto mt-4 space-y-1">

                        <li>
                            <a href="https://sqp.fr/distributeur-nas-2-disques"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                NAS 2 disques
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-nas-5-disques"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                NAS 5 disques
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-nas-6-disques"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                NAS 6 disques
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-nas-16-disques"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                NAS 16 disques
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-nas-24-disques"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                NAS 24 disques
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-nas-9-disques"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                NAS 9 Disques
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-nas-3-disques"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                NAS 3 Disques
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="px-16 py-8 shadow-xl bg-secondary-600">
                <svg class="w-16 h-16 m-auto transition-transform transform text-primary-500 featured-icon-translate-top"
                    id="Groupe_333" data-name="Groupe 333" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="49.979" height="68.153"
                    viewBox="0 0 49.979 68.153">
                    <defs>
                        <clipPath id="clip-path">
                            <rect id="Rectangle_253" data-name="Rectangle 253" width="49.979"
                                height="68.153" fill="#fff" />
                        </clipPath>
                    </defs>
                    <g id="Groupe_332" data-name="Groupe 332" clip-path="url(#clip-path)">
                        <path id="Tracé_233" data-name="Tracé 233"
                            d="M2.272,2.272H47.707v63.61H2.272ZM48.843,68.153a1.136,1.136,0,0,0,1.136-1.136V1.136A1.136,1.136,0,0,0,48.843,0H1.136A1.136,1.136,0,0,0,0,1.136V67.017a1.136,1.136,0,0,0,1.136,1.136Z"
                            fill="#fff" />
                        <path id="Tracé_234" data-name="Tracé 234"
                            d="M35.646,51.548A17.038,17.038,0,1,1,52.684,34.51,17.038,17.038,0,0,1,35.646,51.548m.518,13.631H28.831V62.37L44.442,51.693l-.006-.008c.237-.123.474-.247.705-.378Zm-.518,6.815H17.472V58.364h4.544v3.408a1.136,1.136,0,0,0,1.136,1.136h3.408v3.408a1.136,1.136,0,0,0,1.136,1.136h7.951ZM54.956,34.51a19.31,19.31,0,1,0-19.31,19.31c.605,0,1.2-.036,1.794-.091l-10.1,6.906H24.287V57.228a1.136,1.136,0,0,0-1.136-1.136H16.336A1.136,1.136,0,0,0,15.2,57.228v15.9a1.136,1.136,0,0,0,1.136,1.136H36.782a1.136,1.136,0,0,0,1.136-1.136V66.656S50.412,47.174,50.4,46.939A19.215,19.215,0,0,0,54.956,34.51"
                            transform="translate(-10.656 -10.656)" fill="#68ba8c" />
                        <path id="Tracé_235" data-name="Tracé 235"
                            d="M20.685,17.777,19.322,15.96a24.058,24.058,0,0,0-6.991,8.346l2.028,1.022a21.8,21.8,0,0,1,6.327-7.551"
                            transform="translate(-8.645 -11.189)" fill="#fff" />
                        <path id="Tracé_236" data-name="Tracé 236"
                            d="M54.295,60.718A10.223,10.223,0,1,1,64.518,50.495,10.223,10.223,0,0,1,54.295,60.718m0-22.718A12.495,12.495,0,1,0,66.789,50.495,12.495,12.495,0,0,0,54.295,38"
                            transform="translate(-29.305 -26.641)" fill="#fff" />
                        <path id="Tracé_237" data-name="Tracé 237"
                            d="M75.608,72.944a1.136,1.136,0,1,1,1.136-1.136,1.136,1.136,0,0,1-1.136,1.136m0-4.544a3.408,3.408,0,1,0,3.408,3.408A3.408,3.408,0,0,0,75.608,68.4"
                            transform="translate(-50.618 -47.954)" fill="#fff" />
                        <rect id="Rectangle_241" data-name="Rectangle 241" width="2.272" height="2.272"
                            transform="translate(23.854 15.902)" fill="#fff" />
                        <rect id="Rectangle_242" data-name="Rectangle 242" width="2.272" height="2.272"
                            transform="translate(30.669 22.718)" fill="#fff" />
                        <rect id="Rectangle_243" data-name="Rectangle 243" width="2.272" height="2.272"
                            transform="translate(23.854 29.533)" fill="#fff" />
                        <rect id="Rectangle_244" data-name="Rectangle 244" width="2.272" height="2.272"
                            transform="translate(17.038 22.718)" fill="#fff" />
                        <rect id="Rectangle_245" data-name="Rectangle 245" width="2.272" height="2.272"
                            transform="translate(19.31 18.174)" fill="#fff" />
                        <rect id="Rectangle_246" data-name="Rectangle 246" width="2.272" height="2.272"
                            transform="translate(28.397 18.174)" fill="#fff" />
                        <rect id="Rectangle_247" data-name="Rectangle 247" width="2.272" height="2.272"
                            transform="translate(19.31 27.261)" fill="#fff" />
                        <rect id="Rectangle_248" data-name="Rectangle 248" width="2.272" height="2.272"
                            transform="translate(28.397 27.261)" fill="#fff" />
                        <rect id="Rectangle_249" data-name="Rectangle 249" width="2.272" height="2.272"
                            transform="translate(4.544 4.544)" fill="#fff" />
                        <rect id="Rectangle_250" data-name="Rectangle 250" width="2.272" height="2.272"
                            transform="translate(43.164 4.544)" fill="#fff" />
                        <rect id="Rectangle_251" data-name="Rectangle 251" width="2.272" height="2.272"
                            transform="translate(4.544 40.892)" fill="#fff" />
                        <rect id="Rectangle_252" data-name="Rectangle 252" width="2.272" height="2.272"
                            transform="translate(43.164 40.892)" fill="#fff" />
                        <path id="Tracé_238" data-name="Tracé 238"
                            d="M107.887,194.544h-6.815v-2.272h6.815ZM109.023,190H99.936a1.136,1.136,0,0,0-1.136,1.136v4.544a1.136,1.136,0,0,0,1.136,1.136h9.087a1.136,1.136,0,0,0,1.136-1.136v-4.544A1.136,1.136,0,0,0,109.023,190"
                            transform="translate(-69.267 -133.206)" fill="#fff" />
                        <path id="Tracé_239" data-name="Tracé 239"
                            d="M32.672,182.4H30.4v3.408a1.136,1.136,0,0,0,1.136,1.136h3.408v-2.272H32.672Z"
                            transform="translate(-21.313 -127.877)" fill="#fff" />
                    </g>
                </svg>
                <h4 class="mt-2 font-semibold text-center">Stockage</h4>
                <div class="grid grid-cols-2 gap-8 ">
                    <ul class="mx-auto mt-4 space-y-1">

                        <li>
                            <a href="https://sqp.fr/distributeur-externe-thunderbolt-2"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                Externe Thunderbolt
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-accessoires-tours"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                Accessoires tours
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-boitiers-vides-2"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                Boitiers vides
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-externe-usb-c"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                Externe USB-C
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-boitiers-vides"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                Boitiers vides
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-externe-crypte"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                Externe crypté
                            </a>
                        </li>
                    </ul>
                    <ul class="mx-auto mt-4 space-y-1">

                        <li>
                            <a href="https://sqp.fr/distributeur-externe-thunderbolt"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                Externe Thunderbolt
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-externe-usb"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                Externe USB
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-accessoires-disque-externe"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                Accessoires disque externe
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-contrat-de-service"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                Contrat de service
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-externe-usb-c-2"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                Externe USB C
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="px-16 py-8 shadow-xl bg-secondary-600">
                <svg class="w-16 h-16 m-auto transition-transform transform text-primary-500 featured-icon-translate-top"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="69" height="69" viewBox="0 0 69 69">
                    <defs>
                        <clipPath id="clip-path">
                            <rect id="Rectangle_228" data-name="Rectangle 228" width="69"
                                height="69" transform="translate(0 -0.056)" fill="#fff" />
                        </clipPath>
                    </defs>
                    <g id="Groupe_329" data-name="Groupe 329" transform="translate(0 0.112)">
                        <g id="Groupe_324" data-name="Groupe 324" transform="translate(0 -0.056)">
                            <g id="Groupe_323" data-name="Groupe 323" clip-path="url(#clip-path)">
                                <path id="Tracé_221" data-name="Tracé 221"
                                    d="M20.524,91.178a1.009,1.009,0,1,1-1.009,1.009,1.009,1.009,0,0,1,1.009-1.009"
                                    transform="translate(-6.333 -29.543)" fill="#fff" />
                            </g>
                        </g>
                        <g id="Groupe_326" data-name="Groupe 326" transform="translate(0 -0.056)">
                            <g id="Groupe_325" data-name="Groupe 325" clip-path="url(#clip-path)">
                                <path id="Tracé_222" data-name="Tracé 222"
                                    d="M92.187,19.515a1.009,1.009,0,1,1-1.009,1.009,1.009,1.009,0,0,1,1.009-1.009"
                                    transform="translate(-29.591 -6.286)" fill="#fff" />
                                <path id="Tracé_223" data-name="Tracé 223"
                                    d="M19.529,58.573l1.336,1.336-1.26,1.26-1.336-1.336Zm10.824-8.152-1.336-1.336,1.26-1.259,1.336,1.335Zm-2.763.091,1.336,1.336-1.26,1.26L26.33,51.772ZM24.9,53.2l1.336,1.336-1.26,1.26-1.336-1.336Zm-2.687,2.687,1.336,1.336-1.26,1.26-1.336-1.336ZM59.833,18.269l1.335,1.336L59.91,20.864l-1.336-1.335Zm-2.687,2.687,1.335,1.336-1.259,1.26-1.336-1.336Zm-2.687,2.687,1.335,1.335-1.26,1.26L53.2,24.9ZM51.772,26.33l1.336,1.336-1.26,1.259-1.336-1.336Zm-2.688,2.687,1.337,1.336-1.26,1.259-1.336-1.336ZM46.4,31.7l1.336,1.336L46.475,34.3l-1.336-1.335ZM43.712,34.39l1.336,1.336-1.26,1.26L42.452,35.65Zm-2.687,2.688,1.336,1.336L41.1,39.673l-1.336-1.335Zm-2.687,2.687L39.674,41.1l-1.26,1.26-1.336-1.336Zm-2.525,5.2-1.336-1.336,1.174-1.174,1.336,1.336ZM3.86,59.107a1.3,1.3,0,0,0,1.846,0l1.847-1.847,1.281,1.28L6.986,60.387a1.3,1.3,0,0,0,0,1.846l6.282,6.282a1.307,1.307,0,0,0,1.846,0L33.624,50a1.19,1.19,0,0,0,0-1.685L30.9,45.594a.991.991,0,0,1-.072-1.35.951.951,0,0,1,1.378-.034l2.765,2.765a1.193,1.193,0,0,0,1.685,0l31.86-31.86a1.307,1.307,0,0,0,0-1.846L66.744,11.5a1.009,1.009,0,1,0-1.427,1.427l1.267,1.268L62.6,18.178l-1.921-1.921a1.193,1.193,0,0,0-1.685,0L32.966,42.282a2.962,2.962,0,0,0-4.026,4.026L16.258,58.99a1.191,1.191,0,0,0,0,1.685l1.921,1.92-3.987,3.987L8.918,61.311l1.847-1.847a1.307,1.307,0,0,0,0-1.846L8.476,55.329a1.307,1.307,0,0,0-1.846,0L4.783,57.175,2.314,54.706,4.16,52.859a1.307,1.307,0,0,0,0-1.846L3,49.856,49.856,3,51.013,4.16a1.3,1.3,0,0,0,1.846,0l1.847-1.847,2.47,2.47L55.329,6.63a1.307,1.307,0,0,0,0,1.846l2.288,2.288a1.3,1.3,0,0,0,1.846,0l1.847-1.847.572.572A1.009,1.009,0,1,0,63.31,8.062L62.233,6.986a1.3,1.3,0,0,0-1.845,0L58.541,8.833l-1.28-1.28,1.847-1.847a1.305,1.305,0,0,0,0-1.847L55.629.382a1.308,1.308,0,0,0-1.847,0L51.936,2.228,50.779,1.071a1.307,1.307,0,0,0-1.846,0L1.071,48.933a1.307,1.307,0,0,0,0,1.846l1.157,1.157L.382,53.783a1.307,1.307,0,0,0,0,1.846Z"
                                    transform="translate(0 0.048)" fill="#fff" />
                            </g>
                        </g>
                        <g id="Groupe_328" data-name="Groupe 328" transform="translate(0 -0.056)">
                            <g id="Groupe_327" data-name="Groupe 327" clip-path="url(#clip-path)">
                                <path id="Tracé_224" data-name="Tracé 224"
                                    d="M40.337,42.4l4.139,4.139L41.619,49.4,37.48,45.259Zm2.318,8.813,3.639-3.639a1.464,1.464,0,0,0,0-2.072l-4.921-4.921a1.464,1.464,0,0,0-2.072,0l-3.639,3.639a1.466,1.466,0,0,0,0,2.072l4.921,4.921a1.464,1.464,0,0,0,2.072,0"
                                    transform="translate(-11.435 -12.984)" fill="#68ba8c" />
                                <path id="Tracé_225" data-name="Tracé 225"
                                    d="M29.134,64.515a1.465,1.465,0,0,0,0-2.071l-6.563-6.563a1.467,1.467,0,0,0-2.072,0L14.077,62.3A1.009,1.009,0,1,0,15.5,63.731L21.535,57.7l5.78,5.781L17.162,73.633l-5.78-5.781.823-.823A1.009,1.009,0,0,0,10.778,65.6L9.563,66.817a1.467,1.467,0,0,0,0,2.072l6.563,6.562a1.467,1.467,0,0,0,2.072,0Z"
                                    transform="translate(-2.965 -17.949)" fill="#68ba8c" />
                                <path id="Tracé_226" data-name="Tracé 226"
                                    d="M50.932,40.867a1.464,1.464,0,0,0,2.072,0l3.639-3.639a1.465,1.465,0,0,0,0-2.072l-4.921-4.921a1.466,1.466,0,0,0-2.072,0l-3.639,3.639a1.465,1.465,0,0,0,0,2.072l.922.921A1.009,1.009,0,0,0,48.36,35.44l-.53-.53,2.856-2.857,4.139,4.139-2.856,2.856-.263-.263a1.009,1.009,0,1,0-1.427,1.427Z"
                                    transform="translate(-14.793 -9.626)" fill="#68ba8c" />
                                <path id="Tracé_227" data-name="Tracé 227"
                                    d="M61.036,21.7l4.139,4.139L62.318,28.7,58.179,24.56Zm2.318,8.813,3.639-3.639a1.464,1.464,0,0,0,0-2.072l-4.921-4.921a1.464,1.464,0,0,0-2.072,0l-3.639,3.639a1.465,1.465,0,0,0,0,2.072l4.921,4.921a1.464,1.464,0,0,0,2.072,0"
                                    transform="translate(-18.152 -6.267)" fill="#68ba8c" />
                                <path id="Tracé_228" data-name="Tracé 228"
                                    d="M71.385,11.355l4.139,4.139-2.856,2.856-4.139-4.139ZM73.7,20.168l3.639-3.639a1.464,1.464,0,0,0,0-2.072L72.421,9.537a1.464,1.464,0,0,0-2.072,0L66.71,13.175a1.465,1.465,0,0,0,0,2.072l4.921,4.921a1.465,1.465,0,0,0,2.072,0"
                                    transform="translate(-21.511 -2.908)" fill="#68ba8c" />
                                <path id="Tracé_229" data-name="Tracé 229"
                                    d="M25.712,68.491l2.253-2.254a1.009,1.009,0,0,0-1.427-1.427l-2.253,2.253a1.009,1.009,0,1,0,1.427,1.427"
                                    transform="translate(-7.785 -20.89)" fill="#fff" />
                                <path id="Tracé_230" data-name="Tracé 230"
                                    d="M19.92,74.787l1.205-1.205A1.009,1.009,0,1,0,19.7,72.155L18.493,73.36a1.009,1.009,0,0,0,1.427,1.427"
                                    transform="translate(-5.906 -23.274)" fill="#fff" />
                            </g>
                        </g>
                    </g>
                </svg>
                <h4 class="mt-2 font-semibold text-center">Mémoire</h4>
                <div class="grid grid-cols-2 gap-8 ">
                    <ul class="mx-auto mt-4 space-y-1">

                        <li>
                            <a href="https://sqp.fr/distributeur-ram-pour-sony"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                RAM pour Sony
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-ram-pour-autre"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                RAM pour Autre
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-ram-pour-nec"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                RAM pour NEC
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-ram-pour-gateway"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                RAM pour Gateway
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-ram-pour-intel"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                RAM pour Intel
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-ram-pour-siemens"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                RAM pour Siemens
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-ram-pour-lexmark"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                RAM pour Lexmark
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-ram-pour-toshiba"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                RAM pour Toshiba
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-ram-pour-sun"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                RAM pour Sun
                            </a>
                        </li>
                    </ul>
                    <ul class="mx-auto mt-4 space-y-1">

                        <li>
                            <a href="https://sqp.fr/distributeur-ram-pour-acer"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                RAM pour Acer
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-ram-pour-samsung"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                RAM pour Samsung
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-ram-pour-lenovo"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                RAM pour Lenovo
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-ram-pour-ibm"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                RAM pour IBM
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-ram-pour-hp"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                RAM pour HP
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-ram-pour-fujitsu"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                RAM pour Fujitsu
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-ram-pour-dell"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                RAM pour Dell
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-ram-pour-asus"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                RAM pour Asus
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-ram-pour-apple"
                                class="text-sm text-gray-300 hover:text-white whitespace-nowra">
                                RAM pour Apple
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>

<footer class="bg-secondary-900">
    <div class="px-4 py-12 mx-auto max-w-big sm:px-6 lg:py-16 lg:px-8">
        <div class="flex flex-col items-center justify-center w-full mb-16">
            <a class="mb-4" href="https://sqp.fr/">
                <span class="sr-only">SQP</span>
                <img class="w-auto h-8 " src="https://sqp.fr/web/img/logo_primary.png" alt="">
            </a>
            <h3 class="text-sm font-bold text-white uppercase">
                leader français de la mémoire spécifique, depuis 1986
            </h3>
        </div>
        <div class="grid grid-cols-6 pb-8 lg:grid-cols-12 xl:gap-12">
            <div class="order-first col-span-3 mb-16 xl:col-span-2">
                <h3 class="text-sm font-semibold tracking-wider uppercase text-primary-500">
                    L&#039;entreprise
                </h3>
                <ul class="mt-4 space-y-2">

                    <li>
                        <a href="https://sqp.fr/notre-societe"
                            class="text-base text-gray-300 hover:text-white whitespace-nowra">
                            Notre société
                        </a>
                    </li>
                    <li>
                        <a href="https://sqp.fr/votre-commande"
                            class="text-base text-gray-300 hover:text-white whitespace-nowra">
                            Votre commande
                        </a>
                    </li>
                    <li>
                        <a href="https://sqp.fr/frais-de-port-et-taxes"
                            class="text-base text-gray-300 hover:text-white whitespace-nowra">
                            Frais de port et taxes
                        </a>
                    </li>
                    <li>
                        <a href="https://sqp.fr/partenariats-et-sponsoring"
                            class="text-base text-gray-300 hover:text-white whitespace-nowra">
                            Partenariats et sponsoring
                        </a>
                    </li>
                    <li>
                        <a href="https://sqp.fr/reception-de-votre-commande"
                            class="text-base text-gray-300 hover:text-white whitespace-nowra">
                            Réception de votre commande
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white whitespace-nowra">
                            Service après vente
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white whitespace-nowra">
                            Un conseillé dédié
                        </a>
                    </li>
                    <li>
                        <a href="https://sqp.fr/livraison"
                            class="text-base text-gray-300 hover:text-white whitespace-nowra">
                            Livraison
                        </a>
                    </li>
                    <li>
                        <a href="https://sqp.fr/nos-catalogues"
                            class="text-base text-gray-300 hover:text-white whitespace-nowra">
                            Nos catalogues
                        </a>
                    </li>
                    <li>
                        <a href="https://sqp.fr/contrats-de-service"
                            class="text-base text-gray-300 hover:text-white whitespace-nowra">
                            Contrats de service
                        </a>
                    </li>
                    <li>
                        <a href="https://sqp.fr/ouverture-de-compte"
                            class="text-base text-gray-300 hover:text-white whitespace-nowra">
                            Ouverture de compte
                        </a>
                    </li>
                    <li>
                        <a href="https://sqp.fr/paiement"
                            class="text-base text-gray-300 hover:text-white whitespace-nowra">
                            Paiement
                        </a>
                    </li>
                    <li>
                        <a href="https://sqp.fr/garanties"
                            class="text-base text-gray-300 hover:text-white whitespace-nowra">
                            Garanties
                        </a>
                    </li>
                    <li>
                        <a href="https://sqp.fr/conditions-generales-de-vente"
                            class="text-base text-gray-300 hover:text-white whitespace-nowra">
                            Conditions générales de vente
                        </a>
                    </li>
                    <li>
                        <a href="https://sqp.fr/securite-et-droit-des-donnees"
                            class="text-base text-gray-300 hover:text-white whitespace-nowra">
                            Sécurité et droit des données
                        </a>
                    </li>
                </ul>
            </div>

            <div class="order-1 col-span-3 xl:col-span-2 lg:order-2">
                <div class="">
                    <h3 class="text-sm font-semibold tracking-wider uppercase text-primary-500">
                        Guides d&#039;achat
                    </h3>
                    <ul class="mt-4 space-y-2">

                        <li>
                            <a href="https://sqp.fr/guide-dachat-nas"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                Guide d&#039;achat NAS
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/guide-dachat-san"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                Guide d&#039;achat SAN
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/guide-dachat-hdd-ssd"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                Guide d&#039;achat HDD / SSD
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/guide-dachat-memoire-ram"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                Guide d&#039;achat Mémoire RAM
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/guide-dachat-memoire-flash"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                Guide d&#039;achat Mémoire Flash
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="">
                    <h3 class="mt-16 text-sm font-semibold tracking-wider uppercase text-primary-500">
                        Infos et compte
                    </h3>
                    <ul class="mt-4 space-y-2">
                        <li>
                            <a href="{{ route("connexion") }}"
                                class="flex text-base text-gray-300 transition-colors hover:text-tertiary-500">
                                <svg class="w-6 h-6 mr-4 text-tertiary-500" transform="scale(1.2,1.2)"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.727 31.727">
                                    <path fill="currentColor"
                                        d="M27.08 4.646A15.863 15.863 0 0 0 4.646 27.08 15.863 15.863 0 0 0 27.08 4.646ZM7.953 27.413a8.033 8.033 0 0 1 15.821 0 13.974 13.974 0 0 1-15.821 0Zm2.867-13.541a5.044 5.044 0 1 1 5.044 5.044 5.05 5.05 0 0 1-5.045-5.044Zm14.564 12.252a9.907 9.907 0 0 0-5.759-6.466 6.9 6.9 0 1 0-7.523 0 9.906 9.906 0 0 0-5.759 6.466 14 14 0 1 1 19.042 0Zm0 0" />
                                </svg> Mon compte
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/espace-client/sav"
                                class="flex text-base text-gray-300 transition-colors hover:text-tertiary-500">
                                <svg class="w-6 h-6 mr-4 text-tertiary-500" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M23.27 19.743l-11.946-11.945c-.557-.557-.842-1.331-.783-2.115.115-1.485-.395-3.009-1.529-4.146-1.03-1.028-2.376-1.537-3.723-1.537-.507 0-1.015.072-1.505.216l3.17 3.17c.344 1.589-1.959 3.918-3.567 3.567l-3.169-3.17c-.145.492-.218 1-.218 1.509 0 1.347.51 2.691 1.538 3.721 1.135 1.136 2.66 1.646 4.146 1.53.783-.06 1.557.226 2.113.783l11.946 11.944c.468.468 1.103.73 1.763.73 1.368 0 2.494-1.108 2.494-2.494 0-.638-.244-1.276-.73-1.763zm-1.77 2.757c-.553 0-1-.448-1-1s.447-1 1-1 1 .448 1 1-.447 1-1 1zm-7.935-15.289l5.327-5.318c.584-.584 1.348-.877 2.113-.877.764 0 1.529.292 2.113.877.589.587.882 1.357.882 2.125 0 .764-.291 1.528-.873 2.11l-5.326 5.318-1.039-1.039 5.067-5.059c.169-.168.167-.441-.001-.609-.169-.169-.441-.17-.61-.001l-5.068 5.058-.89-.89 5.067-5.059c.169-.169.168-.441 0-.611-.169-.168-.443-.17-.611 0l-5.067 5.058-1.084-1.083zm-3.53 9.18l-5.227 5.185c-.227.229-.423.488-.574.774l-.301.58-2.1 1.07-.833-.834 1.025-2.146.58-.302c.286-.15.561-.329.79-.558l5.227-5.185 1.413 1.416z" />
                                </svg> SAV
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex text-base text-gray-300 transition-colors hover:text-tertiary-500">
                                <svg class="w-6 h-6 mr-4 text-tertiary-500" transform="scale(1.1,1.1)"
                                    class="w-8 h-8 fill-current xl:mr-2" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 32.75 30.964">
                                    <g fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        data-name="Groupe 29">
                                        <path stroke="currentColor" stroke-width="1.5"
                                            d="M12.105 17.548H4.094" data-name="Ligne 7" />
                                        <path stroke="currentColor" stroke-width="1.5"
                                            d="M4.206 21.677h9.963" data-name="Ligne 8" />
                                        <path stroke="currentColor" stroke-width="1.5"
                                            d="M18.298 22.255v4.583h-6.823l-.97 1.683-.981 1.693-.97-1.693-.97-1.683H.75V12.304h9.435"
                                            data-name="Tracé 15" />
                                        <g data-name="Tracé 16">
                                            <path
                                                d="m31.74 19.324.718 1.987a.5.5 0 0 1-.554.658l-2.084-.374-2.622-.475a11.351 11.351 0 1 1 3.84-3.757Z" />
                                            <path fill="currentColor"
                                                d="M21.3952246 21.20910645c1.77508546 0 3.51593019-.47683716 5.03448487-1.37896729.31072998-.18466187.67779541-.25082397 1.03338623-.18640137l2.9909668.54098511-.12860107-.35565186-.70196534-1.96124267c-.1541748-.43084717-.10327148-.90853882.13830567-1.2972107 1.20788574-1.94363403 1.69482422-4.18902587 1.40814209-6.49331664-.25482178-2.04724122-1.1965332-4.01455689-2.65161133-5.53952027-1.45599365-1.52597046-3.3741455-2.55349731-5.40093994-2.893219-.5734253-.09606933-1.15289307-.14474487-1.72229004-.14474487-2.90020752 0-5.63983154 1.26733399-7.51635742 3.47702027-.91479492 1.07717895-1.57434082 2.30883789-1.96044922 3.6607666-.40551758 1.41986084-.48596192 2.90203857-.23913574 4.40548706.32995605 2.01043701 1.33642578 3.9194336 2.83410644 5.37530518 1.49676514 1.4550476 3.43536377 2.41098022 5.4584961 2.6916809.47399902.06570435.95294189.09902955 1.4234619.09902955m0 1.5c-.53533935 0-1.07922362-.0369873-1.62945556-.11325074-4.82879638-.66995239-8.77716064-4.49853515-9.5668335-9.30984497-1.28009033-7.79754638 5.364563-14.42773437 13.16625977-13.1208496 4.8526001.81341552 8.68530274 4.84329223 9.29327393 9.72683715.34375 2.76330567-.3024292 5.34597778-1.62268067 7.47036743l.70196534 1.96124268.71844482 1.98706055c.13000488.36032104-.1786499.72573852-.55432129.65753173l-2.08416748-.37365722-2.6218872-.474823c-1.70288087 1.01165771-3.68450928 1.58938599-5.80059815 1.58938599Z" />
                                        </g>
                                        <g stroke="currentColor" stroke-width="1.5"
                                            data-name="Rectangle 54" transform="translate(16.234 7.226)">
                                            <rect width="8.258" height="8.258" stroke="none"
                                                rx=".906" />
                                            <rect width="6.758" height="6.758" x=".75"
                                                y=".75" rx=".156" />
                                        </g>
                                        <path stroke="currentColor" stroke-width="1.5"
                                            d="M27.589 11.397v3.106c0 .427-.391.665-.653.4l-1.379-1.415-1.646-1.69a.6.6 0 0 1 0-.792l1.646-1.69L26.936 7.9c.262-.268.653-.032.653.4Z"
                                            data-name="Tracé 17" />
                                    </g>
                                </svg> Webinars
                            </a>
                        </li>
                        <li>
                            <a href="tel:0472138383"
                                class="flex text-base transition-colors text-tertiary-500 hover:text-tertiary-600">
                                <svg class="w-6 h-6 mr-4 text-tertiary-500"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg> 04 72 13 83 83
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/contact"
                                class="flex text-base transition-colors text-tertiary-500 hover:text-tertiary-600">
                                <svg class="w-6 h-6 mr-4 text-tertiary-500"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg> Nous contacter
                            </a>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="order-2 col-span-6 xl:col-span-3 lg:order-1">
                <h3 class="w-full text-sm font-semibold tracking-wider uppercase text-primary-500">
                    Marques
                </h3>
                <div class="grid grid-flow-col grid-rows-2 sm:grid-rows-1 lg:grid-rows-2 md:mt-0">

                    <ul class="mt-4 space-y-2">
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-akitio"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                Akitio
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-asus"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                Asus
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-atto"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                ATTO
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-bestor"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                BeStor
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-crucial"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                Crucial
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-d-link"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                D-LINK
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-dell"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                Dell
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-eaton"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                Eaton
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-finisar"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                Finisar
                            </a>
                        </li>
                    </ul>
                    <ul class="mt-2 sm:mt-4 lg:mt-2 space-y-2">
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-highpoint"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                Highpoint
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-hp"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                HP
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-ibm"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                IBM
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-icydock"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                IcyDock
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-intel"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                Intel
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-keyspan"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                KEYSPAN
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-lg"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                LG
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-liteon"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                LiteOn
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-lmp"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                LMP
                            </a>
                        </li>
                    </ul>


                    <ul class="mt-4 space-y-2">
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-logitech"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                Logitech
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-micron"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                Micron
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-mobility-labs"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                Mobility Labs
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-nakivo"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                Nakivo
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-owc"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                OWC
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-promise"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                Promise
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-qnap"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                QNAP
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-qsan"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                QSAN
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-retrospect"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                Retrospect
                            </a>
                        </li>
                    </ul>
                    <ul class="mt-2 sm:mt-4 lg:mt-2 space-y-2">
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-samsung"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                Samsung
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-sandisk"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                Sandisk
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-seagate"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                Seagate
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-sqp"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                SQP
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-synology"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                Synology
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-terramaster"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                TerraMaster
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-toshiba"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                Toshiba
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-transcend"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                Transcend
                            </a>
                        </li>
                        <li>
                            <a href="https://sqp.fr/distributeur-solutions-wd"
                                class="text-base text-gray-300 hover:text-white whitespace-nowra">
                                WD
                            </a>
                        </li>
                    </ul>

                </div>
            </div>

            <div
                class="grid order-last col-span-6 gap-8 mt-8 xl:mt-0 lg:col-span-12 md:grid-cols-2 xl:grid-cols-none xl:col-span-5 xl:flex xl:flex-col">
                <div class="flex w-full h-full p-12 mb-8 bg-gray-100 xl:h-auto">
                    <svg class="mr-4" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="152" height="123"
                        viewBox="0 0 152 123">
                        <defs>
                            <pattern id="pattern" preserveAspectRatio="none" width="100%"
                                height="100%" viewBox="0 0 263 212">
                                <image width="263" height="212"
                                    xlink:href="data:image/png;base64,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" />
                            </pattern>
                        </defs>
                        <rect id="NoPath" width="152" height="123" fill="url(#pattern)" />
                    </svg>
                    <div class="flex flex-col">
                        <p class="mb-2 font-bold uppercase text-primary-500">
                            Où acheter nos produits ?
                        </p>
                        <p class="mb-2 text-sm">Vous recherchez un <b>revendeur</b> de produits SQP <b>dans
                                votre région ?</b></p>
                        <a class="button group --has-trailing mt-4 mr-auto --is-small --translate-icon-on-hover --is-primary"
                            href="https://sqp.fr/contacter-revendeur">


                            <span class="button__caption">
                                découvrez nos revendeurs
                            </span>

                            <span class="button__trailing">
                                <svg class="h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
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
                        </a>
                    </div>
                </div>

                <div wire:id="ohtmJNTzs7OT4Buy92ib"
                    wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;ohtmJNTzs7OT4Buy92ib&quot;,&quot;name&quot;:&quot;website.newsletter.registrationForm&quot;,&quot;locale&quot;:&quot;fr&quot;,&quot;path&quot;:&quot;\/&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;bf3265f0&quot;,&quot;data&quot;:{&quot;form&quot;:[],&quot;honeyInputs&quot;:{&quot;honey_present&quot;:null,&quot;honey_time&quot;:&quot;eyJpdiI6IjRXYWZ4T2xtTzNvRWF6b3hOb2tpMlE9PSIsInZhbHVlIjoiYUd4d2JNQU1nUDNDdGlQbFBOUmwreWcwMWtGc2c1R2JXbzhJb1FzNE9tUT0iLCJtYWMiOiI1ODBjODczN2FhY2U1ZWYzZTdhMmVhNmRiNzQ5ZjZjYmVkM2ZjNmEzODVkZThmNjc5M2NmOTViYTQ5MjlmZTMyIiwidGFnIjoiIn0=&quot;,&quot;honey_javascript&quot;:null,&quot;honey_recaptcha_token&quot;:null}},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;18098e5396b27d8f93d1d4c747e0a773dee9668e63f3a3c80a9b5488b450a5f0&quot;}}"
                    class="flex flex-col w-full h-full p-12 xl:h-auto bg-primary-500">
                    <p class="mb-2 font-bold text-center text-white uppercase ">newsletter</p>
                    <p class="mb-2 text-base text-white">Inscrivez vous à la newsletter, et <b>recevez
                            gratuitement</b> les offres spéciales par e-mail.</p>
                    <form action="#" class="flex flex-col mt-2" wire:submit.prevent="submit">
                        <script src="https://www.google.com/recaptcha/api.js?render=6LeGTkYiAAAAAFLqmq3FgFnToFPbSyW-EDk58lph" defer></script>
                        <script>
                            window.Honey = {
                                recaptcha(el, action = 'submit') {
                                    grecaptcha.execute('6LeGTkYiAAAAAFLqmq3FgFnToFPbSyW-EDk58lph', {
                                        action
                                    }).then(token => {
                                        el.value = token;
                                        el.dispatchEvent(new Event('change'));
                                    });
                                },
                                recaptchaInputs() {
                                    return document.querySelectorAll('input[data-purpose="honey-rc"]');
                                },
                                refreshAllTokens() {
                                    this.recaptchaInputs().forEach(input => window.Honey.recaptcha(input, input.dataset.action));
                                },
                            };

                            window.addEventListener('load', () => {
                                grecaptcha.ready(() => {
                                    window.Honey.refreshAllTokens();
                                    setInterval(() => window.Honey.refreshAllTokens(), 60000)
                                })
                            });

                            document.addEventListener('livewire:load', function() {
                                window.addEventListener('recaptcha-refresh-required', () => {
                                    window.Honey.refreshAllTokens();
                                });
                            });
                        </script>
                        <input wire:model.lazy.defer="honeyInputs.honey_recaptcha_token"
                            action="https://sqp.fr/registration" type="hidden" data-purpose="honey-rc"
                            data-action="registration" name="honey_recaptcha_token">
                        <div class="flex space-x-2">
                            <input required type="text"
                                class="flex-1 block w-full h-full px-3 py-2 placeholder-opacity-50 border-transparent rounded-sm text-primary-900 placeholder-primary-700 focus:outline-none focus:ring-0 focus:border-transparent sm:text-sm bg-primary-400"
                                placeholder="Votre nom" wire:model="form.name">
                            <input required type="email"
                                class="flex-1 block w-full h-full px-3 py-2 placeholder-opacity-50 border-transparent rounded-sm text-primary-900 placeholder-primary-700 focus:outline-none focus:ring-0 focus:border-transparent sm:text-sm bg-primary-400"
                                placeholder="Votre email" wire:model="form.email">
                        </div>

                        <button type="submit"
                            class="relative inline-flex items-center px-3 py-2 pr-10 mt-4 text-sm font-medium text-white uppercase transition border border-transparent rounded-sm shadow-sm bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 group">
                            <span class="flex-1 text-center">Envoyer</span>
                            <svg class="absolute w-4 h-4 ml-3 -mr-1 transition-transform transform group-hover:translate-x-1 right-4"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg> </button>
                    </form>
                </div>

                <!-- Livewire Component wire-end:ohtmJNTzs7OT4Buy92ib -->
            </div>


        </div>

        <div class="pt-8 mt-8 border-t border-gray-700 md:flex md:items-center md:justify-between">
            <div class="flex space-x-6 md:order-2">
                <a href="https://www.linkedin.com/company/sqp" target="_blank"
                    class="text-gray-400 hover:text-gray-300">
                    <span class="sr-only">Linked In</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 16h-2v-6h2v6zm-1-6.891c-.607 0-1.1-.496-1.1-1.109 0-.612.492-1.109 1.1-1.109s1.1.497 1.1 1.109c0 .613-.493 1.109-1.1 1.109zm8 6.891h-1.998v-2.861c0-1.881-2.002-1.722-2.002 0v2.861h-2v-6h2v1.093c.872-1.616 4-1.736 4 1.548v3.359z" />
                    </svg>
                </a>

                <a href="https://www.youtube.com/channel/UCLlXbeVPbNLH2al-NlIhb3A" target="_blank"
                    class="text-gray-400 hover:text-gray-300">
                    <span class="sr-only">Youtube</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M4.652 0h1.44l.988 3.702.916-3.702h1.454l-1.665 5.505v3.757h-1.431v-3.757l-1.702-5.505zm6.594 2.373c-1.119 0-1.861.74-1.861 1.835v3.349c0 1.204.629 1.831 1.861 1.831 1.022 0 1.826-.683 1.826-1.831v-3.349c0-1.069-.797-1.835-1.826-1.835zm.531 5.127c0 .372-.19.646-.532.646-.351 0-.554-.287-.554-.646v-3.179c0-.374.172-.651.529-.651.39 0 .557.269.557.651v3.179zm4.729-5.07v5.186c-.155.194-.5.512-.747.512-.271 0-.338-.186-.338-.46v-5.238h-1.27v5.71c0 .675.206 1.22.887 1.22.384 0 .918-.2 1.468-.853v.754h1.27v-6.831h-1.27zm2.203 13.858c-.448 0-.541.315-.541.763v.659h1.069v-.66c.001-.44-.092-.762-.528-.762zm-4.703.04c-.084.043-.167.109-.25.198v4.055c.099.106.194.182.287.229.197.1.485.107.619-.067.07-.092.105-.241.105-.449v-3.359c0-.22-.043-.386-.129-.5-.147-.193-.42-.214-.632-.107zm4.827-5.195c-2.604-.177-11.066-.177-13.666 0-2.814.192-3.146 1.892-3.167 6.367.021 4.467.35 6.175 3.167 6.367 2.6.177 11.062.177 13.666 0 2.814-.192 3.146-1.893 3.167-6.367-.021-4.467-.35-6.175-3.167-6.367zm-12.324 10.686h-1.363v-7.54h-1.41v-1.28h4.182v1.28h-1.41v7.54zm4.846 0h-1.21v-.718c-.223.265-.455.467-.696.605-.652.374-1.547.365-1.547-.955v-5.438h1.209v4.988c0 .262.063.438.322.438.236 0 .564-.303.711-.487v-4.939h1.21v6.506zm4.657-1.348c0 .805-.301 1.431-1.106 1.431-.443 0-.812-.162-1.149-.583v.5h-1.221v-8.82h1.221v2.84c.273-.333.644-.608 1.076-.608.886 0 1.18.749 1.18 1.631v3.609zm4.471-1.752h-2.314v1.228c0 .488.042.91.528.91.511 0 .541-.344.541-.91v-.452h1.245v.489c0 1.253-.538 2.013-1.813 2.013-1.155 0-1.746-.842-1.746-2.013v-2.921c0-1.129.746-1.914 1.837-1.914 1.161 0 1.721.738 1.721 1.914v1.656z" />
                    </svg>
                </a>



            </div>
            <p class="mt-8 text-base text-gray-400 md:mt-0 md:order-1">
                &copy; 2022 SQP. Tous droits réservés
            </p>
        </div>
        <p class="mt-4 text-xs text-gray-500">
            Ce site est protégé par reCAPTCHA et <a href="https://policies.google.com/privacy">politique de
                confidentialité</a> et <a href="https://policies.google.com/terms">les conditions
                d'utilisation</a> Google s'appliquent.
        </p>
    </div>
</footer>

<div class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
    aria-modal="true" x-show="compare" x-data="{ compare: false }" @product-added.window="compare = true">
    <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true"
            @click.self="compare = !compare" x-show="compare" x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"></div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="inline-block overflow-hidden text-left text-white align-bottom transition-all transform bg-white rounded-sm shadow-xl sm:my-8 sm:align-middle sm:max-w-7xl sm:w-full"
            x-show="compare" x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            style="display: none">
            <div class="px-4 pt-5 pb-4 overflow-x-scroll bg-secondary-700 sm:p-6 sm:pb-4">

                <h3 class="text-lg font-medium leading-6 text-center" id="modal-title">

                </h3>

                <div class="grid grid-cols-1 mt-6 gap-y-6 gap-x-4">

                    <div wire:id="F3as1lNarYWAMo5VAP5v"
                        wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;F3as1lNarYWAMo5VAP5v&quot;,&quot;name&quot;:&quot;website.comparator.table&quot;,&quot;locale&quot;:&quot;fr&quot;,&quot;path&quot;:&quot;\/&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[&quot;comparator.toggleProduct&quot;]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;0c0f2e35&quot;,&quot;data&quot;:[],&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;f4e025828673f79de1dffaacda8df4b67e686f3cce3255a079e3052a746db1db&quot;}}">
                        <table>
                            <tr class="align-baseline">
                                <td></td>
                            </tr>
                        </table>
                    </div>

                    <!-- Livewire Component wire-end:F3as1lNarYWAMo5VAP5v -->
                </div>
            </div>
            <div class="flex flex-col items-center justify-between w-full px-4 py-8 bg-secondary-600 sm:px-6">
                <button class="button group --has-leading mt-4 --is-secondary --is-small sm:mt-0"
                    @click.prevent="compare = !compare; $wire.cancel()">

                    <div class="button__leading">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>

                    <span class="button__caption">
                        <span class="w-full">
                            Fermer
                        </span>
                    </span>


                    <span class="button__spinner">
                        <svg class="w-4 h-4 animate-spin" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10"
                                stroke="currentColor" stroke-width="4"></circle>
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

<script src="https://sqp.fr/livewire/livewire.js?id=de3fca26689cb5a39af4" data-turbo-eval="false"
data-turbolinks-eval="false"></script>
<script data-turbo-eval="false" data-turbolinks-eval="false">
window.livewire = new Livewire();
window.Livewire = window.livewire;
window.livewire_app_url = '';
window.livewire_token = 'PCIdl4vqyR7f17boKPzp7XDmnYufdBcoxmVZdNqE';
window.deferLoadingAlpine = function(callback) {
    window.addEventListener('livewire:load', function() {
        callback();
    });
};
let started = false;
window.addEventListener('alpine:initializing', function() {
    if (!started) {
        window.livewire.start();
        started = true;
    }
});
document.addEventListener("DOMContentLoaded", function() {
    if (!started) {
        window.livewire.start();
        started = true;
    }
});
</script>