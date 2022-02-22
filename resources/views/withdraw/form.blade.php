@extends('layouts.layout')

@section('title', 'Dashboard')

@section('content')

    <div class="form">
        <div class="mt-5 p-5 w-50 mx-auto border">
            @if(isset($withdraws))
                <form class="inline-form p-5" method="post" action="{{url('withdraw', $withdraw['id'])}}">
                @method('PUT')
            @else
                <form class="inline-form p-5" method="post" action="{{url('withdraw/')}}">
            @endif
                @csrf
                    <div class="mt-3">
                        <label for="title">Product</label>
                        <select class="form-control" id="product_id" name="product_id" required>
                            @foreach($products as $product)
                                <option value="{{$product['id']}}">{{$product['name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row g-2 align-items-center mt-3">
                        <div class="col-8">
                            <label for="title">SKU</label>
                            <input type="text" class="form-control" id="sku" name="sku" value="{{$withdraw['sku'] ?? ''}}" required>
                        </div>

                        <div class="col-4">
                            <label for="title">Data de Adição</label>
                            <input type="date" class="form-control" id="withdraw_date" name="withdraw_date" value="{{$withdraw['insertion_date'] ?? ''}}" required>
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
