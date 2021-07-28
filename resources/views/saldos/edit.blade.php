@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar Saldo</h2>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Atenção!</strong> Tem algo errado com os dados.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('saldos.update', $saldo->ID) }}" method="POST">
    @csrf
    @method('PATCH')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Produto:</strong>
                <input type="number" name="NU_PRODUTO" value="{{ $saldo->NU_PRODUTO }}" class="form-control" placeholder="NU_PRODUTO" readonly>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contrato:</strong>
                <input type="number" name="NU_CONTRATO" value="{{ $saldo->NU_CONTRATO }}" class="form-control" placeholder="NU_CONTRATO" readonly>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong># Saldo:</strong>
                <input type="number" name="NU_SALDO" class="form-control" placeholder="{{ $saldo->NU_SALDO }}" value="{{ $saldo->NU_SALDO }}" readonly>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data:</strong>
                <input type="date" name="DT_SALDO" class="form-control" placeholder="{{ $saldo->DT_SALDO }}" value="{{ $saldo->DT_SALDO }}" readonly>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Saldo (R$):</strong>
                <input type="number" min="0" step="0.01" name="VR_SALDO" class="form-control" placeholder="{{ $saldo->VR_SALDO }}" value="{{ $saldo->VR_SALDO }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <br><a class="btn btn-secondary" href="{{ action('App\Http\Controllers\ContratoController@filtraContrato', [$saldo->NU_PRODUTO, $saldo->NU_CONTRATO]) }}" title="Voltar"> Voltar </a>
            <button type="submit" class="btn btn-primary">ATUALIZAR</button>
        </div>
    </div>

</form>
@endsection