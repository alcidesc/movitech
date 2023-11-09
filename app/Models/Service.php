<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table='services';

    protected $primaryKey='id';

    public $timestamps='true';

    protected $fillable=[
        'nombre',
        'descripcion',
        'slug',
        'codigo',
        'precio',
        'precio2',
        'precio3',
        'oferta',
        'iva',
        'estado',
        'foto',
    ];
}
