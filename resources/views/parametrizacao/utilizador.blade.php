@extends('adminlte::page')
@section('title', 'Gerir Utilizador')

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
                    <h3 class="card-title">Criar Utilizador</h3>
                    <br><br>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder=" Nome ">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nome utlizador">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="senha">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nome do Perfil">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Número de conta Notalev">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Número de identificação ppessoal">
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Selecionar perfil</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Funcionalidade</th>
                                    <th>Acção</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Update software</td>
                                    <td><a href="#" class="linkTableRemover">Remover</a></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Clean database</td>
                                    <td><a href="#" class="linkTableRemover">Remover</a></td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Cron job running</td>
                                    <td><a href="#" class="linkTableRemover">Remover</a></td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Fix and squish bugs</td>
                                    <td><a href="#" class="linkTableRemover">Remover</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <br><br>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                               <!--Adicionamos espaço vazio, para movimentar os botões a esquerda-->
                           </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                               <button type="button" class="btn btn-block btn-primary radius">Salvar</button>
                            </div>
                        </div>
                        <div class="col-sm-3">
                        <div class="form-group">
                           <button type="button" class="btn btn-block btn-success radius">Atualizar</button>
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
                    <h3 class="card-title">Actualizar Perfil</h3>
                    <br><br>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Pesquisar Perfil">
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
                                    <th style="width: 10px">#</th>
                                    <th>Funcionalidade</th>
                                    <th>Acção</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Update software</td>
                                    <td><a href="#">Seleccionar</a></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Clean database</td>
                                    <td><a href="#">Seleccionar</a></td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Cron job running</td>
                                    <td><a href="#">Seleccionar</a></td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Fix and squish bugs</td>
                                    <td><a href="#">Seleccionar</a></td>               
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Fix and squish bugs</td>
                                    <td><a href="#">Seleccionar</a></td>               
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Fix and squish bugs</td>
                                    <td><a href="#">Seleccionar</a></td>               
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br><br><br><br><br><br><br><p>  </p>


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