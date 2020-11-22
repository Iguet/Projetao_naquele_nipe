<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = [
        'produto_id',
        'valor',
        'quantidade'
    ];

    public function produto()
    {
        return $this->belongsTo('App\Produto');
    }
}
