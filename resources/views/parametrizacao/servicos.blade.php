@extends('adminlte::page')
@section('title', 'Cadastrar Serviços')

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
                    <h3 class="card-title">Cadastrar Entidade</h3>
                    <br><br>
                    <div class="row">
                        <div class="form-group col-md-9">
                            <input type="text" class="form-control" placeholder="Nome da Entidade">
                        </div>
                        <div class="form-group col-md-3">
                            <button type="button" class="btn btn-block btn-primary radius">Salvar</button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Entidade</th>
                                    <th>Remover</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>UNITEL</td>
                                    <td><a href="#" class="linkTableRemover">Remover</a></td>
                                </tr>
                                <tr>
                                    <td>MOVICEL</td>
                                    <td><a href="#" class="linkTableRemover">Remover</a></td>
                                </tr>
                                <tr>
                                    <td>ZAP</td>
                                    <td><a href="#" class="linkTableRemover">Remover</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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
        <div class="col-md-6">
            <!-- DIRECT CHAT -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Produtos e Serviços</h3>
                    <br><br>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Pesquisar Produtos e Serviços">
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
                                    <th>Entidade</th>
                                    <th>Produto</th>
                                    <th>Serviço</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>UNITEL</td>
                                    <td>Update software</td>
                                    <td><a href="#">Seleccionar</a></td>
                                </tr>
                                <tr>
                                    <td>MOVICEL</td>
                                    <td>Clean database</td>
                                    <td><a href="#">Seleccionar</a></td>
                                </tr>
                                <tr>
                                    <td>ZAP</td>
                                    <td>Cron job running</td>
                                    <td><a href="#">Seleccionar</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br><br>
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

    <div class="row">
        <!--Começa o primeiro Bloco do grupo de divisão-->
        <div class="col-md-6">
            <!--Começa o Criar e Atualizar Perfil-->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Cadastrar Serviço</h3>
                    <br><br>
                    <div class="form-group">
                        <select class="form-control">
                            <option>Selecionar Entidade</option>
                            <option>option 2</option>
                            <option>option 3</option>
                            <option>option 4</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nome do Serviço">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                               <button type="button" class="btn btn-block btn-primary radius">Salvar</button>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
        <!--/.direct-Termina a Primeira Coluna -->
        </div>
        <!--Começa o primeiro Bloco do grupo de divisão-->
        <div class="col-md-6">
            <!-- DIRECT CHAT -->
           <!--Começa o Criar e Atualizar Perfil-->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Cadastrar Produto</h3>
                    <br><br>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <select class="form-control">
                                <option>Selecionar Entidade</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <select class="form-control">
                                <option>Selecionar Entidade</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nome do Produto">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                               <button type="button" class="btn btn-block btn-primary radius">Salvar</button>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
        <!--/.direct-chat -->
        </div>
        <!--Termina o Listar Perfil-->
        <!-- /.col -->
    </div>

</div>
<!--Fim Container-->
@endsection