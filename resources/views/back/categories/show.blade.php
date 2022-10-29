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
                                                    class="font-weight-bold">Nom : </label>
                                                <h5>{{ $category->title }}</h5>
                                            </div>
                                            <div class="form-group"> <label for="nom_utilisateur"
                                                    class="font-weight-bold">Parent Category : </label>
                                                <h5>
                                                    @if ($category->parent)
                                                        {{ $category->parent->title }}
                                                    @else
                                                        Aucune
                                                    @endif
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <form id="deletecategory"
                                                action="{{ route('admin.categories.destroy', $category->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" data-toggle="modal" data-target="#category_modal"
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
    <div class="modal fade" id="category_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    Are you sure you want to delete this?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary"
                        onclick="document.getElementById(`deletecategory`).submit()">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
