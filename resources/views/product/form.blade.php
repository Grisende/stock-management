@extends('layouts.layout')

@section('title', 'Dashboard')

@section('content')

    <div class="form">
        <div class="mt-5 p-5 w-50 mx-auto border">
            @if(isset($product))
                <form class="inline-form p-5" method="post" action="{{url('products', $product['id'])}}">
                @method('PUT')
            @else
                <form class="inline-form p-5" method="post" action="{{url('products/')}}">
            @endif
                @csrf
                    <div class="mt-3">
                        <label for="title">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$product['name'] ?? ''}}" required>
                    </div>
                    <div class="row g-2 align-items-center mt-3">
                        <div class="col-8">
                            <label for="title">SKU</label>
                            <input type="text" class="form-control" id="sku" name="sku" value="{{$product['sku'] ?? ''}}" required>
                        </div>

                        <div class="col-4">
                            <label for="title">Data de Adição</label>
                            <input type="date" class="form-control" id="insertion_date" name="insertion_date" value="{{$product['insertion_date'] ?? ''}}" required>
                        </div>
                    </div>
                    <div class="form-group text-center mt-5">
                    <a href="{{ url('products/') }}" class="btn btn-primary">Cancelar</a>
                    <button class="btn btn-primary ml-3"> Salvar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
