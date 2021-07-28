@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Lista de PARCELAS </h2>
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
        <th># Parcela</th>
        <th>Data</th>
        <th>Valor da Parcela</th>
        <th>Valor de Juros</th>
        <th>Valor de Amortização</th>
        <th>Ações</th>
    </tr>

    @foreach ($parcelas as $parcela)
    <tr>
        <td>{{ $parcela->NU_PRODUTO }}</td>
        <td>{{ $parcela->NU_CONTRATO }}</td>
        <td>{{ $parcela->NU_PARCELA }}</td>
        <td>{{ date('d/m/y', strtotime($parcela->DT_PARCELA)) }}</td>
        <td>{{ number_format($parcela->VR_PARCELA,2,',','.') }}</td>
        <td>{{ number_format($parcela->VR_JUROS,2,',','.') }}</td>
        <td>{{ number_format($parcela->VR_AMORTIZACAO,2,',','.') }}</td>
        <td>
            <form action="{{ route('parcelas.destroy', $parcela->ID) }}" method="POST">
                <a href="{{ route('parcelas.edit', $parcela->ID) }}">
                    <i class="fas fa-edit  fa-lg"></i>

                </a>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <a class="btn btn-secondary" href="{{ action('App\Http\Controllers\ContratoController@filtraContrato', [$parcela->NU_PRODUTO, $parcela->NU_CONTRATO]) }}" title="Voltar"> Voltar </a>
</div>


@endsection