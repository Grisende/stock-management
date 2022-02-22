@extends('layouts.layout')

@section('title', 'Produtos')

@section('content')

    <div class="products" style="padding: 10em 10em 10em; margin-top: -8em">
        <div>
            <div class="add-purchase mb-3">
                <a href="{{url('/home')}}" class="btn btn-primary"><i class="fas fa-arrow-left"> Voltar</i></a>
                <a href="{{url('withdraws/form')}}" class="btn btn-primary"><i class="fas fa-plus"> Novo</i></a>
            </div>
            <table class="table table-responsive table-bordered table-border-primary">
                @csrf
                <thead>
                <tr class="text-center">
                    <th scope="col">Código da Baixa</th>
                    <th scope="col">Código do Produto</th>
                    <th scope="col">Nome do Produto</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">SKU</th>
                    <th scope="col">Data da Baixa</th>
                    <th scope="col">Método de Inserção</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($withdraws as $withdraw)
                    <tr class="text-center">
                        <td>{{ $withdraw['id'] }}</td>
                        <td>{{ $withdraw['product_id'] }}</td>
                        <td>{{ $withdraw['name'] }}</td>
                        <td>{{ $withdraw['quantity'] }}</td>
                        <td>{{ $withdraw['sku'] }}</td>
                        <td>{{ $withdraw['withdraw_date'] }}</td>
                        <td>{{ $withdraw['is_api'] == 0 ? 'API' : 'Sistema' }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
