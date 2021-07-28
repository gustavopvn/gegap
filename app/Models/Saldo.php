<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property float $NU_PRODUTO
 * @property float $NU_CONTRATO
 * @property float $NU_SALDO
 * @property string $DT_SALDO
 * @property float $VR_SALDO
 */

class Saldo extends Model
{
    public $timestamps = false;
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'c131543.dbo.GAPTB003_SALDO';

    /**
     * @var array
     */
    protected $fillable = ['NU_PRODUTO', 'NU_CONTRATO', 'NU_SALDO', 'DT_SALDO', 'VR_SALDO'];
}
