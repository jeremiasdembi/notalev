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
                    <h3 class="card-title">Histórico de Transferências</h3>
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
                                    <th>Conta de Origem</th>
                                    <th>Conta de Destino</th>
                                    <th>Valor Transferido</th>
                                    <th>Data e Hora</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>00975136AMB89</td>
                                    <td><a href="#" class="">Delton</a></td>
                                    <td>18736 Nl</td>
                                    <td><a href="#">Seleccionar</a></td>
                                </tr>
                                <tr>
                                    <td>00975136AMB89</td>
                                    <td><a href="#" class="">Delton</a></td>
                                    <td>18736 Nl</td>
                                    <td><a href="#">Seleccionar</a></td>
                                </tr>
                                <tr>
                                    <td>00975136AMB89</td>
                                    <td><a href="#" class="">Delton</a></td>
                                    <td>18736 Nl</td>
                                    <td><a href="#">Seleccionar</a></td>
                                </tr>
                                <tr>
                                    <td>00975136AMB89</td>
                                    <td><a href="#" class="">Delton</a></td>
                                    <td>18736 Nl</td>
                                    <td><a href="#">Seleccionar</a></td>
                                </tr>
                                <tr>
                                    <td>00975136AMB89</td>
                                    <td><a href="#" class="">Delton</a></td>
                                    <td>18736 Nl</td>
                                    <td><a href="#">Seleccionar</a></td>
                                </tr>
                                <tr>
                                    <td>00975136AMB89</td>
                                    <td><a href="#" class="">Delton</a></td>
                                    <td>18736 Nl</td>
                                    <td><a href="#">Seleccionar</a></td>
                                </tr>
                                    <td>00075136AMB89</td>
                                    <td><a href="#" class="">Delton</a></td>
                                    <td>18736 Nl</td>
                                    <td><a href="#">Seleccionar</a></td>
                                </tr>
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
        </div>
        <!--/.direct-Termina a Primeira Coluna -->
        </div>
        <div class="col-md-6">
            <!--Começa o Criar e Atualizar Perfil-->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Adicionar e Retirar NotaLev a Subconta</h3>
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
                                    <th>Conta de Origem</th>
                                    <th>Nome</th>
                                    <th>Seleccionar</th>
                                    <th>Seleccionar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>00975136AMB89</td>
                                    <td>Delton</td>
                                    <td><a href="#" class="">conta origem</a></td>
                                    <td><a href="#">conta destino</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <br>
                    </div>
                </div><div class="card-header">
                    <h3 class="card-title">Dados para a Subconta</h3>
                    <br><br>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder=" Número da conta de Origem">    
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder=" Saldo da conta de Origem ">    
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder=" Número da conta de Destino">    
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder=" Saldo da conta de Destino ">    
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder=" Valor a adicionar em Kwanza">    
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder=" Equivalente em NotaLev ">    
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="password" class="form-control" placeholder=" Código de Confirmação">    
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="password" class="form-control" placeholder=" Confirmar Código ">    
                            </div>
                        </div>
                        <!--<div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder=" Número da conta de Origem">    
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder=" Saldo da conta de Origem ">    
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder=" Valor a adicionar em Kwanza">    
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder=" Equivalente em NotaLev ">    
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="password" class="form-control" placeholder=" Código de Confirmação">    
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="password" class="form-control" placeholder=" Confirmar Código ">    
                            </div>
                        </div>-->
                    </div>
                    <div class="row">
                        <br>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                               <!--Adicionamos espaço vazio, para movimentar os botões a esquerda-->
                           </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                               <button type="button" class="btn btn-block btn-primary radius">Transferir</button>
                            </div>

                        </div>
                        <!--<div class="col-sm-3">
                            <div class="form-group">
                                <button type="button" class="btn btn-block btn-success radius">Atualizar</button>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <button type="button" class="btn btn-block btn-danger radius">Eliminar</button>
                            </div>
                        </div>-->
                    <div class="row">
                        <br><br>
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

</div>
<!--Fim Container-->
@endsection