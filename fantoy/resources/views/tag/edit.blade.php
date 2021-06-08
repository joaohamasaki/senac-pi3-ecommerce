@extends('layouts.main')
@section('title', 'Editar Tag do Fantoy')
@section('content')
    <h1>Editar Tag Fantoy:</h1>
    <form method="POST" action="{{ route('tag.update', $tag->id ) }}">
        @csrf
        @method('PATCH')
        <div class="row">
            <span class="form-label">Nome:</span>
            <input name="name" type="text"  class="form-control" value="{{ $tag->name }}">
        </div>
        <div class="row mt-4">
            <button type="submit" class="btn btn-success btn-lg">Salvar</button>
            <a href="{{ route('tag.index') }}" class="btn btn-lg btn-primary mt-2">voltar</a>
        </div>
    </form>
@endsection