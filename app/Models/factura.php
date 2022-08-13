<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Factura
 *
 * @property $id
 * @property $nombreNegocio
 * @property $nitNegocio
 * @property $direccionNegocio
 * @property $nitCliente
 * @property $nombreCliente
 * @property $fechaEmision
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Factura extends Model
{
    
    static $rules = [
		'nombreNegocio' => 'required',
		'nitNegocio' => 'required',
		'direccionNegocio' => 'required',
		'nitCliente' => 'required',
		'nombreCliente' => 'required',
		'fechaEmision' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreNegocio','nitNegocio','direccionNegocio','nitCliente','nombreCliente','fechaEmision'];



}
