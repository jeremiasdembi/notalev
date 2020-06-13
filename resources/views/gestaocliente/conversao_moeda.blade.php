@extends('adminlte::page')
@section('title', 'Conversão de Moeda')

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
                    <h3 class="card-title">Adicional Valor a Conta</h3>
                    <br><br>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" placeholder=" Valor a Carregar">    
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" placeholder=" Equivalente em Nl">    
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" placeholder=" Referência Bancária">
                        </div>
                        <div class="col-md-6 form-group">
                            <button type="button" class="btn btn-block btn-secondary radius">Enviar Comprovativo</button>  
                        </div>
                    </div>
                   <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Selecionar Banco de Destino</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Selecionar Modelo de Pagamento</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-1">
                            <div class="form-group">
                               <!--Adicionamos espaço vazio, para movimentar os botões a esquerda-->
                           </div>
                        </div>
                        <div class="col-sm-10">
                            <h5><i class="icon fas fa-info"></i> Importante!</h5>
                                <p>Envia o comprovativo de transferência pelo sistema ou via whatsApp pelo número 923 XXX XXX. Precisamos de 7 minutos para confirmarmos a recepção da transferência pelo mesmo banco (BAI, BPC,BFA,SOL e ATLANTICO) e 24 horas para bancos diferentes.</p>
                            
                        </div>
                    </div>
                   
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
        <!--Termina o Criar e Atualizar Perfil-->
        <!-- /.col -->
        <!--Começa o Listar Perfil-->
        <!--Começa o primeiro Bloco do grupo de divisão-->
        <div class="col-md-6">
            <!-- DIRECT CHAT -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Retirar Valor da Conta</h3>
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
                                    <th>Acção</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>00975136AMB85</td>
                                    <td><a href="#" class="">Delton</a></td>
                                    <td><a href="#">Seleccionar</a></td>
                                </tr>
                                <tr>
                                    <td>00975136AMB85</td>
                                    <td><a href="#" class="">Clean database</a></td>
                                    <td><a href="#">Seleccionar</a></td>
                                </tr>
                                <tr>
                                    <td>00975136AMB85</td>
                                    <td><a href="#" class="">Cron job running</a></td>
                                    <td><a href="#">Seleccionar</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <label for="">Informar Dados para finalizar operação</label>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" placeholder=" Valor a Retirar">    
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" placeholder=" Equivalente em Nl">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Selecionar Forma de Levantamento</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder=" Informar o IBAN">
                            </div>
                        </div>
                    </div>
                   
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
        <!--/.direct-chat -->
        </div>
        <!--Termina o Listar Perfil-->
        <!-- /.col -->
    </div>

</div>
<!--Fim Container-->
@endsection