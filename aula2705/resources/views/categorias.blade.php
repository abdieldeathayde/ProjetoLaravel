@extends('layout.app', ["current" => "categoria"])
@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Categorias</h5>
        @if(count($cats) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome da Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cats as $cat)
                <tr>
                    <td>{{$cat->id}}</td>
                    <td>{{$cat->nome}}</td>
                    <td>
                        <a href="{{ route('categoria.create' ) }}" class="btn btn-sm, btn-primary">Nova</a>
                        <a href="{{ route('categoria.edit', $cat['id']) }}" class="btn btn-sm btn-primary">Editar</a>
                        <form action="{{ route('categoria.destroy', $cat['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <input type="submit" class="btn btn-sm btn-danger" value="Apagar">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else <a href="{{ route('categoria.create' ) }}" class="btn btn-sm, btn-primary">Nova</a>
        @endif

        @endsection