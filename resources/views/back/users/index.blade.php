@extends('layouts.admin')

@section('content')
    <link rel="stylesheet" href="{{ asset('dist/css/jquery.toast.min.css') }}">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tous les utilisateurs</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Accueil</a></li>
                        <li class="breadcrumb-item active">Utilisateurs</li>
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
                    <h6 class="m-0 font-weight-bold text-primary">Tous les utilisateurs</h6>
                </div>
                <div class="card-body">
                    <div>
                        <a href="{{ route('admin.users.create') }}" class="btn btn-success mb-4 ml-auto">Creer un
                            utilisateur</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="width: 5%">ID</th>
                                    <th>Nom</th>
                                    <th>prénom</th>
                                    <th>telephone</th>
                                    <th>login</th>
                                    <th>Email</th>
                                    <th>Roles</th>
                                    <th>Active</th>
                                    <th>Date creation</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th style="width: 5%">ID</th>
                                    <th>Nom</th>
                                    <th>prénom</th>
                                    <th>telephone</th>
                                    <th>login</th>
                                    <th>Email</th>
                                    <th>Roles</th>
                                    <th>Active</th>
                                    <th>Date creation</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            @foreach ($users as $user)
                                <tbody>
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->nom }}</td>
                                        <td>{{ $user->prenom }}</td>
                                        <td>{{ $user->telephone }}</td>
                                        <td>{{ $user->login }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->getRoleNames()->first() }}</td>
                                        <td>
                                            <label>Activer/Desactiver</label>
                                            <input type="checkbox" name="" class="activateUser"
                                                id="{{ $user->id }}" data-toggle="toggle" data-on="Utilisateur Activé"
                                                data-off="Utilisateur désactivé"
                                                @if ($user->active) checked @endif>
                                        </td>
                                        <td>{{ $user->created_at }}</td>
                                        <td class="d-flex flex-row">
                                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
                                                id="deleteuser_{{ $user->id }}" class="p-2">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#user_modal_{{ $user->id }}"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></button>
                                            </form>
                                            <div class="p-2">
                                                <a href="{{ route('admin.users.show', $user->id) }}"
                                                    class="btn btn-info"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- Modal -->
                                <div class="modal fade" id="user_modal_{{ $user->id }}" tabindex="-1" role="dialog"
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
                                                    onclick="document.getElementById(`deleteuser_{{ $user->id }}`).submit()">Save
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js" defer></script>
    <script>
        $(document).ready(function() {
            $('input:checkbox').change(function() {
                var user_id = $(this).attr('id');

                $.ajax({
                    type: 'POST',
                    url: "{{ route('admin.users.activation') }}",
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: {
                        "user_id": user_id
                    },
                    success: function(data) {
                        $.toast({
                            text: data.data.success, // Text that is to be shown in the toast
                            heading: 'Panier', // Optional heading to be shown on the toast
                            icon: 'success', // Type of toast icon
                            showHideTransition: 'fade', // fade, slide or plain
                            allowToastClose: true, // Boolean value true or false
                            hideAfter: 3000, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
                            stack: 5, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
                            position: 'top-right', // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values



                            textAlign: 'center', // Text alignment i.e. left, right or center
                            loader: true, // Whether to show loader or not. True by default
                            loaderBg: '#9EC600', // Background color of the toast loader
                            beforeShow: function() {}, // will be triggered before the toast is shown
                            afterShown: function() {}, // will be triggered after the toat has been shown
                            beforeHide: function() {}, // will be triggered before the toast gets hidden
                            afterHidden: function() {} // will be triggered after the toast has been hidden
                        });
                    }
                });
            });
        });
    </script>
@endsection
