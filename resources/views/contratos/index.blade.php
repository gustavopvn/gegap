@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Lista de CONTRATOS </h2>
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
        <th>Links</th>
    </tr>
    @foreach ($contratos as $contrato)
    <tr>
        <td>{{ $contrato->NU_PRODUTO }}</td>
        <td>{{ $contrato->NU_CONTRATO }}</td>
        <td>
            <a class="btn btn-info" href="http://localhost:8000/produtos/{{ $contrato->NU_PRODUTO }}/contratos/{{ $contrato->NU_CONTRATO}}/saldos">
                Saldos
            </a>
            <a class="btn btn-info" href="http://localhost:8000/produtos/{{ $contrato->NU_PRODUTO }}/contratos/{{ $contrato->NU_CONTRATO}}/parcelas">
                Parcelas
            </a>
        </td>
    </tr>
    @endforeach
</table>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <a class="btn btn-secondary" href="/" title="Voltar"> Voltar </a>
</div>


@endsection