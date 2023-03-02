<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// modelo de items de facturas con los atributos a manipular

class ItemsInvoices extends Model
{
    use HasFactory;

    protected $table = 'invoice_items';

    protected $fillable = [
        'id',
        'invoice_id',
        'descripcion',
        'cantidad',
        'valor_unitario',
        'valor_total',
    ];
}
