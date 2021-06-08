@extends('layouts.main')
@section('title', 'Editar Categorias Fantoys')
@section('content')
    <h1>Editar Categoria Fantoy:</h1>
    <form method="POST" action="{{ route('category.update', $category->id ) }}">
        @csrf
        @method('PATCH')
        <div class="row">
            <span class="form-label">Nome:</span>
            <input name="name" type="text"  class="form-control" value="{{ $category->name }}">
        </div>
        <div class="row mt-4">
            <button type="submit" class="btn btn-success btn-lg">Salvar</button>
            <a href="{{ route('product.index') }}" class="btn btn-lg btn-primary mt-2">voltar</a>
        </div>
    </form>
@endsection