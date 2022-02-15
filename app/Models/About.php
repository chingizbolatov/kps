<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class About extends Model
{
    use Translatable;

    protected $table = 'about';

    protected $fillable = [
        'h3',
        'p',
        'director',
        'director_sign',
        'image_uris'
    ];

    protected $translatable = [
        'h3',
        'p',
        'director'
    ];
}
