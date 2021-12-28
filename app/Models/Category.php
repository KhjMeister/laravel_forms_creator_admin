<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'img_url'
    ];

    protected $hidden = [
        'active_state',
        'u_id'
    ];

    public function questionnair()
    {
        return $this->hasMany(Questionnair::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
