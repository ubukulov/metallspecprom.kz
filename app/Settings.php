<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $table = 'settings';

    protected $fillable = [
        'top_contact_sells', 'director_contact', 'email', 'created_at', 'updated_at'
    ];
}
