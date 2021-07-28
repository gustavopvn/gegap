<?php

namespace App\Http\Controllers;

use App\Models\Contrato;
use Illuminate\Http\Request;

class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function filtraContrato($nuProduto, $nuContrato)
    {
        $contratos = Contrato::where(['NU_PRODUTO'=> $nuProduto, 'NU_CONTRATO'=> $nuContrato])
                                ->get();

        return view('contratos.index', compact('contratos'));
    }
}
