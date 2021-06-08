@extends('layouts.main')
@section('title', 'Cadastrar Tag do Fantoy')
@section('content')
<h1>Cadastrar Tag do Fantoy:</h1>
    <form method="POST" action="{{ route('tag.store') }}">
        @csrf
        <div class="row">
            <span class="form-label">Nome:</span>
            <input name="name" type="text"  class="form-control">
        <div class="row mt-4">
            <button type="submit" class="btn btn-success btn-lg">Salvar</button>
            <a href="{{ route('tag.index') }}" class="btn btn-lg btn-primary mt-2">voltar</a>
        </div>
    </form>
@endsection
