@extends('adminlte::page')
@section('title', 'Gerir Utilizador')

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
                    <h3 class="card-title">Cadastrar Utilizador</h3>
                    <br><br>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder=" Nome Completo" required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nome de Utilizador" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Senha" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Número de Conta Notalev">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Número de Identificação Pessoal" required>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <select class="form-control" disabled="">
                                    <option>Selecionar perfil</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br> 
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
                <form action="" method="">
                    <div class="card-header">
                    <h3 class="card-title">Actualizar utilizador</h3>
                    <br><br>
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="Pesquisar Utilizador">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Utilizador</th>
                                    <th>Perfil</th>
                                    <th>Acção</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Delton Agostinho</td>
                                    <td>Admin</td>
                                    <td><a href="#" data-toggle="modal" data-target="#modal-lg">Editar</a></td>
                                </tr>
                                <tr>
                                    <td>Hugo Paulo</td>
                                    <td>Gestor de Conta</td>
                                    <td><a href="#">Editar</a></td>
                                </tr>
                                <tr>
                                    <td>Milagres Baptista</td>
                                    <td>Gestor de Conta</td>
                                    <td><a href="#">Editar</a></td>
                                </tr>
                                <tr>
                                    <td>Joidy Nunes</td>
                                    <td>Validador de Conta</td>
                                    <td><a href="#">Editar</a></td>               
                                </tr>
                                <tr>
                                    <td>Fernando Raimundo</td>
                                    <td>Gestor de Conta</td> 
                                    <td><a href="#">Editar</a></td>
                                                  
                                </tr>
                                <tr>
                                    <td>Jeremias Dembi</td>
                                    <td>Informático</td>
                                    <td><a href="#"> Editar</a></td>  
                                                 
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    </div >
                </form>
                
                <!-- /.card-header -->

                <!-- /.card-body -->

                <!-- /.card-footer-->
            </div>
        <!--/.direct-chat -->
        </div>
        <!--Termina o Listar Perfil-->
        <!-- /.col -->
    </div>
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
                        <input type="text" class="form-control" placeholder=" Nome Completo" required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nome de Utilizador" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Senha" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Número de Conta Notalev">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Número de Identificação Pessoal" required>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <select class="form-control" disabled="">
                                    <option>Selecionar perfil</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br> 

                </div>
               
                
                <!-- /.card-header -->

                <!-- /.card-body -->

                <!-- /.card-footer-->
            </div>

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