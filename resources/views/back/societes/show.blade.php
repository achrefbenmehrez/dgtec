@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">
                        <div class="container">
                            <form id="contact-form" role="form">
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group"> <label for="nom_utilisateur"
                                                    class="font-weight-bold">Raison Sociale : </label>
                                                <h5>{{ $societe->raisonSociale }}</h5>
                                            </div>
                                            <div class="form-group"> <label for="nom_utilisateur"
                                                    class="font-weight-bold">Nom commercial : </label>
                                                <h5>{{ $societe->nomCommercial }}</h5>
                                            </div>
                                            <div class="form-group"> <label for="nom_utilisateur"
                                                    class="font-weight-bold">Num Tel : </label>
                                                <h5>{{ $societe->numTel }}</h5>
                                            </div>
                                            <div class="form-group"> <label for="nom_utilisateur"
                                                    class="font-weight-bold">Site Web : </label>
                                                <h5>{{ $societe->siteWeb }}</h5>
                                            </div>
                                            <div class="form-group"> <label for="email" class="font-weight-bold">Siret:
                                                </label>
                                                <h5>{{ $societe->siret }}</h5>
                                            </div>
                                            <div class="form-group"> <label for="password" class="font-weight-bold">Kbis :
                                                </label>
                                                <h5>{{ $societe->kbis }}</h5>
                                            </div>
                                            <div class="form-group"> <label for="password" class="font-weight-bold">Forme
                                                    juridique :
                                                </label>
                                                <h5>{{ $societe->formeJuridique }}</h5>
                                            </div>
                                            <div class="form-group"> <label for="password" class="font-weight-bold">Ape :
                                                </label>
                                                <h5>{{ $societe->ape }}</h5>
                                            </div>
                                            <div class="form-group"> <label for="password" class="font-weight-bold">Nom
                                                    comptable :
                                                </label>
                                                <h5>{{ $societe->nomComptable }}</h5>
                                            </div>
                                            <div class="form-group"> <label for="password" class="font-weight-bold">Email
                                                    comptable :
                                                </label>
                                                <h5>{{ $societe->emailComptable }}</h5>
                                            </div>

                                            <div class="form-group"> <label for="password" class="font-weight-bold">Format
                                                    Papier :
                                                </label>
                                                <h5>{{ $societe->formatPapier }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <form id="deletesociete"
                                                action="{{ route('admin.societes.destroy', $societe->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" data-toggle="modal" data-target="#societe_modal"
                                                    class="btn btn-danger btn-send pt-2 btn-block "
                                                    value="Supprimer">Supprimer</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div> <!-- /.8 -->
            </div> <!-- /.row-->
        </div>
    </div>
    </form>

    <!-- Modal -->
    <div class="modal fade" id="societe_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    Are you sure you want to delete this?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary"
                        onclick="document.getElementById(`deletesociete`).submit()">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
