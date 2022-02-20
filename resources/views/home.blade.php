@extends('layouts.layout')

@section('title', 'Dashboard')

@section('content')

    <div class="mt-5 p-5">
        <div class="row p-3">
            <div class="col-sm-6">
                <div class="card bg-primary">
                    <h5 class="text-center mt-2" style="color: #FFFFFF"><i class="fas fa-cubes"> Produtos</i></h5>
                    <div class="card-body text-center">
                        <a href="{{url('products/form')}}" class="btn btn-primary"><i class="fas fa-plus"> Adicionar</i></a>
                        <a href="{{url('products/')}}" class="btn btn-primary"><i class="fas fa-list"> Listar</i></a>
                        <a href="{{url('product-tags/')}}" class="btn btn-primary"><i class="fas fa-object-union"> Vincular</i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card bg-primary disabled">
                    <h5 class="text-center mt-2" style="color: #FFFFFF"><i class="fas fa-tags"> Tags</i></h5>
                    <div class="card-body text-center">
                        <a href="{{url('tags/form')}}" class="btn btn-primary"><i class="fas fa-plus"> Adicionar</i></a>
                        <a href="{{url('tags/')}}" class="btn btn-primary"><i class="fas fa-list"> Listar</i></a>
                        <a href="{{url('product-tags/report')}}" class="btn btn-primary"><i class="fas fa-file"> Relatório de Relevância</i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
