@extends('layouts.app')

@section('title', 'Edit products')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
            </div>
        </section>
        @include('layouts.partial.msg')
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-secondary">
                                <h3>@yield('title')</h3>
                            </div>
                            <form method="PUT" action="{{ route('products.update', $product->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Name <strong
                                                        style="color:red;">(*)</strong></label>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Enter the name of the product" autocomplete="off"
                                                    value="{{ $product->name }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Description <strong
                                                        style="color:red;">(*)</strong></label>
                                                <textarea class="form-control" name="description" placeholder="Enter the description" id="" cols="120"
                                                    rows="4">{{ $product->description }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Quantity<strong
                                                        style="color:red;">(*)</strong></label>
                                                <input type="text" class="form-control" name="quantity"
                                                    placeholder="Enter the avaible quantity of products" autocomplete="off"
                                                    value="{{ $product->quantity }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Price<strong
                                                        style="color:red;">(*)</strong></label>
                                                <input type="text" class="form-control" name="price"
                                                    placeholder="Enter the price of the product" autocomplete="off"
                                                    value="{{ $product->price }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Imagen</label>
                                                <input type="file" class="form-control-file" name="image"
                                                    id="image">
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" class="form-control" name="status" value="1">
                                    <input type="hidden" class="form-control" name="registered_by"
                                        value="{{ Auth::user()->id }}">
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-2 col-xs-4">
                                            <button type="submit"
                                                class="btn btn-primary btn-block btn-flat">Update</button>
                                        </div>
                                        <div class="col-lg-2 col-xs-4">
                                            <a href="{{ route('products.index') }}"
                                                class="btn btn-danger btn-block btn-flat">Back</a>
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
