<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori_artikel extends Model
{
     protected $fillable = [
        'nama', 'user_id'
    ];

    protected $casts=[
    ];
}
