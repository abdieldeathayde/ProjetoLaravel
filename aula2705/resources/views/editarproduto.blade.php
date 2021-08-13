@extends('layout.app', ["current" => "produto"])
@section('body')
<div class="card border">
    <div class="card-body">
        <!--Configurar o actions para chamar o método update-->
        <form action="{{ route('produto.update', $prods['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nomeProduto">Nome do Produto</label>
                <input type="text" class="form-control" name="nomeProduto" id="nomeProduto" placeholder="Produto" value="{{$prods['nome']}}">
                
                <label for = "estoque">Nome do estoque</label>
                <input type="text" class="form-control" name="estoque" id="estoque" placeholder="Estoque" value="{{$prods['estoque'] }}">

                <label for = "preco">Preço</label>
                <input type="text" class="form-control" name="preco" id="preco" placeholder="Preço" value="{{$prods['preco'] }}">

                <label for="categoria_id">Id da Categoria</label>
                <input type="text" class="form-control" name="categoria_id" id="categoria_id" placeholder="id_categoria" value="{{$prods['categoria_id'] }}">


            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>
@endsection