@extends('adminlte::page')
@section('title', 'Desconto')

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
                    <h3 class="card-title">Cadastrar Novo Desconto</h3>
                    <br><br>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder=" Tipo de Desconto">    
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="tel" class="form-control" placeholder=" Percentual de Desconto ">    
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <select class="form-control">
                                    <option>Tipo de Operação</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <select class="form-control">
                                    <option>Tipo de Conta</option>
                                    <option>option 1</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                </select>
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
                        <div class="col-sm-2">
                            <div class="form-group">
                               <button type="button" class="btn btn-block btn-primary radius">Salvar</button>
                            </div>

                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <button type="button" class="btn btn-block btn-success radius">Atualizar</button>
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

    <div class="row">
        <!--Começa o primeiro Bloco do grupo de divisão-->
        <div class="col-md-12">
            <!--Começa o Criar e Atualizar Perfil-->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Actualizar Desconto</h3>
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
                    <div class="row">
                        <br>
                    </div>
                </div>
                <div class="card-header">
                    <br>
                    <div class="card-body p-0">
                        <table class="table table-striped">
                             <thead>
                                <tr>
                                    <th>Tipo de Desconto</th>
                                    <th>Percentagem</th>
                                    <th>Tipo de Conta</th>
                                    <th>Tipo de Operação</th>
                                    <th>Acção</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><a href="#" class="">100</a></td>
                                    <td>18736 Nl</td>
                                    <td></td>
                                    <td>
                                        <a href="#">Editar </a>
                                        <a href="#" class="linkTableRemover">Remover</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><a href="#" class="">100</a></td>
                                    <td>18736 Nl</td>
                                    <td></td>
                                    <td>
                                        <a href="#">Editar </a>
                                        <a href="#" class="linkTableRemover">Remover</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><a href="#" class="">100</a></td>
                                    <td>18736 Nl</td>
                                    <td></td>
                                    <td>
                                        <a href="#">Editar </a>
                                        <a href="#" class="linkTableRemover">Remover</a>
                                    </td>
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

</div>
<!--Fim Container-->
@endsection