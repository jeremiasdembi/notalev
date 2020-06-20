@extends('adminlte::page')
@section('title', 'Gestão de Subcontas')

@section('content')
<!--Conteudo da Página começa do Container-->
<div class="container">

    <!-- Criar uma linha, para devidir em dois grupos-->
    <div class="row">
        <!--Começa o primeiro Bloco do grupo de divisão-->
        <div class="col-md-6">
            <!--Começa o Criar e Atualizar Perfil-->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Cadastrar Subconta</h3>
                    <br><br>
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="Pesquisar Conta">
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
                                    <th>Nº de Conta</th>
                                    <th>Nome</th>
                                    <th>Saldo</th>
                                    <th>Seleccionar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>00975136AMB89</td>
                                    <td><a href="#" class="">Delton</a></td>
                                    <td>18736 Nl</td>
                                    <td><a href="#">Seleccionar</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <br>
                    </div>
                </div>
                <form action="" method="">
                <div class="card-header">
                    <h3 class="card-title">Dados para a Subconta</h3>
                    <br><br>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder=" Nome de Subconta">    
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="phone" id="phonenumber" placeholder="(+244) 923 XXX XXX XXX">
                                </div>     
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="password" class="form-control" placeholder=" Senha">    
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="password" class="form-control" placeholder=" Confirmar Senha ">    
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="number" class="form-control" placeholder=" Valor a adicionar em Kwanza">    
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder=" Equivalente em NotaLev" disabled>    
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
                               <button type="button" class="btn btn-block btn-primary radius">Salvar</button>
                            </div>

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
        <div class="col-md-6">
            <!--Começa o Criar e Atualizar Perfil-->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Actualizar Subconta</h3>
                    <br><br>
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="Pesquisar Conta">
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
                                    <th>Nº de Conta</th>
                                    <th>Nome</th>
                                    <th>Saldo</th>
                                    <th>Acção</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>00975136AMB89</td>
                                    <td><a href="#" class="">Delton</a></td>
                                    <td>18736 Nl</td>
                                    <td><a href="#">Seleccionar</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <br>
                    </div>
                </div>
                <div class="card-header">
                    <h3 class="card-title">Dados da Subconta associada a Conta</h3>
                    <br>
                    <div class="card-body p-0">
                        <table class="table table-striped">
                             <thead>
                                <tr>
                                    <th>Nº de Subconta</th>
                                    <th>Nome</th>
                                    <th>Saldo</th>
                                    <th>Acção</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>00075136AMB89</td>
                                    <td><a href="#" class="">Delton</a></td>
                                    <td>18736 Nl</td>
                                    <td><a href="#" data-toggle="modal" data-target="#modal-lg">Editar</a></td>
                                </tr>
                                <tr>
                                    <td>00975136AMB89</td>
                                    <td><a href="#" class="">Delton</a></td>
                                    <td>18736 Nl</td>
                                    <td><a href="#">Editar</a></td>
                                </tr>
                                <tr>
                                    <td>00975136AMB89</td>
                                    <td><a href="#" class="">Delton</a></td>
                                    <td>18736 Nl</td>
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
            <h4 class="modal-title">Atualizar Subconta</h4>
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
                                <input type="text" class="form-control" placeholder="Nº da Conta" disabled="true">    
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Nome da Conta" disabled="true">     
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Nº da Subconta" disabled="true">    
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Saldo da Suconta" disabled="true">     
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Nome de Subconta">    
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="phone" id="phonenumber" placeholder="(+244) 923 XXX XXX XXX">
                                </div>     
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="password" class="form-control" placeholder=" Senha">    
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="password" class="form-control" placeholder=" Confirmar Senha ">    
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