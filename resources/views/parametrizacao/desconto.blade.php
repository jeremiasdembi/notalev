@extends('adminlte::page')
@section('title', 'Desconto')

@section('content')
<!--Conteudo da Página começa do Container-->
<div class="container">

    <!-- Criar uma linha, para devidir em dois grupos-->
    <div class="row">
        <!--Começa o primeiro Bloco do grupo de divisão-->
        <div class="col-md-12">
            <!--Começa o Criar e Atualizar Perfil-->
            <div class="card">
                <form action="" method="">
                   <div class="card-header">
                    <h3 class="card-title">Cadastrar Desconto</h3>
                    <br><br>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Desconto" required>    
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="number" class="form-control" placeholder=" Percentagem de Desconto" required>    
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <select class="form-control">
                                    <option>Selecionar Operação</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <select class="form-control">
                                    <option>Selecionar Tipo de Conta</option>
                                    <option>option 1</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <br>
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
                        
                        
                    <div class="row">
                        <br><br>
                    </div>
                </div>
                <!-- /.card-header -->

                <!-- /.card-body -->

                <!-- /.card-footer-->
            </div> 
                </form>
                
        </div>
        <!--/.direct-Termina a Primeira Coluna -->
        </div>
        <!--Termina o Criar e Atualizar Perfil-->
        <!-- /.col -->
        <!--Começa o Listar Perfil-->
        <!--Começa o primeiro Bloco do grupo de divisão-->
        <!--Termina o Listar Perfil-->
        <!-- /.col -->
    </div>

    <div class="row">
        <!--Começa o primeiro Bloco do grupo de divisão-->
        <div class="col-md-12">
            <!--Começa o Criar e Atualizar Perfil-->
            <div class="card">
                <form action="" method="">
                    <div class="card-header">
                        <h3 class="card-title">Actualizar Desconto</h3>
                        <br><br>
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Pesquisar Desconto">
                            <div class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                        <div class="row">
                            <br>
                        </div>
                    </div>
                    <div class="card-header">
                        <br>
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                 <thead>
                                    <tr>
                                        <th>Desconto</th>
                                        <th>Percentagem</th>
                                        <th>Tipo de Conta</th>
                                        <th>Operação</th>
                                        <th>Acção</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Sei La</td>
                                        <td>15</td>
                                        <td>Conta Normal</td>
                                        <td>Transferencia</td>
                                        <td><a href="#" data-toggle="modal" data-target="#modal-lg">Editar</a></td>
                                    </tr>
                                    <tr>
                                        <td>Sei La</td>
                                        <td>15</td>
                                        <td>Conta Normal</td>
                                        <td>Transferencia</td>
                                        <td><a href="#" data-toggle="modal" data-target="#modal-lg">Editar</a></td>
                                    </tr>
                                    <tr>
                                        <td>Sei La</td>
                                        <td>15</td>
                                        <td>Conta Normal</td>
                                        <td>Transferencia</td>
                                        <td><a href="#">Editar</a></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row">
                                <br>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->

                    <!-- /.card-body -->

                    <!-- /.card-footer-->
                </div>
                </form>
                

        <!--/.direct-Termina a Primeira Coluna -->
        </div>
        <!--Termina o Criar e Atualizar Perfil-->
        <!-- /.col -->
        <!--Começa o Listar Perfil-->
        <!--Começa o primeiro Bloco do grupo de divisão-->
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
                   
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Desconto" required>    
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="number" class="form-control" placeholder=" Percentagem de Desconto" required>    
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <select class="form-control">
                                    <option>Selecionar Operação</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <select class="form-control">
                                    <option>Selecionar Tipo de Conta</option>
                                    <option>option 1</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <br>
                    </div>
                    
                <!-- /.card-header -->

                <!-- /.card-body -->

                <!-- /.card-footer-->
                </div> 
                
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