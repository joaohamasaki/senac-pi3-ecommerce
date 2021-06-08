@extends('layouts.main')
@section('title', 'Cadastrar Fantoy')

@section('content')
<h1>Cadastrar Fantoy:</h1>
    <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <span class="form-label">Nome:</span>
            <input name="name" type="text"  class="form-control">
        </div>
        <div class="row">
            <span class="form-label">Descrição:</span>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="row">
            <span class="form-label">Preço:</span>
            <input name="price" type="number" min="0.00" max="10000" step="0.01" class="form-control">
        </div>
        <div class="row">
            <span class="form-label">categoria</span>
            <select class="form-select" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">
                        {{$category->name}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="row">
            <span class="form-label">Tags</span>
            <select class="form-select" name="tags[]" multiple>
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">
                        {{$tag->name}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="row">
            <span class="form-label">Imagem</span>
            <input type="file" class="form-control" name="image">
        </div>
        <div class="row mt-4">
            <button type="submit" class="btn btn-success btn-lg">Salvar</button>
            <a href="{{ route('product.index') }}" class="btn btn-lg btn-primary mt-2">voltar</a>
        </div>
    </form>
@endsection
