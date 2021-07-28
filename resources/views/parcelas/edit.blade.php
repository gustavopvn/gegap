@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar Parcela</h2>
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

<form action="{{ route('parcelas.update', $parcela->ID) }}" method="POST">
    @csrf
    @method('PATCH')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Produto:</strong>
                <input type="number" name="NU_PRODUTO" value="{{ $parcela->NU_PRODUTO }}" class="form-control" placeholder="NU_PRODUTO" readonly>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contrato:</strong>
                <input type="number" name="NU_CONTRATO" value="{{ $parcela->NU_CONTRATO }}" class="form-control" placeholder="NU_CONTRATO" readonly>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong># Parcela:</strong>
                <input type="number" name="NU_PARCELA" class="form-control" placeholder="{{ $parcela->NU_PARCELA }}" value="{{ $parcela->NU_PARCELA }}" readonly>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data:</strong>
                <input type="date" name="DT_PARCELA" class="form-control" placeholder="{{ $parcela->DT_PARCELA }}" value="{{ $parcela->DT_PARCELA }}" readonly>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Valor da Parcela (R$):</strong>
                <input type="number" min="0" step="0.01" id="VR_PARCELA" name="VR_PARCELA" class="form-control" placeholder="{{ $parcela->VR_PARCELA }}" value="{{ $parcela->VR_PARCELA }}" readonly>
                <strong>Valor de Juros (R$):</strong>
                <input type="number" min="0" step="0.01" id="VR_JUROS" name="VR_JUROS" class="form-control" placeholder="{{ $parcela->VR_JUROS }}" value="{{ $parcela->VR_JUROS }}">
                <strong>Valor de Amortização (R$):</strong>
                <input type="number" min="0" step="0.01" id="VR_AMORTIZACAO" name="VR_AMORTIZACAO" class="form-control" placeholder="{{ $parcela->VR_AMORTIZACAO }}" value="{{ $parcela->VR_AMORTIZACAO }}">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <br><a class="btn btn-secondary" href="{{ action('App\Http\Controllers\ContratoController@filtraContrato', [$parcela->NU_PRODUTO, $parcela->NU_CONTRATO]) }}" title="Voltar"> Voltar </a>
            <button type="submit" class="btn btn-primary">ATUALIZAR</button>
        </div>
    </div>

</form>
@endsection

