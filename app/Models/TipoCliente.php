<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCliente extends Model
{
    use HasFactory;
    
    protected $table = 'tipo_cliente';

    protected $fillable = [
        'tipo_cliente_codigo', 'tipo_cliente_descripcion'
    ];
}
