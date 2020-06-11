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
                        <input type="e-mail" class="form-control" placeholder="email">
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
                        <input type="text" class="form-control" placeholder="Número de identificação pessoal">
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Selecionar perfil</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <br> <br>
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
                    <h3 class="card-title">Actualizar utilizador</h3>
                    <br><br>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Pesquisar Utilizador">
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
                                    <th style="width: 30px">#</th>
                                    <th>Codigo Utilizador</th>
                                    <th>Utilizador</th>
                                    <th>Selecionar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> </td>
                                    <td>001</td>
                                    <td>Delton Agostinho </td>
                                    <td><a href="#">Selecionar</a></td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td>002</td>
                                    <td>Hugo Paulo </td>
                                    <td><a href="#">Selecionar</a></td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td>003</td>
                                    <td> Milagres Baptista</td>
                                    <td><a href="#">Selecionar</a></td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td>004</td>
                                    <td> Joydi Nunes </td>
                                    <td><a href="#">Selecionar</a></td>               
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td>005</td>
                                    <td> Fernando Raimundo</td> 
                                    <td><a href="#">Selecionar</a></td>
                                                  
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td>006</td>
                                    <td>Jeremias Dembi</td>
                                    <td><a href="#"> Selecionar</a></td>  
                                                 
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br><br><br><br><br><br><br>


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