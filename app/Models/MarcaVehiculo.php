<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MarcaVehiculo
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Vehiculo[] $vehiculos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MarcaVehiculo extends Model
{
    use SoftDeletes;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehiculos()
    {
        return $this->hasMany(\App\Models\Vehiculo::class, 'id', 'marca_vehiculos_id');
    }

}
