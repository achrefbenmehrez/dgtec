@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tous les Categories</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Accueil</a></li>
                        <li class="breadcrumb-item active">Categories</li>
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
                    <h6 class="m-0 font-weight-bold text-primary">Toutes les categories</h6>
                </div>
                <div class="card-body">
                    <div>
                        <a href="{{ route('admin.categories.create') }}" class="btn btn-success mb-4 ml-auto">Creer une
                            categorie</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="width: 5%">ID</th>
                                    <th>Title</th>
                                    <th>Parent Category</th>
                                    <th>Date creation</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th style="width: 5%">ID</th>
                                    <th>Title</th>
                                    <th>Parent Category Name</th>
                                    <th>Date creation</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            @foreach ($categories as $category)
                                <tbody>
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->title }}</td>
                                        <td>
                                            @if ($category->parent)
                                                {{ $category->parent->title }}
                                            @else
                                                Aucune
                                            @endif
                                        </td>
                                        <td>{{ $category->created_at }}</td>
                                        <td class="d-flex flex-row">
                                            <div class="p-2">
                                                <a href="{{ route('admin.categories.edit', $category->id) }}"
                                                    class="btn btn-success"><i class="fas fa-edit"></i></a>
                                            </div>
                                            <form action="{{ route('admin.categories.destroy', $category->id) }}"
                                                method="POST" id="deletecategory_{{ $category->id }}" class="p-2">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#category_modal_{{ $category->id }}"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></button>
                                            </form>
                                            <div class="p-2">
                                                <a href="{{ route('admin.categories.show', $category->id) }}"
                                                    class="btn btn-info"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- Modal -->
                                <div class="modal fade" id="category_modal_{{ $category->id }}" tabindex="-1"
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
                                                    onclick="document.getElementById(`deletecategory_{{ $category->id }}`).submit()">Save
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
