@extends('layouts.layout')

@section('title', 'Produtos')

@section('content')

    <div class="mt-3 ms-3">
        <a href="{{url('/home')}}" class="btn btn-primary"><i class="fas fa-arrow-left"> Voltar</i></a>
    </div>

        <div class="table-content p-5 mx-auto">
            <table class="table table-responsive mt-3 w-100 mx-auto text-center">
                @csrf
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>SKU</th>
                        <th>Quantidade Disponível</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product['name'] }}</td>
                        <td>{{ $product['sku'] }}</td>
                        <td>{{ $product['quantity'] }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

@endsection
