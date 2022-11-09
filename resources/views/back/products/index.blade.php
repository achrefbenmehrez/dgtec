@extends('layouts.admin')

@section('content')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tous les produits</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Accueil</a></li>
                        <li class="breadcrumb-item active">Produits</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @if (session('status'))
                <div class="alert alert-success">
                    <span id="status">{{ session('status') }}</span>
                </div>
            @endif
            <span id="status"></span>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div>
                                <a href="{{ route('admin.products.create') }}" class="btn btn-success mb-4 ml-auto">Creer un
                                    produit</a>
                            </div>
                            <table id="example1" class="table table-bordered table-hover" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th style="width: 5%">ID</th>
                                        <th style="width: 5%">Nom</th>
                                        <th style="width: 5%">Description</th>
                                        <th style="width: 5%">Prix</th>
                                        <th style="width: 5%">Quantite Stock</th>
                                        <th style="width: 5%">Nombre d'ans de garantie</th>
                                        <th style="width: 10%">Date de fin de promotion</th>
                                        <th style="width: 5%">Ref Fabricant</th>
                                        <th style="width: 5%">EAN</th>
                                        <th style="width: 10%">Categories</th>
                                        <th style="width: 5%">Photos</th>
                                        <th style="width: 5%">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td> {{ $product->price }}</td>
                                            <td>{{ $product->quantiteStock }}</td>
                                            <td>
                                                @if ($product->ansGarantie)
                                                    {{ $product->ansGarantie }}
                                                @else
                                                    Aucune
                                                @endif
                                            </td>
                                            <td>{{ $product->dateFinPromo }}</td>
                                            <td>{{ $product->ref_fabricant }}</td>
                                            <td>{{ $product->EAN }}</td>
                                            <td>{{ $product->category->title }}</td>
                                            <td>
                                                @foreach ($product->photosUrl as $photoUrl)
                                                    <img src="{{ asset($photoUrl) }}" class="mt-4" height="50px"
                                                        width="50px" />
                                                    <br>
                                                @endforeach
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.products.edit', $product->id) }}"
                                                    class="btn btn-success">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <button class="btn btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th style="width: 5%">ID</th>
                                        <th style="width: 5%">Nom</th>
                                        <th style="width: 5%">Description</th>
                                        <th style="width: 5%">Prix</th>
                                        <th style="width: 5%">Quantite Stock</th>
                                        <th style="width: 5%">Nombre d'ans de garantie</th>
                                        <th style="width: 10%">Date de fin de promotion</th>
                                        <th style="width: 5%">Ref Fabricant</th>
                                        <th style="width: 5%">EAN</th>
                                        <th style="width: 10%">Categories</th>
                                        <th style="width: 5%">Photos</th>
                                        <th style="width: 5%">Actions</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>

    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js" defer></script>
@endsection
