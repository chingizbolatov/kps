<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Service extends Model
{
    use Translatable;

    protected $table = 'services';

    protected $fillable = ['title', 'img_uri', 'description', 'features', 'work_flow'];

    protected $translatable = ['title', 'description', 'features', 'work_flow'];
}
