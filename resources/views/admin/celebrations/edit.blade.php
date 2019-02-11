@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Edição de Evento</h1>
<hr>
<form action="{{route('celebration.update', ['celebration' => $celebration->id])}}" method="post">
  {{csrf_field()}}
  <p class="form-group">
    <label>Nome</label>
    <input type="text" name="name" value="{{$celebration->name}}" class="form-control @if($errors->has('name')) is-invalid @endif">
    @if($errors->has('name'))
    <span class="invalid-feedback" role="alert">
        <strong>{{$errors->first('name')}}</strong>
    </span>
    @endif
  </p>
  <p class="form-group">
    <label>Data</label>
    <input type="text" name="date" value="{{$celebration->date}}" class="form-control @if($errors->has('date')) is-invalid @endif">
    @if($errors->has('date'))
    <span class="invalid-feedback" role="alert">
        <strong>{{$errors->first('date')}}</strong>
    </span>
    @endif
  </p>
  <p class="form-group">
      <label>Foto</label>
      <div class="custom-file">
          <input name="photo" value="{{$celebration->photo}}" type="file" class="custom-file-input @if($errors->has('photo')) is-invalid @endif" >
          <label class="custom-file-label">{{$celebration->photo}}</label>
        </div>
        @if($errors->has('photo'))
        <span class="invalid-feedback" role="alert">
            <strong>{{$errors->first('photo')}}</strong>
        </span>
        @endif
      </p>
  <p class="form-group">
    <label>Descrição</label>
    <textarea name="description" id="" cols="30" rows="10" class="form-control @if($errors->has('description')) is-invalid @endif">{{$celebration->description}}</textarea>
    @if($errors->has('description'))
    <span class="invalid-feedback" role="alert">
        <strong>{{$errors->first('description')}}</strong>
    </span>
    @endif
  </p>

  <input type="submit" value="Atualizar" class="btn btn-success btn-lg">
</form>
</div>
@endsection