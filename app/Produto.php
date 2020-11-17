<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = [
        'nome',
        'descricao'
    ];
}
