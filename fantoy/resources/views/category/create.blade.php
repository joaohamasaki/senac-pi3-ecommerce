@extends('layouts.main')
@section('title', 'Cadastrar Categoria dos Fantoy')

@section('content')
<h1>Cadastrar Categoria do Fantoy:</h1>
    <form method="POST" action="{{ route('category.store') }}">
        @csrf
        <div class="row">
            <span class="form-label">Nome:</span>
            <input name="name" type="text"  class="form-control">
        <div class="row mt-4">
            <button type="submit" class="btn btn-success btn-lg">Salvar</button>
            <a href="{{ route('category.index') }}" class="btn btn-lg btn-primary mt-2">voltar</a>
        </div>
    </form>
@endsection
