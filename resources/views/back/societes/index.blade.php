@extends('layouts.admin')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Toutes les societes</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Accueil</a></li>
                        <li class="breadcrumb-item active">Societes</li>
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
                    <h6 class="m-0 font-weight-bold text-primary">Toutes les societes</h6>
                </div>
                <div class="card-body">
                    <div>
                        <a href="{{ route('admin.societes.create') }}" class="btn btn-success mb-4 ml-auto">Creer une
                            Societe</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="width: 5%">ID</th>
                                    <th>Raison Sociale</th>
                                    <th>Nom Commercial</th>
                                    <th>Num tel</th>
                                    <th>Site Web</th>
                                    <th>Siret</th>
                                    <th>Kbis</th>
                                    <th>Forme juridique</th>
                                    <th>Ape</th>
                                    <th>Nom comptable</th>
                                    <th>Email comptable</th>
                                    <th>Format papier</th>
                                    <th>Date creation</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th style="width: 5%">ID</th>
                                    <th>Raison Sociale</th>
                                    <th>Nom Commercial</th>
                                    <th>Num tel</th>
                                    <th>Site Web</th>
                                    <th>Siret</th>
                                    <th>Kbis</th>
                                    <th>Forme juridique</th>
                                    <th>Ape</th>
                                    <th>Nom comptable</th>
                                    <th>Email comptable</th>
                                    <th>Format papier</th>
                                    <th>Date creation</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            @foreach ($societes as $societe)
                                <tbody>
                                    <tr>
                                        <td>{{ $societe->id }}</td>
                                        <td>{{ $societe->raisonSociale }}</td>
                                        <td>{{ $societe->nomCommercial }}</td>
                                        <td>{{ $societe->numTel }}</td>
                                        <td>{{ $societe->siteWeb }}</td>
                                        <td>{{ $societe->siret }}</td>
                                        <td>
                                            <img width="100" height="100"
                                                src="{{ asset('images/register/' . $societe->kbis) }}" alt="">
                                        </td>
                                        <td>{{ $societe->formeJuridique }}</td>
                                        <td>{{ $societe->ape }}</td>
                                        <td>{{ $societe->nomComptable }}</td>
                                        <td>{{ $societe->emailComptable }}</td>
                                        <td>{{ $societe->formatPapier }}</td>
                                        <td>{{ $societe->created_at }}</td>
                                        <td class="d-flex flex-row">
                                            <form action="{{ route('admin.societes.destroy', $societe->id) }}"
                                                method="POST" id="deletesociete_{{ $societe->id }}" class="p-2">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#societe_modal_{{ $societe->id }}"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></button>
                                            </form>
                                            <div class="p-2">
                                                <a href="{{ route('admin.societes.show', $societe->id) }}"
                                                    class="btn btn-info"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- Modal -->
                                <div class="modal fade" id="societe_modal_{{ $societe->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                Are you sure you want to delete this?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary"
                                                    onclick="document.getElementById(`deletesociete_{{ $societe->id }}`).submit()">Save
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
