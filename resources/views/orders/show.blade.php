@extends('layouts.app')

@section('title', 'Bill')

@section('content')

    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($details as $detail)
                            <tr>
                                <th>{{ $detail->product->name }}</th>
                                <th> ${{ $detail->product->price }} </th>
                                <th> {{ $detail->quantity }} </th>
                                <th>${{ $detail->subtotal }}</th>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection
