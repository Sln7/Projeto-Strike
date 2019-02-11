@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Edição de Produto</h1>
<hr>
<form action="{{route('product.update', ['product' => $product->id])}}" method="post">
  {{csrf_field()}}
  <p class="form-group">
    <label>Nome</label>
    <input type="text" name="name" value="{{$product->name}}" class="form-control @if($errors->has('name')) is-invalid @endif">
    @if($errors->has('name'))
    <span class="invalid-feedback" role="alert">
        <strong>{{$errors->first('name')}}</strong>
    </span>
    @endif
  </p>
  <p class="form-group">
    <label>Preço</label>
    <input type="text" name="price" value="{{$product->price}}" class="form-control @if($errors->has('price')) is-invalid @endif">
    @if($errors->has('price'))
    <span class="invalid-feedback" role="alert">
        <strong>{{$errors->first('price')}}</strong>
    </span>
    @endif
  </p>
  <p class="form-group">
    <label>Descrição</label>
    <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$product->description}}</textarea>
  </p>

  <input type="submit" value="Atualizar" class="btn btn-success btn-lg">
</form>
</div>
@endsection