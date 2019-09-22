@extends('layouts.main')

@section('content')
<div class="container mb-3" style="margin-top:100px!important;">
        <div class="row">
            @include('layouts.menu')
            
            <div class="col-12 col-sm-12 col-md-8 col-lg-6 bg-light border border-dark rounded mt-2 py-2">
                <div class="container ">
                    <form class="mx-auto text-dark " style="width: auto;" action="{{ url('/cadastro/conta/save') }}" method="post">
                        {{ csrf_field() }}
                        <div class="container text-center  mt-3">
                            <h5>Cadastre sua conta</h5>
                        </div>
                        
                        <div class="dropdown-divider"></div>
                        
                        <div class="form-group">
                            <label for="exampleInputCpf">Código da conta</label>
                            <input type="number" class="form-control" id="tituloconta" placeholder="" name="codigo" onkeypress="return SomenteNumero(event)" maxlength="3" required>
                            <small class="text-danger">O código 001 é reservado para o saldo inicial*</small>
                            <small class="text-danger">O código 999 é reservado para o saldo final*</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCpf">Título da conta</label>
                            <input type="text" class="form-control" id="tituloconta" placeholder="Ex.: Conta de luz" name="titulo" required>
                        </div>
                        <div class="form-group">
                            <label for="tipoConta">Selecionar tipo de conta</label>
                            <select class="form-control" name="tipo" required>
                                <option value="1">Receita</option>
                                <option value="2">Despesa</option>
                            </select>
                        </div>
                        <div>
                            <div class="form-group">
                                <label for="descricaodaConta">Descrição da conta (opcional)</label>
                                <textarea class="form-control" id="descricaoConta" rows="5" name="descricao" ></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-scfo2 float-right mt-3 btn-md col-">Cadastrar conta</button>
                        <a href="logado.php">
                            <button type="button" class="btn btn-scfo2 mt-3 btn-md col-">Cancelar</button>
                        </a>

                    </form>
                </div>
            </div>
        </div>
    </div>
@stop