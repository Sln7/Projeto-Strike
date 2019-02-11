@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Adição de créditos ao Usuário</h1>
<hr>
<form action="{{route('user.credits', ['user' => $user->id])}}" method="post">
    {{csrf_field()}}
  <p class="form-group">
    <label>Nome do Usuário</label>
    <input type="text" name="name" value="{{$user->name}}" disabled class="form-control @if($errors->has('name')) is-invalid @endif">
    @if($errors->has('name'))
    <span class="invalid-feedback" role="alert">
        <strong>{{$errors->first('name')}}</strong>
    </span>
    @endif
  </p>
  <p class="form-group">
        <label>CPF</label>
        <input type="text" name="cpf" value="{{$user->CPF}}" disabled
         class="form-control @if($errors->has('cpf')) is-invalid @endif">
        @if($errors->has('cpf'))
        <span class="invalid-feedback" role="alert">
            <strong>{{$errors->first('cpf')}}</strong>
        </span>
        @endif
      </p>
  <p class="form-group">
      <label>Saldo Atual</label>
      <input type="text" name="balance" value="{{$user->credits}}" readonly 
      class="form-control @if($errors->has('balance')) is-invalid @endif">
      @if($errors->has('balance'))
      <span class="invalid-feedback" role="alert">
          <strong>{{$errors->first('balance')}}</strong>
      </span>
      @endif
    </p>
  <p class="form-group">
      <label>Adição de créditos</label>
      <input type="credits" name="credits" class="form-control @if($errors->has('credits')) is-invalid @endif">
      @if($errors->has('credits'))
      <span class="invalid-feedback" role="alert">
          <strong>{{$errors->first('credits')}}</strong>
      </span>
      @endif
    </p>
          <p class="form-group">
              <label>Confirmar a quantidade de créditos</label>
              <input type="credits" name="credits_confirmation" value="{{old('credits_confirmation')}}" class="form-control @if($errors->has('credits_confirmation')) is-invalid @endif">
              @if($errors->has('credits_confirmation'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{$errors->first('credits_confirmation')}}</strong>
              </span>
              @endif
            </p>


  <input type="submit" value="Adicionar Créditos" class="btn btn-success btn-lg">
</form>
</div>
@endsection