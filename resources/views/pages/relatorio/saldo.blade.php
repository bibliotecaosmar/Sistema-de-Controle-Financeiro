@extends('layouts.main')

@section('content')
<div class="container mb-3" style="margin-top:100px!important;">
        <div class="row">
            @include('layouts.menu')
            <div class="col-12 col-sm-12 col-md-8 col-lg-9 bg-light border border-dark rounded mt-2 py-2">
                <div class="container text-center mt-3 mb-3">
                    <h5>Relatório de saldos</h5>
                </div>
                <div class="dropdown-divider"></div>
                        <div class="container ">
                            <form class="mx-auto text-dark " style="width: auto;" "card-text">
                                <div class="container text-center">
                                    <h5>Saldos</h5>
                                </div>
                                <div class="table-responsive-sm table-responsive-md table-responsive-lg">
                                  <table class="table table-bordered">
                                    <thead class="thead-dark">
                                      <tr>
                                        <th scope="col">Data</th>
                                        <th scope="col">Saldo inicial previsto</th>
                                        <th scope="col">saldo inicial realizado</th>
                                        <th scope="col">Saldo final previsto</th>
                                        <th scope="col">Saldo final realizado</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>05/2018</td>
                                        <td>R$ 1500,00</td>
                                        <td>R$ 1200,00</td>
                                        <td>R$ 2000.00</td>
                                        <td>R$ 2385.50</td>
                                      </tr>
                                    </tbody>
                                  </table>  
                                </div>                       
                            </form>
                        </div>
                <button type="submit" class="btn btn-scfo ml-3 float-right mt-3 btn-md col-">Imprimir relatório</button>
            </div>
        </div>
    </div>
@stop