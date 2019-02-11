@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Inserção de Produto</h1>
<hr>
<form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
  <p class="form-group">
    <label>Nome</label>
    <input type="text" name="name" value="{{old('name')}}" class="form-control @if($errors->has('name')) is-invalid @endif">
    @if($errors->has('name'))
    <span class="invalid-feedback" role="alert">
        <strong>{{$errors->first('name')}}</strong>
    </span>
    @endif
  </p>
  <p class="form-group">
    <label>Preço</label>
    <input type="text" name="price" value="{{old('price')}}" class="form-control @if($errors->has('price')) is-invalid @endif">
    @if($errors->has('price'))
    <span class="invalid-feedback" role="alert">
        <strong>{{$errors->first('price')}}</strong>
    </span>
    @endif
  </p>
  <p class="form-group">
    <label>Categoria</label>
    <select class="form-control @if($errors->has('category')) is-invalid @endif" name="category">
      <option value="">Selecione</option>
      <option value="0">Comida</option>
      <option value="1">Bebida</option>
    </select>
    @if($errors->has('category'))
    <span class="invalid-feedback" role="alert">
        <strong>{{$errors->first('category')}}</strong>
    </span>
    @endif
  </p>
  <p class="form-group">
    <label>Descrição</label>
    <textarea name="description" id="" cols="30" rows="10" class="form-control">{{old('description')}}</textarea>
  </p>

  <input type="submit" value="Cadastrar" class="btn btn-success btn-lg">
</form>
</div>
@endsection