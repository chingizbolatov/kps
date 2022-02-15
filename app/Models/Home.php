<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Home extends Model
{
    use Translatable;

    protected $table = 'home';

    protected $fillable = [
        'h3',
        'p'
    ];

    protected $translatable = ['h3', 'p'];
}
