<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'stext',
        'stype',
        'force_answer',
        'image_url',
        'video_url'
    ];

    public function questionnair()
    {
        return $this->belongsTo('App\Models\Questionnair');
    }


}
