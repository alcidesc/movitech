<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticias extends Model
{
    use HasFactory;
    protected $table='noticias';

    protected $primaryKey='id';

    public $timestamps='true';

    protected $fillable=[
        'nombre',
        'descripcion',
        'slug',
        'estado',
        'foto',
    ];

}
