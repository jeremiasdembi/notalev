@extends('adminlte::page')
@section('title', 'Gerir Taxa')

@section('content')
<!--Conteudo da Página começa do Container-->
<div class="container">

    <!-- Criar uma linha, para devidir em dois grupos-->
    <div class="row">
        <!--Começa o primeiro Bloco do grupo de divisão-->
        <div class="col-md-6">
            <!--Começa o Criar e Atualizar Perfil-->
            <div class="card">
                <form action="" method="">
                    <div class="card-header">
                    <h3 class="card-title">Cadastrar Taxa</h3>
                    <br><br>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nome da Taxa" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="3" placeholder="Descrição">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Valor da Taxa" required>
                    </div>
                    <div class="row">
                        <br><br>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                               <!--Adicionamos espaço vazio, para movimentar os botões a esquerda-->
                           </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                               <button type="submit" class="btn btn-block btn-primary radius">Salvar</button>
                            </div>
                        </div>
                        
                    </div>

                </div>
                </form>
                
                <!-- /.card-header -->

                <!-- /.card-body -->

                <!-- /.card-footer-->
            </div>

        <!--/.direct-Termina a Primeira Coluna -->
        </div>
        <!--Termina o Criar e Atualizar Perfil-->
        <!-- /.col -->
        <!--Começa o Listar Perfil-->
        <!--Começa o primeiro Bloco do grupo de divisão-->
        <div class="col-md-6">
            <!-- DIRECT CHAT -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Actualizar Taxa</h3>
                    <br><br>
                    <form action="" method="">
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Pesquisar Perfil">
                            <div class="input-group-append">
                                <button class="btn btn-secondary" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Taxa</th>
                                    <th>Acção</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Update software</td>
                                    <td><a href="#" data-toggle="modal" data-target="#modal-lg">Editar</a></td>
                                </tr>
                                <tr>
                                    <td>Clean database</td>
                                    <td><a href="#">Editar</a></td>
                                </tr>
                                <tr>
                                    <td>Cron job running</td>
                                    <td><a href="#">Editar</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br><br><br><br><br><p>  </p>


                </div>
                <!-- /.card-header -->

                <!-- /.card-body -->

                <!-- /.card-footer-->
            </div>
        <!--/.direct-chat -->
        </div>
        <!--Termina o Listar Perfil-->
        <!-- /.col -->
    </div>
    <!-- Pop UP Model-->
    <div class="modal fade" id="modal-lg" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <form action="" method="">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Atualizar Utilizador</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
                <div class="card">
                
                    <div class="card-header">
                   
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nome da Taxa" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="Descrição">
                            </textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Valor da Taxa" required>
                        </div>
                    
                    </div>
                
                <!-- /.card-header -->

                <!-- /.card-body -->

                <!-- /.card-footer-->
            </div>

            <!-- Termina Card -->

          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-success">Salvar Alterações</button>
          </div>
        </div> 
        </form>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
</div>
<!--Fim Container-->
@endsection