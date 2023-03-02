<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


// modelo de facturas con los atributos a manipular

class Invoices extends Model
{
    use HasFactory;

    protected $table = 'invoice';

    protected $fillable = [
        'id',
        'fecha_hora',
        'nombre_emisor',
        'nit_emisor',
        'nombre_receptor',
        'nit_receptor',
        'valor_antes_iva',
        'valor_iva',
        'valor_total',
    ];
}
