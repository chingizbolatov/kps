<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Advantage extends Model
{
    use Translatable;

    protected $table = 'advantages';

    protected $fillable = [
        'title',
        'description'
    ];

    protected $translatable = ['title', 'description'];
}
