@extends('layouts.layout')

@section('title', 'Produtos')

@section('content')

    <div class="products" style="padding: 10em 10em 10em; margin-top: -8em">
        <div>
            <div class="add-purchase mb-3">
                <a href="{{url('/')}}" class="btn btn-primary"><i class="fas fa-arrow-left"> Voltar</i></a>
                <a href="{{url('products/form')}}" class="btn btn-primary"><i class="fas fa-plus"> Novo</i></a>
            </div>
            <table class="table table-responsive table-bordered table-border-primary">
                @csrf
                <thead>
                <tr class="text-center">
                    <th scope="col">Código do Produto</th>
                    <th scope="col">Nome do Produto</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($products as $product)
                    <tr class="text-center">
                        <td>{{$product['product_id']}}</td>
                        <td>{{$product['name']}}</td>
                        <td><a href="{{url('products', $product['product_id'])}}"><i class="fas fa-edit"></i></a></td>
                        <td><a href="{{url('products', $product['product_id'])}}" class="js-del-products"><i class="fas fa-trash"></i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
