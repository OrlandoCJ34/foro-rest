<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Topic extends Model
{
    protected $fillable = [
        'title', 'user_id',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
