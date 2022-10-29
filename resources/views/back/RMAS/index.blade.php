@extends('layouts.admin')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tous les Remises a la caisse</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Accueil</a></li>
                        <li class="breadcrumb-item active">Remises a la caisse</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tous les Remises a la caisse</h6>
                </div>
                <div class="card-body">
                    <div>
                        <a href="{{ route('admin.RMAS.create') }}" class="btn btn-success mb-4 ml-auto">Creer une
                            Remise a la caisse</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="width: 5%">ID</th>
                                    <th>Type</th>
                                    <th>Numero</th>
                                    <th>Nom societe</th>
                                    <th>Adresse facturation</th>
                                    <th>Nom utilisateur</th>
                                    <th>Date facture</th>
                                    <th>Nom Produit</th>
                                    <th>Date Commande</th>
                                    <th>Date creation</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th style="width: 5%">ID</th>
                                    <th>Type</th>
                                    <th>Numero</th>
                                    <th>Nom societe</th>
                                    <th>Adresse facturation</th>
                                    <th>Nom utilisateur</th>
                                    <th>Date facture</th>
                                    <th>Nom Produit</th>
                                    <th>Date Commande</th>
                                    <th>Date creation</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            @foreach ($RMAS as $RMA)
                                <tbody>
                                    <tr>
                                        <td>{{ $RMA->id }}</td>
                                        <td>{{ $RMA->type }}</td>
                                        <td>{{ $RMA->numero }}</td>
                                        <td>{{ $RMA->societe->nomCommercial }}</td>
                                        <td>{{ $RMA->adresseFacturation->adresse }}</td>
                                        <td>{{ $RMA->user->login }}</td>
                                        <td>{{ $RMA->facture->createdAt }}</td>
                                        <td>{{ $RMA->produit->nom }}</td>
                                        <td>{{ $RMA->dateCommande }}</td>
                                        <td>{{ $RMA->created_at }}</td>
                                        <td class="d-flex flex-row">
                                            <form action="{{ route('admin.RMAs.destroy', $RMA->id) }}" method="POST"
                                                id="deleteRMA_{{ $RMA->id }}" class="p-2">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#RMA_modal_{{ $RMA->id }}"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></button>
                                            </form>
                                            <div class="p-2">
                                                <a href="{{ route('admin.RMAs.show', $RMA->id) }}" class="btn btn-info"><i
                                                        class="fas fa-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- Modal -->
                                <div class="modal fade" id="RMA_modal_{{ $RMA->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                Are you sure you want to delete this?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary"
                                                    onclick="document.getElementById(`deleteRMA_{{ $RMA->id }}`).submit()">Save
                                                    changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
