@extends('layouts.main')
@section('title', 'Lista de Tags dos Fantoys')
<script>
        function remover(){
            return confirm("Você deseja remover a tag?");
        }
</script>
@section('content')
    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif
<h1>Lista de Tags dos Fantoys:</h1>
<a href="{{ route('tag.create') }}" class="btn btn-lg btn-primary">Criar Tag Fantoy</a>
<div class="row">
    <table class="table table-striped">
        <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Opções</th>
                </tr>
        </thead>
        <tbody>
            @foreach($tags as $tag)
                <tr>
                    <td>{{ $tag->id }}</td>
                    <td>{{ $tag->name }} ({{$tag->products()->count()}})</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-success">Visualizar</a>
                        <a href="{{ route('tag.edit', $tag->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form class="d-inline" action="{{ route('tag.destroy', $tag->id) }}" method="POST" onsubmit=" return remover()">
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