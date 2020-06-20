@extends('adminlte::page')
@section('title', 'Operação')

@section('content')
<!--Conteudo da Página começa do Container-->
<div class="container">

    <!-- Criar uma linha, para devidir em dois grupos-->
    <div class="row">
        <!--Começa o primeiro Bloco do grupo de divisão-->
        <div class="col-md-12">
            <form action="" method="">
            <!--Começa o Criar e Atualizar Perfil-->
            <div class="card">
                
                    <div class="card-header">
                    <h3 class="card-title">Cadastrar Operação</h3>
                    <br><br>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Nome da Operação" required>    
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="tel" class="form-control" placeholder="Descrição" required>    
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <select class="form-control">
                                    <option>Selecionar Taxa</option>
                                    <option>option 2</option>
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
                    </div>
                    </div>
                </div>
                <!-- /.card-header -->
                </form>
                <!-- /.card-body -->

                <!-- /.card-footer-->
            </div>
            </div>
               
        
        <!--/.direct-Termina a Primeira Coluna -->
        
        <!--Termina o Criar e Atualizar Perfil-->
        <!-- /.col -->
        <!--Começa o Listar Perfil-->
        <!--Começa o primeiro Bloco do grupo de divisão-->
        <!--Termina o Listar Perfil-->
        <!-- /.col -->
    
    <div class="row">
        <div class="col-md-12">
            <!--Começa o Criar e Atualizar Perfil-->
            <div class="card">
                <form>
                    
                </form>
                <div class="card-header">
                    <form action="" method="">
                        <h3 class="card-title">Actualizar Operação</h3>
                        <br><br>
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Procurar Operação">
                            <div class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                        </div>
                    </form>
                    
                </div>
                <div class="card-header">
                    <div class="card-body p-0">
                        <table class="table table-striped">
                             <thead>
                                <tr>
                                    <th>Operação</th>
                                    <th>Taxa</th>
                                    <th>Acção</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Transferência</td>
                                    <td>Transfrencia Conta a Conta</td>
                                    <td><a href="#" data-toggle="modal" data-target="#modal-lg">Editar</a></td>
                                </tr>
                                <tr>
                                    <td>Transferência</td>
                                    <td>Transfrencia Conta a Conta</td>
                                    <td><a href="#">Editar</a></td>
                                </tr>
                                <tr>
                                    <td>Transferência</td>
                                    <td>Transfrencia Conta a Conta</td>
                                    <td><a href="#">Editar</a></td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
                </div>
                <!-- /.card-header -->

                <!-- /.card-body -->

                <!-- /.card-footer-->
            </div>

        <!--/.direct-Termina a Primeira Coluna -->
        </div>
    </div>
    <!-- Pop UP Model-->
    <div class="modal fade" id="modal-lg" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <form action="" method="">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Atualizar Operação</h4>
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
                                <input type="text" class="form-control" placeholder="Nome da Operação" required>    
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="tel" class="form-control" placeholder="Descrição" required>    
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <select class="form-control">
                                    <option>Selecionar Taxa</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                </select>
                            </div>
                        </div>
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