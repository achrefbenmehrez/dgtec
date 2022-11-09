@extends('layouts.admin')

@section('content')
    <link href="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.css" rel="stylesheet">

    <script src="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.js" async></script>

    <style>
        select {
            width: 100%;
        }
    </style>
    <!-- dropzonejs -->
    <link rel="stylesheet" href="{{ url('back/plugins/dropzone/min/dropzone.min.css') }}">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="margin: 20px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Creer un produit</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item active">Creer un produit</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label for="inputName">Nom *</label>
                                    <input type="text" name="name" id="inputName" value="{{ old('name') }}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Description *</label>
                                    <textarea id="inputDescription" value="{{ old('description') }}" name="description" class="form-control" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Prix *</label>
                                    <input type="number" name="price" value="{{ old('price') }}" id="inputName"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Quantite stock *</label>
                                    <input min="0" type="number" name="quantiteStock"
                                        value="{{ old('quantiteStock') }}" id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2">
                                        Categorie *
                                    </label>

                                    <div class="col-sm-10">
                                        <select class="multiple-select" name="category_id">
                                            @foreach ($categories as $categorie)
                                                <option value="{{ $categorie->id }}">{{ $categorie->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2">
                                        Marque *
                                    </label>

                                    <div class="col-sm-10">
                                        <select class="multiple-select" name="marque_id">
                                            @foreach ($marques as $marque)
                                                <option value="{{ $marque->id }}">{{ $marque->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2">
                                        Famille
                                    </label>

                                    <div class="col-sm-10">
                                        <select class="multiple-select" name="famille_id">
                                            @foreach ($familles as $famille)
                                                <option value="{{ $famille->id }}">{{ $famille->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group" id="fields">
                                    <label class="control-label" for="field1">
                                        Photos *
                                    </label>
                                    <div class="controls-photo">
                                        <div class="entry input-group upload-input-group">
                                            <input class="form-control" name="photosUrl[]" type="file">
                                            <button class="btn btn-upload btn-success btn-add-photo" type="button">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Nombre d'ans de garantie</label>
                                    <input min="0" type="number" name="garantie" value="{{ old('garantie') }}"
                                        id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Date de fin de promotion</label>
                                    <input min="" type="date" name="dateFinPromo"
                                        value="{{ old('dateFinPromo') }}" id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Ref Fabricant *</label>
                                    <input type="number" name="ref_fabricant" value="{{ old('ref_fabricant') }}"
                                        id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">EAN *</label>
                                    <input type="number" name="EAN" value="{{ old('EAN') }}"
                                        id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Annee de production *</label>
                                    <select name="annee_productionn" id="">
                                        <option value="Debut">Debut</option>
                                        <option value="Mi">Mi</option>
                                        <option value="Fin">Fin</option>
                                    </select>
                                    <input type="number" min="1900" max="2022" name="annee_production" value="{{ old('annee_production') }}"
                                        id="inputClientCompany" class="form-control">
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <div class="card card-primary">
                            <div class="card-body">
                                <h1>Fiche Technique</h1>
                                <div class="form-group">
                                    <label for="inputClientCompany">Capacite *</label>
                                    <input type="number" name="capacite" value="{{ old('capacite') }}"
                                        id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">DWPD *</label>
                                    <input type="text" name="DWPD" value="{{ old('DWPD') }}"
                                        id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Format *</label>
                                    <input type="text" name="format" value="{{ old('format') }}"
                                        id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Interface Interne *</label>
                                    <input type="text" name="interfaceInterne" value="{{ old('interfaceInterne') }}"
                                        id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Serie HDD *</label>
                                    <input type="text" name="SerieHDD" value="{{ old('SerieHDD') }}"
                                        id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">SMART *</label>
                                    <input type="text" name="SMART" value="{{ old('SMART') }}"
                                        id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Interface Disque *</label>
                                    <input type="text" name="interfaceDisque" value="{{ old('interfaceDisque') }}"
                                        id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">TBW *</label>
                                    <input type="number" name="TBW" value="{{ old('TBW') }}"
                                        id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Temps Entre Pannes *</label>
                                    <input type="number" name="tempsEntrePannes" value="{{ old('tempsEntrePannes') }}"
                                        id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Type Disque Dur *</label>
                                    <input type="text" name="typeDD" value="{{ old('typeDD') }}"
                                        id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Categorie </label>
                                    <select class="multiple-select" name="categorie">
                                        <option value="DDR3">DDR3</option>
                                        <option value="DDR4">DDR4</option>
                                        <option value="DDR5">DDR5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Frequence </label>
                                    <input type="number" name="frequence" value="{{ old('frequence') }}"
                                        id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Type </label>
                                    <select class="multiple-select" name="type">
                                        <option value="LOAD REDUCED">LOAD REDUCED</option>
                                        <option value="ECC/REGISTERED">ECC/REGISTERED</option>
                                        <option value="UNBUFFERED">UNBUFFERED</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Alimentation Disque Dur </label>
                                    <input type="text" name="alimentationDD" value="{{ old('alimentationDD') }}"
                                        id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Plateforme Compatible </label>
                                    <input type="text" name="plateformeCompatible"
                                        value="{{ old('plateformeCompatible') }}" id="inputClientCompany"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Voltage </label>
                                    <input type="number" name="voltage" value="{{ old('voltage') }}"
                                        id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Organisation </label>
                                    <input type="text" name="organisation" value="{{ old('organisation') }}"
                                        id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Nombre d'emplacements memoire </label>
                                    <input type="number" name="emplacementsMemoire"
                                        value="{{ old('emplacementsMemoire') }}" id="inputClientCompany"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Type Boitier </label>
                                    <select class="multiple-select" name="typeBoitier">
                                        <option value="Tour">Tour</option>
                                        <option value="Rack">Rack</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Nombre de Baies </label>
                                    <input type="number" name="nbreBaies" value="{{ old('nbreBaies') }}"
                                        id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Emplacements Memoire </label>
                                    <input type="number" name="emplacements_memoire" value="{{ old('emplacements_memoire') }}"
                                        id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Taille memoire de base </label>
                                    <input type="number" name="taille_memoire_base" value="{{ old('taille_memoire_base') }}"
                                        id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Taille memoire max </label>
                                    <input type="number" name="taille_memoire_max" value="{{ old('taille_memoire_max') }}"
                                        id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Nombre de disques durs </label>
                                    <input type="number" name="nbreDD" value="{{ old('nbreDD') }}"
                                        id="inputClientCompany" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="card card-primary">
                            <div class="card-body">
                                <h1>Telechargements</h1>
                                <div class="control-group" id="fields">
                                    <label class="control-label" for="field1">
                                        Telechargements *
                                    </label>
                                    <div class="controls-telechargement">
                                        <div class="telechargement input-group upload-input-group">
                                            <input class="form-control" name="telechargements[]" type="file">
                                            <button class="btn btn-upload btn-success btn-add-telechargement"
                                                type="button">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="#" class="btn btn-secondary">Annuler</a>
                        <input type="submit" value="Creer" class="btn btn-success float-right">
                    </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
