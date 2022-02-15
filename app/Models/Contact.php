<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Contact extends Model
{
    use Translatable;
    protected $table = 'contacts_page';

    protected $fillable = [
        'title',
        'description',
        'office_title',
        'office_address',
        'email',
        'phone_1',
        'phone_2'
    ];

    protected $translatable = ['title', 'description', 'office_title', 'office_address'];
}
