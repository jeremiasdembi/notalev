@extends('adminlte::page')
@section('title', 'Finalizar Validação')

@section('content')
<!--Conteudo da Página começa do Container-->
<div class="container">

    <!-- Criar uma linha, para devidir em dois grupos-->
    <div class="row">
        <!--Começa o primeiro Bloco do grupo de divisão-->
        <div class="col-md-12">
            <!--Começa o Criar e Atualizar Perfil-->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Finalizar Validação e Operação</h3>
                    <br><br>
                    <div class="card-body p-0">
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
                                <input type="text" class="form-control" placeholder=" Valor a Transacionar em Kz">    
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder=" Equivalente NOTALEV">    
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder=" Tipo Operação">    
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder=" Data hora">    
                            </div>
                        </div>
                        
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
                        <div class="col-sm-2">
                            <div class="form-group">
                               <button type="button" class="btn btn-block btn-primary radius">Validar</button>
                            </div>

                        </div>
                        <!--<div class="col-sm-2">
                            <div class="form-group">
                                <button type="button" class="btn btn-block btn-danger radius">Eliminar</button>
                            </div>
                        </div>-->
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