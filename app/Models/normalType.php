<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class normalType extends Model
{
    use HasFactory;
    protected $fillable = [
        'htext',
        'hbigtext',
        'n_id',
        'ntype'
    ];
}
