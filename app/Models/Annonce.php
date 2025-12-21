<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    protected $fillable = [
        'message',
        'type',
        'date_expiration',
        'actif',
    ];
}
