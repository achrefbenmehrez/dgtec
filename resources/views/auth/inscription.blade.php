@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center px-4 py-12 sm:px-6 lg:px-8">

        <div class="w-full max-w-5xl space-y-8">

            <h2 class="mb-4 text-2xl font-bold text-primary-500">Créer mon compte DGTEC</h2>

            <form class="space-y-8" method="POST" action="{{ route('inscription.post') }}" enctype="multipart/form-data">
                @csrf
                <form action="{{ route('inscription.post') }}" type="hidden" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="space-y-8 sm:space-y-5">
                        <div>
                            <div>
                                <h3 class="text-lg font-medium leading-6 text-primary-500">
                                    Compte administrateur
                                </h3>
                            </div>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="mt-6 space-y-6 sm:mt-5 sm:space-y-5">
                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                                    <label for="form.account_first_name"
                                        class="py-2 flex flex-col text-sm font-medium sm:mt-px ">
                                        Prénom
                                    </label>

                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <div class="relative flex max-w-lg bg-red-400 rounded-md shadow-sm">

                                            <input name="prenom"
                                                class="bg-secondary-300 max-w-full outline-none block flex-1 px-4 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-transparent appearance-none sm:text-sm sm:leading-5 focus:ring-1 focus:border-transparent  focus:ring-primary-500 focus:border-primary-500 rounded-l-sm rounded-r-sm"
                                                id="form.account_first_name" required wire:model="form.account_first_name"
                                                value="{{ old('prenom') }}">



                                        </div>
                                    </div>
                                </div>

                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                                    <label for="form.account_last_name"
                                        class="py-2 flex flex-col text-sm font-medium sm:mt-px ">
                                        Nom
                                    </label>

                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <div class="relative flex max-w-lg bg-red-400 rounded-md shadow-sm">

                                            <input name="nom"
                                                class="bg-secondary-300 max-w-full outline-none block flex-1 px-4 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-transparent appearance-none sm:text-sm sm:leading-5 focus:ring-1 focus:border-transparent  focus:ring-primary-500 focus:border-primary-500 rounded-l-sm rounded-r-sm"
                                                id="form.account_last_name" required wire:model="form.account_last_name"
                                                value="{{ old('nom') }}">



                                        </div>
                                    </div>
                                </div>

                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                                    <label for="form.account_phone"
                                        class="py-2 flex flex-col text-sm font-medium sm:mt-px ">
                                        Téléphone
                                    </label>

                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <div class="relative flex max-w-lg bg-red-400 rounded-md shadow-sm">

                                            <input name="telephone"
                                                class="bg-secondary-300 max-w-full outline-none block flex-1 px-4 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-transparent appearance-none sm:text-sm sm:leading-5 focus:ring-1 focus:border-transparent  focus:ring-primary-500 focus:border-primary-500 rounded-l-sm rounded-r-sm"
                                                type="number" min="0" max="999999999" id="form.account_phone"
                                                required wire:model="form.account_phone" value="{{ old('telephone') }}">



                                        </div>
                                    </div>
                                </div>

                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                                    <label for="form.account_email"
                                        class="py-2 flex flex-col text-sm font-medium sm:mt-px ">
                                        Email
                                    </label>

                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <div class="relative flex max-w-lg bg-red-400 rounded-md shadow-sm">

                                            <input name="email"
                                                class="bg-secondary-300 max-w-full outline-none block flex-1 px-4 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-transparent appearance-none sm:text-sm sm:leading-5 focus:ring-1 focus:border-transparent  focus:ring-primary-500 focus:border-primary-500 rounded-l-sm rounded-r-sm"
                                                id="form.account_email" required type="email"
                                                wire:model="form.account_email" value="{{ old('email') }}">



                                        </div>
                                    </div>
                                </div>

                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                                    <label for="form.account_login"
                                        class="py-2 flex flex-col text-sm font-medium sm:mt-px ">
                                        Login
                                    </label>

                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <div class="relative flex max-w-lg bg-red-400 rounded-md shadow-sm">

                                            <input name="login"
                                                class="bg-secondary-300 max-w-full outline-none block flex-1 px-4 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-transparent appearance-none sm:text-sm sm:leading-5 focus:ring-1 focus:border-transparent  focus:ring-primary-500 focus:border-primary-500 rounded-l-sm rounded-r-sm"
                                                id="form.account_login" required wire:model="form.account_login"
                                                value="{{ old('login') }}">



                                        </div>
                                    </div>
                                </div>

                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                                    <label for="form.account_password"
                                        class="py-2 flex flex-col text-sm font-medium sm:mt-px ">
                                        Mot de passe
                                    </label>

                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <div class="relative flex max-w-lg bg-red-400 rounded-md shadow-sm">

                                            <input name="password"
                                                class="bg-secondary-300 max-w-full outline-none block flex-1 px-4 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-transparent appearance-none sm:text-sm sm:leading-5 focus:ring-1 focus:border-transparent  focus:ring-primary-500 focus:border-primary-500 rounded-l-sm rounded-r-sm"
                                                id="form.account_password" required type="password"
                                                wire:model="form.account_password">



                                        </div>
                                    </div>
                                </div>

                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                                    <label for="form.account_password_confirmation"
                                        class="py-2 flex flex-col text-sm font-medium sm:mt-px ">
                                        Confirmer le mot de passe
                                    </label>

                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <div class="relative flex max-w-lg bg-red-400 rounded-md shadow-sm">

                                            <input name="password_confirmation"
                                                class="bg-secondary-300 max-w-full outline-none block flex-1 px-4 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-transparent appearance-none sm:text-sm sm:leading-5 focus:ring-1 focus:border-transparent  focus:ring-primary-500 focus:border-primary-500 rounded-l-sm rounded-r-sm"
                                                id="form.account_password_confirmation" required type="password"
                                                wire:model="form.account_password_confirmation">



                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
                            <div>
                                <h3 class="text-lg font-medium leading-6 text-primary-500">
                                    Société
                                </h3>
                            </div>
                            <div class="space-y-6 sm:space-y-5">
                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                                    <label for="form.company_name" class="py-2 flex flex-col text-sm font-medium sm:mt-px ">
                                        Raison sociale
                                    </label>

                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <div class="relative flex max-w-lg bg-red-400 rounded-md shadow-sm">

                                            <input name="company_name"
                                                class="bg-secondary-300 max-w-full outline-none block flex-1 px-4 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-transparent appearance-none sm:text-sm sm:leading-5 focus:ring-1 focus:border-transparent  focus:ring-primary-500 focus:border-primary-500 rounded-l-sm rounded-r-sm"
                                                id="form.company_name" required wire:model="form.company_name"
                                                value="{{ old('company_name') }}">



                                        </div>
                                    </div>
                                </div>

                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                                    <label for="form.company_business_name"
                                        class="py-2 flex flex-col text-sm font-medium sm:mt-px ">
                                        Nom commercial
                                    </label>

                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <div class="relative flex max-w-lg bg-red-400 rounded-md shadow-sm">

                                            <input name="business_name"
                                                class="bg-secondary-300 max-w-full outline-none block flex-1 px-4 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-transparent appearance-none sm:text-sm sm:leading-5 focus:ring-1 focus:border-transparent  focus:ring-primary-500 focus:border-primary-500 rounded-l-sm rounded-r-sm"
                                                id="form.company_business_name" required
                                                wire:model="form.company_business_name"
                                                value="{{ old('business_name') }}">



                                        </div>
                                    </div>
                                </div>

                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                                    <label for="form.company_phone"
                                        class="py-2 flex flex-col text-sm font-medium sm:mt-px ">
                                        Téléphone
                                    </label>

                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <div class="relative flex max-w-lg bg-red-400 rounded-md shadow-sm">

                                            <input name="company_phone" type="number"
                                                class="bg-secondary-300 max-w-full outline-none block flex-1 px-4 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-transparent appearance-none sm:text-sm sm:leading-5 focus:ring-1 focus:border-transparent  focus:ring-primary-500 focus:border-primary-500 rounded-l-sm rounded-r-sm"
                                                id="form.company_phone" required wire:model="form.company_phone"
                                                value="{{ old('company_phone') }}">



                                        </div>
                                    </div>
                                </div>

                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                                    <label for="form.company_website"
                                        class="py-2 flex flex-col text-sm font-medium sm:mt-px ">
                                        Site web
                                        <span class="mt-1 text-xs text-secondary-300 font-base">Facultatif</span>
                                    </label>

                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <div class="relative flex max-w-lg bg-red-400 rounded-md shadow-sm">

                                            <input name="company_website"
                                                class="bg-secondary-300 max-w-full outline-none block flex-1 px-4 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-transparent appearance-none sm:text-sm sm:leading-5 focus:ring-1 focus:border-transparent  focus:ring-primary-500 focus:border-primary-500 rounded-l-sm rounded-r-sm"
                                                id="form.company_website" wire:model="form.company_website"
                                                value="{{ old('company_website') }}">



                                        </div>
                                    </div>
                                </div>

                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                                    <label for="form.company_business_id"
                                        class="py-2 flex flex-col text-sm font-medium sm:mt-px ">
                                        Identifiant Unique
                                    </label>

                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <div class="relative flex max-w-lg bg-red-400 rounded-md shadow-sm">

                                            <input name="company_business_id"
                                                class="bg-secondary-300 max-w-full outline-none block flex-1 px-4 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-transparent appearance-none sm:text-sm sm:leading-5 focus:ring-1 focus:border-transparent  focus:ring-primary-500 focus:border-primary-500 rounded-l-sm rounded-r-sm"
                                                id="form.company_business_id" required
                                                wire:model="form.company_business_id"
                                                value="{{ old('company_business_id') }}">



                                        </div>
                                    </div>
                                </div>

                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                                    <label for="form.company_kbis"
                                        class="py-2 flex flex-col text-sm font-medium sm:mt-px ">
                                        RNE
                                    </label>

                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <div>
                                            <label
                                                class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                                Sélectionner un fichier
                                                <input id="form.company_kbis" name="form.company_rne" type="file"
                                                    class="sr-only" value="{{ old('company_rne') }}">
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                                    <label for="form.company_legal_status"
                                        class="py-2 flex flex-col text-sm font-medium sm:mt-px ">
                                        Forme juridique
                                        <span class="mt-1 text-xs text-secondary-300 font-base">Facultatif</span>
                                    </label>

                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <div class="relative flex max-w-lg bg-red-400 rounded-md shadow-sm">

                                            <input name="company_legal_status"
                                                class="bg-secondary-300 max-w-full outline-none block flex-1 px-4 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-transparent appearance-none sm:text-sm sm:leading-5 focus:ring-1 focus:border-transparent  focus:ring-primary-500 focus:border-primary-500 rounded-l-sm rounded-r-sm"
                                                id="form.company_legal_status" wire:model="form.company_legal_status"
                                                value="{{ old('company_legal_status') }}">



                                        </div>
                                    </div>
                                </div>

                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                                    <label for="form.company_accountant_name"
                                        class="py-2 flex flex-col text-sm font-medium sm:mt-px ">
                                        Nom comptable
                                        <span class="mt-1 text-xs text-secondary-300 font-base">Facultatif</span>
                                    </label>

                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <div class="relative flex max-w-lg bg-red-400 rounded-md shadow-sm">

                                            <input name="company_accountant_name"
                                                class="bg-secondary-300 max-w-full outline-none block flex-1 px-4 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-transparent appearance-none sm:text-sm sm:leading-5 focus:ring-1 focus:border-transparent  focus:ring-primary-500 focus:border-primary-500 rounded-l-sm rounded-r-sm"
                                                id="form.company_accountant_name"
                                                wire:model="form.company_accountant_name"
                                                value="{{ old('company_accountant_name') }}">



                                        </div>
                                    </div>
                                </div>

                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                                    <label for="form.company_accountant_email"
                                        class="py-2 flex flex-col text-sm font-medium sm:mt-px ">
                                        Email comptable
                                        <span class="mt-1 text-xs text-secondary-300 font-base">Facultatif</span>
                                    </label>

                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <div class="relative flex max-w-lg bg-red-400 rounded-md shadow-sm">

                                            <input name="company_accountant_email"
                                                class="bg-secondary-300 max-w-full outline-none block flex-1 px-4 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-transparent appearance-none sm:text-sm sm:leading-5 focus:ring-1 focus:border-transparent  focus:ring-primary-500 focus:border-primary-500 rounded-l-sm rounded-r-sm"
                                                id="form.company_accountant_email" type="email"
                                                wire:model="form.company_accountant_email"
                                                value="{{ old('company_account_email') }}">



                                        </div>
                                    </div>
                                </div>

                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                                    <label for="form.company_receive_paper_invoices"
                                        class="py-2 flex flex-col text-sm font-medium sm:mt-px ">
                                        Recevoir les factures au format papier ?
                                        <span class="mt-1 text-xs text-secondary-300 font-base">Facultatif</span>
                                    </label>

                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <div class="flex items-center">
                                            <input id="toggle-factures" name="factures" type="checkbox" value="1"
                                                value="{{ old('factures') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
                            <div>
                                <h3 class="text-lg font-medium leading-6 text-primary-500">
                                    Adresse de facturation
                                </h3>
                            </div>
                            <div class="space-y-6 sm:space-y-5">
                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                                    <label for="form.billing_address_name"
                                        class="py-2 flex flex-col text-sm font-medium sm:mt-px ">
                                        Nom
                                    </label>

                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <div class="relative flex max-w-lg bg-red-400 rounded-md shadow-sm">

                                            <input name="billing_address_name"
                                                class="bg-secondary-300 max-w-full outline-none block flex-1 px-4 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-transparent appearance-none sm:text-sm sm:leading-5 focus:ring-1 focus:border-transparent  focus:ring-primary-500 focus:border-primary-500 rounded-l-sm rounded-r-sm"
                                                id="form.billing_address_name" wire:model="form.billing_address_name"
                                                value="{{ old('billing_address_name') }}">



                                        </div>
                                    </div>
                                </div>

                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                                    <label for="form.billing_address_address1"
                                        class="py-2 flex flex-col text-sm font-medium sm:mt-px ">
                                        Adresse
                                    </label>

                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <div class="relative flex max-w-lg bg-red-400 rounded-md shadow-sm">

                                            <input name="billing_address_address1"
                                                class="bg-secondary-300 max-w-full outline-none block flex-1 px-4 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-transparent appearance-none sm:text-sm sm:leading-5 focus:ring-1 focus:border-transparent  focus:ring-primary-500 focus:border-primary-500 rounded-l-sm rounded-r-sm"
                                                id="form.billing_address_address1"
                                                wire:model="form.billing_address_address1"
                                                value="{{ old('billing_address_address1') }}">



                                        </div>
                                    </div>
                                </div>

                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                                    <label for="form.billing_address_address2"
                                        class="py-2 flex flex-col text-sm font-medium sm:mt-px ">
                                        Complément
                                        <span class="mt-1 text-xs text-secondary-300 font-base">Facultatif</span>
                                    </label>

                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <div class="relative flex max-w-lg bg-red-400 rounded-md shadow-sm">

                                            <input name="billing_address_address2"
                                                class="bg-secondary-300 max-w-full outline-none block flex-1 px-4 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-transparent appearance-none sm:text-sm sm:leading-5 focus:ring-1 focus:border-transparent  focus:ring-primary-500 focus:border-primary-500 rounded-l-sm rounded-r-sm"
                                                id="form.billing_address_address2"
                                                value="{{ old('billing_address_address2') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                                    <label for="form.billing_address_postcode"
                                        class="py-2 flex flex-col text-sm font-medium sm:mt-px ">
                                        Code postal
                                    </label>

                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <div class="relative flex max-w-lg bg-red-400 rounded-md shadow-sm">

                                            <input name="billing_address_postcode"
                                                class="bg-secondary-300 max-w-full outline-none block flex-1 px-4 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-transparent appearance-none sm:text-sm sm:leading-5 focus:ring-1 focus:border-transparent  focus:ring-primary-500 focus:border-primary-500 rounded-l-sm rounded-r-sm"
                                                id="form.billing_address_postcode"
                                                wire:model="form.billing_address_postcode"
                                                value="{{ old('billing_address_postcode') }}">



                                        </div>
                                    </div>
                                </div>

                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                                    <label for="form.billing_address_city"
                                        class="py-2 flex flex-col text-sm font-medium sm:mt-px ">
                                        Ville
                                    </label>

                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <div class="relative flex max-w-lg bg-red-400 rounded-md shadow-sm">

                                            <input name="billing_address_city"
                                                class="bg-secondary-300 max-w-full outline-none block flex-1 px-4 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-transparent appearance-none sm:text-sm sm:leading-5 focus:ring-1 focus:border-transparent  focus:ring-primary-500 focus:border-primary-500 rounded-l-sm rounded-r-sm"
                                                id="form.billing_address_city" wire:model="form.billing_address_city"
                                                value="{{ old('billing_address_city') }}">



                                        </div>
                                    </div>
                                </div>

                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                                    <label for="form.billing_address_country"
                                        class="py-2 flex flex-col text-sm font-medium sm:mt-px ">
                                        Pays
                                    </label>

                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <div class="relative flex max-w-lg bg-red-400 rounded-md shadow-sm">

                                            <input name="billing_address_country"
                                                class="bg-secondary-300 max-w-full outline-none block flex-1 px-4 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-transparent appearance-none sm:text-sm sm:leading-5 focus:ring-1 focus:border-transparent  focus:ring-primary-500 focus:border-primary-500 rounded-l-sm rounded-r-sm"
                                                id="form.billing_address_country"
                                                wire:model="form.billing_address_country"
                                                value="{{ old('billing_address_country') }}">



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
                            <div>
                                <h3 class="text-lg font-medium leading-6 text-primary-500">
                                    Adresse de livraison
                                </h3>
                            </div>
                            <div class="space-y-6 sm:space-y-5">
                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                                    <label for="form.shipping_address_other_than_billing"
                                        class="py-2 flex flex-col text-sm font-medium sm:mt-px ">
                                        Utiliser une adresse de livraison différente ?
                                        <span class="mt-1 text-xs text-secondary-300 font-base">Facultatif</span>
                                    </label>

                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <div class="flex items-center">
                                            <input id="toggle-adresse" type="checkbox">
                                        </div>
                                    </div>
                                </div>

                                <div class="adresse-differente">
                                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                                        <label for="form.delivery_address_name"
                                            class="py-2 flex flex-col text-sm font-medium sm:mt-px ">
                                            Nom du destinataire
                                        </label>

                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <div class="relative flex max-w-lg bg-red-400 rounded-md shadow-sm">

                                                <input name="delivery_address_name"
                                                    class="bg-secondary-300 max-w-full outline-none block flex-1 px-4 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-transparent appearance-none sm:text-sm sm:leading-5 focus:ring-1 focus:border-transparent  focus:ring-primary-500 focus:border-primary-500 rounded-l-sm rounded-r-sm"
                                                    id="form.delivery_address_name"
                                                    wire:model="form.delivery_address_name"
                                                    value="{{ old('delivery_address_name') }}">



                                            </div>
                                        </div>
                                    </div>

                                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                                        <label for="form.delivery_address_address1"
                                            class="py-2 flex flex-col text-sm font-medium sm:mt-px ">
                                            Adresse
                                        </label>

                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <div class="relative flex max-w-lg bg-red-400 rounded-md shadow-sm">

                                                <input name="delivery_address_address1"
                                                    class="bg-secondary-300 max-w-full outline-none block flex-1 px-4 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-transparent appearance-none sm:text-sm sm:leading-5 focus:ring-1 focus:border-transparent  focus:ring-primary-500 focus:border-primary-500 rounded-l-sm rounded-r-sm"
                                                    id="form.delivery_address_address1"
                                                    wire:model="form.delivery_address_address1"
                                                    value="{{ old('delivery_address_address1') }}">



                                            </div>
                                        </div>
                                    </div>

                                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                                        <label for="form.delivery_address_address2"
                                            class="py-2 flex flex-col text-sm font-medium sm:mt-px ">
                                            Complément
                                            <span class="mt-1 text-xs text-secondary-300 font-base">Facultatif</span>
                                        </label>

                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <div class="relative flex max-w-lg bg-red-400 rounded-md shadow-sm">

                                                <input name="delivery_address_address2"
                                                    class="bg-secondary-300 max-w-full outline-none block flex-1 px-4 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-transparent appearance-none sm:text-sm sm:leading-5 focus:ring-1 focus:border-transparent  focus:ring-primary-500 focus:border-primary-500 rounded-l-sm rounded-r-sm"
                                                    id="form.delivery_address_address2"
                                                    wire:model="form.delivery_address_address2"
                                                    value="{{ old('billing_address_address2') }}">



                                            </div>
                                        </div>
                                    </div>

                                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                                        <label for="form.delivery_address_postcode"
                                            class="py-2 flex flex-col text-sm font-medium sm:mt-px ">
                                            Code postal
                                        </label>

                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <div class="relative flex max-w-lg bg-red-400 rounded-md shadow-sm">

                                                <input name="delivery_address_postcode"
                                                    class="bg-secondary-300 max-w-full outline-none block flex-1 px-4 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-transparent appearance-none sm:text-sm sm:leading-5 focus:ring-1 focus:border-transparent  focus:ring-primary-500 focus:border-primary-500 rounded-l-sm rounded-r-sm"
                                                    id="form.delivery_address_postcode"
                                                    wire:model="form.delivery_address_postcode"
                                                    value="{{ old('billing_address_postcode') }}">



                                            </div>
                                        </div>
                                    </div>

                                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                                        <label for="form.delivery_address_city"
                                            class="py-2 flex flex-col text-sm font-medium sm:mt-px ">
                                            Ville
                                        </label>

                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <div class="relative flex max-w-lg bg-red-400 rounded-md shadow-sm">

                                                <input name="delivery_address_city"
                                                    class="bg-secondary-300 max-w-full outline-none block flex-1 px-4 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-transparent appearance-none sm:text-sm sm:leading-5 focus:ring-1 focus:border-transparent  focus:ring-primary-500 focus:border-primary-500 rounded-l-sm rounded-r-sm"
                                                    id="form.delivery_address_city"
                                                    wire:model="form.delivery_address_city"
                                                    value="{{ old('billing_address_city') }}">



                                            </div>
                                        </div>
                                    </div>

                                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                                        <label for="form.delivery_address_country"
                                            class="py-2 flex flex-col text-sm font-medium sm:mt-px ">
                                            Pays
                                        </label>

                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <div class="relative flex max-w-lg bg-red-400 rounded-md shadow-sm">

                                                <input name="delivery_address_country"
                                                    class="bg-secondary-300 max-w-full outline-none block flex-1 px-4 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-transparent appearance-none sm:text-sm sm:leading-5 focus:ring-1 focus:border-transparent  focus:ring-primary-500 focus:border-primary-500 rounded-l-sm rounded-r-sm"
                                                    id="form.delivery_address_country"
                                                    wire:model="form.delivery_address_country"
                                                    value="{{ old('billing_address_country') }}">



                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="flex mt-8">
                        <button
                            class="button group --has-trailing w-full mx-auto lg:w-auto --translate-icon-on-hover --is-white --is-rounded"
                            type="submit" wire:loading.class="--is-loading">


                            <span class="button__caption">
                                Inscription
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
                    </div>
                </form>

        </div>
    </div>
    <script>
        $(".adresse-differente").hide();
        $('#toggle-adresse').change(function() {
            if ($(this).is(":checked")) {
                $(".adresse-differente").show();
            } else {
                $(".adresse-differente").hide();
            }
        });
    </script>
@endsection
