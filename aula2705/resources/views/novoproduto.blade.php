@extends('layout.app', ["current" => "produto"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="{{ route('produto.store') }}" method="POST">
            @csrf
            <div class="form group">
                <label for="nomeProduto">Nome do Produto</label>
                <input type="text" class="form-control" name="nomeProduto" id="nomeProduto" placeholder="Produto">

                <label for="estoque">Estoque</label>
                <input type="text" class="form-control" name="estoque" id="estoque" placeholder="Estoque">

                <label for="Preco">Preço</label>
                <input type="text" class="form-control" name="preco" id="preco" placeholder="Preço">

                <label for="categoria_id">Id da Categoria</label>
                <input type="text" class="form-control" name="categoria_id" id="categoria_id" placeholder="id_categoria">


            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>
@endsection