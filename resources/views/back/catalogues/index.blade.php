@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tous les catalogues</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Accueil</a></li>
                        <li class="breadcrumb-item active">Catalogues</li>
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
                                <a href="{{ route('admin.catalogues.create') }}" class="btn btn-success mb-4 ml-auto">Creer
                                    un
                                    catalogue</a>
                            </div>
                            <table id="example1" class="table table-bordered table-hover" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th style="width: 5%">ID</th>
                                        <th style="width: 5%">Nom Catalogue</th>
                                        @foreach ($catalogues as $catalogue)
                                            @if ($catalogue->telechargement)
                                                @foreach ($catalogue->telechargement->attachementsUrl as $key => $url)
                                                    <th style="width: 1%">Lien Telechargement {{ $key }}</th>
                                                @endforeach
                                            @else
                                                <th style="width: 1%">Lien Telechargement</th>
                                            @endif
                                        @endforeach
                                        <th style="width: 5%">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($catalogues as $catalogue)
                                        <tr>
                                            <td>{{ $catalogue->id }}</td>
                                            <td>{{ $catalogue->name }}</td>
                                            @if ($catalogue->telechargement)
                                                @foreach ($catalogue->telechargement->attachementsUrl as $telechargement)
                                                    <td style="width: 1%;">{{ asset($telechargement) }}</td>
                                                @endforeach
                                            @else
                                                <td>Aucun Telechargement</td>
                                            @endif

                                            <td>
                                                <a href="{{ route('admin.catalogues.edit', $catalogue->id) }}"
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
                                        <th style="width: 5%">Nom Catalogue</th>
                                        @foreach ($catalogues as $catalogue)
                                            @if ($catalogue->telechargement)
                                                @foreach ($catalogue->telechargement->attachementsUrl as $key => $url)
                                                    <th style="width: 1%">Lien Telechargement {{ $key }}</th>
                                                @endforeach
                                            @else
                                                <th style="width: 1%">Lien Telechargement</th>
                                            @endif
                                        @endforeach
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
@endsection
