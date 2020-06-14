@extends('adminlte::page')
@section('title', 'Ver Associados')

@section('content')
<!--Conteudo da Página começa do Container-->
<div class="container">

    <!-- Criar uma linha, para devidir em dois grupos-->
    <div class="row">
        <!--Começa o primeiro Bloco do grupo de divisão-->
        <div class="col-md-6">
            <!-- DIRECT CHAT -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Rede de Associados de Clientes</h3>
                    <br><br>
                    <div class="form-group">
                        <select class="form-control">
                            <option>Selecionar Forma de Visualização</option>
                            <option>Adicionar Valor</option>
                            <option>Retirar Valor</option>
                        </select>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nº de Conta</th>
                                    <th>Nº Associados</th>
                                    <th>Data Registo</th>
                                    <th>Acção</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#" class="">00975136AMB85</a></td>
                                    <td>50</td>
                                    <td>2020-05-16</td>
                                    <td><a href="#">Seleccionar</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="">00975136AMB85</a></td>
                                    <td>35</td>
                                    <td>2020-05-16</td>
                                    <td><a href="#">Seleccionar</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="">00975136AMB85</a></td>
                                    <td>33</td>
                                    <td>2020-05-16</td>
                                    <td><a href="#">Seleccionar</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="">00975136AMB85</a></td>
                                    <td>23</td>
                                    <td>2020-05-16</td>
                                    <td><a href="#">Seleccionar</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="">00975136AMB85</a></td>
                                    <td>11</td>
                                    <td>2020-05-16</td>
                                    <td><a href="#">Seleccionar</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
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
        <div class="col-md-6">
            <!--Começa o Criar e Atualizar Perfil-->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Adicionar ou Retirar Valor a Subconta</h3>
                    <br><br>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" placeholder=" Número de Conta">    
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" placeholder=" Nome">    
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" placeholder=" Nº de Associados">
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" placeholder=" Nº de Transações Feitas">
                        </div>
                    </div>
                    <label> Lista dos seus associados</label>
                    
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nº de Conta</th>
                                    <th>Nome</th>
                                    <th>Data Registo</th>
                                    <th>Nº Associados</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#" class="">00975136AMB85</a></td>
                                    <td>Delton</td>
                                    <td>2020-05-16</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="">00975136AMB85</a></td>
                                    <td>Delton</td>
                                    <td>2020-05-16</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="">00975136AMB85</a></td>
                                    <td>Delton</td>
                                    <td>2020-05-16</td>
                                    <td>7</td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="">00975136AMB85</a></td>
                                    <td>Delton</td>
                                    <td>2020-05-16</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="">00975136AMB85</a></td>
                                    <td>Delton</td>
                                    <td>2020-05-16</td>
                                    <td>11</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    

                </div>
                <!-- /.card-header -->

                <!-- /.card-body -->

                <!-- /.card-footer-->
            </div>

        <!--/.direct-Termina a Primeira Coluna -->
        
        </div>

    </div>

</div>
<!--Fim Container-->
@endsection