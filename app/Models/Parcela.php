<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property float $NU_PRODUTO
 * @property float $NU_CONTRATO
 * @property float $NU_PARCELA
 * @property string $DT_PARCELA
 * @property float $VR_PARCELA
 * @property float $VR_AMORTIZACAO
 * @property float $VR_JUROS
 */

class Parcela extends Model
{
    public $timestamps = false;
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'c131543.dbo.GAPTB002_PARCELAS';

    /**
     * @var array
     */
    protected $fillable = ['NU_PRODUTO', 'NU_CONTRATO', 'NU_PARCELA', 'DT_PARCELA', 'VR_PARCELA', 'VR_AMORTIZACAO', 'VR_JUROS'];
}
