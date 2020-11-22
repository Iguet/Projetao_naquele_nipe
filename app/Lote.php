<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lote extends Model
{
    use HasFactory;

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = [
        'lote',
        'produto_id',
        'quantidade',
        'valor_unitario',
        'valor_total',
        'data_chegada',
        'data_vencimento'
    ];

    public function produto()
    {
        return $this->belongsTo('App\Produto');
    }
}
