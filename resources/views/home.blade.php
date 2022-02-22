@extends('layouts.layout')

@section('title', 'Dashboard')

@section('content')

    <form method="POST" class="w-100" action="{{ route('logout') }}">
        @csrf
        <a href="{{ route('logout') }}" class="btn btn-primary mt-3 ms-3" onclick="event.preventDefault();
                                               this.closest('form').submit();">
            {{ __('Logout') }}
        </a>
    </form>

    <div class="mt-5 p-5">
        <div class="row p-3">
            <div class="col-sm-6">
                <div class="card bg-primary">
                    <h5 class="text-center mt-2" style="color: #FFFFFF"><i class="fas fa-cubes"> Produtos</i></h5>
                    <div class="card-body text-center">
                        <a href="{{ url('products/form') }}" class="btn btn-primary"><i class="fas fa-plus"> Adicionar</i></a>
                        <a href="{{ url('products/') }}" class="btn btn-primary"><i class="fas fa-list"> Listar</i></a>
                        <a href="{{url('stock/stock-report')}}" class="btn btn-primary"><i class="fas fa-file"> Estoque </i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card bg-primary disabled">
                    <h5 class="text-center mt-2" style="color: #FFFFFF"><i class="fas fa-tags"> Baixa de Produtos</i></h5>
                    <div class="card-body text-center">
                        <a href="{{url('withdraws/form')}}" class="btn btn-primary"><i class="fas fa-plus"> Adicionar</i></a>
                        <a href="{{url('withdraws/')}}" class="btn btn-primary"><i class="fas fa-list"> Listar</i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
