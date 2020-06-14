@extends('adminlte::page')
@section('title', 'Histórico de Transações')

@section('content')
<!--Conteudo da Página começa do Container-->
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>1,5 Mil</h3>
                    <p>Nº Transações</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>

                    <p>Transferência</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>30<sup style="font-size: 20px">%</sup></h3>
                    <p>Entrada de Valores</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>17<sup style="font-size: 20px">%</sup></h3>
                    <p>Pagamento de Serviços</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- Criar uma linha, para devidir em dois grupos-->
    <div class="row">
        <!--Começa o primeiro Bloco do grupo de divisão-->
        <div class="col-md-12">
            <!-- DIRECT CHAT -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Histórico de Transação</h3>
                    <br><br>
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="Seleccionar Tipo Operação, Data, Valor transação">
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
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">X1754C5</a></td>
                                    <td><a href="#">00975136AMB85</a></td>
                                    <td><a href="#">00975136AMB88</a></td>
                                    <td>97513 Nl</td>                                    
                                    <td>Transferencia</td>
                                    <td>2020-06-14</td>
                                </tr>
                                <tr>
                                    <td><a href="#">X1754C7</a></td>
                                    <td><a href="#">00975136AMB85</a></td>
                                    <td><a href="#">00975136AMB88</a></td>
                                    <td>97513 Nl</td>                                    
                                    <td>Transferencia</td>
                                    <td>2020-06-14</td>
                                </tr>
                                <tr>
                                    <td><a href="#">X1754C8</a></td>
                                    <td><a href="#">00975136AMB85</a></td>
                                    <td><a href="#">00975136AMB88</a></td>
                                    <td>97513 Nl</td>                                    
                                    <td>Entrada de Valor</td>
                                    <td>2020-06-14</td>
                                </tr>
                                <tr>
                                    <td><a href="#">X1754C9</a></td>
                                    <td><a href="#">00975136AMB85</a></td>
                                    <td><a href="#">00975136AMB88</a></td>
                                    <td>97513 Nl</td>                                    
                                    <td>Retirada de Valor</td>
                                    <td>2020-06-14</td>
                                </tr>
                                <tr>
                                    <td><a href="#">X1754A5</a></td>
                                    <td><a href="#">00975136AMB85</a></td>
                                    <td><a href="#">00975136AMB88</a></td>
                                    <td>97513 Nl</td>                                    
                                    <td>Pagamento de Serviços</td>
                                    <td>2020-06-14</td>
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

</div>
<!--Fim Container-->
@endsection