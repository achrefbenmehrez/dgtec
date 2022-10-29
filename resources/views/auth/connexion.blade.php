@extends('layouts.app')

@section('content')
    <div wire:id="4N6lNyWyhrWUPx34OZSv"
        wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;4N6lNyWyhrWUPx34OZSv&quot;,&quot;name&quot;:&quot;website.auth.loginForm&quot;,&quot;locale&quot;:&quot;fr&quot;,&quot;path&quot;:&quot;connexion&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;6df856f9&quot;,&quot;data&quot;:{&quot;login&quot;:null,&quot;password&quot;:null,&quot;rememberMe&quot;:0,&quot;error&quot;:&quot;&quot;,&quot;honeyInputs&quot;:{&quot;honey_present&quot;:null,&quot;honey_time&quot;:&quot;eyJpdiI6IkJGNld2eDBQUW1nN3BCTExJWTByR1E9PSIsInZhbHVlIjoiaXdHaVBONWk5TkJSUWJKVzVkZVJzNnlwaVpRZG80Mm9DcUs4R050M1drTT0iLCJtYWMiOiIzNTgyMzBkN2RlODJhMTVlMGJmMGRlMWIzZGNmMjk4YzBkMGNhODhjMTE5YWU0MzFkYzExZmFjYjc3MzEzNTk2IiwidGFnIjoiIn0=&quot;,&quot;honey_javascript&quot;:null,&quot;honey_recaptcha_token&quot;:null}},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;63746a49825538155dece5766edb70a661a69b07da7412a88211f4ffbd6f3195&quot;}}"
        class="w-full px-4">
        <form action="{{ route('connexion.post') }}" method="POST"
            class="max-w-5xl mx-auto mt-8 mb-16 overflow-hidden text-white bg-opacity-50 rounded-sm bg-secondary-600 sm:grid md:grid-cols-3 lg:grid-cols-2">
            @csrf
            <div class="col-span-1 p-16 md:col-span-2 lg:col-span-1">
                <h2 class="mb-4 text-2xl font-bold text-center text-primary-500">Connexion espace client</h2>

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
                <input action="{{ route('connexion.post') }}" method="POST" type="hidden" name="honey_recaptcha_token">
                <p class="text-base text-center">Veuillez saisir ci-dessous vos identifiants afin d&#039;accéder à
                    votre espace personnel</p>


                <div class="grid grid-cols-1 mt-6 gap-y-6 gap-x-4">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif

                    @if (session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5" class="sm:col-span-6">
                        <label for="login" class="py-2 flex flex-col text-sm font-medium text-white sm:mt-px ">
                            Login
                        </label>

                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <div class="relative flex max-w-lg bg-red-400 rounded-md shadow-sm">

                                <input name="login"
                                    class="bg-secondary-600 max-w-full outline-none block flex-1 px-4 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-transparent appearance-none sm:text-sm sm:leading-5 focus:ring-1 focus:border-transparent  focus:ring-primary-500 focus:border-primary-500 rounded-l-sm rounded-r-sm"
                                    id="login" required wire:model.defer="login">

                                @error('login')
                                    <div class="error">{{ $message }}</div>
                                @enderror

                            </div>
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5" class="sm:col-span-6">
                        <label for="password" class="py-2 flex flex-col text-sm font-medium text-white sm:mt-px ">
                            Mot de passe
                        </label>

                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <div class="relative flex max-w-lg bg-red-400 rounded-md shadow-sm">

                                <input name="password"
                                    class="bg-secondary-600 max-w-full outline-none block flex-1 px-4 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-transparent appearance-none sm:text-sm sm:leading-5 focus:ring-1 focus:border-transparent  focus:ring-primary-500 focus:border-primary-500 rounded-l-sm rounded-r-sm"
                                    id="password" required type="password" wire:model.defer="password">

                                @error('password')
                                    <div class="error">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="mt-2">
                                <a href="#" wire:click.prevent="resetPassword"
                                    class="px-2 text-xs text-secondary-300 hover:text-white">Mot de passe oublié
                                    ?</a>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col">
                        <button
                            class="button group --has-trailing w-full mx-auto mt-4 --translate-icon-on-hover --is-white --is-rounded"
                            type="submit">


                            <span class="button__caption">
                                Connexion
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
                        </button>
                        <a class="button group w-full mx-auto mt-4 --is-outlined --is-white --is-rounded"
                            href="{{ route('inscription') }}">


                            <span class="button__caption">
                                Je ne suis pas client DGTEC
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
            <div class="hidden md:block">
                <img class="object-cover w-full h-full" src="https://sqp.fr/web/img/bg_sav.jpg" alt="background">
            </div>
        </form>
    </div>

    <!-- Livewire Component wire-end:4N6lNyWyhrWUPx34OZSv -->
@endsection
