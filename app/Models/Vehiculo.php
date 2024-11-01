<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Vehiculo
 *
 * @property $id
 * @property $modelo
 * @property $color
 * @property $marca_vehiculos_id
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property MarcaVehiculo $marcaVehiculo
 * @property Servicio[] $servicios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vehiculo extends Model
{
    use SoftDeletes;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['modelo', 'color', 'marca_vehiculos_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function marcaVehiculo()
    {
        return $this->belongsTo(\App\Models\MarcaVehiculo::class, 'marca_vehiculos_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function servicios()
    {
        return $this->hasMany(\App\Models\Servicio::class, 'id', 'vehiculo_id');
    }
    
}
