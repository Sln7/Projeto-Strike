@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{route('celebration.new')}}" class="float-right btn btn-success">Novo</a>
<h1 class="float-left" >Painel de Eventos</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Data</th>
            <th>Descrição</th>
            <th>Ações</th>
            <th>Foto</th>

        </tr>
    </thead>
    <tbody>
        @foreach($celebrations as $c)
        <tr>
            <td>{{$c->id}}</td> 
            <td>{{$c->name}}</td>
            <td>{{$c->date}}</td> 
            <td>{{$c->description}}</td>
            <td>
                <a href="{{route('celebration.edit', ['celebration' => $c->id])}}"class="btn btn-primary">Editar</a>
                <a href="{{route('celebration.remove', ['id' => $c->id])}}"class="btn btn-danger">Excluir</a>
            </td>
            <td><img src="{{ url("storage/celebrations/{$c->photo}") }}" alt="{{ $c->name}}" style="width: 75px; height: 75px;"><td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection