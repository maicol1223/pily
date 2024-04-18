@extends('layouts.app')

@section('title', 'Crear Producto')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-secondary">
                                <h3>@yield('title')</h3>
                            </div>
                            <form method="POST" action="{{ route('products.store') }}">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Nombre <strong
                                                        style="color:red;">(*)</strong></label>
                                                <input type="text" class="form-control" name="nombre"
                                                    placeholder="Por ejemplo, Positiva" autocomplete="off"
                                                    value="{{ old('nombre') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Descripcion <strong
                                                        style="color:red;">(*)</strong></label>
                                                <textarea name="description" placeholder="Ingrese la descripcion del producto" id="" cols="120"
                                                    rows="4"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Price <strong
                                                        style="color:red;">(*)</strong></label>
                                                <input type="text" class="form-control" name="precio" placeholder=""
                                                    autocomplete="off" value="{{ old('price') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Fotografía</label>
                                                <input type="file" class="form-control-file" name="image"
                                                    id="image">
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" class="form-control" name="estado" value="1">
                                    <input type="hidden" class="form-control" name="registradopor"
                                        value="{{ Auth::user()->id }}">
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-2 col-xs-4">
                                            <button type="submit"
                                                class="btn btn-primary btn-block btn-flat">Registrar</button>
                                        </div>
                                        <div class="col-lg-2 col-xs-4">
                                            <a href="{{ route('products.index') }}"
                                                class="btn btn-danger btn-block btn-flat">Atras</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
