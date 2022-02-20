@extends('layouts.layout')

@section('title', 'Produtos')

@section('content')


    <div class="tags" style="padding: 10em 10em 10em; color: #FFFFFF; margin-top: -5em">
        <div class="table-content">
            <div class="add-purchase">
                <a href="{{url('/')}}" class="btn btn-primary"><i class="fas fa-arrow-left"> Voltar</i></a>
            </div>
            <table class="table table-responsive mt-3">
                @csrf
                <thead>
                <tr>
                    <th>Código da Tag</th>
                    <th>Nome da Tag</th>
                    <th>Quantidade de produtos</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($reports as $report)
                    <tr>
                        <td>{{$report['tag_id']}}</td>
                        <td>{{$report['name']}}</td>
                        <td>{{$report['quantity']}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>

@endsection
