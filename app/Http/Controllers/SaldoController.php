<?php

namespace App\Http\Controllers;

use App\Models\Saldo;
use Illuminate\Http\Request;

class SaldoController extends Controller
{
    public function filtraSaldo($nuProduto, $nuContrato)
    {
        $saldos = Saldo::where(['NU_PRODUTO' => $nuProduto, 'NU_CONTRATO' => $nuContrato])
            ->get();
        if (count($saldos) > 0) {
            return view('saldos.index', compact('saldos'));
        }
        return response(404);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Saldo $saldo)
    {
        $saldos = Saldo::all();

        return view('saldos.index', compact('saldos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Saldo  $saldo
     * @return \Illuminate\Http\Response
     */
    public function edit(Saldo $saldo)
    {
        return view('saldos.edit', compact('saldo'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Saldo  $saldo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Saldo $saldo)
    {
        $request->validate([
            'NU_PRODUTO' => 'required',
            'NU_CONTRATO' => 'required',
            'NU_SALDO' => 'required',
            'DT_SALDO' => 'required',
            'VR_SALDO' => 'required'
        ]);
        Saldo::where(['NU_PRODUTO' => $request->NU_PRODUTO, 'NU_CONTRATO' => $request->NU_CONTRATO, 'NU_SALDO' => $request->NU_SALDO])
            ->update(['VR_SALDO' =>  $request->VR_SALDO]);

        return redirect()->action('App\Http\Controllers\SaldoController@filtraSaldo', [$request->NU_PRODUTO, $request->NU_CONTRATO])
            ->with('success', 'Saldo atualizado com sucesso!');
    }
}
