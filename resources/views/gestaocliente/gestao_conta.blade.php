@extends('adminlte::page')
@section('title', 'Gestão de Conta')

@section('content')
<!--Conteudo da Página começa do Container-->
<div class="container">

    <!-- Criar uma linha, para devidir em dois grupos-->
    <div class="row">
        <!--Começa o primeiro Bloco do grupo de divisão-->
        <div class="col-md-6">
            <!--Começa o Criar e Atualizar Perfil-->
            <div class="card">
                <form action="{{route('gestao_conta')}}" method="get" accept-charset="utf-8">
                <div class="card-header">
                    <h3 class="card-title">Criar Conta</h3>
                    <br><br>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder=" Nome" required>    
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder=" Apelido " required>    
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="phone" id="phonenumber" placeholder="(+244) 923 XXX XXX XXX">
                                </div>    
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Email" required>
                                </div>    
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <h3 class="card-title">Género:</h3>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio">
                                        <label for="customRadio1" class="custom-control-label">Masculino</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio" checked="">
                                        <label for="customRadio2" class="custom-control-label">Feminino</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                                <input type="password" class="form-control" placeholder="Senha" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confirmar senha" required>
                        </div>
                      
                    </div>
                    <div class="row">
                        <br>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                               <!--Adicionamos espaço vazio, para movimentar os botões a esquerda-->
                           </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                               <button type="button" class="btn btn-block btn-primary radius" data-toggle="modal" data-target="#modal-lg">Salvar</button>
                            </div>

                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <button type="button" class="btn btn-block btn-success swalDefaultSuccess radius">Atualizar</button>
                            </div>
                        </div>
                    <div class="row">
                        <br><br>
                    </div>
                </div>
                <!-- /.card-header -->

                <!-- /.card-body -->

                <!-- /.card-footer-->
            </div>
            </form>
        </div>
        <!--/.direct-Termina a Primeira Coluna -->
        </div>
        <div class="col-md-6">
            <!--Começa o Criar e Atualizar Perfil-->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Actualizar Conta</h3>
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
                                    <th>Estado</th>
                                    <th>Acção</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>00975136AMB85</td>
                                    <td><a href="#" class="">Delton</a></td>
                                    <td>Ativa</td>
                                    <td><a href="#">Seleccionar</a></td>
                                </tr>
                                <tr>
                                    <td>00975136AMB84</td>
                                    <td><a href="#" class="">Da Cruz</a></td>
                                    <td>Desactiva</td>
                                    <td><a href="#">Seleccionar</a></td>
                                </tr>
                                <tr>
                                    <td>00975136AMB83</td>
                                    <td><a href="#" class="">Elner</a></td>
                                    <td>Desactiva</td>
                                    <td><a href="#">Seleccionar</a></td>
                                </tr>
                                <tr>
                                    <td>00975136AMB82</td>
                                    <td><a href="#" class="">Elias</a></td>
                                    <td>Ativa</td>
                                    <td><a href="#">Seleccionar</a></td>
                                </tr>
                                <tr>
                                    <td>00975136AMB81</td>
                                    <td><a href="#" class="">Nunes</a></td>
                                    <td>Ativa</td>
                                    <td><a href="#">Seleccionar</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <br>
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
    <div class="modal fade" id="modal-lg" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Large Modal</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <p>One fine body…</p>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
</div>
<!--Fim Container-->
@endsection