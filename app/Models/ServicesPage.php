<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class ServicesPage extends Model
{
    use Translatable;

    protected $table = 'services_page';

    protected $fillable = [
        'id', 'title', 'descr', 'categories', 'btn_text'
    ];

    protected $translatable = [
        'title', 'descr', 'categories', 'btn_text'
    ];
}
