@extends('layouts.layout')

@section('title', 'Dashboard')

@section('content')

    <div class="form">
        <div class="mt-5 p-5 w-50 mx-auto border">
            @if(isset($product))
                <form class="inline-form p-5" method="post" action="{{url('products', $product['product_id'])}}">
                @method('PUT')
            @else
                <form class="inline-form p-5" method="POST" action="{{url('products/')}}">
            @endif
                @csrf
                <div class="mt-3">
                    <label for="title">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$product['name'] ?? ''}}" required>
                </div>
                <div class="form-group text-center mt-5">
                    <a href="{{ url('products/') }}" class="btn btn-primary">Cancelar</a>
                    <button class="btn btn-primary ml-3"> Salvar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
