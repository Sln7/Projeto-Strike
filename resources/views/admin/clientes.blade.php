@extends('admin.index')
@section('content')

      <!-- Breadcrumbs-->
        <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Cadastro de Clientes     </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Criado em</th>
                    <th>Ações</th>
                </tr>
              </thead>
                <tr>
                    <td>{{$u->id}}</td>
                    <td>{{$u->name}}</td>
                    <td>{{$u->created_at}}</td>
                  <td>   <button type="button" data-toggle="modal" data-target="#add" class="btn btn-success">+</button>
                    <button type="button" data-toggle="modal" data-target="#info" class="btn btn-info">Info</button>
                    <button type="button" class="btn btn-warning">Editar</button></td>
                </tr>
                <tr>
                  <td>Solano</td>
                  <td>Martins</td>
                  <td>087.543.341-33</td>
                  <td>16/05/2017</td>
                  <td>
                    <button type="button" data-toggle="modal" data-target="#add" class="btn btn-success">+</button>
                    <button type="button" data-toggle="modal" data-target="#info" class="btn btn-info">Info</button>
                     <button type="button" class="btn btn-warning">Editar</button>
                   </td>
                </tr>
              </tbody>
            </table>
          </div>  
        </div>
        <div class="card-footer small text-muted">Atualizado em: dd/mm/aaaa</div>
      </div>
    </div>
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Strike R4 - Admin</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Deseja sair?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Clique em "Logout" se realmente deseja sair.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-danger" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

<!-- aaaaaaaa -->

<!-- Logout Modal-->
<div class="modal fade" id="info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informações do Cliente</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Nome:____</div>
      <div class="modal-body">Sobrenome: ____</div>
      <div class="modal-body">Pontuação Boliche: 1000 </div>
        


      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Ok</button>

      </div>
    </div>
  </div>
</div>

<!-- aaaaaaaa -->
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Adicionar Pontuação</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
<center>
    <form cols = "5">

    <label for="novapontuacao"> Nova Pontuação:</label>
    <input type="text" class="form-control" id="novapontuacao" placeholder="Nova Pontuação">
    <label for="pontuacaoatual"> Atual Pontuação: <b> 15.000 </b></label>

  <br>

  <button type="submit" class="btn btn-primary">Adicionar</button> <br>
</form> </center>

@endsection