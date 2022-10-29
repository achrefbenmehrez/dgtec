@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.categories.store') }}" method="POST" id="formmmmm">
        @csrf
        <div class="container">
            <div class=" text-center mt-5 ">
                <h1>Creer une Categorie</h1>
            </div>
            <div class="row ">
                <div class="col-lg-7 mx-auto">
                    <div class="card mt-2 mx-auto p-4 bg-light">
                        <div class="card-body bg-light">
                            <div class="container">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group"> <label for="nom_utilisateur">Nom categorie
                                                    *</label> <input id="nom_utilisateur" type="text" name="title"
                                                    class="form-control" placeholder="Nom categorie *" required="required"
                                                    data-error="Firstname is required."> </div>
                                            <div class="form-group">
                                                <label for="role">Parent Categorie</label>
                                                <select class="form-control" id="roles" name="parent_id">
                                                    @foreach ($categories as $category)
                                                        <option value="">Aucune</option>
                                                        <option value="{{ $category->id }}">{{ $category->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"> <button type="submit"
                                                onclick="document.getElementById('formmmmm').submit()"
                                                class="btn btn-success btn-send pt-2 btn-block ">Creer</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.8 -->
                </div> <!-- /.row-->
            </div>
        </div>
    </form>
@endsection
