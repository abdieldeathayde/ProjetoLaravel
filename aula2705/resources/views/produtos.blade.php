@extends('layout.app', ["current" => "produto"])
@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Produtos</h5>
        @if(count($prods) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome do produto</th>
                    <td>Estoque</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($prods as $prod)
                <tr>
                    <td>{{$prod->id}}</td>
                    <td>{{$prod->nome}}</td>
                    <td>{{$prod->estoque}}</td>
                    <td>
                        <a href="{{ route('produto.create' ) }}" class="btn btn-sm btn-primary">Nova</a>
                        <a href="{{ route('produto.edit', $prod['id']) }}" class="btn btn-sm btn-primary">Editar</a>
                        <form action="{{ route('produto.destroy', $prod['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <input type="submit" class="btn btn-sm btn-danger" value="Apagar">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else <a href="{{ route('produto.create' ) }}" class="btn btn-sm btn-primary">Nova</a>
        @endif

        @endsection