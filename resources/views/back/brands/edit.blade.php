@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.brands.update', $brand->id) }}" method="POST" id="formmmmm" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container">
            <div class=" text-center mt-5 ">
                <h1>Modifier Marque {{ $brand->title }}</h1>
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
                                            <div class="form-group"> <label for="title">Title *</label> <input
                                                    id="title" type="text" name="title" value="{{ $brand->title }}"
                                                    class="form-control" placeholder="Nom Marque *" required="required"
                                                    data-error="Title is required."> </div>
                                            <div class="control-group" id="fields">
                                                <label class="control-label" for="field1">
                                                    Photos *
                                                </label>
                                                <div class="controls-photo">
                                                    <div class="entry input-group upload-input-group">
                                                        <input class="form-control" name="logo_url" type="file">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"> <button type="submit"
                                                onclick="document.getElementById('formmmmm').submit()"
                                                class="btn btn-success btn-send pt-2 btn-block ">Modifier</button> </div>
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
