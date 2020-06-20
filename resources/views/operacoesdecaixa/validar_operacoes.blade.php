@extends('adminlte::page')
@section('title', 'Validar Operações')

@section('content')
<!--Conteudo da Página começa do Container-->
<div class="container">
    <!-- Criar uma linha, para devidir em dois grupos-->
    <div class="row">
        <!--Começa o primeiro Bloco do grupo de divisão-->
        <div class="col-md-12">
            <!-- DIRECT CHAT -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Validar Transação</h3>
                    <br><br>
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="Seleccionar Conta">
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
                                    <th>Código Transação</th>
                                    <th>Conta de Origem</th>
                                    <th>Conta de Destino</th>
                                    <th>Valor Transacionado</th>
                                    <th>Tipo de Operação</th>
                                    <th>Data e Hora</th>
                                    <th>Acção</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">X1754C5</a></td>
                                    <td><a href="#">00975136AMB85</a></td>
                                    <td><a href="#">00975136AMB88</a></td>
                                    <td>97513 Nl</td>                                    
                                    <td>Pagamaneto de Serviço</td>
                                    <td>2020-06-14</td>
                                    <td><a href="#" data-toggle="modal" data-target="#modal-lg">Validar</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#">X1754C7</a></td>
                                    <td><a href="#">00975136AMB85</a></td>
                                    <td><a href="#">00975136AMB88</a></td>
                                    <td>97513 Nl</td>                                    
                                    <td>Carregamento de Saldo</td>
                                    <td>2020-06-14</td>
                                    <td><a href="#">Validar</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#">X1754C8</a></td>
                                    <td><a href="#">00975136AMB85</a></td>
                                    <td><a href="#">00975136AMB88</a></td>
                                    <td>97513 Nl</td>                                    
                                    <td>Entrada de Valor</td>
                                    <td>2020-06-14</td>
                                    <td><a href="#">Validar</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#">X1754C9</a></td>
                                    <td><a href="#">00975136AMB85</a></td>
                                    <td><a href="#">00975136AMB88</a></td>
                                    <td>97513 Nl</td>                                    
                                    <td>Retirada de Valor</td>
                                    <td>2020-06-14</td>
                                    <td><a href="#">Validar</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#">X1754A5</a></td>
                                    <td><a href="#">00975136AMB85</a></td>
                                    <td><a href="#">00975136AMB88</a></td>
                                    <td>97513 Nl</td>                                    
                                    <td>Retirada</td>
                                    <td>2020-06-14</td>
                                    <td><a href="#">Validar</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br><br>
                <!-- /.card-header -->

                <!-- /.card-body -->

                <!-- /.card-footer-->
                </div>
            <!--/.direct-chat -->

            <!--Termina o Criar e Atualizar Perfil-->
            <!-- /.col -->
            <!--Começa o Listar Perfil-->
            <!--Começa o primeiro Bloco do grupo de divisão-->
            </div>
            <!--Termina o Listar Perfil-->
            <!-- /.col -->
        
        </div>
        

    </div>
    <!-- Pop UP Model-->
    <div class="modal fade" id="modal-lg" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <form action="" method="">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Finalizar Validação de Transação</h4>
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
                                <input type="text" class="form-control" placeholder=" Número de Conta" disabled>    
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder=" Nome" disabled>    
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder=" Valor a Transacionar em Kz">    
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder=" Equivalente NOTALEV" disabled>    
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder=" Tipo Operação" disabled>    
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder=" Data hora" disabled>    
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
            <button type="button" class="btn btn-success">Validar Operação</button>
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