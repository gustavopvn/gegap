<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * @property float $NU_PRODUTO
 * @property float $NU_CONTRATO
 */

class Contrato extends Model
{
    public $timestamps = false;
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'c131543.dbo.GAPTB001_CONTRATOS';

    /**
     * @var array
     */
    protected $fillable = ['ID', 'NU_PRODUTO', 'NU_CONTRATO'];
}
