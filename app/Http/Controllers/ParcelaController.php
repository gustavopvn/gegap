<?php

namespace App\Http\Controllers;

use App\Models\Parcela;
use Illuminate\Http\Request;

class ParcelaController extends Controller
{
    public function filtraParcela($nuProduto, $nuContrato)
    {
        $parcelas = Parcela::where(['NU_PRODUTO'=> $nuProduto, 'NU_CONTRATO'=> $nuContrato])
                                ->get();
        
        if (count($parcelas)>0) {
            return view('parcelas.index', compact('parcelas'));
        }
        return response(404);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parcela  $parcela
     * @return \Illuminate\Http\Response
     */
    public function edit(Parcela $parcela)
    {
        return view('parcelas.edit', compact('parcela'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Parcela  $parcela
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Parcela $parcela)
    {
        $request->validate([
            'NU_PRODUTO' => 'required',
            'NU_CONTRATO' => 'required',
            'NU_PARCELA' => 'required',
            'DT_PARCELA' => 'required',
            'VR_PARCELA' => 'required',
            'VR_AMORTIZACAO' => 'required',
            'VR_JUROS' => 'required'
        ]);
        
        Parcela::where(['NU_PRODUTO'=> $request->NU_PRODUTO, 'NU_CONTRATO'=> $request->NU_CONTRATO, 'NU_PARCELA' => $request->NU_PARCELA])
                ->update(['VR_PARCELA' =>  $request->VR_PARCELA, 'VR_AMORTIZACAO' =>  $request->VR_AMORTIZACAO, 'VR_JUROS' =>  $request->VR_JUROS]);

        return redirect()->action('App\Http\Controllers\ParcelaController@filtraParcela', [$request->NU_PRODUTO, $request->NU_CONTRATO])
            ->with('success', 'Saldo atualizado com sucesso!');
    }
}
