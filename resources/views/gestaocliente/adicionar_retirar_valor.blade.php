@extends('adminlte::page')
@section('title', 'Adicionar e Retirar Valor')

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
                    <h3 class="card-title">Informar a Subconta</h3>
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
                                    <th>Nº de Conta</th>
                                    <th>Nome</th>
                                    <th>Saldo</th>
                                    <th>Acção</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>00975136AMB85</td>
                                    <td><a href="#" class="">Delton</a></td>
                                    <td>97513 Nl</td>
                                    <td><a href="#">Seleccionar</a></td>
                                </tr>
                                <tr>
                                    <td>00975136AMB85</td>
                                    <td><a href="#" class="">Clean database</a></td>
                                    <td>97513Nl</td>
                                    <td><a href="#">Seleccionar</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <label for="">Subcontas Associadas a Conta</label>
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
                                    <td>00975136AMB85</td>
                                    <td><a href="#" class="">Delton</a></td>
                                    <td>97513 Nl</td>
                                    <td><a href="#">Seleccionar</a></td>
                                </tr>
                                <tr>
                                    <td>00975136AMB85</td>
                                    <td><a href="#" class="">Clean database</a></td>
                                    <td>97513 Nl</td>
                                    <td><a href="#">Seleccionar</a></td>
                                </tr>
                                <tr>
                                    <td>00975136AMB85</td>
                                    <td><a href="#" class="">Clean database</a></td>
                                    <td>97513 Nl</td>
                                    <td><a href="#">Seleccionar</a></td>
                                </tr>
                                <tr>
                                    <td>00975136AMB85</td>
                                    <td><a href="#" class="">Clean database</a></td>
                                    <td>97513 Nl</td>
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
                    <div class="form-group">
                        <select class="form-control">
                            <option>Selecionar Operação a Realizar (Retirar ou Adicionar)</option>
                            <option>Adicionar Valor</option>
                            <option>Retirar Valor</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" placeholder=" Nome da Subconta">    
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" placeholder=" Saldo actual da Subconta">    
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" placeholder=" Valor em Kwanza">
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" placeholder=" Equivalente em Notalev">
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
                               <button type="button" class="btn btn-block btn-primary radius">Confirmar</button>
                            </div>
                        </div>
                        
                    </div>

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