@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('dist/css/jquery.toast.min.css') }}">
    <div class="relative overflow-x-hidden" x-data="{ swiper: null }" x-init="swiper = new Swiper($refs.container, {
        loop: true,
        autoHeight: true,
        autoplay: { delay: 8000 },
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true,
            bulletClass: 'swiper-pagination-bullet h-3 w-3',
            bulletActiveClass: 'bg-primary-500 border-primary-500 opacity-100'
        },
    })">
        <div class="swiper-container" x-ref="container">
            <div class="swiper-wrapper">
                <div class="relative bg-gray-100 swiper-slide">
                    <div>
                        <style>
                            * {
                                box-sizing: border-box;
                            }

                            body {
                                margin: 0;
                            }
                        </style>
                        <div class="relative h-128">
                            <div class="relative z-10 flex flex-col h-full px-8 py-16 mx-auto max-w-big" id="i3tl">
                                <div class="flex flex-col items-center justify-center w-full p-8 text-center">
                                    <p class="text-4xl uppercase text-secondary-600 font-base"><b
                                            class="lg:text-5xl">DGTEC,</b> présent sur le
                                    </p>
                                    <p class="text-3xl font-bold uppercase lg:text-5xl text-secondary-600">
                                        Marché depuis 2022
                                    </p>
                                </div>
                                <img alt="" style="" class="object-contain m-auto md:block" srcset=""
                                    onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                    sizes="1px" src="" width="798" height="148">


                                <img alt="" style="" class="hidden object-contain mx-auto mt-4 md:block"
                                    srcset=""
                                    onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                    sizes="1px" src="" width="1115" height="40">

                            </div>
                            <img alt="" style="" class="absolute inset-0 object-cover w-full h-full"
                                srcset=""
                                onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                sizes="1px" src="" width="1920" height="450">


                            <img alt="" style=""
                                class="absolute inset-0 hidden object-cover w-full h-full md:block" srcset=""
                                onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                sizes="1px" src="" width="1920" height="450">

                        </div>
                    </div>
                </div>
                <div class="relative bg-gray-100 swiper-slide">
                    <div>
                        <style>
                            * {
                                box-sizing: border-box;
                            }

                            body {
                                margin: 0;
                            }

                            #it86p {
                                max-width: 50%;
                            }
                        </style>
                        <div class="relative h-128">
                            <div class="relative z-10 flex h-full px-8 mx-auto max-w-big">
                                <div class="flex flex-col items-center justify-center w-full px-8 lg:items-start">
                                    <p class="text-4xl font-bold uppercase text-secondary-700">
                                        Un NAS proposé par DGTEC
                                    </p>
                                    <p class="text-2xl uppercase text-secondary-700 font-base">
                                        n&#039;est pas un bundle NAS + Disques
                                    </p>
                                    <ul class="text-sm font-semibold uppercase text-secondary-700">
                                        <li class="my-2"><span class="mr-2 text-primary-500">→</span> il est
                                            livré assemblé, paramétré et testé.</li>
                                        <li class="my-2"><span class="mr-2 text-primary-500">→</span> il ne
                                            reste qu’à le mettre sous tension.</li>
                                        <li class="my-2"><span class="mr-2 text-primary-500">→</span> solution
                                            prête à l’emploi</li>
                                        <li class="my-2"><span class="mr-2 text-primary-500">→</span> gain de
                                            temps pour votre service technique</li>
                                    </ul>
                                    <div class="mt-4">
                                        <div class="flex"><a title="Nos NAS"
                                                href="https://sqp.fr/distributeur-stockage-nas"
                                                class="button group --has-trailing --translate-icon-on-hover text-dark">Découvrez
                                                nos produits</a></div>
                                    </div>
                                </div>
                                <img alt="" style="max-width: 50%"
                                    class="hidden object-contain w-auto h-full md:w-1/2 lg:block" srcset=""
                                    onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                    sizes="1px" src="" width="808" height="340">

                            </div>
                            <img alt="" style="" class="absolute inset-0 object-cover w-full h-full"
                                srcset=""
                                onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                sizes="1px" src="" width="1920" height="450">

                        </div>
                    </div>
                </div>
                <div class="relative bg-gray-100 swiper-slide">
                    <div>
                        <style>
                            * {
                                box-sizing: border-box;
                            }

                            body {
                                margin: 0;
                            }
                        </style>
                        <div class="relative h-128">
                            <div class="relative z-10 flex h-full px-8 mx-auto max-w-big">
                                <div class="flex flex-col items-center justify-center w-full px-8 lg:items-start text-dark">
                                    <p class="text-3xl uppercase text-secondary-600 font-base">
                                        DGTEC est le leader Tunisien
                                    </p>
                                    <p class="text-4xl font-bold uppercase text-secondary-600">
                                        De la mémoire spécifique
                                    </p>
                                    <ul class="text-sm font-semibold uppercase text-secondary-700">
                                        <li class="my-2">Mémoires</li>
                                        <li class="my-2">Mémoires compatibles (Apple, DELL, HP, LENOVO ...)</li>
                                        <li class="my-2">Cartes mémoires flash</li>
                                    </ul>
                                    <div class="mt-4">
                                        <div class="flex"><a title="Nos mémoires"
                                                href="https://sqp.fr/selecteur-de-memoire"
                                                class="button group --has-trailing --translate-icon-on-hover text-dark">Découvrez
                                                la gamme de mémoire</a></div>
                                    </div>
                                </div>
                                <img alt="" style=""
                                    class="hidden object-contain w-auto h-full lg:w-1/2 lg:block" srcset=""
                                    onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                    sizes="1px" src="" width="720" height="405">

                            </div>
                            <img alt="" style="" class="absolute inset-0 object-cover w-full h-full"
                                srcset=""
                                onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                sizes="1px" src="" width="1920" height="450">

                        </div>
                    </div>
                </div>
                <div class="relative bg-gray-100 swiper-slide">
                    <div>
                        <style>
                            * {
                                box-sizing: border-box;
                            }

                            body {
                                margin: 0;
                            }
                        </style>
                        <div class="relative h-128">
                            <div class="relative z-10 flex h-full px-8 mx-auto max-w-big">
                                <div class="flex flex-col items-center justify-center w-full lg:items-start">
                                    <p class="text-3xl uppercase text-secondary-700 font-base">
                                        Le plus large choix
                                    </p>
                                    <p class="text-4xl font-bold uppercase text-secondary-700">
                                        De disques durs et SSD
                                    </p>
                                    <div class="mt-4">
                                        <div class="flex"><a title="Nos disques durs et SSD"
                                                href="https://sqp.fr/distributeur-stockage-interne"
                                                class="button group --has-trailing --translate-icon-on-hover text-dark">Découvrir
                                                la gamme</a></div>
                                    </div>
                                </div>
                                <img alt="" style=""
                                    class="hidden object-contain w-auto h-full lg:w-1/2 lg:block" srcset=""
                                    onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                    sizes="1px" src="" width="871" height="445">


                                <img alt="" style="" class="absolute bottom-16"
                                    srcset="
                                    onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                    sizes="1px" src="" width="899" height="40">

                            </div>
                            <img alt="" style="" class="absolute inset-0 object-cover w-full h-full"
                                srcset=""
                                onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                sizes="1px" src="" width="1920" height="450">

                        </div>
                    </div>
                </div>
                <div class="relative bg-gray-100 swiper-slide">
                    <div>
                        <style>
                            * {
                                box-sizing: border-box;
                            }

                            body {
                                margin: 0;
                            }
                        </style>
                        <div class="relative h-128">
                            <div class="relative z-10 flex h-full px-8 mx-auto max-w-big" id="i2go">
                                <img alt="" style="" class="hidden w-auto h-full xl:block" srcset=""
                                    onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                    sizes="1px" src="" width="429" height="447">

                                <div class="flex flex-col items-center justify-center w-full p-8 lg:px-20 xl:items-start">
                                    <p class="text-5xl font-bold text-center uppercase lg:text-left text-secondary-700">
                                        Gagnez en sérénité
                                    </p>
                                    <p class="text-3xl font-light uppercase text-secondary-700">
                                        Assurez votre matériel <br /> en souscrivant à une <br /> garantie <b
                                            class="text-primary-500">J+1</b></p>
                                    <p class="mt-3 text-sm leading-6 uppercase">
                                        Récupérez <b class="text-primary-500">un matériel fonctionnel en J+1</b>
                                        <br /> avec un impact <b class="text-primary-500">minimal sur votre
                                            production</b>
                                    </p>
                                    <img alt="" style="" class="block h-10 my-4" srcset=""
                                        onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                        sizes="1px" src="" width="292" height="46">

                                    <div>
                                        <div class="flex items-center"><a href="https://sqp.fr/types-de-contrats-sqp"
                                                title="Nos garanties"
                                                class="block button group --has-trailing --translate-icon-on-hover text-dark">En
                                                savoir plus</a>
                                            <img alt="" style="" class="hidden ml-8 lg:block h-18"
                                                srcset=""
                                                onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                                sizes="1px" src="" width="252" height="82">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img alt="" style="" class="absolute inset-0 object-cover w-full h-full"
                                srcset=""
                                onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                sizes="1px" src="" width="1920" height="450">

                        </div>
                    </div>
                </div>
                <div class="relative bg-gray-100 swiper-slide">
                    <div>
                        <style>
                            * {
                                box-sizing: border-box;
                            }

                            body {
                                margin: 0;
                            }
                        </style>
                        <div class="relative h-128">
                            <div class="relative z-10 flex h-full px-8 mx-auto max-w-big">
                                <div class="flex flex-col items-center justify-center w-full p-8 lg:items-start lg:w-1/2">
                                    <p class="text-3xl uppercase text-secondary-700 font-base">
                                        Une large gamme
                                    </p>
                                    <p class="text-4xl font-bold uppercase text-secondary-700">
                                        D&#039;accessoires
                                    </p>
                                    <p class="mt-3 text-sm leading-6 uppercase">
                                        Docks, Hubs, Accessoires et Câbles Thunderbold, USB-C
                                    </p>
                                    <div class="mt-4">
                                        <div class="flex"><a title="Nos accessoires"
                                                href="https://sqp.fr/distributeur-accessoires"
                                                class="button group --has-trailing --translate-icon-on-hover text-dark">Découvrir
                                                la gamme</a></div>
                                    </div>
                                </div>
                                <img alt="" style="" class="hidden w-auto h-full lg:block" srcset=""
                                    onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                    sizes="1px" src="" width="694" height="450">

                            </div>
                            <img alt="" style="" class="absolute inset-0 object-cover w-full h-full"
                                srcset=""
                                onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                sizes="1px" src="" width="1920" height="450">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="absolute top-0 z-10 h-full" type="button" @click="swiper.slidePrev()">
            <div class="p-2 mx-2 rounded-sm bg-secondary-700 hover:bg-secondary-600">
                <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </div>
        </button>

        <button class="absolute top-0 right-0 z-10 h-full" type="button" @click="swiper.slideNext()">
            <div class="p-2 mx-2 rounded-sm bg-secondary-700 hover:bg-secondary-600">
                <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </div>
        </button>

        <div class="swiper-pagination"></div>

    </div>

    <div class="relative py-8 mb-16 bg-secondary-700" x-data>
        <div class="mx-auto text-white max-w-big" style="color: black;">
            <h3 class="text-xl font-semibold text-center">Leader Tunisien de la mémoire spécifique, depuis 1986
            </h3>
            <p class="mt-4 text-center">Facilitez vos achats, grâce aux configurateurs :</p>
            <div class="flex flex-row flex-wrap w-full text-dark">

                <div class="w-full p-4 mt-16 sm:w-1/2 xl:w-1/5">
                    <div
                        class="flex flex-col items-center justify-between w-full h-full px-12 py-8 border-2 border-primary-400">
                        <div class="w-24 h-24 -mt-16 bg-secondary-700">
                            <svg class="w-16 h-16 m-auto transition-transform transform text-primary-500 featured-icon-translate-top"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 768 944">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M571.1 0c1.154 8.403 1.909 17.4 1 26.1V36h-1v7.1h-1v6h-.1v6c-3 11.232-6.9 21.568-9.9 31h-1V89h-1v2.1h-1V94h-.1c-.333 1.666-.667 3.334-1 4.1h-1c-.667 2-1.333 4.9-2 6.9h-1v2h-1.9v1.1h-1v2.9h-1v2l-2 1.1v2.9c.233.333-.433.667-2 1 .233 1.1-.433 4-1.1 6h-1c-.333.1-.667 2-1 2.1-.667 1.233-1.333 1.567-2 1-.333 2.233-.667 3.567-1.9 4-.1 1.567-2 2.233-3 2v2.9c.233.333-.433.667-2 1v1.1c-.1 1.567-2 2.233-2.1 2.9v2c-1 .667-2.9 1.333-3 1.1v2.9c-1.667 1.333-3.333 2.667-5.9 3.1v2.9c-1.433 1.1-3.767 4-6.1 6v2c-2 1.666-4.9 3.333-6.9 5 .567.667.233 1.333-1 1.1H506c-2.333 3.566-4.667 6.234-7.9 8.9h-2c-.1 1.333-2 2.667-3 3.1H492c-.667 1-1.333 2.9-2 3.9h-2c-.333.667-.667 1.333-1.9 2h-2c.233.1-.433 2-2 3H481c-.333.667-.667 1.333-1 2h-2v.1h-2c-.333 1.567-.667 2.233-1 2-1.333 1.233-2.667 1.567-4.9 1.9.567.667.233 1.333-1 2-.433.333-1.767.667-3.1.1v1h-2v1h-2.9v1.9h-2v1h-2v1c-.433.333-1.767.667-3.1.1v1c-1.333 1.233-2.667 1.567-4 1v1.9h-2.9v1h-3v1h-2v.1H440v1h-3v1h-3.9v1.9h-3v1H427v1h-4.9v.1h-4v1H414v1h-7.9v1.9c-4.3 1.467-22.037.002-25-2.9-2.229-2.441-1.184-18.241-2-25.1 1.037-11.133 3.941-23.335 6.9-32.9.667-2.433 1.333-5.767 2-9.1h1c.667-3 1.333-6.9 2-9.9h.1V137h1v-3.9h1v-2h1V129h1c1.567-2 2.233-4.9 2-6h1.9v-2.9h1c.333-.766.667-2.433 1-5 .667.567 1.333.233 2-1V113h1v-2l1.1-2.9V107c1.567-.333 2.233-.667 2-1 1.233-1.333 1.567-2.667 1-4 1.567-.333 2.233-.667 2-1 1.233-1.333 1.567-2.667 1.9-4.9.667.567 1.333.233 2-.1v-2h1c.333-1 .667-2.9 1-3.9.667.567 1.333.233 1.1-.1v-2c1.567-.333 2.233-.667 2-1.9 1.233-.1 1.567-2 1-2.1 1-.667 2.9-1.333 3.9-2v-2.9c1.333-.1 2.667-2 4-2.1v-2.9c2.333-1.1 4.667-4 6.1-6V67c3-2.666 6.9-5.334 9-8 2.233-1.667 3.567-3.334 4-5h2.9c1.666-2 3.333-4.9 5-6h1.1c1.233-.667 1.567-1.333 1-2h1c1.567-1 2.233-2.9 2-3h2.9c.667-1 1.333-2.9 2-3.9h2c.333.233.667-.433 1-2h1.1c1.233.233 1.567-.433 1-1.1h2c1.233-.667 1.567-1.333 1-2.9h2.9c.333.233.667-.433 1-2h2c.333.233.667-.433 1-1.1h1.1c1.233-.667 1.567-1.333 1-2.9 2.233.567 3.567.233 4-1 1.233.233 1.567-.433 1.9-1.1h2l2-2h1.1v-1.9h2v-1h2c21.01-9.828 44.395-19.85 74-20.1ZM515 66c-1.569 1.809-1.978.862-4.9 1.1v1h-2c.567 1.567.233 2.233-1 2.9H506v1h-2c-.333.667-.667 1.333-1 1.1-1.333 1.233-2.667 1.567-4.9 1 .567 1.567.233 2.233-1 2.9h-2c.567.667.233 1.333-1 1.1H493c-1 2.233-2.9 3.567-3 4.9h-2c-1.333 1.666-2.667 3.333-4.9 5h-2c-.433 1.666-1.767 3.334-3.1 4.1-3.333 3-6.667 6.9-10 9.9v1.1c-1.667 2.233-3.334 3.567-5 4.9-.333.1-.667 2-1.9 3 .233.333-.433.667-2 1v2c.233.333-.433.667-2 .1.567 1 .233 2.9-1 3.9h-1v2c.233.333-.433.667-1.1.1v2.9c-.667.333-1.333.667-2 1-.667 1.1-1.333 4-2 6-.667.333-1.333.667-2.9 1 .233 1.1-.433 4-2 6h-1c-2.1 6.999-6 14.001-9 20.1h2.9c1.578-.897 1.977.039 4-2v-.1h1.1c1.233-.667 1.567-1.333 1-2h2l2-2.9h2.9c.333.233.667-.433 1-1.1 1.333-.333 2.667-.667 3.1-1v-1c1-.333 2.9-.667 3-1.9 1.233.233 1.567-.433 1-2h2c1-.433 2.9-1.767 3.9-4h2c1.666-1.1 3.334-4 4.1-6h2c2.567-1.1 4.233-4 5.9-6 .667.567 1.333.233 2-1V125c1.1-1.667 4-3.333 5.1-5v-2c2.567-1.333 4.233-2.667 5.9-4v-2c.667-.333 1.333-.667 1.1-1v-2.9c1.567.567 2.233.233 2-.1 1.233-1 1.567-2.9 1-3h1v-2.9h1V101c1.567-.333 2.233-.667 2.9-1 .667-2 1.333-4.9 2-6 .667-.333 1.333-.667 2-1.9.667-1.1 1.333-4 1.1-6h1v-2h1c1.567-1.1 2.233-4 2-6h1c1.233-.766 1.567-2.433 1-5h1.9c.395.118 2.412-6.195 2-7.1h-1Zm229 256.1c-2.781 1.525-4.802 2.44-7.9 3.9.567.667.233 1.333-.1 1.1h-2c-.667 1-1.333 2.9-2 3.9h-2.9c.233.1-.433 2-2 2.1h-2c.233 1-.433 2.9-2 3.9H722c-1 1.333-2.9 2.667-3 3.1h-2.9c-1.766 3-4.434 6.9-7.1 9.9h-2c-.667.1-1.333 2-2 3-2.333 1.1-4.667 4-7 6v2c-2.666 2.333-5.334 4.667-8.9 6.1v2c-.433 1-1.767 2.9-4 3.9v1.1c-.1 1.567-2 2.233-2.1 2.9v2c-1 .667-2.9 1.333-3 1.1v2.9c-.667.333-1.333.667-2.9 1v1.1c-.1 1.567-2 2.233-3 2 .567 2.233.233 3.567-1 4 .233 1.233-.433 1.567-1.1 1-.333 1-.667 2.9-1 3.9h-1c-.667 1.1-1.333 4-2 6-.667.333-1.333.667-2.9 1 .567 1.333.233 2.667-1 4h-1v1.1h-1c.233 2-.433 4.9-2 6h-1v3.9h-.1c-.333 1.333-.667 2.667-1 3.1h-1v3.9h-1v1.1h-1c-.333 2-.667 4.9-1 6h-1.9v2h-1v3.9h-1v4h-1v2.1h-1v4.9h-1v3.1h-.1v4h-1v6h-1v6h-1v7h-1v9.9c-2.628 9.39-1.392 34.614 1 42.1v7c2.333 11.232 4.667 21.568 6.1 31.9h1c1.233 1.1 1.567 4 1 6h1.9v2h1c.333 1.1.667 4 1 5.1h1v2h1c.333 2.567.667 4.234 1 5h.1c1.567 2 2.233 4.9 2 6h1v2.9h1c1.567 1.1 2.233 4 2 6 1.567.333 2.233.667 2.9 1 .667 1.1 1.333 4 2 6 .667.333 1.333.667 2 1v1.1c.667 1.233 1.333 1.567 1.1 1v2.9c1.567.333 2.233.667 2 1v1.1h1c1.233 1 1.567 2.9 1 3.9 1.567.333 2.233.667 2.9 1v1.1c.1 1.567 2 2.233 3 2.9v2c1.666 1.333 3.334 2.667 4.1 4v1.1c3.233 2 5.567 4.9 7.9 6v2c7.999 8.233 16.001 15.567 24 22h2c.1 2.233 2 3.567 2.1 4.9h2c1.233.667 1.567 1.333 1 1.1h2c1.567 1 2.233 2.9 2.9 3.9h2c.333.667.667 1.333 1 2h2c.333.667.667 1.333.1 1.1 1 1.233 2.9 1.567 3 1v1.9c2.233.333 3.567.667 4.9 1 .333.667.667 1.333 1 1.1 1.333 1.233 2.667 1.567 4 1 .333 1.567.667 2.233.1 2.9 2.233.333 3.567.667 4 1v.1h2.9v1h2v1h2v1c2.666 1 5.334 2.9 7.1 3v5.9h-1c.567 1.1.233 4-1 6h-1v2.1h-1c.567 2 .233 4.9-1 6h-1v2.9h-.1c-.333 1.1-.667 4-1 6h-1v1.1h-1v3.9h-1v2h-1v2.1h-1.9v2.9h-1v2.1h-1c.567 2.233.233 3.567-1 4.9h-1v2.1h-1c.567 2.233.233 3.567-.1 4h-1v3.9h-1v1.1h-1c-.333 2.233-.667 3.567-1 4.9h-1c-.333 1.333-.667 2.667-1 3.1h-1.9c.567 2.233.233 3.567-1 4h-1v2h-1v2.9h-1v1.1h-1v2h-.1v2.9h-1v1.1h-1v2h-1v2.9h-1v1.1l-2.9 2v2.9c.233.333-.433.667-2 1v1.1h-1v2.9l-2 2v1.1c.233 1.233-.433 1.567-1.1 1-.333 2.233-.667 3.567-1 4-.667 1.233-1.333 1.567-2 1-.333 2.233-.667 3.567-1 4-.667 1.233-1.333 1.567-2.9 1 .567 2.233.233 3.567-1 4.9.233.333-.433.667-2 .1v2c.233 1.233-.433 1.567-2 1v2.9c.233.333-.433.667-1.1.1-.333 2.233-.667 3.567-1 4.9h-1c-.333.1-.667 2-1 2.1-.667 1.233-1.333 1.567-2 1v2.9c-1 .667-2.9 1.333-3.9 1.1v2h-1c.567 1 .233 2.9-1 3.9.233.333-.433.667-1.1.1v2c-1 1.567-2.9 2.233-3 2.9v1.1h-1c-.333 1-.667 2.9-1 3.9-.667.333-1.333.667-2.9 1v1.1c.233 1.233-.433 1.567-2 1 .567 1 .233 2.9-1 3.9-.1.667-2 1.333-2.1 1.1v2c-.667 1.233-1.333 1.567-2 1.9v1.1c-1 1.567-2.9 2.233-3 2v2.9c-1 .667-2.9 1.333-3.9 1.1v2c-.433 1-1.767 2.9-4 3.9v1.1c.233 1.233-.433 1.567-1.1 1-.333 1-.667 2.9-1 3.9-1.667 1.333-3.333 2.667-5.9 3.1v2.9c-.766 1.333-2.433 2.667-5 4v2c-2.1 2.666-6 5.334-9 7.1v2.9c-1.766 2.333-4.434 4.667-7.1 7-.667.1-1.333 2-2 2.1h-2.9c-1.1 3.233-4 5.567-5.1 7h-2c-1 2.233-2.9 3.567-3.9 4h-2c.233 1-.433 2.9-2 3.9h-2c.233.1-.433 2-1.1 2.1h-2c-.333 1.567-.667 2.233-1 2-1.333 1.233-2.667 1.567-4.9 1.9.567.667.233 1.333-1 1.1-.433 1.233-1.767 1.567-3.1 1-.333 1.567-.667 2.233-1 2-2.333 1.567-4.667 2.233-7.9 2.9v.1c-.433 1.233-1.767 1.567-3.1 1v1c-1.667 1.233-3.334 1.567-5 1v1.9c-2.333.333-4.667.667-7.9 1-8.614 3.182-16.862 4.001-30.1 3.1h-12v-1c-4.333.567-8.667.233-13-1v-1c-3 .567-6.9.233-9-.1v-1h-3v-1.9h-3.9v-1h-3v-1c-1.1.567-4 .233-5.1-1v-.1h-2v-1h-3.9v-1.9h-2v-1h-3v-1c-.433.567-1.767.233-3.1-1v-.1h-3.9v-1c-.433-.333-1.767-.667-4-1.9v-1H480v-1c-1.333.567-2.667.233-4-1v-.1h-3.9v-1h-2v-1.9H468v-1h-2v-1h-3v-1h-3.9v-.1h-3v-1H454v-1.9c-2.333.567-4.667.233-7.9-1v-1h-4v-1H438v-.1h-5.9v-1H426v-1.9h-10v-1h-13c-11.545.898-23.06 1.206-32.9 3.9-5.099.1-11.101 2-17.1 2.1v1h-3v1.9h-3.9v1h-3v.1h-3v1c-1.1 1.233-4 1.567-5.1 1v1h-2.9v1.9h-3v1H328v.1h-3v1h-2v1h-3.9v1c-.433 1.233-1.767 1.567-4 1.9v1H313v.1c-1.333 1.233-2.667 1.567-4 1v1h-3.9v1h-2v1.9H301v1h-2v.1c-2 1.233-4.9 1.567-6.9 1v1h-3v1H287v1.9h-3v1h-3.9v.1H277c-9.683 4.161-19.455 4.9-33.9 4.9h-13c-7.099-2.333-15.101-4.667-23.1-7.9v-1c-2 .233-4.9-.433-6.9-2v-.1c-.433-.333-1.767-.667-3.1-1-.333-.667-.667-1.333-1-2.9-1.333.567-2.667.233-4.9-1 .567.233.233-.433-1-1.1h-2v-1c-.1-.333-2-.667-2.1-1.9-.333.233-.667-.433-1-2h-2c-.333.233-.667-.433-1-1.1-1-.333-2.9-.667-3.9-1-.433-1.667-1.767-3.334-3.1-5h-2c-2.666-3-5.334-6.9-8.9-9.9h-2c.567.233.233-.433-.1-1.1-1.667-1.333-3.334-2.667-5-4.9V898c-3.666-3.333-7.334-6.667-11-10.9V886c-1.667-1.333-3.333-2.667-5.9-4.9V880h-1c.233-1-.433-2.9-2-3.9.233.567-.433.233-1.1-1V874c-1.333-1-2.667-2.9-4-3.9v-2c-1.333-.1-2.667-2-4.9-3v-2c-.1.233-2-.433-3-1.1v-2.9c-.1.233-2-.433-2.1-2V856c-1-.667-2.9-1.333-3-2.9v-2c-1 .233-2.9-.433-3.9-1.1v-2.9c-.1.233-2-.433-3-2V844c.233-.333-.433-.667-1.1-1v-2.9c-1 .233-2.9-.433-3-1.1v-2c-1-.667-2.9-1.333-3-2.9V833c-.667-.333-1.333-.667-2.9-1v-2.9c-.1.233-2-.433-3-2V826c.233-.333-.433-.667-1.1-1v-2.9c-.667.567-1.333.233-2-1V820c-.667-.333-1.333-.667-2-1.9v-2c-.667.567-1.333.233-2-1V814c-.667-.333-1.333-.667-2.9-1.9v-2c.233.567-.433.233-2-1V808c.233-.333-.433-.667-2-1.9v-2c.233.567-.433.233-1.1-1-.333-.433-.667-1.767-1-4-.667.567-1.333.233-2-1-.333-.433-.667-1.767-1-4-.667.567-1.333.233-2.9-1 .233-1.1-.433-4-2-6 .233.567-.433.233-2-1 .233-1.1-.433-4-1.1-6-.667.567-1.333.233-2-.1-.333-1.333-.667-2.667-1-4.9h-1V774h-1v-2h-1.9v-2.9h-1V768h-1c.567-1.333.233-2.667-1-4.9h-1c.567-.433.233-1.767-1-4H60v-2h-1V756h-1v-2.9h-1v-2h-1V750h-1c-.333-1.333-.667-2.667-1-4.9h-1.9V744h-1v-3.9h-1V739h-1c.567-1.333.233-2.667-1-4.9h-1V732H47c-.333-1.333-.667-2.667-1-4.9h-1V725h-1v-2.9h-1V720h-1v-2.9h-1V715h-1.9v-2h-1c.567-1.667.233-3.334-1-5h-1c.567-2 .233-4.9-1-6h-1v-2.9H34V697h-1v-3.9h-1V691h-1v-3.9c-4.301-9.957-8.009-22.851-12-35-.667-3.1-1.333-8-2-12-4.202-11.557-6.09-27.045-10-41v-6H6v-6H5v-7H4V573H3v-7H1.1v-10h-1v-13H0v-34c-.006-32.87 2.666-63.26 10.1-88.9 1.567-3.1 2.233-8 2-12h1V406h1v-3H16v-3.9h1V397h1c.333-2 .667-4.9 1-6h1v-2h1v-3.9h.1V384h1v-3.9h1V379h1v-3.9h1c1.567-1.1 2.233-4 2-6H29v-2h1V366h1c2.333-5.333 4.667-10.667 6.1-16 1.567-.333 2.233-.667 2-1 1.233-1.333 1.567-2.667 1.9-4.9.667.567 1.333.233 2-.1.333-1.333.667-2.667 1-4.9h1c.333-.1.667-2 1-2.1.667-.333 1.333-.667 1.1-1v-2.9c1.567.567 2.233.233 2-1V331h1c1.233-1 1.567-2.9 1-3.9 1.567.567 2.233.233 2.9-1V325c.1-.667 2-1.333 3-2.9v-2c1.333-.1 2.667-2 3.1-2.1v-2.9c2.567-.433 4.234-1.767 5-3.1v-2.9c3.233-1.1 5.567-4 7-6 1.233-.1 1.567-2 1-2.1 3.233-2 5.567-4.9 7.9-6 .667-1 1.333-2.9 2-3.9h2c2.333-1.766 4.667-4.434 7-7.1h2c1.333-1.667 2.667-3.334 4-5h1.1c1-1.333 2.9-2.667 3-4.9h2.9c.333.233.667-.433 1-1.1h2c.667-1 1.333-2.9 2-3.9h1.1c1.233.233 1.567-.433 1-2 1 .567 2.9.233 3-.1v-1h2.9c.333-.667.667-1.333 1-2.9 1.333.567 2.667.233 4-1 .333.233.667-.433.1-1.1 2.233-.333 3.567-.667 4-1 1.233-.667 1.567-1.333 1-2.9h2.9l2-2h2v-.1h1.1v-1h2v-1h2v-1.9h2.9v-1c1.1.233 4-.433 6-1.1v-1h2.1v-1h2v-1.9h3.9v-1h2v-1c1.1.567 4 .233 5.1-.1v-1h3v-1h3.9v-1.9h3v-1h2.1v-.1h4v-1h4.9v-1h3.1v-1h5v-1.9h5.9v-1h5.1v-.1h8.9v-1h11v-1c5.052-1.409 19.374-.022 23 1h8.1c6.017 1.457 13.065 2.504 17.9 4h4.1v1c3.233.333 5.567.667 7.9 1v1h3v.1h2.1v1c4.233 1.567 7.567 2.233 10.9 2.9v1h1.1v.1c2 1.233 4.9 1.567 6.9 1v1h2v1.9h3v1h2.1v1h2v.1h3.9v1h2v1h3v1.9h1.1v1h3v1h2v.1h3.9v1h2v1h2.1v1.9h2v1c2 .333 4.9.667 6.9 1v.1h2v1c1.1 1.233 4 1.567 5.1 1v1.9h3.9v1h3v1h2.1v.1h4v1h4.9v1h6.1v1.9h16v-1.9h6.9v-1h3.1v-1h4.9v-.1h3v-1h2.1v-1h3v-1.9c3 .233 6.9-.433 9.9-2v-.1h1.1v-1h3v-1h3.9v-1.9h2v-1h2.1v-1h2v-.1h3v-1h2.9v-1h3v-1.9h2v-1h2.1v-1h2v-.1c2-.333 4.9-.667 6.9-1v-1h2v-1.9c1.1.567 4 .233 5.1-1v-1h2.9v-.1c1.1-.333 4-.667 5.1-1v-1h3v-1.9h3.9v-1c3.333.233 6.667-.433 9.1-1.1v-1h4.9v-1h4v-1.9h3.1v-1h4.9v-.1h5v-1h4.1v-1h6.9v-1h10v-1.9h10.1c9.22.897 20.251.031 26.9 1.9h11.1v1h7.9v1h5.1v1h5.9v.1c2.1 1.233 6 1.567 9 1v1.9h4v1h3.1v1h3v1h4.9v.1c2.1 1.567 6 2.233 8.1 2.9v1h2.9v1h3v.1h2.1v1c2.233 1.233 3.567 1.567 4 1v1.9h3.9v1c1.1.667 4 1.333 5.1 1.1v1h2v1h2v1.9h2.9v1h2v1h2l1.1 1.1h2c1.233 1.567 1.567 2.233 1 2.9 2.233.333 3.567.667 4.9 1 .333.667.667 1.333 1 1.1h2c.333 1.567.667 2.233 1 2h1.1v1.9c1 .333 2.9.667 3 1 1.233.667 1.567 1.333 1 1.1h2.9c.667 1 1.333 2.9 2 3.9h2c.667.1 1.333 2 2 2.1h1.1c1 2.233 2.9 3.567 3 4.9h2.9c1.1 2.333 4 4.667 5.1 7h2c2.233 1.666 3.567 3.333 4 5 3.566 2.333 6.234 4.667 8 6.1v2c1.567 1.233 2.233 1.567 2 1.9v1c2.567 1.333 4.233 2.667 5.9 3.1v2.9c1.333.1 2.667 2 4 2.1v2.9c.1.667 2 1.333 2.1 2v1.1c1.567 1.233 2.233 1.567 2 1 1.233 1 1.567 2.9 1 3.9h1.9c.333.1.667 2 1 2.1Zm-201-47c-2.77 3.22-11.819 1.633-16 2.9-10.999 3.333-22.001 6.667-33.9 10v1H491v1h-2v1c-2 .333-4.9.667-6.9.1v1H481v1.9h-3v1h-2v1h-3.9v.1h-2v1H468v1h-2v1.9h-3v1h-2.9v1h-3v.1H455v1h-2v1c-2 1.233-4.9 1.567-6.9 1.9v1h-2v1c-1.1.333-4 .667-5.1.1v1h-4.9v1h-3v1.9H428v1h-4v1h-4.9v.1H416v1h-5.9v1c-3.344 2.278-25.079 4.614-31.1 2.9-13.999-3.333-28.001-6.667-42-10.9v-.1h-2v-1c-2-.333-4.9-.667-6.9-1v-1.9H327v-1h-3v-1h-3.9v-.1h-2v-1h-3v-1c-.766-.333-2.434-.667-4.1-1.9v-1h-2v-1h-3.9v-.1h-2v-1H301v-1h-2v-1.9h-3.9v-1h-2v-.1c-1.1-.333-4-.667-5.1-1v-1h-2v-1c-2-.333-4.9-.667-6.9-1.9v-1H277v-.1h-3v-1h-3v-1h-3.9v-1h-3v-1.9H260c-10.993-2.438-32.123-3.458-44.9-1-5.433 1.567-11.767 2.233-18.1 2.9v1h-3.9v1h-3v1h-3v.1c-1.1 1.233-4 1.567-5.1 1v1.9h-2.9v1h-3v1H175v1h-3v.1c-2 1.567-4.9 2.233-6.9 2.9v1h-2v1c-.766.333-2.434.667-4.1.1-.333 1.567-.667 2.233-1 2h-2v1.9h-2.9v1h-2l-2 1.1H148c-.333 1.567-.667 2.233-1 2-1.333 1.233-2.667 1.567-4 1.9-.333.667-.667 1.333-1.9 2h-2c.567.667.233 1.333-1 1.1h-2c.567 1.567.233 2.233-.1 2.9h-2c-.333.667-.667 1.333-1 2h-2c-.667.1-1.333 2-2.9 2.1-.1 1.233-2 1.567-3 1.9-1.1 2.333-4 4.667-5.1 7h-2c-1 1.333-2.9 2.667-3.9 3.1-1.766 3.233-4.434 5.567-7.1 7.9v2c-2.333 1.1-4.667 4-7.9 6v1.1c-.433 1-1.767 2.9-3.1 3.9v1.1c-1 1.567-2.9 2.233-3 2.9v2c-.667.333-1.333.667-2.9.1.567 1 .233 2.9-1 3.9h-1c.567 1.333.233 2.667-1 3.1.233 1.233-.433 1.567-2 1 .567 1 .233 2.9-.1 3.9h-1v1.1l-2 2.9v2h-1v1.1c-.667 1.233-1.333 1.567-2.9 1v2.9l-2 1.1v2h-1v2.9h-1v1.1h-1c.233 2-.433 4.9-1.1 6h-1c-.333 2.567-.667 4.234-1 5.9h-1v1.1h-1v3.9h-1v1.1h-1.9v3.9h-1v1.1h-1v3.9h-1v2h-1c.567 1.1.233 4-1 6H60v2.1h-1v3.9h-1c-.333 2.333-.667 4.667-1 6.1h-1c-.333 3.566-.667 6.234-1 8h-1c-.333 4.233-.667 7.567-1.9 10h-1v7h-1v7.9h-1v8.1h-1v12c-.604 6.345 1.023 15.077-1 21.9.665 1.427-.888 4.13-.1 7h.1v12c1.233 8.999 1.567 18.001 1 26.1h1v10c3.566 17.565 6.234 34.235 8.9 50.9h1c1.333 6.666 2.667 13.334 3.1 19.1h1c1.233 3.233 1.567 5.567 1 7h1c1.567 4.233 2.233 7.567 2.9 10.9h1v2.1h1v3.9h1v2.1h1v3.9h.1v2.1h1v3.9h1v2.1h1v3.9h1v2.1h1v2.9h1c1.233 1.1 1.567 4 1.9 6h1v1.1h1c.333 2 .667 4.9 1 6h1c.333 2.567.667 4.234 1 5h.1v2h1v3.9h1c1.233 1.333 1.567 2.667 1 4h1v2.1h1c1.233 2.233 1.567 3.567 1.9 4.9h1v2.1h1v2.9h1c.667 1.1 1.333 4 2 6h1v2.1h.1v2h1c1.233 2.233 1.567 3.567 1 4h1v2h1v2.9h1v1.1h1.9v2h1v2.9h1v1.1h1v2h1v2.9l2 1.1v2c.667 1.233 1.333 1.567 1.1 1.9v1.1h1v2l2 2.9v1.1c1.567 1.233 2.233 1.567 2.9 1 .667 2 1.333 4.9 2 6 .667 1.233 1.333 1.567 2 1 .333 2.233.667 3.567 1 4 .667 1.233 1.333 1.567 1.1 1 1.233 2.233 1.567 3.567 1 4.9 1.567.333 2.233.667 2 .1 1.233 2.233 1.567 3.567 1 4.9 1.567.333 2.233.667 2.9 1v1.1c.667 1.233 1.333 1.567 2 1v2.9h1c.333.1.667 2 1 2.1.667 1.233 1.333 1.567 1.1 1v2.9c1.567.333 2.233.667 2 .1v2c1 1.567 2.9 2.233 3 2.9v1.1c1.567 1.233 2.233 1.567 2.9 1v2c.1 1.567 2 2.233 3 2.9v1.1c.667 1.233 1.333 1.567 2 1v2.9c.667.333 1.333.667 1.1 1 1.233.1 1.567 2 1 2.1 1 1.567 2.9 2.233 3 2.9v1.1c1.567 1.233 2.233 1.567 2.9 1v2.9c.667.333 1.333.667 2 1 .333.1.667 2 1 2.1 1.333 1 2.667 2.9 3.1 3.9v1.1c1 1.567 2.9 2.233 3 2v2.9c2.233.1 3.567 2 4.9 2.1v2.9c1.333.1 2.667 2 4 2.1v2c1.1 2.567 4 4.234 5.1 5v2.9c3.233 1.1 5.567 4 7 6v1.1c3.566 3.233 6.234 5.567 8.9 7 .1 2.233 2 3.567 3 4.9h1.1c2.567 1.1 4.234 4 5 6h2.9c.667.1 1.333 2 2 2.1h2c.333 1.567.667 2.233 1 2.9h1.1c1.233.667 1.567 1.333 1 1.1 2 1.567 4.9 2.233 6.9 2v1.9h2v1c1.1.667 4 1.333 5.1 1.1v1h3.9v1h2v1.9h14c18.167-.009 28.641-6.49 40.1-12h3v-1.9h2v-1h3.9v-1c1.333.567 2.667.233 4-.1v-1h2.1v-1.9h2v-1c10.899-2.433 20.901-5.767 30.9-9.1 2.1-.333 6-.667 8.1-1.9v-1h4.9v-1h3.1v-1c3 .567 6.9.233 9.9-.1v-1h5.1v-1.9h6.9v-1h9.1v-1h34v1H429v1h6.1c9.352 3.395 19.79 5.177 27.9 7.9 2.666.333 5.334.667 7.1 1v.1h3v1h3.9v1h3v1h2.1v1.9c2 .333 4.9.667 6.9 1v.1h2v1h2.1v1c2.233 1.233 3.567 1.567 4 1v1.9h3.9v1c1.333.333 2.667.667 4 .1v1h2.1v1c2.233 1.233 3.567 1.567 4 1.9v1h3.9v1c1.333.333 2.667.667 4 .1v1h2.1v1h2v1.9h3.9v1h3v1h2.1v.1h3v1h8.9c3.348 1.852 18.296 3.378 23 1 6.999-2.1 14.001-6 20.1-8.1 1.233-.667 1.567-1.333 1-2 2.233-.333 3.567-.667 4.9-1.9.333.233.667-.433 1-2h2c.667-.1 1.333-2 1.1-3h2c2.567-1.1 4.233-4 5.9-6h2c.667-.1 1.333-2 1.1-3 3.566-1.433 6.234-3.767 8.9-6.1v-2.9c2.1-1.766 6-4.434 8.1-8V850c1.567-.333 2.233-.667 2-1v-1.9c1.567.567 2.233.233 2.9-1V845c1.666-1.333 3.334-2.667 4.1-4.9V839c1-.667 2.9-1.333 3-2v-2.9c1 .233 2.9-.433 3.9-1.1v-2c.1-.667 2-1.333 3-2.9V827c.1-.667 2-1.333 3-2v-2.9c.667.567 1.333.233 1.1-1V820c1-.667 2.9-1.333 3-2.9v-2c1.567.567 2.233.233 2.9-.1v-2.9c.1.233 2-.433 3-2V809c.667-.333 1.333-.667 2-1 .333-1 .667-2.9.1-3.9h1V803c1.567-.333 2.233-.667 2-1v-2.9c1.567.567 2.233.233 2-1V797c1.567-.333 2.233-.667 2.9-1v-2.9c.667.567 1.333.233 2-1V791c.667-.333 1.333-.667 2-1 .333-1.333.667-2.667 1-4 .667-.333 1.333-.667 1.1-1 1.233-1.333 1.567-2.667 1-4.9 1.567.567 2.233.233 2-.1 1.233-1.333 1.567-2.667 1-4.9 1.567.567 2.233.233 2.9-1 .667-1.1 1.333-4 2-6 .667.567 1.333.233 2-.1v-2h1v-2.9l1.1-1.1v-2.9c1.567.567 2.233.233 2-1v-2l2-1.1v-2.9h1.9v-2h1V749h1v-2.9h1v-2h1V743h1v-2.9h1V739h.1c1.233-1.333 1.567-2.667 1-4.9h1V733h1v-3.9h1c1-2.1 2.9-6 3.9-8.1 1.183-2.646 2.497-2.803 3-7-1-.333-2.9-.667-3-1-.333-.667-.667-1.333-1-2.9h-2.9c.233-.1-.433-2-2-2.1h-2c.233-1-.433-2.9-1.1-3.9h-2c-.667-.1-1.333-2-2-2.1h-2.9c.233-1-.433-2.9-2-3.9h-2c-.433-.766-1.767-2.433-3.1-5h-2c-4.666-4.099-9.334-9.101-14-14.1-4.666-4.333-9.334-8.667-14.9-13v-2.9c-.766-.433-2.433-1.767-5-3.1v-2.9c-.1.233-2-.433-2.1-1.1v-2c-1-.667-2.9-1.333-3-2.9V650c-1-.667-2.9-1.333-3.9-2v-2.9c.233.567-.433.233-2-1V643c-.1-.667-2-1.333-2.1-2.9v-2c-.667.567-1.333.233-2-.1v-2.9c-.667.567-1.333.233-2-1-.333-.1-.667-2-1-2.1h-1.9c.567-1.333.233-2.667-1-4.9.233.567-.433.233-2-.1v-2h-1v-2.9l-2-1.1v-2c.233-.333-.433-.667-1.1-1.9v-2h-1V614h-1v-3.9h-1V609h-1c-.333-1.333-.667-2.667-1.9-4.9h-1V602h-1v-2.9h-1V597h-1v-2h-1c-.1-4.333-2-8.667-2.1-13.9-3.521-9.059-5.765-21.553-9.9-32.1.567-3.666.233-7.334-1-11-3.022-13.552-4.273-50.446-.1-65 .333-4.333.667-8.667.1-13 3.456-8.473 5.136-18.785 7.9-27.9.333-1.766.667-4.434 1-7.1h1v-3.9h1V419h1c.333-2.333.667-4.667.1-7h1v-2.9h1c1.233-1.1 1.567-4 1-6h1V402h1v-3.9h1c1.567-1.1 2.233-4 2.9-6h1V391h1v-2h1v-2.9h1V385h.1v-2h1v-2.9l2-1.1v-2c1.567-.333 2.233-.667 2-1.9 1.233-.433 1.567-1.767 1-3.1h1.9c.333-1 .667-2.9 1-3.9.667.567 1.333.233 2-1V366h1c.333-1 .667-2.9 1-3.9.667.567 1.333.233 1.1-1V360c1-.667 2.9-1.333 3-2.9v-2c1.567.567 2.233.233 2.9-.1v-2c.1-.667 2-1.333 3-2.9V349c.1-.667 2-1.333 3-2v-2.9c1.333-.1 2.667-2 3.1-2.1v-2.9c2.567-.433 4.233-1.767 5.9-3.1v-2.9c.1.233 2-.433 3-1.1 1.1-2.333 4-4.667 5.1-7 3.986-3.086 8.558-5.223 9-10.9-.401.226-.439-.653-1.1-1.1h-2c-.667-1-1.333-2.9-2-3.9h-2.9c.567.233.233-.433-1-1.1h-2c.567-.667.233-1.333-1-2h-2c.567-.667.233-1.333-.1-2.9h-2c-.333.233-.667-.433-1-1.1h-2v-1h-2.9l-2-2.9h-2c.567.233.233-.433-.1-2-1.333.567-2.667.233-4-.1v-1c-1.333-.333-2.667-.667-4.9-1v-1.9h-3v-1H634v-.1c-1.333-.333-2.667-.667-4-1v-1h-3.9v-1h-2v-1.9c-1.1.567-4 .233-5.1-1v-.1h-3v-1h-2.9v-1h-3v-1c-1.433-.333-3.767-.667-6.1-1.9v-1c-3.666.567-7.334.233-11-.1-13.551-4.018-32.766-2.888-50-3.9Z" />
                            </svg>
                        </div>
                        <p class="text-sm text-center">
                            <b>Sélectionnez</b> rapidement la mémoire qui correspond à votre produit <b>Apple</b>
                        </p>
                        <a class="button group --has-trailing mt-8 --is-small text-dark --is-outlined --translate-icon-on-hover"
                            href="{{ route('selecteurApple') }}">


                            <span class="button__caption">
                                Mémoires Apple
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
                </div>

                <div class="w-full p-4 mt-16 sm:w-1/2 xl:w-1/5">
                    <div
                        class="flex flex-col items-center justify-between w-full h-full px-12 py-8 border-2 border-primary-400">
                        <div class="w-24 h-24 -mt-16 bg-secondary-700">
                            <svg class="w-16 h-16 m-auto transition-transform transform text-primary-500 featured-icon-translate-top"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 504 504">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M378 51c2.29.628 2.405.877 3.1 2v.1h3.9v1c7.598 3.376 12.892-1.778 16.1-3.1h9c2.656 1.996 2.869.842 4 2v.1h2c1.233 1.567 1.567 2.233 1.9 2.9 1.1 1.667 4 3.333 5.1 5 15.232 14.665 29.568 29.335 43 44 7.464 6.564 17.815 13.349 20 23v7h-1c.567 1.667.233 3.334-1 5 .233.333-.433.667-2 1v3c6.899 5.666 12.901 11.334 18 17 1.567 1.1 2.233 4 2 5.1h1v9.9c-1.101 1.751.057 1.97-2 4h-1v2c-.767 1.333-2.434 2.667-5 4-3.1 4.333-8 8.667-12 12.1-17.765 19.231-36.435 37.568-56 55.9-5.433 6.666-11.767 13.334-18.1 20-21.998 21.665-44.002 43.335-66 64.1-3.666 4-7.334 8.9-11 12.9-5.333 4.1-10.667 10-16.9 15-1.433 2.666-3.767 5.334-7 7.1-.634 2.27-2.58 2.143-5 3.9-3.789.288-3.432 1.133-8 0H292c-5.885-2.378-9.777-8.776-14.9-13.9-1.771-1.771-5.155-3.702-7.1-7.1-1.135.844-.145-.127-1.9 1-1.778 1.528-3.022 3.924-6 5.1-3.435 5.233-7.766 9.566-12.1 13-2.828 3.728-6.81 5.438-8 9 3.762 3.044 6.035 6.935 8.1 9 7.063 7.063 12.927 10.215 12 22h-1c.567 2.566.233 4.233-.1 5h-1.9v2.9c-19.098 19.665-39.102 39.335-59.1 58.1-6.759 7.659-15.294 19.798-25 22h-7v-1c-1.666.567-3.333.233-5.9-.1.233-1-.433-2.9-2-3.9h-2c-4.433-4.766-9.767-10.434-16-17-3.428 3.547-6.654 7.079-13.1 4.9h-4v-1c-6.797-1.79-15.205-13.205-20-18.9-12.665-11.432-25.335-23.768-38-37V428c-4.666-4.333-9.334-8.667-14-13.9V413h-1v-3.9h-1c-1.181-2.816.971-10.041 2-12.1h1v-2.9h.1c2.747-4.243-.476-11.081-1.1-15-2.941-.825-5.535-3.98-9.9-6-3.78-.613-9.482 1.653-12.1 2v1.9c-4.333.333-8.667.667-13 1-1.747-1.974-2.288-.84-4-2.9-.667-.1-1.333-2-2-2.1h-2c-.333-.667-.667-1.333-1-2-1.333-1-2.667-2.9-4-3v-2c-1-.667-2.9-1.333-3-2.9-1.748-1.835-2.008-6.59-2-11.1h1c.333-1.666.667-3.334 1-5h1v-2.9C89.325 259.009 175.675 172.991 261.1 87c18.898-18.331 36.902-36.668 54-55 4.566-3.333 8.234-6.667 11-10 7.492-6.592 12.891-13.762 20-19.9 1.233.233 1.567-.433 1-1.1 4-.333 8.9-.667 12-1 2.66 1.993 2.868.842 4 1.1v1h2c4.566 4 8.234 8.9 11 12.9v2.1c3.25 7.142.79 13.643-2 18.9h-.1c-2.9 6.35 3.032 11.138 4 15ZM193.1 405.1h2c38.896-37.43 76.904-75.77 114.9-115 9.333-8.433 18.667-17.767 27.1-27.1 4.423-3.523 10.434-6.626 11-12.9h2c3.511-3.579 8.325-6.525 11-11 8.242-6.442 15.52-13.791 22-21.1 5.566-4.999 10.234-10.001 14.9-15 2.333-2 4.667-4.9 6.1-6v-2.9h1c1.567-.1 2.233-2 2-2.1h2c1-1.333 2.9-2.667 3-4.9 4.233-2.1 7.567-6 10-9 3.233-1.766 5.567-4.434 7-7.1 2.233-1 3.567-2.9 4-3.9V166l2-2.9h2.9c2.333-1.766 4.667-4.434 6.1-7.1 6.899-5.666 12.901-11.334 18-17v-2.9l2-1.1h2c1-1.333 2.9-2.667 3-4.9-14.765-14.432-30.435-29.768-47-46-4.433-4.766-9.767-10.434-15.1-16.1h-2.9c-2.426 3.883-18.26 5.721-26 2.1v-1h-2v-1H374c-.333.233-.667-.433-1.9-1.1h-2v-1c-.871-1.44-1.507-2.255-5-3 .207-2.617-.683-3.22-2.1-5h-1.9v-2h-1c.567-1.333.233-2.667-1-4h-1v-3.9h-1v-4h-1c-.487-3.733 1.702-14.106 2-17.1h1c1.233-1.333 1.567-2.667 1-4.9h-1c.092-2.318-1.659-2.656-3.1-5.1-1.135.844-.145-.127-1.9.1C242.345 130.322 129.655 242.678 17 354.1c.844 2.035-.127 1.045 1 1.9 1.466 2.719 3.078 4.57 7 5 2.069-2.382 14.876-5.898 21-4 13.201 4.093 21.902 11.827 26 25 1.137 3.655-.006 16.678-1 18.1h-1c-.333 2.233-.667 3.567-1 4h-1v1h1c3.226 6.488 10.442 11.342 15 15 10.667 11.567 21.333 22.233 32 32 3.855 4.755 11.834 15.504 17 16 3.537-5.263 10.112-9.213 14.1-14.1 10.899-10.332 20.901-20.668 30.9-31 3.871-3.871 14.584-11.811 15.1-17.9ZM345.1 63c16.603.028 21.084 10.184 28.9 17.1 12.332 12.899 24.668 24.901 36.1 36 3.233 3.566 5.567 6.234 7.9 8.9.1.667 2 1.333 2.1 1.1 2.056 2.579.915 3.169 2 4 1.157 5.613 2.041 5.189 0 8.9v3.1c-1.312 6.409-7.163 9.963-12 13.9-7.767 8.667-16.433 17.333-25.1 26-3.784 3.784-11.455 14.813-21.9 11.1-8.306-1.813-13.089-10.089-20-16.1-2.433-3-5.767-6.9-9.1-9.9-8.666-8.099-17.334-17.101-26-26.1-7.223-7.223-15.083-10.101-15.9-25.9h1.9c.333-.767.667-2.434.1-5 1.567.567 2.233.233 2.9-.1v-2c1.1-1.666 4-3.333 6-5 4.333-4.666 8.667-9.334 12.1-14 6.233-4.999 11.567-10.001 16.9-15 1.1-2.333 4-4.667 5.1-7h2c1.233-.667 1.567-1.333 1.9-2.9 1.666.567 3.333.233 4.1-1V63Zm3 16.1c-8.766 10.899-18.434 20.901-29 30.9-2.433 2.1-5.767 6-9.1 9-.496 1.304 2.47 2.435 2.1 2.1 4.169 4.39 7.532 7.532 10.9 10 3.1 5.233 8 9.567 11.1 13.9 7.233 5.999 13.567 12.001 19.9 17.1 3.429 4.329 9.16 12.615 13.1 13.9 10.232-9.666 19.568-19.334 28.9-29.9 3.295-2.395 8.617-5.028 9.1-11-18.098-17.765-37.102-36.435-57-56Zm-78.1 58c5.863.859 10.334.881 13.1 2.9v1h2.9c16.332 16.665 32.668 33.335 48.1 50 7.978 7.078 14.963 10.396 14 25h-1v2.1c.233 1.233-.433 1.567-2 1v2.9c-1.433 1.1-3.767 4-7 6-4.1 5.333-9.101 10.667-15 16-4.1 4.666-9.101 9.334-15 14-1.1 2.333-4 4.667-5.1 6.1-1.534 2.27-3.479 2.143-5.9 3.9-18.319.09-21.717-9.617-31.1-19-11.666-11.332-23.334-22.668-35-34.9-2-1.433-4.9-3.767-6.9-6.1-.1-.667-2-1.333-2.1-2v-2.9h-1.9c-.057-.334.169-1.034-1.1-2.1-.343-4.47-1.213-5.419 0-9v-4.9h1c1.71-5.804 9.6-10.7 13.1-15.1 10.232-9.666 19.568-19.334 28-29.9 3.219-1.186 6.854-1.753 8.9-5Zm3.1 17.9c-8.432 9.666-17.768 19.334-27.1 28.1-3.501 4.401-9.175 6.834-10.9 12.9 14.565 13.332 28.235 26.668 41.9 39.1 3.737 4.637 10.91 14.511 15.1 15 13.899-12.432 26.901-25.768 39.9-39.1-13.999-13.665-28.001-27.335-42-41-3.737-3.737-10.91-13.611-16.9-15Zm196 0c-2.766 3.1-6.434 8-11 11.1-1.245 3.052-3.137 3.355-5 6 6.57 4.228 11.736 14.225 17.9 15 5.333-4.766 10.667-10.434 15.1-16.1-4.766-5.333-10.434-10.667-17-16Zm-29 28.1c-3.1 5.233-8 9.567-11.1 13.9-1.333.1-2.667 2-4.9 2.1.376 2.244 4.267 4.254 4.9 4 2.655 3.61 9.822 12.851 12.1 13.9 6.233-5.666 11.567-11.334 16-17.9-4.766-4.433-10.434-9.767-17-16ZM199 212c13.095 1.192 18.757 11.757 25.1 18.1 13.232 12.899 25.568 24.901 37 36 3.233 3.566 5.567 6.234 7 8.9 1 .667 2.9 1.333 3.9 1.1 1.156 2.579.015 3.169 1.1 4 .952 6.407 1.049 12.62-1.1 15-15.665 16.232-31.335 31.568-47.9 46.9-3.1.333-8 .667-11.1.1-1.758-1.095-1.968.058-4-1.1v-1h-2.9c.567-.667.233-1.333-.1-2.9-1.333-.1-2.667-2-4-2.1-12.999-13.332-26.001-26.668-39.9-40-4.76-5.66-10.582-10.091-15.1-17-.667-.333-1.333-.667-2-1.9-.333-3.433-.667-7.767-1-12.1 1.804-1.575.856-1.992 2-4.9h1V258c1.667-1.333 3.334-2.667 4.1-4 4.566-4 8.234-8.9 11-12 6.566-5.333 12.234-10.667 17.9-16.9 2.333-1.766 4.667-4.434 7-7.1 2.333-1.666 4.667-3.334 6.1-5h5.9v-1Zm212.1 1c-2.428 5.67-12.425 10.836-15 16.1 6.57 4.228 11.736 14.225 17 15 4.228-4.77 14.225-9.936 15.9-16.1-5.67-3.328-10.836-13.325-17.9-15ZM199 229.1c-9.332 10.566-18.668 20.234-28 29.9-3.295 3.295-8.617 5.928-10.9 11 3.571 1.546 4.818 3.92 6.9 5.1 4.668 5.566 9.333 10.233 13.1 14.9 9.233 8.333 17.567 16.667 25.9 25 3.573 3.573 8.396 6.52 11 11 1.135-.844.145.127.1-1 6.487-3.223 11.344-10.444 15.9-15 5.667-5.667 11.334-11.333 17-17.9 2.379-1.48 5.241-3.07 7-7-13.999-12.765-28.001-26.435-42-41-3.737-2.837-10.91-12.711-16-15Zm184.1 11c-2.766 4-6.434 8.9-11 12.9-1.245 2.152-3.137 2.455-5 6 6.57 3.328 11.736 13.325 17.9 15 5.333-5.666 10.667-11.334 15.1-17.9-4.766-4.433-10.434-9.767-17-16Zm-29 29.9c-3.1 4.333-8 8.667-11.1 12.1-1.333 1-2.667 2.9-4.9 3 .376 2.244 4.267 4.254 4.9 4.9 2.655 2.71 9.822 11.951 13 12.1 5.333-4.766 10.667-10.434 15.1-17-4.766-4.433-10.434-9.767-17-15.1ZM122 286.1c3.666 1.233 7.334 1.567 11 1 .333 1.567.667 2.233 1 2.9 6.539 4.283 10.65 9.65 15.1 15 13.232 11.999 25.568 24.001 37.9 36 2.333 2.666 4.667 5.334 6.1 7.1 1 1.567 2.9 2.233 3.9 2.9 1.156 1.679.015 2.269 2 3.1.333 3.566.667 6.234 1 8-2.667 10.826-10.694 15.594-17.9 21-7.432 9.566-15.768 18.234-24.1 26-1.333 1-2.667 2.9-4.9 3.9.567.667.233 1.333-.1 1.1-1.679 2.056-2.268.916-4 2-2.666 1.233-5.334 1.567-8.9 1.9-9.404-2.775-14.529-11.429-22-18.9-10.767-10.767-22.433-22.433-34.1-35-7.069-6.169-15.005-9.689-15-24.1h1c.333-1.667.667-3.333 1-5 .667-.333 1.333-.667 2-1.9v-2c1.1-.766 4-2.434 6-5 4.333-3.766 8.667-8.434 13-14 5.333-4.1 10.667-10 15.1-15 2-1.433 4.9-3.767 6.9-7h2c.333.233.667-.433.1-1.1 2.567-.333 4.234-.667 5.9-1.9v-1ZM325.1 299c-4.433 5.666-9.767 11.334-15.1 17 3.1 3.666 8 7.334 11.1 10.1 2.233 2.566 3.567 4.234 4 5 2.329 1.365 4.199-2.414 4.9-4 3.379-2.408 11.794-8.394 13-14-5.67-2.428-10.836-12.425-17.9-14.1ZM125 304c-9.666 9.999-19.334 20.001-29 29.1-3.333 3-6.667 6.9-10.9 9 .404 2.204 3.37 3.335 3.9 3.9 3.269 3.49 6.632 6.632 9.1 10 4 4.333 8.9 8.667 12.9 12.1 6.333 6.899 12.667 12.901 18.1 18.9 4.329 3.429 10.06 11.715 14.9 12.1 9.332-8.766 18.668-18.434 27.1-28.1 4.195-3.295 9.517-5.928 10.9-11.9-18.998-17.765-38.002-36.435-57-55.1Zm172 23.1c-3.328 6.57-13.325 11.736-15.9 17 6.57 4.228 11.736 14.225 17.9 15 3.328-4.77 13.325-9.936 15-17-5.67-2.428-10.836-12.425-17-15Zm-68.9 68c-2.766 4-6.434 8.9-11 12.9-1.245 2.152-3.137 2.455-4.1 6 5.67 3.328 10.836 13.325 17 15 5.333-5.666 10.667-11.334 16-17.9-5.666-4.433-11.334-9.767-17.9-16Zm-28.1 29c-4 5.233-8.9 9.567-12 13-1.333 1-2.667 2.9-4 3-.524 2.244 3.367 4.254 4 4.9 2.655 2.71 9.822 11.951 12.1 12.1 6.233-4.766 11.567-10.434 16.9-17-5.666-4.433-11.334-9.767-17-16ZM171 454c-5.333 5.666-10.667 11.334-16 17 3.1 3.666 8 7.334 12 10.1 1.333 2.566 2.667 4.234 4 5 1.429 1.365 3.299-2.414 4-4 3.379-2.408 11.794-8.394 13-14-5.67-2.428-10.836-12.425-17-14.1Z" />
                            </svg>
                        </div>
                        <p class="text-sm text-center">
                            <b>Sélectionnez</b> vos caractéristiques principales et <b>obtenez</b> le listing de
                            mémoires correspondant
                        </p>
                        <a class="button group --has-trailing mt-8 --is-small text-dark --is-outlined --translate-icon-on-hover"
                            href="{{ route('selecteurMemoire') }}">


                            <span class="button__caption">
                                Configurateur mémoire
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
                </div>

                <div class="w-full p-4 mt-16 sm:w-1/2 xl:w-1/5">
                    <div
                        class="flex flex-col items-center justify-between w-full h-full px-12 py-8 border-2 border-primary-400">
                        <div class="w-24 h-24 -mt-16 bg-secondary-700">
                            <svg class="w-16 h-16 m-auto transition-transform transform text-primary-500 featured-icon-translate-top"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="73" height="76" viewBox="0 0 73 76">
                                <defs>
                                    <clipPath id="clip-path">
                                        <rect id="Rectangle_310" data-name="Rectangle 310" width="73" height="76"
                                            transform="translate(0 0.001)" fill="none" />
                                    </clipPath>
                                    <clipPath id="clip-path-2">
                                        <rect id="Rectangle_316" data-name="Rectangle 316" width="33" height="14"
                                            transform="translate(34.905 45.484)" fill="none" />
                                    </clipPath>
                                </defs>
                                <g id="Groupe_427" data-name="Groupe 427" transform="translate(0 -0.001)">
                                    <g id="Groupe_428" data-name="Groupe 428">
                                        <g id="Groupe_427-2" data-name="Groupe 427" clip-path="url(#clip-path)">
                                            <path id="Tracé_292" data-name="Tracé 292"
                                                d="M21.931,41.694A12.537,12.537,0,0,1,21.4,37.76a12.262,12.262,0,0,1,1.854-6.511l2.177,1.261a9.8,9.8,0,0,0-1.514,5.25,10.206,10.206,0,0,0,.418,3.179Z"
                                                fill="currentColor" />
                                            <path id="Tracé_293" data-name="Tracé 293"
                                                d="M27.588,29.46l-1.762-1.8a8.967,8.967,0,0,1,2.22-1.689l1.261,2.182a6.568,6.568,0,0,0-1.719,1.308"
                                                fill="currentColor" />
                                            <path id="Tracé_294" data-name="Tracé 294"
                                                d="M31.079,45.525a24.809,24.809,0,0,1,1.394-2.115,6.289,6.289,0,0,1,2.768-11.94l0,0a6.3,6.3,0,0,1,5.971,4.322q1.113-.607,2.278-1.1A8.806,8.806,0,1,0,31.079,45.525"
                                                fill="currentColor" />
                                            <path id="Tracé_295" data-name="Tracé 295"
                                                d="M28.394,67.25a28.272,28.272,0,0,1-14.586-8.205l1.81-1.749a25.486,25.486,0,0,0,13.323,7.5Z"
                                                fill="currentColor" />
                                            <path id="Tracé_296" data-name="Tracé 296"
                                                d="M61.122,27.89A27.668,27.668,0,0,0,47.541,12.945l1.121-2.254a30.177,30.177,0,0,1,14.807,16.3Z"
                                                fill="currentColor" />
                                            <path id="Tracé_297" data-name="Tracé 297"
                                                d="M44.59,11.7a18.1,18.1,0,0,0-1.945-.622L43.3,8.646a20.721,20.721,0,0,1,2.165.692Z"
                                                fill="currentColor" />
                                            <path id="Tracé_298" data-name="Tracé 298"
                                                d="M11.008,55.761A16.921,16.921,0,0,1,9.652,53.79L11.8,52.475A14.479,14.479,0,0,0,13,54.227Z"
                                                fill="currentColor" />
                                            <rect id="Rectangle_309" data-name="Rectangle 309" width="2.517"
                                                height="6.25" transform="translate(14.33 11.095) rotate(-43.326)"
                                                fill="currentColor" />
                                            <path id="Tracé_299" data-name="Tracé 299"
                                                d="M12.587,12.587a5.035,5.035,0,1,1,5.035-5.035,5.035,5.035,0,0,1-5.035,5.035m0-7.552A2.517,2.517,0,1,0,15.1,7.552a2.517,2.517,0,0,0-2.517-2.517"
                                                fill="currentColor" />
                                            <path id="Tracé_299" data-name="Tracé 299"
                                                d="M12.587,12.587a5.035,5.035,0,1,1,5.035-5.035,5.035,5.035,0,0,1-5.035,5.035m0-7.552A2.517,2.517,0,1,0,15.1,7.552a2.517,2.517,0,0,0-2.517-2.517"
                                                fill="currentColor" />
                                            <path id="Tracé_300" data-name="Tracé 300"
                                                d="M28.949,10.07a5.035,5.035,0,1,1,5.035-5.035,5.035,5.035,0,0,1-5.035,5.035m0-7.552a2.517,2.517,0,1,0,2.517,2.517,2.517,2.517,0,0,0-2.517-2.517"
                                                fill="currentColor" />
                                            <path id="Tracé_301" data-name="Tracé 301"
                                                d="M5.035,23.915A5.035,5.035,0,1,1,10.07,18.88a5.035,5.035,0,0,1-5.035,5.035m0-7.552A2.517,2.517,0,1,0,7.552,18.88a2.517,2.517,0,0,0-2.517-2.517"
                                                fill="currentColor" />
                                            <path id="Tracé_302" data-name="Tracé 302"
                                                d="M13.677,21.746,12.066,20.14H8.81V17.622h4.3l2.349,2.341Z"
                                                fill="currentColor" />
                                            <path id="Tracé_303" data-name="Tracé 303"
                                                d="M24.751,15.611,20.93,11.275l4.459-4.459,1.78,1.78-2.788,2.787,2.258,2.564Z"
                                                fill="currentColor" />
                                            <path id="Tracé_304" data-name="Tracé 304"
                                                d="M28.133,53.863a17.242,17.242,0,0,1-1.571-.779l-.834-.472-2.944,2.95L17.442,50.22l2.95-2.948-.475-.834a17.5,17.5,0,0,1-1.64-3.979l-.256-.923H13.845V33.985H18.02l.256-.924a17.5,17.5,0,0,1,1.64-3.977l.475-.834L17.441,25.3l5.342-5.342,2.946,2.949.834-.472a17.535,17.535,0,0,1,3.98-1.643l.923-.257V16.363h7.552v4.173l.923.257a17.607,17.607,0,0,1,3.981,1.643l.833.472L47.7,19.959,53.043,25.3l-2.95,2.948.475.834A17.544,17.544,0,0,1,52.1,32.717c.283-.011.565-.024.849-.024a24.622,24.622,0,0,1,6.2.786V31.467h-4.8a19.911,19.911,0,0,0-1.147-2.775L56.6,25.3l-8.9-8.9-3.389,3.392a20.182,20.182,0,0,0-2.777-1.147v-4.8H28.949v4.8a20.155,20.155,0,0,0-2.779,1.147L22.781,16.4l-8.9,8.9,3.392,3.391a19.9,19.9,0,0,0-1.145,2.775h-4.8V44.053h4.8a20.007,20.007,0,0,0,1.147,2.777l-3.392,3.391,8.9,8.9,3.389-3.392c.573.289,1.164.539,1.762.771a21.132,21.132,0,0,1,.2-2.637"
                                                fill="currentColor" />
                                        </g>
                                    </g>
                                    <rect id="Rectangle_311" data-name="Rectangle 311" width="1" height="1"
                                        transform="translate(58.905 49.484)" fill="currentColor" />
                                    <g id="Groupe_430" data-name="Groupe 430">
                                        <g id="Groupe_429" data-name="Groupe 429" clip-path="url(#clip-path-2)">
                                            <path id="Tracé_305" data-name="Tracé 305"
                                                d="M66.4,50.734l-3.746-3.75h-22.5L36.4,50.734l-1.06-1.061,3.75-3.749a1.49,1.49,0,0,1,1.064-.44h22.5a1.489,1.489,0,0,1,1.061.44l3.75,3.75Z"
                                                fill="currentColor" />
                                            <rect id="Rectangle_312" data-name="Rectangle 312" width="11"
                                                height="2" transform="translate(39.905 53.484)"
                                                fill="currentColor" />
                                            <rect id="Rectangle_313" data-name="Rectangle 313" width="1"
                                                height="2" transform="translate(59.905 53.484)"
                                                fill="currentColor" />
                                            <rect id="Rectangle_314" data-name="Rectangle 314" width="1"
                                                height="2" transform="translate(62.905 53.484)"
                                                fill="currentColor" />
                                            <path id="Tracé_306" data-name="Tracé 306"
                                                d="M66.4,59.734H46.9v-1.5H66.4v-7.5H61.9v-1.5h4.5a1.5,1.5,0,0,1,1.5,1.5v7.5a1.5,1.5,0,0,1-1.5,1.5"
                                                fill="currentColor" />
                                            <path id="Tracé_307" data-name="Tracé 307"
                                                d="M42.4,59.734h-6a1.5,1.5,0,0,1-1.5-1.5v-7.5a1.5,1.5,0,0,1,1.5-1.5h21v1.5h-21v7.5h6Z"
                                                fill="currentColor" />
                                            <rect id="Rectangle_315" data-name="Rectangle 315" width="2"
                                                height="1" transform="translate(43.905 58.484)"
                                                fill="currentColor" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <p class="text-sm text-center">
                            Utilisez un <b>configurateur complet</b> pour déterminer le NAS qui correspond à vos
                            besoins
                        </p>
                        <a class="button group --has-trailing mt-8 --is-small text-dark --is-outlined --translate-icon-on-hover"
                            href="{{ route('configurateurNas') }}">


                            <span class="button__caption">
                                Configurateur NAS
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
                </div>

                <div class="w-full p-4 mt-16 sm:w-1/2 xl:w-1/5">
                    <div
                        class="flex flex-col items-center justify-between w-full h-full px-12 py-8 border-2 border-primary-400">
                        <div class="w-24 h-24 -mt-16 bg-secondary-700">
                            <svg class="w-16 h-16 m-auto transition-transform transform text-primary-500 featured-icon-translate-top"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="66.296" height="70.257" viewBox="0 0 66.296 70.257">
                                <defs>
                                    <clipPath id="clip-path">
                                        <rect id="Rectangle_219" data-name="Rectangle 219" width="66.296"
                                            height="70.257" fill="currentColor" />
                                    </clipPath>
                                </defs>
                                <g id="Groupe_295" data-name="Groupe 295" transform="translate(0 0)">
                                    <rect id="Rectangle_203" data-name="Rectangle 203" width="3" height="3"
                                        transform="translate(51.268 5.746)" fill="currentColor" />
                                    <g id="Groupe_294" data-name="Groupe 294" transform="translate(0 0)">
                                        <g id="Groupe_293" data-name="Groupe 293" clip-path="url(#clip-path)">
                                            <path id="Tracé_191" data-name="Tracé 191"
                                                d="M61.447,8.552,55.339,2.443H18.69L12.581,8.552,10.854,6.824,16.962.716A2.427,2.427,0,0,1,18.69,0H55.339a2.427,2.427,0,0,1,1.727.716l6.108,6.108Z"
                                                transform="translate(2.406 0)" fill="currentColor" />
                                            <rect id="Rectangle_204" data-name="Rectangle 204" width="19"
                                                height="2" transform="translate(19.268 13.747)"
                                                fill="currentColor" />
                                            <rect id="Rectangle_205" data-name="Rectangle 205" width="3"
                                                height="2" transform="translate(52.268 13.747)"
                                                fill="currentColor" />
                                            <rect id="Rectangle_206" data-name="Rectangle 206" width="2"
                                                height="2" transform="translate(58.268 13.747)"
                                                fill="currentColor" />
                                            <rect id="Rectangle_207" data-name="Rectangle 207" width="3"
                                                height="2" transform="translate(51.268 25.747)"
                                                fill="currentColor" />
                                            <rect id="Rectangle_208" data-name="Rectangle 208" width="7.417"
                                                height="2.443"
                                                transform="matrix(0.707, -0.707, 0.707, 0.707, 13.26, 26.371)"
                                                fill="currentColor" />
                                            <rect id="Rectangle_209" data-name="Rectangle 209" width="2.443"
                                                height="7.419" transform="translate(58.608 22.853) rotate(-45)"
                                                fill="currentColor" />
                                            <rect id="Rectangle_210" data-name="Rectangle 210" width="12"
                                                height="2" transform="translate(26.268 33.747)"
                                                fill="currentColor" />
                                            <rect id="Rectangle_211" data-name="Rectangle 211" width="3"
                                                height="2" transform="translate(52.268 33.747)"
                                                fill="currentColor" />
                                            <rect id="Rectangle_212" data-name="Rectangle 212" width="2"
                                                height="2" transform="translate(58.268 33.747)"
                                                fill="currentColor" />
                                            <path id="Tracé_192" data-name="Tracé 192"
                                                d="M56.923,54.1H31.268V51.66H56.923V39.443h-7.33V37h7.33a2.447,2.447,0,0,1,2.443,2.443V51.66A2.447,2.447,0,0,1,56.923,54.1"
                                                transform="translate(6.93 8.201)" fill="currentColor" />
                                            <rect id="Rectangle_213" data-name="Rectangle 213" width="3"
                                                height="3" transform="translate(51.268 44.747)"
                                                fill="currentColor" />
                                            <rect id="Rectangle_214" data-name="Rectangle 214" width="10"
                                                height="3" transform="translate(39.268 44.747)"
                                                fill="currentColor" />
                                            <rect id="Rectangle_215" data-name="Rectangle 215" width="2.443"
                                                height="7.419" transform="translate(58.608 42.399) rotate(-45)"
                                                fill="currentColor" />
                                            <rect id="Rectangle_216" data-name="Rectangle 216" width="3"
                                                height="2" transform="translate(52.268 52.747)"
                                                fill="currentColor" />
                                            <rect id="Rectangle_217" data-name="Rectangle 217" width="2"
                                                height="2" transform="translate(58.268 52.747)"
                                                fill="currentColor" />
                                            <path id="Tracé_193" data-name="Tracé 193"
                                                d="M58.031,22.1H26.268V19.66H58.031V7.443H50.7V5h7.33a2.447,2.447,0,0,1,2.443,2.443V19.66A2.447,2.447,0,0,1,58.031,22.1"
                                                transform="translate(5.822 1.109)" fill="currentColor" />
                                            <path id="Tracé_194" data-name="Tracé 194"
                                                d="M22.482,22.1H12.711a2.447,2.447,0,0,1-2.443-2.443V7.443A2.446,2.446,0,0,1,12.711,5h34.2V7.443h-34.2V19.66h9.771Z"
                                                transform="translate(2.276 1.109)" fill="currentColor" />
                                            <rect id="Rectangle_218" data-name="Rectangle 218" width="3"
                                                height="2" transform="translate(27.268 20.747)"
                                                fill="currentColor" />
                                            <path id="Tracé_195" data-name="Tracé 195"
                                                d="M57.366,38.1h-28.1V35.66h28.1V23.443h-7.33V21h7.33a2.447,2.447,0,0,1,2.443,2.443V35.66A2.447,2.447,0,0,1,57.366,38.1"
                                                transform="translate(6.487 4.655)" fill="currentColor" />
                                            <path id="Tracé_196" data-name="Tracé 196"
                                                d="M12.711,28.33H10.268V23.443A2.446,2.446,0,0,1,12.711,21h34.2v2.443h-34.2Z"
                                                transform="translate(2.276 4.655)" fill="currentColor" />
                                            <path id="Tracé_197" data-name="Tracé 197"
                                                d="M6.4,45.507a7.906,7.906,0,0,1-.336-2.482,7.731,7.731,0,0,1,1.169-4.107l1.374.8a6.166,6.166,0,0,0-.955,3.312,6.422,6.422,0,0,0,.263,2.006Z"
                                                transform="translate(1.344 8.626)" fill="currentColor" />
                                            <path id="Tracé_198" data-name="Tracé 198"
                                                d="M17.932,48.618l-1.008-1.227a7.162,7.162,0,0,0,2.24-3.236l1.505.508a8.744,8.744,0,0,1-2.738,3.954"
                                                transform="translate(3.751 9.787)" fill="currentColor" />
                                            <path id="Tracé_199" data-name="Tracé 199"
                                                d="M20.676,42.456H19.088a4.8,4.8,0,0,0-.128-1.173l1.556-.315a6.431,6.431,0,0,1,.16,1.488"
                                                transform="translate(4.202 9.081)" fill="currentColor" />
                                            <path id="Tracé_200" data-name="Tracé 200"
                                                d="M9.464,38.393,8.352,37.259a5.6,5.6,0,0,1,1.4-1.065l.8,1.374a4.128,4.128,0,0,0-1.085.825"
                                                transform="translate(1.851 8.023)" fill="currentColor" />
                                            <path id="Tracé_201" data-name="Tracé 201"
                                                d="M14.223,48.847a5.558,5.558,0,1,1,5.558-5.558,5.565,5.565,0,0,1-5.558,5.558m0-9.529a3.97,3.97,0,1,0,3.97,3.97,3.975,3.975,0,0,0-3.97-3.97"
                                                transform="translate(1.921 8.363)" fill="currentColor" />
                                            <path id="Tracé_202" data-name="Tracé 202"
                                                d="M11.349,58.649a17.839,17.839,0,0,1-9.2-5.176l1.142-1.1a16.072,16.072,0,0,0,8.4,4.729Z"
                                                transform="translate(0.476 11.608)" fill="currentColor" />
                                            <path id="Tracé_203" data-name="Tracé 203"
                                                d="M.855,51.952A10.544,10.544,0,0,1,0,50.708l1.354-.829a9.253,9.253,0,0,0,.761,1.106Z"
                                                transform="translate(0 11.056)" fill="currentColor" />
                                            <path id="Tracé_204" data-name="Tracé 204"
                                                d="M19.923,60.1H11.982V57.076a12.657,12.657,0,0,1-1.752-.722L8.091,58.493,2.476,52.879l2.139-2.14a12.64,12.64,0,0,1-.722-1.751H.865V41.047H3.893A12.64,12.64,0,0,1,4.615,39.3l-2.139-2.14,5.615-5.615L10.23,33.68a12.656,12.656,0,0,1,1.752-.722V29.93h7.941v3.028a12.656,12.656,0,0,1,1.752.722l2.139-2.139,5.615,5.615L27.289,39.3a12.64,12.64,0,0,1,.722,1.751H31.04v7.941H28.011a12.64,12.64,0,0,1-.722,1.751l2.139,2.14-5.615,5.615-2.139-2.139a12.657,12.657,0,0,1-1.752.722ZM13.57,58.516h4.764V55.883l.583-.161a11.1,11.1,0,0,0,2.51-1.036l.525-.3,1.861,1.861,3.369-3.369-1.862-1.861.3-.527a11.066,11.066,0,0,0,1.036-2.509l.16-.583h2.635V42.635H26.816l-.16-.583a10.978,10.978,0,0,0-1.036-2.509l-.3-.527,1.862-1.861-3.369-3.369-1.861,1.861-.525-.3a11.1,11.1,0,0,0-2.51-1.036l-.583-.161V31.518H13.57v2.634l-.583.161a11.1,11.1,0,0,0-2.51,1.036l-.525.3L8.091,33.787,4.722,37.156l1.862,1.861-.3.527a10.978,10.978,0,0,0-1.036,2.509l-.16.583H2.453V47.4H5.088l.16.583a11.066,11.066,0,0,0,1.036,2.509l.3.527L4.722,52.879l3.369,3.369,1.861-1.861.525.3a11.1,11.1,0,0,0,2.51,1.036l.583.161Z"
                                                transform="translate(0.192 6.634)" fill="currentColor" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <p class="text-sm text-center">
                            <b>Sélectionnez</b> vos caractéristiques principales et <b>obtenez</b> le listing de NAS
                            correspondant
                        </p>
                        <a class="button group --has-trailing mt-8 --is-small text-dark --is-outlined --translate-icon-on-hover"
                            href="{{ route('selecteurNas') }}">


                            <span class="button__caption">
                                Sélecteur NAS
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
                </div>

                <div class="w-full p-4 mt-16 sm:w-1/2 xl:w-1/5">
                    <div
                        class="flex flex-col items-center justify-between w-full h-full px-12 py-8 border-2 border-primary-400">
                        <div class="w-24 h-24 -mt-16 bg-secondary-700">
                            <svg class="w-16 h-16 m-auto transition-transform transform text-primary-500 featured-icon-translate-top"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="75.947" height="76.362" viewBox="0 0 75.947 76.362">
                                <defs>
                                    <clipPath id="clip-path">
                                        <rect id="Rectangle_225" data-name="Rectangle 225" width="75.947"
                                            height="76.362" fill="currentColor" />
                                    </clipPath>
                                </defs>
                                <g id="Groupe_297" data-name="Groupe 297" transform="translate(0 0)">
                                    <g id="Groupe_296" data-name="Groupe 296" transform="translate(0 0)"
                                        clip-path="url(#clip-path)">
                                        <path id="Tracé_205" data-name="Tracé 205"
                                            d="M69.5,38.2l-7.565-6.724L60.227,33.4l7.561,6.721a1.265,1.265,0,0,1,.435.951,1.278,1.278,0,0,1-.275.779L46.357,69.391,2.574,29.517,31.446,9.13a1.25,1.25,0,0,1,1.568.084L43.49,18.582l.619-.693a7.423,7.423,0,0,1-.184-2.372l-9.2-8.229a3.907,3.907,0,0,0-4.761-.263L1.075,27.425a2.533,2.533,0,0,0-.234,3.956L44.631,71.3a2.528,2.528,0,0,0,3.709-.318L69.975,43.437a3.817,3.817,0,0,0,.823-2.363A3.861,3.861,0,0,0,69.5,38.2"
                                            transform="translate(0 1.821)" fill="currentColor" />
                                        <rect id="Rectangle_220" data-name="Rectangle 220" width="14.063" height="2.573"
                                            transform="translate(44.754 64.871) rotate(-51.869)" fill="currentColor" />
                                        <rect id="Rectangle_221" data-name="Rectangle 221" width="2.361" height="2.573"
                                            transform="matrix(0.617, -0.787, 0.787, 0.617, 55.935, 50.633)"
                                            fill="currentColor" />
                                        <rect id="Rectangle_222" data-name="Rectangle 222" width="2.355" height="2.574"
                                            transform="matrix(0.618, -0.786, 0.786, 0.618, 59.979, 45.48)"
                                            fill="currentColor" />
                                        <rect id="Rectangle_223" data-name="Rectangle 223" width="2.575" height="10.66"
                                            transform="translate(17.596 63.467) rotate(-47.638)" fill="currentColor" />
                                        <rect id="Rectangle_224" data-name="Rectangle 224" width="2.573" height="2.425"
                                            transform="matrix(0.685, -0.729, 0.729, 0.685, 27.748, 72.659)"
                                            fill="currentColor" />
                                        <path id="Tracé_206" data-name="Tracé 206"
                                            d="M42.582,69.376a3.746,3.746,0,0,1-2.536-.983L.841,32.651A2.557,2.557,0,0,1,0,30.759V24.323H2.574v6.436L41.782,66.491a1.215,1.215,0,0,0,1.528.061l3.029-2.344,1.576,2.036L44.886,68.59a3.8,3.8,0,0,1-2.3.786"
                                            transform="translate(0 6.986)" fill="currentColor" />
                                        <path id="Tracé_207" data-name="Tracé 207"
                                            d="M26.045,44.153A15.443,15.443,0,1,1,40.395,37.2L38.238,35.79a12.873,12.873,0,1,0-11.961,5.8Z"
                                            transform="translate(3.447 3.827)" fill="currentColor" />
                                        <path id="Tracé_208" data-name="Tracé 208"
                                            d="M20.843,33.27a5.82,5.82,0,0,1-1.926-1.394l-.237-.234,1.8-1.837.247.245a3.351,3.351,0,0,0,1.213.895Z"
                                            transform="translate(5.365 8.561)" fill="currentColor" />
                                        <path id="Tracé_209" data-name="Tracé 209"
                                            d="M32.246,28.03,29.777,27.3a6.121,6.121,0,0,0,.287-1.972h2.574a8.777,8.777,0,0,1-.393,2.706"
                                            transform="translate(8.553 7.274)" fill="currentColor" />
                                        <path id="Tracé_210" data-name="Tracé 210"
                                            d="M31.313,25.126a7.126,7.126,0,0,0-4-4.482A7.64,7.64,0,0,0,24,19.9V17.324a10.2,10.2,0,0,1,4.422.994,9.732,9.732,0,0,1,5.357,6.072Z"
                                            transform="translate(6.894 4.976)" fill="currentColor" />
                                        <path id="Tracé_211" data-name="Tracé 211"
                                            d="M17.878,31.02A10.658,10.658,0,0,1,16,25.323h2.574A8.075,8.075,0,0,0,20,29.559Z"
                                            transform="translate(4.596 7.273)" fill="currentColor" />
                                        <path id="Tracé_212" data-name="Tracé 212"
                                            d="M25.149,31.621A5.149,5.149,0,1,1,30.3,26.472a5.154,5.154,0,0,1-5.149,5.149m0-7.723a2.574,2.574,0,1,0,2.574,2.574A2.578,2.578,0,0,0,25.149,23.9"
                                            transform="translate(5.745 6.124)" fill="currentColor" />
                                        <path id="Tracé_213" data-name="Tracé 213"
                                            d="M30.793,46.057A5.8,5.8,0,0,1,25,40.264v-7.08a3.854,3.854,0,0,1,7.179-1.958l3.59,6.107a5.766,5.766,0,0,1-4.976,8.724M28.862,31.9a1.288,1.288,0,0,0-1.287,1.287v7.08a3.218,3.218,0,1,0,6.436,0,3.16,3.16,0,0,0-.46-1.624v0l-3.588-6.1a1.274,1.274,0,0,0-1.1-.637"
                                            transform="translate(7.181 8.422)" fill="currentColor" />
                                        <path id="Tracé_214" data-name="Tracé 214"
                                            d="M59.243,14.7H56.668a15.336,15.336,0,0,0-2.994-9.142l2.074-1.525A17.879,17.879,0,0,1,59.243,14.7"
                                            transform="translate(15.417 1.159)" fill="currentColor" />
                                        <path id="Tracé_215" data-name="Tracé 215"
                                            d="M51.518,3.459a9.087,9.087,0,0,0-1.827-1.177L50.883,0A11.576,11.576,0,0,1,53.1,1.43Z"
                                            transform="translate(14.273 -0.001)" fill="currentColor" />
                                        <path id="Tracé_216" data-name="Tracé 216"
                                            d="M33,16.508A13.184,13.184,0,1,1,46.185,29.692,13.2,13.2,0,0,1,33,16.508m2.029,0A11.156,11.156,0,1,0,46.185,5.351,11.169,11.169,0,0,0,35.029,16.508"
                                            transform="translate(9.479 0.955)" fill="currentColor" />
                                        <path id="Tracé_217" data-name="Tracé 217"
                                            d="M56.1,32.535a2.011,2.011,0,0,0,1.559-.754l4.079-5.1a1.972,1.972,0,0,0-.393-2.864l-8.757-5.675-1.1,1.7L60.2,25.484l-4.114,5.023L49.523,21.73,47.9,22.951l6.591,8.76a2,2,0,0,0,1.61.825"
                                            transform="translate(13.759 5.21)" fill="currentColor" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <p class="text-sm text-center">
                            <b>Sélectionnez</b> le nombre et la capacité des disques de votre NAS pour
                            <b>comparer</b> les différents niveaux de RAID disponibles
                        </p>
                        <a class="button group --has-trailing mt-8 --is-small text-dark --is-outlined --translate-icon-on-hover"
                            href="{{ route('comparateurRaid') }}">


                            <span class="button__caption">
                                Comparateur RAID
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
                </div>

            </div>
            <div class="flex flex-row flex-wrap justify-center w-full">

                <a class="button group w-full mx-2 mt-4 lg:w-auto --is-rounded --is-small --is-secondary" href="">


                    <span class="button__caption">
                        Quel NAS choisir ?
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
                <a class="button group w-full mx-2 mt-4 lg:w-auto --is-rounded --is-small --is-secondary" href="">


                    <span class="button__caption">
                        Quel SAN choisir ?
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
                <a class="button group w-full mx-2 mt-4 lg:w-auto --is-rounded --is-small --is-secondary" href="">


                    <span class="button__caption">
                        Quel mémoire choisir ?
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
            </div>
        </div>
    </div>

    <div class="relative z-10 px-4 py-8 mb-16 bg-secondary-700">
        <div class="relative mx-auto max-w-big" x-data="{ tab: 0, swiper: null }" x-init="swiper = new Swiper($refs.container, { loop: true, allowTouchMove: false })">
            <div class="relative flex justify-center w-full lg:justify-start">
                <hr class="absolute w-full border-secondary-600" style="z-index: -1">
                <a href="#" @click.prevent="tab = 0; swiper.slideTo(1)"
                    class="inline-flex items-center h-8 px-4 mx-2 -mt-4 text-sm font-bold uppercase lg:pr-4 lg:px-0 lg:mx-0 bg-secondary-700 text-tertiary-500"
                    :class="tab == 0 ? 'text-tertiary-500' : 'text-gray-300 hover:text-white'">Promotions</a>
                <a href="#" @click.prevent="tab = 1; swiper.slideTo(2)"
                    class="inline-flex items-center h-8 px-4 mx-2 -mt-4 text-sm font-bold uppercase lg:pr-4 lg:px-0 lg:mx-0 bg-secondary-700 text-gray-300 hover:text-white"
                    :class="tab == 1 ? 'text-tertiary-500' : 'text-gray-300 hover:text-white'">Nouveautés</a>
            </div>

            <div class="overflow-x-hidden swiper-container swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden"
                x-ref="container">
                <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-1317px, 0px, 0px);"
                    id="swiper-wrapper-154a72c872d65b66" aria-live="polite">
                    <div class="grid grid-cols-1 gap-8 mt-8 swiper-slide sm:grid-cols-2 lg:grid-cols-4 swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next"
                        data-swiper-slide-index="1" style="width: 1317px;" role="group" aria-label="2 / 2">

                        @foreach ($homeNouveautes as $nouveaute)
                            <a wire:id="7g27qcyVCW2fMwnH6Ooh" href="{{ route('produits.show', $nouveaute->slug) }}"
                                class="productLink flex flex-col h-full max-w-full overflow-hidden rounded-sm shadow-lg bg-secondary-600 hover:bg-secondary-700">
                                <div class="relative h-48 p-2 bg-white sm:h-64 lg:max-h-full">
                                    <img class="h-full w-full object-contain"
                                        onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                        sizes="22vw" src="{{ asset($nouveaute->photosUrl[0]) }}" width="768"
                                        height="768">

                                    <div class="absolute h-6 bg-gray-100 bottom-2 left-2">
                                        <img class="block object-contain object-left w-auto h-full mb-2"
                                            srcset="https://sqp.fr/storage/products/brands/3/medias/3/responsive-images/qnap___media_library_original_296_53.png 296w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMjk2IDU0Ij4KCTxpbWFnZSB3aWR0aD0iMjk2IiBoZWlnaHQ9IjU0IiB4bGluazpocmVmPSJkYXRhOmltYWdlL2pwZWc7YmFzZTY0LC85ai80QUFRU2taSlJnQUJBUUVBWUFCZ0FBRC8vZ0E3UTFKRlFWUlBVam9nWjJRdGFuQmxaeUIyTVM0d0lDaDFjMmx1WnlCSlNrY2dTbEJGUnlCMk9EQXBMQ0J4ZFdGc2FYUjVJRDBnT1RBSy85c0FRd0FEQWdJREFnSURBd01EQkFNREJBVUlCUVVFQkFVS0J3Y0dDQXdLREF3TENnc0xEUTRTRUEwT0VRNExDeEFXRUJFVEZCVVZGUXdQRnhnV0ZCZ1NGQlVVLzlzQVF3RURCQVFGQkFVSkJRVUpGQTBMRFJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVUvOEFBRVFnQUJRQWJBd0VSQUFJUkFRTVJBZi9FQUI4QUFBRUZBUUVCQVFFQkFBQUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVRQUFJQkF3TUNCQU1GQlFRRUFBQUJmUUVDQXdBRUVRVVNJVEZCQmhOUllRY2ljUlF5Z1pHaENDTkNzY0VWVXRId0pETmljb0lKQ2hZWEdCa2FKU1luS0NrcU5EVTJOemc1T2tORVJVWkhTRWxLVTFSVlZsZFlXVnBqWkdWbVoyaHBhbk4wZFhaM2VIbDZnNFNGaG9lSWlZcVNrNVNWbHBlWW1acWlvNlNscHFlb3FhcXlzN1MxdHJlNHVickN3OFRGeHNmSXljclMwOVRWMXRmWTJkcmg0dVBrNWVibjZPbnE4Zkx6OVBYMjkvajUrdi9FQUI4QkFBTUJBUUVCQVFFQkFRRUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVSQUFJQkFnUUVBd1FIQlFRRUFBRUNkd0FCQWdNUkJBVWhNUVlTUVZFSFlYRVRJaktCQ0JSQ2thR3h3UWtqTTFMd0ZXSnkwUW9XSkRUaEpmRVhHQmthSmljb0tTbzFOamM0T1RwRFJFVkdSMGhKU2xOVVZWWlhXRmxhWTJSbFptZG9hV3B6ZEhWMmQzaDVlb0tEaElXR2g0aUppcEtUbEpXV2w1aVptcUtqcEtXbXA2aXBxckt6dExXMnQ3aTV1c0xEeE1YR3g4akp5dExUMU5YVzE5aloydUxqNU9YbTUranA2dkx6OVBYMjkvajUrdi9hQUF3REFRQUNFUU1SQUQ4QS9TaFhlMGE3bUIzRkVac0hQUDYveW9BNC9Udkc5M2IrRGRiMW93eG01dGJXSzVSUmtMKzh0MG4yOStoa3hudmpQR2NVQWFROFM2elpMcmVuM04xQmMzdGhkUld5M2FRR05XOHlPTnczbDdqakhtWXh1NXgyendBU1A0TThmczdGZkhlbktwUEEvc0Jqai95YW9BLy8yUT09Ij4KCTwvaW1hZ2U+Cjwvc3ZnPg== 32w"
                                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                            sizes="10vw"
                                            src="https://sqp.fr/storage/products/brands/3/medias/3/qnap.png"
                                            width="296" height="53">

                                    </div>
                                </div>
                                <div class="flex flex-col flex-1 px-4 pt-4 pb-8">

                                    <table class="w-full text-xs uppercase border-separate"
                                        style="border-spacing: 0 .25rem">
                                        <tbody>
                                            <tr class="text-primary-500">
                                                <td class="w-0 pr-2 whitespace-nowrap">Ref. DGTEC:</td>
                                                <th>{{ $nouveaute->id }}</th>
                                            </tr>
                                            <tr class="text-secondary-300">
                                                <td class="w-0 pr-2 whitespace-nowrap">Ref. Fabricant:</td>
                                                <th>{{ $nouveaute->ref_fabricant }}</th>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <span
                                        class="flex-1 mt-2 mb-4 overflow-hidden text-xs text-white uppercase break-all ">{{ $nouveaute->name }}</span>


                                    <div class="mb-2">
                                        <p class="text-xs font-bold text-center uppercase text-secondary-300">
                                            @if ($nouveaute->quantiteStock > 0)
                                                Disponible
                                            @else
                                                Épuisé provisoirement
                                            @endif
                                        </p>
                                    </div>

                                    <div class="flex justify-between w-full mt-auto mb-0 space-x-2">
                                        <button class="button group --is-outlined --is-small --is-tertiary"
                                            wire:click.prevent="toggleCompare" wire:loading.class="--is-loading"
                                            type="button">


                                            <span class="button__caption">
                                                Comparer
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

                                        <button id="{{ $nouveaute->id }}"
                                            class="addToCart button group w-full px-4 text-center --is-small --is-tertiary"
                                            wire:loading.class="--is-loading" type="button">


                                            <span class="button__caption">
                                                <span class="sr-only">Ajouter au panier</span>
                                                <svg class="h-6 mx-auto" transform="scale(-1,1)" fill="currentColor"
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
                                                        r="10" stroke="currentColor" stroke-width="4">
                                                    </circle>
                                                    <path class="opacity-75" fill="currentColor"
                                                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </a>
                        @endforeach

                        <!-- Livewire Component wire-end:CR21Xr9LIkUwq94owrYn -->
                        <div class="grid col-span-full">
                            <a class="button group --has-trailing w-full mx-auto mt-4 lg:w-auto --translate-icon-on-hover "
                                href="https://sqp.fr/nouveautes-stockage-professionnel">


                                <span class="button__caption">
                                    Toutes les nouveautés ({{ $nouveautesCount }} produits)
                                </span>

                                <span class="button__trailing">
                                    <svg class="h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
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
                            </a>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-8 mt-8 swiper-slide sm:grid-cols-2 lg:grid-cols-4 swiper-slide-active"
                        data-swiper-slide-index="0" style="width: 1317px;" role="group" aria-label="1 / 2">

                        @foreach ($homePromos as $nouveaute)
                            <a wire:id="R29ZoJfYlB1GqjAAqIv3" href="{{ route('produits.show', $nouveaute->slug) }}"
                                class="productLink flex flex-col h-full max-w-full overflow-hidden rounded-sm shadow-lg bg-secondary-600 hover:bg-secondary-700">
                                <div class="relative h-48 p-2 bg-white sm:h-64 lg:max-h-full">
                                    <img class="h-full w-full object-contain"
                                        onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                        sizes="22vw" src="{{ asset($nouveaute->photosUrl[0]) }}" width="768"
                                        height="768">

                                    <div class="absolute h-6 bg-gray-100 bottom-2 left-2">
                                        <img class="block object-contain object-left w-auto h-full mb-2"
                                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                            sizes="6vw" src="{{ asset($nouveaute->brand->logo_url) }}"
                                            width="290" height="96">

                                    </div>
                                </div>
                                <div class="flex flex-col flex-1 px-4 pt-4 pb-8">

                                    <table class="w-full text-xs uppercase border-separate"
                                        style="border-spacing: 0 .25rem">
                                        <tbody>
                                            <tr class="text-primary-500">
                                                <td class="w-0 pr-2 whitespace-nowrap">Ref. DGTEC:</td>
                                                <th>{{ $nouveaute->id }}</th>
                                            </tr>
                                            <tr class="text-secondary-300">
                                                <td class="w-0 pr-2 whitespace-nowrap">Ref. Fabricant:</td>
                                                <th>{{ $nouveaute->ref_fabricant }}</th>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <span
                                        class="flex-1 mt-2 mb-4 overflow-hidden text-xs text-white uppercase break-all ">{{ $nouveaute->name }}</span>


                                    <div class="mb-2">
                                        <p class="text-xs font-bold text-center uppercase text-primary-500">
                                            @if ($nouveaute->quantiteStock > 0)
                                                En stock
                                            @else
                                                Rupture de stock
                                            @endif
                                        </p>
                                    </div>

                                    <div class="flex justify-between w-full mt-auto mb-0 space-x-2">
                                        <button class="button group --is-outlined --is-small --is-tertiary"
                                            wire:click.prevent="toggleCompare" wire:loading.class="--is-loading"
                                            type="button">


                                            <span class="button__caption">
                                                Comparer
                                            </span>


                                            <span class="button__spinner">
                                                <svg class="w-4 h-4 animate-spin" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <circle class="opacity-25" cx="12" cy="12"
                                                        r="10" stroke="currentColor" stroke-width="4">
                                                    </circle>
                                                    <path class="opacity-75" fill="currentColor"
                                                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </button>

                                        <button id="{{ $nouveaute->id }}"
                                            class="button group w-full px-4 text-center --is-small --is-tertiary addToCart"
                                            wire:loading.class="--is-loading" type="button">


                                            <span class="button__caption">
                                                <span class="sr-only">Ajouter au panier</span>
                                                <svg class="h-6 mx-auto" transform="scale(-1,1)" fill="currentColor"
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
                                                        r="10" stroke="currentColor" stroke-width="4">
                                                    </circle>
                                                    <path class="opacity-75" fill="currentColor"
                                                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </a>
                        @endforeach

                        <!-- Livewire Component wire-end:fFIMINK933s6KqTpV4Rr -->
                        <div class="grid col-span-full">
                            <a class="productLink button group --has-trailing w-full mx-auto mt-4 lg:w-auto --translate-icon-on-hover "
                                href="https://sqp.fr/promotions-stockage-professionnel">


                                <span class="button__caption">
                                    Toutes les promotions ({{ $promosCount }} produits)
                                </span>

                                <span class="button__trailing">
                                    <svg class="h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
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
                            </a>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-8 mt-8 swiper-slide sm:grid-cols-2 lg:grid-cols-4 swiper-slide-next swiper-slide-duplicate-prev"
                        data-swiper-slide-index="1" style="width: 1317px;" role="group" aria-label="2 / 2">

                        @foreach ($homeNouveautes as $nouveaute)
                            <a wire:id="R29ZoJfYlB1GqjAAqIv3" href="{{ route('produits.show', $nouveaute->slug) }}"
                                class="productLink flex flex-col h-full max-w-full overflow-hidden rounded-sm shadow-lg bg-secondary-600 hover:bg-secondary-700">
                                <div class="relative h-48 p-2 bg-white sm:h-64 lg:max-h-full">
                                    <img class="h-full w-full object-contain"
                                        onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                        sizes="22vw" src="{{ asset($nouveaute->photosUrl[0]) }}" width="768"
                                        height="768">

                                    <div class="absolute h-6 bg-gray-100 bottom-2 left-2">
                                        <img class="block object-contain object-left w-auto h-full mb-2"
                                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                            sizes="6vw" src="{{ asset($nouveaute->brand->logo_url) }}"
                                            width="290" height="96">

                                    </div>
                                </div>
                                <div class="flex flex-col flex-1 px-4 pt-4 pb-8">

                                    <table class="w-full text-xs uppercase border-separate"
                                        style="border-spacing: 0 .25rem">
                                        <tbody>
                                            <tr class="text-primary-500">
                                                <td class="w-0 pr-2 whitespace-nowrap">Ref. DGTEC:</td>
                                                <th>{{ $nouveaute->id }}</th>
                                            </tr>
                                            <tr class="text-secondary-300">
                                                <td class="w-0 pr-2 whitespace-nowrap">Ref. Fabricant:</td>
                                                <th>{{ $nouveaute->ref_fabricant }}</th>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <span
                                        class="flex-1 mt-2 mb-4 overflow-hidden text-xs text-white uppercase break-all ">{{ $nouveaute->name }}</span>


                                    <div class="mb-2">
                                        <p class="text-xs font-bold text-center uppercase text-primary-500">
                                            @if ($nouveaute->quantiteStock > 0)
                                                En stock
                                            @else
                                                Rupture de stock
                                            @endif
                                        </p>
                                    </div>

                                    <div class="flex justify-between w-full mt-auto mb-0 space-x-2">
                                        <button class="button group --is-outlined --is-small --is-tertiary"
                                            wire:click.prevent="toggleCompare" wire:loading.class="--is-loading"
                                            type="button">


                                            <span class="button__caption">
                                                Comparer
                                            </span>


                                            <span class="button__spinner">
                                                <svg class="w-4 h-4 animate-spin" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <circle class="opacity-25" cx="12" cy="12"
                                                        r="10" stroke="currentColor" stroke-width="4">
                                                    </circle>
                                                    <path class="opacity-75" fill="currentColor"
                                                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </button>

                                        <button id="{{ $nouveaute->id }}"
                                            class="addToCart button group w-full px-4 text-center --is-small --is-tertiary"
                                            wire:loading.class="--is-loading" type="button">


                                            <span class="button__caption">
                                                <span class="sr-only">Ajouter au panier</span>
                                                <svg class="h-6 mx-auto" transform="scale(-1,1)" fill="currentColor"
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
                                                        r="10" stroke="currentColor" stroke-width="4">
                                                    </circle>
                                                    <path class="opacity-75" fill="currentColor"
                                                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </a>
                        @endforeach

                        <!-- Livewire Component wire-end:CR21Xr9LIkUwq94owrYn -->
                        <div class="grid col-span-full">
                            <a class="productLink button group --has-trailing w-full mx-auto mt-4 lg:w-auto --translate-icon-on-hover "
                                href="https://sqp.fr/nouveautes-stockage-professionnel">


                                <span class="button__caption">
                                    Toutes les nouveautés ({{ $nouveautesCount }} produits)
                                </span>

                                <span class="button__trailing">
                                    <svg class="h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
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
                            </a>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-8 mt-8 swiper-slide sm:grid-cols-2 lg:grid-cols-4 swiper-slide-duplicate swiper-slide-duplicate-active"
                        data-swiper-slide-index="0" role="group" aria-label="1 / 2" style="width: 1317px;">
                        @foreach ($homePromos as $nouveaute)
                            <a wire:id="R29ZoJfYlB1GqjAAqIv3" href="{{ route('produits.show', $nouveaute->slug) }}"
                                class="productLink flex flex-col h-full max-w-full overflow-hidden rounded-sm shadow-lg bg-secondary-600 hover:bg-secondary-700">
                                <div class="relative h-48 p-2 bg-white sm:h-64 lg:max-h-full">
                                    <img class="h-full w-full object-contain"
                                        onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                        sizes="22vw" src="{{ asset($nouveaute->photosUrl[0]) }}" width="768"
                                        height="768">

                                    <div class="absolute h-6 bg-gray-100 bottom-2 left-2">
                                        <img class="block object-contain object-left w-auto h-full mb-2"
                                            onload="window.requestAnimationFrame(function(){if(!(size=getBoundingClientRect().width))return;onload=null;sizes=Math.ceil(size/window.innerWidth*100)+'vw';});"
                                            sizes="6vw" src="{{ asset($nouveaute->brand->logo_url) }}"
                                            width="290" height="96">

                                    </div>
                                </div>
                                <div class="flex flex-col flex-1 px-4 pt-4 pb-8">
                                    <div
                                        class="w-full px-4 py-2 mb-4 text-xs font-medium text-right border-l-4 rounded-sm bg-secondary-700 border-primary-500 text-primary-500">
                                        {{ $nouveaute->dateFinPromo }}
                                    </div>

                                    <table class="w-full text-xs uppercase border-separate"
                                        style="border-spacing: 0 .25rem">
                                        <tbody>
                                            <tr class="text-primary-500">
                                                <td class="w-0 pr-2 whitespace-nowrap">Ref. DGTEC:</td>
                                                <th>{{ $nouveaute->id }}</th>
                                            </tr>
                                            <tr class="text-secondary-300">
                                                <td class="w-0 pr-2 whitespace-nowrap">Ref. Fabricant:</td>
                                                <th>{{ $nouveaute->ref_fabricant }}</th>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <span
                                        class="flex-1 mt-2 mb-4 overflow-hidden text-xs text-white uppercase break-all ">{{ $nouveaute->name }}</span>


                                    <div class="mb-2">
                                        <p class="text-xs font-bold text-center uppercase text-primary-500">
                                            @if ($nouveaute->quantiteStock > 0)
                                                En stock
                                            @else
                                                Rupture de stock
                                            @endif
                                        </p>
                                    </div>

                                    <div class="flex justify-between w-full mt-auto mb-0 space-x-2">
                                        <button class="button group --is-outlined --is-small --is-tertiary"
                                            wire:click.prevent="toggleCompare" wire:loading.class="--is-loading"
                                            type="button">


                                            <span class="button__caption">
                                                Comparer
                                            </span>


                                            <span class="button__spinner">
                                                <svg class="w-4 h-4 animate-spin" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <circle class="opacity-25" cx="12" cy="12"
                                                        r="10" stroke="currentColor" stroke-width="4">
                                                    </circle>
                                                    <path class="opacity-75" fill="currentColor"
                                                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </button>

                                        <button id="{{ $nouveaute->id }}"
                                            class="addToCart button group w-full px-4 text-center --is-small --is-tertiary"
                                            wire:loading.class="--is-loading" type="button">


                                            <span class="button__caption">
                                                <span class="sr-only">Ajouter au panier</span>
                                                <svg class="h-6 mx-auto" transform="scale(-1,1)" fill="currentColor"
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
                                                        r="10" stroke="currentColor" stroke-width="4">
                                                    </circle>
                                                    <path class="opacity-75" fill="currentColor"
                                                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </a>
                        @endforeach

                        <!-- Livewire Component wire-end:fFIMINK933s6KqTpV4Rr -->
                        <div class="grid col-span-full">
                            <a class="button group --has-trailing w-full mx-auto mt-4 lg:w-auto --translate-icon-on-hover "
                                href="https://sqp.fr/promotions-stockage-professionnel">


                                <span class="button__caption">
                                    Toutes les promotions ({{ $promosCount }} produits)
                                </span>

                                <span class="button__trailing">
                                    <svg class="h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
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
                            </a>
                        </div>
                    </div>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
    </div>
    <script src="{{ asset('dist/js/jquery.toast.min.js') }}"></script>

    <script>
        $('.addToCart').on('click', function() {
            $(".productLink").click(function(e) {
                e.preventDefault();
            });

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
                    $('#lblCartCount').text(count((array) session('cart')));
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
        });
        $(".productLink").unbind('click');
    </script>
@endsection
