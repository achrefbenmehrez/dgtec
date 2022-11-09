@extends('layouts.admin')

@section('content')
    <!-- dropzonejs -->
    <link rel="stylesheet" href="{{ url('back/plugins/dropzone/min/dropzone.min.css') }}">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="margin: 20px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Modifier le produit {{ $product->name }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item active">Modifier un produit</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
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
                                    <input type="text" name="name" id="inputName" value="{{ $product->name }}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Description *</label>
                                    <textarea id="inputDescription" value="{{ $product->description }}" name="description" class="form-control"
                                        rows="4">{{ $product->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Prix *</label>
                                    <input type="number" name="price" value="{{ $product->price }}" id="inputName"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Quantite stock *</label>
                                    <input min="0" type="number" name="quantiteStock"
                                        value="{{ $product->quantiteStock }}" id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2">
                                        Categories *
                                    </label>

                                    <div class="col-sm-10">
                                        <select class="multiple-select" name="category_id">
                                            @foreach ($categories as $categorie)
                                                <option value="{{ $categorie->id }}" selected>{{ $categorie->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2">
                                        Anciennes photos
                                    </label>

                                    <div class="col-sm-10">
                                        <div class="row">
                                            @foreach ($product->photosUrl as $key => $photo)
                                                <div class="col-sm-2">
                                                    <img src="{{ asset($photo) }}" alt="" class="img-fluid"
                                                        width="200px" height="200px">
                                                    <a href="{{ route('admin.photos.delete', [$product->id, $key]) }}"
                                                        class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
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
                                    <input min="0" type="number" name="garantie" value="{{ $product->garantie }}"
                                        id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Date de fin de promotion</label>
                                    <input min="" type="date" name="dateFinPromo"
                                        value="{{ $product->dateFinPromo }}" id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Ref Fabricant *</label>
                                    <input type="number" name="ref_fabricant" value="{{ $product->ref_fabricant }}"
                                        id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">EAN *</label>
                                    <input type="number" name="EAN" value="{{ $product->EAN }}"
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
                                    <input type="text" name="capacite"
                                        value="{{ $product->ficheTechnique->capacite }}" id="inputClientCompany"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">DWPD *</label>
                                    <input type="text" name="DWPD" value="{{ $product->ficheTechnique->DWPD }}"
                                        id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Format *</label>
                                    <input type="text" name="format" value="{{ $product->ficheTechnique->format }}"
                                        id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Interface Interne *</label>
                                    <input type="text" name="interfaceInterne"
                                        value="{{ $product->ficheTechnique->interfaceInterne }}" id="inputClientCompany"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Serie HDD *</label>
                                    <input type="text" name="SerieHDD"
                                        value="{{ $product->ficheTechnique->SerieHDD }}" id="inputClientCompany"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">SMART *</label>
                                    <input type="text" name="SMART" value="{{ $product->ficheTechnique->SMART }}"
                                        id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Interface Disque *</label>
                                    <input type="text" name="interfaceDisque"
                                        value="{{ $product->ficheTechnique->interfaceDisque }}" id="inputClientCompany"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">TBW *</label>
                                    <input type="number" name="TBW" value="{{ $product->ficheTechnique->TBW }}"
                                        id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Temps Entre Pannes *</label>
                                    <input type="number" name="tempsEntrePannes"
                                        value="{{ $product->ficheTechnique->tempsEntrePannes }}" id="inputClientCompany"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Type Disque Dur *</label>
                                    <input type="text" name="typeDD" value="{{ $product->ficheTechnique->typeDD }}"
                                        id="inputClientCompany" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="card card-primary">
                            <div class="card-body">
                                <h1>Telechargements</h1>
                                <div class="form-group row">
                                    <label class="col-sm-2">
                                        Anciens telechargements
                                    </label>

                                    <div class="col-sm-10">
                                        <div class="row">
                                            @foreach ($product->telechargement->attachementsUrl as $key => $telechargement)
                                                <a href="{{ asset($telechargement) }}" target="_blank">
                                                    <h4>{{ $telechargement }}</h4>
                                                </a>
                                                <a href="{{ route('admin.telechargements.delete', [$product->telechargement->id, $key]) }}"
                                                    class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

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
