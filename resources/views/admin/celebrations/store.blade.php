@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Cadastro de Evento</h1>
<hr>
<form action="{{route('celebration.store')}}" method="post" enctype="multipart/form-data">
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
    <label>Data</label>
    <input type="text" name="date" value="{{old('date')}}" class="form-control @if($errors->has('date')) is-invalid @endif">
    @if($errors->has('date'))
    <span class="invalid-feedback" role="alert">
        <strong>{{$errors->first('date')}}</strong>
    </span>
    @endif
  </p>

    <p class="form-group">
        <label>Foto</label>
        <div class="custom-file">
            <input name="photo" value="{{old('photo')}}" type="file" class="custom-file-input @if($errors->has('photo')) is-invalid @endif" >
            <label class="custom-file-label">{{old('photo')}}</label>
          </div>
          @if($errors->has('photo'))
          <span class="invalid-feedback" role="alert">
              <strong>{{$errors->first('photo')}}</strong>
          </span>
          @endif
        </p>

  <p class="form-group">
    <label>Descrição</label>
    <textarea name="description" id="" cols="30" rows="10" class="form-control @if($errors->has('description')) is-invalid @endif">{{old('description')}}</textarea>
    @if($errors->has('description'))
    <span class="invalid-feedback" role="alert">
        <strong>{{$errors->first('description')}}</strong>
    </span>
    @endif
  </p>

  <input type="submit" value="Cadastrar" class="btn btn-success btn-lg">
</form>
</div>
@endsection