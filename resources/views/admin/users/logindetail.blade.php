@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{route('user.new')}}" class="float-right btn btn-success">Voltar</a>
<h1 class="float-left" >Histórico de sessão</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Login</th>
            <th>Logout</th>
            <th>Tempo de Sessão</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $u)
        <tr>
            <td>{{$u->id}}</td>
            <td>{{$u->name}}</td>
            <td>@php echo date("d-m-Y h:m:s", strtotime($u->login)); @endphp</td>
            <td>
                    @php
                    if($u->logout == null){
                        $logout = "Usuário Online";
                        $sessiontime = null;
                    }else{
                        $logout = date("d-m-Y h:m:s", strtotime($u->logout));
                        $sessiontime = strtotime($u->login) + strtotime($u->logout);
                        $sessiontime = $sessiontime / 1000;
                        $sessiontime = date("h:m:s", $sessiontime);
                    }
                    @endphp
                    {{$logout}}
            </td>
            <td>
                @php
                echo $sessiontime;
                @endphp
                
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection