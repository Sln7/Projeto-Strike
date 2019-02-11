@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Painel Admin</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <a href="{{route('product.index')}}"class="btn btn-primary">Produtos</a>
                        <a href="{{route('user.index')}}"class="btn btn-primary">Usuários</a>
                        <a href="{{route('celebration.index')}}"class="btn btn-primary">Event</a>
                        <a href="#"class="btn btn-primary">Cardápio</a>
                        <a href="#"class="btn btn-primary">Reservas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
