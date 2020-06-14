@extends('adminlte::page')
@section('title', 'Transação')

@section('content')
<!--Conteudo da Página começa do Container-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!--Começa o Criar e Atualizar Perfil-->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Transferência Interna</h3>
                    <br><br>
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="Procurar Tipo de Operação">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                        <br>
                    <div class="row">
                        <div class="col-md-5"></div>
                        <div class="form-group">
                            <button type="button" class="btn btn-block btn-secondary radius">Processamento</button>
                        </div>
                    </div>
                </div>
                <div class="card-header">
                    <div class="card-body p-0">
                        <table class="table table-striped">
                             <thead>
                                <tr>
                                    <th>Nº Conta</th>
                                    <th>Nome</th>
                                    <th>Valor</th>
                                    <th>Data e Hora</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>00075136AMB89</td>
                                    <td><a href="#" class="">Delton</a></td>
                                    <td>18736 Nl</td>
                                    <td>
                                        <a href="#">Editar </a>
                                        <a href="#" class="linkTableRemover">Remover</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>00975136AMB89</td>
                                    <td><a href="#" class="">Delton</a></td>
                                    <td>18736 Nl</td>
                                    <td>
                                        <a href="#">Editar </a>
                                        <a href="#" class="linkTableRemover">Remover</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>00975136AMB89</td>
                                    <td><a href="#" class="">Delton</a></td>
                                    <td>18736 Nl</td>
                                    <td>
                                        <a href="#">Editar </a>
                                        <a href="#" class="linkTableRemover">Remover</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                            <br><br>
                        <div class="row">
                            <div class="col-md-9"></div>
                            <div class="form-group col-md-3">
                            <label>Saldo Total a Debitar</label><br>
                                <input type="text" class="form-control" placeholder=" Saldo Total a Debitar em Kwanza">
                            </div>
                            <br>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                <!--Adicionamos espaço vazio, para movimentar os botões a esquerda-->
                            </div>
                            </div>
                            <div class="col-sm-3">
                                <button type="button" class="btn btn-block btn-primary radius">Finalizar</button>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <button type="button" class="btn btn-block btn-success radius">Confirmar</button>
                                </div>
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