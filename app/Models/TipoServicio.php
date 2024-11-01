<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TipoServicio
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Servicio[] $servicios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoServicio extends Model
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
    public function servicios()
    {
        return $this->hasMany(\App\Models\Servicio::class, 'id', 'tipo_servicios_id');
    }
    
}
