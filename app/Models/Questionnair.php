<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionnair extends Model
{
    use HasFactory;
    public $timestamps = true;

    protected $fillable = [
        'qname',
        
    ];

    // public function user()
    // {
    //     return $this->belongsTo(User::class,'u_id');
    // }

    public function question()
    {
        return $this->hasMany(Question::class,'q_id');
    }

    // public function category()
    // {
    //     return $this->belongsTo(Category::class,'c_id');
    // }

    // protected $hidden = [
    //     'active_state',
    //     'u_id'
    // ];
}
