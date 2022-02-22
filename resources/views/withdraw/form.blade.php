@extends('layouts.layout')

@section('title', 'Dashboard')

@section('content')

    <div class="form">
        <div class="mt-5 p-5 w-50 mx-auto border">
            @if(isset($withdraw))
                <form class="inline-form p-5" method="post" action="{{url('withdraws', $withdraw['id'])}}">
                @method('PUT')
            @else
                <form class="inline-form p-5" method="post" action="{{url('withdraws', 1)}}">
            @endif
                @csrf
                    <div class="row g-2 align-items-center mt-3">
                        <div class="col-5">
                            <label for="title">Product</label>
                            <select class="form-control" id="product_id" name="product_id" @if(isset($withdraw)) disabled @endif required>
                                @if(isset($withdraw)) <option value="{{ $withdraw['product_id'] }}">{{ $withdraw['name'] }}</option> @endif
                                @foreach($products as $product)
                                    <option value="{{ $product['id'] }}">{{ $product['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="title">Quantidade</label>
                            <input type="input" class="form-control" id="quantity" name="quantity" value="{{$withdraw['quantity'] ?? ''}}" required>
                        </div>
                        <div class="col-4">
                            <label for="title">Data da Baixa</label>
                            <input type="date" class="form-control" id="withdraw_date" name="withdraw_date" value="{{$withdraw['withdraw_date'] ?? ''}}" required>
                        </div>
                    </div>
                    <div class="form-group text-center mt-5">
                        <a href="{{ url('withdraws/') }}" class="btn btn-primary">Cancelar</a>
                        <button class="btn btn-primary ml-3"> Salvar</button>
                    </div>
            </form>
        </div>
    </div>
@endsection
