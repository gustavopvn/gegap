@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Lista de SALDOS </h2>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered table-responsive-lg">
    <tr>
        <th>Produto</th>
        <th>Contrato</th>
        <th># Saldo</th>
        <th>Data</th>
        <th>Valor</th>
        <th>Ações</th>
    </tr>
    @foreach ($saldos as $saldo)
    <tr>
        <td>{{ $saldo->NU_PRODUTO }}</td>
        <td>{{ $saldo->NU_CONTRATO }}</td>
        <td>{{ $saldo->NU_SALDO }}</td>
        <td>{{ date('d/m/y', strtotime($saldo->DT_SALDO)) }}</td>
        <td>{{ number_format($saldo->VR_SALDO,2,',','.') }}</td>
        <td>
            <form action="{{ route('saldos.destroy', $saldo->ID) }}" method="POST">
                <a href="{{ route('saldos.edit', $saldo->ID) }}">
                    <i class="fas fa-edit  fa-lg"></i>

                </a>


            </form>
        </td>
    </tr>
    @endforeach
</table>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <a class="btn btn-secondary" href="{{ action('App\Http\Controllers\ContratoController@filtraContrato', [$saldo->NU_PRODUTO, $saldo->NU_CONTRATO]) }}" title="Voltar"> Voltar </a>
</div>

@endsection