@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{route('product.new')}}" class="float-right btn btn-success">Novo</a>
<h1 class="float-left">Lista de Produtos</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Modificado em</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->name}}</td>
            <td>R${{number_format($p->price, 2)}}</td>
            <td>{{$p->updated_at}}</td>
            <td>
                <a href="{{route('product.edit', ['product' => $p->id])}}"class="btn btn-primary">Editar</a>
                <a href="{{route('product.remove', ['id' => $p->id])}}"class="btn btn-danger">Excluir</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection