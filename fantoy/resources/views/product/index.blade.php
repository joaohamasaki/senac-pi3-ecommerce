@extends('layouts.main')
@section('title', 'Lista de Fantoys')
<script>
        function remover(){
            return confirm("Você deseja remover o produto?");
        }
</script>
@section('content')
    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif
<h1>Lista de Fantoys:</h1>
<a href="{{ route('product.create') }}" class="btn btn-lg btn-primary">Criar Produto</a>
<div class="row">
    <table class="table table-striped">
        <thead>
                <tr>
                    <th>Id</th>
                    <th>Foto</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Categoria</th>
                    <th>Preço</th>
                    <th>Opções</th>
                </tr>
        </thead>
        <tbody>
            @foreach($products as $prod)
                <tr>
                    <td>{{ $prod->id }}</td>
                    <td><img src="{{ $prod->image}}" style="width:40px"></td>
                    <td>{{ $prod->name }}</td>
                    <td>{{ $prod->description }}</td>
                    <td>{{ $prod->category->name }}</td>
                    <td>{{ $prod->price }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-success">Visualizar</a>
                        <a href="{{ route('product.edit', $prod->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form class="d-inline" action="{{ route('product.destroy', $prod->id) }}" method="POST" 
                            onsubmit=" return remover()">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Apagar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
    


   

