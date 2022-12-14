@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Toutes les Marques</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Accueil</a></li>
                        <li class="breadcrumb-item active">Marques</li>
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
                    <h6 class="m-0 font-weight-bold text-primary">Toutes les Marques</h6>
                </div>
                <div class="card-body">
                    <div>
                        <a href="{{ route('admin.brands.create') }}" class="btn btn-success mb-4 ml-auto">Creer une
                            marque</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="width: 5%">ID</th>
                                    <th>Title</th>
                                    <th>Photo</th>
                                    <th>Date creation</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th style="width: 5%">ID</th>
                                    <th>Title</th>
                                    <th>Photo</th>
                                    <th>Date creation</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            @foreach ($brands as $brand)
                                <tbody>
                                    <tr>
                                        <td>{{ $brand->id }}</td>
                                        <td>{{ $brand->title }}</td>
                                        <td>
                                            <img width="200" height="100" src="{{ asset($brand->logo_url) }}" alt="" srcset="">
                                        </td>
                                        <td>{{ $brand->created_at }}</td>
                                        <td class="d-flex flex-row">
                                            <div class="p-2">
                                                <a href="{{ route('admin.brands.edit', $brand->id) }}"
                                                    class="btn btn-success"><i class="fas fa-edit"></i></a>
                                            </div>
                                            <form action="{{ route('admin.brands.destroy', $brand->id) }}" method="POST"
                                                id="deletebrand_{{ $brand->id }}" class="p-2">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#brand_modal_{{ $brand->id }}"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></button>
                                            </form>
                                            <div class="p-2">
                                                <a href="{{ route('admin.brands.show', $brand->id) }}"
                                                    class="btn btn-info"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- Modal -->
                                <div class="modal fade" id="brand_modal_{{ $brand->id }}" tabindex="-1" role="dialog"
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
                                                    onclick="document.getElementById(`deletebrand_{{ $brand->id }}`).submit()">Save
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
