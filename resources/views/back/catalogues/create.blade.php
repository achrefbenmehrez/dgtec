@extends('layouts.admin')

@section('content')

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
                        <h1>Creer un catalogue</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item active">Creer un catalogue</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <form action="{{ route('admin.catalogues.store') }}" method="POST" enctype="multipart/form-data">
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

                                <div class="control-group" id="fields">
                                    <label class="control-label" for="field1">
                                        Telechargements *
                                    </label>
                                    <div class="controls-photo">
                                        <div class="entry input-group upload-input-group">
                                            <input class="form-control" name="donnees_telechargements[]" type="file">
                                            <button class="btn btn-upload btn-success btn-add-photo" type="button">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

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
